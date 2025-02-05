@extends('layouts.app')

@section('content')
    <h1 class=" text-center ">
        Here are our Dinosaurs
    </h1>

    <div class="flex mt-10">
        <div class="container flex justify-center mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="mt-5 mb-5">
                        <a href="{{ route('dinosaurs.create') }}"
                            class="px-4 py-1 text-sm text-black bg-emerald-500 rounded-full hover:bg-emerald-600">Add new Dinosaur</a>
                    </div>
                    <div class="border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Type
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Environment
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Diet
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Created_at
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Show
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Edit
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                @foreach ($dinosaurs as $dinosaur)
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dinosaur->id }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $dinosaur->name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">{{ $dinosaur->type->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dinosaur->environment->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dinosaur->diet->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dinosaur->created_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('dinosaurs.show', $dinosaur->id) }}"
                                                class="px-4 py-1 text-sm text-black bg-indigo-200 rounded-full hover:bg-indigo-300">Show</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('dinosaurs.edit', $dinosaur->id) }}"
                                                class="px-4 py-1 text-sm text-black bg-amber-200 rounded-full hover:bg-amber-300">Edit</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{ route('dinosaurs.destroy', $dinosaur->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button href="#"
                                                    class="px-4 py-1 text-sm text-black bg-red-200 rounded-full hover:bg-red-300">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
