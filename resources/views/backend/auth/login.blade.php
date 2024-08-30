@extends('backend.layouts.app')

{{-- section login form start --}}
@section('content')
    <section class="min-h-96 flex items-center justify-start w-auto relative">
        <div class="bg-primary absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden" data-aos="fade" data-aos-delay="200"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="true">
            <img src="{{ asset('resources/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover">
        </div>
        <div class="max-w-screen-xl min-h-screen mx-auto z-20">
            @if (session()->has('loginError'))
                <div id="toast-danger"
                    class="fixed flex items-center w-full max-w-xs p-4 mb-4 text-accent border border-accent bg-primary top-5 right-5 mt-[4.4rem]"
                    role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-transparent dark:text-red-500">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                        </svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('loginError') }}</div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-primary text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#toast-danger" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            @if (session('success'))
                <div id="toast-success"
                    class="fixed flex items-center w-full max-w-xs p-4 mb-4 text-accent border border-accent bg-primary top-5 right-5 mt-[4.4rem]"
                    role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-transparent dark:text-green-500">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-primary text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            <div class="py-8 px-4 md:px-16 mx-auto max-w-screen-xl lg:py-44 gap-0 lg:gap-16">
                <div class="md:flex flex-col justify-center text-start lg:text-start">
                    <div>
                        <div class="mx-auto w-full lg:max-w-xl p-6 space-y-1 sm:py-12 border bg-primary border-accent">
                            <h1 class="text-xl md:text-3xl lg:text-5xl text-center font-bold text-accent">
                                Restricted Access_
                            </h1>

                            <p
                                class="mb-6 text-xs text-center font-normal leading-1 md:leading-none font-paragraf text-accent md:text-md lg:text-lg">
                                Only authorized personnel may proceed.
                            </p>

                            {{-- login form start --}}
                            <form class="mt-8 space-y-6" action="{{ route('auth.authenticate') }}" method="POST">
                                @csrf
                                {{-- input username start --}}
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-accent">
                                        Email
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="bg-primary border border-accent text-accent text-sm focus:ring-1 focus:ring-accent focus:border-accent block w-full p-2.5"
                                        placeholder="email" required autofocus />
                                </div>
                                {{-- input username end --}}

                                {{-- input password start --}}
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-accent">
                                        Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-primary border border-accent text-accent text-sm focus:ring-1 focus:ring-accent focus:border-accent block w-full p-2.5"
                                        required />
                                </div>
                                {{-- input password end --}}

                                <div class="flex items-center">
                                    {{-- remember me start --}}
                                    <div class="flex items-start h-5">
                                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                            value="1"
                                            class="w-4 h-4 border-accent bg-primary focus:ring-1 focus:ring-accent" />
                                    </div>
                                    <div class="ms-3 text-sm">
                                        <label for="remember" class="font-medium text-accent">Remember Me</label>
                                    </div>
                                    {{-- remember me end --}}

                                    {{-- forgot password start --}}
                                    {{-- <a href="#"
                                                    class="ms-auto text-sm font-medium text-accent hover:text-primary-500 hover:underline">Lupa
                                                    Password?
                                                </a> --}}
                                    {{-- forgot password end --}}
                                </div>

                                {{-- button login start --}}
                                <button type="submit"
                                    class="w-full px-8 py-2 text-base font-medium text-center text-accent bg-none border border-accent rounded-none hover:bg-accent hover:text-primary focus:ring-2 focus:ring-accent sm:w-auto">
                                    Login
                                </button>
                                {{-- button login end --}}

                            </form>
                            {{-- login form end --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

{{-- section login form end --}}
