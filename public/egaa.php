<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Egå Højskole - Bliv klar til en ungdomsuddannelse');
$tpl->set('meta', array('description' => '', 'keywords' => ''));

$tpl->set('content_main', '
			<h1>Bliv klar til en ungdomsuddannelse</h1>

			<p>Tre forrygende højskoleuger sammen med andre unge inden du starter på en uddannelse.</p>
			<p>Inspireret af de amerikanske summercamps tilbyder vi dig at få pudset kundskaberne af i <strong>dansk</strong> og <strong>matematik</strong>. Vi har desuden faget <strong>Kommunikation</strong> på skemaet. Her er målet at du bliver bedre til at udtrykke dig. I disse fag vil vi tage udgangspunkt i det niveau du befinder dig på. Ideen er nemlig at du skal prøve at lukke huller der gør ungdomsuddannelsen lettere at håndtere. Derfor er der tale om små undervisningshold der giver plads til dine problemstillinger.</p>
			<p>Du vil også høre om nogle <strong>samfundslære og historie</strong> således at du kender nogle vigtige epoker i det samfund du er en del af.</p>
			<p>Vi har desuden sat fagene <strong>design</strong> og <strong>idræt</strong> på skemaet. Her får du lejlighed til at beskæftige dig med nogle kreative, sjove og udviklende ting.</p>
			<p>I de tre uger du er på højskolen lever og bor du sammen med en gruppe jævnaldrende unge. Planen er, at du får en lang række nye venner fra hele landet.</p>
			<p>Det bliver en sommerferie du aldrig glemmer og så er du helt sikkert helt klar til det efterfølgende.</p>

			<p>Vi prøver at holde prisen meget lav, nemlig 4.500 kr for 3 uger. Hvis du er ung med anden etnisk baggrund end dansk udløser du et tilskud der gør, at du selv kun skal betale 500 kr for hele kurset.</p>

			<p>Fra 1. december kan du se meget mere om sommercamp Egå på <a href="http://www.euh.dk/">www.euh.dk</a>.</p>

			<h2>Hvem henvender sommercamp sig til?</h2>
			<ul>
				<li>Alle der er fyldt 16½ (optagelseskrav)</li>
				<li>Unge der vil forbedre faglige kompetencer især i dansk og matematik.</li>
				<li>Unge der har brug for at kunne formidle, f.eks. ved eksaminer (kommunikation)</li>
				<li>Unge der vil have et overskud i den kommende ungdomsuddannelse</li>
				<li>Unge der skal til sygeeksamen</li>
				<li>Unge der har oplagte "huller" i matematik og/eller dansk.</li>
			</ul>

');

echo $tpl->fetch('main-tpl.php');
