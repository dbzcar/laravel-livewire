<div>
  <div class="container mx-auto px-2">
    <div class="mx-auto start-below max-w-7xl sm:px-6 lg:px-8">
        <div  class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <div class="flex bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <input  wire:model="search"
                            type="text" class="mt-1
                                  block
                                  w-full
                                  rounded-md
                                  border-gray-300
                                  shadow-sm
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                  placeholder="Buscar...">

                    <select wire:model="perPage" class="rounded text-gray-500 text-sm block ml-6
                      mt-1
                      border-gray-300
                      shadow-sm
                      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="5">5 por página</option>
                        <option value="10">10 por página</option>
                        <option value="15">15 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                    
                    @if ($search !== '')
                      <button wire:click="clear" class=" ml-4 mt-1 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">X</button>      
                    @endif                                
                  </div>
                  @if($users->count())
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead>
                        <tr>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                            Name
                          </th>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">Acciones</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
      
                          @foreach ($users as $user)
                          <tr>
                              <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="flex items-center">
                                  <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                      {{ $user->name }}
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">
                                      {{ $user->email }}
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                              </td>
                          </tr>
                          @endforeach
      
                        <!-- More rows... -->
                      </tbody>
                    </table>
                    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                      {{$users->links()}}
                    </div>
                  @else
                  <div class="bg-white px-4 py-3 border-t border-gray-500 sm:px-6">
                    No hay resultados para la búsqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} por página
                  </div>
                  @endif
                  
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    
    <div x-data="{open: false}">
        <button x-on:click="open = !open" class="mt-1 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Presionar</button>
        <button x-on:click="saludar()" class="mt-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Saludar</button>
        <nav x-show="open">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </nav>
    </div>
    <br>
  </div>
</div>

<script>
    function saludar(){
        alert('Holaaaaaaaaaaaaaaaaaaaaaaaa');
    }
</script>

