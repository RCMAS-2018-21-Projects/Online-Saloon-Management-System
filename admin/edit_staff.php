<?php
include_once("../shares/db/mydatabase.inc");
 include("top.php");
?>
<head>
	<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<script src="maha.js"></script>
<style>
       
input,textarea,select,.ab{
                border: 2px solid;
             border-radius: 7px;
          
             
            }
            label,input[type=radio]{
                color: white;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 500px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}

input[type=submit],.ab {
    margin: auto;
    padding: 10px 25px;
    margin-top: 25px;
    background-color: #146eb4;
    color: white;
	border:none;
	outline:none;
    letter-spacing: 1px;
    outline: 0;
    cursor: pointer;
}
.heading h1 {
    font-weight: 600;
    letter-spacing: .5px;
    font-size: 40px;
    margin-bottom: .9em;
    text-align: center;
    color: deepskyblue;
    text-transform: uppercase;
    position: relative;
    margin-top: 0;
}
    body
    {
        background-image: url(hairdresser-cut-hair-her-client-hair-salon.jpg);
        background-size: 1575px;
        background-repeat: no-repeat;
    }
input[type=submit]:hover,
{
	background-color: #ff9900;
    color: white;
}
.card{
 box-sizing: border-box;
        background: rgba(0,0,0,0.3);
  width:700px;
    height:750px;
    top: 100px;
  margin: auto;
  text-align:left;
  font-family: arial;
}
</style>
    <script src="maha.js"></script>
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from staffreg where sid='$id'";
    $tbl=getDatas($sql);
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1>EDIT STAFF</h1></div>

<form action="" method="POST" >
    
    <table   style="position: relative;left:100px;top:-20px;">
			<div id="err" style="color: red;height: 10px"></div>

                <tr>
                    <td>
                        <label>NAME</label>
                    </td>
                    <td>
                       <input type="text" name="a" value="<?php echo $tbl[0][1];?>" id="fname"required onblur="Validatename1()";><label class="errortext" style="display:nne; color:red" id="name_1"></label><br>
                                         <script>
                                        function Validatename1()
                                            {
                                                  var val = document.getElementById('fname').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
                                                  {
                                                      $("#name_1").html(' Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                      document.getElementById('fname').style.border="1px solid red"; 
                                                      document.getElementById('fname').value = "";
                                                      return false;
                                                  }
                                                  else{
                                                    document.getElementById('fname').style.border="1px solid green";
                                                    return true;
                                                  }
                                                  
                                              }
                                              </script>    
                      </td>
                </tr>
            <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/jquery-ui.css"    rel="stylesheet" type="text/css">
           <tr><td></td></tr>
                 
                      <tr>
                    <td>
                        <label>HOUSE NAME</label>
                    </td>
                    <td>
                       <input type="text" name="b"  required="" value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                <tr><td></td></tr>
                 
                  <tr>
                    <td>
                        <label>CITY</label>
                    </td>
                    <td>
                       <input type="text" name="c"  value="<?php echo $tbl[0][3];?>"id="lname"onblur="Validatename2()";onblur="Validatename2()";><label class="errortext" style="display:nne; color:red" id="name_2"></label><br>
						  <script>
                                        function Validatename2()
                                            {
                                                  var val = document.getElementById('lname').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
                                                  {
                                                      $("#name_2").html(' Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                       document.getElementById('lname').style.border="1px solid red";
                                                      document.getElementById('lname').value = "";
                                                      return false;
                                                  }
                                                   else{
                                                    document.getElementById('lname').style.border="1px solid green";
                                                    return true;
                                                  }
                                              }
                                              </script>	   
                      </td>
                </tr>
           <tr><td></td></tr> 
                
              
           <tr><td></td></tr> 
                
                
                <tr>
                    <td>
                        <label>PINCODE</label>
                    </td>
                    <td>
                       <input type="text" name="d"  required="" value="<?php echo $tbl[0][5];?>" id="pincode"  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="" pattern="^\d{6}$" title="Incorrect Pincode" required>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                     <tr>
                    <td>
                        <label>EMAIL</label>
                    </td>
                    <td>
                       <input type="text"id="email" name="e"  required="" value="<?php echo $tbl[0][7];?>" class="form-control customize"  required="required" data-error="Valid email is required."   />
                         <p id="p8"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script>  <div class="help-block with-errors"></div>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>PHONE</label>
                    </td>
                    <td>
                       <input type="text" name="f"  value="<?php echo $tbl[0][8];?>"  id="mbno"maxlength="10"   required onblur="Validatep()";>   <<label class="errortext" style="display:none; color:red" id="mobile_1"></label>
                                              <script>
                                              function Validatep()
                                              {
                                                  var val = document.getElementById('mbno').value;
                                                  if (!val.match(/^[7-9][0-9]{9,9}$/))
                                                  {
                                                  $("#mobile_1").html('Must. 10 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                   document.getElementById('mbno').style.border="1px solid red"; 
                                                  document.getElementById('mbno').value = "";
                                                      return false;
                                                  }
                                                  else
                                                  {
                                                      document.getElementById('mbno').style.border="1px solid green"; 

                                                     return true;
                                                  }
                                                 
                                              }
                                              </script>    
                        
                      </td>
                </tr>
          
                      
        <tr><td></td></tr> 
                
                     
                
                
            </table>
            <br>
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['a']))
        {
		$a=$_POST['a'];
        $b=$_POST['b'];
		$c=$_POST['c'];
        $d=$_POST['d'];
        $e=$_POST['e'];
        $f=$_POST['f'];
        $g=$_POST['g']; 
		
            
		$sql="update staffreg set sname='$a',housename='$b',city='$c',pincode='$d',email='$e',phone='$f' where sid='$id'";
		setDatas($sql);
		msgbox("updated");
            nextpage("view_staff.php");
        }
        
        ?>