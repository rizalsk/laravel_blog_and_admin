<ul class="navbar-nav ml-auto">
    @foreach($items as $menu_item)
        @if(count($menu_item->children) > 0) 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ $menu_item->url }}" id="navbardrop" data-toggle="dropdown">
                    {{ $menu_item->title }}
                </a>
                <div class="dropdown-menu">
                    @foreach($menu_item->children as $submenu)
                        <a href="{{ $submenu->url }}" class="dropdown-item">{{ $submenu->title }}
                        </a>
                    @endforeach
                </div>
            </li>
        @else
            <li class="nav-item">
                <a href="{{ $menu_item->url }}" class="nav-link">{{ $menu_item->title }}
               </a>
            </li>
        @endif
    @endforeach
    
</ul>