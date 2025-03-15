<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📕 DAYLIBRIS</title>
    <link rel="stylesheet" href="https://heroicons.com">
    <link rel="stydxlesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

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

<body class="font-sans ">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-400">

        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark:text-gray-200 dark:bg-gray-800"
            x-data="{ open: false }">

            <div
                class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 shadow-md bg-gray-50 dark:bg-gray-900 shadow-black mb-2">

                <a href="{{ route('profile.edit') }}"
                    class="flex gap-3  text-lg font-semibold tracking-widest text-gray-900 uppercase transition-colors duration-300 rounded-lg dark:text-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="flex justify-between size-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg> Admin</a>
                <button
                    class="p-2 transition-colors duration-300 rounded-lg md:hidden hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:shadow-outline"
                    @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>
            <nav :class="{ 'block': open, 'hidden': !open }"
                class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                <a class=" flex gap-3  px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-gray-200 rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline"
                    href="#"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="flex justify-between gap-4 size-6  text-center">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Accueil</a>
                <a
                    class=" flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"href="{{ route('category_page') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                    Categories</a>

                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>

                            Livres</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('show_book') }}">Options</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('add_book') }}">Ajouter un livre</a>

                        </div>
                    </div>
                </div>


            </nav>


        </div>


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


</body>

</html>
