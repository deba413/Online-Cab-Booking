<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loging pannel </title>
</head>
<style>
      body
{
    margin: 0;
    padding: 0;
    /* background-color:yellow; */
    font-family: 'Arial';
}
    div{
        text-align: center;
        font-size: large;
        height: 60%;
    }
    .bg
          {
              width: 100%;
              height:auto;
              position: absolute;
              z-index: -1;
              opacity: 1;
          }
          .navigation {
          background: rgba(0, 0, 0, 0.404);
          padding: 5px 0;
          width: 100%;
          position:sticky;
          top: 0;
          overflow: auto;
          /* background-attachment: fixed; */
        }
          nav a {
          /* float: left; */
  padding: 20px;
  color: white;
  text-decoration: none;
  font-size: 20px;
  width: 25%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
  text-align: center; /* If you want the text to be centered */;
        }
        nav {
          display: flex;
          background-color: #333;
          width: 100%;
          overflow: auto;
        }
        a:hover {
          background-color: #ddd;
          color:black;
          cursor: pointer;
        }
</style>
<body>
<nav class="nevigation">
        <div></div>
             <a href="home.html">Home</a>
             <a href="admin_login_form.php" class="box">Administration </a></div>
              <a href="traveller_regform.php" class="box">Traveller's Registraion</a></div>
              <a href="drivers_reg_form.php" class="box">Driver's Registraion</a></div>
              <p class="flex-align-left">
              <!-- <a href="loging_pannel_form.php">log in</a> -->
            </p>
          </div>
        </div>
      </nav>
<img src="car_2.jpeg" alt="car" class="bg">
    <div>
        <p><b> Travelar's login <a href="traveller_loging_form.php">click</b></a></p>
    </div>
    <br>
    <div>
      <p><b>Drivaer's login <a href="driver_loging_form.php">click</b></a></p>
    </div>
    <br><br>
      <!-- <div>back <a href="home.html">Home</a></div> -->
</body>
</html>