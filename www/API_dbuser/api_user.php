<?php
require_once 'api.php';
   $api= new Api();
 	//mengambil data dari api.php 
   $data= $api->ambil_data();
   $rows=array();
   foreach ($data as $row =>$val)
{
   $rows[]=array('user' => $data[$row]);
}
     echo json_encode($rows);
 
?>