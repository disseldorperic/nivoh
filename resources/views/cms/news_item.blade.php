<div class="row">
    <div class="col-md-12">
        {!! CMS::input('short', 'Content', 'textarea') !!}
    </div>
    <div class="col-md-12">
        {!! CMS::upload('main', 'Afbeelding', ['type' => 'image', 'width' => 800, 'height' => 110, 'cropper' => true]) !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::tinymce('content') !!}
    </div>
</div>