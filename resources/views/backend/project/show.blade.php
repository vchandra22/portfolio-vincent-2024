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
                <a href="{{ route('backend.create_project') }}"
                    class="text-accent bg-black hover:bg-accent hover:text-black border border-accent focus:ring-4 focus:ring-accent font-medium rounded-sm text-sm  px-3 md:px-7  py-2.5">
                    Add New
                </a>
            </div>
        </div>

        {{-- section content start --}}
        <section class="bg-black py-12 md:py-16 w-full">
            <div class="mx-auto max-w-screen-xl w-full">
                <div class="mb-4">
                    <div class="flex gap-4">
                        <a href="{{ route('backend.edit_project', $detailProject->slug) }}"
                            class="text-accent hover:underline font-medium rounded-sm text-sm mb-1">
                            Edit
                        </a>
                        <form id="delete-project-{{ $detailProject->id }}"
                            action="{{ route('backend.delete_project', ['id' => $detailProject->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <div class="text-start text-sm text-red-500 hover:underline">
                                <button class="delete-button" data-id="{{ $detailProject->id }}" type="submit"
                                    value="Delete">Delete
                                </button>
                        </form>
                    </div>
                </div>

                <h2 class="text-xl md:text-4xl lg:text-5xl text-start font-medium tracking-tight text-accent">
                    {{ $detailProject->title }}
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start w-full">
                    <div class="lg:col-span-2 w-full">
                        <div>
                            <img src="{{ $detailProject->gambar ? asset('storage/img/' . $detailProject->gambar) : asset('resources/img/logo-vincent-portfolio.png') }}"
                                class="object-cover w-full h-fit m-0" width="100" height="100"
                                alt="{{ $detailProject->judul }}">
                        </div>
                        <article class="prose prose-invert prose-lg lg:prose-xl lg:col-span-2 m-4 lg:m-0 pt-8 max-w-none">
                            {!! $detailProject->content !!}
                        </article>
                    </div>
                    <div class="text-start p-4 m-4 lg:m-0 bg-accent rounded-lg lg:sticky lg:top-20 lg:h-fit lg:z-10">
                        <h3
                            class="mb-6 text-3xl font-normal text-start tracking-tighter text-black md:text-5xl lg:text-6xl">
                            Another Projects_</h3>
                        <div class="mx-auto flex flex-col gap-3">
                            @forelse ($projectData as $project)
                                <div class="relative w-full h-56 lg:h-56 bg-transparent">
                                    <img src="{{ $project->gambar ? asset('storage/img/' . $project->gambar) : asset('resources/img/logo-vincent-portfolio.png') }}"
                                        class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                                        height="100" alt="{{ $project->gambar }}">
                                    <div
                                        class="absolute top-0 right-0 h-full bg-gradient-to-r w-full from-accent2 to-transparent bg-opacity-50 border-accent2 border-2 rounded-lg">
                                        <div
                                            class="px-8 py-4 md:w-96 h-full grid grid-cols-1 justify-start items-center w-full">
                                            <h4
                                                class="text-white font-regular text-start text-2xl md:text-4xl lg:text-5xl overflow-hidden line-clamp-2">
                                                {{ $project->title }}
                                            </h4>
                                            <p
                                                class="text-white font-regular text-start text-md md:text-lg lg:text-xl tracking-tight leading-6 min-h-12 lg:min-h-20">
                                                {{ $project->short_description }}
                                            </p>
                                            <a href="{{ route('backend.show_project', $project->slug) }}"
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
                                <p class="text-black font-regular text-start text-xl tracking-tight leading-6 min-h-16">
                                    Empty data
                                </p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- section content end --}}
    @endsection
