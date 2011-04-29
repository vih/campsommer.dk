<?php
class Campsommer_Controller_Ronde extends k_Controller
{
    function GET()
    {
        $this->document->title           = 'R�nde H�jskole - f� et forspring p� R�nde H�jskoles SommerCamp';
        $this->document->description     = 'Sommercamp: F� et forspring p� R�nde H�jskoles sommerCamp';
        $this->document->keywords        = 'sommercamp, h�jskole';
        $this->document->body_attributes = 'class="sidebar"';

        return $this->render(dirname(__FILE__) . '/../templates/sidebar-wrapper.tpl.php');
    }

    function getMainContent()
    {
        return '
<h1>SommerCamp R�nde</h1>

<h2>- forbered dig og bliv bedre!</h2>

<p>SommerCamp R�nde arbejder m�lrettet p� at give dig de bedste odds, n�r du skal begynde p� studiet eller forbedre dine resultater i den uddannelse, du er i gang med allerede. </p>

<p>- Men vi har ogs� plads til dig, hvis du bare �nsker at klare dig lidt bedre der, hvor du er - samtidig med, at du f�r tre sk�nne uger med masser af h�jskoleliv, f�llesskab og oplevelser.</p>

<p><strong>Dansk</strong>. Undervisning, som tager afs�t i dit niveau og behov.</p>

<p><strong>Engelsk</strong>. Bliv tr�net i engelsk, b�de som talesprog og som redskab til studiet.</p>

<p><strong>Matematik</strong>. Her arbejder vi med den grundl�ggende forst�else for matematikkens g�der. Du vil blive m�dt der, hvor du er.</p>

<p><strong>Kommunikation - eksamensforberedelse</strong>. F� bugt med eksamensskr�kken og grib muligheden for at lave en bedre pr�station, n�r du skal til mundtlig eksamen. En psykolog hj�lper dig med helt konkrete teknikker.</p>

<p><strong>Historie</strong>. Hvis du tror, at historie er kedeligt, s� vil du blive klogere efter tre uger p� SommerCamp! Her vil vores dygtige historiker l�re dig, hvorfor Danmarkshistorien er vigtig, v�sentlig og ikke mindst sjov at studere.</p>

<p><strong>Samfundsfag og religionsm�de</strong>. Bliv klogere p� det samfund, du lever i. Hvorfor er tingene som de er? Hvad er demokrati i Danmark, og hvordan bruger du din indflydelse? Undervisning og masser af diskussion.</p>

<p>Ud over disse fag byder SommerCamp R�nde p� idr�t, friluftsliv, b�l, sang og en masse herligt h�jskoleliv. Du vil f� en masse ny viden, oplevelser og netv�rk.</p>

<p>Vi afholder ikke eksamen, men s�rger for, at du kan f� lov til at fordybe dig, l�re noget og udvikle dig samtidig med, at du kan smage p� h�jskolelivet.</p>

<p>Indkvartering er p� dobbeltv�relse med bad og toilet i gangen. Der er tr�dl�st internet p� alle v�relser.</p>

<p>R�nde H�jskole ligger p� Djursland, cirka en halv times k�rsel fra �rhus. Der er gode busforbindelser til �rhus og Sj�lland - blandt andet k�rer linje 888 fra Valby Station til R�nde. H�jskolen ligger i et smukt omr�de t�t p� skov og strand.</p>

<h2>Pris</h2>

<p>4.500 kroner for alle tre uger. Hvis du har en anden etnisk baggrund end dansk, udl�ser det et stipendium fra regeringens satspulje. Det betyder, at prisen for kurset bliver i alt 1500 kroner.</p>
';
    }

    function getSubContent()
    {
        return '<h2>L�s mere</h2><p><a href="http://www.rondehojskole.dk">www.rondehojskole.dk</a></p>';
    }
}
