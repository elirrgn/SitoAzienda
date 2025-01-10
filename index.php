<?php
    session_start();

    $fileArray = json_decode(file_get_contents("assets/data/items.json"), true);
    $items = $fileArray["prodotti"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sito Azienda</title>
        <?php require "imports/tailwindCDN.php"?>
    </head>
    <body>
        <?php require "component/navbar.php" ?>
        <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">I nostri prodotti</h2>

            <p class="mx-auto mt-4 max-w-md text-gray-500">
                Scopri le ultime novità in elettronica: qualità, innovazione e offerte imperdibili ti aspettano nel nostro negozio!
            </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php
                    foreach ($items as $category => $itemList) {
                        foreach ($itemList as $it) {
                            $nome = $it["nome"];
                            $valutazione = $it["valutazione"];
                            $prezzo = $it["prezzo"];
                            $img = $it["immagine"];
                            echo 
                                "<li>
                                    <a href='#' class='group relative block overflow-hidden shadow-lg shadow-gray-500 transition duration-500 hover:shadow-2xl hover:shadow-gray-800'>
                                        <button
                                            class='absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75'
                                        >
                                            <span class='sr-only'>Wishlist</span>
                            
                                            <svg
                                            xmlns='http://www.w3.org/2000/svg'
                                            fill='none'
                                            viewBox='0 0 24 24'
                                            stroke-width='1.5'
                                            stroke='currentColor'
                                            class='size-4'
                                            >
                                            <path
                                                stroke-linecap='round'
                                                stroke-linejoin='round'
                                                d='M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z'
                                            />
                                            </svg>
                                        </button>
                        
                                        <img
                                            src='$img'
                                            alt=''
                                            class='h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72'
                                        />
                        
                                        <div class='relative border border-gray-100 bg-white p-6'>
                            
                                            <h3 class='mt-1 text-lg font-medium text-gray-900'>$nome</h3>
                            
                                            <p class='mt-1.5 text-sm text-gray-700'>$prezzo$</p>
                                            <form class='mt-4'>
                                                <button
                                                    class='block w-full rounded bg-blue-500 p-4 text-sm font-medium transition text-white hover:scale-105'
                                                >
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </a>
                                </li>";
                        }
                    }
                ?>
            </ul>
        </div>
        </section>
        <script src="imports/javascript.js"></script>
    </body>
</html>