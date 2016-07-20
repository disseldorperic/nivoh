@extends('app')

@section('content')
    <div class="title hidden-xs">
        <div class="pagetitle">Laatste nieuws</div>
        <div class="subtitle">Nationaal Instituut voor Veiligheid op Hoogte</div>
    </div>

    @foreach ($newsItems AS $newsItem)
        <section class="white">
            <div class="row">
                <div class="col-sm-12">
                    <div class="caption newsitem">
                        <h2>{{ News::title($newsItem) }}</h2>
                        <h4>{{ News::date($newsItem, 'j-m-Y') }}</h4>

                        <p>{{ News::get('short', $newsItem) }}</p>

                        {!! Content::button('Lees meer', $newsItem) !!}
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection