<section class="initiatiefnemers">
    <div class="row">
        @foreach (Content::items('initiatiefnemers') AS $item)
            <div class="col-md-4">
                <div class="initiatiefnemer">
                    <a href="{!! Content::get('initiatiefnemer.link') !!}" target="_blank">
                        <img src="{!! Content::image('initiatiefnemer.image') ?: '/images/placeholder.jpg' !!}" class="img-responsive" alt="{!! Content::get('initiatiefnemer.name') !!}" />
                        <h3>{!! Content::get('initiatiefnemer.name') !!}</h3>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>