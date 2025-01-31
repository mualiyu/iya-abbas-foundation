<?php

$title = "Home";
$page = "home";
include(__DIR__ . "/layouts/_header.php");

?>



 <!-- carousel -->
 <section class="relative">
    <div class="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/assets/img/iya/BG-Img-07-free-img.jpg" alt="Slide 1" style="width: 100%; height: 100%; object-fit: cover;">
          <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background-color: rgba(0, 0, 0, 0.5);">
            <div class="bg-gray-900/50 p-6 rounded-md" style="text-align: center; color: white;">
              <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 1rem;">Empowering Communities</h1>
              <p style="font-size: 1.25rem;">We are committed to improving lives through sustainable development.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/assets/img/iya/IMG-20250123-WA0039.jpg" alt="Slide 2" style="width: 100%; height: 100%; object-fit: cover;">
          <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background-color: rgba(0, 0, 0, 0.5);">
            <div style="text-align: center; color: white;">
              <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 1rem;">Health Initiatives</h1>
              <p style="font-size: 1.25rem;">Improving access to quality healthcare services.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/assets/img/iya/home-image-08-300x197.jpg" alt="Slide 3" style="width: 100%; height: 100%; object-fit: cover;">
          <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background-color: rgba(0, 0, 0, 0.5);">
            <div style="text-align: center; color: white;">
              <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 1rem;">Education Programs</h1>
              <p style="font-size: 1.25rem;">Empowering communities through education.</p>
            </div>
          </div>
        </div>
      </div>
      
      <button class="carousel-control-prev" onclick="prevSlide()" aria-label="Previous slide">&#10094;</button>
      <button class="carousel-control-next" onclick="nextSlide()" aria-label="Next slide">&#10095;</button>
      
      <div class="carousel-indicators">
        <button class="indicator active" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
        <button class="indicator" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
        <button class="indicator" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
      </div>
    </div>
  </section>
  

  <div class="font-[sans-serif] py-4 mt-10">
    <h1 class="text-center pb-6 text-gray-800 font-semibold text-[30px]">OUR IMPACT</h1>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-x-6 gap-y-12 divide-x divide-gray-300">
        
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-emerald-600 w-10 inline-block" viewBox="0 0 512 512">
          <path d="M437 268.152h-50.118c-6.821 0-13.425.932-19.71 2.646-12.398-24.372-37.71-41.118-66.877-41.118h-88.59c-29.167 0-54.479 16.746-66.877 41.118a74.798 74.798 0 0 0-19.71-2.646H75c-41.355 0-75 33.645-75 75v80.118c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-80.118c0-41.355-33.645-75-75-75zm-300.295 36.53v133.589H45c-8.271 0-15-6.729-15-15v-80.118c0-24.813 20.187-45 45-45h50.118c4.072 0 8.015.553 11.769 1.572a75.372 75.372 0 0 0-.182 4.957zm208.59 133.589h-178.59v-133.59c0-24.813 20.187-45 45-45h88.59c24.813 0 45 20.187 45 45v133.59zm136.705-15c0 8.271-6.729 15-15 15h-91.705v-133.59a75.32 75.32 0 0 0-.182-4.957 44.899 44.899 0 0 1 11.769-1.572H437c24.813 0 45 20.187 45 45v80.119z" data-original="#000000" />
          <path d="M100.06 126.504c-36.749 0-66.646 29.897-66.646 66.646-.001 36.749 29.897 66.646 66.646 66.646 36.748 0 66.646-29.897 66.646-66.646s-29.897-66.646-66.646-66.646zm-.001 103.292c-20.207 0-36.646-16.439-36.646-36.646s16.439-36.646 36.646-36.646 36.646 16.439 36.646 36.646-16.439 36.646-36.646 36.646zM256 43.729c-49.096 0-89.038 39.942-89.038 89.038s39.942 89.038 89.038 89.038 89.038-39.942 89.038-89.038c0-49.095-39.942-89.038-89.038-89.038zm0 148.076c-32.554 0-59.038-26.484-59.038-59.038 0-32.553 26.484-59.038 59.038-59.038s59.038 26.484 59.038 59.038c0 32.554-26.484 59.038-59.038 59.038zm155.94-65.301c-36.748 0-66.646 29.897-66.646 66.646.001 36.749 29.898 66.646 66.646 66.646 36.749 0 66.646-29.897 66.646-66.646s-29.897-66.646-66.646-66.646zm0 103.292c-20.206 0-36.646-16.439-36.646-36.646.001-20.207 16.44-36.646 36.646-36.646 20.207 0 36.646 16.439 36.646 36.646s-16.439 36.646-36.646 36.646z" data-original="#000000" />
        </svg>
        <h3 class="text-xl font-extrabold text-emerald-600 mt-5">$41.5 Million</h3>
        <p class="text-base text-gray-800 font-semibold mt-3">Awarded in Grants</p>
      </div>
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-emerald-600 w-10 inline-block" viewBox="0 0 512 512">
          <path fill-rule="evenodd" d="M64.217 333.491h41.421c5.508 0 10 4.492 10 10v97.833c0 5.508-4.492 10-10 10H64.217c-5.508 0-10-4.492-10-10v-97.833c0-5.508 4.492-10 10-10zm155.471-61.737h-41.422c-5.508 0-10 4.492-10 10v159.571c0 5.508 4.492 10 10 10h41.422c5.508 0 10-4.492 10-10V281.754c0-5.508-4.493-10-10-10zm114.049-64.466h-41.421c-5.508 0-10 4.492-10 10v224.036c0 5.508 4.492 10 10 10h41.421c5.508 0 10-4.492 10-10V217.288c-.001-5.507-4.493-10-10-10zm72.625-57.992h41.421c5.508 0 10 4.492 10 10v282.028c0 5.508-4.492 10-10 10h-41.421c-5.508 0-10-4.492-10-10V159.296c0-5.508 4.492-10 10-10zm2.707-106.018a7.98 7.98 0 0 1-.812-15.938l49.121-2.666a7.98 7.98 0 0 1 8.307 9.094l.006.001-7.088 48.68a7.986 7.986 0 0 1-15.812-2.25l3.878-26.632C385.642 108.019 321.72 152.702 257.158 189.5c-69.131 39.402-138.98 69.744-206.779 93.355a7.976 7.976 0 0 1-5.25-15.062c66.943-23.313 135.906-53.269 204.154-92.167 63.527-36.208 126.449-80.188 186.56-133.799zM45.262 481.873h421.477c5.508 0 10 4.492 10 10v3.193c0 5.508-4.492 10-10 10H45.262c-5.508 0-10-4.492-10-10v-3.193c0-5.508 4.492-10 10-10zM139.587 6.935c-48.325 0-87.5 39.175-87.5 87.5s39.175 87.5 87.5 87.5 87.5-39.175 87.5-87.5c-.001-48.325-39.176-87.5-87.5-87.5zm-8 32.13v5.279c-5.474 1.183-10.606 3.537-14.768 6.92-6.626 5.387-10.827 13.21-10.353 22.965.476 9.817 5.372 16.4 12.186 20.849 5.887 3.844 13.093 5.827 19.733 6.917 5.206.855 10.757 2.201 14.95 4.733 3.261 1.969 5.71 4.838 6.23 9.127.072.595.111 1.013.117 1.26.08 3.359-1.536 5.926-3.962 7.767-3.135 2.379-7.564 3.785-12.005 4.324a33.57 33.57 0 0 1-3.172.254c-5.25.126-10.424-1.156-14.458-3.842-3.274-2.18-5.775-5.367-6.818-9.552a7.982 7.982 0 0 0-15.5 3.812c2.094 8.399 7.044 14.749 13.505 19.052 4.252 2.831 9.164 4.736 14.315 5.711v5.165a8 8 0 1 0 16-.001v-5.01c6.309-1.038 12.699-3.388 17.758-7.226 6.302-4.782 10.494-11.632 10.275-20.829a29.17 29.17 0 0 0-.179-2.76c-1.22-10.052-6.653-16.591-13.856-20.94-6.27-3.786-13.768-5.668-20.637-6.796-4.832-.793-9.912-2.13-13.607-4.543-2.767-1.806-4.752-4.416-4.937-8.224-.202-4.157 1.615-7.512 4.478-9.84 2.281-1.854 5.196-3.144 8.362-3.781a22.978 22.978 0 0 1 10.115.244c5.278 1.338 10.083 4.817 12.614 10.845a7.997 7.997 0 0 0 10.469 4.281 7.997 7.997 0 0 0 4.281-10.469c-4.701-11.196-13.65-17.664-23.489-20.158a37.3 37.3 0 0 0-1.646-.377v-5.161a8 8 0 1 0-16.001.004z" clip-rule="evenodd" data-original="#000000" />
        </svg>
        <h3 class="text-xl font-extrabold text-emerald-600 mt-5">Over 340 Projects</h3>
        <p class="text-base text-gray-800 font-semibold mt-3">Implemented</p>
      </div>
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-emerald-600 w-10 inline-block" viewBox="0 0 28 28">
          <path d="M18.56 16.94h-3.12l.65-2.16a2.58 2.58 0 0 0-1.66-3.21 1.41 1.41 0 0 0-1.81 1l-.1.42a8.61 8.61 0 0 1-2.26 4l-.57.56a1.56 1.56 0 0 0-1.21-.59h-.73a1.56 1.56 0 0 0-1.56 1.54v6.44a1.56 1.56 0 0 0 1.56 1.56h.73a1.55 1.55 0 0 0 1.33-.76l.14.07a6.55 6.55 0 0 0 2.91.69h3.59a3.58 3.58 0 0 0 3-1.6 6.34 6.34 0 0 0 1.07-3.53v-2.49a1.94 1.94 0 0 0-1.96-1.94zm-9.56 8a.56.56 0 0 1-.56.56h-.69a.56.56 0 0 1-.56-.56V18.5a.56.56 0 0 1 .56-.56h.73a.56.56 0 0 1 .52.56zm10.5-3.57a5.38 5.38 0 0 1-.9 3 2.59 2.59 0 0 1-2.15 1.15h-3.59a5.53 5.53 0 0 1-2.46-.58l-.4-.2V18.6l.92-.92a9.63 9.63 0 0 0 2.53-4.46l.1-.41a.43.43 0 0 1 .2-.26.4.4 0 0 1 .32 0 1.58 1.58 0 0 1 1 2l-.84 2.81a.5.5 0 0 0 .08.44.48.48 0 0 0 .4.2h3.79a.94.94 0 0 1 .94.94zM11 7.3l-.32 1.85a1.09 1.09 0 0 0 .44 1.09 1.11 1.11 0 0 0 .65.22 1.18 1.18 0 0 0 .52-.13L14 9.45l1.67.88a1.1 1.1 0 0 0 1.17-.09 1.09 1.09 0 0 0 .44-1.08L17 7.3 18.31 6a1.1 1.1 0 0 0 .29-1.14 1.12 1.12 0 0 0-.9-.76l-1.87-.27L15 2.12a1.12 1.12 0 0 0-2 0l-.83 1.69-1.87.27a1.12 1.12 0 0 0-.9.76A1.1 1.1 0 0 0 9.69 6zm-.6-2.23 2.13-.31a.49.49 0 0 0 .47-.27l1-1.93a.11.11 0 0 1 .2 0l1 1.93a.49.49 0 0 0 .38.27l2.13.31a.12.12 0 0 1 .09.08.11.11 0 0 1 0 .11l-1.54 1.5a.53.53 0 0 0-.15.45l.37 2.11a.09.09 0 0 1-.05.11.1.1 0 0 1-.12 0l-1.9-1a.47.47 0 0 0-.46 0l-1.91 1a.09.09 0 0 1-.11 0 .09.09 0 0 1-.05-.11l.37-2.11a.53.53 0 0 0-.15-.45l-1.54-1.5a.11.11 0 0 1 0-.11.12.12 0 0 1-.12-.08zm-3.06 8.18a1 1 0 0 0 1-1.19l-.27-1.52 1.12-1.09a1 1 0 0 0-.56-1.73L7.1 7.5l-.69-1.39a1.05 1.05 0 0 0-1.82 0L3.9 7.5l-1.53.22a1 1 0 0 0-.56 1.73l1.11 1.09-.27 1.52a1 1 0 0 0 .41 1 1 1 0 0 0 1.07.07l1.37-.72 1.37.72a1 1 0 0 0 .47.12zm-1.84-1.9a.46.46 0 0 0-.23.06l-1.63.82.36-1.78a.53.53 0 0 0-.2-.45L2.51 8.71l1.8-.26a.47.47 0 0 0 .37-.27l.83-1.63.81 1.63a.47.47 0 0 0 .37.27l1.8.29L7.2 10a.53.53 0 0 0-.15.45l.29 1.8-1.61-.84a.46.46 0 0 0-.23-.06zm20.95-2.94a1 1 0 0 0-.82-.69L24.1 7.5l-.69-1.39a1.05 1.05 0 0 0-1.82 0L20.9 7.5l-1.53.22a1 1 0 0 0-.56 1.73l1.11 1.09-.27 1.52a1 1 0 0 0 .41 1 1 1 0 0 0 1.07.07l1.37-.72 1.37.72a1 1 0 0 0 .47.12 1 1 0 0 0 1-1.19l-.27-1.52 1.11-1.09a1 1 0 0 0 .27-1.04zM24.2 10a.53.53 0 0 0-.15.45l.29 1.8-1.61-.84a.47.47 0 0 0-.46 0l-1.63.82.36-1.78a.53.53 0 0 0-.2-.45l-1.29-1.29 1.8-.26a.47.47 0 0 0 .37-.27l.83-1.63.81 1.63a.47.47 0 0 0 .37.27l1.8.29z" data-name="Layer 2" data-original="#000000" />
        </svg>
        <h3 class="text-xl font-extrabold text-emerald-600 mt-5">Across 36 States</h3>
        <p class="text-base text-gray-800 font-semibold mt-3">
            and the FCT</p>
      </div>
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-emerald-600 w-10 inline-block" viewBox="0 0 512 512">
          <path d="M477.797 290.203c0 59.244-23.071 114.942-64.963 156.834S315.244 512 256 512s-114.942-23.071-156.834-64.963-64.963-97.59-64.963-156.834c0-39.621 10.579-78.512 30.595-112.468 19.419-32.944 47.178-60.48 80.276-79.63 7.646-4.427 17.437-1.814 21.861 5.836 4.426 7.648 1.813 17.437-5.836 21.861-53.882 31.175-88.951 87.036-94.189 148.4H84.6c8.837 0 16 7.163 16 16s-7.163 16-16 16H66.884C74.594 398.12 148.083 471.609 240 479.319v-17.717c0-8.837 7.163-16 16-16s16 7.163 16 16v17.717c91.917-7.71 165.406-81.199 173.116-173.116h-17.717c-8.837 0-16-7.163-16-16s7.163-16 16-16h17.69c-5.238-61.364-40.307-117.227-94.19-148.4-7.648-4.425-10.262-14.212-5.836-21.861 4.425-7.648 14.214-10.261 21.861-5.836 33.098 19.148 60.857 46.685 80.277 79.63 20.016 33.955 30.596 72.846 30.596 112.467zm-253.173-220.2 15.259-15.259-.258 71.899c-.031 8.837 7.106 16.025 15.942 16.058h.059c8.81 0 15.967-7.126 15.999-15.942l.259-72.248 15.492 15.492c3.124 3.124 7.219 4.687 11.313 4.687s8.189-1.563 11.313-4.687c6.248-6.248 6.248-16.379 0-22.627L267.313 4.687c-6.248-6.248-16.379-6.248-22.627 0l-42.689 42.689c-6.248 6.248-6.248 16.379 0 22.627s16.379 6.248 22.627 0zM272 174.358v64.628c16.74 5.24 29.977 18.478 35.218 35.217h50.493c8.837 0 16 7.163 16 16s-7.163 16-16 16h-50.493c-6.823 21.795-27.202 37.655-51.218 37.655-29.585 0-53.654-24.069-53.654-53.655 0-24.015 15.86-44.394 37.654-51.217v-64.628c0-8.837 7.163-16 16-16s16 7.163 16 16zm5.655 115.845c0-11.94-9.715-21.654-21.655-21.654s-21.654 9.714-21.654 21.654 9.714 21.655 21.654 21.655 21.655-9.714 21.655-21.655z" data-original="#000000" />
        </svg>
        <h3 class="text-xl font-extrabold text-emerald-600 mt-5">More than 10 Million</h3>
        <p class="text-base text-gray-800 font-semibold mt-3">People reached</p>
      </div>
    </div>
  </div>


  <!-- grant making -->
  <section
  class="light py-14 md:py-24 bg-white  text-zinc-900  relative overflow-hidden z-10"
