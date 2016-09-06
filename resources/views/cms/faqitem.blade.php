<?php
$categories = [
        'algemeen'       => 'Algemene vragen',
        'installateurs'  => 'Vragen door installateurs, adviseurs en inspecteurs',
        'opdrachtgevers' => 'Vragen door opdrachtgevers, architecten, brancheverenigingen en andere partijen',
];
?>


<div class="row">
    <div class="col-md-12">
        {!! CMS::select('category', 'Categorie', $categories) !!}
        {!! CMS::input('question', 'Vraag', 'text', ['required']) !!}
    </div>

    <div class="col-md-12">
        {!! CMS::tinymce('answer') !!}
    </div>
</div>
