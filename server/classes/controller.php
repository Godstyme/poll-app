<?php
require_once 'processrequest.php';
require_once 'insertdata.php';
require_once '../helper/polllink.php';

$processRequest = new ProcessRequest;
$insertData = new InsertData;
// $fetchData = new FetchData;

$time = date('H:i:s');
$date = date('Y-m-d');
$requestingPage = stripslashes($_GET['_mode']);

switch ($requestingPage) {   
   case 'createPollQue':
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $queTitle = $processRequest->processInputData($_POST["queTitle"]);
         $optionA = $processRequest->processInputData($_POST["optionA"]);
         $optionB = $processRequest->processInputData($_POST["optionB"]);
         $optionC = $processRequest->processInputData($_POST["optionC"]);
         $optionD = $processRequest->processInputData($_POST["optionD"]);

         if (empty($queTitle)) {
            $response = array('status'=>0,'input'=>"fname",'message'=>"*Poll Question is required");
         } elseif (empty($optionA)) {
            $response = array('status'=>0,'input'=>"lname",'message'=>"*Option A is required");
         } elseif (empty($optionB)) {
            $response = array('status'=>0,'input'=>"lname",'message'=>"*Option B is required");
         }elseif (empty($optionC)) {
            $response = array('status'=>0,'input'=>"lname",'message'=>"*Option C is required");
         }elseif (empty($optionD)) {
            $response = array('status'=>0,'input'=>"lname",'message'=>"*Option D is required");
         }
          else {
            $link = linkGenerator(8);
            $tblName = "questions";
            $insertResponse = $insertData->createPollQue($tblName,$queTitle,$optionA,$optionB,$optionC,$optionD,$link,$time,$date);
            if ($insertResponse['status']) {
               $response = array('status'=>1,'input'=>"details",'message'=>"You have successfully created a poll..");
            }else {
               $response = array('status'=>0, 'input'=>"details", 'message'=>$insertResponse['message']);
            }
        
         } 
      }
   break;  
   
   default:
      $response=array('status'=>0,'message'=>"Invalid Request, please check what you're doing");
   break;
}

echo json_encode($response);

?>