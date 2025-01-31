<?php

$title = "Our Team";
$page = "our-team";
include(__DIR__ . "/layouts/_header.php");

?>


<div
    class="relative z-10 font-sans before:absolute before:w-full before:h-full before:inset-0 before:bg-black before:opacity-50 before:z-10">
    <img
        src="/assets/img/iya/IMG-20250123-WA0032.jpg"
        alt="Banner Image"
        class="absolute inset-0 w-full h-full object-cover" />

    <div
        class="min-h-[300px] relative z-50 h-full max-w-6xl mx-auto flex flex-col justify-center items-center text-center text-white p-6">
        <h2 class="sm:text-4xl text-2xl font-bold mb-6">Our Team</h2>
        <p class="sm:text-lg text-base text-center text-gray-200">
            Embark on unforgettable journeys. Book your dream vacation today!
        </p>
    </div>
</div>


<div class="font-[sans-serif] lg:max-w-5xl sm:max-w-2xl max-sm:max-w-sm mx-auto mt-4 mb-4">


    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-6 max-md:justify-center mt-12">
        <div class="grid grid-cols-3 items-center bg-gray-100 p-4 rounded-lg relative">
            <div class="col-span-2 min-h-[190px]">
                <img src="https://readymadeui.com/team-1.webp" class="rounded-lg" />
            </div>

            <div class="bg-white rounded-lg p-4 absolute right-4 shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                <h4 class="text-gray-800 text-sm font-bold">John Doe</h4>
                <p class="text-[10px] text-gray-500 mt-0.5">United State</p>
                <p class="text-gray-800 mt-2 text-xs">Software Engineer</p>
            </div>
        </div>

        <div class="grid grid-cols-3 items-center bg-gray-100 p-4 rounded-lg relative">
            <div class="col-span-2 min-h-[190px]">
                <img src="https://readymadeui.com/team-2.webp" class="rounded-lg" />
            </div>

            <div class="bg-white rounded-lg p-4 absolute right-4 shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                <h4 class="text-gray-800 text-sm font-bold">Mark Adair</h4>
                <p class="text-[10px] text-gray-500 mt-0.5">United State</p>
                <p class="text-gray-800 mt-2 text-xs">Software Engineer</p>
            </div>
        </div>

        <div class="grid grid-cols-3 items-center bg-gray-100 p-4 rounded-lg relative">
            <div class="col-span-2 min-h-[190px]">
                <img src="https://readymadeui.com/team-3.webp" class="rounded-lg" />
            </div>

            <div class="bg-white rounded-lg p-4 absolute right-4 shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                <h4 class="text-gray-800 text-sm font-bold">Simon Konecki</h4>
                <p class="text-[10px] text-gray-500 mt-0.5">United State</p>
                <p class="text-gray-800 mt-2 text-xs">Software Engineer</p>
            </div>
        </div>

        <div class="grid grid-cols-3 items-center bg-gray-100 p-4 rounded-lg relative">
            <div class="col-span-2 min-h-[190px]">
                <img src="https://readymadeui.com/team-4.webp" class="rounded-lg" />
            </div>

            <div class="bg-white rounded-lg p-4 absolute right-4 shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                <h4 class="text-gray-800 text-sm font-bold">Simon Konecki</h4>
                <p class="text-[10px] text-gray-500 mt-0.5">United State</p>
                <p class="text-gray-800 mt-2 text-xs">Software Engineer</p>
            </div>
        </div>

        <div class="grid grid-cols-3 items-center bg-gray-100 p-4 rounded-lg relative">
            <div class="col-span-2 min-h-[190px]">
                <img src="https://readymadeui.com/team-5.webp" class="rounded-lg" />
            </div>

            <div class="bg-white rounded-lg p-4 absolute right-4 shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                <h4 class="text-gray-800 text-sm font-bold">Alen</h4>
                <p class="text-[10px] text-gray-500 mt-0.5">United State</p>
                <p class="text-gray-800 mt-2 text-xs">Software Developer</p>
            </div>
        </div>

        <div class="grid grid-cols-3 items-center bg-gray-100 p-4 rounded-lg relative">
            <div class="col-span-2 min-h-[190px]">
                <img src="https://readymadeui.com/team-6.webp" class="rounded-lg" />
            </div>

            <div class="bg-white rounded-lg p-4 absolute right-4 shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] ">
                <h4 class="text-gray-800 text-sm font-bold">Sophia</h4>
                <p class="text-[10px] text-gray-500 mt-0.5">United State</p>
                <p class="text-gray-800 mt-2 text-xs">Web Designer</p>
            </div>
        </div>
    </div>
</div>




<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->