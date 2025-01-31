<?php

$title = "Latests News";
$page = "latests-news";
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
        <h2 class="sm:text-4xl text-2xl font-bold mb-6">Latest New</h2>
        <p class="sm:text-lg text-base text-center text-gray-200">
            Embark on unforgettable journeys. Book your dream vacation today!
        </p>
    </div>
</div>

<div class="bg-white font-[sans-serif] my-4">
    <div class="max-w-6xl mx-auto">
        <!-- <div class="text-center">
          <h2 class="text-3xl font-extrabold text-gray-800 inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-pink-400 after:rounded-full">LATEST BLOGS</h2>
        </div> -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-16 max-lg:max-w-3xl max-md:max-w-md mx-auto">
            <?php
            if (count($news) > 0) {

                foreach ($news as $key => $row) {
            ?>
                    <div class="bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative top-0 hover:-top-2 transition-all duration-300">
                        <a href="/latest-news/<?=$row['id']?>">
                        <img src="/uploads/news/<?=$row['image']?>" alt="Blog Post 1" class="w-full h-60 object-cover" />
                        <div class="p-6">
                            <span class="text-sm block text-gray-400 mb-2"><?=date("M d, Y", strtotime($row["date"]))?> | by <?=$row['user_name']?></span>
                            <h3 class="text-xl font-bold text-gray-800"><?=$row['title']?></h3>
                            <hr class="my-4" />
                            <p class="text-gray-400 text-sm"><?=substr($row['content'], 0, 150)?>...</p>
                        </div>
                        </a>
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
            <!-- <div class="bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative top-0 hover:-top-2 transition-all duration-300">
                <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 2" class="w-full h-60 object-cover" />
                <div class="p-6">
                    <span class="text-sm block text-gray-400 mb-2">7 JUN 2023 | BY MARK ADAIR</span>
                    <h3 class="text-xl font-bold text-gray-800">Hacks to Supercharge Your Day</h3>
                    <hr class="my-4" />
                    <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                </div>
            </div>
            <div class="bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative top-0 hover:-top-2 transition-all duration-300">
                <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3" class="w-full h-60 object-cover" />
                <div class="p-6">
                    <span class="text-sm block text-gray-400 mb-2">5 OCT 2023 | BY SIMON KONECKI</span>
                    <h3 class="text-xl font-bold text-gray-800">Trends and Predictions</h3>
                    <hr class="my-4" />
                    <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                </div>
            </div> -->
        </div>

    </div>
</div>



<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->