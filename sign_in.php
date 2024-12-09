<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <title>Cslculate PHP</title>
</head>
<body class="text-black">

<!-- Navigation Bar -->
<header class="bg-black text-white py-4">
    <div class="container mx-auto px-6 flex item-center justify-between">
      <div>
        <h1 class="text-3xl font-bold">IT world</h1>
      </div>      


    <!-- Navigation Menus-->

    <nav class="hidden lg:flex space-x-6">
      
    <a href="index.php" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">HOME</a>
    <a href="about.html" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">ABOUT</a>
    <a href="product.html" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">PRODUCT</a>
    <a href="sign_in.php" class="hover:bg-white hover:text-black px-4 py-2 rounded transition">SIGN IN</a>
</nav>
    
    <!-- Button Berger Menu-->
    <button class="lg:hidden text-white text-3xl" id="hamberger">
      &#9776;
  </button>
    </div>

  </header>

  <div id="hamberger-menu" class="md-hidden bg-white text-black py-4 hidden">
    <nav class="flex flex-col space-y-4 px-6">
        <a href="index.php" class="hover:bg-black hover:text-white px-4 rounded transition">HOME</a>
        <a href="about.html" class="hover:bg-black hover:text-white px-4 rounded transition">ABOUT</a>
        <a href="product.html" class="hover:bg-black hover:text-white px-4 rounded transition">PRODUCT</a>
        <a href="contact.html" class="hover:bg-black hover:text-white px-4 rounded transition">CONTACT</a>        
    </nav>
</div>
  <script>
    const hambergerButton = document.getElementById('hamberger');
const hambergerMenu = document.getElementById('hamberger-menu');

hambergerButton.addEventListener('click', () => {
  hambergerMenu.classList.toggle('hidden'); 
});
  </script>

<br><br><br><br><br>
<form class="max-w-md mx-auto" action="name.php" method="post">
  <div class="relative z-0 w-full mb-5 group">
      <input type="" name="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="" name="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="" name="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
        <input type="" name="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (0XX-XXX-XXXX)</label>
    </div>

  </div>
  <button type="submit" class="text-white bg-black focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black dark:hover:bg-black dark:focus:ring-gray-800">Submit</button>
</form>

</body>
</html>
