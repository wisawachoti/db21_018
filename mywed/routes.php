<?php
$controllers = array('home'=>['home','error'],'detaildb'=>['index'],'offer'=>['index'],
'priceproduct'=>['index','newpriceProduct','addProduct','search','updateForm']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "home": $controller = new HomeController();break;
        case "offer":require_once("models/offer.php");
                     $controller = new offerController();break;
        case "detaildb": $controller = new DetaildbController();break;
        case "priceproduct": require_once("models/priceModels.php");
                             require_once("models/productModels.php");
            $controller = new priceproduct_controller();break;
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