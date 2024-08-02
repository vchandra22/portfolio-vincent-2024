@extends('frontend.layouts.app')

@section('content')
    {{-- jumbotron start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden">
            <img src="{{ asset('assets/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-4 max-w-screen-2xl w-full mx-auto relative z-30">
            <div class="px-4 mx-auto text-start py-3 md:py-4 lg:py-8 xl:py-20">
                <h1
                    class="mb-4 text-6xl font-normal tracking-tighter text-accent md:text-8xl lg:text-9xl min-h-32 lg:min-h-72">
                    <span id="full_name"></span><span class="cursor inline-block animate-wiggle">|</span>
                </h1>
                <h2 class="mb-6 text-lg font-normal tracking-tighter text-accent md:text-3xl lg:text-5xl">
                    <span id="role"></span><span class="cursor inline-block animate-wiggle">_</span>
                </h2>
                <div>
                    <p class="mb-8 text-xs md:text-xl font-normal font-static text-secondary2 lg:text-2xl" data-aos="fade"
                        data-aos-delay="1600" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false">
                        My goal is to <span class="text-accent">write maintainable code, innovative
                        </span> and <span class="text-accent">user-friendly
                        </span> digital solutions. Eager to
                        contribute to a dynamic team and continuously learn in the tech industry.
                    </p>
                </div>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-primary rounded-none border border-accent bg-accent hover:bg-transparent hover:border hover:border-accent hover:text-accent"
                        data-aos="fade" data-aos-delay="1900" data-aos-duration="300" data-aos-easing="ease-in-out"
                        data-aos-once="false">
                        Download CV
                        <svg class="w-8 h-8 ms-2 -rotate-45 rtl:rotate-180" fill="none"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M11 4h2v12h2v2h-2v2h-2v-2H9v-2h2V4zM7 14v2h2v-2H7zm0 0v-2H5v2h2zm10 0v2h-2v-2h2zm0 0v-2h2v2h-2z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-accent rounded-none border border-accent hover:bg-accent hover:text-secondary1"
                        data-aos="fade" data-aos-delay="2000" data-aos-duration="300" data-aos-easing="ease-in-out"
                        data-aos-once="false">
                        See my recents project
                    </a>
                </div>
            </div>
            <div class="px-4 mx-auto text-start w-full py-3 md:py-4 lg:py-8 xl:py-20">
                <div class="px-4 mx-auto text-start py-3 md:py-4 w-full lg:py-12" data-aos="fade-down">
                    <div class="grid grid-cols-3 lg:grid-cols-5 gap-3 lg:gap-8 justify-start items-center w-full"
                        data-aos="fade" data-aos-delay="300" data-aos-duration="900" data-aos-easing="ease-in-out"
                        data-aos-once="false">
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
                            <img src="{{ asset('assets/icon/ri_bootstrap-fill.png') }}"
                                class="w-10 h-10 md:w-20 md:h-20 " width="100" height="100" alt="bottstrap icon">
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
    {{-- jumbotron end --}}

    {{-- recent project start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto">
        <div class="min-h-screen mx-auto max-w-screen-2xl px-4 text-start">
            <h2
                class="mb-8 text-4xl font-normal tracking-tighter text-accent py-4 md:py-8 lg:py-12 xl:py-16 md:text-5xl lg:text-7xl">
                Recents Projects_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 mx-auto gap-4">
                <div class="relative w-full xl:h-72 border-2 bg-primary border-accent rounded-lg">
                    <img src="{{ asset('assets/img/sigma-project-img.png') }}"
                        class="h-full w-full pl-48 overflow-hidden object-cover mx-auto rounded-lg" width="100"
                        height="100" alt="#">
                    <div
                        class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                        <div class="px-8 py-4 w-96 h-full grid grid-cols-1 justify-start items-center">
                            <h4 class="text-white font-regular text-start text-5xl">SIGMA Platform</h4>
                            <p class="text-white font-regular text-start text-xl tracking-tight leading-6 min-h-16">a
                                platform for
                                monitoring internship program at KOMINFO Blitar City</p>
                            <a href="#"
                                class="inline-flex justify-start py-2 w-auto text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide"
                                target="_blank">See Detail
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

    </section>
    {{-- recent project end --}}
@endsection

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
