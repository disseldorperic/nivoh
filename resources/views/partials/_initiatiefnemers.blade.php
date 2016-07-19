<section class="initiatiefnemers">
    <div class="row">
        @foreach (Content::items('initiatiefnemers') AS $item)
            <div class="col-md-4">
                <div class="initiatiefnemer">
                    <a id="box-1" class="box" href="{{ $item->get('initiatiefnemer.link') }}" target="_blank">
                        <img id="image-1" src="{!! $item->image('image') ?: '/images/nologo.jpg' !!}" alt="{{ $item->get('initiatiefnemer.name') }} />
                    <span class="caption">
                    <p>{{ $item->get('initiatiefnemer.name') }}</p>
                    </span>
                    </a>
                </div>

            </div>
        @endforeach
    </div>
</section>