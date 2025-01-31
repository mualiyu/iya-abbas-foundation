    <!-- header-start -->
    <?php

    $title = "Contact";
    $page = "contact";
    include(__DIR__ . "/layouts/_header.php");
    ?>

    <!-- header-end -->

    <div class="space-y-8 flex justify-center items-center">
        <div class="bg-white rounded-lg p-6 shadow mt-5">
          <h3 class="text-xl font-semibold text-center text-emerald-900 mb-6">Contact Information</h3>

          <div class="space-y-4 flex flex-col md:flex-row lg:flex-row">
            <div class="flex items-start space-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-emerald-900" viewBox="0 0 64 64">
                <path d="M32 0A24.032 24.032 0 0 0 8 24c0 17.23 22.36 38.81 23.31 39.72a.99.99 0 0 0 1.38 0C33.64 62.81 56 41.23 56 24A24.032 24.032 0 0 0 32 0zm0 35a11 11 0 1 1 11-11 11.007 11.007 0 0 1-11 11z" data-original="#000000" />
              </svg>
              <div>
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Our Location</h4>
                <p class="text-gray-600 text-sm">123 Test Adderss,</p>
                <p class="text-gray-600 text-sm"> FCT ABuja,
                    Nigeria</p>
              </div>
            </div>

            <div class="flex items-start space-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-emerald-900" viewBox="0 0 513.64 513.64">
                <path d="m499.66 376.96-71.68-71.68c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0L18.38 62.08c-48.64 51.2 5.12 186.88 125.44 307.2s256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z" data-original="#000000" />
              </svg>
              <div>
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Phone Number</h4>
                <p class="text-gray-600 text-sm">+234 (816) 723-6629</p>
              </div>
            </div>

            <div class="flex items-start space-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-emerald-900" viewBox="0 0 512 512">
                <path d="M298.789 313.693c-12.738 8.492-27.534 12.981-42.789 12.981-15.254 0-30.05-4.489-42.788-12.981L3.409 173.82A76.269 76.269 0 0 1 0 171.403V400.6c0 26.278 21.325 47.133 47.133 47.133h417.733c26.278 0 47.133-21.325 47.133-47.133V171.402a75.21 75.21 0 0 1-3.416 2.422z" data-original="#000000" />
                <path d="m20.05 148.858 209.803 139.874c7.942 5.295 17.044 7.942 26.146 7.942 9.103 0 18.206-2.648 26.148-7.942L491.95 148.858c12.555-8.365 20.05-22.365 20.05-37.475 0-25.981-21.137-47.117-47.117-47.117H47.117C21.137 64.267 0 85.403 0 111.408a44.912 44.912 0 0 0 20.05 37.45z" data-original="#000000" />
              </svg>
              <div>
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Email Address</h4>
                <p class="text-gray-600 text-sm">info@iyaabbasfoundation.org</p>
              </div>
            </div>
          </div>
        </div>
</div>
<!-- contact us -->
<div class="max-w-6xl mx-auto bg-white p-4 font-[sans-serif]">
    <div
      class="grid md:grid-cols-2 gap-16 items-center relative overflow-hidden p-8 shadow-[0_2px_10px_-3px_rgba(0,153,102,0.3)] before:absolute before:right-0 before:w-[300px] before:bg-blue-400 before:h-full max-md:before:hidden">
      <div>
        <h2 class="text-gray-800 text-3xl font-bold">Get In Touch</h2>
        <p class="text-sm text-gray-500 mt-4 leading-relaxed">Thank you for your interest in the work of the Foundation. Please fill the short form below</p>

        <form>
          <div class="space-y-4 mt-8">
            <input type="text" placeholder="Full Name"
              class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
            <input type="email" placeholder="Email"
              class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
           
            <input type="number" placeholder="Phone No."
              class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
            <input type="number" placeholder="Your Organization."
              class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />

            
            <textarea placeholder="Write Message"
              class="px-2 pt-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none"></textarea>
          </div>

          <button type="button"
            class="mt-8 flex items-center justify-center text-sm w-full px-4 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2"
              viewBox="0 0 548.244 548.244">
              <path fill-rule="evenodd"
                d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                clip-rule="evenodd" data-original="#000000" />
            </svg>
            Send Message
          </button>
        </form>

       
      </div>
      <div class="z-10 relative h-full max-md:min-h-[350px]">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
          class="left-0 top-0 h-full w-full" frameborder="0"
          allowfullscreen></iframe>
      </div>
    </div>
  </div>


    <!-- footer start -->
    <?php include __DIR__ . "/layouts/_footer.php"; ?>
    <!-- footer end -->