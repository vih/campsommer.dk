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
<h1>SommerCamp Vejle, uge 27, 28 og 29, 2008</h1>
<p><strong>3 ugers sommerh�jskole for unge, der vil forbedre deres skolekundskaber og dyrke en masse idr�t.</strong></p>
<p>Mangler du f�rdigheder i almindelige skolefag, som dansk, matematik, samfundsfag og historie, er dette kurset for dig. Hvis du samtidig er interesseret i idr�t, eller bare vil i bedre fysisk form er der alle muligheder for at opleve 3 uforglemmelige uger sammen med andre unge. </p>
<h2>Beskrivelse af fagomr�derne:</h2>
<ul>
<li>Dansk: Du skal arbejde med stavning og grammatik. Gennem �velser og opgaver bliver din evne til at kommunikere b�de skriftligt og mundtligt forbedret.</li>
<li>Matematik: Der fokuseres p� almindelig f�rdighedsregning, procent- og br�kregning. Du vil m�de en r�kke grundl�ggende matematiske principper, som vil give dig en st�rre indsigt i matematik.</li>
<li>Samfundsfag: Der gives en oversigt over institutioner i Danmark og Europa, samt betydningen af disse for borgerne. Demokratiet i DK og dets virkeform gennemg�s. Du f�r en generel indf�ring i almen viden, som svarer til kravene til politiets optagelsespr�ve.</li>
<li>Kommunikation og teambuilding: Du kommer til at st� i situationer, hvor du skal lave aktiviteter for de andre elever, og hvor I skal l�se en opgave sammen.</li>
</ul>
<p>Den idr�tsfaglige del af kurset vil prim�rt best� af boldspil, fitness, sv�mning og vandaktiviter. Du kan v�lge mellem forskellige muligheder efter din interesse. Der bliver i mods�tning til de almindelige skolefag mulighed for afpr�vning af mange forskellige idr�tsgrene.</p>

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
';

    }

    function getSubContent()
    {
        return '<h2>L�s mere</h2><p><a href="http://www.vih.dk/kortekurser/219/">Sommercamp Vejle</a></p>';
    }
}