<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
</head>


<body>
    <!-- Navbar  -->
    <?php include "../app/View/includes/nav_dash.php"; ?>
    <!-- Navbar  -->


    <!-- Navbar  -->
    <?php include "../app/View/includes/aside_dash.php"; ?>
    <!-- Navbar  -->

    <div class="flex items-center justify-center h-screen max-w-96">

   <form class=" bg-orange-400 py-8 w-64" action="editstadium" method='post'>
   <div class="mb-8"><h1 >Edit stade</h1></div>
   <div class="mb-5 flex flex-row gap-4">
   <div class="mb-5 flex flex-row gap-4">
               <input type="text"  name="id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" id*" required>
             </div>
             </div>
             <div class="mb-5 flex flex-row gap-4">
               <input type="text"  name="NomStade"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Nom Stade *" required>
             </div>
             <div class="mb-5">
               <input type="text" name="Ville"     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Ville *"  required>
             </div>
             <div class="mb-5">
               <input type="text" name="Address"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="Address *"  required>
             </div>
             <div class="mb-5">
               <input type="text"  name="Capacite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Capacite *" required>
             </div>  
             <div class="flex justify-center">
             <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Edit stade</button>
            </div>
           </form>
 </div>
                            <!-- / For dark mode -->
    <script src="<?= URL_DIR ?>public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>*

</body>
</html>


