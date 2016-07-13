@extends('app')

@section('content')

    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ Blog::title() }}  {!! Content::button('Overzicht', 'blogs', ['class' => 'btn btn-primary pull-right"']) !!}</h1>
                <h4>{{ Blog::author() }}, {{ Blog::date() }}</h4>

                <hr />

                {!! Blog::get('content') !!}
            </div>
        </div>
    </div>

@endsection