<?PHP 
$question = "Najpierw sprawdzimy czy nie jeste&#347; idiot&#261;. <BR /> Pytanie brzmi: 2+2*2 jest?";
$img =  "";
// U g�ry wszystkie opcje
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
// " s� problemem bo ko�cz� instrukcj� echo zamiennik \"
//polskie znaki w sprawd� i odpowiedz
?>