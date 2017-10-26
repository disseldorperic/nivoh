@extends('app')

@section('content')

    @include('partials._title')

    <section class="white" id="valbeveiliging">
        <h1>Stichting Nivoh heeft een KOMO<sup>®</sup> Safety keurmerk voor de valbeveiligingsbranche ontwikkeld.</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="videoWrapper">
                    <iframe width="100%" height="388" src="https://www.youtube.com/embed/11gd6K4YOWs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Wilt u <span>meer informatie</span>? Maak hieronder uw keuze<font style="font-size:40px">:</font> </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="button" id="btnInstallateur" href="{!! Content::link('installateur') !!}">
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
            </div>
            <div class="col-sm-6">
                <a class="button" id="btnOpdrachtgever" href="{!! Content::link('opdrachtgever') !!}">
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
            </div>
        </div>

    </section>

    <section class="white" id="news">
        <h2>
            Nivoh <span>Nieuws</span>
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