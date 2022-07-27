<?php 
   require_once 'includes/header.php';
   // require_once 'server/helper/polllink.php';
   // $link = uniqURL();
?>
      <section>
         <div class="container pb-5">
            <div class="row pt-5 pb-3">
               <div class="d-flex align-items-center justify-content-center text-light py-2" style="box-shadow: 0px 0px 5px #000;">
                  <form  method="post" id="makeapoll">
                     <div id="errorMSG" class="text-center">
                     </div>
                     <div class="mb-4">
                        <div class="form-outline">
                           <label class="form-label" for="textAreaExample">Create A Poll</label>
                           <textarea class="form-control" id="textAreaExample1" cols="30" rows="2" name="queTitle" placeholder="Ask Question for Poll?"></textarea>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputA" class="form-label">Option A</label>
                        <input type="text" class="form-control" id="exampleInputA" placeholder="Enter Option A" name="optionA">
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputB" class="form-label">Option B</label>
                        <input type="text" class="form-control" id="exampleInputB" placeholder="Enter Option B" name="optionB">
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputC" class="form-label">Option C</label>
                        <input type="text" class="form-control" id="exampleInputC" placeholder="Enter Option C" name="optionC">
                     </div>
                     <div class="mb-4">
                        <label for="exampleInputD" class="form-label">Option D</label>
                        <input type="text" class="form-control" id="exampleInputD" placeholder="Enter Option D" name="optionD">
                     </div>
                     <!-- <div>
                        <input type="hidden" name="link" value="<?php echo $link ?>">
                     </div> -->
                     <div class="d-grid gap-2">
                        <button class="btn btn-lg text-light" type="submit" style="background: #CD4C87;">Create Poll</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- https://stackoverflow.com/questions/33138756/create-unique-url-in-php-for-each-entry -->
<?php 
   require_once 'includes/footer.php';
?>