{{-- footer start --}}
<footer class="bg-primary border-t border-secondary1 relative py-12 lg:py-0 w-full">
    <div class="absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden">
        <img src="{{ asset('resources/img/bg-footer-portofolio-vincent.png') }}"
            alt="background jumbotron portofolio vincent" class="h-full w-full overflow-hidden object-cover" width="100"
            height="100">
    </div>
    <div class="mx-auto w-full max-w-screen-2xl p-4 py-6 lg:py-8 relative z-30">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ route('main.index') }}" class="flex flex-col justify-start items-start">
                    <img src="{{ asset('resources/img/logo-vincent-portfolio.png') }}" width="100" height="100"
                        class="h-28" alt="Logo Portfolio Vincent Chandra" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h5 class="mb-6 text-md md:text-lg font-semibold text-accent">Navigation</h5>
                    <ul class="text-secondary2 font-medium text-xs md:text-md lg:text-lg">
                        <li class="mb-4">
                            <a href="{{ route('main.index') }}" class="hover:underline">Home</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('project.index') }}" class="hover:underline">Project</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('article.index') }}" class="hover:underline">Articles</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('contact.index') }}" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="mb-6 text-md md:text-lg font-semibold text-accent">Follow me</h5>
                    <ul class="text-secondary2 font-medium text-xs md:text-md lg:text-lg">
                        @foreach ($socialData as $social)
                            <li class="mb-4">
                                <a href="{{ $social->link }}" target="__blank"
                                    class="flex justify-start items-center gap-2 hover:underline" target="_blank">
                                    <div class="bg-secondary2 p-0.5 rounded-full">
                                        <img src="{{ $social->gambar ? asset('resources/storage/icon/' . $social->gambar) : asset('resources/img/logo-vincent-portfolio.png') }}"
                                            class="text-secondary2 w-3 h-3 md:w-5 md:h-5" width="100" height="100"
                                            alt="{{ $social->gambar }}">
                                    </div>
                                    <span>
                                        {{ $social->title }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h5 class="mb-6 text-md md:text-lg font-semibold text-accent">Contact</h5>
                    <ul class="text-secondary2 font-medium text-xs md:text-md lg:text-lg">
                        <li class="mb-4">
                            <a href="https://maps.app.goo.gl/npXG7xVDPMaf85iT8" class="hover:underline">Blitar,
                                Indonesia</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://wa.me/6281559643660/" target="__blank"
                                class="hover:underline">+6281559643660</a>
                        </li>
                        @if (Auth::guard('web')->check())
                            <form action="{{ route('auth.logout') }}" method="POST" class="block">
                                @csrf
                                <button type="submit">
                                    <span class="hover:underline">Logout</span>
                                </button>
                            </form>
                        @else
                            <li>
                                <a href="{{ route('auth.login') }}" class="hover:underline">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-4 border-secondary1 sm:mx-auto lg:my-6" />
        <div class="sm:flex sm:items-center sm:justify-center">
            <span class="text-xs md:text-md lg:text-lg text-secondary2 text-center">© 2024 <a href="#"
                    class="hover:underline">Portfolio
                    Vincent_</a>
            </span>
        </div>
    </div>
</footer>

{{-- footer end --}}
