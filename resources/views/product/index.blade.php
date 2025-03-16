<x-master title="Products">
    <p class="text-3xl">Products</p>
    <table class="w-full">
        <thead class="border-2 border-gray-200 bg-gray-100">
            <tr>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">#Id</th>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">Name</th>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">Desription</th>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">Image</th>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">Quantity</th>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">Price</th>
                <th class="p-3 text-sm font-semibold text-gray-800 text-left">Action</th>
            </tr>
        </thead>
        <tbody class="border border-gray-200">
               @forelse ($products as $product)
                 <tr class="border border-gray-400">
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->id}}</td>     
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->name}}</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->description}}</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->image}}</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->quantity}}</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->price}}</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">delete</td>              
                 </tr>
               @empty
                   <tr class="bg-gray-50">
                     <td class="p-3 text-sm font-semibold text-gray-800 text-center" colspan="7">
                        No Products
                    </td>
                   </tr>
               @endforelse
        </tbody>
    </table>
</x-master>