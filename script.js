$("#formsend").click(function( event ) {
  event.preventDefault();
    
  var sentdata = $("#mainform").serialize();
  var adddata = $("#mainform").serializeArray();
    
  var name = adddata[0].value;
  var email = adddata[1].value;
  var comment = adddata[2].value;
    
  // Валидация
  if (name == '') {
      alert('Поле "Имя" не заполнено');
      return false;
  }              
  if (comment == '') {
      alert('Поле "Комментарий" не заполнено');
      return false;
  }
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if(reg.test(email) == false) {
      alert('Поле "E-mail" заполнено некорректно');
      return false;
  }
    
  $.ajax({
      type: "POST",
      data: sentdata,
      success: function(msg){
        alert("Ваш комментарий успешно добавлен!");
        $(".commentfield").append('<div class="comment-block"><div class="card"><div class="card-header"><h5 class="card-title">'+name+'</h5></div><div class="card-body"><p class="card-mail">'+email+'</p><p class="card-text">'+comment+'</p></div></div></div>');                
      }
  });
});