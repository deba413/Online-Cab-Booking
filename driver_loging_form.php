<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<style>
  body
{
    margin: 0;
    padding: 0;
    /* background-color:yellow; */
    font-family: 'Arial';
}
.login{
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 450px;
        padding: 80px;
        background-color: rgba(0,0,0,0.5);
        /* background: #23463f; */
        border-radius: 15px ;
        opacity: 0.9;

}
h2{
    text-align: center;
    color:yellow;
    padding: 20px;
}
label{
    color: #08ffd1;
    font-size: 17px;
}
#Uname{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
}
#Pass{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;

}
#log{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;
    color: blue;


}
span{
    color: white;
    font-size: 17px;
}
a{
    float: right;
    background-color: grey;
}
.bg
          {
              width: 100%;
              height:auto;
              position: absolute;
              z-index: -1;
              opacity: 0.9;
          }
</style>
</style>
<body>
<img src="car_6.jpeg" alt="Hospital Management" class="bg">
    <h2>Login Page</h2><br>
    <div class="login">
    <form id="login" method="get" action="driver_loging.php">
        <label><b>Driver's Mail
        </b>
        </label>
        <input type="text" name="d_mail" id="Uname" placeholder="Enter your mail" required>
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="d_pwd" id="Pass" placeholder="Password" required>
        <br><br>
        <button type="submit" value="submit" id="log">Log in</button>
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        <a href="#">Forgot Password</a>
        <br><br>
        <a href="home.html">Home</a>
    </form>
</div>
</body>
</html>