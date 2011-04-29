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
<h1>SommerCamp Vejle</h1>
<h2>- Tre uforglemmelige uger</h2>

<ul>
    <li>Dansk</li>
    <li>Matematik</li>
    <li>Samfundsfag</li>
    <li>Kommunikation</li>
    <li>Teambuilding</li>
    <li>Idræt</li>
</ul>

<p><strong>3 ugers sommercamp for dig mellem 17½ og 30 år, der gerne vil forbedre dine skolekundskaber og dyrke en masse idræt. Det er tre uforglemmelige uger som giver dig nye muligheder i livet, og hvor du møder en masse nye venner.</strong></p>
<ul>
<li><strong>Dansk</strong>: Du skal arbejde med stavning og grammatik. Gennem øvelser og opgaver bliver din evne til at kommunikere både skriftligt og mundtligt forbedret.</li>
<li><strong>Matematik</strong>: Der fokuseres på almindelig færdighedsregning, procent- og brøkregning. Du vil møde en række grundlæggende matematiske principper, som vil give dig en større indsigt i matematik.</li>
<li><strong>Samfundsfag</strong>: Der gives en oversigt over institutioner i Danmark og Europa, samt betydningen af disse for borgerne. Demokratiet i DK og dets virkeform gennemgås. Du får en generel indføring i almen viden, som svarer til kravene til politiets optagelsesprøve.</li>
<li><strong>Kommunikation og teambuilding</strong>: Du kommer til at stå i situationer, hvor du skal lave aktiviteter for de andre elever, og hvor I skal løse en opgave sammen.</li>
<li><strong>Idræt</strong>: boldspil, fitness, svømning og vandaktiviter. Du kan vælge mellem forskellige muligheder efter din interesse. Der bliver i modsætning til de almindelige skolefag mulighed for afprøvning af mange forskellige idrætsgrene.</li>
</ul>

<p>Du får mulighed for at få <strong>personling vejledning</strong> i forbindelse med valg af uddannelse, eller bare en snak om den uddannelse du skal i gang med eller er i gang med. Dette foregår dels i grupper med de øvrige elever, dels med en af skolens lærere.</p>
<p>Du skulle gerne efter 3 uger på Vejle Idrætshøjskole have dannet dig et overblik over hvilke valg du kan træffe, og hvilke konsekvenser valgene har.</p>

<p>Vejle Idrætshøjskole ligger cirka 4 km fra Vejle Centrum. Der er gode tog- og busforbindelser til Vejle. Højskolen ligger lige midt i skoven. Læs i øvrigt mere på vih.dk.</p>

<h2>Pris</h2>
<p>4.500 kroner for alle tre uger. Er du ung med anden etnisk baggrund end dansk koster kurset kun kr. 500, fordi du er berettiget til støtte fra statens satspulje.</p>
';

    }

    function getSubContent()
    {
        return '<h2>Læs mere</h2><p><a href="http://tilmelding.vih.dk/kortekurser/315">Sommercamp Vejle</a></p>';
    }
}
