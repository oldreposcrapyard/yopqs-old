<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php include 'inc/config.inc.php'; ?>
<html><head>
<TITLE>Wygra&#322;e&#347; <?php echo "$quiz_name"; ?> - Marcinl's php quiz</TITLE>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=iso-8859-2">
<link rel="stylesheet" type="text/css" href="styl.css">
</HEAD>
<BODY BGCOLOR="#434242">

<TABLE WIDTH=750 BORDER=0 CELLPADDING=0 CELLSPACING=0 align=center>
	<TR>
		<TD COLSPAN=3>
			<IMG SRC="img/logo.jpg" WIDTH=750 HEIGHT=176 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=3 style="background:URL('img/index_02.jpg');" width=750 height=38 valign=center>
		<table border=0 width=660 align=center><tr><Td><A HREF="index.php"  class=dwa>STRONA G&#321;ÓWNA</A> | <A HREF="http://www.stw.net23.net/" class=dwa>Strona autora</A> | <A HREF="<?php echo "$link1"; ?>" class=dwa><?php echo "$link1_name"; ?></A> | <A HREF="<?php echo "$link2"; ?>" class=dwa><?php echo "$link2_name"; ?></A> | <A HREF="mail.php" class=dwa>KONTAKT do autora skryptu</A></TD></TR></TABLE></TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<IMG SRC="img/index_03.gif" WIDTH=750 HEIGHT=23 ALT=""></TD>
	</TR>
	<TR>
		<TD style="background:URL('img/index_04.gif');" width=71></TD>
		<TD bgcolor=white width=607>
		
		
		<center><h2>Przeszed&#322;e&#347; ca&#322;y <?php echo "$quiz_name"; ?></h2>
		<BR><?php echo "$won_page_content"; ?><br>
                <center><h1><a href="/index.php">Strona g&#322;ówna</a></h1></center>


		
			</TD>
		<TD style="background:URL('img/index_06.gif');" width=72>
			</TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<IMG SRC="img/index_07.gif" WIDTH=750 HEIGHT=80 ALT=""></TD>
	</TR>
</TABLE>

</BODY>
</HTML>