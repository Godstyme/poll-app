<?php
require_once 'includes/header.php';
?>
<section>
   <div class="container pb-5">
      <div class="row pt-2 pb-2">
         <div class="col-lg-4 offset-lg-4 col-md-5 offset-md-4 px-5">
            <a href="<?php echo SITEURL ?>index.php" class="btn btn-outline-primary mt-5 mb-2 mx-3 btn-sm w-50 text-decoration-none text-light">Home</a>
         </div>
         <?php
         $page = $_SERVER['REQUEST_URI'];
         $page = explode("/", $page);
         $page = $page[3];
         // var_dump($page);
         $fetchData = new FetchData;
         $tblName = "questions";
         $fetchResponse = $fetchData->getPollData($tblName, $page);
         // echo json_encode($fetchResponse);
         foreach ($fetchResponse as $row => $val) {
            // echo json_encode($row);
            foreach ($val as $key) {

         ?>

         <div class="d-flex align-items-center justify-content-center text-light">
            <form method="post" id="vote">
               <div class="py-4 d-flex justify-content-center">
                  <article class="w-50 bg-dark">
                     <?php echo $key['quetitle']; ?>
                  </article>
               </div>
               <div class="d-grid gap-4">
                  <button class="btn btn-outline-primary" type="button">
                     <?php echo $key['optiona'] ?>
                  </button>
                  <button class="btn btn-outline-primary" type="button">
                     <?php echo $key['optionb'] ?>
                  </button>
                  <button class="btn btn-outline-primary" type="button">
                     <?php echo $key['optionc'] ?>
                  </button>
                  <button class="btn btn-outline-primary" type="button">
                     <?php echo $key['optiond'] ?>
                  </button>
               </div>
               <div class="mt-4">
                  <label for="exampleInputD" class="form-label">6 votes</label>
               </div>
            </form>
         </div>
         <?php    }
         }
         ?>
      </div>
   </div>
</section>
<?php
require_once 'includes/footer.php';
?>