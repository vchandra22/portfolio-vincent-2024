@extends('frontend.layouts.app')

@section('content')
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden">
            <img src="{{ asset('assets/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-4 max-w-screen-2xl mx-auto relative z-30">
            <div class="px-4 mx-auto text-start py-3 md:py-4 lg:py-8 xl:py-20">
                <h1 class="mb-8 text-5xl font-normal tracking-tighter text-accent md:text-9xl lg:text-9xl">
                    Full-stack Web Developer_
                </h1>
                <p class="mb-8 text-xs md:text-xl font-normal font-static text-secondary2 lg:text-2xl">
                    My goal is to <span class="text-accent">write maintainable code, innovative
                    </span> and <span class="text-accent">user-friendly
                    </span> digital solutions. Eager to
                    contribute to a dynamic team and continuously learn in the tech industry.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-primary rounded-none border border-accent bg-accent hover:bg-transparent hover:border hover:border-accent hover:text-accent">
                        Download CV
                        <svg class="w-8 h-8 ms-2 -rotate-45 rtl:rotate-180" fill="none"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-accent rounded-none border border-accent hover:bg-accent hover:text-secondary1">
                        See my recents project
                    </a>
                </div>
            </div>
            <div class="px-4 mx-auto text-start w-full py-3 md:py-4 lg:py-8 xl:py-20">
                <div class="px-4 mx-auto text-start py-3 md:py-4 w-full lg:py-12">
                    <div class="grid grid-cols-3 lg:grid-cols-5 gap-3 lg:gap-8 justify-start items-center w-full">
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/akar-icons_php-fill.png') }}" class="w-10 h-10 md:w-20 md:h-20 "
                                width="100" height="100" alt="php icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/logos_laravel.png') }}" class="w-10 h-10 md:w-20 md:h-20 "
                                width="100" height="100" alt="laravel icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/simple-icons_mysql.png') }}" class="w-10 h-10 md:w-20 md:h-20 "
                                width="100" height="100" alt="mysql icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/uiw_linux.png') }}" class="w-10 h-10 md:w-20 md:h-20 "
                                width="100" height="100" alt="linux icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/devicon-plain_docker.png') }}"
                                class="w-10 h-10 md:w-20 md:h-20 " width="100" height="100" alt="docker icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/akar-icons_html-fill.png') }}"
                                class="w-10 h-10 md:w-20 md:h-20 " width="100" height="100" alt="html icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/akar-icons_css-fill.png') }}" class="w-10 h-10 md:w-20 md:h-20 "
                                width="100" height="100" alt="css icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/akar-icons_javascript-fill.png') }}"
                                class="w-10 h-10 md:w-20 md:h-20 " width="100" height="100" alt="javascript icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/simple-icons_tailwindcss.png') }}"
                                class="w-10 h-10 md:w-20 md:h-20 " width="100" height="100" alt="tailwind icon">
                        </div>
                        <div
                            class="bg-transparent border border-secondary1 rounded-lg m-auto w-full h-full p-4 flex justify-center items-center">
                            <img src="{{ asset('assets/icon/ri_bootstrap-fill.png') }}" class="w-10 h-10 md:w-20 md:h-20 "
                                width="100" height="100" alt="bottstrap icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 text-start max-w-screen-2xl mx-auto w-full relative z-30 py-8 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full justify-between gap-2 md:grid-4 lg:grid-8">
                <div class="h-16 md:h-20">
                    <a href="#"
                        class="grid grid-cols-2 md:grid-cols-3 items-center justify-center h-full mx-auto px-8 rounded-md bg-secondary2 hover:bg-accent">
                        <div>
                            <img src="{{ asset('assets/icon/mdi_github.png') }}" class="w-10 h-10 md:w-14 md:h-14"
                                alt="github icon vincent">
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-sm md:text-xl font-static font-medium tracking-wide text-secondary1">vchandra22
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="h-16 md:h-20">
                    <a href="#"
                        class="grid grid-cols-2 md:grid-cols-3 items-center justify-center h-full mx-auto px-8 rounded-md bg-secondary2 hover:bg-accent">
                        <div>
                            <img src="{{ asset('assets/icon/bi_linkedin.png') }}" class="w-10 h-10 md:w-14 md:h-14"
                                alt="github icon vincent">
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-sm md:text-xl font-static font-medium tracking-wide text-secondary1">Vincent
                                Chandra</h4>
                        </div>
                    </a>
                </div>
                <div class="h-16 md:h-20">
                    <a href="#"
                        class="grid grid-cols-2 md:grid-cols-3 items-center justify-center h-full mx-auto px-8 rounded-md bg-secondary2 hover:bg-accent">
                        <div>
                            <img src="{{ asset('assets/icon/ant-design_instagram-filled.png') }}"
                                class="w-10 h-10 md:w-14 md:h-14" alt="github icon vincent">
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-sm md:text-xl font-static font-medium tracking-wide text-secondary1">
                                vchandra.22</h4>
                        </div>
                    </a>
                </div>
                <div class="h-16 md:h-20">
                    <a href="#"
                        class="grid grid-cols-2 md:grid-cols-3 items-center justify-center h-full mx-auto px-8 rounded-md bg-secondary2 hover:bg-accent">
                        <div>
                            <img src="{{ asset('assets/icon/ri_whatsapp-fill.png') }}" class="w-10 h-10 md:w-14 md:h-14"
                                alt="github icon vincent">
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-sm md:text-xl font-static font-medium tracking-wide text-secondary1">
                                +6281559643660</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
