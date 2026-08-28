<?php

namespace Tests\Feature;

use Tests\TestCase;

class SitePagesTest extends TestCase
{
    public function test_public_pages_render_successfully(): void
    {
        $pages = [
            '/',
            '/entreprise',
            '/prestations',
            '/prestations/plomberie',
            '/prestations/chauffage',
            '/prestations/climatisation',
            '/prestations/vmc',
            '/realisations',
            '/depannage',
            '/avis',
            '/contact',
            '/mentions-legales',
            '/sitemap.xml',
        ];

        foreach ($pages as $page) {
            $this->get($page)->assertSuccessful();
        }
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $this->from('/contact')
            ->post('/contact', [])
            ->assertRedirect('/contact')
            ->assertSessionHasErrors([
                'name',
                'phone',
                'city',
                'service',
                'message',
                'privacy',
            ]);
    }

    public function test_contact_form_rejects_an_unknown_service(): void
    {
        $this->from('/contact')
            ->post('/contact', [
                'name' => 'Test Client',
                'phone' => '0600000000',
                'city' => 'Lyon',
                'service' => 'service-inconnu',
                'message' => 'Demande de test suffisamment détaillée.',
                'privacy' => '1',
            ])
            ->assertRedirect('/contact')
            ->assertSessionHasErrors('service');
    }

    public function test_honeypot_submission_is_silently_discarded(): void
    {
        $this->from('/contact')
            ->post('/contact', [
                'website' => 'https://spam.example',
            ])
            ->assertRedirect('/contact')
            ->assertSessionHas('success');
    }
}
