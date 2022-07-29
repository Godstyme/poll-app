<?php
require_once 'includes/header.php';
function getQueId($id)
{
   return $id;
}
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
               foreach ($fetchResponse as $row) :
                  // var_dump($row);
         ?>

                  <div class="d-flex align-items-center justify-content-center text-light">
                     <form method="post" id="vote">
                        <div class="py-4 d-flex justify-content-center">
                           <input type="hidden" name="pollid" value="<?= $row['id'] ?>">
                           <article class="" style="min-width: 100% !important; text-align:justify;">
                              <?php echo $row["quetitle"]; ?>
                           </article>
                        </div>
                        <div class="d-grid gap-4">
                           <button class="d-flex justify-content-between btn btn-outline-primary" type="submit" name="btna" id="btna" value="hello">
                              <div> <?php echo $row['optiona'] ?></div>
                              <span>6</span>
                           </button>
                           <button class="d-flex justify-content-between btn btn-outline-primary" type="submit" name="btna" id="btna">
                              <div> <?= $row['optionb'] ?></div>
                              <span>6</span>
                           </button>
                           <button class="d-flex justify-content-between btn btn-outline-primary" type="submit" name="btna" id="btna">
                              <div> <?= $row['optionc'] ?></div>
                              <span>6</span>
                           </button>
                           <button class="d-flex justify-content-between btn btn-outline-primary" type="submit" name="btna" id="btna">
                              <div class=""> <?php echo $row['optiond'] ?></div>
                              <span>6</span>
                           </button>
                        </div>
                        <div class="mt-4">
                           <label for="exampleInputD" class="form-label">
                              <?php
                              $fetchData = new FetchData;
                              $fetchResponse = $fetchData->getPollData('questions', $page);
                              if ($fetchResponse) :
                                 foreach ($fetchResponse as $row) :
                                    $id = $row['id'];
                                    $fetchResponse = $fetchData->getVoteSummation($id);
                                    foreach ($fetchResponse as $data) :
                                       $summation = $data['SUM(optiona) + SUM(optionb)+ SUM(optionc)+ SUM(optiond)'];
                                       if ($summation === '1') {
                                          echo $summation . ' vote';
                                       } elseif ($summation == null) {
                                          echo  '0 votes';
                                       } else {
                                          echo $summation . ' votes';
                                       }
                                    endforeach;

                                 endforeach;
                              endif;
                              ?>
                           </label>
                        </div>
                     </form>
                  </div>
         <?php
               endforeach;
            }
         }  ?>
      </div>
   </div>
</section>
<?php
require_once 'includes/footer.php';
?>