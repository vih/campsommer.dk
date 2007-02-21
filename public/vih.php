<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'Rønde Højskole - få et forspring på Rønde Højskoles SommerCamp');
$tpl->set('meta', array('description' => '', 'keywords' => ''));
$tpl->set('body_attributes', 'class="sidebar"');

$tpl->set('content_main', '

<h1>SommerCamp Vejle, uge 30, 31 og 32, 2007</h1>
<h2>Sommercamp - er du rigtig klog?</h2>
<p>3 ugers sommerhøjskole for unge, der vil forbedre deres skolekundskaber.</strong></p>
<p>
Mangler du færdigheder i almindelige skolefag, som dansk, matematik, samfundsfag og historie, er dette kurset for dig. Hvis du samtidig er interesseret i idræt, eller bare vil i bedre fysisk form er der alle muligheder for at opleve 3 uforglemmelige uger sammen med andre unge. </p>
<p>At gå på højskole er noget helt specielt dansk. Du bor, spiser og får undervisning på skolen. Skolens lærere er engagerede mennesker, som interesserer sig for hver enkel elev. Du vil opleve et helt specielt samvær og fællesskab, som man ellers kun finder i familien eller blandt nære venner.</p>

<p>Du kan være ung med anden etnisk baggrund end dansk eller af dansk oprindelse. Du vil få et intensivt kursus i fagene, så du bedre kan starte eller fortsætte i uddannelses-systemet.</p>
<h2>Beskrivelse af fagområderne:</h2>
<ul>
<li>Dansk: Du skal arbejde med stavning og grammatik. Gennem øvelser og opgaver bliver din evne til at kommunikere både skriftligt og mundtligt forbedret.</li>
<li>Matematik: Der fokuseres på almindelig færdighedsregning, procent- og brøkregning. Du vil møde en række grundlæggende matematiske principper, som vil give dig en større indsigt i matematik.</li>
<li>Samfundsfag: Der gives en oversigt over institutioner i Danmark og Europa, samt betydningen af disse for borgerne. Demokratiet i DK og dets virkeform gennemgås. Du får en generel indføring i almen viden, som svarer til kravene til politiets optagelsesprøve.</li>
<li>Kommunikation og formidling: Du kommer til at stå i situationer, hvor du skal lave aktiviteter for de andre elever. Det kan være du skal lave noget idræt, som du ved specielt meget om.</li>
</ul>
<p>
Du kan også komme til at deltage i skrivningen af kursets avis, som skal udkomme nogle gange i løbet af de 3 uger.<br>
Hvis du kan en god historie eller har oplevet noget spændende er du til fortællehjørnet, som vi holder om aftenen.</p>
<p>Den idrætsfaglige del af kurset vil primært bestå af boldspil, fitness, spring, svømning og vandaktiviter (kajak, roning, vindsurfing osv.). Du kan vælge mellem forskellige muligheder efter din interesse. Der bliver i modsætning til de almindelige skolefag mulighed for afprøvning af mange forskellige idrætsgrene. </p>

<p>Du får mulighed for at få vejledning i forbindelse med valg af uddannelse, eller bare en snak om den uddannelse du skal i gang med eller er i gang med. Dette foregår dels i grupper med de øvrige elever, dels med en af skolens lærere.<br>
Du skulle gerne efter 3 uger på Vejle Idrætshøjskole have dannet dig et overblik over muligheder/konsekvenser af dine ønsker/planer. </p>
<h2>Modelskema for kurset:</h2>
<p><strong>Mandag:</strong> Morgensamling, dansk, idræt, matematik, vejledning, forberedelse, personlige samtaler/frivillig idræt.</p>
<p><strong>Tirsdag:</strong> Morgensamling, samfundsfag, idræt, dansk, forberedelse, film.</p>
<p><strong>Onsdag:</strong> Morgensamling, matematik, foredrag, idræt, forberedelse, personlige samtaler/frivillig idræt</p>

<p><strong>Torsdag:</strong> Morgensamling, idræt, dansk, samfundsfag, idræt, forberedelse, sang og musik.</p>
<p><strong>Fredag:</strong> Morgensamling, idræt, matematik, idræt, forberedelse, socialt arrangement.</p>
<p><strong>Lørdag:</strong> Udflugt</p>
<p><strong>Søndag:</strong> Fri</p>

<h2>Pris</h2>
<p>4500 kroner for alle tre uger. Er du ung med anden etnisk baggrund end dansk koster kurset kun kr. 500, fordi du er berettiget til støtte fra statens satspulje.</p>
');

$tpl->set('content_sub', '<h2>Læs mere</h2><p><a href="http://www.vih.dk/kortekurser/219/">www.vih.dk</a></p>');
echo $tpl->fetch('main-tpl.php');
?>