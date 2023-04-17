<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<style>
    {
        border: 1px red solid;
    }
</style>
<body class="bg-gray-100">
    <nav class="mobile:z-auto sticky z-10 top-0 w-full shadow bg-white">
        <div class=" m-auto flex justify-between items-center text-gray-700">
            <ul class="hidden md:flex items-center px-8 text-base font-semibold cursor-pointer">
                <li class="hover:bg-gray-200 py-5 px-6">Home</li>
                <li class="hover:bg-gray-200 py-5 px-6">Home</li>
                <li class="hover:bg-gray-200 py-5 px-6">Home</li>
            </ul>
            <button type="button" class="block md:hidden py-4 px-6 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
                <div class="">
                    <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                    <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                    <div class="w-5 h-1 bg-gray-600"></div>
                </div>
                
                <div class="absolute top-0 -left-full h-screen w-8/12 bg-slate-900 opacity-0 group-focus:left-0 group-focus:opacity-100 transition-all z-10 top-0 duration-300">
                <ul class="flex flex-col items-center w-full text-start text-white cursor-pointer pt-10 ">
                    <li class="w-full "><h1 class="px-6 py-4 text-xl text-slate-400 font-bold">Menu</h1></li>
                    <li class=" w-full py-4 px-6"><p class="hover:text-slate-600">home</p></li>
                    <li class=" w-full py-4 px-6"><p class="hover:text-slate-600">home</p></li>
                    <li class=" w-full py-4 px-6"><p class="hover:text-slate-600">home</p></li>
                </ul>
                </div>
            </button>
            <h1 class="px-8 py-4 text-xl font-bold cursor-pointer">E-DISIPLINE</h1>
        </div>
    </nav> 
    <section>
        <div class="mt-16 mb-16">
            <div class=" items-center border-t-4 border-teal-500 py-5 rounded shadow-2xl lg:mx-32 mobile:mx-5">
                <div class="flex md:flex-row mobile:flex-col sm:flex-col lg:justify-between w-full ">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32 lg:ml-16 lg:my-6 sm:w-full  mobile:mb-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <div class="lg:flex-col sm:flex sm:justify-center mobile:">
                        <ul class="sm:my-6 sm:mx-5 mobile:text-2xl mobile:mx-5">
                            <li>nama:</li>
                            <li>nama:</li>
                            <li>nama:</li>
                        </ul>
                        <ul class="sm:my-6 sm:mx-5 mobile:mx-5 mobile:my-3 text-2xl ">
                            <li>nama:</li>
                            <li>nama:</li>
                            <li>nama:</li>
                        </ul>
                    </div>
                    <div class=" sm:flex sm:justify-center">
                        <ul class=" sm:my-6 mobile:mb-4 mobile:mx-5 text-2xl">
                            <li>nama:</li>
                            <li>nama:</li>
                            <li>nama:</li>
                        </ul>
                    </div>
                    <div class="lg:block md:block sm:block sm:mx-40 text-center lg:mx-16 lg:my-6 mobile:mx-24 mobile:mb-5">
                        <div class="bg-teal-500 sm:py-1 sm:px-5 text-2xl ">status</div>
                        <div class=" shadow-lg mobile:py-5 sm:px-5 text-2xl">status</div>
                    </div>
                </div>
                <form action="">
                <div class="my-5 mx-5 mobile:mx-auto flex mobile:flex-col mobile:my-5 lg:flex-row lg:text-2xl mobile:text-2xl">
                    <div class="flex flex-col mx-5">
                        <div class="mobile:my-2">
                            <input type="checkbox" name="checkbox1" id="checkbox1">
                            <label for="checkbox1">Lorem ipsum dolor sit amet.</label>
                        </div>
                        <div class="mobile:my-2">
                            <input type="checkbox" name="checkbox2" id="checkbox2">
                            <label for="checkbox2">Lorem ipsum dolor sit amet.</label>
                        </div>
                    </div>
                    <div class="flex flex-col mx-5">
                        <div class="mobile:my-2">
                            <input type="checkbox" name="checkbox3" id="checkbox3">
                            <label for="checkbox3">Lorem ipsum dolor sit amet.</label>
                        </div>
                        <div class="mobile:my-2">
                            <input type="checkbox" name="checkbox4" id="checkbox4" class="">
                            <label for="checkbox4">Lorem ipsum dolor sit amet.</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row mobile:flex-row  mb-6">
                    <div class="w-full mobile:text-sm text-2xl  mobile:">
                        <div class="flex row py-5 px-5 ">
                            <input id="pelangran" class=" bg-gray-200 rounded border border-teal-500 w-full  text-gray-700 mr-3 py-1 px-2  " type="text" placeholder="Bilek" aria-label="Full name">
                            <label for="pelangaran" class=" bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 lg:text-md mobile:text-sm lg:border-4 mobile:border-2 text-white py-2 px-2 rounded-md " type="button">
                                bilek
                            </label>
                        </div>
                    </div>
            </div>
        </form>
        </div>
    </section>
    
</body>

</html>