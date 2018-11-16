@if($menus->getMenu('primary')->getItems())
    @foreach($menus->getMenu('primary')->getItems() as $menuItem)
        x
        {{--<a href="{{ route($menuItem['']) }}">--}}

        {{--</a>--}}
    @endforeach
@endif
