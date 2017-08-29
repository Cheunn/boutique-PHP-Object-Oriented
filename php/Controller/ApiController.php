<?php
    class ApiController{
        public function detailItem(){
            require "php/Model/ItemsModel.php";		 // charger le fichier PHP
            $dbItem = new ItemsModel();
            $pictureItem = $dbItem -> listenerPictureItem($id);
            //$pictureItem.push($dbItem->listenerReviewsItem($id));
            //echo json_encode($pictureItem);
            $reviewsItem.push($dbItem->listenerReviewsItem($id));
            echo json_encode(array("pictures"=>$pictureItem,"reviews"=>$reviewsItem));
        }
    }