<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "rootroot", "saloon5");  
      $output = '';  
      $query = "SELECT * FROM tbl_booking  
           WHERE date1 BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
 ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Customer Name</th>  
                     <th width="43%">Category</th>  
            <th width="43%">Service name</th> 
             <th width="43%">Price</th> 
                    
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["customer"] .'</td>  
                          <td>'. $row["email"] .'</td>  
                          <td>'. $row["category"] .'</td>  
                         <td>'. $row["sub_cat"] .'</td>  
                         <td>'. $row["price"] .'</td> 
                      
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>