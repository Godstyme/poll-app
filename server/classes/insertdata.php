<?php
require_once 'dbconnection.php';

class InsertData extends DbConnection {
   
    public function createPollQue($tblName, $queTitle,$optionA,$optionB,$optionC,$optionD,$pollLink,$time,$date) {
        $sql = "INSERT INTO {$tblName} (quetitle,optiona,optionb,optionc,optiond,polllink,time,date) VALUES(?,?,?,?,?,?,?,?)";

        $query = $this->connection->prepare($sql);
        $exec = $query->execute([$queTitle,$optionA,$optionB,$optionC,$optionD,$pollLink,$time,$date]);
        // $id = $this->connection->lastInsertId();
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        } 
    }

    public function insertVote($ipAddress,$a){
        $sql = "INSERT INTO pollresult (useripaddress,a) VALUES(:useripaddress,:a)";

        $query = $this->connection->prepare($sql);
        $exec = $query->execute([$ipAddress, $a]);

        if ($query->errorCode() == 0) {
            return array('status' => 1);
        } else {
            return array('status' => 0, 'message' => $query->errorInfo());
        } 
    }

}
// $data = new InsertData;
// echo json_encode($data->createPollQue('questions','bbh','Onyibe','gostime@gmail.com','09088','uututu','33',date('H:i:s'),date('Y-m-d')));






?>