<?php
class DetaildbController{
    public function index(){
        $offerdetailList = offerdetailModel::getAll();
        require_once('views/detaildb/index.php');
    }

    public function search()
    {
        $key = $_GET['key'];
        $offerdetailList = offerdetailModel::search($key);
        require_once('views/detaildb/index.php');
    }

}
?>