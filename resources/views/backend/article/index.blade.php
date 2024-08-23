@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.sidebar')
    <section class="p-5 min-h-screen md:ml-64 bg-black">
        <div class="md:flex justify-between items-center p-0 mb-8">
            <div>
                <h1 class="text-2xl md:text-4xl lg:text-6xl text-accent tracking-tighter mb-4 md:mb-0">{{ __(@$pageTitle) }}
                </h1>
            </div>
            <div>
                <a href="{{ route('backend.create_article') }}"
                    class="text-accent bg-black hover:bg-accent hover:text-black border border-accent focus:ring-4 focus:ring-accent font-medium rounded-sm text-sm px-3 md:px-7 py-2.5">
                    Add New
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 mx-auto gap-4">
            @forelse ($articleData as $article)
                <div class="relative w-full h-64 lg:h-72 border-2 bg-primary border-accent rounded-lg">
                    <img src="{{ $article->gambar ? asset('storage/img/' . $article->gambar) : asset('assets/img/logo-vincent-portfolio.png') }}"
                        class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100" height="100"
                        alt="{{ $article->gambar }}">
                    <div
                        class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                        <div class="px-8 py-4 md:w-96 h-full grid grid-cols-1 justify-start items-center w-full">
                            <h3 class="text-white font-regular text-start text-xl md:text-4xl lg:text-5xl overflow-hidden line-clamp-2">
                                {{ $article->title }}
                            </h3>
                            <span
                                class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-16 overflow-hidden line-clamp-3">
                                {!! $article->content !!}
                            </span>
                            <a href="{{ route('backend.show_article', $article->slug) }}"
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
    @endsection
