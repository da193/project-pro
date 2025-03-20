
@extends('layouts.side-admin')

@section('content')

<style>
    .transition-transform {
        transition: transform 0.3s ease;
    }

    .transition-transform:hover {
        transform: scale(1.05);
    }

    .transition-bg {
        transition: background-color 0.3s ease;
    }

    .transition-bg:hover {
        background-color: #2d6a4f;
    }
</style>



    <div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-400">
        <div class="flex-1 ml-2">

            <!-- Main Content -->

            <header
                class="fixed overflow-hidden w-5/6 ml-2 mr-6 p-6 a text-2xl font-bold text-center text-white bg-gradient-to-r from-blue-500 to-purple-600 rounded-md shadow-md shadow-slate-950">
                <h1 class="text-3xl font-semibold text-center shadow-sm first-line:">Ajouter une Catégorie</h1>
            </header>

            <main class="container p-6 mx-auto ">
                <div class="items-end p-6 mb-8 bg-white rounded-lg shadow-lg mt-24">
                    <form action="{{ route('add_category') }}" method="POST"
                        class="items-center justify-center block inline-block space-y-6">
                        @csrf
                        <div>
                            <label class="block mb-2 text-lg font-medium text-gray-700" for="category">Category
                                Name</label>
                            <input id="category" name="category" type="text" required
                                class="w-auto px-4 py-2 transition-transform border border-gray-300 rounded-lg bg-blue-50 focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <input type="submit" value="Ajouter"
                            class="w-auto px-4 py-2 text-white bg-gradient-to-t from-teal-600 to-teal-400 rounded-lg cursor-pointer hover:bg-gradient-to-b from-teal-700 to-teal-500 transition-bg">
                    </form>
                </div>

                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-lg">
                    <div class="w-full ">
                        <table class="table-auto w-full">
                            <thead class="bg-indigo-600 text-white pt-2 pb-2">
                                <tr>
                                    <th class="px-4 py-2 text-left">Nom de la catégorie</th>
                                    <th class="px-6 py-2 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livre as $livre)
                                    <tr class="border-b border-gray-200 hover:bg-gray-50 mt-2">
                                        <td class="px-4 py-2">{{ $livre->name }}</td>
                                        <td class="py-4 text-center">
                                            <a class="w-full px-4 py-2 text-sm font-medium text-white bg-red-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-red-500"
                                                href="{{ route('cat_delete', $livre->id) }}">Delete</a>
                                            <a class="w-full px-4 py-2 text-sm font-medium text-white bg-gradient-to-t from-teal-600 to-teal-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-teal-500"
                                                href="{{ route('edit_cat', $livre->id) }}">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            </main>
            {{-- style of the table to be more responsiive --}}
            <style>
                @media (max-width: 768px) {

                    th,
                    td {
                        display: block;
                        width: 100%;
                    }

                    thead {
                        display: none;
                    }

                    tr {
                        margin-bottom: 1rem;
                        border: 1px solid #e2e8f0;
                    }

                    td {
                        text-align: left;
                        padding-left: 10px;
                        padding-right: 10px;
                        position: relative;
                    }

                    td::before {
                        content: attr(data-label);
                        position: absolute;
                        left: 10px;
                        top: 0;
                        font-weight: bold;
                        color: #4a5568;
                    }
                }
            </style>

@endsection


