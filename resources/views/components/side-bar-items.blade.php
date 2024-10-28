<nav class="flex-1 space-y-1 px-2 py-4">
    <a href="{{ route('dashboard') }}" wire:navigate
        class="{{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        Dashboard
    </a>

    <a href="{{ route('clients.index') }}" wire:navigate
        class="{{ request()->routeIs('clients.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
        </svg>
        Clients
    </a>

    <a href="{{ route('sellers.index') }}" wire:navigate
        class="{{ request()->routeIs('sellers.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
        </svg>
        Sellers
    </a>

    <a href="{{ route('checkout.index') }}" wire:navigate
        class="{{ request()->routeIs('checkout.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg fill="#808080" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.764 236.764" stroke-width="1.5">
            <path
                d="M110.035,151.039c0.399,3.858,3.655,6.73,7.451,6.73c0.258,0,0.518-0.013,0.78-0.04c4.12-0.426,7.115-4.111,6.689-8.231 l-3.458-33.468c-0.426-4.121-4.11-7.114-8.231-6.689c-4.12,0.426-7.115,4.111-6.689,8.231L110.035,151.039z">
            </path>
            <path
                d="M156.971,157.729c0.262,0.027,0.522,0.04,0.78,0.04c3.795,0,7.052-2.872,7.451-6.73l3.458-33.468 c0.426-4.121-2.569-7.806-6.689-8.231c-4.121-0.419-7.806,2.569-8.231,6.689l-3.458,33.468 C149.855,153.618,152.85,157.303,156.971,157.729z">
            </path>
            <path
                d="M98.898,190.329c-12.801,0-23.215,10.414-23.215,23.215c0,12.804,10.414,23.221,23.215,23.221 c12.801,0,23.216-10.417,23.216-23.221C122.114,200.743,111.699,190.329,98.898,190.329z M98.898,221.764 c-4.53,0-8.215-3.688-8.215-8.221c0-4.53,3.685-8.215,8.215-8.215c4.53,0,8.216,3.685,8.216,8.215 C107.114,218.076,103.428,221.764,98.898,221.764z">
            </path>
            <path
                d="M176.339,190.329c-12.801,0-23.216,10.414-23.216,23.215c0,12.804,10.415,23.221,23.216,23.221 c12.802,0,23.218-10.417,23.218-23.221C199.557,200.743,189.141,190.329,176.339,190.329z M176.339,221.764 c-4.53,0-8.216-3.688-8.216-8.221c0-4.53,3.686-8.215,8.216-8.215c4.531,0,8.218,3.685,8.218,8.215 C184.557,218.076,180.87,221.764,176.339,221.764z">
            </path>
            <path
                d="M221.201,84.322c-1.42-1.837-3.611-2.913-5.933-2.913H65.773l-6.277-24.141c-0.86-3.305-3.844-5.612-7.259-5.612h-30.74 c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h24.941l6.221,23.922c0.034,0.15,0.073,0.299,0.116,0.446l23.15,89.022 c0.86,3.305,3.844,5.612,7.259,5.612h108.874c3.415,0,6.399-2.307,7.259-5.612l23.211-89.25 C223.111,88.55,222.621,86.158,221.201,84.322z M186.258,170.659H88.982l-19.309-74.25h135.894L186.258,170.659z">
            </path>
            <path
                d="M106.603,39.269l43.925,0.002L139.06,50.74c-2.929,2.929-2.929,7.678,0,10.606c1.464,1.464,3.384,2.197,5.303,2.197 c1.919,0,3.839-0.732,5.303-2.197l24.263-24.263c2.929-2.929,2.929-7.678,0-10.606l-24.28-24.28c-2.929-2.929-7.678-2.929-10.607,0 c-2.929,2.929-2.929,7.678,0,10.607l11.468,11.468l-43.907-0.002h0c-4.142,0-7.5,3.358-7.5,7.5 C99.104,35.911,102.461,39.269,106.603,39.269z">
            </path>
        </svg>
        Checkout
    </a>

</nav>
