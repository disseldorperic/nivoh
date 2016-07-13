@extends('app')

@section('content')

    <div class="container" style="padding-top: 30px;">
        @foreach ($blogs AS $blog)

            <div class="media">
                <div class="media-body">
                    <h3 class="media-heading">{{ Blog::title($blog) }}</h3>
                    <p><strong>{{ Blog::author($blog) }}, {{ Blog::date($blog, 'j-m-Y') }}</strong></p>

                    <p>{{ Blog::get('short', $blog) }}</p>

                    {!! Content::button('Lees meer', $blog) !!}
                </div>
            </div>

        @endforeach
    </div>

@endsection