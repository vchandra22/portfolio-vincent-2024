@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.sidebar')
    <section class="p-5 min-h-screen md:ml-64 bg-black">
        <div class="mb-8">
            <div>
                <h1 class="text-2xl md:text-4xl lg:text-6xl text-accent tracking-tighter mb-4 md:mb-0">{{ __(@$pageTitle) }}
                </h1>
            </div>
        </div>
        <div class="grid grid-cols-1 mx-auto gap-4">
            <div class="relative w-full h-52 border-2 bg-primary border-accent rounded-lg">
                <img src="{{ asset('assets/img/default-hero-image.webp') }}"
                    class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100" height="100"
                    alt="Gambar Ilustrasi Media Social">
                <div class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                    <div class="px-8 py-4 h-full grid grid-cols-1 justify-start items-center w-full">
                        <h3 class="text-white font-regular text-start text-xl md:text-4xl lg:text-5xl">
                            User Setting
                        </h3>
                        <span
                            class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-16 overflow-hidden line-clamp-3">
                            Information about me
                        </span>
                        <a href="{{ route('backend.edit_user', ['uuid' => Auth::user()->uuid]) }}"
                            class="inline-flex justify-start w-auto text-lg lg:text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide">Detail
                            <svg class="w-6 h-6 ms-2 -rotate-90 rtl:rotate-180" fill="none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                    fill="currentColor" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-52 border-2 bg-primary border-accent rounded-lg">
                <img src="{{ asset('assets/img/ilustrasi-media-sosial.jpg') }}"
                    class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100" height="100"
                    alt="Gambar Ilustrasi Media Social">
                <div class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                    <div class="px-8 py-4 h-full grid grid-cols-1 justify-start items-center w-full">
                        <h3 class="text-white font-regular text-start text-xl md:text-4xl lg:text-5xl">
                            Media Social
                        </h3>
                        <span
                            class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-16 overflow-hidden line-clamp-3">
                            Setting about your media social
                        </span>
                        <a href="{{ route('backend.media_social') }}"
                            class="inline-flex justify-start w-auto text-lg lg:text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide">Detail
                            <svg class="w-6 h-6 ms-2 -rotate-90 rtl:rotate-180" fill="none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                    fill="currentColor" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-52 border-2 bg-primary border-accent rounded-lg">
                <img src="{{ asset('assets/img/illustration-image-role-developer.webp') }}"
                    class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100" height="100"
                    alt="#">
                <div class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                    <div class="px-8 py-4 h-full grid grid-cols-1 justify-start items-center w-full">
                        <h3 class="text-white font-regular text-start text-xl md:text-4xl lg:text-5xl">
                            Skill
                        </h3>
                        <span
                            class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-16 overflow-hidden line-clamp-3">
                            Setting about your skill you've
                        </span>
                        <a href="{{ route('backend.skill') }}"
                            class="inline-flex justify-start w-auto text-lg lg:text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide">Detail
                            <svg class="w-6 h-6 ms-2 -rotate-90 rtl:rotate-180" fill="none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                    fill="currentColor" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-52 border-2 bg-primary border-accent rounded-lg">
                <img src="{{ asset('assets/img/illustration-image-discuss-10.webp') }}"
                    class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100" height="100"
                    alt="#">
                <div class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                    <div class="px-8 py-4 h-full grid grid-cols-1 justify-start items-center w-full">
                        <h3 class="text-white font-regular text-start text-xl md:text-4xl lg:text-5xl">
                            Tech Stack
                        </h3>
                        <span
                            class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-16 overflow-hidden line-clamp-3">
                            Setting about your tech stack use
                        </span>
                        <a href="{{ route('backend.tech') }}"
                            class="inline-flex justify-start w-auto text-lg lg:text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide">Detail
                            <svg class="w-6 h-6 ms-2 -rotate-90 rtl:rotate-180" fill="none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                    fill="currentColor" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
