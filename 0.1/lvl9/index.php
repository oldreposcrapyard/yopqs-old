<?PHP 
$question = "Ale ty osch&#322;y jeste&#347;. Jak ............. - Uzupe&#322;nij cytat z \"BrzydUli\".";
$img =  "<img src=\"violet.JPG\" alt=\"Violetta\" />";
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