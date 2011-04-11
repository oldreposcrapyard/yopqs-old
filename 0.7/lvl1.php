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

session_start();
$this_lvl = 1;
if (!IsSet($_SESSION['actual_lvl'])) {
$_SESSION['actual_lvl'] = 1;
} //!IsSet($_SESSION['actual_lvl'])
require_once 'inc/config.inc.php';
$lang_file = "$lang.lang.php";
require_once "lang/$lang_file";
require_once 'inc/checkpass.func.php';
$next_lvl = $this_lvl + 1;
$next_lvl_adres = "lvl$next_lvl.php";
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$PHP_SELF = $parts[count($parts) - 1]; 
if (isSet($_POST["haslo"])) {
if (checkPass($passwds[$this_lvl], $_POST['haslo'])) {
echo <<<TYT
	<link rel="Stylesheet" type="text/css" href="inc/style_frames.css" />
	<div id="text">
	<p>$LANG[togettonextlevel]
	<a href="$next_lvl_adres">$LANG[hereuppercase]</a>. </p>
	</div>
TYT;
$_SESSION['actual_lvl'] = $next_lvl;
}
else {
echo "
<link rel=\"Stylesheet\" type=\"text/css\" href=\"inc/style_frames.css\" />
<div id=\"fail\">
<p> $LANG[fail] </p>
</div>";
include_once("$PHP_SELF");
}
}
else {
include_once("$PHP_SELF");
}
echo "
<p>$question[$this_lvl]</p>
$img[$this_lvl]
<p>$LANG[youranswer]:</p>
<FORM NAME = \"formularz1\"
ACTION = \"$PHP_SELF\"
METHOD = \"POST\">
<INPUT TYPE=\text\" NAME=\"haslo\">
<BR><BR>
<INPUT TYPE=\"submit\" VALUE=\"$LANG[ianswer]\">
</FORM>
";
include 'inc/foot.html';
?>