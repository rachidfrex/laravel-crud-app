<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-red-50">
<!-- <a href="/hello">ClickMe</a>    -->
    <nav class=" flex justify-between items-center px-10  shadow-md py-4 bg-white">
        <div class="flex ">
            <div>
                <h2 class="text-2xl text-orange-500 uppercase font-semibold"><a href="/">Contact app</a></h2>
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
   
</body>

</html>