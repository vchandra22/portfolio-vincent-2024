@extends('backend.layouts.app')

{{-- section login form start --}}
@section('content')
    <section class="min-h-96 flex items-center justify-start w-auto relative">
        <div class="bg-primary absolute bottom-0 top-0 left-0 right-0 z-0 overflow-hidden" data-aos="fade" data-aos-delay="200"
            data-aos-duration="1200" data-aos-easing="ease-in-out" data-aos-once="true">
            <img src="{{ asset('assets/img/bg-portofolio-vincent.png') }}" alt="background jumbotron portofolio vincent"
                class="h-full w-full overflow-hidden object-cover">
        </div>
        <div class="max-w-screen-2xl min-h-screen mx-auto z-20">
            <div class="py-8 px-4 md:px-16 mx-auto max-w-screen-2xl lg:py-44 gap-0 lg:gap-16">
                <div class="md:flex flex-col justify-center text-start lg:text-start">
                    <div>
                        <div class="mx-auto w-full lg:max-w-xl p-6 space-y-1 sm:py-12 border bg-primary border-accent">
                            <h1 class="text-5xl text-center font-bold text-accent">
                                Restricted Access_
                            </h1>

                            <p
                                class="mb-6 text-md text-center font-normal leading-5 md:leading-none font-paragraf text-accent lg:text-lg">
                                Only authorized personnel may proceed.
                            </p>

                            {{-- login form start --}}
                            <form class="mt-8 space-y-6" action="#" method="POST">
                                @csrf
                                {{-- input username start --}}
                                <div>
                                    <label for="username" class="block mb-2 text-sm font-medium text-accent">
                                        Username
                                    </label>
                                    <input type="username" name="username" id="username"
                                        class="bg-primary border border-accent text-accent text-sm focus:ring-1 focus:ring-accent focus:border-accent block w-full p-2.5"
                                        placeholder="username" value="#" required autofocus />
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
