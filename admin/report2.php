<?php 
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
 <head>
<style>body{
        background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
     height: 900px;
        
    }
 table{
                   border-radius: 1em;
                   width: 80%;
                 height: 150px;
                   margin-left:0px;
                   
               }
               th {
   background-color: black;
    color:antiquewhite;
    height: 40px;
}
    input,select{
    border: 2px solod red;
    border-radius: 5px;
    width:150px;
    }
input[type=submit]
    {
        background-color: #7AA7CF;
        color: white;
    }
body
    {
        background-image:url(abc.jpg);
        background-size: cover;
    }
    </style>
 </head>
  <!--user--->
  <br><br><br><br><br><br><br>
    <body>
    <div style="position:relative;left:520px;top:0px;border:groove;width:500px;height:150px;" >
    <form method="post" action="print_report11.php">
    <table style="position:relative;top:20px;left:40px;height:100px;width:400px;">
        <tr><td><font color="blue">FROM</font> </td>
             <td> <font color="blue">:</font></td>
    <td><input type="date" name="txtStartDate"></td>
    </tr>
      <tr><td> <font color="blue">TO</font></td>
          <td> <font color="blue">:</font></td>
    <td> <input type="date" name="txtEndDate"></td>
    </tr>
      <tr>
          <td></td>
    <td><input type="submit" name="search" value="search"></td>
    </tr>
       </table>
    </form>
    </div> 
    