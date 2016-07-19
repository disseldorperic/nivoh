<div class="menu">
    <nav class="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @foreach (Content::menu()->menuItems AS $item)
                    <li {!! Request::is($item->link() == '/' ? '/' : trim($item->link(), '/')) ? 'class="active"' : '' !!}><a href="{{ $item->link() }}">{{ $item->button }}</a></li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>