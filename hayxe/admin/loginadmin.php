<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    width: 80%;
    margin: auto;
}
h2{
    text-align: center;
}
form {
    border: 3px solid #f1f1f1;
    width: 30%;
    margin: auto;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>
</head>
<body>

<h2>Login Admin</h2>

<form action="index.php?pg=loginadmin" method="post">
 
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email">

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass">
        
    <button type="submit" name = "login" >Login</button>
  </div>
</form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
</body>
</html>