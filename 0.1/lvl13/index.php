<?PHP 
$question = "Wybieramy si&#281; w podró&#380; dooko&#322;a &#347;wiata i postanowili&#347;my zwiedzi&#263; s&#322;awne zabytki architektoniczne. Nasz przewodnik postawi&#322;<br>wszak&#380;e jeden warunek. Zwiedza&#263; b&#281;dziemy w kolejno&#347;ci od najwy&#380;szego do najni&#380;szego. Je&#347;li nasza wycieczka ma obj&#261;&#263;<br>nast&#281;puj&#261;ce obiekty: wie&#380;&#281; Eiffla w Pary&#380;u, Pa&#322;ac Kultury i Nauki w Warszawie, piramid&#281; Cheopsa ko&#322;o Kairu, krzyw&#261; wie&#380;&#281; w Pizie,<br>Uniwersytet im. &#321;omonosowa w Moskwie, Bazylik&#281; &#346;w. Piotra w Rzymie, Empire State Building w Nowym Jorku - to w jakiej<br>kolejno&#347;ci b&#281;dziemy to wszystko zwiedza&#263;, skoro mamy si&#281; zastosowa&#263; do &#380;ycze&#324; naszego dziwnego przewodnika? (wpisa&#263; numery)";
$list = "1. Wie&#380;a Eiffla<br>2. Pa&#322;ac Kultury i Nauki<br>3. Piramida Cheopsa<br>4. Krzywa wie&#380;a w Pizie<br>5. Uniwersytet im. &#321;omonosowa<br>6. Bazylika &#346;w. Piotra<br>7. Empire State Building";
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
<p>$list</p>
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
// " s¹ problemem bo koñcz¹ instrukcjê echo zamiennik \"
//polskie znaki w sprawdŸ i odpowiedz
?>