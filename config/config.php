<?php 

define('ROOT', __DIR__.'/');
 
define('BASE_DIR', '/SANFImmo/public/');
define('PATH_VIEWS', ROOT . '../app/views/');
define('PATH_MODELS', ROOT . '../app/models/');

define('DB_DSN','mysql:dbname=sanfimmo_bdd;host=127.0.0.1');
define('DB_USER','root');
define('DB_PASSWORD','');

define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_METHOD', 'index');

//Liste des modules a preciser dans l'url
define('TAB_MODULES', ['admin', 'espace']);
define('DEFAULT_MODULE', 'front');


