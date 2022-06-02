<div>
  <div class="mx-auto start-below max-w-7xl sm:px-6 lg:px-8">
      <div  class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
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
                
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
