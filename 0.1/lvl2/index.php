<?PHP 
$question = "Jak nazywa si� konstruktor tego karabinu?";
$img =  "<img src=\"aks.PNG\" alt=\"obrazek\" />";
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