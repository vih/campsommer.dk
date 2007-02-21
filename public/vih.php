<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'R�nde H�jskole - f� et forspring p� R�nde H�jskoles SommerCamp');
$tpl->set('meta', array('description' => '', 'keywords' => ''));
$tpl->set('body_attributes', 'class="sidebar"');

$tpl->set('content_main', '

<h1>SommerCamp Vejle, uge 30, 31 og 32, 2007</h1>
<h2>Sommercamp - er du rigtig klog?</h2>
<p>3 ugers sommerh�jskole for unge, der vil forbedre deres skolekundskaber.</strong></p>
<p>
Mangler du f�rdigheder i almindelige skolefag, som dansk, matematik, samfundsfag og historie, er dette kurset for dig. Hvis du samtidig er interesseret i idr�t, eller bare vil i bedre fysisk form er der alle muligheder for at opleve 3 uforglemmelige uger sammen med andre unge. </p>
<p>At g� p� h�jskole er noget helt specielt dansk. Du bor, spiser og f�r undervisning p� skolen. Skolens l�rere er engagerede mennesker, som interesserer sig for hver enkel elev. Du vil opleve et helt specielt samv�r og f�llesskab, som man ellers kun finder i familien eller blandt n�re venner.</p>

<p>Du kan v�re ung med anden etnisk baggrund end dansk eller af dansk oprindelse. Du vil f� et intensivt kursus i fagene, s� du bedre kan starte eller forts�tte i uddannelses-systemet.</p>
<h2>Beskrivelse af fagomr�derne:</h2>
<ul>
<li>Dansk: Du skal arbejde med stavning og grammatik. Gennem �velser og opgaver bliver din evne til at kommunikere b�de skriftligt og mundtligt forbedret.</li>
<li>Matematik: Der fokuseres p� almindelig f�rdighedsregning, procent- og br�kregning. Du vil m�de en r�kke grundl�ggende matematiske principper, som vil give dig en st�rre indsigt i matematik.</li>
<li>Samfundsfag: Der gives en oversigt over institutioner i Danmark og Europa, samt betydningen af disse for borgerne. Demokratiet i DK og dets virkeform gennemg�s. Du f�r en generel indf�ring i almen viden, som svarer til kravene til politiets optagelsespr�ve.</li>
<li>Kommunikation og formidling: Du kommer til at st� i situationer, hvor du skal lave aktiviteter for de andre elever. Det kan v�re du skal lave noget idr�t, som du ved specielt meget om.</li>
</ul>
<p>
Du kan ogs� komme til at deltage i skrivningen af kursets avis, som skal udkomme nogle gange i l�bet af de 3 uger.<br>
Hvis du kan en god historie eller har oplevet noget sp�ndende er du til fort�llehj�rnet, som vi holder om aftenen.</p>
<p>Den idr�tsfaglige del af kurset vil prim�rt best� af boldspil, fitness, spring, sv�mning og vandaktiviter (kajak, roning, vindsurfing osv.). Du kan v�lge mellem forskellige muligheder efter din interesse. Der bliver i mods�tning til de almindelige skolefag mulighed for afpr�vning af mange forskellige idr�tsgrene. </p>

<p>Du f�r mulighed for at f� vejledning i forbindelse med valg af uddannelse, eller bare en snak om den uddannelse du skal i gang med eller er i gang med. Dette foreg�r dels i grupper med de �vrige elever, dels med en af skolens l�rere.<br>
Du skulle gerne efter 3 uger p� Vejle Idr�tsh�jskole have dannet dig et overblik over muligheder/konsekvenser af dine �nsker/planer. </p>
<h2>Modelskema for kurset:</h2>
<p><strong>Mandag:</strong> Morgensamling, dansk, idr�t, matematik, vejledning, forberedelse, personlige samtaler/frivillig idr�t.</p>
<p><strong>Tirsdag:</strong> Morgensamling, samfundsfag, idr�t, dansk, forberedelse, film.</p>
<p><strong>Onsdag:</strong> Morgensamling, matematik, foredrag, idr�t, forberedelse, personlige samtaler/frivillig idr�t</p>

<p><strong>Torsdag:</strong> Morgensamling, idr�t, dansk, samfundsfag, idr�t, forberedelse, sang og musik.</p>
<p><strong>Fredag:</strong> Morgensamling, idr�t, matematik, idr�t, forberedelse, socialt arrangement.</p>
<p><strong>L�rdag:</strong> Udflugt</p>
<p><strong>S�ndag:</strong> Fri</p>

<h2>Pris</h2>
<p>4500 kroner for alle tre uger. Er du ung med anden etnisk baggrund end dansk koster kurset kun kr. 500, fordi du er berettiget til st�tte fra statens satspulje.</p>
');

$tpl->set('content_sub', '<h2>L�s mere</h2><p><a href="http://www.vih.dk/kortekurser/219/">www.vih.dk</a></p>');
echo $tpl->fetch('main-tpl.php');
?>