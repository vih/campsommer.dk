<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Eg� H�jskole - Bliv klar til en ungdomsuddannelse');
$tpl->set('meta', array('description' => 'Sommercamp: Tre forrygende h�jskoleuger sammen med andre unge inden du starter p� en uddannelse.', 'keywords' => 'sommercamp, h�jskole'));
$tpl->set('body_attributes', 'class="sidebar"');

$tpl->set('content_main', '
<h1>SommerCamp Eg�</h1>
			<h2>Bliv klar til en ungdomsuddannelse</h2>

			<p>Tre forrygende h�jskoleuger sammen med andre unge inden du starter p� en uddannelse.</p>
			<p>Inspireret af de amerikanske summercamps tilbyder vi dig at f� pudset kundskaberne af i <strong>dansk</strong> og <strong>matematik</strong>. Vi har desuden faget <strong>Kommunikation</strong> p� skemaet. Her er m�let at du bliver bedre til at udtrykke dig. I disse fag vil vi tage udgangspunkt i det niveau du befinder dig p�. Ideen er nemlig at du skal pr�ve at lukke huller der g�r ungdomsuddannelsen lettere at h�ndtere. Derfor er der tale om sm� undervisningshold der giver plads til dine problemstillinger.</p>
			<p>Du vil ogs� h�re om nogle <strong>samfundsl�re og historie</strong> s�ledes at du kender nogle vigtige epoker i det samfund du er en del af.</p>
			<p>Vi har desuden sat fagene <strong>design</strong> og <strong>idr�t</strong> p� skemaet. Her f�r du lejlighed til at besk�ftige dig med nogle kreative, sjove og udviklende ting.</p>
			<p>I de tre uger du er p� h�jskolen lever og bor du sammen med en gruppe j�vnaldrende unge. Planen er, at du f�r en lang r�kke nye venner fra hele landet.</p>
			<p>Det bliver en sommerferie du aldrig glemmer og s� er du helt sikkert helt klar til det efterf�lgende.</p>
			<h2>Pris</h2>
			<p>Vi pr�ver at holde prisen meget lav, nemlig 4.500 kr for 3 uger. Hvis du er ung med anden etnisk baggrund end dansk udl�ser du et tilskud der g�r, at du selv kun skal betale 500 kr for hele kurset.</p>

');

$tpl->set('content_sub', '<h2>L�s mere</h2><p><a href="http://www.euh.dk/">www.euh.dk</a></p>');

echo $tpl->fetch('main-tpl.php');
