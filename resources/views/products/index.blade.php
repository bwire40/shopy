<x-app-layout>
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Products</h1>



        <a href="{{ secure_url(route('create')) }}"
            class="p-3 bg-slate-900 border-0 text-slate-50 text-lg shadow-lg transition-all duration-300 hover:bg-slate-300 hover:text-slate-900">+
            Add
            new Product</a>


        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Products In stock
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Product Name
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Description</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Image</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">Lian</td>
                            <td class="w-1/3 text-left py-3 px-4">Smith</td>
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                    href="tel:622322662">622322662</a></td>
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                    href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            <td class="text-left py-3 px-4 flex justify-around items-center">
                                <a href="#" class="text-green-500"><x-icons.pencil /></a>
                                <a href="#" class="text-red-500"><x-icons.trash /></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </main>

</x-app-layout>
