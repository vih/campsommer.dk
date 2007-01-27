<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Sommercamp � tre uger p� h�jskole');
$tpl->set('meta', array('description' => '', 'keywords' => ''));

$tpl->set('content_main', '
		 	<img src="campsommer.jpg?dfdfd" width="700" heigh="260" alt="" />

			<h1>Sommercamp � tre uger p� h�jskole</h1>

			<p></p>Her er chancen for at f� tre fede uger p� h�jskole, hvor du b�de f�r faglige udfordringer, nyt netv�rk og en masse oplevelser. Sommercamp er en ny m�de at v�re p� h�jskole p�. Det er intenst. Det er h�rdt arbejde. Men det er f�rst og fremmest sjovt!</p>

			<p>Brug tre uger p� at <strong>udvikle dig</strong>, <strong>forberede dig</strong> og <strong>kvalificere dig</strong>. Til studiet og til livet.</p>

			<h2>Her kan du tage p� Sommercamp</h2>

			<div class="hojskole" id="ronde">
				<h2><a href="http://www.rhe.dk/hojskole/">R�nde H�jskole</a></h2>
				<ul>
					<li>Studieengelsk</li>
					<li>Kemi og biokemi</li>
					<li>Eksamensforberedelse</li>
					<li>Historie</li>
					<li>Samfundsfag og religionsm�de</li>
				</ul>
				<p><a href="ronde.php">Mere om Sommercamp R�nde</a></p>
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
				<p><a href="egaa.php">Mere om Sommercamp Eg�</a></p>
			</div>

			<div class="hojskole" id="vih">
				<h2><a href="http://www.vih.dk/">Vejle Idr�tsh�jskole</a></h2>
				<ul>
					<li>Dansk og matematik</li>
					<li>Kommunikation og formidling</li>
					<li>Samfundsfag og historie</li>
					<li>Idr�t</li>
				</ul>
				<p><a href="http://www.vih.dk/kortekurser/219/">Mere om Sommercamp Vejle</a></p>

			</div>

			<br style="clear: both;" />

			<h2>Tilmeld dig</h2>

			<p>Du kan tilmelde dig ved at udfylde <a href="tilmeldingsommercamp2007.pdf">tilmeldingsblanketten (pdf)</a> og sende den til den h�jskole, du gerne vil p�.</p>
');

echo $tpl->fetch('main-tpl.php');