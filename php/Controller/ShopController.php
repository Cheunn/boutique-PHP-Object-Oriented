<?php
class ShopController {
//    public function itemsHome() {
    public function single($id) {
        require "php/Model/ItemsModel.php";		 // charger le fichier PHP
        $dbItem = new ItemsModel();
        $itemHome = $dbItem -> listenerItem($id);

        if(sizeof($itemHome) != 1){
            header("Location: ".HOST.FOLDER."404");
        }else{
            
            require("shop-single.php");
            echo "<script>let idItem =".$itemsHome[0]["iditems"]."; let typePage=1</script>";
        } 
            
        
    }

}

?>