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
            <h3 class="text-white text-2xl ">show Contact</h3>
 
                </a></button>
        </div>
        <div class="relative overflow-x-auto mx-5 text-lg">
            <form action="/update/traitement" method="POST">
                @csrf
                
                <input type="hidden" class="  " id="id" name="id" value="{{$profil->id}}" > 
                <div class="my-5 flex items-center justify-center  ">
                    <label for="Fnom" class=" w-[25%] font-semibold  "> First name</label>
                    <input type="text" class="border border-gray-300   rounded-md p-[7px] w-[75%] outline-none  " id="Fnom" name="Fnom" value="{{$profil->Fnom}}  "  > 
                   
                </div>
                @error('Fnom')
                <p class="text-red-500 text-sm  w-[78%]   flex justify-center mt-[-20px]  ">{{ $message }}</p>
                @enderror
               
                
                
                <div class="my-5 flex items-center justify-center">
                    <label for="Lnom" class="w-[25%] font-semibold  ">Last name </label>
                    <input type="text" class="border border-gray-300  rounded-md p-[7px] w-[75%] outline-none " id="Lnom" name="Lnom" value="{{$profil->Lnom}} " > 
                </div>
                @error('Lnom')
                <p class="text-red-500 text-sm  w-[78%]   flex justify-center mt-[-20px]  ">{{ $message }}</p>
                @enderror
               
                <div class="my-5 flex items-center justify-center">
                    <label for="email" class=" w-[25%] font-semibold ">email </label>
                    <input type="text" class="border border-gray-300  rounded-md p-[7px] w-[75%] outline-none " id="email" name="email" value="{{$profil->email}}" > 
                </div>
                @error('email')
                <p class="text-red-500 text-sm  w-[78%]   flex justify-center mt-[-20px]  ">{{ $message }}</p>
                @enderror
                
                <div class="my-5 flex items-center justify-center">
                    <label for="phone" class=" w-[25%] font-semibold ">phone </label>
                    <input type="text" class="border border-gray-300  rounded-md p-[7px] w-[75%] outline-none " id="phone" name="phone" value="{{$profil->phone }}" > 
                </div>
                @error('phone')
                <p class="text-red-500 text-sm  w-[78%]   flex justify-center mt-[-20px]  ">{{ $message }}</p>
                @enderror
                
                <div class="my-5 flex items-center justify-center ">
                    <label for="adress" class=" w-[25%] font-semibold ">adress </label>
                    {{-- <input type="text" class="border border-gray-300  rounded-md p-[7px] w-[75%] outline-none " id="phone" name="phone" value="{{$profil->adress }}" >  --}}
                    <textarea name="adress" class="border border-gray-300 rounded-md p-[7px] w-[75%] outline-none  " id="adress" cols="30" rows="3">{{$profil->adress }}</textarea>
                </div>
                @error('adress')
                <p class="text-red-500 text-sm  w-[78%]   flex justify-center mt-[-20px]  ">{{ $message }}</p>
                @enderror
                
                <div class="my-5 flex items-center justify-center ">
                    <label for="selectOption" class="w-[25%] font-semibold ">Company</label>
                    <select name="selectOption" id="selectOption" class="border border-gray-300 rounded-md p-[7px] w-[75%] ">
                        <option value="{{$profil->selectOption}}">{{$profil->selectOption}} </option>
                        <option value="Company 1">Company 1</option>
                        <option value="Company 2">Company 2</option>
                        <option value="Company 3">Company 3</option>
                    </select>
                </div>
                @error('selectOption')
                <p class="text-red-500 text-sm  w-[78%]   flex justify-center mt-[-20px]  ">{{ $message }}</p>
                @enderror
                
                <hr>
                <div class="my-5 flex items-center justify-start ">
                    <div class="w-[25%]"></div>
                    <button type="submit" class="border border-blue-500 rounded-md px-4 py-1 text-white bg-blue-500">update</button>

                     
                     <a href="/" class=" ml-3 border-2 border-gray-400 rounded-md px-4 py-1 text-gray-400 ">back </a>

                </div>
                

                    
                </div>
                
            </form>
        </div>
        <!-- ============ -->
        
                   
               


    </main>
</body>
</html>