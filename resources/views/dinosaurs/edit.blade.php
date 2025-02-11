@extends('layouts.app')

@section('content')
    <div class="items-center justify-center flex">
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-center tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Dinosaurs</h2>
                    <h1 class="text-center title-font text-lg font-medium text-gray-900 mb-3">Edit {{ $dinosaur->name }}
                        properties.</h1>
                    <p class="text-center leading-relaxed mb-3 text-red-600">Inputs marked with * must be filled!</p>
                    <div class="text-center items-center">

                        <form action="{{ route('dinosaurs.update', $dinosaur) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="w-full mb-5">
                                <input type="text" x-model="input2"
                                    class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-400 text-gray-800 focus:outline-none"
                                    placeholder="Name" name="name" value="{{ old('name', $dinosaur->name) }}">
                            </div>
                            <div class="w-full mb-5">
                                <input type="number" x-model="input2"
                                    class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-400 text-gray-800 focus:outline-none"
                                    placeholder="Weight" name="weight" step="0.01"
                                    value="{{ old('name', $dinosaur->weight) }}">
                            </div>
                            <div class="w-full mb-5">
                                <input type="number" x-model="input2"
                                    class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-400 text-gray-800 focus:outline-none"
                                    placeholder="length" name="length" step="0.01"
                                    value="{{ old('name', $dinosaur->length) }}">
                            </div>
                            <div class="w-full mb-5">
                                <input type="number" x-model="input2"
                                    class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-400 text-gray-800 focus:outline-none"
                                    placeholder="height" name="height" step="0.01"
                                    value="{{ old('name', $dinosaur->height) }}">
                            </div>
                            <div class="w-full mb-5">
                                <input type="text" x-model="input2"
                                    class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-400 text-gray-800 focus:outline-none"
                                    placeholder="Color" name="color" value="{{ old('name', $dinosaur->color) }}">
                            </div>
                            {{-- SELECT BOXOK --}}
                            <div class="w-full mb-5">
                                <div class="w-full min-w-[200px]">
                                    <div class="relative">
                                        <select
                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer"
                                            name="diet_id">
                                            <option value="" disabled>Please choose a diet...</option>
                                            @foreach ($diets as $diet)
                                                <option @if ($dinosaur->diet_id == $diet->id) selected @endif
                                                    value="{{ $diet->id }}">{{ $diet->name }}</option>
                                            @endforeach
                                        </select>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor"
                                            class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mb-5">
                                <div class="w-full min-w-[200px]">
                                    <div class="relative">
                                        <select
                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer"
                                            name="environment_id">
                                            <option value="" disabled>Please choose a environment...</option>
                                            @foreach ($environments as $environment)
                                                <option @if ($dinosaur->environment_id == $environment->id) selected @endif
                                                    value="{{ $environment->id }}">{{ $environment->name }}</option>
                                            @endforeach
                                        </select>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor"
                                            class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mb-5">
                                <div class="w-full min-w-[200px]">
                                    <div class="relative">
                                        <select
                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer"
                                            name="type_id">
                                            <option value="" disabled>Please choose a type...</option>
                                            @foreach ($types as $type)
                                                <option @if($dinosaur->type_id == $type->id) selected @endif value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor"
                                            class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <button
                                class="px-4 py-1 text-sm text-black bg-amber-200 rounded-full hover:bg-amber-300">Frissítés</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
