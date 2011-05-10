<?PHP 
$question = "Jak nazywa si&#281; &#380;ona g&#322;owy pa&#324;stwa ksi&#281;stwa Sealand?";
$img =  "<img src=\"sealand.JPG\" alt=\"Ksi&#281;stwo Sealand\" />";
// U góry wszystkie opcje
echo
("
<HTML>
<HEAD>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-2\" />
</HEAD>
<BODY>
<p>$question</p>
$img
<p>Odpowiedz:</p>
<FORM NAME = \"formularz1\"
      ACTION = \"login.php\"
      METHOD = \"POST\">
<INPUT TYPE=\"text\" NAME=\"haslo\">
<BR><BR>
<INPUT TYPE=\"submit\" VALUE=\"Odpowiadam\">
</FORM>
</BODY>
</HTML>");
include("foot.html");
// " sš problemem bo kończš instrukcję echo zamiennik \"
//polskie znaki w sprawd&#65533; i odpowiedz
?>