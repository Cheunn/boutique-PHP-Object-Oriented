<?php
    require "Controller.php";
    class ApiController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function detailItem($id){
            $picturesItem = $this->itemsModel->listenerPicturesItem($id);
            $reviewsItem = $this->itemsModel->listenerReviewsItem($id);
            echo json_encode( array("pictures" => $picturesItem,"reviews"=>$reviewsItem) );
        }

        public function searchItem(){
           $sql = "";
           $search = false;
           if(isset($_POST["price"])){  //$_post[price]=valeur 1 and valeur 2
                $sql .= "price BETWEEN ".$_POST["price"]. " AND ";
                $search = true;
            }
           if(isset($_POST["categorie"])){  
                $sql .=" categories_idcategories = ".$_POST["categorie"]." AND ";
                $search = true;
            }
           
            $sql = substr($sql,0,-4);
            //si aucun filtre n'ai demandé 
            if($search == false){
                $sql=1;
            }
            // $sql = "price BETWEEN 20 AND 100";
            $items = $this->itemsModel->select("*","items",$sql);
            echo json_encode($items);
        }

    }