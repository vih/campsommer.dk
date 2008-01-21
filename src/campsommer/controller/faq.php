<?php
class Campsommer_Controller_Faq extends k_Controller
{
    function GET()
    {
        $this->document->title           = 'Sommercamp FAQ';
        $this->document->description     = '';
        $this->document->keywords        = '';
        $this->document->body_attributes = '';

        return '
            <h1>Svar på spørgsmål</h1>
            <h2>Hvem kan få støtte?</h2>
            <p>Indvandrere og efterkommere af indvandrere kan få støtte.</p>
            <dl>
                <dt>Ved indvandrere forstås</dt>
                <dd>En person, der er født i udlandet, og hvis forældre begge (eller den ene hvis der ikke findes oplysninger om den anden) er udenlandske statsborgere eller født i udlandet. Hvis der ikke findes oplysninger om nogen af forældrene, og personen er født i udlandet, opfattes personen også som indvandrer.</dd>
                <dt>Ved efterkommere af indvandrere forstås:</dt>
                <dd>En person, der er født i Danmark af forældre, som begge (eller den ene hvis der ikke findes oplysninger om den anden) er indvandrere eller efterkommere. Hvis der ikke findes oplysninger om nogen af forældrene, og personen er udenlandsk statsborger, opfattes personen som efterkommer.</dd>
                <dt>Ved støtteberettigede tredjelande forstås:</dt>
                <dd>De lande, som af Danmarks Statistik er omfattet af definitionen, dvs. landene i Afrika, Syd- og Mellemamerika, Asien (undtagen Japan) og Oceanien (Undtagen Australien og New Zealand) samt følgende europæiske lande: Tyrkiet, Cypern, Aserbajdsjan, Usbekistan, Kasakhstan, Turkmenistan, Kirgisistan, Tadsjikistan, Georgien og Armenien.</dd>
            </dl>
            ';
    }
}