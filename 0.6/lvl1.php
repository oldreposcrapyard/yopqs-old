<?PHP
// Copyright (C) 2010 by Marcin Lawniczak <marcin.safmb@wp.pl> |<www.stw.net23.net>

// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 3
// of the License, or (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

require_once 'inc/config.inc.php';
require_once 'inc/checkpass.func.php';
$this_lvl    = 1;
$next_lvl    = $this_lvl + 1;
$next_lvl_adres = "/lvl$next_lvl.php";
//nazwa tej strony
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts       = Explode('/', $currentFile);
$PHP_SELF    = $parts[count($parts) - 1]; //name of this file
if (isSet($_POST["haslo"]))
	{
	if (checkPass($passwds_lvl1, $_POST['haslo']))
		{
		echo <<<TYT
<style>

		#text {
		background: #99FF99;
		border: 1px solid #336600;
		-moz-border-radius: 5px;
		display: block;
		margin-top: 1em;
		margin-right: 0px;
		border-bottom-left-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
		border-top-left-radius: 5px 5px;
		border-top-right-radius: 5px 5px;
		height: 38px;
		width: 500px;
		}

		#text p {
		font-size: 12px;
		color: #336600;
		font-family: "Trebuchet MS";
		font-weight: bold;
		margin-bottom: 11px;
		margin-left: 0px;
		margin-right: 0px;
		margin-top: 10px;
		text-indent: 8px;
		height: 16px;
		background: url(img/accept.png) no-repeat;
		background-position: 10px;
		padding-left: 22px;
		}
</style>

<div id="text">
<p>Odpowied&#378; poprawna. Aby przej&#347;&#263; do nast&#281;pnego poziomu, kliknij 
<a href="$next_lvl_adres">TU</a>. </p>
</div>
TYT;
// tu ma byæ ramka z linkiem takim jak w php awesome contact formlvl$next_lvl.php
		} //checkPass($_POST["haslo"])
	else
		{
echo '<style>

		#fail {
		background: #CC9999;
		border: 1px solid #A9343D;
		-moz-border-radius: 5px;
		display: block;
		margin-top: 1em;
		margin-right: 0px;
		border-bottom-left-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
		border-top-left-radius: 5px 5px;
		border-top-right-radius: 5px 5px;
		height: 38px;
		width: 500px;
		}

		#fail p {
		font-size: 12px;
		color: #A9343D;
		font-family: "Trebuchet MS";
		font-weight: bold;
		margin-bottom: 11px;
		margin-left: 0px;
		margin-right: 0px;
		margin-top: 10px;
		text-indent: 8px;
		height: 16px;
		background: url(img/delete.png) no-repeat;
		background-position: 10px;
		padding-left: 22px;
		}
</style>

<div id="fail">
<p>Odpowied&#378; z&#322;a, spróbuj jeszcze raz. </p>
</div>';		
include_once("$PHP_SELF");
		}
	} //isSet($_POST["haslo"])
else
	{
	include_once("$PHP_SELF");
	}
//start strony
//$question = 'Osoba na zdjêciu to?';// IS IN CONFIG
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
// " s¹ problemem bo koñcz¹ instrukcjê echo zamiennik \"
//polskie znaki w sprawdŸ i odpowiedz
?>