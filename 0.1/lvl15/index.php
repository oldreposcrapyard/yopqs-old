<?PHP 
$question = "Takie du&#380;e, &#380;e zajmuje ca&#322;y &#347;wiat,
takie ma&#322;e, &#380;e wniknie w najmniejsz&#261; szczelink&#281;.";
$img =  "";
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
//polskie znaki w sprawd i odpowiedz
?>