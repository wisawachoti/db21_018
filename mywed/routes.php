<?php
$controllers = array('home'=>['home','error'],
'detaildb'=>['index','search','update','upd','newofferdetail','addofferdetail','un','an','delete','deleteconfirm']
,'offer'=>['index','newOffer','addOffer','search','deleteConfirm'
                    ,'delete','updateForm','update'],
                     'priceproduct'=>['index','newpriceProduct','addProduct','search','updateForms','update','deleteconfirm','delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "home": $controller = new HomeController();break;
        case "offer": require_once("models/OfferModels.php");
                       require_once("models/EmployeeModels.php");
                       require_once("models/CustomerModels.php");
                       $controller = new offerController();break;
        case "detaildb": require_once("models/offerdetailModel.php");
                       require_once("models/productModels.php");
                       require_once("models/OfferModels.php");
                       require_once("models/colorModel.php");
                     $controller = new DetaildbController();break;
        case "priceproduct": require_once("./models/priceModels.php");
                             require_once("./models/productModels.php");
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