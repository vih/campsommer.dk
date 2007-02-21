<?php
require 'include_first.php';

$tpl = new Template(PATH_TEMPLATE);
$tpl->set('title', 'R�nde H�jskole - f� et forspring p� R�nde H�jskoles SommerCamp');
$tpl->set('meta', array('description' => '', 'keywords' => ''));
$tpl->set('body_attributes', 'class="sidebar"');
$tpl->set('content_main', '
<h1>SommerCamp R�nde</h1>
<h2>Ind p� studiet? Bedre eksamen? F� et forspring p� R�nde H�jskoles SommerCamp!</h2>

<h2>1.-21. juli 2007</h2>

<p>P� SommerCamp R�nde har du chancen for at forberede dig og forbedre dig. Hvis du har tre uger, s� har vi programmet, der giver dig de bedste odds, n�r du skal begynde p� studiet eller forbedre dine resultater i den uddannelse, du er i gang med allerede.</p>

<p>Men vi har ogs� plads til dig, hvis du bare �nsker at klare dig lidt bedre d�r, hvor du er � samtidig med at du f�r tre sk�nne uger med masser af h�jskoleliv, f�llesskab og oplevelser.</p>

<p><strong>Studie-engelsk</strong>. P� mange uddannelser, for eksempel medicin, skal du kunne l�se sv�re, tekniske b�ger p� engelsk, og det vil ofte blive forventet af dig, at du kan beg� dig p� dette vigtige sprog. P� SommerCamp vil du blive tr�net i engelsk p� h�jt niveau, b�de som talesprog og som redskab til studiet.</p>

<p><strong>Kemi</strong>. F� et vigtigt forspring i kemi og biokemi, n�r SommerCamps dygtige undervisere tager fat i dig d�r, hvor du er, og s�rger for, at du bliver dygtigere.</p>

<p><strong>Kommunikation � eksamensforberedelse</strong>. F� bugt med eksamensskr�kken og grib mulighed for at lave en bedre pr�station, n�r du skal til mundtlig eksamen. Her vil en uddannet psykolog hj�lpe dig med helt konkrete teknikker.</p>

<p><strong>Historie</strong>. Hvis du tror, at historie er kedeligt, s� vil du blive klogere efter tre uger p� SommerCamp! Her vil vores dygtige historiker l�re dig, hvorfor historien er vigtig, v�sentlig og sjov at studere. Du vil blive undervist i historisk metode � og h�re nogle af de historier, du ikke h�rer andre steder!</p>

<p><strong>Samfundsfag og religionsm�de</strong>. Vi skal diskutere det samfundsfaglige og det religi�se i dette fag, der b�de giver plads til undervisning og masser af diskussion. Her skal vi l�re noget nyt om dem, der mener noget andet om os � for hvad er det egentlig, de mener?</p>

<p>Ud over disse fag byder SommerCamp R�nde p� idr�t, friluftsliv med kajak og kano, b�l, sang og en masse herligt h�jskoleliv. Du vil f� en masse ny viden, oplevelser og et stort netv�rk. Der er foredrag med blandt andet Georg Metz og Johannes M�llehave.</p>

<p>Vi afholder ikke eksamen, men s�rger for, at du kan f� ro til at fordybe dig, l�re noget og udvikle dig samtidig med, at du kan smage p� h�jskolelivet.</p>

<p>R�nde H�jskole ligger p� Djursland, cirka en halv times k�rsel fra �rhus. Der er gode busforbindelser til �rhus og Sj�lland � blandt andet k�rer linje 888 fra Valby Station til R�nde. H�jskolen ligger i et smukt omr�de t�t p� skov og strand.</p>

<p>Indkvartering er p� dobbeltv�relse med bad og toilet p� gangen. Der er tr�dl�st internet p� alle v�relser.</p>

<h2>Pris</h2>
<p>Pris for SommerCamp: I alt 4.500 kroner.</p>
<p>Hvis du har en anden etnisk baggrund end dansk, udl�ser det et stipendium fra regeringens satspulje. Det betyder, at prisen for kurset bliver i alt 500 kroner.</p>
');

$tpl->set('content_sub', '<h2>L�s mere</h2><p><a href="http://www.rhe.dk/hojskole/">www.rhe.dk</a></p>');
echo $tpl->fetch('main-tpl.php');
?>