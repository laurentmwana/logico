<?php



define('VIEW' , dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('TRAITEMENT' , dirname(__DIR__) . DIRECTORY_SEPARATOR . 'protected' . DIRECTORY_SEPARATOR);
define('SCRIPT' , $_SERVER['SCRIPT_FILENAME'] . DIRECTORY_SEPARATOR);



if(!empty($_GET['url'])){
    $url = $_GET['url'];
} else{
    $url = 'welcome';
}


require VIEW . 'elements' . DIRECTORY_SEPARATOR . 'header.php';
if($url === 'welcome'){
    require VIEW . 'blog' . DIRECTORY_SEPARATOR . 'welcome.php';

} elseif($url === 'convertisseur'){
    require VIEW . 'blog' . DIRECTORY_SEPARATOR . 'convertisseur.php';

} elseif($url === 'contact'){
    require VIEW . 'blog' . DIRECTORY_SEPARATOR . 'contact.php';

} elseif($_SERVER['REDIRECT_STATUS'] > 200 &&  !$url){
    require VIEW . 'error' . DIRECTORY_SEPARATOR . '404.php';

}  else{
    require VIEW . 'error' . DIRECTORY_SEPARATOR . '404.php';

}
require VIEW . 'elements' . DIRECTORY_SEPARATOR . 'footer.php';

