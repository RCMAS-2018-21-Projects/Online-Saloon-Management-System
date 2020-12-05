<?php include_once("../shares/db/mydatabase.inc");?>
<?php
include("top.php");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Magic Mirror</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
    	body{
    		background-image: url(images/abcd.jpg) no-repeat top fixed;
    		background-size: cover;
    	}
  </head>
  <body>
    	<?php
$sql="select pname,pdes,pprice,pimage,pid from package"; 
 $tbl=getDatas($sql);
 for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
			?>
    
    
    
    
    
    <section class="w3l-team-main-6" id="team">
	<!-- /team-grids -->
	<div class="team-content-page ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 team-team">
				<?php
			
	echo "<img src='".$tbl[$i][4]."' style='position:relative;width:150px;height:200px;'><br>";

	echo "&emsp;&emsp;&emsp;".$tbl[$i][0]."<br>
	&emsp;&emsp;&emsp;".$tbl[$i][1]."<br>
	
&emsp;&emsp;&emsp;".$tbl[$i][2]."<br>";
	?>
	&emsp;&emsp;&emsp;<a href="more.php?id=<?php echo $tbl[$i][5];?>">MORE</a>
				</div>
				
				</div>
				
				  </div>
			
				  </div>
				
	<!-- /team-grids -->
</section>
                    <br><br><br><br><br><br>
                </body>
                   