<?php
include_once 'dbconfig.php';
        class Api extends DbConfig {
        public function __construct(){
                parent::__construct(); 
        }
                function ambil_data(){
                $id= $_GET['id'];        
                $data=$this->connection->query("SELECT id_tingkat,id_dealer,nama,username from user where id_pengguna=$id");
                if (!$data){
                echo "gagal";
                exit;
                }


                $rows=array();

                while($row=$data->fetch_assoc()){

                $rows[]=$row;
                }
                return $rows;
                }
 
}
 
?>