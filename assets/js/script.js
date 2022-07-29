$(document).ready(function ($) {
   $("#vote").submit(function (evt) {
      evt.preventDefault();
      // console.log($(this).serialize())
      $.ajax({
         url: 'server/classes/controller.php?_mode=vote',
         method: "post",
         dataType: 'json',
         data: $(this).serialize(),
         success: function (response) {
            console.log(response.message)
         },
         error: function (response) {
            console.log(response)
         }
      })
   })
})