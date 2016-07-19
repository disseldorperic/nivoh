@extends('app')

@section('content')
    @include('partials._title')

        <section class="white textTemp">
            @if (Content::get('blok1.image') != '')
                <div class="image">
                    <img src="{!! Content::image('blok1.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('blok1.title') !!}" />
                </div>
            @endif
            <h1>
                {!! Content::get('blok1.title') !!}
            </h1>
            {!! Content::get('content1') !!}
        </section>

    @if (Content::get('content2') != '')
        <section class="white textTemp">
            @if (Content::get('blok2.image') != '')
                <div class="image">
                    <img src="{!! Content::image('blok1.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('blok1.title') !!}" />
                </div>
            @endif

            <h1>
                {!! Content::get('blok2.title') !!}
            </h1>

            {!! Content::get('content2') !!}
        </section>
    @endif

    @if (Content::get('content3') != '')
        <section class="white textTemp">
            @if (Content::get('blok3.image') != '')
                <div class="image">
                    <img src="{!! Content::image('blok1.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('blok1.title') !!}" />
                </div>
            @endif

            <h1>
                {!! Content::get('blok3.title') !!}
            </h1>

            {!! Content::get('content3') !!}
        </section>
    @endif
@endsection