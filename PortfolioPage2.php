<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contactpagina en Over mij</title>
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
  width: 25%;
  background-color: #3756;
  height: 830px; /* only for demonstration, should be removed */
}
section {
  float: left;
  padding: 20px;
  width: 69%;
  background-color: #3756;
  height: 830px; /* only for demonstration, should be removed */
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

input[type=submit] {
    border: 1px solid #3756;
    color: #0e0e0e;
    background: #3756;
    padding: 10px 20px;
    border-radius: 3px;
}
input[type=submit]:hover {
    background: rgba(51, 119, 85, 0.51);
}
    input[type=text]  {
        border: 1px solid #3756;
        color: #0e0e0e;
        background: #3756;
        padding: 10px 20px;
        border-radius: 3px;
    }
    input[type=text]:focus {
        background: rgba(51, 119, 85, 0.51);

	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="Content-Script-Type" content="text/javascript">
	<meta name="Content-Style-Type" content="text/css">
</head>
<body>
<header>
	<h2> <big><i>Portfolio Website: Jeffrey van Tillo</i></big></h2>
</header>
<article>
	<hr/>
	<h1 style="text-align:center;"> <big><i>Contacteren kan via</i></big></h1>
	<hr/>
	
	<h3>E-mailadress: contact.jeffreyvantillo@gmail.com </h3>
	<h3>Telefoonnummer: 0683772584</h3>
    <h3>Of via het contactformulier hieronder!</h3>
	<h1 style="text-align:center;"><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-contact-512.png" width="300" height="300"></h1></b>
    <form Method="POST">
        <hr/>
        <h1 style="text-align:center;"> <big><i>Contactformulier</i></big></h1>
        <hr/>
        <table>
			<tr>
			<td>Naam: 					</td>
                <td><INPUT NAME="Naam" TYPE="Text" />	</td>
			</tr>
            <tr>
                <td>E-mailadress: 				</td>
                <td><INPUT NAME="Emailadress" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td>Bericht:                   </td>
                <td><INPUT NAME="Message" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><Input name="btnSave" type="submit"/></td>
                <td><h4><?php include 'PortfolioContactData.php' ?> </h4> </td>
            </tr>
        </table>
    </form>
</article>
<section>
	<hr/>
	<h1 style="text-align:center;"><big><i>Over mij</i></big></h1>
	<hr/>
	<h3 style="text-align:center;">
	Mijn naam is Jeffrey en ik ben 18 jaar oud. Ik heb 2 katten en 1 hond. Ik luister graag naar muziek en onderhoud ook graag </br>
	mijn contact met online vrienden. Ik woon in Bergen op Zoom. Ik heb mijn middelbare school afgerond op VMBO-Tl niveau en volg </br>
	op dit moment de opleiding Applicatie- Media ontwikkelaar niveau 4 op het Zoomvliet College in Roosendaal. </br>
	</br>
	Ik heb deze opleiding gekozen, omdat ik wist dat er veel werk in te vinden was en ik vanaf jong af aan al bezig was met de computer.</br>
	Ik zat toen echter nog niet in het programmeervak, maar ik had er dus altijd al mijn interesses in. </br>
	Voor mij is het internet ook erg belangrijk, omdat ik er veel mensen heb leren kennen en daardoor ook veel vrienden heb gemaakt. </br>
	</br>
	Ik heb erg veel geleerd op de opleiding Applicatie- Media ontwikkelaar, want natuurlijk gaat niet altijd alles goed. Je moet niet </br>
	opgeven in wat je doet. Als je doorzet kan je verder groeien en zo je doelen bereiken. Niet iedere applicatie zet je zonder problemen </br>
	in elkaar. Je moet er tijd in steken en zo moet je zorgen dat jij de applicatie bouwt waar de klant naar vraagt. </br>
	</h3>
	<img> src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/51989080_1993015534129151_3868869032287404032_n.jpg?_nc_cat=101&_nc_ht=scontent-amt2-1.xx&oh=97b44f67e439a354bdf74de6c057dbae&oe=5CE10E9A" width="400" height="410">
</section>	
<ul>
	<li><a href="/PortfolioPage1.php">Curriculum Vitae</a></li>
	<li><a class="active" href="/PortfolioPage2.php">Contact</a></li>
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
<?php

if(isset($_POST["btnSave"]))
{
    $Naam = $_POST["Naam"];
    $Emailadress = $_POST["Emailadress"];
    $Message = $_POST["Message"];

    //Load Composer's autoloader
    require 'Mailer/PHPMailer.php';
    require 'Mailer/SMTP.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'Mail@Example.com';                 // SMTP username
        $mail->Password = 'ExamplePassword';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('contact.jeffreyvantillo@gmail.com', 'Jeffrey');
        $mail->addAddress('contact.jeffreyvantillo@gmail.com', 'Jeffrey');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contactformulier';
        $mail->Body     = 'Afzender: '. $Emailadress .'<br/>';
        $mail->Body   .= '<br/>';
        $mail->Body    .= 'Beste Jeffrey van Tillo, <br/>';
        $mail->Body    .= '<br/>';
        $mail->Body    .= 'Het contactformulier is ingevuld door '. $Naam .'.<br/>';
        $mail->Body    .= '<br/>';
        $mail->Body    .= ''. $Message .'<br/>';


        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}


?>
