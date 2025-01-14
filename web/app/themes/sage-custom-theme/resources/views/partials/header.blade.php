<header class="bg-gray-800 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6 max-w-screen-lg">
        {{-- Logo --}}
        <div class="logo ">
            @if (has_custom_logo())
            {!! get_custom_logo() !!}
            @else
            <a href="{{ home_url('/') }}" class="text-xl font-bold">
                {{ get_bloginfo('name', 'display') }}
            </a>
            @endif
        </div>

        {{-- Desktop Menu --}}
        <nav class="hidden lg:flex space-x-6">
            {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex space-x-4',
            'container' => false,
            'echo' => false,
            'depth' => 2,
            'walker' => new \App\Walkers\NavWalker(), // Optional: Add a custom walker for submenus
            ]) !!}
        </nav>

        {{-- Mobile Menu Button --}}
        <button id="mobile-menu-toggle" class="lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <nav id="mobile-menu" class="hidden bg-gray-700 lg:hidden">
        {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'flex flex-col space-y-4 px-6 py-4',
        'container' => false,
        'echo' => false,
        'depth' => 2,
        'walker' => new \App\Walkers\NavWalker(), // Optional for submenus
        ]) !!}
    </nav>

    {{-- Header Image --}}
    @if ($header_image = get_field('header_menu_image', 'option'))
    <div class="w-full bg-cover bg-center h-48" style="background-image: url('{{ $header_image }}');"></div>
    @else
    <div class="w-full bg-gray-400 h-48"></div>
    @endif
</header>