<x-app-layout>
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Products</h1>

        @include('partials.success_message')

        <a href="{{ secure_url(route('products.create')) }}"
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
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Discount</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Image</th>
                            <th class="w-1/3 text-right py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($products as $product)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{ $product->name }}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{ $product->description }}</td>
                                <td class="text-left py-3 px-4">{{ $product->price }}</td>
                                <td class="text-left py-3 px-4">{{ $product->discount }}</td>
                                <td class="text-left py-3 px-4">{{ $product->image }}</td>
                                <td class="py-3 px-4 flex justify-end items-center">
                                    <a href="#" class="text-green-500 mx-2"><x-icons.pencil /></a>
                                    <a href="#" class="text-red-500 mx-2"><x-icons.trash /></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-full mt-4">
            {{ $products->links() }}
        </div>
    </main>

</x-app-layout>
