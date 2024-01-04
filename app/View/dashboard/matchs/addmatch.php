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
    <?php include "../app/View/includes/nav_dash.php"; ?>
    <!-- Navbar  -->


    <!-- Navbar  -->
    <?php include "../app/View/includes/aside_dash.php"; ?>
    <!-- Navbar  -->


    <main class="mt-14 p-12 ml-0 smXl:ml-64 dark:border-gray-700 h-full">

        <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl p-8 mb-12 h-full">
            <!-- Start block -->
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased h-full">
                <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
                    Add <span class="text-orange-500">Match</span>
                </h1>

                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                        <div class="flex justify-end items-center w-full md:w-full">
                            <!-- Search -->
                            <div class="w-full">

                            </div>
                            <!-- / Search -->

                            <!-- Div avec le bouton aligné à droite -->
                            <div class="flex justify-end items-center">
                                <!-- <button type="button" id="createProductModalButton" data-modal-target="createProductModal" data-modal-toggle="createProductModal" class="md:w-auto flex items-center justify-end py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add Match
                                </button> -->
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <!-- Formulaire -->
                            <form action="addmatch/create" method="POST">

                                <!-- Champ Equipe Domicile -->
                                <div class="mb-4">
                                    <!-- <label for="equipeDomicile" class="block text-sm font-medium text-gray-600">Équipe Domicile</label>
                                    <select id="equipeDomicile" name="equipeDomicile" class="mt-1 p-2 border rounded w-full">
                                      
                                    </select>
                                -->

                                    <label for="equipeDomicile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Équipe Domicile</label>
                                    <select id="equipeDomicile" name="equipeDomicile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected disabled>Choose a Team</option>
                                        <?php

                                        foreach ($teams as $team) {
                                            echo "<option value='{$team['TeamID']}'>{$team['NomEquipe']}</option>";
                                        }
                                        ?>
                                    </select>

                                </div>

                                <div class="mb-4">

                                    <label for="equipeExterieur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Équipe Exterieur</label>
                                    <select id="equipeExterieur" name="equipeExterieur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected disabled>Choose a Team</option>
                                        <?php

                                        foreach ($teams as $team) {
                                            echo "<option value='{$team['TeamID']}'>{$team['NomEquipe']}</option>";
                                        }
                                        ?>
                                    </select>

                                </div>

                                <div class="mb-4">

                                    <label for="stadium" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stadium</label>
                                    <select id="stadium" name="stadium" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected disabled>Choose a Stadium</option>
                                        <?php

                                        foreach ($stadiums as $stadium) {
                                            echo "<option value='{$stadium['StadiumID']}'>{$stadium['NomStade']}</option>";
                                        }
                                        ?>
                                    </select>

                                </div>


                                <!-- Champ DateHeure -->
                                <div class="mb-4">
                                    <label for="dateHeure">Date et Heure</label>
                                    <input type="datetime-local" id="dateHeure" name="dateHeure" class="mt-1 p-2 border rounded w-full">
                                </div>



                                <!-- Bouton de soumission -->
                                <div class="mt-4">
                                    <!-- <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                                        Enregistrer les modifications
                                    </button> -->

                                    <button type="submit" class="text-white bg-orange-500 hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 me-2 mb-2">
                                        <svg class="w-4 h-4 me-2 -ms-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bitcoin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M504 256c0 136.1-111 248-248 248S8 392.1 8 256 119 8 256 8s248 111 248 248zm-141.7-35.33c4.937-32.1-20.19-50.74-54.55-62.57l11.15-44.7-27.21-6.781-10.85 43.52c-7.154-1.783-14.5-3.464-21.8-5.13l10.93-43.81-27.2-6.781-11.15 44.69c-5.922-1.349-11.73-2.682-17.38-4.084l.031-.14-37.53-9.37-7.239 29.06s20.19 4.627 19.76 4.913c11.02 2.751 13.01 10.04 12.68 15.82l-12.7 50.92c.76 .194 1.744 .473 2.829 .907-.907-.225-1.876-.473-2.876-.713l-17.8 71.34c-1.349 3.348-4.767 8.37-12.47 6.464 .271 .395-19.78-4.937-19.78-4.937l-13.51 31.15 35.41 8.827c6.588 1.651 13.05 3.379 19.4 5.006l-11.26 45.21 27.18 6.781 11.15-44.73a1038 1038 0 0 0 21.69 5.627l-11.11 44.52 27.21 6.781 11.26-45.13c46.4 8.781 81.3 5.239 95.99-36.73 11.84-33.79-.589-53.28-25-65.99 17.78-4.098 31.17-15.79 34.75-39.95zm-62.18 87.18c-8.41 33.79-65.31 15.52-83.75 10.94l14.94-59.9c18.45 4.603 77.6 13.72 68.81 48.96zm8.417-87.67c-7.673 30.74-55.03 15.12-70.39 11.29l13.55-54.33c15.36 3.828 64.84 10.97 56.85 43.03z"></path>
                                        </svg>
                                        Pay with Bitcoin
                                    </button>
                                </div>

                            </form>
                        </div>


                    </div>
                </div>

            </section>

        </div>

    </main>






    <!-- / For dark mode -->
    <script src="<?= URL_DIR ?>public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>