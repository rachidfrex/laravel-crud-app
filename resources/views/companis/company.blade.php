<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-red-50">
    @include("layouts.main")
    <!-- this is the all contanct -->
    <main class="m-10 rounded-[7px] mx-44 bg-white pb-[1px]">
        <div class="px-5 py-3 text-lg flex items-center justify-between rounded-se-[7px]  rounded-tl-[7px]    bg-sky-900">
            <h3 class="text-white text-2xl ">All Contact</h3>
            <button
                class="ml-4 border-[2px] rounded-[7px] border-green-700 text-lg bg-green-700 text-white px-3 py-1">
            <a href="/addnewComp">Add New</a>
            </button>
        </div>
        <!-- ........................................ -->
        <div class="flex my-4 justify-end items-center mx-5  ">

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
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Adress
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $companies )
                    <tr class=" border-b bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                        {{$companies->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$companies->Cnom}}
                        </td>
                        <td class="px-6 py-4">
                            {{$companies->adress}}
                        </td>
                        <td class="px-6 py-4">
                            {{$companies->email}}
                        </td>
                        <td class=" py-4 flex  text-center ">
                            <button class="border-[2px] rounded-[50%] border-blue-500  text-blue-500  p-[7px]">
                                <a  href="/viewcompanies/{{$companies->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                      </svg>
                                      
                                      
                                </a>
                            </button>
                            <button class="border-[2px] rounded-[50%] border-gray-600  text-gray-600 p-[7px]">
                                <a  href="/update/">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                      </svg>                                       
                                </a>
                            </button>
                            <button class="border-[2px] rounded-[50%] border-red-700 text-lg text-red-700 p-[7px]">
                                <a onclick="return confirm('do you realy want to delete it')" href="/deleteCom/{{$companies->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                      </svg>
                                      
                                </a>
                            </button>
                    </tr>
                    @endforeach
                    
                   
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