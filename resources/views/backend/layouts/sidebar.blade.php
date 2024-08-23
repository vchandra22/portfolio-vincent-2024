<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-accent rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-primary border-r border-r-secondary1">
        <a href="{{ route('main.index') }}" class="flex items-center ps-2.5 mb-8">
            <img src="{{ asset('assets/img/logo-vincent-portfolio.png') }}" class="h-6 me-3 sm:h-12 "
                alt="Logo Portfolio Vincent Chandra" />
            <span class="self-center text-accent text-xl font-semibold whitespace-nowrap">Vincent_</span>
        </a>
        <div class="flex flex-col justify-between">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('backend.dashboard') }}"
                        class="flex items-center p-2 text-secondary2 rounded-lg hover:bg-secondary1 group">
                        <svg class="w-5 h-5 text-secondary2 transition duration-75 group-hover:text-secondary2"
                            aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M8 2h2v2h2v2h-2v10H8V6H6V4h2V2zM4 8V6h2v2H4zm2 10v2H4v2H2V8h2v10h2zm0 0h2v-2H6v2zm6 0h-2v-2h2v2zm2-10V6h-2v2h2zm2 0h-2v10h-2v2h2v2h2v-2h2v-2h2v-2h2V2h-2v2h-2v2h-2v2zm0 0h2V6h2v10h-2v2h-2V8z"
                                fill="currentColor" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.project') }}"
                        class="flex items-center p-2 text-secondary2 rounded-lg hover:bg-secondary1 group">
                        <svg class="w-5 h-5 text-secondary2 transition duration-75 group-hover:text-secondary2"
                            aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12 4H2v16h20V6H12V4zm-2 4h10v10H4V6h6v2zm6 4h-2v-2h-2v2h2v2h-2v2h2v-2h2v2h2v-2h-2v-2zm0 0h2v-2h-2v2z"
                                fill="currentColor" />
                        </svg>
                        <span class="ms-3">Project</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.article') }}"
                        class="flex items-center p-2 text-secondary2 rounded-lg hover:bg-secondary1 group">
                        <svg class="w-5 h-5 text-secondary2 transition duration-75 group-hover:text-secondary2"
                            aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M6 3h14v2h2v6h-2v8h-2V5H6V3zm8 14v-2H6V5H4v10H2v4h2v2h14v-2h-2v-2h-2zm0 0v2H4v-2h10zM8 7h8v2H8V7zm8 4H8v2h8v-2z"
                                fill="currentColor" />
                        </svg>
                        <span class="ms-3">Article</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.content') }}"
                        class="flex items-center p-2 text-secondary2 rounded-lg hover:bg-secondary1 group">
                        <svg class="w-5 h-5 text-secondary2 transition duration-75 group-hover:text-secondary2"
                            aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M3 3h8v8H3V3zm6 6V5H5v4h4zm9 4h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3zM15 3h6v8h-8V3h2zm4 6V5h-4v4h4zM5 13h6v8H3v-8h2zm4 6v-4H5v4h4z"
                                fill="currentColor" />
                        </svg>
                        <span class="ms-3">Manage Content</span>
                    </a>
                </li>
            </ul>
            <ul class="space-y-2 mt-2 font-medium">
                <li>
                    <div>
                        <form action="{{ route('auth.logout') }}" method="POST"
                            class="flex items-center p-2 text-secondary2 rounded-lg hover:bg-secondary1 group">
                            @csrf
                            <button type="submit" class="flex">
                                <svg class="w-5 h-5 text-secondary2 transition duration-75 group-hover:text-secondary2"
                                    aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M18 4v16h2V4h-2zM4 11v2h8v2h-2v2h2v-2h2v-2h2v-2h-2V9h-2V7h-2v2h2v2H4z"
                                        fill="currentColor" />
                                </svg>
                                <div class="ms-3">
                                    <span>Logout</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>
