<?php
$controllers = array('home'=>['home','error'],'detaildb'=>['index']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "home": $controller = new HomeController();break;
        case "detaildb": $controller = new DetaildbController();break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
    }else{
        call('home','error');
    }
}else{
    call('home','error');
}
?>