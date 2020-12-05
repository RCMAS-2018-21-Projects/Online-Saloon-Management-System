<?php
include('top5.php');
include_once('../shares/db/mydatabase.inc');
?>

<br><b>

<?php  
 $connect = mysqli_connect("localhost", "root", "rootroot", "saloon5");  
 $query = "SELECT * FROM package2 ORDER BY bid desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  <style>
  
    th{
      height: 40px;
      background-color: blue;
      color: white;
    }
    th
    {
      text-align: center;
    }
        td{
            text-align: center;

        }
        INPUT[TYPE=SUBMIT],INPUT[TYPE=RESET]
{
  background-color:#CCFF66;
  COLOR:BLACK;
  HEIGHT:35pX;
  WIDTH:100PX;
    border-radius:8px;
}
    
  </style>
           <title>Booking Details</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body> 
        

           <br /><br />  

<img src="123.png" height="150" width="200" style="position:relative;top:20px;left:200px;">
<div style="position:relative;top:-90px;left:450px;"><b>MAGIC MIRROR<br>
              Kakkanad,Ernakulam<br>
              682016<br>
              Telephone : +91 9020996500<br>
              Email : <a class="mail" href="mailto:mail@example.com">magicmirror@gmail.com</a></b></div>
    <h1 style="position:relative;left:580px;top:-40px;color:blue"><u>MAGIC MIRROR</u></h1>
    <br>
    <br>
    <br>

    
                  
<h2 style="position:relative;left:550px;top:-50px;"><b><u>PACKAGE REPORT</u></b></h2>
<div style="position:relative;left:80px;top:-30px;">
  

           <div class="container" style="width:1200px;">  
            
                
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Id</th>  
                               <th width="30%">Email</th>  
                               <th width="43%">Package</th>  
                               <th width="10%">Price</th>  
                          
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["bid"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["package_name"]; ?></td>  
                               <td><?php echo $row["price"]; ?></td>  
                    
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'dd-mm-yy'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter1.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>