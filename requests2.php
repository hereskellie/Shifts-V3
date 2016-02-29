<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Shifts</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="softwareproject.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <div id='cssmenu'>
<ul>
   <li><a href='roster0702.php'><span>Rosters</span></a></li>
   <li><a href='dayoff.php'><span>Requests Time Off</span></a></li>
   <li><a href='shiftchange.php'><span>Request Shift Change</span></a></li>
   <li><a href='chat2.php'><span>Chat</span></a></li>
   <li><a href='manager.php'><span>New Roster</span></a></li>
   <li class='last'><a href='requests.php'><span>Employee Requests</span></a></li>
</ul>
</div>
  </head>

  <body background="dark.jpg">

    <div class="container">

      
        <center><img src="company.png" width="750" height="100"></center>
        <h1 class="form-signin-heading"><font color="white"><center>Managers Requests</center></font></h1>
<center>        <table class="manreq">
  <tr>
    <th class="tg-wv9z">Employee</th>
    <th class="tg-wrg0">Request</th>
    <th class="tg-wrg0">Message</th>
    <th class="tg-wrg0">Accept/Deny</th>
  </tr>
  <tr>
    <td class="tg-wv9z">Colin Regan</td>
    <td class="tg-qcjy">Shift Change</td>
    <td class="tg-qcjy">Can I change Wed 24/02  for Thurs 25/02 as I have Jury Duty</td>
    <td class="tg-yw4l"><center><form action="requests2.php">
        <button class="rosterbutton1" type="submit">Accept</button>
        <button class="rosterbutton3" type="submit">Deny</button>
    </form></center></td>
  </tr>
  <tr>
    <td class="tg-wv9z">Aidan Durnin</td>
    <td class="tg-qcjy">Day Off</td>
    <td class="tg-qcjy">Can I have the 15th-22nd June off as Holidays</td>
    <td class="tg-yw4l"><center><form action="requests2.php">
        <button class="buttonreqyes" type="submit">Accept</button>
        <button class="buttonreqno" type="submit">Deny</button>
    </form></center></td>
  </tr>
</table>
</center>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>