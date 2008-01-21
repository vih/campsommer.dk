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
<h2>Ind på studiet? Bedre eksamen? Få et forspring på Rønde Højskoles SommerCamp!</h2>

<h2>1.-21. juli 2007</h2>

<p><strong>På SommerCamp Rønde har du chancen for at forberede dig og forbedre dig.</strong></p>

<p>Hvis du har tre uger, så har vi programmet, der giver dig de bedste odds, når du skal begynde på studiet eller forbedre dine resultater i den uddannelse, du er i gang med allerede.</p>

<p>Men vi har også plads til dig, hvis du bare ønsker at klare dig lidt bedre dér, hvor du er – samtidig med at du får tre skønne uger med masser af højskoleliv, fællesskab og oplevelser.</p>

<p><strong>Dansk</strong>. Undervisning der tager udgangspunkt i dit niveau og behov.</p>

<p><strong>Engelsk</strong>. På mange uddannelser, for eksempel medicin, skal du kunne læse svære, tekniske bøger på engelsk, og det vil ofte blive forventet af dig, at du kan begå dig på dette vigtige sprog. På SommerCamp vil du blive trænet i engelsk på højt niveau, både som talesprog og som redskab til studiet.</p>

<p><strong>Matematik</strong>. Her arbejder vi med den grundlæggende forståelse for matematikkens gåder. Du vil blive mødt dér, hvor du er.</p>

<p><strong>Kommunikation – eksamensforberedelse</strong>. Få bugt med eksamensskrækken og grib mulighed for at lave en bedre præstation, når du skal til mundtlig eksamen. Her vil en uddannet psykolog hjælpe dig med helt konkrete teknikker.</p>

<p><strong>Historie</strong>. Hvis du tror, at historie er kedeligt, så vil du blive klogere efter tre uger på SommerCamp! Her vil vores dygtige historiker lære dig, hvorfor historien er vigtig, væsentlig og sjov at studere. Du vil blive undervist i historisk metode – og høre nogle af de historier, du ikke hører andre steder!</p>

<p><strong>Samfundsfag og religionsmøde</strong>. Vi skal diskutere det samfundsfaglige og det religiøse i dette fag, der både giver plads til undervisning og masser af diskussion. Her skal vi lære noget nyt om dem, der mener noget andet om os – for hvad er det egentlig, de mener?</p>

<p>Ud over disse fag byder SommerCamp Rønde på <strong>idræt</strong>, <strong>friluftsliv med kajak og kano</strong>, <strong>bål</strong>, <strong>sang</strong> og en masse herligt højskoleliv. Du vil få en masse ny viden, oplevelser og et stort netværk. Der er foredrag med blandt andet Georg Metz og Johannes Møllehave.</p>

<p>Der er foredrag med blandt andre <strong>Georg Metz</strong> og <strong>Johannes Møllehave</strong>.</p>

<p>Vi afholder ikke eksamen, men sørger for, at du kan få ro til at fordybe dig, lære noget og udvikle dig samtidig med, at du kan smage på højskolelivet.</p>

<h2>Beliggenhed</h2>

<p>Rønde Højskole ligger på Djursland, cirka en halv times kørsel fra Århus. Der er gode busforbindelser til Århus og Sjælland – blandt andet kører linje 888 fra Valby Station til Rønde. Højskolen ligger i et smukt område tæt på skov og strand.</p>

<h2>Indkvartering</h2>

<p>Indkvartering er på dobbeltværelse med bad og toilet på gangen. Der er trådløst internet på alle værelser.</p>

<h2>Pris</h2>
<p>Pris for SommerCamp: I alt 4.500 kroner.</p>
<p>Hvis du har en anden etnisk baggrund end dansk, udløser det et stipendium fra regeringens satspulje. Det betyder, at prisen for kurset bliver i alt 500 kroner.</p>
';
    }

    function getSubContent()
    {
        return '<h2>Læs mere</h2><p><a href="http://www.rhe.dk/hojskole/">www.rhe.dk</a></p>';
    }
}