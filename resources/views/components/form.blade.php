    <form method="post" action="{{route("products.store")}}" enctype="multipart/form-data" class="w-fullflex flex-col space-y-2 justify-center bg-gray-50 p-4">
        @csrf
        <div class="flex flex-col space-y-1">
            <label>name</label>
            <input name="name" type="text" placeholder="the product name" class="w-full border border-gray-500 p-2" value="{{old("name")}}"/>
        </div>

        <div class="flex flex-col space-y-1">
            <label>decription</label>
            <textarea name="description"  rows="1" placeholder="description"
                class="border border-gray-500 p-2">
               {{old("description")}}
            </textarea>
        </div>

        <div class="flex flex-col space-y-1">
            <label>image</label>
            <input type="file" name="image" placeholder="image" class="border border-gray-500 p-2" value="{{old("image")}}">
        </div>

        <div class="flex flex-col space-y-1">
            <label>quantity</label>
            <input name="quantity" type="text" placeholder="quantity" class="border border-gray-500 p-2" value="{{old("quantity")}}" />
        </div>

        <div class="flex flex-col space-y-1">
            <label>price</label>
            <input name="price" type="text" placeholder="price" class="border border-gray-500 p-2" value="{{old("price")}}">
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 p-2 w-full text-white">
                add
            </button>
        </div>
    </form>
