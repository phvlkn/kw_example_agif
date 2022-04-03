"use strict";

$('.register-form').validate({
  rules: {
    password: 'required',
    confirmpassword: {
      equalTo: '#password'
    }
  },
  messages: {
    password: 'Введите пароль.',
    confirmpassword: 'Введённые пароли не совпадают'
  }
});

if (validator.form()) {
  /*var dataString = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'registerform.php',
      data: dataString,
      success: function () {
          window.location.replace('http://agif.rf.gd');
      }
  });*/
  console.log('Success');
}

;