<?php
class Campsommer_Controller_Ronde extends k_Controller
{
    function GET()
    {
        $this->document->title           = 'Rønde Højskole - få et forspring på Rønde Højskoles SommerCamp';
        $this->document->description     = 'Sommercamp: Få et forspring på Rønde Højskoles sommerCamp';
        $this->document->keywords        = 'sommercamp, højskole';
        $this->document->body_attributes = 'class="sidebar"';

        return $this->render(dirname(__FILE__) . '/../templates/sidebar-wrapper.tpl.php');
    }

    function getMainContent()
    {
        return '
<h1>SommerCamp Rønde</h1>

<h2>- forbered dig og bliv bedre!</h2>

<p>SommerCamp Rønde arbejder målrettet på at give dig de bedste odds, når du skal begynde på studiet eller forbedre dine resultater i den uddannelse, du er i gang med allerede. </p>

<p>- Men vi har også plads til dig, hvis du bare ønsker at klare dig lidt bedre der, hvor du er - samtidig med, at du får tre skønne uger med masser af højskoleliv, fællesskab og oplevelser.</p>

<p><strong>Dansk</strong>. Undervisning, som tager afsæt i dit niveau og behov.</p>

<p><strong>Engelsk</strong>. Bliv trænet i engelsk, både som talesprog og som redskab til studiet.</p>

<p><strong>Matematik</strong>. Her arbejder vi med den grundlæggende forståelse for matematikkens gåder. Du vil blive mødt der, hvor du er.</p>

<p><strong>Kommunikation - eksamensforberedelse</strong>. Få bugt med eksamensskrækken og grib muligheden for at lave en bedre præstation, når du skal til mundtlig eksamen. En psykolog hjælper dig med helt konkrete teknikker.</p>

<p><strong>Historie</strong>. Hvis du tror, at historie er kedeligt, så vil du blive klogere efter tre uger på SommerCamp! Her vil vores dygtige historiker lære dig, hvorfor Danmarkshistorien er vigtig, væsentlig og ikke mindst sjov at studere.</p>

<p><strong>Samfundsfag og religionsmøde</strong>. Bliv klogere på det samfund, du lever i. Hvorfor er tingene som de er? Hvad er demokrati i Danmark, og hvordan bruger du din indflydelse? Undervisning og masser af diskussion.</p>

<p>Ud over disse fag byder SommerCamp Rønde på idræt, friluftsliv, bål, sang og en masse herligt højskoleliv. Du vil få en masse ny viden, oplevelser og netværk.</p>

<p>Vi afholder ikke eksamen, men sørger for, at du kan få lov til at fordybe dig, lære noget og udvikle dig samtidig med, at du kan smage på højskolelivet.</p>

<p>Indkvartering er på dobbeltværelse med bad og toilet i gangen. Der er trådløst internet på alle værelser.</p>

<p>Rønde Højskole ligger på Djursland, cirka en halv times kørsel fra Århus. Der er gode busforbindelser til Århus og Sjælland - blandt andet kører linje 888 fra Valby Station til Rønde. Højskolen ligger i et smukt område tæt på skov og strand.</p>

<h2>Pris</h2>

<p>4.500 kroner for alle tre uger. Hvis du har en anden etnisk baggrund end dansk, udløser det et stipendium fra regeringens satspulje. Det betyder, at prisen for kurset bliver i alt 1500 kroner.</p>
';
    }

    function getSubContent()
    {
        return '<h2>Læs mere</h2><p><a href="http://www.rondehojskole.dk">www.rondehojskole.dk</a></p>';
    }
}
