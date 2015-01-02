<?php
require '../bootstrap.php';

if (isset($_GET['data'])){
    $query = $entityManager->createQuery('SELECT c.nombre_cine FROM cines c WHERE c.nombre_cine LIKE :name');
    $query->setParameter('name',$_GET['data']);
    $cines = $query->getResult();
    
    header('content-type: application/json');
    $result = json_encode($cines);
    echo $result;
    exit();
}
?>