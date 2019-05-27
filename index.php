<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio</title>
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
  width: 49%;
  background-color: #3756;
  height: 900px; /* only for demonstration, should be removed */
}
section {
  float: left;
  padding: 20px;
  width: 45%;
  background-color: #3756;
  height: 900px; /* only for demonstration, should be removed */
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
</head>
<body>
<header>
	<h2> <big><i>Portfolio Website: Jeffrey van Tillo</i></big></h2>
</header>
<section>
	<hr/>
	<h1 style="text-align:center"> <big><i>Curriculum Vitae</i></big></h1>
	<hr/>
	<blockquote>
	<h1> <b>Persoonsgegevens:</b></h1>
	<h3>Naam: --- </h3>
	<h3>Adres: ---</h3>
	<h3>Woonplaats: ---</h3>
	<h3>Telefoon: ---</h3>
	<h3>Geboortedatum: ---</h3>
	<h3>Geboorteplaats: ---</h3>
	<h3>E-mailadress: ---</h3>
	<h3>Rijbewijs: ---	
	<h3>Microsoft kennis: --- </h3>
	<h3>Programmeertalen: --- </h3>
	</blockquote></b>
	<hr/>
	<blockquote>
	<h1><b>Opleiding:</h1></b>		
	</blockquote>
	<table>
		<tr> 
			<th>Jaar</th>
			<th>Opleiding</th>
			<th>Locatie</th>
		</tr>	
		<tr>
			<td><b> 2018-Heden	</b></td>
			<td><b>  -  MBO Media- Applicatie ontwikkelaar</b></td>
			<td><b>	 -  Zoomvliet College, Roosendaal</b></td>
		</tr>				
		<tr>
			<td><b>2014-2018</b></td>
			<td><b> -  VMBO Theoretische Leerweg</b></td>
			<td><b> -  Zoommavo, Bergen op Zoom</b></td>
		</tr>
	</table>
	<hr/>
	<blockquote>
	<h1><b>Taalvaardigheden:</h1></b>
	<h3> Nederlands - Moedertaal </h3>
	<h3>Engels - Goed</h3>
	<h3>Duits - Basis</h3>
	<hr/>
	</blockquote>
</section>
<article>
	<hr/>
    <br/>
    <h2 style="text-align: center"><?php include 'TipVanDeDag.php' ?> </h2>
    <br/>
    <hr/>
    	<img src="https://www.kitzbueheler-alpen.com/media/Zoombilder/skifahrerin-choralpe-skiwelt-stefaneisend-tvb-brixentaldsc2934-1.jpg" width="724" height="583">
    <hr/>
</article>
<ul>
	<li><a class="active" href="/index.php">Curriculum Vitae</a></li>
	<li><a href="/PortfolioPage2.php">Contact</a></li>
	<li><a href="/PortfolioPage3.php">Projecten</a></li>
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
