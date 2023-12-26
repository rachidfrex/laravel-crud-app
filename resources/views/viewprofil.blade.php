<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("layouts.main")
    @php
        
        
    @endphp
    @if(session('delete'))
    <span class="flex justify-center border p-1 border-red-500 bg-red-400 rounded-md ">{{session('delete')}}</span>

    @endif
    
<main class="m-10 rounded-[7px] mx-44 bg-white pb-[1px]">
        <div class="px-5 py-3 text-lg flex items-center justify-between rounded-se-[7px]  rounded-tl-[7px]    bg-sky-900">
            <h3 class="text-white text-2xl ">All Contact</h3>
            <button
                class="ml-4 border-[2px]   items-center rounded-[7px] border-green-700 text-lg bg-green-700 text-white px-3 py-1"><a href="/addnew" class="flex items-center ">
                    
                        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                          </svg>
           
                        Add New
                    
                       
                
                </a></button>
        </div>
        <!-- ........................................ -->
        <div class="flex my-4 justify-end items-center mx-5  ">
            <div class="ml-5 ">
                <select class="px-5 py-2 border border-gray-500 rounded-[5px] w-[300px]" id="selectOption"
                    name="selectOption">
                    <option value="option1">All Companies</option>
                    <option value="option2">Company 1</option>
                    <option value="option3">Company 2</option>
                    <option value="option3">Company 3</option>

                </select>
            </div>
            <div class="ml-5 ">
                <input class=" px-5 py-2 border border-gray-500 rounded-[5px]" placeholder="search... " type="text">
            </div>
        </div>
        <!--  -->

        <div class="relative overflow-x-auto mx-20">
            <table class="w-full text-sm text-left rtl:text-right text-black ">
                <thead class="text-xs text-black uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Company
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profils as $profil )
                    <tr class=" border-b bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                        {{$profil->id}}
                        </th>
                        
                        
                        <td class="px-6 py-4">
                        {{$profil->Fnom}}
                        
                            
                        </td>
                       
                        <td class="px-6 py-4">
                            {{$profil->phone}}

                        </td>
                        <td class="px-6 py-4">
                            {{$profil->email}}

                        </td>
                        <td class="px-6 py-4">
                            {{$profil->selectOption}}
                        </td>
                            
                        
                        <td class="flex items-center pt-3  ">
                            <a href="/view/" class=" text-blue-300 border border-blue-300 rounded-[50%] p-1">

                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                  </svg>
                                  
                            </a>
                            <a href="/update/" class="  text-gray-400 border border-gray-400 rounded-[50%] p-1 ml-1 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                  </svg>
                            </a>
                            <a href="/delete/{{$profil->id}}" class=" text-red-400 border border-red-400 rounded-[50%] p-1 ml-1  ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ">
                                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                  </svg>
                                  
                            </a>
                        </td>

                    </tr>
                    @endforeach

                    </tr>
 
                </tbody>
            </table>
        </div>
        <!-- ============ -->
        <div class="mb-10">
           
                <ul class="flex  -space-x-px text-sm justify-center my-5 ">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                    </li>
                </ul>
            
        </div>


    </main>
</body>
</html>