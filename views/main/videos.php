<?php

$title = "Videos";
$page = "videos";
include(__DIR__ . "/layouts/_header.php");

?>



<div class="bg-white font-[sans-serif] my-4">
    <div class="max-w-6xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-pink-400 after:rounded-full">VIDEOS</h2>
        </div>

        <?php
        if (count($videos) > 0) {
        ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-16 mb-16 max-lg:max-w-3xl max-md:max-w-md mx-auto">
                <?php
                foreach ($videos as $key => $g) {
                ?>
                    <div class="bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative top-0 hover:-top-2 transition-all duration-300">
                        <iframe class="w-full h-60 object-cover" loading="lazy" src="<?= $g['link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" name="fitvid0"></iframe>
                        <!-- <img src="/assets/img/iya/IMG-20250123-WA0030.jpg" alt="Blog Post 1" class="w-full h-60 object-cover" /> -->
                        <div class="p-6">
                            <span class="text-sm block text-gray-400 mb-2"><?= date("M d, Y", strtotime($g["created_at"])) ?> </span>
                            <!-- | BY JOHN DOE -->
                            <h3 class="text-xl font-bold text-gray-800"><?= $g['description'] ?></h3>
                            <hr class="my-4" />
                            <!-- <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p> -->
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        <?php
        } else {
        ?>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4 mt-16 mb-16 max-lg:max-w-3xl max-md:max-w-md mx-auto">
                <div class="text-center">
                    <p class="text-gray-500">No video is published</p>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- <div class="flex justify-right mt-8">
            <nav aria-label="Page navigation">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Next</a>
                    </li>
                </ul>
            </nav>
        </div> -->
    </div>
</div>



<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->