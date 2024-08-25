@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.sidebar')
    <section class="p-5 min-h-screen md:ml-64 bg-black">
        <div class="mb-8">
            <h1 class="text-2xl md:text-4xl lg:text-6xl text-accent tracking-tighter">{{ __(@$pageTitle) }}</h1>
        </div>

        <form action="{{ route('backend.update_user', $detailUser->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="full_name" class="block mb-2 text-lg font-medium text-accent">Full Name<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="full_name" id="full_name"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Your full name" value="{{ old('full_name', $detailUser->full_name) }}" required
                        autofocus />
                    @error('full_name')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="short_about" class="block mb-2 text-lg font-medium text-accent">Short About You<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="short_about" id="short_about"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Describe about you" value="{{ old('short_about', $detailUser->short_about) }}" required
                        autofocus />
                    @error('short_about')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="role" class="block mb-2 text-lg font-medium text-accent">Role<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="role" id="role"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Web Developer" value="{{ old('role', $detailUser->role) }}" required autofocus />
                    @error('role')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="about" class="block mb-2 text-lg font-medium text-accent">About
                        <span class="text-red-500">*</span></label>
                    <textarea name="about" id="about" rows="8">{{ old('about', $detailUser->about) }}</textarea>
                    @error('about')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="cv" class="block mb-2 text-lg font-medium text-accent">
                        File CV <span class="text-red-500">*</span></label>
                    <input
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        id="cv" type="file" name="cv" value="{{ old('cv', $detailUser->cv) }}">
                    @error('cv')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500 dark:text-secondary">Upload file with format
                        .pdf (Max. 2MB)
                    </p>
                </div>

                <div>
                    <label for="email" class="block mb-2 text-lg font-medium text-accent">Email<span
                            class="text-red-500">*</span></label>
                    <input type="text" name="email" id="email"
                        class="bg-black border border-accent text-accent text-sm focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="Input your email" value="{{ old('email', $detailUser->email) }}" required autofocus />
                    @error('email')
                        <div class="mt-1 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="profile_pict" class="block mb-2 text-lg font-medium text-accent">
                        Profile Image <span class="text-red-500">*</span>
                    </label>
                    <div class="upload-img-box h-auto w-full md:max-w-sm">
                        @if ($detailUser->profile_pict != null && $detailUser->profile_pict != '')
                            <img class="h-56 w-full overflow-y-hidden border-abu-500 rounded-sm border-2"
                                src="{{ $detailUser->profile_pict ? asset('storage/icon/' . $detailUser->profile_pict) : asset('resources/img/logo-vincent-portfolio.png') }}">
                        @else
                            <img
                                src="{{ $detailUser->profile_pict ? asset('storage/icon/' . $detailUser->profile_pict) : asset('resources/img/logo-vincent-portfolio.png') }}">
                        @endif
                        <input type="file" name="profile_pict" id="profile_pict" accept="image/*"
                            class="mt-2 w-full text-sm text-accent border border-secondary1 cursor-pointer bg-black hover:bg-secondary3 focus:ring-accent focus:border-accent"
                            value="{{ old('profile_pict', $detailUser->profile_pict) }}" onchange="previewFile(this)">
                    </div>
                    @error('profile_pict')
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

    <script>
        ClassicEditor
            .create(document.querySelector('#about')), {}
            .catch(error => {
                console.error(error);
            });
    </script>

    @push('script')
        <script src="{{ asset('resources/js/custom/image-preview.js') }}"></script>
    @endpush
@endsection
