<html>
    <head>
        <title>booking</title>
    </head>
    <style>
       * {
          box-sizing: border-box;
        }
        .loging-box{
    text-align: center;
  }
  .bg
          {
              width: 100%;
              height:auto;
              position: absolute;
              z-index: -1;
              opacity: 0.4;
          }
          .form{
            font-size:x-large;
          }
    </style>
    <body>
    <img src="car_7.jpeg" alt="car" class="bg">
    <div class="loging-box">
    <p text-align="center"><h1 >BOOK YOUR CAB</h1></p>
    <form action="bokking_form.php" mothod="post">
        <div class="form">
            <h5>Please enter all the details below: </h5>
            <p>Picup Address: <br><textarea name="pic_up_address" id="address" cols="20" rows="5"></textarea></p>
            <p>Droping Address: <br><textarea name="dropping_address" id="address" cols="20" rows="5"></textarea></p>            
            <p>Pickup date: <input type="date" name="pic_up_date" placeholder="mm/dd/yyyy"></p>
            <p>Pickup time: <input type="time" name="pic_up_time" placeholder="hh:mm"></p>
            <p>Vehicle type: <select name="car_type" id="car_type" required>
                <option value="">--select a car type--</option>
                <option value="TATA">TATA</option>
                <option value="Alto">Alto</option>
                <option value="SUV">Suv</option>
                <option value="Maruti">Maruti</option>
                <option value="Suzuki">Suzuki</option>
            </select><br><br>
            <button type="submit" id="btn" value="submit"> booking Request </button>
        </div>
        </from>
    </div>
    </body>
</html>