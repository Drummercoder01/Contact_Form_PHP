<?php
/*****************
 * Initialisatie *
 *****************/
$_output="";


/*****************
 * Verwerking    *
 *****************/
if (!isset($_POST['submit']))
{
	//********* Formulier initialisatie **********
	$_output="
 <form method=post action='php02_v_1b_contact.php'>
    <label>Naam :</label>
    <input type=text name=vnaam placeholder=Voornaam>
    <input type=text name=anaam placeholder=Achternaam>
    <br><br>
    <label>e-mail :</label>
    <input type=email name=mail placeholder=email>
    <br> <br>
    <input type=submit name=submit  value=Verzenden >
  </form>";
}
else 
{
	//********* Formulier verwerking **********  
	$_voorNaam = $_POST["vnaam"];
	$_achterNaam = $_POST["anaam"];
	$_email = $_POST["mail"];


	//********* verwerking **********  
	$_output="<h1>Contact gegevens</h1>
	 <h2>$_voorNaam &nbsp; $_achterNaam
	 <br>
	 $_email
	 </h2>";
}

/*****************
 *   output      *
 *****************/

echo($_output);

?>
