@php
$menus = [
    [
        'name' => 'Dashboard',
        'route' => route('dashboard'),
        'icon' => 'bi bi-house',
        'submenus' => []
    ],
    [
        'name' => 'Product',
        'route' => '#',
        'icon' => 'bi bi-box-seam',
        'submenus' => [
            [
                'name' => 'All Products',
                'route' => '#',
                'icon' => 'bi bi-list'
            ],
            [
                'name' => 'All Categories',
                'route' => '#',
                'icon' => 'bi bi-tags'
            ],
        ]
    ],
    [
        'name' => 'Users',
        'route' => '#',
        'icon' => 'bi bi-people',
        'submenus' => [
            [
                'name' => 'All Users',
                'route' => '#',
                'icon' => 'bi bi-person-lines-fill'
            ],
        ]
    ],
];
@endphp




<div class="sidebar-menu">
    <ul>
        @foreach ($menus as $menu)
            <li class="{{ !empty($menu['submenus']) ? 'has-submenu' : '' }}">
                <a href="{{ $menu['route'] }}">
                    <i class="{{ $menu['icon'] }}"></i>
                    {{ $menu['name'] }}
                </a>

                {{-- Check for submenus --}}
                @if (!empty($menu['submenus']))
                    <ul class="submenu">
                        @foreach ($menu['submenus'] as $submenu)
                            <li>
                                <a href="{{ $submenu['route'] }}">
                                    <i class="{{ $submenu['icon'] }}"></i>
                                    {{ $submenu['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>


