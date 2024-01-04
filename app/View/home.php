<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StadiumStream</title>
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, StadiumStream, CAN24">
    <meta name="description" content="StadiumStream to Sell Football tickets">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/dist/output.css">

    <!-- Date picker  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#datepicker, #datepicker1").datepicker();
    });
    </script>
    <!-- / Date picker  -->

</head>

<body class="dark:bg-gray-900">

    <!-- Navbar  -->
    <?php include "../app/View/includes/header.php"; ?>
    <!-- Navbar  -->

    <!--  Main Image   -->
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 pt-24 pb-10 justify-center items-center">
            <div class="slider-wrapper">
                <div class="slider">
                    <img id="slide-1" class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                        src="public/assets/images/1692088688387.jfif" alt="step" />
                    <img id="slide-2" class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                        src="public/assets/images/60f1a2abb9fc2e2ebf18d55fa7da3798.webp" alt="step" />
                    <img id="slide-3" class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                        src="public/assets/images/afcon-tickets.png" alt="step" />
                    <img id="slide-4" class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                        src="public/assets/images/AFCON-players-to-watch.avif" alt="step" />
                    <img id="slide-5" class="lg:w-9/12 md:w-9/12 object-cover object-center rounded-lg md:mt-0 mt-12"
                        src="public/assets/images/AFCON-Tournament-guide-scaled.avif" alt="step" />
                    <img id="slide-6" class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                        src="public/assets/images/canHero2.webp" alt="step" />
                </div>
                <div class="slider-nav">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                    <a href="#slide-3"></a>
                    <a href="#slide-4"></a>
                    <a href="#slide-5"></a>
                    <a href="#slide-6"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- / Main Image   -->

    <!-- Filter picker   -->
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 justify-center items-center">
            <div date-rangepicker class="flex w-3/4 items-center">
                <!-- First   -->
                <!-- First   -->
                <div class="relative w-3/4">
                    <input type="text"
                        class="w-full backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300"
                        placeholder="Search..." />
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
    <section class="text-gray-600 body-font">
        <section class="text-gray-600 body-font">
            <div class="container px-5 pt-24 mx-auto">
                <div class="flex flex-col">
                    <div class="flex flex-wrap w-full mb-20">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <a href="marketplace/">
                                <h1 class="titles sm:text-3xl text-2xl font-medium mb-2 text-gray-900 dark:text-white">
                                    Upcoming Matches
                                </h1>
                            </a>
                            <div class="h-1 w-20 bg-orange-500 rounded"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/AFCON-2022.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            Shooting Stars
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/AFCON-2022.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            The Catalyzer
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/AFCON-2022.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            The 400 Blows
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col px-5 pt-24 mx-auto">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-orange-500"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- / Matches   -->

    <!-- Teams   -->
    <section class="text-gray-600 body-font">
        <section class="text-gray-600 body-font">
            <div class="container px-5 pt-24 mx-auto">
                <div class="flex flex-col">
                    <div class="flex flex-wrap w-full mb-20">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <h1 class="titles sm:text-3xl text-2xl font-medium mb-2 text-gray-900 dark:text-white">
                                Browse Nationel Teams
                            </h1>
                            <div class="h-1 w-20 bg-orange-500 rounded"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/AFCON-2022.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            Shooting Stars
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/AFCON-2022.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            The Catalyzer
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/AFCON-2022.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            The 400 Blows
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col px-5 pt-24 mx-auto">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-orange-500"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- / Teams   -->

    <!-- Stadiums   -->
    <section class="text-gray-600 body-font">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <div class="flex flex-wrap w-full mb-20">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <h1 class="titles sm:text-3xl text-2xl font-medium mb-2 text-gray-900 dark:text-white">
                                Browse Stadiums
                            </h1>
                            <div class="h-1 w-20 bg-orange-500 rounded"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/abidjan.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            Shooting Stars
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/abidjan.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            The Catalyzer
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full"
                                src="public/assets/images/abidjan.jpg" />
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                            The 400 Blows
                        </h2>
                        <p class="text-base leading-relaxed mt-2 dark:text-white">
                            Swag shoivdigoitch literally meditation subway tile tumblr
                            cold-pressed. Gastropub street art beard dreamcatcher neutra,
                            ethical XOXO lumbersexual.
                        </p>
                        <a class="text-green-500 inline-flex items-center mt-3">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- / Stadiums   -->

    <!-- Footer   -->
    <?php include "../app/View/includes/footer.php"; ?>
    <!-- / Footer   -->

    <!-- / For dark mode -->
    <script src="public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>