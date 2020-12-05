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
         background:url(hairdresser-cut-hair-her-client-hair-salon.jpg) no-repeat top fixed ;
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
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
    .card{
  box-sizing: border-box;
        background: rgba(0,0,0,0.7);
        top:150px;
  width:500px;
    height:300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
    
    </style>
 </head>
	<!--user--->
 <h1 style="position:relative;left:420px;top:120px;">SUB CATEGORY</h1>
<div class="card">
				<table border="1" style="position:relative;width:450px;left:20px;top:10px;">
					<thead>
						<tr>
							<th>CATEGORY ID</th>
                            <th> SUB CATEGORY </th>
                          
                           
				       </tr>
					</thead>
					<?php
					$sql="select * from sub_category";
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
                      
                       
                    
                 
						<td><a href="dlt_staff.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Delete</a></td>
					<?php 
					}
					?>
					</tbody>
				
				</table>
		</div>
	<!--user-->
