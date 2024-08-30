{{-- navbar-lg start --}}
<nav class="hidden md:block bg-primary sticky top-0 z-40 w-full px-8">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-1">
        <a href="{{ route('main.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse p-0">
            <img src="{{ asset('resources/img/logo-vincent-portfolio.png') }}" class="h-14 w-14" width="100"
                height="100" alt="Logo Portfolio Vincent" />
        </a>
        <div class="w-full md:block md:w-auto">
            <ul
                class="font-medium flex flex-col border rounded-none bg-primary md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-primary xl:text-lg">
                <li>
                    <a href="{{ route('main.index') }}"
                        class="block py-2 px-3 text-accent hover:text-accent2 rounded-none bg-transparent">Home</a>
                </li>
                <li>
                    <a href="{{ route('project.index') }}"
                        class="block py-2 px-3 text-accent hover:text-accent2 rounded-none md:border-0">Projects</a>
                </li>
                <li>
                    <a href="{{ route('article.index') }}"
                        class="block py-2 px-3 text-accent hover:text-accent2 rounded-none md:border-0">Articles</a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}"
                        class="block py-2 px-3 text-accent hover:text-accent2 rounded-none md:border-0">Contact</a>
                </li>
                @if (Auth::guard('web')->check())
                    <li class="hidden lg:block">
                        <form action="{{ route('auth.logout') }}" method="POST"
                            class="block py-2 px-3 text-accent hover:text-accent2 rounded-none md:border-0">
                            @csrf
                            <button type="submit">
                                <div class="flex items-center justify-start gap-2">
                                    <span>Logout</span>
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                            </button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
{{-- navbar-lg end --}}

{{-- navbar-sm start --}}
<nav class="block md:hidden z-50 bottom-0 w-full">
    <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-primary border-t border-secondary1">
        <div class="grid h-full max-w-full grid-cols-4 w-full mx-auto font-medium">
            <a href="{{ route('main.index') }}"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-accent group">
                <svg class="w-5 h-5 mb-2 text-accent group-hover:text-primary" aria-hidden="true" fill="none"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M4 2H2v8h2V2zm16 0h2v8h-2V2zm-6 6h-4V2H4v2h4v4H4v2h4v4H4v2h4v4H4v2h6v-6h4v6h2v-6h4v-2h-4v-4h4V8h-4V2h-2v6zm-4 6v-4h4v4h-4zM20 2h-4v2h4V2zM2 14h2v8H2v-8zm14 6h4v2h-4v-2zm6-6h-2v8h2v-8z"
                        fill="currentColor" />
                </svg>
                <span class="text-sm text-accent group-hover:text-primary">Home</span>
            </a>
            <a href="{{ route('project.index') }}"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-accent group">
                <svg class="w-5 h-5 mb-2 text-accent group-hover:text-primary" aria-hidden="true" fill="none"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 4H2v16h20V6H12V4zm-2 4h10v10H4V6h6v2zm6 4h-2v-2h-2v2h2v2h-2v2h2v-2h2v2h2v-2h-2v-2zm0 0h2v-2h-2v2z"
                        fill="currentColor" />
                </svg>
                <span class="text-sm text-accent group-hover:text-primary">Projects</span>
            </a>
            <a href="{{ route('article.index') }}"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-accent group">
                <svg class="w-5 h-5 mb-2 text-accent group-hover:text-primary" aria-hidden="true" fill="none"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M6 3h14v2h2v6h-2v8h-2V5H6V3zm8 14v-2H6V5H4v10H2v4h2v2h14v-2h-2v-2h-2zm0 0v2H4v-2h10zM8 7h8v2H8V7zm8 4H8v2h8v-2z"
                        fill="currentColor" />
                </svg>
                <span class="text-sm text-accent group-hover:text-primary">Articles</span>
            </a>
            <a href="{{ route('contact.index') }}"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-accent group">
                <svg class="w-5 h-5 mb-2 text-accent group-hover:text-primary" aria-hidden="true" fill="none"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M15 2H9v2H7v6h2V4h6V2zm0 8H9v2h6v-2zm0-6h2v6h-2V4zM4 16h2v-2h12v2H6v4h12v-4h2v6H4v-6z"
                        fill="currentColor" />
                </svg>
                <span class="text-sm text-accent group-hover:text-primary">Contact</span>
            </a>
        </div>
    </div>
</nav>
{{-- navbar-sm end --}}
