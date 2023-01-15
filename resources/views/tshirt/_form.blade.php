@csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
            Marca
        </label>
        <span> @error('marca') {{$message}} @enderror </span>
        <input  name="marca" type="text" placeholder="Ugmonk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
            Color
        </label>
        <span> @error('color') {{$message}} @enderror </span>
        <input  name="color" type="text" placeholder="Blanco" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
            Precio
        </label>
        <span> @error('precio') {{$message}} @enderror </span>
        <input name="precio" type="number" step="any" placeholder="35" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
            Foto
        </label>
        <span> @error('foto') {{$message}} @enderror </span>
        <input name="foto" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="flex items-center justify-between">
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Guardar">
    </div>