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
            <div class="panel-group" id="faqGroup" role="tablist" aria-multiselectable="true">
                <?php
                    $i = 1;
                ?>
                    @foreach (Content::items('faqalgemeen') AS $item)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headAlgemeen<?php echo $i ?>" data-toggle="collapse" data-parent="#faqGroup" data-target="#algemeen<?php echo $i ?>">
                            <h4 class="panel-title">
                                <a role="button">
                                    {{ $item->get('question') }} <i class="fa fa-plus"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="algemeen<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headAlgemeen<?php echo $i ?>">
                            <div class="panel-body">
                                {!! $item->get('answer') !!}
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    ?>
                @endforeach


            <h3>Vragen door installateurs, adviseurs en inspecteurs</h3>

                <?php
                $i = 1;
                ?>
                @foreach (Content::items('faqinstallateurs') AS $item)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headInstallateurs<?php echo $i ?>" data-toggle="collapse" data-parent="#faqGroup" data-target="#installateurs<?php echo $i ?>">
                            <h4 class="panel-title">
                                <a role="button">
                                    {{ $item->get('question') }} <i class="fa fa-plus"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="installateurs<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headInstallateurs<?php echo $i ?>">
                            <div class="panel-body">
                                {!! $item->get('answer') !!}
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                    ?>
                @endforeach


            <h3>Vragen door opdrachtgevers, architecten, brancheverenigingen en andere partijen</h3>

                <?php
                $i = 1;
                ?>
                @foreach (Content::items('faqopdrachtgevers') AS $item)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headOpdrachtgevers<?php echo $i ?>" data-toggle="collapse" data-parent="#faqGroup" data-target="#opdrachtgevers<?php echo $i ?>">
                            <h4 class="panel-title">
                                <a role="button">
                                    {{ $item->get('question') }} <i class="fa fa-plus"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="opdrachtgevers<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headOpdrachtgevers<?php echo $i ?>">
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
    </section>



@endsection

@section('scripts')
    <script>
        $('.collapse').on('shown.bs.collapse', function(){
            $(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
        }).on('hidden.bs.collapse', function(){
            $(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
        });
    </script>
@endsection