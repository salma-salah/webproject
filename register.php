<?php
include'db.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">




    <script type="text/javascript">
function clearv(){
var t=" ";
document.getElementById("d1").value=t;
error.innerHTML = "";
}
function check(){
if(document.getElementById("d1").value==""||document.getElementById("d1").value.length<3){
clearv();
error.innerHTML = 'Please enter a correct name.';
onfocus=document.getElementById("d1");

}
onfocus=document.getElementById("d2");

}
</script>
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console color=red">kotobna registration</h1>
</div>


<body  style="background-color:powderblue;" class="login" style="margin-top:10px;" >



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2> Registration Form</h2><br>



                    <div>
                        <input type="text" class="form-control" value="enter your name here"  onfocus="clearv()" id="d1" onfocusout="check()" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required="" id="d2"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                    </div>


                        <br><br>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Register" id="btn">
                    </div>

              </form>
            </section>



    </div>







<?php

  if(isset($_POST['submit'])){


 mysqli_query($con,"insert into registration values('','$_POST[username]','$_POST[password]','$_POST[email]')");
 ?>
 <div>
 sucessfully register
 </div>

 <?php

   }

?>

</body>

</html>
