<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
 Crime Information Management System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <div class="wrapper">

            <div class="header"> <img src="image/Logo.png" height="120px" width="900px">



            </div>

            <div class="content">
                  <div class="menu">
                        <table class="table">
                              <tr> 
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
                                   
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                                   

                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Complain Report</u><table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `complain` WHERE  `IDno`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $ido=$query_run['IDno'];
                   $name=$query_run['name'];
                   $sex=$query_run['sex'];
                   $adress=$query_run['adress'];
                   $phone=$query_run['phone'];
                   $occupation=$query_run['occupation'];
                  
                   $complain=$query_run['complain'];
                            
                              echo "<tr style='background-color:#CFCFCF'>
                                         <td>Id</td>
                                         <td>$ido</td>
                                    </tr>
                                    <tr style='background-color:#E7E7E7'>
                                         <td>Name</td>
                                         <td>$name</td>
                                    </tr>
                                    <tr style='background-color:#CFCFCF'>
                                          <td>Nickname</td>
                                          <td>$sex</td>
                                    </tr>
                                    <tr style='background-color:#E7E7E7'>
                                          <td>Address</td>
                                          <td>$adress</td>
                                    </tr>
                                    <tr style='background-color:#CFCFCF'>
                                          <td>Age</td>
                                          <td>$phone</td>
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                          <td>Occupation</td>
                                          <td>$occupation</td>
                                   </tr>
                                   
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                          <td>Complain</td>
                                          <td>$complain</td>
                                  </tr>";
                              
                              
                  ?>
                   </table>
                   <button onclick="window.print()" class="print">print</button>
                 </center>


            </div>
        </div>

            <div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

            </div>



      </div>
</body>
</html>