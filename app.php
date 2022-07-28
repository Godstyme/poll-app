<?php 
   require_once 'includes/header.php';
$localIP = getHostByName(getHostName());
$ip_address = $_SERVER['REMOTE_ADDR']; 
echo $ip_address;
?>
      
<?php 
   require_once 'includes/footer.php';
?>