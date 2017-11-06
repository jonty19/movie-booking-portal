<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title></title>
    <?php
    $connection = mysql_connect("localhost", "root", "abc"); // Establishing Connection with Server
    $db = mysql_select_db("movie_booking_portal", $connection); // Selecting Database from Server
    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $movie = $_POST['movie'];
      $time = $_POST['time'];
      $seat = $_POST['seats'];
      if ($movie== "dangal" and $time == "afternoon") {
        $query = mysql_query("insert into dangal_afternoon(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your dangal afternoon show booking confirmed... !')</script>";
      } elseif ($movie== "dangal" and $time == "noon") {
        $query = mysql_query("insert into dangal_noon(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your dangal noon show booking confirmed... !')</script>";
      }
      elseif ($movie== "dangal" and $time == "evening") {
        $query = mysql_query("insert into dangal_evening(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your dangal evening show booking confirmed... !')</script>";
      } elseif ($movie== "bahubali2" and $time == "noon") {
        $query = mysql_query("insert into bahubali2_noon(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your bahubali2 noon show booking confirmed... !')</script>";
      } elseif ($movie== "bahubali2" and $time == "afternoon") {
        $query = mysql_query("insert into bahubali2_afternoon(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your bahubali2 afternoon show booking confirmed... !')</script>";
      } elseif ($movie== "bahubali2" and $time == "evening") {
        $query = mysql_query("insert into bahubali2_evening(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your bahubali2 evening show booking confirmed... !')</script>";
      } elseif ($movie== "srk" and $time == "noon") {
        $query = mysql_query("insert into j_h_m_s_noon(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your jab herry met sejal noon show booking confirmed... !')</script>";
      } elseif ($movie== "srk" and $time == "afternoon") {
        $query = mysql_query("insert into j_h_m_s_afternoon(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your jab herry met sejal afternoon show booking confirmed... !')</script>";
      } elseif ($movie== "srk" and $time == "evening") {
        $query = mysql_query("insert into j_h_m_s_evening(name, no_of_seats) values ('$name','$seat')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your jab herry met sejal evening show booking confirmed... !')</script>";
      }
      else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
      }

      }

    mysql_close($connection); // Closing Connection with Server
     ?>
  </head>
  <body>
    <h1>Najrul Tirtha Cinema</h1>
    <h1>confirm Your Booking</h1> <hr><hr>
    <form name="booking" method="post" action="">
                        <div class="form-group">
                            <label for="sel1">Select your movie, time and number of seats:</label>
                            <input class="form-control" type="name" name="name" placeholder="enter your name">
                            <select class="form-control" name="movie" id="movie" title="Select your movie">
                                <option value="bahubali2">Bahubali 2</option>
                                <option value="dangal">Dangal</option>
                                <option value="srk">Jab Harry Met Sajal</option>
                            </select>
                            <select class="form-control" name="time" id="movietime" title="Select time">
                                <option value="noon">12:00pm</option>
                                <option value="afternoon">3:00pm</option>
                                <option value="evening">6:00pm</option>
                            </select>
                            <select class="form-control" name="seats" id="seats" title="Select number of seats">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <input type="submit" name="submit" value="Book">
                        </div>
                    </form>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
</html>
