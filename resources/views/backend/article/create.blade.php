@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.sidebar')
    <section class="p-5 min-h-screen md:ml-64 bg-black">
        <div class="mb-8">
            <h1 class="text-2xl md:text-4xl lg:text-6xl text-accent tracking-tighter">{{ __(@$pageTitle) }}</h1>
        </div>

        <form action="{{ route('backend.store_article') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="title" class="block mb-2 text-lg font-medium text-accent">Title<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Input your title project" value="{{ old('title') }}" required autofocus />
                    @error('title')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="content" class="block mb-2 text-lg font-medium text-accent">Konten
                        <span class="text-red-500">*</span></label>
                    <textarea name="content" id="content" rows="8">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="gambar" class="block mb-2 text-lg font-medium text-accent">
                        Gambar <span class="text-red-500">*</span>
                    </label>
                    <div class="upload-img-box h-auto w-full md:max-w-sm">
                        <img class="h-auto w-full overflow-y-hidden border-secondary1 border-2" src="">
                        <input type="file" name="gambar" id="gambar" accept="image/*"
                            class="mt-2 w-full text-sm text-accent border border-secondary1 cursor-pointer bg-black hover:bg-secondary3 focus:ring-accent focus:border-accent"
                            value="{{ old('gambar') }}" onchange="previewFile(this)">
                    </div>
                    @error('gambar')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="pt-8">
                    <label for="meta_title" class="block mb-2 text-lg font-medium text-accent">Meta
                        Title</label>
                    <input type="text" name="meta_title" id="meta_title"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        value="{{ old('meta_title') }}" />
                    @error('meta_title')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="meta_description" class="block mb-2 text-lg font-medium text-accent">Meta
                        Description</label>
                    <textarea name="meta_description" id="meta_description" rows="4"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5">{{ old('meta_description') }}</textarea>
                    @error('meta_description')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                    <ul class="list-disc ms-5 text-gray-500">
                        <li>
                            <p class="mt-1 text-xs text-gray-500 dark:text-secondary">
                                Google hanya menampilkan panjang karakter 155 - 160 karaketer.
                            </p>
                        </li>
                    </ul>
                </div>

                <div>
                    <label for="meta_keywords" class="block mb-2 text-lg font-medium text-accent">Meta
                        Keyword</label>
                    <input type="text" name="meta_keywords" id="meta_keywords"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        value="{{ old('meta_keywords') }}" />
                    @error('meta_keywords')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                    <ul class="list-disc ms-5 text-gray-500">
                        <li>
                            <p class="mt-1 text-xs text-gray-500 dark:text-secondary">
                                Pisahkan dengan tanda koma (,) per-keyword
                            </p>
                        </li>
                        <li>
                            <p class="mt-1 text-xs text-gray-500 dark:text-secondary">
                                Contoh: lowongan magang, magang kominfo kota blitar, informasi
                                magang, pengembangan keterampilan,
                            </p>
                        </li>
                    </ul>
                </div>

                <div>
                    <label for="og_image" class="block mb-2 text-lg font-medium text-accent">
                        OG Image
                    </label>
                    <div class="upload-img-box h-auto w-full md:max-w-sm">
                        <img class="h-auto w-full overflow-y-hidden border-abu-500 rounded-sm border-2" src="">
                        <input type="file" name="og_image" id="og_image" accept="image/*"
                            class="mt-2 w-full text-sm text-accent border border-secondary1 cursor-pointer bg-black hover:bg-secondary3 focus:ring-accent focus:border-accent"
                            value="{{ old('og_image') }}" onchange="previewFile(this)">
                    </div>
                    @error('og_image')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col items-end">
                    <button type="submit"
                        class="w-full px-20 py-3 text-lg font-normal text-center text-black border border-accent rounded-sm bg-accent opacity-95 hover:opacity-100 focus:ring-2 focus:ring-accent sm:w-auto">Save</button>
                </div>

            </div>
        </form>
    </section>

    <script>
        ClassicEditor
            .create(document.querySelector('#content')), {}
            .catch(error => {
                console.error(error);
            });
    </script>

    @push('script')
        <script src="{{ asset('resources/js/custom/image-preview.js') }}"></script>
    @endpush
@endsection
