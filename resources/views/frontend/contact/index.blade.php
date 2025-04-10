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
    <meta property="og:image" content="{{ asset('resources/img/logo-vincent-portfolio.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:site_name" content="{{ get_app_name() }}">

    <!-- Twitter Card meta tags for Twitter sharing -->
    <meta name="twitter:card" content="Artikel Portfolio Web Developer Vincent">
    <meta name="twitter:title" content="Portfolio Vincent Chandra Trie Novan">
    <meta name="twitter:description"
        content="Vincent Chandra Trie Novan specialized in web development and UI design. Proficient in creating responsive and user-centric websites and applications.">
    <meta name="twitter:image" content="{{ asset('resources/img/logo-vincent-portfolio.png') }}">
@endsection

@section('content')
    {{-- section banner start --}}
    <section class="bg-primary min-h-96 flex items-center justify-start w-auto relative">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-10 overflow-hidden" data-aos="fade" data-aos-delay="300"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="false">
            <img src="{{ asset('resources/img/banner-bg-light.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover" width="100" height="100">
        </div>
        <div class="absolute bottom-0 top-0 left-0 right-0 z-0" data-aos="fade" data-aos-delay="200"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="true">
            <img src="{{ asset('resources/img/bg-grid-portofolio-vincent.png') }}"
                alt="background jumbotron portofolio vincent" class="h-full w-full overflow-hidden object-cover"
                width="100" height="100">
        </div>
        <div class="h-full w-full my-auto mx-auto max-w-screen-2xl relative z-30">
            {{-- breadcrumbs start --}}
            <nav class="flex" aria-label="Breadcrumb" data-aos="fade" data-aos-delay="300" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse m-4 lg:m-0">
                    <li class="inline-flex items-center">
                        <a href="{{ route('main.index') }}"
                            class="inline-flex items-center text-md md:text-lg font-medium text-secondary2 hover:underline hover:text-accent">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="items-center text-md md:text-lg font-medium text-secondary2">/</span>
                            <a href="{{ route('article.index') }}"
                                class="ms-1 text-md md:text-lg font-medium text-accent hover:underline md:ms-2">{{ $pageTitle }}</a>
                        </div>
                    </li>
                </ol>
            </nav>
            {{-- breadcrumbs end --}}

            {{-- page title start --}}
            <div class="w-1/3 py-4" data-aos="fade" data-aos-delay="600" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false">
                <p
                    class="mb-4 text-4xl font-normal text-start tracking-tighter text-accent md:text-7xl lg:text-8xl m-4 lg:m-0">
                    {{ $pageTitle }}_
                </p>
            </div>
            {{-- page title end --}}
        </div>
    </section>
    {{-- section banner end --}}

    {{-- section contact start --}}
    <section class="bg-secondary1 bg-blend-multiply relative w-auto py-12 md:py-16">
        <div class="mx-auto max-w-screen-2xl px-4 text-start">
            <div class="grid grid-cols-1 md:grid-cols-2 mx-auto gap-8">
                <div class="lg:sticky lg:top-20 lg:h-fit lg:z-10">
                    <h1 class="text-3xl md:text-5xl lg:text-7xl text-accent font-semibold text-start tracking-tighter mb-4">
                        Let’s
                        Push Some Crazy Ideas to Production!
                    </h1>
                    <p class="text-md lg:text-lg text-accent text-start tracking-wide font-thin font-static">Excited to Dive
                        into This Crazy Idea? Let’s
                        Chat Over Coffee and Plot Our Next Big Move!
                    </p>
                </div>
                <div class="relative w-full h-screen bg-transparent">
                    <div class="absolute top-0 right-0 h-full bg-accent w-full border-secondary1 border-2 rounded-md">
                        <div class="px-8 py-12 h-full grid grid-cols-1 justify-start items-center">
                            <h3 class="text-secondary1 font-regular text-start text-5xl lg:text-7xl mb-4 self-start">
                                Here’s How to Reach Me!
                            </h3>
                            <ul class="text-secondary1 font-normal text-xl md:text-2xl lg:text-4xl self-end">
                                @foreach ($socialData as $social)
                                    <li class="mb-4">
                                        <a href="{{ $social->link }}" target="__blank"
                                            class="flex justify-start items-center gap-0" target="_blank">
                                            <div class="bg-secondary2 p-4 rounded-full z-20 border border-secondary1">
                                                <img src="{{ $social->gambar ? asset('resources/storage/icon/' . $social->gambar) : asset('resources/img/logo-vincent-portfolio.png') }}"
                                                    class="text-secondary2 w-5 h-5 md:w-8 md:h-8" width="100"
                                                    height="100" alt="{{ $social->gambar }}">
                                            </div>
                                            <span
                                                class="bg-secondary1 hover:bg-secondary2 hover:text-secondary1 text-accent rounded-e-full py-3 px-9 -m-6 z-10">
                                                {{ $social->title }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <p
                                class="text-secondary1 font-regular text-start text-xs md:text-md tracking-tight leading-4 self-end">
                                Want to brainstorm, collaborate, or just chat about the latest in tech? Feel free to drop me
                                a line. I'm always up for discussing new ideas, sharing a virtual coffee, or diving into
                                exciting projects. Use the contact details below to get in touch, and let’s make something
                                amazing together!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section contact end --}}
@endsection
