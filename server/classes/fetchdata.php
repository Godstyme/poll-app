<?php
require_once 'dbconnection.php';

class FetchData extends DbConnection {

   public function checkURL($tblName, $polllink) {
      $sql = "SELECT polllink FROM {$tblName} WHERE polllink = :polllink ";
      $query = $this->connection->prepare($sql);
      $exec = $query->execute(array(':polllink'=>$polllink));
      if($query->errorCode() == 0){
         if ($query->rowCount() > 0) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return array('status'=>1,'data'=>$data);
         }else{
            return array('status'=>0);
         } 
      }else {
         return array('status'=>0, 'message'=>$query->errorInfo()); 
      }   
   }

   public function getPollData($tblName,$polllink) {
      $sql = "SELECT * FROM {$tblName} WHERE polllink = :polllink ";
      $query = $this->connection->prepare($sql);
      $exec = $query->execute(array(':polllink'=>$polllink));
      if($query->errorCode() == 0){
         if ($query->rowCount() > 0) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return array('status'=>1,'data'=>$data);
         }else{
            return array('status'=>0,'message'=>'no record found');
         } 
      }else {
         return array('status'=>0, 'message'=>$query->errorInfo()); 
      }   
   }



}






// $data = new FetchData;
// echo json_encode($data->getPollData('questions', '06e92174ddd02153'));






?>