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
         return $query->fetchAll(PDO::FETCH_ASSOC);
         // if ($query->rowCount() > 0) {
         //    $data = $query->fetchAll(PDO::FETCH_ASSOC);
         //    return $data;
         // }else{
         //    return 'no record found';
         // } 
      }else {
         return array('status'=>0, 'message'=>$query->errorInfo()); 
      }   
   }


   public function getVoteSummation($queid) {
      $sql = "SELECT SUM(optiona) + SUM(optionb)+ SUM(optionc)+ SUM(optiond) FROM pollresult WHERE queid = :queid";
      $query = $this->connection->prepare($sql);
      $exec = $query->execute([':queid'=>$queid]);
      if ($query->errorCode() == 0) {
         if ($query->rowCount() > 0) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
         } else {
            return array('status' => 0);
         }
      } else {
         return array('status' => 0, 'message' => $query->errorInfo());
      } 
   }


}






// $data = new FetchData;
// echo json_encode($data->getVoteSummation(8));






?>