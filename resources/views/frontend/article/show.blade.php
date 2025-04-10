@extends('frontend.layouts.app')

@section('content')
    {{-- section banner start --}}
    <section class="bg-primary min-h-96 flex items-center justify-start relative w-full">
        <div class="absolute bottom-0 top-0 left-0 -right-0 z-10 overflow-hidden" data-aos="fade" data-aos-delay="200"
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
        <div class="h-full my-auto mx-auto max-w-screen-2xl relative z-30 w-full">
            {{-- breadcrumbs start --}}
            <nav class="flex" aria-label="Breadcrumb" data-aos="fade" data-aos-delay="300" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse m-4 lg:m-0">
                    <li class="inline-flex items-center">
                        <a href="{{ route('main.index') }}"
                            class="inline-flex items-center text-md md:text-lg font-medium hover:underline text-secondary2 hover:text-accent">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="items-center text-md md:text-lg font-medium text-secondary2">/</span>
                            <a href="{{ route('article.index') }}"
                                class="ms-1 text-md md:text-lg font-medium text-secondary2 hover:underline md:ms-2 hover:text-accent">Article</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="items-center text-md md:text-lg font-medium text-secondary2">/</span>
                            <a href="#"
                                class="ms-1 text-md md:text-lg font-medium text-accent hover:underline md:ms-2 overflow-hidden line-clamp-1">
                                {{ $detailArticle->title }}
                            </a>
                        </div>
                    </li>
                </ol>
            </nav>
            {{-- breadcrumbs end --}}

            {{-- page title start --}}
            <div class="w-4/5 py-4 m-4 lg:m-0" data-aos="fade" data-aos-delay="600" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false">
                <h1
                    class="mb-4 text-4xl font-normal text-start tracking-tighter text-accent md:text-6xl lg:text-7xl overflow-hidden line-clamp-2">
                    {{ $detailArticle->title }}
                </h1>
                <p class="text-sm text-secondary2 text-start pt-2">Dipublikasi Tanggal:
                    {{ convertDate($detailArticle->created_at) }}
                </p>
            </div>
            {{-- page title end --}}
        </div>
    </section>
    {{-- section banner end --}}

    {{-- section content start --}}
    <section class="bg-secondary1 py-12 md:py-16 w-full">
        <div class="mx-auto max-w-screen-2xl w-full">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start w-full" data-aos="fade" data-aos-delay="900"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                <div class="col-span-2 w-full">
                    <div>
                        <img src="{{ $detailArticle->gambar ? asset('resources/storage/img/' . $detailArticle->gambar) : asset('frontend/resources/img/sigma-logo-full.png') }}"
                            class="object-cover w-full h-full" width="100" height="100"
                            alt="{{ $detailArticle->judul }}">
                    </div>
                    <article class="prose prose-invert prose-lg lg:prose-xl lg:col-span-2 m-4 lg:m-0 pt-8 max-w-none">
                        {!! $detailArticle->content !!}
                    </article>
                </div>
                <div class="text-start p-4 m-4 lg:m-0 bg-accent rounded-lg lg:sticky lg:top-20 lg:h-fit lg:z-10">
                    <h3
                        class="mb-6 text-3xl font-normal text-start tracking-tighter text-secondary1 md:text-5xl lg:text-6xl">
                        Another Article_</h3>
                    <div class="mx-auto flex flex-col gap-3">
                        @forelse ($articleData as $article)
                            <div class="relative w-full h-56 lg:h-56 bg-transparent">
                                <img src="{{ $article->gambar ? asset('resources/storage/img/' . $article->gambar) : asset('resources/img/logo-vincent-portfolio.png') }}"
                                    class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                                    height="100" alt="#">
                                <div
                                    class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent2 to-transparent bg-opacity-50 border-accent2 border-2 rounded-lg">
                                    <div
                                        class="px-2 md:px-4 lg:px-8 py-4 md:w-96 h-full grid grid-cols-1 justify-start items-center w-full">
                                        <h4
                                            class="text-white font-regular text-start text-2xl md:text-4xl lg:text-5xl overflow-hidden line-clamp-2">
                                            <a href="{{ route('article.detail', $article->slug) }}">
                                                {{ $article->title }}
                                            </a>
                                        </h4>
                                        <span
                                            class="text-white font-regular text-start text-md tracking-tight leading-4 overflow-hidden line-clamp-3">
                                            {{ strip_tags($article->content) }}
                                        </span>
                                        <a href="{{ route('article.detail', $article->slug) }}"
                                            class="inline-flex justify-start w-auto text-md font-medium text-start text-white bg-transparent hover:underline tracking-wide">See
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
                            <p class="text-secondary1 font-regular text-start text-xl tracking-tight leading-6 min-h-16">
                                Empty data
                            </p>
                        @endforelse
                    </div>
                    <div class="w-full py-8 px-4">
                        {{ $articleData->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section content end --}}
@endsection
