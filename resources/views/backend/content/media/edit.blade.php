@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.sidebar')
    <section class="p-5 min-h-screen md:ml-64 bg-black">
        <div class="mb-8">
            <h1 class="text-2xl md:text-4xl lg:text-6xl text-accent tracking-tighter">{{ __(@$pageTitle) }}</h1>
        </div>

        <form action="{{ route('backend.update_media_social', $detailMedia->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="title" class="block mb-2 text-lg font-medium text-accent">Title<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Input your title" value="{{ old('title', $detailMedia->title) }}" required autofocus />
                    @error('title')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="link" class="block mb-2 text-lg font-medium text-accent">Link URL<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="link" id="link"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Describe your project in short" value="{{ old('link', $detailMedia->link) }}" required
                        autofocus />
                    @error('link')
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
                        @if ($detailMedia->gambar != null && $detailMedia->gambar != '')
                            <img class="h-56 w-full overflow-y-hidden border-abu-500 rounded-sm border-2"
                                src="{{ $detailMedia->gambar ? asset('storage/icon/' . $detailMedia->gambar) : asset('assets/img/logo-vincent-portfolio.png') }}">
                        @else
                            <img
                                src="{{ $detailMedia->gambar ? asset('storage/icon/' . $detailMedia->gambar) : asset('assets/img/logo-vincent-portfolio.png') }}">
                        @endif
                        <input type="file" name="gambar" id="gambar" accept="image/*"
                            class="mt-2 w-full text-sm text-accent border border-secondary1 cursor-pointer bg-black hover:bg-secondary3 focus:ring-accent focus:border-accent"
                            value="{{ old('gambar', $detailMedia->gambar) }}" onchange="previewFile(this)">
                    </div>
                    @error('gambar')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col items-end">
                    <button type="submit"
                        class="w-full px-20 py-3 text-lg font-normal text-center text-black border border-accent rounded-sm bg-accent opacity-95 hover:opacity-100 focus:ring-2 focus:ring-accent sm:w-auto">Update</button>
                </div>

            </div>
        </form>
    </section>

    @push('script')
        <script src="{{ asset('assets/js/custom/image-preview.js') }}"></script>
    @endpush
@endsection
