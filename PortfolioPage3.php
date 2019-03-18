<!DOCTYPE html>
<html lang="en">
<head>
	<title>Projecten Pagina</title>
	<style>
	hr {
border: 1px solid #204b367d;
}
	body {
	background-color: #c1ecff69;
	}
	/* Style the header */
header {
  background-color: #333;
  padding: 1px;
  text-align: center;
  font-size: 25px;
  color: white;
}
article {
  float: right;
  padding: 20px;
  width: 34%;
  background-color: #3756;
  height: 930px; /* only for demonstration, should be removed */
}
section {
  float: left;
  padding: 20px;
  width: 60%;
  background-color: #3756;
  height: 930px; /* only for demonstration, should be removed */
}
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #333;
}

.active {
  background-color: #3756;
}

	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="Content-Script-Type" content="text/javascript">
	<meta name="Content-Style-Type" content="text/css">
</head>
<body>
<header>
	<h2> <big><i>Portfolio Website: Jeffrey van Tillo</i></big></h2>
</header>
<section>
    <h1> Vakantiepark huisjesverhuur</h1>
    <hr/>
	<h3> <?php include 'QueryPortfolio.php'?></h3>
    <hr/>

</section>
<article>
    <h1> Mijn huidige projecten:</h1>
    <h4>- <a href="https://github.com/WorldwideErrors/Vakantiepark_HolidayForFun"> Vakantiepark - Holiday for Fun</a></h4>
    <h4>- <a href="https://github.com/WorldwideErrors/Rekenspel_DeRekenKoning">Rekenspel - De Reken Koning</a></h4>
    <h4>- <a href="https://github.com/WorldwideErrors/KassaApplicatie_BlackTulipRetail">Kassa Applicatie - Black Tulip Retail</a></h4>
</article>
<ul>
	<li><a href="/PortfolioPage1.php">Curriculum Vitae</a></li>
	<li><a href="/PortfolioPage2.php">Contact</a></li>
	<li><a class="active" href="/PortfolioPage3.php">Projecten</a></li>
	<li>
		<script type="text/javascript">
		document.write ('<p style="color:white; font-size: 15px;">De huidige tijd is: <span id="date-time">', new Date().toLocaleString(), '<\/span><\/p>')
		if (document.getElementById) onload = function () {
		setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
		}
		</script>
	</li>
	</ul>
</body>
</html>
<?php


?>