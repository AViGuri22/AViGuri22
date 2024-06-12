</html>
<head>
<title> Admin Login</title>
</head>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: Roboto;
  background-repeat: no-repeat;
  background-size: cover;
  background: linear-gradient(120deg, #007bff, #d0314c);
  height: 100vh;
  overflow: hidden;
}

.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 29vw;
  background: white;
  border-radius: 10px;
}

.center h1{
  text-align: center;
  padding: 0 0 20px 0;
  border-bottom: 1px solid silver;
}

.center form{
  padding: 0 40px;
  box-sizing: border-box;
}

form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}

.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}

.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
}

.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0px;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:Valid ~ span::before{
  width: 100%;
}
div.popup-container div.popup-container div.forgot-btn{
	text-align:right;
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}

.pass:hover{
  text-decoration: underline;
}

input[type="Submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  border-radius: 25px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;

}

input[type="Submit"]:hover{
  background: #2691d9;
  color: #e9f4fb;
  transition: .5s;
}




</style>
<body>
<hr><h1> <center> Library Management System</h1><hr>
    <div class="container">
      <div class="center">
          <h1> Admin Login Page </h1>
          <form  method="POST" action="">
              <div class="txt_field">
                 <input type="text" name="username">
                  <span></span>
                  <label>Username</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="password">
                  <span></span>
                  <label>Password</label>
              </div>
              <div class="forgot-btn"> </div>
			  <button type="button"> Forgot password</button>
			  <input type="submit"name="submit">
             
              </div>
          </form>
      </div>
    </div>
  </body>
</html>
<?php
if(isset($_POST["submit"]))
{
include"ALP.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="Select * from admin where Username='$_POST[username]' AND Password='$_POST[password]'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	echo"<script>window.location('mbookf1.php');</script>";
}
else{
	echo"<script>alert('incorrect password');</script>";
}
}
?>