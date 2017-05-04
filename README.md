# appli_tiresias
pour la configuration:

aller dans : `application/config/database.php` et modifier `$active_group = 'default';` par `$active_group = 'wamp';` pour une connection WAMP.

il est possible que vous soyez obligé de modifier dans `application/config/config.php` la ligne `$config['base_url'] = 'http://local.dev/appli_tiresias';` par `$config['base_url'] = 'http://localhost/project_root_folder';` ou autre chose vous permettant d'accéder à la racine du projet depuis votre serveur.
