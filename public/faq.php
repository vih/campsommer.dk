<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Sommercamp FAQ');
$tpl->set('meta', array('description' => '', 'keywords' => ''));
$tpl->set('body_attributes', '');

$tpl->set('content_main', '

<h1>Svar p� sp�rgsm�l</h1>

<h2>Hvem kan f� st�tte?</h2>

<p>Indvandrere og efterkommere af indvandrere kan f� st�tte.</p>

<dl>
	<dt>Ved indvandrere forst�s</dt>
	<dd>En person, der er f�dt i udlandet, og hvis for�ldre begge (eller den ene hvis der ikke findes oplysninger om den anden) er udenlandske statsborgere eller f�dt i udlandet. Hvis der ikke findes oplysninger om nogen af for�ldrene, og personen er f�dt i udlandet, opfattes personen ogs� som indvandrer.</dd>
	<dt>Ved efterkommere af indvandrere forst�s:</dt>
	<dd>En person, der er f�dt i Danmark af for�ldre, som begge (eller den ene hvis der ikke findes oplysninger om den anden) er indvandrere eller efterkommere. Hvis der ikke findes oplysninger om nogen af for�ldrene, og personen er udenlandsk statsborger, opfattes personen som efterkommer.</dd>
	<dt>Ved st�tteberettigede tredjelande forst�s:</dt>
	<dd>De lande, som af Danmarks Statistik er omfattet af definitionen, dvs. landene i Afrika, Syd- og Mellemamerika, Asien (undtagen Japan) og Oceanien (Undtagen Australien og New Zealand) samt f�lgende europ�iske lande: Tyrkiet, Cypern, Aserbajdsjan, Usbekistan, Kasakhstan, Turkmenistan, Kirgisistan, Tadsjikistan, Georgien og Armenien.</dd>
</dl>

');

echo $tpl->fetch('main-tpl.php');
?>