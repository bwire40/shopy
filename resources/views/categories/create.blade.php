<x-app-layout>
    <main class="container mx-auto h-screen flex-grow p-6">
        <a href="{{ secure_url(route('categories.index')) }}"
            class="p-2 bg-slate-900 border-0 text-slate-50 text-sm shadow-lg transition-all duration-300 hover:bg-slate-300 hover:text-slate-900">
            View Categories</a>


        @include('partials.success_message')
        <h1 class="text-3xl text-black pb-6 flex justify-start items-center mt-10"><x-icons.plus-circle class="mr-3" />
            Create
            Category</h1>



        <form method="POST" action="{{ route('categories.store') }}" class="p-4 border-2" enctype="multipart/form-data">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        {{-- name --}}
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-md font-medium leading-6 text-gray-900">Category
                                name</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                                    ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                    sm:text-md sm:leading-6">
                            </div>
                            @error('name')
                                <p class="text-red-500 font-semibold py-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>



            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="reset" class="text-md font-semibold leading-6 text-gray-900">Reset Form</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-md font-semibold text-white shadow-sm
                    hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                    focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>



    </main>

</x-app-layout>
