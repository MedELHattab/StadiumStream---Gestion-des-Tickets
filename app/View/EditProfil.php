<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
</head>

<body class="dark:bg-gray-900">

    <!-- Navbar  -->
    <?php include "../app/View/includes/header.php"; ?>
    <!-- Navbar  -->

<!--Form seesion-->
            <div class="grid grid-cols-2 gap-4 place-content-around py-8">

                   <div class="flex flex-col items-center pb-10  ">
                    <img class="rounded-full w-48 h-64" src="data:image/jpeg;base64,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" alt="image description">
               
                      <h1 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Michelle Caviria</h1>
                       <h2 >Michelle@gmail.com</h2>
                       <p>+33 57890683798</p>
                       <button type="submit" class= "text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Delete</button>

                    </div>
                    <div class="mt-6">
           <form class="max-w-sm mx-auto ">
            <div class="mb-8"><h1 >Edit Profil</h1></div>
          
             <div class="mb-5 flex flex-row gap-4">
               <input type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="MIchelle" required>
               <input type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="carviria" required>
             </div>
             <div class="mb-5">
               <input type="tel"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+33 9572672689901"required>
             </div>
             <div class="mb-5">
               <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="*******" required>
             </div>
             <div class="mb-5">
               <input type="email"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Michelle@gmail.com" required>
             </div>
             <div class="flex justify-center">
             <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Change</button>
            </div>
           </form>
          </div>
           
          
          </div>
           
      
    
          <!-- / For dark mode -->
    <script src="<?= URL_DIR ?>public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
      </body>
    </html>
   


  