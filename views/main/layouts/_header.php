<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Iya Abbas Foundation"; ?></title>
    <link rel="stylesheet" href="src/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="/src/style.css">
</head>

<body>
    <!-- Header -->
    <header class="shadow-md bg-white tracking-wide z-50 sticky top-0">
        <section
            class="logo flex items-center lg:justify-center py-1.5 sm:px-10 px-4 border-gray-200 min-h-[60px]">
            <!-- <div class='left-10 absolute z-50 bg-gray-100 flex items-center px-4 py-2.5 rounded max-lg:hidden'>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904"
            class="cursor-pointer fill-gray-400 mr-2.5 inline-block w-[18px] h-[18px]">
            <path
              d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
            </path>
          </svg>
          <input type='text' placeholder='Search...' class="outline-none bg-transparent w-full text-sm" />
        </div> -->

            <a href="/" id="logo" class="max-sm:hidden">
                <img src="/assets/img/iya/logo/iya_logo1.png" alt="logo" class="w-36 hidden sm:block" />
            </a>

            <div id="toggleOpen" class="flex items-center justify-between w-full  lg:hidden">
                <a href="javascript:void(0)" class="hidden max-sm:block"><img src="/assets/img/iya/logo/iya_logo1.png" alt="logo" class="w-20" />
                </a>
                <button class="ml-[60px]">
                    <svg
                        class="w-7 h-7"
                        fill="#000"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                var logo = document.querySelector('.logo');
                if (window.scrollY > 60) {
                logo.style.display = 'none';
                } else {
                logo.style.display = 'flex';
                logo.style.justifyContent = 'center';
                }
            });
            });
        </script>

        <div class="flex justify-center items-center px-10 py-3 relative">
            <div
                id="collapseMenu"
                class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50">
                <button
                    id="toggleClose"
                    class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-3.5 h-3.5 fill-black"
                        viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class="lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[280px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                    <li class="max-lg:border-b max-lg:pb-4 px-3 lg:hidden">
                        <a href="javascript:void(0)"><img src="/assets/img/iya/logo/iya_logo1.png" alt="logo" class="w-36" />
                        </a>
                    </li>

                    <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                        <button
                            <?php if (in_array($page, ['about-us', 'board-of-trustees', 'our-team'])) echo 'style="color:#222222;"'; ?>
                            onclick="toggleDropdown(this)"
                            class="hover:text-emerald hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">Who we are<svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16px"
                                height="16px"
                                class="ml-1 inline-block"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16"
                                    data-original="#000000" />
                            </svg>
                        </button>
                        <ul
                            class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                            <li class="border-b py-3">
                                <a
                                    href="/about-us"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    About the Foundation
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/board-of-trustees"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Board of Trustees
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/our-team"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Our Team
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                        <button
                            onclick="toggleDropdown(this)"
                            <?php if (in_array($page, ['health', 'education', 'project-supported'])) echo 'style="color:#222222;"'; ?>
                            class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">Programmes<svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16px"
                                height="16px"
                                class="ml-1 inline-block"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16"
                                    data-original="#000000" />
                            </svg>
                        </button>
                        <ul
                            class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                            <li class="border-b py-3">
                                <a
                                    href="/health"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Health
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/education"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Education
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/project-supported"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Project Supported
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                        <button
                            onclick="toggleDropdown(this)"
                            <?php if (in_array($page, ['annual-grant', 'discretionary-grant', 'partnership'])) echo 'style="color:#222222;"'; ?>
                            class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">Grant Making<svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16px"
                                height="16px"
                                class="ml-1 inline-block"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16"
                                    data-original="#000000" />
                            </svg>
                        </button>
                        <ul
                            class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                            <li class="border-b py-3">
                                <a
                                    href="/annual-grant"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Annual Grant
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/discretionary-grant"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Discretionary Grant
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/partnership"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Partnership
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                        <button
                            onclick="toggleDropdown(this)"
                            <?php if (in_array($page, ['latest-news', 'publications', 'videos', 'galleries'])) echo 'style="color:#222222;"'; ?>
                            class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">Media Center<svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16px"
                                height="16px"
                                class="ml-1 inline-block"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16"
                                    data-original="#000000" />
                            </svg>
                        </button>
                        <ul
                            class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                            <li class="border-b py-3">
                                <a
                                    href="/latest-news"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Latests News
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/publications"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Publications
                                </a>
                            </li>
                            <li class="border-b py-3">
                                <a
                                    href="/videos"
                                    class="hover:text-emerald-600 hover:fill-emerald-600 text-gray-800 text-[15px] flex items-center">
                                    Videos
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                        <a
                            <?php if (in_array($page, ['contact-us'])) echo 'style="color:#222222;"'; ?>
                            href="/contact-us"
                            class="hover:text-emerald-600 text-gray-800 text-[15px] block">Contact Us</a>
                    </li>
                    <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                        <a
                            href="/donate"
                            class="hover:text-emerald-600 text-gray-800 text-[15px] block bg-emerald-600 text-white py-2 px-4 rounded">Donate</a>
                    </li>
                </ul>
            </div>

        </div>
    </header>