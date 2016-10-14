<div class="row">
    <div class="col-md-12">
        {!! CMS::group('initiatiefnemer', ['name', 'Naam', 'text'], ['link', 'Link', 'text']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! CMS::upload('image', 'Logo', ['type' => 'image', 'width' => 230, 'height' => 180, 'cropper' => true]) !!}
    </div>
</div>