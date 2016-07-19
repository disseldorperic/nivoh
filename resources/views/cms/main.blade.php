<div class="row">
    <div class="col-md-12">
        {!! CMS::group('header', ['pagetitle', 'Titel', 'text'], ['subtitle', 'Subtitel', 'text']) !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::group('blok1', ['titleblok1', 'Titel', 'text']) !!}
    </div>
    <div class="col-md-12">
        {!! CMS::tinymce('content1') !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::group('blok2', ['titleblok2', 'Titel', 'text']) !!}
    </div>
    <div class="col-md-12">
        {!! CMS::tinymce('content2') !!}
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::group('blok3', ['titleblok3', 'Titel', 'text']) !!}
    </div>
    <div class="col-md-12">
        {!! CMS::tinymce('content3') !!}
    </div>
</div>