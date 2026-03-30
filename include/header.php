<meta charset="UTF-8">
	<title>Laboratory of Regulatory and Systems Genomics</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="bf-style.css" type="text/css">
<div id="bf-container">
   <div id="bf-body">
	<div id="header">
		<div class="header_table">
			<table>
  			<tr>
					<td><a href="index.php" class="logo"><img src="images/logo.png" alt=""></a></td>
					<td><a href="http://english.cas.cn/" class="logo"><img src="images/logo_cas.png" alt=""></a></td>
					<td><a href="http://english.sinh.cn/" class="logo"><img src="images/logo_sinh.png" alt=""></a></td>
  			</tr>		
  		</table>
  	</div>
  	<div class="daohan">
  		<ul id="dh">
  			<!--show(0)-->
  			<li>
  				<a href="index.php">Home</a>
  			</li>
  			<!--show(1)-->
  			<li >
  				<a href="about.php">Research</a>
  			</li>
  			<!--show(2)-->
  			<li>
  				<a href="articles.php">Publications</a>
  			</li>
  			<!--show(3)-->
  			<li>
  				<a href="people.php">People</a>
  			</li>
  			<!--show(5)-->
  			<li>
  				<a href="opendata.php">Software & Webserver</a>
  			</li>
  			<!--show(6)-->
  			<li>
  				<a href="news.php">News</a>
  			</li>
		</ul>
		</div>
	</div>
<script type="text/javascript">
		function show(i){
			var li=document.getElementById("dh").getElementsByTagName("li");
			li[i].className="selected";
		}
</script>
<?php include_once '/var/www/jianliu/TongJi.php'; ?> 
