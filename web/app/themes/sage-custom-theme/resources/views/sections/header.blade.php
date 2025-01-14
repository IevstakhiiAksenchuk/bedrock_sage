<header class="bg-[#201E50] text-white">
  <div class="container mx-auto flex items-center justify-between py-4 px-6 max-w-screen-xl">
    {{-- Logo --}}
    <div class="flex items-center">
      @if (has_custom_logo())
      {!! get_custom_logo() !!}
      @else
      <a href="{{ home_url('/') }}" class="text-lg font-bold text-white">My Logo</a>
      @endif
    </div>

    {{-- Search Bar --}}
    <div class="flex-grow mx-6">
      <form method="get" action="{{ esc_url(home_url('/')) }}">
        <input
          type="text"
          name="s"
          placeholder="Search for a product"
          class="w-full py-2 px-4 rounded-sm bg-gray-100 text-gray-700"
          aria-label="Search" />
      </form>
    </div>

    {{-- User Account and Cart --}}
    <div class="flex items-center space-x-4">
      <button class="text-white">
        <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.0039 10.9375C23.6055 10.9375 25.75 13.082 25.75 15.6836V16.5625C25.75 17.5117 24.9766 18.25 24.0625 18.25H11.6875C10.7383 18.25 10 17.5117 10 16.5625V15.6836C10 13.082 12.1094 10.9375 14.7109 10.9375C15.7305 10.9375 16.1875 11.5 17.875 11.5C19.5273 11.5 19.9844 10.9375 21.0039 10.9375ZM24.0625 16.5625V15.6836C24.0625 13.9961 22.6914 12.625 21.0039 12.625C20.4766 12.625 19.668 13.1875 17.875 13.1875C16.0469 13.1875 15.2383 12.625 14.7109 12.625C13.0234 12.625 11.6875 13.9961 11.6875 15.6836V16.5625H24.0625ZM17.875 10.375C15.0625 10.375 12.8125 8.125 12.8125 5.3125C12.8125 2.53516 15.0625 0.25 17.875 0.25C20.6523 0.25 22.9375 2.53516 22.9375 5.3125C22.9375 8.125 20.6523 10.375 17.875 10.375ZM17.875 1.9375C16.0117 1.9375 14.5 3.48438 14.5 5.3125C14.5 7.17578 16.0117 8.6875 17.875 8.6875C19.7031 8.6875 21.25 7.17578 21.25 5.3125C21.25 3.48438 19.7031 1.9375 17.875 1.9375Z" fill="white" />
        </svg>

      </button>
      <button class="bg-pink-600 py-2 px-4 rounded-sm text-white font-bold flex items-center">
        <svg class="mr-1" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.6212 9.72266C15.5333 10.0449 15.2404 10.25 14.9181 10.25H6.33411L6.53918 11.1875H14.3907C14.8302 11.1875 15.1818 11.627 15.0646 12.0664L14.9181 12.7695C15.4747 13.0332 15.8556 13.5898 15.8556 14.2344C15.8556 15.1426 15.0939 15.875 14.215 15.875C13.3068 15.875 12.5743 15.1426 12.5743 14.2344C12.5743 13.7949 12.7501 13.3848 13.0431 13.0625H6.92004C7.21301 13.3848 7.41809 13.7949 7.41809 14.2344C7.41809 15.1426 6.65637 15.875 5.77747 15.875C4.86926 15.875 4.13684 15.1426 4.13684 14.2344C4.13684 13.6484 4.45911 13.1211 4.95715 12.8281L2.87708 2.75H0.855591C0.445435 2.75 0.152466 2.45703 0.152466 2.04688V1.57812C0.152466 1.19727 0.445435 0.875 0.855591 0.875H3.84387C4.16614 0.875 4.45911 1.13867 4.547 1.46094L4.81067 2.75H16.295C16.7638 2.75 17.0861 3.18945 16.9982 3.62891L15.6212 9.72266Z" fill="white" />
        </svg>

        £0.00
      </button>
    </div>
  </div>
  <div class="w-full border-t border-[#4D4E7C]">
    <div class="container mx-auto flex max-w-screen-xl relative">
      <!-- Mobile Toggle -->
      <button id="menu-toggle" class="lg:hidden px-4 py-2 bg-blue-800 text-white rounded-sm block">
        <svg class="m-3" width="15" height="11" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.34375 0.65625C2.57812 0.65625 2.8125 0.890625 2.8125 1.125V3C2.8125 3.26367 2.57812 3.46875 2.34375 3.46875H0.46875C0.205078 3.46875 0 3.26367 0 3V1.125C0 0.890625 0.205078 0.65625 0.46875 0.65625H2.34375ZM2.34375 5.34375C2.57812 5.34375 2.8125 5.57812 2.8125 5.8125V7.6875C2.8125 7.95117 2.57812 8.15625 2.34375 8.15625H0.46875C0.205078 8.15625 0 7.95117 0 7.6875V5.8125C0 5.57812 0.205078 5.34375 0.46875 5.34375H2.34375ZM2.34375 10.0312C2.57812 10.0312 2.8125 10.2656 2.8125 10.5V12.375C2.8125 12.6387 2.57812 12.8438 2.34375 12.8438H0.46875C0.205078 12.8438 0 12.6387 0 12.375V10.5C0 10.2656 0.205078 10.0312 0.46875 10.0312H2.34375ZM14.5312 6.04688C14.7656 6.04688 15 6.28125 15 6.51562V6.98438C15 7.24805 14.7656 7.45312 14.5312 7.45312H5.15625C4.89258 7.45312 4.6875 7.24805 4.6875 6.98438V6.51562C4.6875 6.28125 4.89258 6.04688 5.15625 6.04688H14.5312ZM14.5312 10.7344C14.7656 10.7344 15 10.9688 15 11.2031V11.6719C15 11.9355 14.7656 12.1406 14.5312 12.1406H5.15625C4.89258 12.1406 4.6875 11.9355 4.6875 11.6719V11.2031C4.6875 10.9688 4.89258 10.7344 5.15625 10.7344H14.5312ZM14.5312 1.35938C14.7656 1.35938 15 1.59375 15 1.82812V2.29688C15 2.56055 14.7656 2.76562 14.5312 2.76562H5.15625C4.89258 2.76562 4.6875 2.56055 4.6875 2.29688V1.82812C4.6875 1.59375 4.89258 1.35938 5.15625 1.35938H14.5312Z" fill="white" />
        </svg>
      </button>
      <nav class="container mx-auto p-2" id="menu">



        <!-- Menu Container -->
        <ul class="relative flex space-x-6" style="display:none !important">
          <!-- First Level -->
          <li class="group relative">
            <a href="#" class="flex items-center px-4 py-2 block bg-transparent text-white hover:bg-transparent"><svg class="mr-1" width="15" height="11" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.34375 0.65625C2.57812 0.65625 2.8125 0.890625 2.8125 1.125V3C2.8125 3.26367 2.57812 3.46875 2.34375 3.46875H0.46875C0.205078 3.46875 0 3.26367 0 3V1.125C0 0.890625 0.205078 0.65625 0.46875 0.65625H2.34375ZM2.34375 5.34375C2.57812 5.34375 2.8125 5.57812 2.8125 5.8125V7.6875C2.8125 7.95117 2.57812 8.15625 2.34375 8.15625H0.46875C0.205078 8.15625 0 7.95117 0 7.6875V5.8125C0 5.57812 0.205078 5.34375 0.46875 5.34375H2.34375ZM2.34375 10.0312C2.57812 10.0312 2.8125 10.2656 2.8125 10.5V12.375C2.8125 12.6387 2.57812 12.8438 2.34375 12.8438H0.46875C0.205078 12.8438 0 12.6387 0 12.375V10.5C0 10.2656 0.205078 10.0312 0.46875 10.0312H2.34375ZM14.5312 6.04688C14.7656 6.04688 15 6.28125 15 6.51562V6.98438C15 7.24805 14.7656 7.45312 14.5312 7.45312H5.15625C4.89258 7.45312 4.6875 7.24805 4.6875 6.98438V6.51562C4.6875 6.28125 4.89258 6.04688 5.15625 6.04688H14.5312ZM14.5312 10.7344C14.7656 10.7344 15 10.9688 15 11.2031V11.6719C15 11.9355 14.7656 12.1406 14.5312 12.1406H5.15625C4.89258 12.1406 4.6875 11.9355 4.6875 11.6719V11.2031C4.6875 10.9688 4.89258 10.7344 5.15625 10.7344H14.5312ZM14.5312 1.35938C14.7656 1.35938 15 1.59375 15 1.82812V2.29688C15 2.56055 14.7656 2.76562 14.5312 2.76562H5.15625C4.89258 2.76562 4.6875 2.56055 4.6875 2.29688V1.82812C4.6875 1.59375 4.89258 1.35938 5.15625 1.35938H14.5312Z" fill="white" />
              </svg> Products</a>
            <!-- Second Level -->
            <ul class="submenu absolute left-0 top-full hidden group-hover:block bg-transparent text-black shadow-lg  min-w-[220px] pt-2">
              <li class="group relative whitespace-nowrap">
                <a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">General Scaffold Products
                  <!-- Caret -->
                  <span class="caret-right hover:bg-[#FFFFFF]"></span>
                </a>
                <!-- Third Level -->
                <ul class="submenu absolute left-full top-0 hidden group-hover:block bg-white text-black shadow-lg ">
                  <li><a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">View All</a></li>
                  <li><a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Scaffold Tube</a></li>
                  <li><a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Scaffold Fittings</a></li>
                  <li><a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Scaffold Boards</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Height Safety Equipment</a>
              </li>
              <li>
                <a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Scaffold Tooling & Tethering</a>
              </li>
              <li>
                <a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Scafftag Tagging Systems</a>
              </li>
              <li>
                <a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Builders Plant (Non-Mechanical)</a>
              </li>
              <li>
                <a href="#" class="px-4 py-2 block bg-white text-black hover:bg-[#BA2C73] hover:text-white">Scaffold Towers & Light Access</a>
              </li>
            </ul>
          </li>
        </ul>
        {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'relative flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-6',
        'container' => false,
        'walker' => new \App\Walkers\NavWalker(),
        ]) !!}
      </nav>
    </div>
  </div>


</header>