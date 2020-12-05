<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
	 
	 <script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
	 
	 
<style>
    body
    {
         background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
    }
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 100%;
                   margin-left:0px;
                   
               }
               th {
    background-color:white;
    color: black;
    height: 40px;
                   width: 80px;
}
    td{
        background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
        color:whitesmoke;
        }
    tr:hover{
        background-color: aliceblue;
        color: black;
    }
    
    h1{
        color: black;
    }
    tr{
    height: 70px;
    border-bottom: 1px solid #ddd;
}
    td{
    color: white;
    border-bottom: 1px solid #ddd;
}
.s:link, .aa:visited {
  background-color: #ccc;
  color: red;
  padding: 10px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
   
}
    
    </style>
 </head>
<?php
  $name=$_POST['s_name'];
?>
<!--user--->
 <h1 style="position:relative;left:550px;top:10px;">STAFF INFORMATION</h1>
<br><br>
<div style="position:relative;left:550px;top:10px;">
    <form action="search_staff.php" method="POST" >
<input type="text" name="s_name" placeholder="Search By name">
    <input type="submit" value="Search">
        </form>
</div>
<div class="card">
				<table border="1" style="position:relative;width:1200px;left:90px;top:50px;">
					<thead>
						<tr>
							<th>STAFF ID</th>
                            <th> NAME</th>
                          
                            <th>HOUSENAME</th>
                            <th>CITY</th>
                            <th>DISTRICT</th>
                            <th>PINCODE</th>
                            <th>EMAIL</th>
                            <th>PHONE NUMBER</th>
                            <th>DATE OF JOINING</th>
                            <th></th>
                            <th></th>
                            
				       </tr>
					</thead>
					<?php
					$sql="select * from staffreg where sname='$name'";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						<td><?php echo $tbl[$i][0];?></td>
						<td><?php echo $tbl[$i][1];?></td>
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][3];?></td>
                        <td><?php echo $tbl[$i][4];?></td>
                        <td><?php echo $tbl[$i][5];?></td>
                        <td><?php echo $tbl[$i][7];?></td>
                        <td><?php echo $tbl[$i][8];?></td>
                        <td><?php echo $tbl[$i][9];?></td>
                       
                    <td><a href="edit_staff.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Edit</a></td>
                 
						<td><a href="dlt_staff.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Delete</a></td>
					<?php 
					}
					?>
					</tbody>
				
				</table>
		</div>
	<!--user-->
