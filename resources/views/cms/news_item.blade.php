<div class="row">
    <div class="col-md-12">
        {!! CMS::input('short', 'Content', 'textarea') !!}
    </div>
    <div class="col-md-12">
        {!! CMS::upload('main', 'Foto', ['type' => 'image', 'width' => 400, 'height' => 300, 'cropper' => true]) !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::tinymce('content') !!}
    </div>
</div>