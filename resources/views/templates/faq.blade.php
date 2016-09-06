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

        @if (Content::get('content') != '')
            {!! Content::get('content') !!}
        @endif


        <div class="faq">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach (Content::items('faq') AS $item)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {!! Content::get('question') !!}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            {!! Content::get('answer') !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection