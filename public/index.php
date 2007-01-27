<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Sommercamp – tre uger på højskole');
$tpl->set('meta', array('description' => '', 'keywords' => ''));

$tpl->set('content_main', '
		 	<img src="campsommer.jpg?dfdfd" width="700" heigh="260" alt="" />

			<h1>Sommercamp – tre uger på højskole</h1>

			<p></p>Her er chancen for at få tre fede uger på højskole, hvor du både får faglige udfordringer, nyt netværk og en masse oplevelser. Sommercamp er en ny måde at være på højskole på. Det er intenst. Det er hårdt arbejde. Men det er først og fremmest sjovt!</p>

			<p>Brug tre uger på at <strong>udvikle dig</strong>, <strong>forberede dig</strong> og <strong>kvalificere dig</strong>. Til studiet og til livet.</p>

			<h2>Her kan du tage på Sommercamp</h2>

			<div class="hojskole" id="ronde">
				<h2><a href="http://www.rhe.dk/hojskole/">Rønde Højskole</a></h2>
				<ul>
					<li>Studieengelsk</li>
					<li>Kemi og biokemi</li>
					<li>Eksamensforberedelse</li>
					<li>Historie</li>
					<li>Samfundsfag og religionsmøde</li>
				</ul>
				<p><a href="ronde.php">Mere om Sommercamp Rønde</a></p>
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
				<p><a href="egaa.php">Mere om Sommercamp Egå</a></p>
			</div>

			<div class="hojskole" id="vih">
				<h2><a href="http://www.vih.dk/">Vejle Idrætshøjskole</a></h2>
				<ul>
					<li>Dansk og matematik</li>
					<li>Kommunikation og formidling</li>
					<li>Samfundsfag og historie</li>
					<li>Idræt</li>
				</ul>
				<p><a href="http://www.vih.dk/kortekurser/219/">Mere om Sommercamp Vejle</a></p>

			</div>

			<br style="clear: both;" />

			<h2>Tilmeld dig</h2>

			<p>Du kan tilmelde dig ved at udfylde <a href="tilmeldingsommercamp2007.pdf">tilmeldingsblanketten (pdf)</a> og sende den til den højskole, du gerne vil på.</p>
');

echo $tpl->fetch('main-tpl.php');