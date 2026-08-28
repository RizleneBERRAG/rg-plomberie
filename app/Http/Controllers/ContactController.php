<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Throwable;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if ($request->filled('website')) {
            return back()->with('success', 'Votre demande a bien été prise en compte.');
        }

        $allowedServices = [
            'plomberie',
            'chauffage',
            'climatisation',
            'vmc',
            'depannage',
            'autre',
        ];

        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:160'],
            'city' => ['required', 'string', 'max:120'],
            'service' => ['required', Rule::in($allowedServices)],
            'message' => ['required', 'string', 'max:3000'],
            'privacy' => ['accepted'],
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'phone.required' => 'Le téléphone est obligatoire.',
            'city.required' => 'La ville est obligatoire.',
            'service.required' => 'Veuillez sélectionner un type de besoin.',
            'message.required' => 'Le message est obligatoire.',
            'privacy.accepted' => 'Vous devez accepter l’utilisation de vos informations pour envoyer la demande.',
            'email.email' => 'L’adresse email n’est pas valide.',
        ]);

        $serviceLabels = [
            'plomberie' => 'Plomberie',
            'chauffage' => 'Chauffage',
            'climatisation' => 'Climatisation',
            'vmc' => 'VMC',
            'depannage' => 'Dépannage urgent',
            'autre' => 'Autre demande',
        ];

        $service = $serviceLabels[$data['service']] ?? $data['service'];

        $html = '
            <div style="font-family: Arial, sans-serif; color: #111; line-height: 1.6;">
                <h2 style="margin-bottom: 18px;">Nouvelle demande depuis le site RG Plomberie</h2>

                <table style="width:100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding:8px 0; font-weight:bold;">Nom :</td>
                        <td style="padding:8px 0;">' . e($data['name']) . '</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0; font-weight:bold;">Téléphone :</td>
                        <td style="padding:8px 0;">' . e($data['phone']) . '</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0; font-weight:bold;">Email :</td>
                        <td style="padding:8px 0;">' . e($data['email'] ?? 'Non renseigné') . '</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0; font-weight:bold;">Ville :</td>
                        <td style="padding:8px 0;">' . e($data['city']) . '</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0; font-weight:bold;">Besoin :</td>
                        <td style="padding:8px 0;">' . e($service) . '</td>
                    </tr>
                </table>

                <hr style="margin:22px 0; border:none; border-top:1px solid #ddd;">

                <h3 style="margin-bottom:10px;">Message :</h3>
                <p style="white-space:pre-line;">' . e($data['message']) . '</p>
            </div>
        ';

        $recipient = config('mail.to.address');

        if (empty($recipient)) {
            return back()
                ->withErrors([
                    'mail' => 'Adresse de réception non configurée. Vérifiez MAIL_TO_ADDRESS dans le fichier .env.'
                ])
                ->withInput();
        }

        try {
            Mail::html($html, function ($message) use ($data, $service, $recipient) {
                $message
                    ->to($recipient)
                    ->subject('Nouvelle demande RG Plomberie - ' . $service);

                if (!empty($data['email'])) {
                    $message->replyTo($data['email'], $data['name']);
                }
            });
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withErrors([
                    'mail' => 'L’envoi n’a pas abouti. Appelez RG Plomberie au 06 27 99 76 46.'
                ])
                ->withInput();
        }

        return back()->with('success', 'Votre demande a bien été envoyée. RG Plomberie vous recontactera rapidement.');
    }
}
