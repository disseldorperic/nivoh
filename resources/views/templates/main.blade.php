@extends('app')

@section('content')
    @include('partials._title')

    <section class="white textTemp">
        @if (Content::get('blok1.image') != '')
            <div class="image">
                <img src="{!! Content::image('blok1.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('blok1.title') !!}"/>
            </div>
        @endif
        <h1>
            {!! Content::get('blok1.title') !!}
        </h1>
        {!! Content::get('content1') !!}

        @if (Content::identifier() == 'gecertificeerd')
            <table class="table table-striped" id="table-certified">
                <tr>
                    <th>Organisatie</th>
                    <th>Type Certificaat</th>
                    <th>Status</th>
                </tr>
                @foreach (Content::items('gecertificeerd') AS $item)
                    <tr>
                        <td><a href="{{ $item->get('gecertificeerd.link') }}">{{ $item->get('gecertificeerd.name') }}</a></td>
                        <td>{{ $item->get('gecertificeerd.type') }}</td>
                        <td>Behaald
                            @if ($item->get('gecertificeerd.status') != '')
                                <a href="#" data-toggle="tooltip" data-placement="top" title="{{ $item->get('gecertificeerd.status') }}">meer info</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </section>

    @if (Content::get('content2') != '')
        <section class="white textTemp">
            @if (Content::get('blok2.image') != '')
                <div class="image">
                    <img src="{!! Content::image('blok1.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('blok1.title') !!}"/>
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
                    <img src="{!! Content::image('blok1.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('blok1.title') !!}"/>
                </div>
            @endif

            <h1>
                {!! Content::get('blok3.title') !!}
            </h1>

            {!! Content::get('content3') !!}
        </section>
    @endif

    @if (Content::identifier() == 'initiatiefnemers')
        @include('partials._initiatiefnemers')
    @endif

    @if (Content::identifier() == 'contact')
        @include('partials._contactform')
    @endif



@endsection

@section('scripts')
    @if (Content::identifier() == 'contact')
        <script src="/js/forms.js"></script>
    @endif

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection