@extends('frontend.layouts.app')

@section('meta')
    <meta name="description"
        content="Vincent Chandra Trie Novan specialized in web development and UI design. Proficient in creating responsive and user-centric websites and applications.">
    <meta name="keywords"
        content="web developer, laravel developer, fresh graduate web developer, vincent chandra, aplikasi website">

    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:type" content="Artikel Portfolio Web Developer Vincent">
    <meta property="og:title" content="Portfolio Vincent Chandra Trie Novan">
    <meta property="og:description"
        content="Vincent Chandra Trie Novan specialized in web development and UI design. Proficient in creating responsive and user-centric websites and applications.">
    <meta property="og:image" content="{{ asset('assets/img/logo-vincent-portfolio.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:site_name" content="{{ get_app_name() }}">

    <!-- Twitter Card meta tags for Twitter sharing -->
    <meta name="twitter:card" content="Artikel Portfolio Web Developer Vincent">
    <meta name="twitter:title" content="Portfolio Vincent Chandra Trie Novan">
    <meta name="twitter:description"
        content="Vincent Chandra Trie Novan specialized in web development and UI design. Proficient in creating responsive and user-centric websites and applications.">
    <meta name="twitter:image" content="{{ asset('assets/img/logo-vincent-portfolio.png') }}">
@endsection

