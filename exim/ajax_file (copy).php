 <!DOCTYPE html>
<html lang="en">
	<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<style>
notes1{font-size: 0.5em;
  left: 0.5em;
  top: 0.5em;}
  
notes2{font-size: 0.5em;
  left: 0.5em;
  top: 1.3em;}

number{font-size: 0.7em;
  right: 0.5em;
  top: 0.5em;
  }
  </style>
</head>
<?php 
function call($para){
			
			$item=$para;
			mysql_connect("localhost","root","12345");
			@mysql_select_db("trade") or die("unable to select database");
			$sql = "SELECT * FROM new_chapter WHERE section_no = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0; 
echo"<div id='container' class='super-list variable-sizes clearfix'>"; ?>
  

			<?php while ($row=mysql_fetch_array($result)) 
				{

				$field1=$row['chapter_no'];
				$field2=$row['chapter_name'];?>
				 <a  href="#" onclick="loadXMLDoc1('ajax_file1.php','<?php echo $field1 ?>')" id="here<?php echo $field1 ?>" >    
				<!--<div id="here<?php echo $field1 ?>">Chapters</div>-->
				<?php echo"   <div class='element feature halogen width2 height2 '>";
				echo"  <h2 class='number'>".$field1."</h2>";
				echo"  <h3 class='name'>".$field2."</h3>";
				//echo"  <p calss='weight'>policy</p>";
				/*/-----------------------------------------------
				if($field1<10)
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$field1['chapter_no']."head.pdf><p calss='nweight' style=' font-size: 0.5em;
  left: 0.5em;
  top: 0.5em;'>Chapter</p></a>";
			//echo"<br>";
			echo"<a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$field1['chapter_no']."foot.pdf><p calss='weight'style=' font-size: 0.5em;
  left: 0.5em;
  top: 1.3em;'>Policy</p></a></center>";
			echo"<br>";
		}
		else
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/".$field1['chapter_no']."head.pdf><p calss='weight'>Chapter</p></a>";
			//echo "<br>";
			echo"<a href=http://dgftcom.nic.in/licasp/itchs2012/".$field1['chapter_no']."foot.pdf><p calss='weight'>Policy</p></a></center>";
			echo"<br>";
			
		}
				//-------------------------------------------------*/
				echo" </div>";;
				echo" </a>";
				}
	
	
echo"</div>";							
}

$val=(int) $_GET['name'];

call($val);

?>
</html>
