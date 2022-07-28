<?php
require_once 'includes/header.php';
?>
<section style="height: 90vh;">
   <div class="container pb-5">
      <div class="row pt-2 pb-2 text-light">
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
            if (is_array($fetchResponse)) {
               if (isset($fetchResponse['status'])) {
                  '<div class="alert alert-danger">' . print_r($fetchResponse['message']) . '</div>';
               } else {
                  foreach ($fetchResponse as $row) {
         ?>

               <div class="d-flex align-items-center justify-content-center text-light">
                  <form method="post" id="vote">
                     <div class="py-4 d-flex justify-content-center">
                        <article class="" style="min-width: 100% !important; text-align:justify;">
                           <?php echo $row["quetitle"]; ?>
                        </article>
                     </div>
                     <div class="d-grid gap-4">
                        <button class="btn btn-outline-primary" type="submit" name="btna" id="btna">
                           <?php echo $row['optiona'] ?> <span class="text-end">6</span>
                        </button>
                        <button class="btn btn-outline-primary" type="submit" id="btnb">
                           <?php echo $row['optionb'] ?> <span>5</span>
                        </button>
                        <button class="btn btn-outline-primary" type="submit" id="btnc">
                           <?php echo $row['optionc'] ?> <span>5</span>
                        </button>
                        <button class="btn btn-outline-primary" type="submit" id="btnd">
                           <?php echo $row['optiond'] ?> <span>5</span>
                        </button>
                     </div>
                     <div class="mt-4">
                        <label for="exampleInputD" class="form-label">Total votes is 7</label>
                     </div>
                  </form>
               </div>
         <?php
            }
         }}
         ?>
      </div>
   </div>
</section>
<?php
require_once 'includes/footer.php';
?>