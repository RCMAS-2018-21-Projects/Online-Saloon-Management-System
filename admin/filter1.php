<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "rootroot", "saloon5");  
      $output = '';  
      $query = "SELECT * FROM package2 
           WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
 ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Email</th>  
                     <th width="43%">Package Name</th>
                     <th width="43%">Price</th>   
            
                    
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["bid"] .'</td>  
                          <td>'. $row["email"] .'</td>  
                          <td>'. $row["package_name"] .'</td>
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
