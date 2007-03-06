<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Sommercamp � tre uger p� h�jskole');
$tpl->set('meta', array(
	'description' => 'P� tre ugers sommercamp kan du forberede og kvalificere dig til studiet.',
	'keywords' => 'sommercamp, h�jskole'));

$tpl->set('content_main', '
			<h1>Sommercamp � tre fede uger p� h�jskole</h1>

			<p>Her er chancen for at f� tre fede uger p� h�jskole, hvor du b�de f�r faglige udfordringer, nyt netv�rk og en masse oplevelser. Sommercamp er en ny m�de at v�re p� h�jskole p�. Det er intenst. Det er h�rdt arbejde. Men det er f�rst og fremmest sjovt!</p>

			<p>Brug tre uger p� at <strong>udvikle dig</strong>, <strong>forberede dig</strong> og <strong>kvalificere dig</strong>. Til studiet og til livet - og hvis du har anden etnisk baggrund end dansk, koster det <strong>kun 500 kroner</strong></p>

			<h2>Her kan du tage p� sommercamp</h2>

			<div class="hojskole" id="ronde">
				<h2><a href="http://www.rhe.dk/hojskole/">R�nde H�jskole</a></h2>
				<ul>
					<li>Studieengelsk</li>
					<li>Kemi og biokemi</li>
					<li>Eksamensforberedelse</li>
					<li>Historie</li>
					<li>Samfundsfag og religionsm�de</li>
				</ul>
				<p><a href="ronde.php">L�s om Sommercamp R�nde</a></p>
			</div>

			<div class="hojskole" id="egaa">
				<h2><a href="http://www.euh.dk/">Eg� Ungdomsh�jskole</a></h2>
				<ul>
					<li>Dansk og matematik</li>
					<li>Kommunikation</li>
					<li>Samfundsl�re og historie</li>
					<li>Design</li>
					<li>Idr�t</li>
				</ul>
				<p><a href="egaa.php">L�s om Sommercamp Eg�</a></p>
			</div>

			<div class="hojskole" id="vih">
				<h2><a href="http://www.vih.dk/">Vejle Idr�tsh�jskole</a></h2>
				<ul>
					<li>Dansk og matematik</li>
					<li>Kommunikation og formidling</li>
					<li>Samfundsfag og historie</li>
					<li>Idr�t</li>
				</ul>
				<p><a href="vih.php">L�s om Sommercamp Vejle</a></p>

			</div>

			<br style="clear: both;" />

			<h2>Hvem er sommercamp for?</h2>
			<ul>
				<li>Alle der er fyldt 16� ved kursets start (optagelseskrav)</li>
				<li>Unge der vil forbedre faglige kompetencer is�r i dansk og matematik.</li>
				<li>Unge der har brug for at kunne formidle, fx ved eksaminer (kommunikation)</li>
				<li>Unge der vil have et overskud i den kommende ungdomsuddannelse</li>
				<li>Unge der skal til sygeeksamen</li>
			</ul>

			<h2>Tilmeld dig</h2>

			<p>Du kan tilmelde dig ved at udfylde <a href="tilmeldingsommercamp2007.pdf">tilmeldingsblanketten (pdf)</a> og sende den til den h�jskole, du gerne vil p�.</p>
');

echo $tpl->fetch('main-tpl.php');