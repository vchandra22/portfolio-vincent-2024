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
        <div class="absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden" data-aos="fade" data-aos-delay="300"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="false">
            <img src="{{ asset('resources/img/banner-bg-light.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover">
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
                <h1
                    class="mb-4 text-4xl font-normal text-start tracking-tighter text-accent md:text-8xl lg:text-9xl m-4 lg:m-0">
                    {{ $pageTitle }}_
                </h1>
            </div>
            {{-- page title end --}}
        </div>
    </section>
    {{-- section banner end --}}

    {{-- section project lists start --}}
    <section class="bg-secondary1 bg-blend-multiply relative w-auto py-12 md:py-16">
        <div class="mx-auto max-w-screen-2xl px-4 text-start">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 mx-auto gap-4">
                @forelse ($articleData as $article)
                    <div class="relative w-full h-64 lg:h-72 border-2 bg-primary border-accent rounded-lg" data-aos="fade"
                        data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ $article->gambar ? asset('storage/img/' . $article->gambar) : asset('resources/img/logo-vincent-portfolio.png') }}"
                            class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                            height="100" alt="{{ $article->gambar }}">
                        <div
                            class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                            <div class="px-8 py-4 md:w-96 h-full grid grid-cols-1 justify-start items-center w-full">
                                <h3
                                    class="text-white font-semibold text-start text-4xl lg:text-5xl overflow-hidden line-clamp-2">
                                    {{ $article->title }}
                                </h3>
                                <p class="text-sm text-white text-start pt-1">
                                    {{ convertDate($article->created_at) }}</p>
                                <span
                                    class="text-white font-regular text-start text-sm md:text-lg lg:text-xl tracking-tight leading-4 md:leading-6 min-h-12 lg:min-h-20 overflow-hidden line-clamp-3">
                                    {!! $article->content !!}
                                </span>
                                <a href="{{ route('article.detail', $article->slug) }}"
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
            <div class="w-full py-8 px-4">
                {{ $articleData->links() }}
            </div>
        </div>
    </section>
    {{-- section project lists end --}}
@endsection
