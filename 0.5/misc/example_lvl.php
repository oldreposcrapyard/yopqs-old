<?PHP
require_once 'inc/checkpass.func.php';
$PHP_SELF = 'index.php'; //name of this file
if (isSet($_POST["haslo"])) {
    if (checkPass($_POST["haslo"])) {
        header("Location: http://www.example.com/");
    } //checkPass($_POST["haslo"])
    else {
        include_once("$PHP_SELF");
    }
} //isSet($_POST["haslo"])
else {
    include_once("$PHP_SELF");
}
//start strony
$question = 'Osoba na zdj�ciu to?';
$img      = '<img src="img/image.PNG" alt="obrazek" />';
// U g�ry wszystkie opcje
echo <<<TT
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
</HEAD>
<BODY>
<p>$question</p>
$img
<p>Odpowiedz:</p>
<FORM NAME = "formularz1"
      ACTION = "$PHP_SELF"
      METHOD = "POST">
<INPUT TYPE="text" NAME="haslo">
<BR><BR>
<INPUT TYPE="submit" VALUE="Odpowiadam">
</FORM>
TT;
include 'foot.html';
echo '</BODY></HTML>';
// " s� problemem bo ko�cz� instrukcj� echo zamiennik \"
//polskie znaki w sprawd� i odpowiedz
?>