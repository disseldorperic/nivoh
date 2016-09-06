<div class="row">
    <div class="col-md-12">
        {!! CMS::input('question', 'Vraag', 'text', ['required']) !!}
    </div>

    <div class="col-md-12">
        {!! CMS::tinymce('answer') !!}
    </div>
</div>
