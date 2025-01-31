<?php

$title = "Health";
$page = "health";
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
        <h2 class="sm:text-4xl text-2xl font-bold mb-6">Board of Trustees</h2>
        <p class="sm:text-lg text-base text-center text-gray-200">
            During the working process, we perform regular fitting with the client because he is the only person who can feel whether a new suit fits or not.
        </p>
    </div>
</div>

<div class="container mx-auto p-4">
    <ul class="flex md:flex-row flex-col  gap-2 w-max-md  p-1">
        <li id="homeTab"
            class="tab font-bold w-full text-center text-sm bg-emerald-600 text-white hover:bg-emerald-600 hover:text-white py-3 px-2 tracking-wide rounded-full cursor-pointer transition-all duration-300">
            Preventable Blindness</li>
        <li id="settingTab"
            class="tab text-gray-500 font-bold w-full text-center text-sm hover:bg-emerald-600 hover:text-white py-3 px-6 tracking-wide rounded-full cursor-pointer transition-all duration-300">
            Mertenal and Child Health </li>
        <li id="profileTab"
            class="tab text-gray-500 font-bold w-full text-center text-sm hover:bg-emerald-600 hover:text-white py-3 px-6 tracking-wide rounded-full cursor-pointer transition-all duration-300">
            Neglected Tropical Diseases</li>

    </ul>

    <div id="homeContent" class="tab-content w-full px-4 block mt-8">
        <!-- <h4 class="text-lg font-bold text-gray-600">Home</h4> -->
        <p class="text-md text-gray-600 mt-4">Blindness remains a major problem of public health significance in Nigeria. The National Blindness and Visual Impairment Survey for Nigeria which was conducted in 2008, estimates that 1.1 million Nigerian adults are blind and an additional 3 million have visual impairment. Overall, 42 out of every 1000 adults aged 40 and above are blind. It is also estimated that 88% of the blindness and visual impairments in Nigerian are due to avoidable causes; most commonly cataract.

            In line with Sustainable Development Goal 3 aimed at promoting good health and wellbeing, the Foundation will support free eye care services as part of its flagship and strategic initiative –“Vision for a Brighter Future”. Resources will be channelled into the provision of comprehensive eye care services; including cataract surgeries, improving and correcting refractive errors in underserved communities in high need states as well as screening, treating eye ailments in public schools and early detection of glaucoma, the silent killer.

            The key objectives of the “Vision for a Brighter Future” intervention include:

            To reduce the prevalence of cataract in targeted states.
            To reduce the burden of preventable blindness by correcting cases of refractive errors in adults in targeted states.
            To screen children in public schools for refractive errors in targeted states.
            To improve the capacity of health workers on primary eye care in targeted states.
            To increase awareness on preventable blindness in targeted states.
        </p>
    </div>
    <div id="settingContent" class="tab-content w-full px-4 mx-auto hidden mt-8">

        <p class="text-md text-gray-600 mt-4">The 5th Multiple Indicators Cluster Survey (MICS-5), conducted in Nigeria in 2016/2017, shows a newborn mortality rate of 37 deaths per 1000 births and an under-five mortality rate of 120 deaths per 1000 births. At these mortality levels, one in every 15 Nigerian children die before reaching the age of 1 year and one in every eight do not survive to their fifth birthday. According to the Nigerian Demographic and Health Survey (NDHS) report for 2013, Nigeria achieved practically no reduction in Maternal Mortality Rate which is reported at 576 deaths per 100,000 live births. Given that these deaths are preventable, urgent action needs to be taken for Nigeria to reach its Sustainable Development Goals 3, Target 3.1 and 3.2.

            In order to contribute in reversing this trend, the Foundation aims to support implementation of evidence-based, innovative, high-quality and sustainable interventions to ensure every mother can experience a healthy pregnancy and childbirth; and every child can thrive to realize their full potential, through its “Healthy Mother, Healthy Child” programme.

            The aim of the Foundation’s “Healthy Mother, Healthy Child” is to contribute to reducing the prevalence of under-five and maternal mortality rates in Nigeria.

            The key objectives of the Foundation’s “Healthy Mother, Healthy Child” include:

            To reduce the prevalence of under-five and maternal mortality in targeted states.
            To reduce the proportion of women and their new-borns without basic and emergency care by skilled birth attendants in targeted states.
            To improve the capacity of health workers to offer maternal and Child Health services through strengthened health systems in targeted states.
        </p>
    </div>
    <div id="profileContent" class="tab-content w-full px-4 hidden mt-8">

        <p class="text-md text-gray-600 mt-4">Neglected tropical diseases (NTDs) are a group of 17 viral, parasitic and bacterial infections that infect more than a billion people globally. Twelve of these are currently targeted in Nigeria, with more than 100 million people affected by or at risk of one or more of these NTDs. There is a global movement to control and eliminate NTDs by the year 2020. The Foundation is committed to this goal.

            Our goal is to reduce morbidity, disability and mortality due to Neglected Tropical Diseases (NTDs) in Taraba State through;

            The control of Onchocerciasis to a point it is no longer a disease of public health importance in Taraba State
            The elimination of Lymphatic Filariasis as a disease of public health importance in Taraba State.
        </p>
    </div>
</div>



<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->