<section class="initiatiefnemers">
    <div class="row">
        @foreach (Content::items('initiatiefnemers') AS $item)
            <div class="col-md-4">
                <div class="initiatiefnemer">
                    <a class="box" href="{{ $item->get('initiatiefnemer.link') }}" target="_blank">
                        <img src="{!! $item->image('image') ?: '/images/nologo.jpg' !!}" class="img-responsive" alt="{{ $item->get('initiatiefnemer.name') }}" />
                        <span>naar website <i class="fa fa-chevron-right"></i></span>
                    </a>
                </div>

            </div>
        @endforeach
    </div>
</section>