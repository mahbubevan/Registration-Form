$(document).ready(function(){
  //$('form').validate();
  $("#submitButton").click(function(e){
    if($("#firstNameInput").val()==""){
      var show = document.getElementById('firstNameInputError');
      show.innerHTML = "First Name Required";
      e.preventDefault();
    }else if($("#lastNameInput").val()==""){
      var show = document.getElementById('lastNameInputError');
      show.innerHTML = "Last Name Required";
      e.preventDefault();
    }else if($('#emailInput').val()==""){
      var show = document.getElementById('emailInputError');
      show.innerHTML = "Email Required";
      e.preventDefault();
    }else if($('#passwordInput').val()==""){
      var show = document.getElementById('passwordInputError');
      show.innerHTML = "Password Required";
      e.preventDefault();
    }else if($('#confirmPasswordInput').val()==""){
      var show = document.getElementById('confirmPasswordInputError');
      show.innerHTML = "Confirm Password Required";
      e.preventDefault();
    }else if($('#dobInput').val()==""){
      var show = document.getElementById('dobInputError');
      show.innerHTML = "Date Of Birth Required";
      e.preventDefault();
    }else if($('#phoneInput').val()==""){
      var show = document.getElementById('phonenoInputError');
      show.innerHTML = "Phone Number Required";
      e.preventDefault();
    }else{
        
    }
  });
});

});
