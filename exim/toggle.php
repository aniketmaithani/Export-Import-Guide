<!DOCTYPE html>
<html lang="en">
	<?php include 'header.tpl.php'; ?>

<script type="text/javascript">
function loadXMLDoc(url,para)
{
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
           document.getElementById("my"+para).innerHTML=xmlhttp.responseText;
       }
    xmlhttp.open("GET",url+"?name="+para,true);
    xmlhttp.send();
    
}

function loadXMLDoc1(url,para)
{ 
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
          document.getElementById("here"+para).innerHTML=xmlhttp.responseText;
      }
    xmlhttp.open("GET",url+"?name="+para,true);
    xmlhttp.send();
}

</script>
</head>

	
	<body>
    <div class="spinner"></div> 
    <!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="navik.html"><img alt="" src="img/logo.jpg"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="index.php">Home</a></li>
                
		<li ><a href="about.php">About</a></li>
		
                <li ><a href="service.php">Services</a></li>
                     
                  
                  <li class="active"><a href="help.php">Help</a></li>
             
                  
                  <li class="act"><a href="3-click.html">3-Click </a></li>
                </li>
              </ul>
                  
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row navigationArea">
          <div class="span12"> 
          <!------------------------------------------------------------------>
        
	
		<a href="#" class="toggle">Toggle</a>
		<div class="my1"> content </div>
    	</div>
    	<script>
    	$('.toggle').click(function(){
    		$('.my1').toggle('slow');
    	});
    	</script>
    
    <!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>
</body>
</html>
 
