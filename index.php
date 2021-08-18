<?php get_header(); ?>

    <div class="mx-auto container py-2 ">
        <div class="mx-auto relative" id="register-card">

            <div class="mt-6 absolute w-full">
                <div class="text-5xl mx-auto text-center py-2">
                    Register Now
                </div>
                <div class="flex flex-row justify-center py-6">
                    <div class="hover:shadow-md cursor-pointer text-center p-2 rounded-sm bg-gray-500/20">
                        Register
                    </div>
                </div>
            </div>

            <div class="bg-gray-200/80 h-48 my-2"></div>

        </div>

        <div id="about-us-card" class="py-2">
            <!-- p-about-us-card-->
        </div>


    </div>

<?php get_footer(); ?>

<?php
// ### backup route to another page ###
//    $path = get_page_uri();
//    if ($path == "") get_template_part('template-parts/content', get_post_format());
//    else get_template_part("template-parts/{$path}", get_post_format());
//
?>