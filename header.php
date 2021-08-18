<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>

    <header class="border-b sticky top-0 z-10 bg-white shadow">

        <div class="mx-auto container">
            <div class="flex justify-between">

                <a href="/" class="py-2 my-auto">
                            Logo ISCECE
                
                </a>
                <div class="hidden lg:flex">
                    <a href="/paper">
                        <div class="p-2 cursor-pointer hover:border-b border-black box-content">
                            Paper
                        </div>
                    </a>

                    <a href="/conference">
                        <div class="p-2 cursor-pointer hover:border-b border-black box-content">
                            Conference
                        </div>
                    </a>
                </div>

                <div class="lg:hidden py-2" id="mobilemenu">
                    <button class="">
                        <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content flex-grow">


        <!-- <?php if (is_front_page()) : ?>
            <div class="container mx-auto my-12 border-b pb-12">
                <h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>
                <h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme
                    with <a href="https://tailwindcss.com" class="text-primary">TailwindCSS</a> and <a
                            href="https://laravel-mix.com" class="text-primary">Laravel Mix</a>.</h2>
                <p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">TailPress is your go-to starting
                    point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out
                    of the box.</p>
                <a href="https://github.com/jeffreyvr/tailpress"
                   class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                    on Github</a>
            </div>

        <?php endif; ?> -->

        <?php do_action('tailpress_content_start'); ?>

        <main class="min-h-screen">