<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Sommercamp – tre uger på højskole');
$tpl->set('meta', array(
	'description' => 'På tre ugers sommercamp kan du forberede og kvalificere dig til studiet. Sommercamp koster kun 500 kroner for indvandrere.',
	'keywords' => 'sommercamp, højskole'));

$tpl->set('content_main', '
			<h1>Sommercamp – tre fede uger på højskole</h1>

			<p>Her er chancen for at få tre fede uger på højskole, hvor du både får faglige udfordringer, nyt netværk og en masse oplevelser. Sommercamp er en ny måde at være på højskole på. Det er intenst. Det er hårdt arbejde. Men det er først og fremmest sjovt!</p>

			<p>Brug tre uger på at <strong>udvikle dig</strong>, <strong>forberede dig</strong> og <strong>kvalificere dig</strong>. Til studiet og til livet - og hvis du har anden etnisk baggrund end dansk, koster det <strong>kun 500 kroner</strong></p>

			<h2>Her kan du tage på sommercamp</h2>

			<div class="hojskole" id="ronde">
				<h2><a href="http://www.rhe.dk/hojskole/">Rønde Højskole</a></h2>
				<ul>
					<li>Studieengelsk</li>
					<li>Kemi og biokemi</li>
					<li>Eksamensforberedelse</li>
					<li>Historie</li>
					<li>Samfundsfag og religionsmøde</li>
				</ul>
				<p><a href="ronde-sommercamp.php">Læs om Sommercamp Rønde</a></p>
			</div>

			<div class="hojskole" id="egaa">
				<h2><a href="http://www.euh.dk/">Egå Ungdomshøjskole</a></h2>
				<ul>
					<li>Dansk og matematik</li>
					<li>Kommunikation</li>
					<li>Samfundslære og historie</li>
					<li>Design</li>
					<li>Idræt</li>
				</ul>
				<p><a href="egaa-sommercamp.php">Læs om Sommercamp Egå</a></p>
			</div>

			<div class="hojskole" id="vih">
				<h2><a href="http://www.vih.dk/">Vejle Idrætshøjskole</a></h2>
				<ul>
					<li>Dansk og matematik</li>
					<li>Kommunikation og formidling</li>
					<li>Samfundsfag og historie</li>
					<li>Idræt</li>
				</ul>
				<p><a href="vih-sommercamp.php">Læs om Sommercamp Vejle</a></p>

			</div>

			<br style="clear: both;" />

			<h2>Hvem er sommercamp for?</h2>
			<ul>
				<li>Alle der er fyldt 17½ i Vejle og Rønde og 16½ i Egaa ved kursets start kan optages</li>
				<li>Unge der vil forbedre faglige kompetencer især i dansk og matematik.</li>
				<li>Unge der har brug for at kunne formidle, fx ved eksaminer (kommunikation)</li>
				<li>Unge der vil have et overskud i den kommende ungdomsuddannelse</li>
				<li>Unge der skal til sygeeksamen</li>
			</ul>

			<h2>Tilmeld dig</h2>

			<p>Du kan tilmelde dig sommercamp ved at udfylde <a href="tilmeldingsommercamp2007.pdf">tilmeldingsblanketten (pdf)</a> og sende den til den højskole, du gerne vil på.</p>

			<h2>Læs mere</h2>

			<p>Vi har lavet en brochure, som er delt op i <a href="'. rawurlencode('Pjece3xhojskole-forbag-72dpi 2.pdf').'">den ene side</a> og <a href="'. rawurlencode('Pjece3xhojskole-inder-72dpi 2.pdf').'">den anden side</a>. Tjek også vores <a href="faq.php">ofte stillede spørgsmål</a>, hvor du bl.a. kan få at vide, hvem der kun skal betale <strong>500 kroner</strong> for tre fede uger på højskole.</p>
');

echo $tpl->fetch('main-tpl.php');