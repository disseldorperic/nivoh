@extends('app')

@section('content')

    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ News::title() }}  {!! Content::button('Overzicht', 'news', ['class' => 'btn btn-primary pull-right"']) !!}</h1>
                <h4>{{ News::date() }}</h4>

                <hr />

                {!! News::get('content') !!}
            </div>
        </div>
    </div>

@endsection