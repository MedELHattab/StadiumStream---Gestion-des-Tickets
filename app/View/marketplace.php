<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StadiumStream</title>
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, StadiumStream, CAN24">
    <meta name="description" content="StadiumStream to Sell Football tickets">

    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">


</head>

<body class="dark:bg-gray-900">

    <!-- Navbar  -->
    <?php include "../app/View/includes/header.php"; ?>
    <!-- Navbar  -->

    <!--  Main Image   -->
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 pt-24 pb-10 justify-center items-center">
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex flex-col px-5 justify-center items-center">
                    <div class="max-w-screen-xl px-4 mx-auto lg:px-12 w-full">
                        <main class="mt-8">
                            <img class="w-full h-full object-cover object-center block"
                                src="<?= URL_DIR ?>public/assets/images/banniere-calendrier-2022-F24-EN.png" alt="" />
                        </main>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- / Main Image   -->

    <!-- Filter picker   -->
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 justify-center items-center">
            <div date-rangepicker class="flex w-3/4 items-center">
                <!-- First   -->
                <div class="relative w-2/4">
                    <input type="text" id="search"
                        class="w-full backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300"
                        placeholder="Search..." />
                    <!-- <button id="btn" onclick="clicked()">click me</button> -->
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                </div>
                <span class="mx-4 text-gray-500">|</span>
                <!-- Second   -->
                <select id="stadiums" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                    relative w-2/5 ">
                    <option selected disabled>Choose a Stadium</option>

                    <?php

                    foreach ($stadiums as $stadium) {
                        echo "<option value='{$stadium['StadiumID']}'>{$stadium['NomStade']}</option>";
                    }
                    ?>
                </select>
                <span class="mx-4 text-gray-500">|</span>

                <!-- Third   -->
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <!-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>-->
                    </div>
                    <input name="start_date" type="datetime-local"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date start" id="datepicker" />
                </div>

                <span class="mx-4 text-gray-500">to</span>

                <!-- Forth   -->

                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <!-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg> -->
                    </div>

                    <input name="start_date" type="datetime-local"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date end" id="datepicker1" />
                </div>
            </div>
        </div>
    </section>
    <!-- / Filter picker   -->

    <!-- Matches   -->

    <!-- <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap " id="container">
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">

                </div>

            </div>
        </div>
    </section> -->
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 flex justify-center">
        <div class="container">
            <div class="flex flex-wrap  " id="container">

            </div>


        </div>
    </section>











    <!-- / Matches   -->







    <!-- Footer   -->
    <?php include "../app/View/includes/footer.php"; ?>
    <!-- / Footer   -->


    <!-- / Search with fetch  -->
    <script>
    const search = document.getElementById("search");
    const btn = document.getElementById("btn");
    const container = document.getElementById("container");
    search.addEventListener("keyup", () => {
        // Code to be executed when a key is released
        // You can access the input value using search.value
        const inputValue = search.value;

        container.innerHTML = "";
        load();
        // Add your logic here based on the input value
        console.log("Input Value:", inputValue);
    });

    function load() {
        fetch(`../matchs/index1/?name=${search.value}`) //api for the get request
            .then((response) => response.json())
            .then((data) =>
                data.forEach((element) => {
                    container.innerHTML += `
        <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="bg-[#fdfdfd] rounded-lg overflow-hidden mb-10 border">
                    <img src="../public/assets/images/afcon-draw-4-d.webp" alt="image" class="w-full">
                    
                    <div class="pt-2 pr-8 pb-5 pl-3 sm:pt-2 sm:pr-8 sm:pb-5 sm:pl-3 md:pt-2 md:pr-8 md:pb-5 md:pl-3 xl:pt-2 xl:pr-8 xl:pb-5 xl:pl-3 text-center">
                        <p class="text-base text-body-color leading-relaxed mb-7 text-left font-libre-franklin border-solid border-0 border-e5e7eb box-border font-normal text-003">
                        ${element.DateHeure}
                        </p>
                        
                        <h3 class="mb-6">
                            <a href="javascript:void(0)" class="text-left font-semibold text-dark text-xl sm:text-2xl md:text-xl lg:text-2xl xl:text-xl 2xl:text-2xl block hover:text-primary relative pl-5">
                                <div class="org-section-card-border absolute top-0 left-0 w-1 h-full bg-green-600 pr-1"></div>
                                ${element.EquipeDomicile} VS ${element.EquipeExterieur}
                            </a>
                        </h3>

                        <p class="flex items-center text-base text-body-color leading-relaxed mb-7 text-left font-libre-franklin border-solid border-0 border-e5e7eb box-border font-normal text-003">
                            <svg class="mx-4" fill="#000000" height="20px" width="20px" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                                <path d="M89.2,26.9v11.8c5.6,1.8,8.8,4.1,8.8,6.5c0,3.4-6.3,6.4-16.3,8.5c0.2-0.1,0.3-0.2,0.5-0.4c4-1.3,6.3-2.9,6.3-4.5
            c0-4.6-17.5-8.3-39-8.3c-21.5,0-39,3.7-39,8.3c0,2,3.3,3.9,8.9,5.3C8.2,52,1,48.8,1,45.2c0-2.5,3.5-4.8,9.4-6.7V26.9v-6.2H12h9.9
            v6.2H12V38c0.4-0.1,0.8-0.2,1.2-0.3c4.9-1.3,11.2-2.3,18.2-3c0.7-0.1,1.3-0.1,2-0.2c4.9-0.4,10.2-0.6,15.7-0.6c0.2,0,0.3,0,0.5,0
            c0.1,0,0.3,0,0.4,0v-9.9v-6.2h1.6h9.9v6.2h-9.9v9.9c14.6,0.1,27.5,1.8,36,4.3V26.9v-6.2h1.6h9.9v6.2H89.2z M1.6,54l4,20.5l1.6,14.6
            c2,1.4,4.8,2.6,8.3,3.7V80.2c0-3.8,3.1-6.9,6.9-6.9h0c3.8,0,6.9,3.1,6.9,6.9v15.5c4.1,0.6,8.6,1,13.3,1.2V80.2
            c0-3.8,3.1-6.9,6.9-6.9s6.9,3.1,6.9,6.9V97c4.7-0.2,9.2-0.5,13.3-1.1V80.2c0-3.8,3.1-6.9,6.9-6.9s6.9,3.1,6.9,6.9v13
            c3.2-0.9,6-2,8.1-3.1l2-16.7L97.4,54c-6,3.9-25.2,8.3-47.9,8.3C26.8,62.3,7.6,57.9,1.6,54z"></path>
            </svg>
            ${element.NomStade}
            </p>
            <!-- <p class="text-base text-body-color leading-relaxed mb-7">
            Lorem ipsum dolor sit amet pretium consectetur adipiscing
              elit. Lorem consectetur adipiscing elit.
              </p> -->

              <a href="javascript:void(0)">
              <button class="transition-all duration-100 text-center p-2 rounded-md text-white w-1/2 bg-gradient-to-r from-orange-700 to-orange-500 hover:shadow-md hover:from-orange-800 hover:to-orange-600">
              View Details
              </button>
                        </a>
                        </div>
                        </div>
                        </div>`;
                })
            );
    }
    load();

    function clicked() {
        console.log(search.value);
    }
    </script>

    <!-- / For dark mode -->
    <script src=" <?= URL_DIR ?>public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js">
    </script>




</body>

</html>