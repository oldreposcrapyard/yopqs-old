<?PHP 
$question = "\"Zakr&#281;ty s&#261; dziwne dla Amerykan�w tak jak ma&#322;e porcje i prezydent, kt�ry umie literowa&#263;.\" W kt�rym roku urodzi&#322;a si&#281; osoba kt�ra to powiedzia&#322;a?";
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