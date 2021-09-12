$(function (){
  let myForm =$('#formConnexion');

  myForm.submit(function (e) {
    e.preventDefault();

    let FormUrl = $(this).attr('action');
    let FormMethod = $(this).attr('method');
    let FormData = $(this).serialize();

    sendDataCo();
    function sendDataCo (){
      $.ajax({
        type: FormMethod,
        url: FormUrl,
        data: FormData,
      }).done(function(response){
        // $('#result').html('');
        // $('#result').append(response);
      });
    }
  })
});