<?php
//****************************************
//  Config file
//****************************************
// Copyright (C) 2010 by Marcin Lawniczak <marcin.safmb@wp.pl> | <www.stw.net23.net>

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

//Name of the quiz
//Nazwa quizu
$quiz_name = 'example';
//What will appear on start page
//Co siê wyœwietli na stronie g³ównej
$start_page_content = '<p>Zasady s&#261; proste
<br>1. Jest 15 pyta&#324;
<br>2. Odpowied&#378; na ka&#380;de pytanie mo&#380;na znale&#378;&#263; w <a href="http://www.pl.wikipedia.org/">Wikipedii, wolnej encyklopedii</a> i <a href="http://pl.wikipedia.org/wiki/Szablon:Siostrzane">jej projektach siostrzanych</a> lub szukaj&#261;c w <a href="http://www.google.pl/">Google</a>.
<br>3. Staraj si&#281; pisa&#263; poprawnie. Je&#380;eli jeste&#347; pewien odpowiedzi a skrypt podaje &#380;e jest b&#322;&#281;dna, spróbuj napisa&#263; odpowied&#378; inaczej (z ogonkami, z du&#380;ej litery).</p>';
//linki na stronie g³ównej
//links on start page must be with http!!
//link1
$link1 = 'http://www.example.com';
$link1_name = 'example1';

//link 2
$link2 = 'http://www.example.net';//page name
$link2_name = 'example2';

//what will appear on "you have won" page
//co siê pojawi na stronie "wygra³eœ"
$won_page_content = '';

// konfigutacja pytañ
//lvl1
$question_lvl1 = 'Osoba na zdjêciu to?';
$img_lvl1      = '<img src="img/image.PNG" alt="obrazek" />';// If no image leave empty
$passwds_lvl1  = array(
	"haslo1",
	"haslo2",
	"haslo3"
);

?>