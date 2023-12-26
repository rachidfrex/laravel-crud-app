<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-red-50">
    <nav class=" flex justify-between items-center px-10  shadow-md py-4 bg-white">
        <div class="flex ">
            <div>
                <h2 class="text-2xl text-orange-500 uppercase font-semibold">Contact app</h2>
            </div>
            <div>
                <ul class="flex px-5 justify-evenly ">
                    <li class="text-lg">Companies</li>
                    <li class="text-lg pl-5 ">Contact</li>
                </ul>
            </div>
        </div>
        <!-- ------ -->
        <div class="flex text-lg px-5 items-center">
            <button class="ml-5 border-[2px] rounded-[7px] border-gray-500 text-gray-500 px-3 py-1 ">login</button>
            <button class="ml-4 border-[2px] rounded-[7px] border-cyan-400 text-cyan-500 px-3 py-1">register</button>
            <p class="pl-4">profil</p>
        </div>

    </nav>
    <!-- this is the all contanct -->
    <main class="m-10 rounded-[7px] mx-44 bg-white pb-[1px]">
        <div class="px-5 py-3 text-lg flex items-center justify-between rounded-se-[7px]  rounded-tl-[7px]    bg-sky-900">
            <h3 class="text-white text-2xl ">All Contact</h3>
            <button
                class="ml-4 border-[2px] rounded-[7px] border-green-700 text-lg bg-green-700 text-white px-3 py-1">Add
                New</button>
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
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium  text-blackwhite space-nowrap ">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                    <tr class=" border-b bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
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