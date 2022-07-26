$(document).ready(function($) {
   function createPollQue(requestPath) {
      $("#makeapoll").submit(function(evt) {
         evt.preventDefault();
            $.ajax({
            url: requestPath,
            method : "post",
            dataType:'json',
            data:$(this).serialize(),
            success: function (response) {
               // console.log(response.message)
               let page = response.page;
               if(response.status === 0){
                  $("#errorMSG").addClass('alert alert-danger');
                  $("#errorMSG").html(response.message);
               } else if (response.status === 1) {
                  $("#errorMSG").removeClass('alert alert-danger');
                  $("#errorMSG").addClass('alert alert-success');
                  $("#errorMSG").html(response.message);
                  setTimeout(function() {
                     let dir = 'poll.php';
                     window.location = `${dir}/${page}`;
                  }, 1500)
               } else{
                  $("#errorMSG").html("please check what you are doing");                   
               }
            },
            error: function (response) {
               console.log(response)
            }
         })
      })
   }
   createPollQue('server/classes/controller.php?_mode=createPollQue');

})