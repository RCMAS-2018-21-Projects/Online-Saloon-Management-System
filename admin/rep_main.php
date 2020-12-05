<?php
session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
 <head>
 
<style>body{
        background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
     height: 900px;
        
    }
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 40px;
}
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  border-radius:4px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.aa:link, .aa:visited {
  background-color: #3F76E7;
  color: white;
  padding: 20px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width: 300px;
}

.aa:hover, .aa:active {
  background-color:#1447B0;
}

    </style>
 </head>
	<!--user--->
<div style="position:relative;left:550px;top:100px;">


 
   <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REPORT</h2>
    <br><br>

    <a class="aa" href="search_cust.php">&emsp;CUSTOMER REPORT&emsp;&emsp;</a><br><br>
	<a class="aa" href="report1.php">&emsp;STAFF REPORT&emsp;&emsp;</a><br><br>
<a class="aa" href="report.php">&emsp;&emsp;BOOKING REPORT&emsp;&emsp;</a><br><br>
<a class="aa" href="report2.php">&emsp;&emsp;PACKAGE REPORT&emsp;&emsp;</a> <br><br>
<a class="aa" href="report3.php">&emsp;&emsp;PAYMENT REPORT&emsp;&emsp;</a>

</div>


