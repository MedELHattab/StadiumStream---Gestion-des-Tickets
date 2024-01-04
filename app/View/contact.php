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

    <div class="hero_section flex flex-col mt-[7em] mx-[7em] gap-x-3">
        <div class="p-4" style="border-left: 2px solid #004634; color: #004634;">Contact <span
                style="color: #FF6E01;">Us</span></div>
        <div class="px-5 mr-[10em]" style="padding: 5px; border-bottom: 2px solid black;">
            Feel free to contact us any time. We will get back to you as soon as we can!
        </div>
    </div>

    <div class="border-black py-8 px-4 mb-20 mt-4 mx-[7em] border">

        <div class="contact_form">
            <div class="flex justify-center gap-4 mt-8">
                <form class="w-full md:w-7/12 xl:w-5/12" data-gtm-form-interact-id="0" method="post" action="./Contact">
                    <div>
                        <div class="mb-6 relative">
                            <label for="email" class="opacity-40 org-text-primary sr-only">Email</label>
                            <div class="flex">
                                <input id="email"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="email" type="email" autocomplete="on" placeholder="Email *">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6 relative">
                            <label for="givenName" class="opacity-40 org-text-primary sr-only">Prénom</label>
                            <div class="flex">
                                <input id="givenName"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="givenName" type="text" autocomplete="on" placeholder="Prénom *">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6 relative">
                            <label for="familyName" class="opacity-40 org-text-primary sr-only">Nom</label>
                            <div class="flex">
                                <input id="familyName"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="familyName" type="text" autocomplete="on" placeholder="Nom *">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6 relative">
                            <label for="street1" class="opacity-40 org-text-primary sr-only">Adresse</label>
                            <div class="flex">
                                <input id="street1"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="street1" type="text" autocomplete="on" placeholder="Adresse *">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6 relative" type="tel">
                            <label for="phoneNumber" class="opacity-40 org-text-primary sr-only">Téléphone</label>
                            <div class="flex gap-x-2">
                                <button type="button" class="flex w-10 bg-red500">
                                    <span class="text-base">🇨🇮</span>
                                    <span class="mt-1.5 ml-auto">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M7 10l5 5 5-5z"></path>
                                        </svg>
                                    </span>
                                </button>
                                <input id="phoneNumber"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="phoneNumber" type="tel" autocomplete="on" aria-invalid=""
                                    placeholder="Téléphone *">
                            </div>
                            <span class="text-red-500"></span>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6 relative" type="tel">
                            <label for="message" class="opacity-40 org-text-primary sr-only">Message</label>
                            <textarea name="message" class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-center justify-center mt-8">
                        <button type="submit" class="bg-[#004634] text-white font-bold py-2 px-4 border rounded"
                            style="background-color: #004634;">
                            send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include "../app/View/includes/footer.php"; ?>
    </div>

    <!-- For dark mode -->
    <script src="public/assets/js/darkmode.js"></script>
    <!-- For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>
