"""Envoie la page de dépannage (dossier landing/) dans www/ sur l'hébergement OVH, par SFTP.

Usage :
    python scripts/deploy-landing.py --host ftp.clusterXXX.hosting.ovh.net --user LOGIN

Le mot de passe est demandé par scp (OpenSSH) au lancement, sans s'afficher ; il n'est ni stocké ni
écrit nulle part. La connexion est chiffrée (SFTP). Les fichiers de landing/ sont envoyés ou remplacés :
rien d'autre n'est supprimé sur le serveur.
"""

import argparse
import os
import shutil
import subprocess
import sys

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
SOURCE = os.path.join(ROOT, "landing")
REMOTE_DIR = "www/"


def main():
    parser = argparse.ArgumentParser(description="Met en ligne la page de dépannage RG Plomberie.")
    parser.add_argument("--host", required=True, help="Serveur SFTP, ex. ftp.cluster129.hosting.ovh.net")
    parser.add_argument("--user", required=True, help="Identifiant FTP / SFTP")
    parser.add_argument("--dry-run", action="store_true", help="Affiche la commande sans rien envoyer")
    args = parser.parse_args()

    scp = shutil.which("scp")
    if not scp:
        sys.exit("scp est introuvable : installez le client OpenSSH de Windows.")

    # Fichiers et dossiers du premier niveau, fichiers cachés compris (.htaccess).
    entries = sorted(os.listdir(SOURCE))
    if not entries:
        sys.exit("Aucun fichier trouvé dans landing/.")

    # Chemins relatifs (lancés depuis landing/) : un chemin « C:\… » serait pris pour un serveur par scp.
    command = [
        scp,
        "-r",
        "-P", "22",
        "-o", "StrictHostKeyChecking=accept-new",
        *entries,
        f"{args.user}@{args.host}:{REMOTE_DIR}",
    ]

    print("Envoi dans www/ de :")
    for name in entries:
        print(f"  - {name}{'/' if os.path.isdir(os.path.join(SOURCE, name)) else ''}")

    if args.dry_run:
        print("\nCommande :", " ".join(command))
        return

    print("\nSaisissez le mot de passe FTP quand il est demandé (rien ne s'affiche pendant la frappe).\n")
    result = subprocess.run(command, cwd=SOURCE)
    if result.returncode != 0:
        sys.exit(f"\nL'envoi a échoué (code {result.returncode}).")

    print("\nMise en ligne terminée.")


if __name__ == "__main__":
    main()