>
  <div class="container px-4 mx-auto">
    <div
      class="flex max-w-3xl justify-center text-center mb-6 md:mb-12 mx-auto"
    >
      <div>
        <h2 class="text-2xl font-bold leading-none md:text-[30px] mb-6">
            GRANTMAKING
        </h2>
        <p class="opacity-90 mb-4">
          Assumenda non repellendus distinctio nihil dicta sapiente,
          quibusdam maiores, illum at, aliquid blanditiis eligendi qui.
        </p>
      </div>
    </div>

    <div class="grid grid-cols-12 mx-0 mb-6 md:mb-0">
      <div class="col-span-12 md:col-span-6 relative z-20 p-0 md:order-2">
        <div
          class="bg-center bg-no-repeat bg-cover h-full min-h-[350px] w-full md:w-[50vw] -z-10 overflow-hidden"
          style="
            background-image: url(https://cdn.easyfrontend.com/pictures/featured/feature4.jpg);
          "
        ></div>
      </div>
      <div class="col-span-12 md:col-span-6 relative z-20 p-0">
        <div class="p-6">
          <div class="mb-6">
            <span class="block text-[45px] text-emerald-600 leading-none">5,231</span>
            <span class="text-base uppercase block mt-1"
              >Annual Grants</span
            >
          </div>
          <p class="mb-6 lg:mb-12">
            The Foundation supports initiatives across Nigeria by inviting NGOs to apply for funding to implement projects within its focus areas of Health and Education. Interventions under this grant can be implemented in any state in Nigeria.
          </p>
          <div>
            <a
              href="#"
              class="font-bold text-sm uppercase bg-transparent border-0 hover:text-emerald-600"
            >
              Learn more <i class="fas fa-long-arrow-alt-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-12 mx-0 mb-6 md:mb-0">
      <div class="col-span-12 md:col-span-6 relative z-20 p-0">
        <div
          class="bg-center bg-no-repeat bg-cover h-full min-h-[350px] w-full md:w-[50vw] -z-10 overflow-hidden float-right"
          style="
            background-image: url(https://cdn.easyfrontend.com/pictures/featured/feature7.jpg);
          "
        ></div>
      </div>
      <div class="col-span-12 md:col-span-6 relative z-20 p-0">
        <div class="p-6 md:ml-4">
          <div class="mb-6">
            <span class="block text-[45px] text-emerald-600 leading-none">6,571</span>
            <span class="text-base uppercase block mt-1"
              >Discretionary Grants</span
            >
          </div>
          <p class="mb-6 lg:mb-12">
            The Grant is administered all year-round to facilitate rapid response to people facing humanitarian emergencies in Nigeria and for interventions determined to be within the Foundation’s focus areas.
          </p>
          <div>
            <a
              href="#"
              class="font-bold text-sm uppercase bg-transparent border-0 hover:text-emerald-600"
            >
              Learn more <i class="fas fa-long-arrow-alt-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section
      class=" py-14 md:py-24 text-stone-800 bg-white overflow-hidden"
    >
      <div class="container px-20 md:px-8 xl:px-28">
        <div class="grid grid-cols-12 justify-center">
          <div
            class="col-span-12 lg:col-span-8 lg:col-start-3 lg:col-end-11 text-center"
          >
            <h2 class="text-[32px] lg:text-[30px] leading-none font-bold mb-4">
                News & Updates
            </h2>
      
          </div>
        </div>

        <div class="grid grid-cols-6 mt-12 gap-6">
          <!-- blog item -->
          <?php
            if (count($news) > 0) {

                foreach ($news as $key => $row) {
            ?>
          <div class="col-span-6 md:col-span-3 lg:col-span-2 mb-3">
            <article class="rounded-lg">
              <div class="relative">
                <img
                  src="/uploads/news/<?=$row['image']?>"
                  alt=""
                  class="h-auto w-full rounded-lg shadow-lg dark:shadow-none"
                />
                <div
                  class="absolute bottom-2 left-2 text-lg leading-6 px-6 py-3 font-black bg-white  bg-opacity-80  rounded-lg"
                >
                <?=date("M d, Y", strtotime($row["date"]))?>
                  <!-- 6<br />Nov<br />2016 -->
                </div>
              </div>
              <div class="p-3">
                <p class="font-light text-sm leading-6 mb-2">
                  By <a href="#" class="text-emerald-600"><?=$row['user_name']?></a>
                </p>
                <h4 class="font-medium text-2xl">
                <?=$row['title']?>
                </h4>
                <p class="opacity-60 mt-3 mb-6">
                  -<?=substr($row['content'], 0, 150)?>...
                </p>
                <a
                  href="/latest-news/<?=$row['id']?>"
                  class="bg-transparent hover:bg-emerald-600 border border-emerald-600 hover:text-white py-2 px-5 rounded transition"
                  >Read More</a
                >
              </div>
            </article>
          </div>
          <?php
                }
            } else {
                ?>
                <div class="text-center p-6">
                    <h3 class="text-xl font-bold text-gray-800">No posts found</h3>
                    <p class="text-gray-400 text-sm">There are currently no news posts available. Please check back later.</p>
                </div>
            <?php
            }
            ?>
         
        </div>

        <div class="text-center mt-14">
          <a
            href="/latest-news"
            class="bg-emerald-600 hover:bg-opacity-90 text-white font-bold border border-emerald-600 py-3 px-7 rounded transition"
            >Load All Posts</a
          >
        </div>
      </div>
    </section>


<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->