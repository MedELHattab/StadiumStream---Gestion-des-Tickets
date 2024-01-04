
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
            <div class="grid grid-cols-2 gap-4 place-content-around py-8 ">

                   <div class="flex flex-col items-center pb-10 mt-6 ">
                    <img class="rounded-full w-48 h-64" name="Image" src="https://www.shutterstock.com/image-vector/avatar-male-profile-gray-person-260nw-538708681.jpg"style="width:150px">
                      <h1 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"></h1>
                       <h2 ><?=$user['Nom']?></h2>
                       <h2 ><?=$user['AdressEmail']?></h2>
                       <button type="submit" class= "text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Delete</button>
                    </div>
                    <div class="mt-6">
           <form class="  mt-6 max-w-sm mx-auto"action="/EditProfil/editProfil" enctype="multipart/form-data">
            <div class="mb-8"><h1 >Edit Profil</h1></div>
          
             <div class="mb-5 flex flex-row gap-4">
               <input type="text" name="Nom"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="<?php echo isset($Nom)?>" required>
             </div>
             <div class="mb-5">
               <input type="email" name="AdresseEmail"    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo isset($AdresseEmail) ?>"placeholder="Michelle@gmail.com" required>
             </div>
             <!-- <div class="mb-5">
               <input type="tel" name="phone"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo isset($phone) ?>" placeholder="+33 9572672689901" required>
             </div> -->
             <div class="mb-5">
               <input type="password" name="MotDePasse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="*******" required>
             </div> 
             <div class="mb-5">
             <label for="Image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Update your Pic:</label>
               <input type="file" name="Image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="*******" required>
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
   


  