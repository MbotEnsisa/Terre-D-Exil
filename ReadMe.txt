=====================================================
*		Terre d'Exil			*
*						*
*		M'BOT TEAM			*
=====================================================


1.Procédure d'installation

- Copier le contenu du git dans le dossier "www" d'un serveur apache.

- Importer la base de données (TerreExil_DB.sql) SQL dans PHPmyAdmin

- Dans les fichiers "profile_template.php","create_profile" et "registre.php" modifier la ligne "$bdd = new PDO('mysql:host=localhost;dbname=TerreExil_DB', 'root', 'TipamEnsisa');" par les identifiants de MySQL.

- Dans le fichier /etc/apache2/sites-available/000-default.conf, ajouter la ligne "ErrorDocument 404 /error_404.php" au-dessus de la ligne "</VirtualHost>"

2. Crédits

Site crée pour la Nuit de l'Info 2016 par la TEAM M'BOT. Tous droits réservés, 2016.
ReadMe rédigé par LETAIF Philippe, LIBERMAN Théo et SUTTER Gaëtan.

Have fun : https://www.youtube.com/watch?v=FPUTI9Hh3wA
