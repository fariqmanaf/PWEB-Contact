<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> 
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <header class="mt-16 flex justify-between gap-5 items-center flex-row">
    <div class="nav-container1 flex justify-center flex-row items-center gap-5">
      <div class="logo-container ml-40 w-14 h-14 bg-indigo-600 border-transparent border flex justify-center items-center" style="border-radius: 999px;">
        <img src="/resources/logo.png" alt="logo" class="mx-auto h-10 w-auto">
      </div>
      <p class="text-xl">MyContact</p>
    </div>
    <div class="nav-container2 w-2/6 mr-40">
      <p class="text-center">"We Connecting The World In Here, Provide You To Call Someone In Your Mind"</p>
    </div>
  </header>
<!--  -->
  <main class="flex justify-between items-center flex-row mt-14">
    <div class="main-container1 ml-40">
      <h1 class="text-3xl font-semibold">Welcome Back!</h1>
      <p class="text-sm text-slate-400">To keep connected with us please login</p>
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/app/Dashboard/index.html">
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input placeholder="example@mail.com" id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
    
          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            </div>
            <div class="mt-2">
              <input placeholder="*************" id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div class="forgotremember flex flex-row justify-between">
              <input type="checkbox" class="appearance-none rounded-full mt-3.5 border-slate-400 indeterminate:bg-gray-300 ..." /><p class="text-sm mt-3 -ml-28">Remember me</p>
              <div class="text-sm text-right mt-3">
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
              </div>
            </div>
          </div>
          <div>
            <a href="/Views/Dashboard/index.php"><button type="button" class="flex w-96 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button></a>
          </div>
        </form>
      </div>
    </div>
    <div class="main-container2 flex justify-center mr-48">
      <div class="absolute opacity-50 -z-10 circle rounded-full h-48 bg-indigo-600 w-48"></div>
      <div class="top-80 right-48 absolute opacity-50 -z-10 circle rounded-full h-48 bg-indigo-600 w-48"></div>
      <div class="top-80 right-96 absolute opacity-50 -z-10 circle rounded-full h-48 bg-indigo-600 w-48"></div>
      <img src="/resources/person.png" alt="" class="h-96">
    </div>
  </main>
<!--  -->
  <footer class="flex flex-row items-center justify-center mt-10">
      <div class="footer1 flex flex-row w-6/12 justify-center items-center ml-10">
        <p class="-ml-10 text-sm text-slate-400">Don't have an account yet? <a href="/Views/Register/index.php" class="text-sm text-black font-bold"> Create a MyContact account</a></p>
      </div>
      <div class="contact flex flex-row text-sm w-6/12 justify-center items-center">
        <p class="text-slate-400">Got question? </p>
        <i data-feather="phone" class="ml-3 h-4 mt-0.5"></i>
        <a class="text-black font-bold"> +62 217-648</a>
      </div>
  </footer>
  <script>
    feather.replace();
  </script>
</body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html{
  height: 100%;
}

</style>
</html>