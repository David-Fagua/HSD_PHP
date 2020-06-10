<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="icon" type="image/png" href="../Img/Logo.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a href="inicio.html" class="navbar-brand" href="#">
    <img src="../img/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
    <a href="../inicio.html" class="navbar-brand" href="#">HSD PLUS</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <formaction=""  onsubmit="return validarformulario()" method="post" class="border border-light p-5">
      <center>
        <h2>Crear Cuenta</h2>
      </center>
      <center>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Apellido">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Clave">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Confirmar Clavee">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Correo">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Confirmar Correo">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Telefono">
        </div>
      </center>
      <center>
        <a href="inicio.html" style="float:center;" class="btn btn-primary btn-lg" role="button">Registrar</a>
      </center>
    </form>
  </div>
</div>

<br>
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
          
        $(document).ready(function () {
   $("#rpassword").keyup(checkPasswordMatch);
 
});

   $(document).ready(function () {
   $("#password").keyup(checkPasswordMatch2);
 
});

 
 

 function checkPasswordMatch2() {
 var repeatPass= document.getElementById('rpassword').value;
var repeatclave = repeatPass.length;
 if (repeatclave>0)
 {
    var password = $("#password").val();
    var confirmarPassword = $("#rpassword").val();

    if (password != confirmarPassword){
        $("#divchearsisoniguales").html("<div class='alert alert-danger'><i class='fa fa-close'></i> passwords do not match!<input value='error' type='hidden' name='passwordchecker'></div>");
   document.getElementById("thesubmitBoton").disabled = true; 
} else{
    
        $("#divchearsisoniguales").html("<div class='alert alert-success'><i class='fa fa-check'></i> passwords do not match.<input type='hidden'  value='1' name='passwordchecker'></div>");
        document.getElementById("thesubmitBoton").disabled = false; 
    }
    }
}
    
    </script>
  <script>

   

 function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmarPassword = $("#rpassword").val();

    if (password != confirmarPassword){
        var contador=0;
        $("#divchearsisoniguales").html("<i class='fa fa-close'></i>  passwords do not match!<input value='error' type='hidden' name='passwordchecker'>");
   document.getElementById("thesubmitBoton").disabled = true; 
} else{
    contador=1; 
        $("#divchearsisoniguales").html("<i class='fa fa-check'></i> passwords do not match.<input type='hidden'  value='1' name='passwordchecker'>");
        document.getElementById("thesubmitBoton").disabled = false; 
    }
 
}

    
    </script>
    <script>
    
        
      $(document).ready(function () {
   $("#username").keyup(checarUsuarios);
});
 
 
     $(document).ready(function () {
   $("#username").change(checarUsuarios);
});

     $(document).ready(function () {
   $("#email").keyup(checarEmails);
});
 
 
     $(document).ready(function () {
   $("#email").change(checarEmails);
});
function checarUsuarios() {
    
var username= document.getElementById('username').value;
var userlenght = username.length;
if (userlenght<4)
{
  document.getElementById("checkusername").innerHTML="<i class='fa fa-close'></i> jjjjj <input id='usernamechecker' type='hidden' value='0' name='usernamechecker'> ";
  
}
else {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (xhttp.readyState == 4 && xhttp.status == 200) {
document.getElementById("checkusername").innerHTML = xhttp.responseText;
usernameresponsed = document.getElementById('usernamechecker').value;



if (usernameresponsed=="1")
{
   
   if (emailresponsed)
   {
      emailresponsed=document.getElementById('emailchecker').value;
      if (emailresponsed=="1"){
          document.getElementById("thesubmitBoton").disabled = false; 
                    }
   }
}


else if (usernameresponsed=="0")
{
    document.getElementById("thesubmitBoton").disabled = true;
}
}
};
xhttp.open("POST", "checarusername.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("username="+username+"");

}
}
function checarEmails() {
    
var email= document.getElementById('email').value;



var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (xhttp.readyState == 4 && xhttp.status == 200) {
document.getElementById("checkemailresponse").innerHTML = xhttp.responseText;
emailresponsed = document.getElementById('emailchecker').value;
if (emailresponsed=="1")
{
   
   if (usernameresponsed)
   {
      usernameresponsed=document.getElementById('usernamechecker').value;
      if (usernameresponsed=="1"){
          document.getElementById("thesubmitBoton").disabled = false; 
                    }
   }
}
else if (emailresponsed=="0")
{
    document.getElementById("thesubmitBoton").disabled = true;
}
}
};
xhttp.open("POST", "checkemail.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("email="+email+"");


}

</script>

</body>
</html>