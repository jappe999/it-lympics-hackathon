@extends('layouts/app')

@section('scripts')
    <script src="/js/twitter.js" charset="utf-8"></script>
@endsection

@section('app')
    <div class="col-md-6 mx-auto">
        <card :card="{ 'image': '/img/about.jpg' }">
            <div class="col-12 px-5 py-4">
                <h2>De app</h2>
                <p>Wat doet ie eigenlijk?</p>
            </div>
        </card>

        <card :card="{ 'image': '/img/logo.svg' }">
            <div class="col-12 px-5 py-4">
                <h2>De IT-Lympics</h2>
                <p>
                    De IT-Lympics is een week waarin studenten in teams met allerlei opdrachten strijden tegen andere teams.
                    Het doel van de It-Lympics is om studenten kennis te laten maken met de IT-bedrijven in Almere. Dit kunnen zij gebruiken voor hun Comakerships die tijdens de opleiding gedaan worden om kennis te maken met de praktijk.
                </p>
                <p>
                    De It-Lympics is georganiseerd door Windesheim Flevoland in samenwerking met Vereniging Bedrijfskring Almere (VBA) en de gemeente Almere.
                </p>

                <p>
                    Tijdens de It-Lympics vindt er een hackathon plaats waarvoor deze webapp is gebouwd.
                    Verder worden er verschillende sporten beoefend. Dit zijn geen normale sporten. Nee, dit zijn sporten voor echte nerds!
                </p>
                <p>
                    Er zijn, naast de hackthon, nog 3 andere sporten:
                    <ul>
                        <li>Robots programmeren en laten strijden tegen andere teams.</li>
                        <li>Een complete school bouwen met LEGO samen met anderen. Hierbij is het juist van belang dat de teams samenwerken om het eindproduct te bouwen.</li>
                        <li>Ook moet je een werkende computer bouwen.</li>
                    </ul>
                </p>
            </div>
        </card>

        <card :card="{ 'image': '/img/about.jpg' }">
            <div class="col-12 px-5 py-4">
                <h2>Het team</h2>
                <p></p>
            </div>
        </card>
    </div>
@endsection