@section('content')
    {{-- jumbotron start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden" data-aos="fade" data-aos-delay="200"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="true">
            <img src="{{ asset('assets/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover" width="100" height="100">
            <img src="{{ asset('assets/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-2/3 w-2/3 overflow-hidden object-cover" width="100" height="100">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-4 max-w-screen-2xl w-full mx-auto relative z-30">
            <div class="px-4 mx-auto text-start py-3 md:py-4 lg:py-8 xl:py-20">
                <h1
                    class="mb-4 text-6xl font-normal tracking-tighter text-accent md:text-8xl lg:text-9xl min-h-32 lg:min-h-72">
                    <span id="full_name"></span><span class="cursor inline-block animate-wiggle"> |</span>
                    <span class="mb-6 text-lg font-normal tracking-tighter text-accent md:text-3xl lg:text-5xl">
                        <span id="role"></span><span class="cursor inline-block animate-wiggle"> |</span>
                    </span>
                </h1>
                <div>
                    <h2 class="mb-8 text-md leading-5 md:text-xl font-normal font-static text-secondary2 lg:text-2xl"
                        data-aos="fade" data-aos-delay="900" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-once="true">
                        {{ $userData->short_about }}
                    </h2>
                </div>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                    <a href="{{ route('download.file', ['cv' => $userData->cv]) }}"
                        class="inline-flex justify-center items-center py-1 px-3 lg:py-3 lg:px-5 text-base font-medium text-center text-primary rounded-none border border-accent bg-accent hover:bg-transparent hover:border hover:border-accent hover:text-accent"
                        data-aos="fade" data-aos-delay="1200" data-aos-duration="300" data-aos-easing="ease-in-out"
                        data-aos-once="true">
                        Download CV
                        <svg class="w-8 h-8 ms-2 -rotate-45 rtl:rotate-180" fill="none"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <a href="{{ route('project.index') }}"
                        class="inline-flex justify-center items-center py-1 px-3 lg:py-3 lg:px-5 sm:ms-4 text-base font-medium text-center text-accent rounded-none border border-accent hover:bg-accent hover:text-secondary1"
                        data-aos="fade" data-aos-delay="1500" data-aos-duration="300" data-aos-easing="ease-in-out"
                        data-aos-once="true">
                        See my recents project
                    </a>
                </div>
            </div>
            <div class="px-4 mx-auto text-start w-full py-3 md:py-4 lg:py-8 xl:py-20">
                <div class="px-4 mx-auto text-start py-3 md:py-4 w-full lg:py-12" data-aos="fade-down">
                    <div class="grid grid-cols-3 lg:grid-cols-5 gap-3 lg:gap-8 justify-start items-center w-full"
                        data-aos="fade" data-aos-delay="1500" data-aos-duration="900" data-aos-easing="ease-in-out"
                        data-aos-once="true">
                        @forelse ($techData as $item)
                            <div
                                class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                                <img src="{{ $item->gambar ? asset('storage/icon/' . $item->gambar) : asset('assets/img/logo-vincent-portfolio.png') }}"
                                    class="w-10 h-10 md:w-20 md:h-20" width="100" height="100"
                                    alt="{{ $item->gambar }}">
                            </div>
                        @empty
                            <p class="text-center">no data</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 text-start max-w-screen-2xl mx-auto w-full relative z-30 py-8 lg:py-16" data-aos="fade"
            data-aos-delay="1900" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="true">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full justify-between gap-2 md:grid-4 lg:grid-8">
                @foreach ($socialData as $social)
                    <div class="h-16 md:h-20">
                        <a href="{{ $social->link }}" target="__blank"
                            class="grid grid-cols-2 md:grid-cols-3 items-center justify-center h-full mx-auto px-8 rounded-md bg-secondary2 hover:bg-accent">
                            <div>
                                <img src="{{ $social->gambar ? asset('storage/icon/' . $social->gambar) : asset('assets/img/logo-vincent-portfolio.png') }}"
                                    class="w-10 h-10 md:w-14 md:h-14" alt="{{ $social->gambar }}" width="100"
                                    height="100">
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-sm md:text-xl font-static font-medium tracking-wide text-secondary1">
                                    {{ $social->title }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- jumbotron end --}}

    {{-- about me start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto pb-8 md:pb-2 xl:pb-20">
        <div class="min-h-screen mx-auto max-w-screen-2xl px-2 text-start">
            <h2 class="mb-8 text-5xl font-normal tracking-tighter text-accent py-4 md:py-8 lg:py-12 xl:py-16 md:text-5xl lg:text-7xl"
                data-aos="fade" data-aos-delay="300" data-aos-duration="300" data-aos-easing="ease-in-out"
                data-aos-once="true">
                About Me_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 items-center justify-between gap-1 md:gap-8 xl:gap-12">
                <div class="bg-gradient-to-b from-transparent to-accent border-2 border-secondary1 rounded-lg mx-auto xl:mx-0"
                    data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                    data-aos-once="true">
                    <img src="{{ $userData->profile_pict ? asset('storage/img/' . $userData->profile_pict) : asset('assets/img/logo-vincent-portfolio.png') }}"
                        class="w-full mx-auto object-cover overflow-hidden" width="100" height="100"
                        alt="php icon">
                </div>
                <div class="lg:col-span-2 h-full grid grid-cols-1 items-center justify-center" data-aos="fade"
                    data-aos-delay="1200" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="true">
                    <div class="flex flex-col gap-8 py-12 lg:py-0">
                        <h3 class="text-accent font-normal text-5xl lg:text-7xl tracking-tighter text-start">
                            {{ $userData->full_name }} as {{ $userData->role }}
                        </h3>
                        <p class="text-accent2 font-normal font-static text-md tracking-tight md:text-xl text-justify">
                            {{ strip_tags($userData->about) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about me end --}}

    {{-- choose me start --}}
    <section class="bg-primary bg-blend-multiply relative w-auto">
        <div class="pb-24 mx-auto max-w-screen-2xl px-4 text-start">
            <h2 class="mb-8 text-5xl font-normal tracking-tighter text-accent py-4 md:py-8 lg:py-12 xl:py-16 md:text-5xl lg:text-7xl"
                data-aos="fade" data-aos-delay="300" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
                Why Choose Me_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 justify-center items-center">
                @foreach ($skillData as $skill)
                    <div class="min-h-56 lg:min-h-72 h-auto w-full bg-accent border-2 border-secondary1 rounded-lg"
                        data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                        data-aos-once="true">
                        <div class="flex flex-col justify-between items-center gap-2 py-6 lg:py-10 h-full">
                            <div class="border border-secondary1 rounded-md p-2 bg-transparent">
                                <svg fill="none"
                                    class="text-secondary1 w-12 h-12 lg:w-20 lg:h-20 mx-auto
                                "
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="{{ $skill->gambar }}" fill="currentColor" />
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-secondary1 font-static text-2xl lg:text-3xl text-center font-bold tracking-wider line-clamp-1 overflow-hidden">
                                    {{ $skill->title }}
                                </h3>
                            </div>
                            <div>
                                <p
                                    class="text-secondary1 font-static text-center mx-8 line-clamp-3 overflow-hidden tracking-tight leading-tight text-lg font-thin">
                                    {{ $skill->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- choose me end --}}

    {{-- recent project start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto py-12 md:py-16">
        <div class="min-h-screen mx-auto max-w-screen-2xl px-4 text-start">
            <h2 class="mb-8 text-5xl font-normal tracking-tighter text-accent py-4 md:py-8 lg:py-12 xl:py-16 md:text-5xl lg:text-7xl"
                data-aos="fade" data-aos-delay="300" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
                Recents Projects_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 mx-auto gap-4">
                @forelse ($projectData as $project)
                    <div class="relative w-full h-64 lg:h-72 border-2 bg-primary border-accent rounded-lg" data-aos="fade"
                        data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ $project->gambar ? asset('storage/img/' . $project->gambar) : asset('assets/img/logo-vincent-portfolio.png') }}"
                            class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                            height="100" alt="#">
                        <div
                            class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                            <div class="px-8 py-4 md:w-96 h-full grid grid-cols-1 justify-start items-center w-full">
                                <h3
                                    class="text-white font-regular text-start text-2xl md:text-4xl lg:text-5xl overflow-hidden line-clamp-2">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-sm text-white text-start pt-1">
                                    {{ convertDate($project->created_at) }}</p>
                                <p
                                    class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-12 lg:min-h-20">
                                    {{ $project->short_description }}
                                </p>
                                <a href="{{ route('project.detail', $project->slug) }}"
                                    class="inline-flex justify-start w-auto text-lg lg:text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide">See
                                    Detail
                                    <svg class="w-6 h-6 ms-2 -rotate-90 rtl:rotate-180" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                            fill="currentColor" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3" data-aos="fade" data-aos-delay="600" data-aos-duration="600"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <p class="text-white font-regular text-center text-xl tracking-tight leading-6 min-h-16">
                            Empty data
                        </p>
                    </div>
                @endforelse
            </div>

    </section>
    {{-- recent project end --}}

    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const text = "Vincent Chandra";
                const typingElement = document.getElementById('full_name');
                let index = 0;

                function type() {
                    if (index < text.length) {
                        typingElement.textContent += text.charAt(index);
                        index++;
                        const randomSpeed = Math.floor(Math.random() * (150 - 50 + 1)) + 50;
                        setTimeout(type, randomSpeed);
                    }
                }

                type();
            });

            document.addEventListener('DOMContentLoaded', function() {
                const text = "Web Developer";
                const typingElement = document.getElementById('role');
                let index = 0;

                function type() {
                    if (index < text.length) {
                        typingElement.textContent += text.charAt(index);
                        index++;
                        const randomSpeed = Math.floor(Math.random() * (150 - 20 + 1)) + 20;
                        setTimeout(type, randomSpeed);
                    }
                }

                const initialDelay = 1200;
                setTimeout(type, initialDelay);
            });
        </script>
    @endpush
@endsection
