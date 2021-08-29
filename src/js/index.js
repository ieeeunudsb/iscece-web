function RenderHeader(selector) {
  const header = /*html*/`<header class="border-b sticky top-0 z-10 bg-white shadow  box-border relative">
    <div class="mx-auto container">
        <div class="flex justify-between">
            <!-- logo -->
            <a href="/" class="py-2 my-auto">Logo ISCECE</a>

            <!-- menu -->
            <div class="hidden lg:flex">
                <a href="/paper"
                   class="focus:outline-none p-2 cursor-pointer border-b-2 border-transparent hover:border-black">
                    Paper
                </a>

                <a href="/conference"
                   class="focus:outline-none p-2 cursor-pointer border-b-2 border-transparent hover:border-black">
                    Conference
                </a>
            </div>

            <!-- mobile button-->
            <div id="mobile-menu-btn" class="lg:hidden py-2 cursor-pointer">
                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                  id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

    </div>

    <!-- mobile button-->
    <div id="mobile-menu-dropdown" class="lg:hidden absolute w-full mx-auto" style="display: none;">
        <div class="bg-white text-xl py-4 space-y-4 text-center">
            <a href="/paper" class="block">
                <div class="py-4 mx-4 cursor-pointer rounded-md bg-gray-300/60">Paper</div>
            </a>
            <a href="/conference" class="block">
                <div class="py-4 mx-4 cursor-pointer rounded-md bg-gray-300/60">Conference</div>
            </a>
        </div>

        <!-- backdrop blur filter -->
        <div class="min-h-screen bg-gray-50/10 backdrop-filter backdrop-blur-sm relative"></div>
    </div>
</header>`

  $(selector).html(header);
}

function UISetup() {
  RenderHeader("#main-header");
}


$("document").ready(async () => {
  UISetup()

  const $mobileBtn = $("#mobile-menu-btn");
  const $mobileDropdown = $("#mobile-menu-dropdown");

  $mobileBtn.off().on("click", () => {
    if ($mobileDropdown.is(":visible")) $mobileDropdown.slideUp("fast")
    else $mobileDropdown.slideDown("fast")
  })
})

let a = `<div>hello</div>`
