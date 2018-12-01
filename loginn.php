<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<body style="background-color:powderblue;">
<center><p>login</p><center>
<link rel="stylesheet" href="toys.css" />
<div>
<center><form action="p2link.html" method="get">
username<input type="text" name="username" value="enter your name here"  onfocus="clearv()" id="d1" onfocusout="check()"/><br>
<div id="error"></div><br>
password<input type="text" name="password" id="d2"/><br><br><br>
<input type="submit" id="btn" onclick="aler("logged in")"/>


</form></center></div>
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
 </body>

</html>

<?php
    $c=0;
  if(isset($_POST['submit'])){

  $res=mysqli_query($con,"select * from registration where username='$_POST[username]' && password='$_POST[password]'") ;
  $c= mysqli_num_rows[$res]   ;
  if($c==0){
  echo "invalid username or pass"  ;
  }}
  ?>
  <!--<div>
  <strong>invalid username or pass</strong>
  </div> -->
 


