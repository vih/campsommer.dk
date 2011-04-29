<?php
class Campsommer_Controller_Vih extends k_Controller
{
    function GET()
    {
        $this->document->title           = 'Vejle Idr�tsh�jskoles sommercamp - h�jskole og udvikling';
        $this->document->description     = 'P� Vejle Idr�tsh�jskoles sommercamp kan du p� sommerh�jskole forbedre dine skolekundskaber';
        $this->document->keywords        = 'sommercamp, h�jskole';
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
    <li>Idr�t</li>
</ul>

<p><strong>3 ugers sommercamp for dig mellem 17� og 30 �r, der gerne vil forbedre dine skolekundskaber og dyrke en masse idr�t. Det er tre uforglemmelige uger som giver dig nye muligheder i livet, og hvor du m�der en masse nye venner.</strong></p>
<ul>
<li><strong>Dansk</strong>: Du skal arbejde med stavning og grammatik. Gennem �velser og opgaver bliver din evne til at kommunikere b�de skriftligt og mundtligt forbedret.</li>
<li><strong>Matematik</strong>: Der fokuseres p� almindelig f�rdighedsregning, procent- og br�kregning. Du vil m�de en r�kke grundl�ggende matematiske principper, som vil give dig en st�rre indsigt i matematik.</li>
<li><strong>Samfundsfag</strong>: Der gives en oversigt over institutioner i Danmark og Europa, samt betydningen af disse for borgerne. Demokratiet i DK og dets virkeform gennemg�s. Du f�r en generel indf�ring i almen viden, som svarer til kravene til politiets optagelsespr�ve.</li>
<li><strong>Kommunikation og teambuilding</strong>: Du kommer til at st� i situationer, hvor du skal lave aktiviteter for de andre elever, og hvor I skal l�se en opgave sammen.</li>
<li><strong>Idr�t</strong>: boldspil, fitness, sv�mning og vandaktiviter. Du kan v�lge mellem forskellige muligheder efter din interesse. Der bliver i mods�tning til de almindelige skolefag mulighed for afpr�vning af mange forskellige idr�tsgrene.</li>
</ul>

<p>Du f�r mulighed for at f� <strong>personling vejledning</strong> i forbindelse med valg af uddannelse, eller bare en snak om den uddannelse du skal i gang med eller er i gang med. Dette foreg�r dels i grupper med de �vrige elever, dels med en af skolens l�rere.</p>
<p>Du skulle gerne efter 3 uger p� Vejle Idr�tsh�jskole have dannet dig et overblik over hvilke valg du kan tr�ffe, og hvilke konsekvenser valgene har.</p>

<p>Vejle Idr�tsh�jskole ligger cirka 4 km fra Vejle Centrum. Der er gode tog- og busforbindelser til Vejle. H�jskolen ligger lige midt i skoven. L�s i �vrigt mere p� vih.dk.</p>

<h2>Pris</h2>
<p>4.500 kroner for alle tre uger. Er du ung med anden etnisk baggrund end dansk koster kurset kun kr. 500, fordi du er berettiget til st�tte fra statens satspulje.</p>
';

    }

    function getSubContent()
    {
        return '<h2>L�s mere</h2><p><a href="http://tilmelding.vih.dk/kortekurser/315">Sommercamp Vejle</a></p>';
    }
}
