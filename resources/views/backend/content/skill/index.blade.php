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
        <div class="w-full mx-auto">
            <a href="{{ route('backend.create_skill') }}"
                class="text-accent bg-black hover:bg-accent hover:text-black border border-accent focus:ring-4 focus:ring-accent font-medium rounded-sm text-sm px-3 md:px-7 py-2.5">
                Add New
            </a>
            <div class="relative overflow-x-auto mt-12">
                <table class="w-full text-sm text-left border border-secondary1 rtl:text-right text-accent z-10">
                    <thead class="text-xs uppercase bg-black">
                        <tr>
                            <th scope="col" class="px-4 py-6 text-accent">
                                No.
                            </th>
                            <th scope="col" class="px-4 py-6 text-accent">
                                Gambar
                            </th>
                            <th scope="col" class="px-4 py-6 text-accent">
                                Title
                            </th>
                            <th scope="col" class="px-4 py-6 text-accent">
                                Description
                            </th>
                            <th scope="col" class="px-8 text-center py-6 text-accent">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($skillData as $skill)
                            <tr class="odd:bg-secondary1 even:bg-secondary3 border-b border-secondary1">
                                <td class="px-4 py-4">
                                    <p class="text-accent">
                                        {{ $loop->iteration }}
                                    </p>
                                </td>
                                <td class="px-4 py-4 mx-auto">
                                    <div class="border border-secondary1 rounded-md p-2 bg-transparent">
                                        <svg fill="none" class="text-secondary1 w-12 h-12 lg:w-20 lg:h-20 mx-auto"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="{{ $skill->gambar }}" fill="currentColor" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <h5 class="text-accent">
                                        {{ $skill->title }}
                                    </h5>
                                </td>
                                <td class="px-4 py-4">
                                    <h5 class="text-accent">
                                        {{ $skill->description }}
                                    </h5>
                                </td>
                                <td class="px-8">
                                    <div class="flex items-center justify-center h-full gap-4">
                                        <a href="{{ route('backend.edit_skill', $skill->uuid) }}"
                                            class="py-2 text-center text-md text-blue-500 hover:underline">
                                            Edit
                                        </a>
                                        <form id="delete-skill-{{ $skill->id }}"
                                            action="{{ route('backend.delete_skill', ['id' => $skill->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="py-2 text-center text-md text-red-500 hover:underline">
                                                <button class="delete-button" data-id="{{ $skill->id }}" type="submit"
                                                    value="Delete">Delete
                                                </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                Empty Data
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
