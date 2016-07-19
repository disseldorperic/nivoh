<div class="row">
    <div class="col-md-12">
        {!! CMS::group('header', ['pagetitle', 'Titel', 'text'], ['subtitle', 'Subtitel', 'text']) !!}
    </div>
</div>

<!--
<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::input('short', 'Content', 'textarea', ['min-length' => 50, 'max-length' => 150, 'required']) !!}
    </div>
</div>
-->

<hr />

<div class="row">
    <div class="col-md-12">
        {!! CMS::tinymce('content') !!}
    </div>
</div>