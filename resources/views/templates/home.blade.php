@extends('app')

@section('content')

    @include('partials._title')

    <section class="white" id="valbeveiliging">
        <h1>
            Stichting Nivoh ontwikkelt een <span>keurmerk</span> voor de valbeveiligings- branche.
            Wilt u <span>meer informatie</span>? Maak hieronder uw keuze.
        </h1>

        <a class="button" id="btnInstallateur" href="{!! Content::link('installateur') !!}" target="_blank">
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

        <a class="button" id="btnOpdrachtgever" href="{!! Content::link('opdrachtgever') !!}" target="_blank">
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
        @if ($newsItem = News::last())
            <div class="newsItem">
                <div class="image">
                    <img src="{{ $newsItem->image('main') }}" class="img-responsive" alt="{{ $newsItem->title() }}"/>
                </div>
                <div class="item">
                    <h3>{{ $newsItem->title() }}</h3>

                    <p>{!! $newsItem->get('short') !!}</p>

                    {!! Content::button('Lees verder', $newsItem, ['class' => 'read']) !!}
                </div>
            </div>
        @endif

        <div class="listNews">
            <ul>
                @foreach (News::last(1,5) as $newsItem)
                    <li><a href="{!! $newsItem->link() !!}">{{ $newsItem->title() }}</a></li>
                @endforeach
            </ul>
        </div>

    </section>

@endsection