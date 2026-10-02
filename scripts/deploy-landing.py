"""Envoie le site dans www/ sur l'hébergement OVH, par SFTP.

Usage :
    python scripts/deploy-landing.py --host ftp.clusterXXX.hosting.ovh.net --user LOGIN
        envoie la page unique de dépannage (dossier landing/) ;
    npm run build:ovh
    python scripts/deploy-landing.py --source dist --host ftp.clusterXXX.hosting.ovh.net --user LOGIN
        envoie le site complet exporté pour OVH (dossier dist/).

Le mot de passe est demandé par scp (OpenSSH) au lancement, sans s'afficher ; il n'est ni stocké ni
écrit nulle part. La connexion est chiffrée (SFTP). Les fichiers du dossier source sont envoyés ou
remplacés : rien d'autre n'est supprimé sur le serveur.
"""

import argparse
import os
import shutil
import subprocess
import sys

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
SOURCES = {"landing": os.path.join(ROOT, "landing"), "dist": os.path.join(ROOT, "dist")}
REMOTE_DIR = "www/"


def main():
    parser = argparse.ArgumentParser(description="Met en ligne le site RG Plomberie sur OVH.")
    parser.add_argument("--source", choices=sorted(SOURCES), default="landing",
                        help="landing (page de dépannage) ou dist (site complet, après npm run build:ovh)")
    parser.add_argument("--host", required=True, help="Serveur SFTP, ex. ftp.cluster129.hosting.ovh.net")
    parser.add_argument("--user", required=True, help="Identifiant FTP / SFTP")
    parser.add_argument("--dry-run", action="store_true", help="Affiche la commande sans rien envoyer")
    args = parser.parse_args()

    scp = shutil.which("scp")
    if not scp:
        sys.exit("scp est introuvable : installez le client OpenSSH de Windows.")

    source = SOURCES[args.source]
    if not os.path.isdir(source):
        sys.exit(f"Dossier {args.source}/ introuvable : lancez d'abord npm run build:ovh.")

    # Fichiers et dossiers du premier niveau, fichiers cachés compris (.htaccess).
    entries = sorted(os.listdir(source))
    if not entries:
        sys.exit(f"Aucun fichier trouvé dans {args.source}/.")

    # Chemins relatifs (lancés depuis le dossier source) : un chemin « C:\… » serait pris pour un serveur par scp.
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
        print(f"  - {name}{'/' if os.path.isdir(os.path.join(source, name)) else ''}")

    if args.dry_run:
        print("\nCommande :", " ".join(command))
        return

    print("\nSaisissez le mot de passe FTP quand il est demandé (rien ne s'affiche pendant la frappe).\n")
    result = subprocess.run(command, cwd=source)
    if result.returncode != 0:
        sys.exit(f"\nL'envoi a échoué (code {result.returncode}).")

    print("\nMise en ligne terminée.")


if __name__ == "__main__":
    main()
