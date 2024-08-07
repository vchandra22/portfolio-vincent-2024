@extends('frontend.layouts.app')

@section('content')
    {{-- jumbotron start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden" data-aos="fade" data-aos-delay="200"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="false">
            <img src="{{ asset('assets/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-4 max-w-screen-2xl w-full mx-auto relative z-30">
            <div class="px-4 mx-auto text-start py-3 md:py-4 lg:py-8 xl:py-20">
                <h1
                    class="mb-4 text-6xl font-normal tracking-tighter text-accent md:text-8xl lg:text-9xl min-h-32 lg:min-h-72"><span class="hidden">Portfolio </span>
                    <span id="full_name"></span><span class="cursor inline-block animate-wiggle"> |</span>
                </h1>
                <h2 class="mb-6 text-lg font-normal tracking-tighter text-accent md:text-3xl lg:text-5xl">
                    <span id="role"></span><span class="cursor inline-block animate-wiggle"> |</span>
                </h2>
                <div>
                    <h3 class="mb-8 text-md leading-5 md:text-xl font-normal font-static text-secondary2 lg:text-2xl"
                        data-aos="fade" data-aos-delay="900" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-once="false">
                        My goal is to <span class="text-accent">write maintainable code, innovative
                        </span> and <span class="text-accent">user-friendly
                        </span> digital solutions. Eager to
                        contribute to a dynamic team and continuously learn in the tech industry.
                    </h3>
                </div>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                    <a href="#"
                        class="inline-flex justify-center items-center py-1 px-3 lg:py-3 lg:px-5 text-base font-medium text-center text-primary rounded-none border border-accent bg-accent hover:bg-transparent hover:border hover:border-accent hover:text-accent"
                        data-aos="fade" data-aos-delay="1200" data-aos-duration="300" data-aos-easing="ease-in-out"
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
                        class="inline-flex justify-center items-center py-1 px-3 lg:py-3 lg:px-5 sm:ms-4 text-base font-medium text-center text-accent rounded-none border border-accent hover:bg-accent hover:text-secondary1"
                        data-aos="fade" data-aos-delay="1500" data-aos-duration="300" data-aos-easing="ease-in-out"
                        data-aos-once="false">
                        See my recents project
                    </a>
                </div>
            </div>
            <div class="px-4 mx-auto text-start w-full py-3 md:py-4 lg:py-8 xl:py-20">
                <div class="px-4 mx-auto text-start py-3 md:py-4 w-full lg:py-12" data-aos="fade-down">
                    <div class="grid grid-cols-3 lg:grid-cols-5 gap-3 lg:gap-8 justify-start items-center w-full"
                        data-aos="fade" data-aos-delay="1500" data-aos-duration="900" data-aos-easing="ease-in-out"
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
        <div class="px-4 text-start max-w-screen-2xl mx-auto w-full relative z-30 py-8 lg:py-16" data-aos="fade"
            data-aos-delay="1900" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="false">
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

    {{-- about me start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto pb-8 md:pb-2 xl:pb-20">
        <div class="min-h-screen mx-auto max-w-screen-2xl px-2 text-start">
            <h2 class="mb-8 text-5xl font-normal tracking-tighter text-accent py-4 md:py-8 lg:py-12 xl:py-16 md:text-5xl lg:text-7xl"
                data-aos="fade" data-aos-delay="300" data-aos-duration="300" data-aos-easing="ease-in-out"
                data-aos-once="false">
                About Me_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 items-center justify-between gap-1 md:gap-8 xl:gap-12">
                <div class="bg-gradient-to-b from-transparent to-accent border-2 border-secondary1 rounded-lg mx-auto xl:mx-0"
                    data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <img src="{{ asset('assets/img/profile-pict.png') }}"
                        class="w-full mx-auto object-cover overflow-hidden" width="100" height="100"
                        alt="php icon">
                </div>
                <div class="lg:col-span-2 h-full grid grid-cols-1 items-center justify-center" data-aos="fade"
                    data-aos-delay="1200" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-once="false">
                    <div class="flex flex-col gap-8 py-12 lg:py-0">
                        <h3 class="text-accent font-normal text-5xl lg:text-7xl tracking-tighter text-start">I'm Vincent
                            Chandra Trie
                            Novan as Web Developer
                        </h3>
                        <h4 class="text-accent2 font-normal font-static text-md tracking-tight md:text-xl text-justify">
                            Recent graduate from Universitas Brawijaya with a degree in Information Systems, specialized in
                            web
                            development and UI design. Proficient in creating responsive and user-centric websites and
                            applications. Driven by a passion for innovation, I am dedicated to delivering cutting-edge
                            digital
                            solutions that enhance user experiences. Eager to contribute to a dynamic team and continuously
                            learn in the tech industry. 🚀
                        </h4>
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
                data-aos-once="false">
                Why Choose Me_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 justify-center items-center">
                <div class="min-h-56 lg:min-h-72 h-auto w-full bg-accent border-2 border-secondary1 rounded-lg"
                    data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="flex flex-col justify-between items-center gap-2 py-6 lg:py-10 h-full">
                        <div class="border border-secondary1 rounded-md p-2 bg-transparent">
                            <svg fill="none"
                                class="text-secondary1 w-12 h-12 lg:w-20 lg:h-20 mx-auto
                            "
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M10 2h4v4h-4V2zM7 7h10v2h-2v13h-2v-6h-2v6H9V9H7V7zM5 5v2h2V5H5zm0 0H3V3h2v2zm14 0v2h-2V5h2zm0 0V3h2v2h-2z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-secondary1 font-static text-2xl lg:text-3xl text-center font-bold tracking-wider line-clamp-1 overflow-hidden">
                                Versatile Skill Set</h3>
                        </div>
                        <div>
                            <p
                                class="text-secondary1 font-static text-center mx-8 line-clamp-3 overflow-hidden tracking-tight leading-tight text-lg font-thin">
                                As a full stack developer, I have expertise in both front-end and back-end technologies,
                                allowing me to build comprehensive and scalable web applications.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-h-56 lg:min-h-72 h-auto w-full bg-accent border-2 border-secondary1 rounded-lg"
                    data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="flex flex-col justify-between items-center gap-2 py-6 lg:py-10 h-full">
                        <div class="border border-secondary1 rounded-md p-2 bg-transparent">
                            <svg fill="none"
                                class="text-secondary1 w-12 h-12 lg:w-20 lg:h-20 mx-auto
                            "
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 3H8v2h4v2H2v2h12V3h-2zm10 8V7h-6v2h4v2H2v2h20v-2zM2 17v-2h14v6h-6v-2h4v-2H2z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-secondary1 font-static text-2xl lg:text-3xl text-center font-bold tracking-wider line-clamp-1 overflow-hidden">
                                Creative Design Solutions</h3>
                        </div>
                        <div>
                            <p
                                class="text-secondary1 font-static text-center mx-8 line-clamp-3 overflow-hidden tracking-tight leading-tight text-lg font-thin">
                                I deliver visually appealing and user-friendly designs that enhance the overall user
                                experience while aligning with modern design principles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-h-56 lg:min-h-72 h-auto w-full bg-accent border-2 border-secondary1 rounded-lg"
                    data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                    data-aos-once="false">
                    <div class="flex flex-col justify-between items-center gap-2 py-6 lg:py-10 h-full">
                        <div class="border border-secondary1 rounded-md p-2 bg-transparent">
                            <svg fill="none"
                                class="text-secondary1 w-12 h-12 lg:w-20 lg:h-20 mx-auto
                            "
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 1h2v8h8v4h-2v-2h-8V5h-2V3h2V1zM8 7V5h2v2H8zM6 9V7h2v2H6zm-2 2V9h2v2H4zm10 8v2h-2v2h-2v-8H2v-4h2v2h8v6h2zm2-2v2h-2v-2h2zm2-2v2h-2v-2h2zm0 0h2v-2h-2v2z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-secondary1 font-static text-2xl lg:text-3xl text-center font-bold tracking-wider line-clamp-1 overflow-hidden">
                                Proven Problem-Solver</h3>
                        </div>
                        <div>
                            <p
                                class="text-secondary1 font-static text-center mx-8 line-clamp-3 overflow-hidden tracking-tight leading-tight text-lg font-thin">
                                I excel at identifying and addressing complex technical challenges, ensuring smooth and
                                efficient performance of web applications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- choose me end --}}

    {{-- recent project start --}}
    <section class="bg-primary bg-blend-multiply relative min-h-screen w-auto py-12 md:py-16">
        <div class="min-h-screen mx-auto max-w-screen-2xl px-4 text-start">
            <h2 class="mb-8 text-5xl font-normal tracking-tighter text-accent py-4 md:py-8 lg:py-12 xl:py-16 md:text-5xl lg:text-7xl"
                data-aos="fade" data-aos-delay="300" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="false">
                Recents Projects_
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 mx-auto gap-4">
                <div class="relative w-full h-64 lg:h-72 border-2 bg-primary border-accent rounded-lg" data-aos="fade"
                    data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="false">
                    <img src="{{ asset('assets/img/sigma-project-img.png') }}"
                        class="h-full w-full pl-20 overflow-hidden object-cover mx-auto rounded-lg" width="100"
                        height="100" alt="#">
                    <div
                        class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                        <div class="px-8 py-4 w-96 h-full grid grid-cols-1 justify-start items-center">
                            <h3 class="text-white font-regular text-start text-5xl">SIGMA Platform</h3>
                            <p class="text-white font-regular text-start text-xl tracking-tight leading-6 min-h-16">a
                                platform for
                                monitoring internship program at KOMINFO Blitar City</p>
                            <a href="#"
                                class="inline-flex justify-start w-auto text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide"
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
                <div class="relative w-full h-64 lg:h-72 border-2 bg-primary border-accent rounded-lg" data-aos="fade"
                    data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="false">
                    <img src="{{ asset('assets/img/sigma-project-img.png') }}"
                        class="h-full w-full pl-20 overflow-hidden object-cover mx-auto rounded-lg" width="100"
                        height="100" alt="#">
                    <div
                        class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                        <div class="px-8 py-4 w-96 h-full grid grid-cols-1 justify-start items-center">
                            <h3 class="text-white font-regular text-start text-5xl">SIGMA Platform</h3>
                            <p class="text-white font-regular text-start text-xl tracking-tight leading-6 min-h-16">a
                                platform for
                                monitoring internship program at KOMINFO Blitar City</p>
                            <a href="#"
                                class="inline-flex justify-start w-auto text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide"
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
                <div class="relative w-full h-64 lg:h-72 border-2 bg-primary border-accent rounded-lg" data-aos="fade"
                    data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="false">
                    <img src="{{ asset('assets/img/sigma-project-img.png') }}"
                        class="h-full w-full pl-20 overflow-hidden object-cover mx-auto rounded-lg" width="100"
                        height="100" alt="#">
                    <div
                        class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent to-transparent bg-opacity-20">
                        <div class="px-8 py-4 w-96 h-full grid grid-cols-1 justify-start items-center">
                            <h3 class="text-white font-regular text-start text-5xl">SIGMA Platform</h3>
                            <p class="text-white font-regular text-start text-xl tracking-tight leading-6 min-h-16">a
                                platform for
                                monitoring internship program at KOMINFO Blitar City</p>
                            <a href="#"
                                class="inline-flex justify-start w-auto text-xl font-medium text-start text-white bg-transparent hover:underline tracking-wide"
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
