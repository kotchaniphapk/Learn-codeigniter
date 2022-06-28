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
<div class="bg-gray-800 px-2 py-4 items-center mx-auto">
      <a href="https://flowbite.com/" class="flex items-center">
      <i class="fa-solid fa-graduation-cap fa-2xl text-red-800 shadow-lg"></i>
          <span class="self-center text-2xl font-pj whitespace-nowrap text-white  ml-2">UNIVERSITY</span>
      </a>
</div>      
</body> 
<div class="relative py-12 bg-gray-800 sm:py-16 lg:py-20">
      <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="relative max-w-md mx-auto mt-10 lg:max-w-l">
              
              <div class="absolute inset-x-1.5 top-8 -inset-y-4">
                  <div class="w-full h-full mx-auto rotate-180 rounded-3xl opacity-90 blur-xl filter" style="background: linear-gradient(90deg, #258df5 99.86% ,#f25288 99.34%)"></div>
              </div>

            <div class="relative overflow-hidden bg-white rounded-2xl lg:rounded-3xl">
                  <div class="px-6 py-7 sm:px-12 sm:py-10">
                      <div class="text-center">
                          <h1 class="text-3xl font-bold text-gray-900 font-pj sm:text-xl xl:text-xl">Sign Up</h1>
                          
                          <?php if(isset($validation)): ?>
                          <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                          <?php endif; ?>

                        <form action="/register/save" method="post">
                          <div class="space-y-4">
                            <div>
                                  <label for="inputname" class="form-lebel  font-medium text-gray-900 font-pj"> User Name </label>
                                  <div class="mt-2.5">
                                  <input type="text" name="name" id="inputforname" placeholder="Name" class="block w-full px-4 py-4 text-gray-900 placeholder-gray-600 bg-white border border-gray-400 rounded-xl focus:border-gray-900 focus:ring-gray-900 caret-gray-900" value="<?= set_value('name') ;?> "/>
                                  </div>
                              </div>
                                  <div>
                                  <label for="inputemail" class="form-lebel font-medium text-gray-900 font-pj"> Email </label>
                                  <div class="mt-2.5">
                                      <input type="email" name="email" id="inputforemail" placeholder="Email address" class="block w-full px-4 py-4 text-gray-900 placeholder-gray-600 bg-white border border-gray-400 rounded-xl focus:border-gray-900 focus:ring-gray-900 caret-gray-900" value="<?= set_value('email'); ?>" />
                                  </div>
                              </div>

                              <div>
                                  <label for="inputpassword" class="for-lebel font-medium text-gray-900 font-pj"> Password </label>
                                  <div class="mt-2.5">
                                      <input type="password" name="password" id="inputforpassword" placeholder="Password (min. 8 character)" class="block w-full px-4 py-4 text-gray-900 placeholder-gray-600 bg-white border border-gray-400 rounded-xl focus:border-gray-900 focus:ring-gray-900 caret-gray-900" />
                                  </div>
                              </div>


                              <div>
                                  <label for="" class="text-base font-medium text-gray-900 font-pj">Confrim Password </label>
                                  <div class="mt-2.5">
                                      <input type="password" name="confpassword" id="" placeholder="Confrim Password (min. 8 character)" class="block w-full px-4 py-4 text-gray-900 placeholder-gray-600 bg-white border border-gray-400 rounded-xl focus:border-gray-900 focus:ring-gray-900 caret-gray-900" />
                                  </div>
                              </div>

                              <button
                                  type="submit"
                                  class=" btn btn-primary  flex items-center justify-center w-full px-8 py-4 text-base font-bold text-white transition-all duration-200 bg-gray-900 border border-transparent rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 font-pj hover:bg-gray-600"
                              >
                                  Sign Up
                              </button>
                          </div>
                      </form>                  

                      <p class="mt-5 text-base font-normal text-center text-gray-900 font-pj">Already joined? <a href="#" title="" class="font-bold rounded hover:underline focus:outline-none focus:ring-1 focus:ring-gray-900 focus:ring-offset-2">Login now</a></p>
                  </div>
              </div>
          </div>
    </div>
  </div>

</body>