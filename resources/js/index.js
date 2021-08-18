import {getPostBySlugAndCategory} from "./caller";

$("document").ready(async () => {
    const $mobileBtn = $("#mobile-menu-btn");
    const $mobileDropdown = $("#mobile-menu-dropdown");

    $mobileBtn.off().on("click", () => {
        if ($mobileDropdown.is(":visible")) $mobileDropdown.slideUp("slow")
        else $mobileDropdown.slideDown("slow")
    })

    const cardName = "about-us-card";
    const post = await getPostBySlugAndCategory("home", `p-${cardName}`);

    $(`#${cardName}`).html(`<div class="text-3xl">${post}</div>`)

})