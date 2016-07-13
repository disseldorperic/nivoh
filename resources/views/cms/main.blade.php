<div class="row">
    <div class="col-md-12">
        {!! CMS::group('jumbotron', ['header', 'Titel', 'text'], ['paragraph', 'Content', 'text']) !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::input('short', 'Content', 'textarea', ['min-length' => 50, 'max-length' => 150, 'required']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! CMS::upload('main', 'Foto', ['type' => 'image', 'width' => 600, 'height' => 100]) !!}
    </div>
    <div class="col-md-12">
        {!! CMS::group('images', ['image1', 'Image 1', 'image', ['width' => 200, 'height' => 200, 'cropper' => true]], ['image2', 'Image 2', 'image', ['width' => 400, 'height' => 200]]) !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::tinymce('content') !!}
    </div>
</div>