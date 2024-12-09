<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <title>HOME PHP</title>
</head>
<body>
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
        <a href="index.html" class="hover:bg-black hover:text-white px-4 rounded transition">HOME</a>
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
</body>
</html>