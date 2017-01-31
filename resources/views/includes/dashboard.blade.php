<div class="nav-bar bkg-base">
    <div class="nav-bar-inner">
        <nav class="navigation nav-center">
            <ul>
                @foreach($menu as $menu_item)
                    <li><a href="#" class="color-hover-purple-light">{{$menu_item->name}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>

{{$first_page->name}}