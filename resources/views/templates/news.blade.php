@extends('app')

@section('content')

    <div class="container" style="padding-top: 30px;">
        <div class="row">
            @foreach ($newsItems AS $newsItem)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">

                        <div class="caption">
                            <h3>{{ News::title($newsItem) }}</h3>
                            <h4>{{ News::date($newsItem, 'j-m-Y') }}</h4>

                            <p>{{ News::get('short', $newsItem) }}</p>

                            {!! Content::button('Lees meer', $newsItem) !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection