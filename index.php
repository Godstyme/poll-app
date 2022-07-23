<?php 
   require_once 'includes/header.php';
?>
      <section>
         <div class="container pb-5">
            <div class="row pt-5">
               <div class="d-flex align-items-center justify-content-center text-light">
                  <form  method="post" id="makeapoll">
                     <div id="errorMSG" class="text-center">
                     </div>
                     <div class="mb-4">   
                        <div class="">
                           <textarea class="border-0 w-100 rounded p-2 form-control" name="queTitle" cols="30" rows="2" placeholder="Create a poll" id="text">
                           </textarea>
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
                     <div class="d-grid gap-2">
                        <button class="btn btn-lg text-light" type="submit" style="background: #CD4C87;">Create Poll</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
<?php 
   require_once 'includes/footer.php';
?>