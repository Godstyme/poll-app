<?php 
   require_once 'includes/header.php';
?>
      <section>
         <div class="container pb-5">
            <div class="row pt-2 pb-2">
               <div class="col-lg-4 offset-lg-4 col-md-5 offset-md-4 px-5">
                  <button type="button" class="btn btn-outline-primary mt-5 mb-2 mx-3 btn-sm w-50">
                     <a href="<?php echo SITEURL ?>index.php" class="text-decoration-none text-light">Home</a>
                  </button>
               </div>
               <?php
                  $fetchData = new FetchData;
                  $tblName = "questions";
                  $link = $_GET['polllink'];
                  // $url = $_COOKIE['link'];
                  echo $link;
                  $fetchResponse = $fetchData->getPollData($tblName,$link);
                  if(is_array($fetchResponse)){
                     if(isset($fetchResponse['status'])){
                         '<div class="alert alert-danger">'.print_r($fetchResponse['message']).'</div>';
                     }else {
                         foreach($fetchResponse as $row){



               ?>
               <div class="d-flex align-items-center justify-content-center text-light">
                  <form  method="post" id="vote">
                     <div class="py-4">
                        <article>
                           <?php echo $row['quetitle']?>
                        </article>
                     </div>
                     <div class="d-grid gap-4">
                        <button class="btn btn-outline-primary" type="button"> 
                           <?php echo $row['optiona']?>
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                           <?php echo $row['optionb']?>
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                           <?php echo $row['optionc']?>
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                           <?php echo $row['optiond']?>
                        </button>
                     </div>
                     <div class="mt-4">
                        <label for="exampleInputD" class="form-label">6 votes</label>
                     </div>
                  </form>
               </div>
               <?php }}} ?>
            </div>
         </div>
      </section>
<?php 
   require_once 'includes/footer.php';
?>