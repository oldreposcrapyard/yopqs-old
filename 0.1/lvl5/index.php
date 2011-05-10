<?PHP 
$question = "Przet&#322;umacz na zrozumia&#322;e dla cz&#322;owieka: 0100111001101111001000000110111001100001011100100110010101110011011<br>11010011000110110100101100101001000010010000001010010011011110111101001110111011010011011100101111<br>0100110000101101110011010010110010100100000011101000110111100111010010101110110100101101011011010010110111101101110";
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