<?php
  require_once 'class/class_list.php';

  $page = $_GET['page'];

  $listas = new Listas();
 
  switch($page){
    case "listRSocial":
      $idDepartamento = $_GET['idDepart'];
      echo json_encode($listas->showListRSocial($idDepartamento));
    break;
  }
  
?>