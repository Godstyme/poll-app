<?php 
   require_once 'includes/header.php';
   $data = new FetchData;
   $link = $_GET['polllink'];
   $result = $data->getPollData('questions',$link);
   var_dump($result);
   foreach($result as $row){
      echo $row['polllink'];
   }
// echo json_encode($data->getPollData('questions','c675dab27b0bd8cf'));
?>
      
<?php 
   require_once 'includes/footer.php';
?>