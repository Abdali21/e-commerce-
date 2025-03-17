<x-master title="Products">
     <div class="flex justify-between items-center mt-2">
        <h2>Products list</h2>
            <a href="{{route("products.create")}}">
                <button class="bg-blue-500 hover:bg-blue-600 p-2 w-full text-white">Add a new product</button>
            </a>
     </div>
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
                    <td class="p-3 text-sm font-semibold text-gray-800">
                       <img src="storage/{{$product->image}}" class="w-12 h-12" alt="image">    
                    </td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->quantity}}</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800">{{$product->price}} MAD</td>   
                    <td class="p-3 text-sm font-semibold text-gray-800 flex items-center justify-around">
                        <form method="get" action="{{route("products.edit", $product->id)}}">
                            @csrf
                            <button class="bg-yellow-500 hover:bg-yellow-600 p-2 w-full text-white">
                                Edit
                            </button>
                        </form>
                        <form method="post" action="{{route("products.destroy", $product->id)}}">
                            @csrf
                            @method("DELETE")
                            <button class="bg-red-500 hover:bg-red-600 p-2 w-full text-white">
                                Delete
                            </button>
                        </form>
                    </td>              
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
        {{$products->links()}}
</x-master>