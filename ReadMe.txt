=====================================================
*		Terre d'Exil			*
*						*
*		M'BOT TEAM			*
=====================================================


1.Proc�dure d'installation

- Copier le contenu du git dans le dossier "www" d'un serveur apache.

- Importer la base de donn�es (TerreExil_DB.sql) SQL dans PHPmyAdmin

- Dans les fichiers "profile_template.php","create_profile" et "registre.php" modifier la ligne "$bdd = new PDO('mysql:host=localhost;dbname=TerreExil_DB', 'root', 'TipamEnsisa');" par les identifiants de MySQL.

- Dans le fichier /etc/apache2/sites-available/000-default.conf, ajouter la ligne "ErrorDocument 404 /error_404.php" au-dessus de la ligne "</VirtualHost>"

2. Cr�dits

Site cr�e pour la Nuit de l'Info 2016 par la TEAM M'BOT. Tous droits r�serv�s, 2016.
ReadMe r�dig� par LETAIF Philippe, LIBERMAN Th�o et SUTTER Ga�tan.
