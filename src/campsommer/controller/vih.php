<?php
class Campsommer_Controller_Vih extends k_Controller
{
    function GET()
    {
        $this->document->title           = 'Vejle Idrætshøjskoles sommercamp - højskole og udvikling';
        $this->document->description     = 'På Vejle Idrætshøjskoles sommercamp kan du på sommerhøjskole forbedre dine skolekundskaber';
        $this->document->keywords        = 'sommercamp, højskole';
        $this->document->body_attributes = 'class="sidebar"';

        return $this->render(dirname(__FILE__) . '/../templates/sidebar-wrapper.tpl.php');
    }

    function getMainContent()
    {
            return '
<h1>SommerCamp Vejle, uge 27, 28 og 29, 2008</h1>
<p><strong>3 ugers sommerhøjskole for unge, der vil forbedre deres skolekundskaber og dyrke en masse idræt.</strong></p>
<p>Mangler du færdigheder i almindelige skolefag, som dansk, matematik, samfundsfag og historie, er dette kurset for dig. Hvis du samtidig er interesseret i idræt, eller bare vil i bedre fysisk form er der alle muligheder for at opleve 3 uforglemmelige uger sammen med andre unge. </p>
<h2>Beskrivelse af fagområderne:</h2>
<ul>
<li>Dansk: Du skal arbejde med stavning og grammatik. Gennem øvelser og opgaver bliver din evne til at kommunikere både skriftligt og mundtligt forbedret.</li>
<li>Matematik: Der fokuseres på almindelig færdighedsregning, procent- og brøkregning. Du vil møde en række grundlæggende matematiske principper, som vil give dig en større indsigt i matematik.</li>
<li>Samfundsfag: Der gives en oversigt over institutioner i Danmark og Europa, samt betydningen af disse for borgerne. Demokratiet i DK og dets virkeform gennemgås. Du får en generel indføring i almen viden, som svarer til kravene til politiets optagelsesprøve.</li>
<li>Kommunikation og teambuilding: Du kommer til at stå i situationer, hvor du skal lave aktiviteter for de andre elever, og hvor I skal løse en opgave sammen.</li>
</ul>
<p>Den idrætsfaglige del af kurset vil primært bestå af boldspil, fitness, svømning og vandaktiviter. Du kan vælge mellem forskellige muligheder efter din interesse. Der bliver i modsætning til de almindelige skolefag mulighed for afprøvning af mange forskellige idrætsgrene.</p>

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
';

    }

    function getSubContent()
    {
        return '<h2>Læs mere</h2><p><a href="http://www.vih.dk/kortekurser/219/">Sommercamp Vejle</a></p>';
    }
}