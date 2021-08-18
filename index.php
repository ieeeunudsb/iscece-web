<?php get_header(); ?>

<div class="mx-auto container py-2 relative">

  <div class="mx-auto" id="register-card">

    <div class="py-10 absolute w-full">
      <div class="text-5xl mx-auto text-center py-2">
        Register Now
      </div>
      <div class="flex flex-row justify-center py-6">
        <div class="hover:shadow-md cursor-pointer text-center p-2 rounded-sm bg-gray-500/20">
          Register
        </div>
      </div>
    </div>

    <div class="bg-gray-200/80 w-full h-48"></div>

  </div>

  <div id="about-iscece-card">
    ICSGTEIS 2021 serves as an international 
    forum for researchers and industry practitioners to present their research findings and innovation in the fields of
    electrical engineering and information system. The conference is aimed at
    facilitating the exchange of ideas in all aspect of green and smart technology. We
    kindly invite scholars and industry practitioners from around the world to submit
    research results and innovations to the ICSGTEIS 2021 to contribute in creating a
    smart, green, and sustainable world.
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