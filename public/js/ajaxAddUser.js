$(function (){
  let myForm =$('#addFormUser');

  myForm.submit(function (e) {
    e.preventDefault();

    let addFormUrl = $(this).attr('action');
    let addFormMethod = $(this).attr('method');
    let addFormData = $(this).serialize();

    sendData();
    function sendData (){
      $.ajax({
        type: addFormMethod,
        url: addFormUrl,
        data: addFormData,
      }).done(function(response){
        // $('#result').html('');
        // $('#result').append(response);
      });
    }
  })
});