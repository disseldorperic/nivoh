@extends('app')

@section('content')

    @include('partials._title')

    <section class="white" id="valbeveiliging">
        <h1>
            Stichting Nivoh ontwikkelt een <span>keurmerk</span> voor de valbeveiligings- branche.
            Wilt u <span>meer informatie</span>? Maak hieronder uw keuze.
        </h1>

        <a class="button" id="btnInstallateur" href="" target="_blank">
            <span class="ikben">Ik ben een:</span>
            <div class="branche">
                <span class="name">Adviseur</span>
                <span class="name">Installateur</span>
                <span class="name">Inspecteur</span>
            </div>
            <div class="click">
                Klik hier <i class="fa fa-long-arrow-right"></i>
            </div>
        </a>

        <a class="button" id="btnOpdrachtgever" href="" target="_blank">
            <span class="ikben">Ik ben een:</span>
            <div class="branche">
                <span class="name">Opdrachtgever</span>
                <span class="name">Branchevereniging</span>
                <span class="name">Architect</span>
                <span class="name">Anders</span>
            </div>
            <div class="click">
                Klik hier <i class="fa fa-long-arrow-right"></i>
            </div>
        </a>
    </section>

    <section class="white" id="news">
        <h2>
            Blijf op de <span>hoogte</span>
        </h2>

        <div class="newsItem">
            <div class="image">
                <img src="/images/news.jpg" class="img-responsive" alt="News" />
            </div>
            <div class="item">
                <h3>Hier komt een titel van een nieuwsbericht</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eligendi necessitatibus numquam provident quis repudiandae voluptatum! Accusamus aliquam consequuntur earum impedit labore laboriosam modi, non, pariatur, repellendus rerum voluptas voluptatibus!</p>

                <a class="read" href="">Lees verder</a>
            </div>
        </div>

        <div class="listNews">
            <ul>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
            </ul>
        </div>

    </section>

@endsection