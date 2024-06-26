
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>littenHair</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
    include "nav.php";
    
    ?>

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Lorem ipsum dolor sit </h1>
            <p class="leading-relaxed mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium quisquam officia voluptatum aperiam debitis maxime quis eos fugit molestiae illum?</p>
          </div>
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            
            <form action="mainUP.php" method="post">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>

                <div class="relative mb-4">
                  <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
                  <input type="text" id="full-name" name="fullname" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
                  <input type="text" id="email" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <button type="submit" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Sign Up</button>
            </form>
          </div>
        </div>
      </section>
      
    <?php 
    include "footer.php";
    ?>
</body>
</html>