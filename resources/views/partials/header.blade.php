@if($menus->getMenu('primary')->getItems())
    <nav>
        <ul>
            @foreach($menus->getMenu('primary')->getItems() as $menuItem)
                <li>
                    <a href="{{ route($menuItem['route']) }}">
                        {{ $menuItem['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
@endif
