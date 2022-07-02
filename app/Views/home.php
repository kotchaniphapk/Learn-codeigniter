<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-ua-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>build Website With Tailwind CSS</title>
  <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<nav class="bg-gray-800 border-gray-200 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
        <i class="fa-solid fa-graduation-cap fa-2xl text-red-800"></i>
            <span class="self-center text-xl font-pj whitespace-nowrap text-white ml-2"> UIVERSITY</span>
        </a>
    <div class="hidden lg:flex lg:items-center lg:ml-16 xl:ml-24 lg:space-x-10">
                    <a href="#" title="" class="text-sm font-medium text-white transition-all duration-200 rounded hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Subject </a>

                    <a href="#" title="" class="text-sm font-medium text-white  transition-all duration-200 rounded focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Teacher </a>

                    <a href="#" title="" class="text-sm font-medium text-white  transition-all duration-200 rounded hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> All </a>

                    <a href="#" title="" class="text-sm font-medium text-white  transition-all duration-200 rounded hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> About</a>

                    <a href="#" title="" class="text-sm font-medium text-white  transition-all duration-200 rounded hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"> Support </a>
                </div>

                <div class="flex items-center justify-end ml-auto space-x-2 sm:space-x-5">
                    <a href="http://localhost:8080/register"  type="button" class="p-2 -m-2 text-red-500 transition-all duration-200 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                    <a type= "button"  class="mr-2 m-2 px-4 py-2 items-center hover:text-gray-700  rounded-md hover:bg-gradient-to-r text-white  font-pj shadow-lg bg-gradient-to-r from-blue-900 to-blue-400 "   href="http://localhost:8080/register" >Sign Up</a>
                </div>
</div>                   
</nav>
</body> 
<!-- component -->
<div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://i.ibb.co/6H1L91g/32c4531bda220bc73a0e4bb2e28ba08a.jpg)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">University</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus molestiae</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">University</h2>
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                    </div>

                    <div class="mt-8">
                    <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                    <?php endif; ?>
                    
                        <form action="/login/auth" method="post">
                            <div>
                                <label for="inputemail" class="block mb-2 text-sm text-gray-600">Email Address</label>
                                <input type="email" name="email" id="inputforemail" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="inputpassword" class="text-sm text-gray-600 ">Password</label>
                                    <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>
                                </div>

                                <input type="password" name="password" id="inputforpassword" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md   0 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-900 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Sign in
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    