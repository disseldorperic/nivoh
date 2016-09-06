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

            <h3>Algemene vragen</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                    $i = 1;
                ?>
                @foreach (Content::items('faq') AS $item)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?php echo $i ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                                    {{ $item->get('question') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $i ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $i ?>">
                            <div class="panel-body">
                                {!! $item->get('answer') !!}
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    ?>
                @endforeach

            </div>
        </div>
    </section>



@endsection

@section('scripts')
    <script>
        $('.collapse').collapse()
    </script>
@endsection