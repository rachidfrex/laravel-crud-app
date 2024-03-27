<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("layouts.main")
<main class="m-10 rounded-[7px] mx-[200px]  bg-white pb-[1px] md:mx-[450px] ">
        <div class="px-5 py-3 text-lg flex items-center justify-between rounded-se-[7px]  rounded-tl-[7px]    bg-sky-900">
            <h3 class="text-white text-2xl ">show company</h3>
 
                </a></button>
        </div>
        {{-- @foreach($errors->all() as $error)
                    <li>{{$error }}</li>
                    @endforeach --}}

        <div class="relative overflow-x-auto mx-5 text-lg">
            <form action="" method="POST">
                @csrf
                
                <input type="hidden" class="  " id="id" name="id" value="{{$companies->id}}" > 
                <div class="my-5 flex items-center justify-center  ">
                    <label for="Cnom" class=" w-[25%] font-semibold  "> Name</label>
                    <input type="text" class="border border-gray-300  bg-gray-100 rounded-md p-[7px] w-[75%] outline-none  " id="Cnom" name="Cnom" value="{{$companies->Cnom}} " readonly> 
                   
                </div>
               
                
                
                
               
                <div class="my-5 flex items-center justify-center">
                    <label for="email" class=" w-[25%] font-semibold ">email </label>
                    <input type="text" class="border border-gray-300 bg-gray-100 rounded-md p-[7px] w-[75%] outline-none " id="email" name="email" value="{{$companies->email}}"readonly > 
                </div>
                <div class="my-5 flex items-center justify-center ">
                    <label for="Website" class="w-[25%] font-semibold ">Website</label>
                    <input type="text" class="border border-gray-300 bg-gray-100 rounded-md p-[7px] w-[75%] outline-none " id="Website" name="Website" value="{{$companies->website}}" readonly> 
                </div>
                
                
                
                <div class="my-5 flex items-center justify-center ">
                    <label for="adress" class=" w-[25%] font-semibold ">Adress </label>
                    <input type="text" class="border border-gray-300 bg-gray-100 rounded-md p-[7px] w-[75%] outline-none " id="phone" name="phone" value="{{$companies->adress }}"readonly > 
                    
                </div>
                
                
                
                <hr>
                <div class="my-5 flex items-center justify-start ">
                    <div class="w-[25%]"></div>

                     
                     <a href="/companies" class=" ml-3 border-2 border-gray-400 rounded-md px-4 py-1 text-gray-400 ">back </a>

                </div>
                

                    
                </div>
                
            </form>
        </div>
        <!-- ============ -->
        
                   
               


    </main>
</body>
</html>