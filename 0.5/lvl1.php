<?PHP
require_once 'inc/config.inc.php';
require_once 'inc/checkpass.func.php';
$this_lvl    = 1;
$next_lvl    = $this_lvl + 1;
//nazwa tej strony
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts       = Explode('/', $currentFile);
$PHP_SELF    = $parts[count($parts) - 1]; //name of this file
if (isSet($_POST["haslo"]))
	{
	if (checkPass($passwds_lvl1, $_POST['haslo']))
		{
		header("Location: http://www.example.com"); // tu ma być ramka z linkiem takim jak w php awesome contact formlvl$next_lvl.php
		} //checkPass($_POST["haslo"])
	else
		{
		include_once("$PHP_SELF");
		}
	} //isSet($_POST["haslo"])
else
	{
	include_once("$PHP_SELF");
	}
//start strony
//$question = 'Osoba na zdjęciu to?';// IS IN CONFIG
//$img      = '<img src="img/image.PNG" alt="obrazek" />'; IS IN CONFIG
// U góry wszystkie opcje
echo <<<TT
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
</HEAD>
<BODY>
<p>$question_lvl1</p>
$img_lvl1
<p>Odpowiedz:</p>
<FORM NAME = "formularz1"
      ACTION = "$PHP_SELF"
      METHOD = "POST">
<INPUT TYPE="text" NAME="haslo">
<BR><BR>
<INPUT TYPE="submit" VALUE="Odpowiadam">
</FORM>
TT;
include 'inc/foot.html';
echo '</BODY></HTML>';
// " sš problemem bo kończš instrukcję echo zamiennik \"
//polskie znaki w sprawd i odpowiedz
?>