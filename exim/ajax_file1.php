 <!DOCTYPE html>
<html lang="en">
	<head>
	 <link rel="stylesheet" type="text/css" href="colorbox.css" />
	
<script	type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript">
  
    $("#test-link").colorbox({iframe:true, innerWidth:425, innerHeight:344 width:"60%", height:"300px", inline:true, href:"#test-content"});
  
</script>
     
<link rel="stylesheet" href="new.css" type="text/css" media="screen">
</head>
<?php 
function callme($para){
			
			$item=$para;
			mysql_connect("localhost","ClassyCleats","ClassyCleats");
			@mysql_select_db("ClassyCleats") or die("unable to select database");
			$sql = "SELECT * FROM divya WHERE chapter = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0;
echo"<div id='container' class='super-list variable-sizes clearfix'>";
			while ($row=mysql_fetch_array($result)) 
				{

  
 
  

				$field1=$row['itc'];
				$field2=$row['description'];?>
				<a href="#" id="test-link">
				<?php echo"<div class='element other-nonmetal cboxElement'>";
				//echo"  <h2 class='number'>$field1</h2>";
				//echo"  <h3 class='name'>$field2</h3>";
				
				echo" </div>";
				echo" </a>";?>
				

                                <div style="display: none;">
                                        <div id="test-content ">
                                                 <h1><?php echo $field1 ?></h1>
                                                  <p><?php echo $field2 ?> </p>
                                         </div>
                                </div>
				<?php }
				
}

$val=(int) $_GET['name'];

callme($val);

?>

</html>
