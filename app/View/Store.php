<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
</head>

<body class="bg-gray-100 dark: dark:bg-gray-900 ">
 
    <!-- Navbar  -->
    <?php include "../app/View/includes/header.php"; ?>
    <!-- Navbar  -->
  <section>
    <div class="flex  items-center  py-8 dark:bg-gray-900 ">
      <h1 class="">
        Votre Reservation
      </h1>
    </div>
    <!--les tickets-->
   

<div class="relative overflow-x-auto">
  <table class="w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Matches
              </th>
              <th scope="col" class="px-6 py-3">
                  Unités
              </th>
              <th scope="col" class="px-6 py-3">
                Stages
              </th>
              <th scope="col" class="px-6 py-3">
                 Action
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 image
              </th>
              <td class="px-6 py-4">
                 2 Tickets
              </td>
              <td class="px-6 py-4">
                  Ahmed ben Ali
              </td>
              <td class=" px-6 py-4">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>

              </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                img
              </th>
              <td class="px-6 py-4">
                1 ticket
              </td>
              <td class="px-6 py-4">
                  ahmed ben ali
              </td>
              <td class="px-6 py-4">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>

              </td>
          </tr>
          <tr class="bg-white dark:bg-gray-800">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 img
              </th>
              <td class="px-6 py-4">
                 3 Tickets
              </td>
              <td class="px-6 py-4">
                ahmed ben ali
              </td>
              <td class="px-6 py-4">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
 
              </td>
          </tr>
      </tbody>
  </table>
</div>

  </section>

  <script src="<?= URL_DIR ?>js/darkmode.js"></script>
</body>

</html>








