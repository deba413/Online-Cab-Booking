<html>
    <head>
        <title>travlear pannel</title>
    </head>
    <body>
        <style>
              * {
        box-sizing: border-box;
      }

      body
        {
           margin: 0;
          padding: 0;
          /* background-color:yellow; */
          font-family: 'Arial';
          } 
      .bg
          {
              width: 100%;
              height:auto;
              position: absolute;
              z-index: -1;
              opacity: .8;
          }
          div{
            text-align: center;
          }
          .h1{
            text-align: center;
            color: skyblue;
          }
          .sub{
    width: 200px;
    height: 30px;
    border: none;
    border-radius: 20px;
    padding-left: 7px;
    color: blue;


}
.login{
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 510px;
        padding: 80px;
        background-color: rgba(0,0,0,0.5);
        border-radius: 15px ;
        opacity: 2;

}
p{
    color:skyblue;
    font-size: 17px;
    font-weight: 600;
}
/* u{
   
    text-align: center;
    color: #277582;
    padding: 50px;
    margin-top:auto;
} */
/* h5{
    text-align: center;
    color: #277582;
    padding: 50px;
    margin-top:auto;
} */
.reg{
    padding-top:0px;
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
              <!-- <a href="traveller_regform.php" class="box">Traveller's Registraion</a></div> -->
              <a href="drivers_reg_form.php" class="box">Driver's Registraion</a></div>
              <p class="flex-align-left">
              <a href="loging_pannel_form.php">log in</a>
            </p>
          </div>
        </div>
      </nav>
    <img src="car-12.jpeg" alt="" class="bg">
    
    <div class="reg">
    <form action="traveller_reg.php" mothod="post">
        <div class="login">
        <p text-align="center"><h1 class="h1"><u> Registration portal</u></h1></p>
        <h5 class="h1"><u>Please enter all the details below: </u></h5>
             <!-- <p>Travelar's id: <input type="text" name="t_id" placeholder="enter tarvelar id " required><br><br></p> -->
             <p>Travelar Name: <input type="text" name="tname" placeholder="Enter tarvelar name" required><br></p>  
             <p>Mobile: <input type="mobile" name="tmobile" placeholder="Enter your mobile number" required><br></p>
             <p>Email: <br><input type="email" name="tmail" id="email" placeholder="Enter your email id" required><br></p>
             <p>Dob:<br><input type="date" name="tdob" placeholder="dd/mm/yyyy" required></p>
             <p>Gender: <br><input type="radio" name="tgender"  id="male" value="Male">Male
                        <input type="radio" name="tgender" id="female" value="Female">Female
                        <input type="radio" name="tgender" id="others" value="Others">Others</p>
             <p>Address: <br><textarea name="taddress" id="address" cols="20" rows="5"></textarea></p>
             <p>Password: <input type="password" name="pwd" placeholder="enter your password" required><br></p>
             <button type="submit" id="btn" value="submit" class="sub">Register Request</button><br><br>
        </div>
        </form>
        </div>
    </body>
</html>