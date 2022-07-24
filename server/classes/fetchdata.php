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

   public function getAllPoll($tblName) {
		$sql = "SELECT * FROM {$tblName} ORDER BY id ";
        $query = $this->connection->prepare($sql);
        $exec = $query->execute();
        
        if($query->errorCode() == 0){
            if ($query->rowCount() > 0) {
                return $query->fetchAll(PDO::FETCH_ASSOC);    
            }else{
                return 0;
            } 
        }else{
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
            return array('status'=>0);
         } 
      }else {
         return array('status'=>0, 'message'=>$query->errorInfo()); 
      }   
   }
}






// $data = new FetchData;
// echo json_encode($data->getPollData('questions','869b882755a63'));






?>