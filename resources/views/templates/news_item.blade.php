@extends('app')

@section('content')
    <div class="title hidden-xs">
        <div class="pagetitle">Laatste nieuws</div>
        <div class="subtitle">Nationaal Instituut voor Veiligheid op Hoogte</div>
    </div>

    <section class="white" id="newsDetail">
        <div class="back">
            <a href="/nieuws"><i class="fa fa-arrow-left"></i> nieuwsoverzicht</a> <h4>{{ News::date('j-m-Y') }}</h4>
        </div>

        <div class="image">
            <img src="{{ News::image('main') }}" class="img-responsive" alt="News" />
        </div>

        <h1>{{ News::title() }}</h1>

        {!! News::get('content') !!}

    </section>
@endsection