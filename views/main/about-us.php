<?php

$title = "About Us";
$page = "about-us";
include(__DIR__ . "/layouts/_header.php");

?>


<section class="py-24 relative">
      <div class="w-full max-w-6xl px-4 mx-auto">
        <div class="w-full items-start gap-20 grid lg:grid-cols-2 grid-cols-1">
          <div>
            <img
              class="lg:mx-0 mx-auto w-full h-58 rounded-xl object-cover"
              src="https://pagedone.io/asset/uploads/1717751272.png"
              alt="about Us image"
            />
            <h1 class="mt-4 text-lg font-semibold">
              Iya Abbas Foundation: Fostering Health and Education in Nigeria
            </h1>
            <p class="text-base leading-relaxed opacity-70 mt-5">
              Established in 2019 by the Iya Abbas family, the Iya Abbas
              Foundation is a private, independent philanthropic organization
              dedicated to enhancing the quality of life for Nigerians. Based in
              Adamawa and Abuja, FCT, the foundation supports health and
              education initiatives implemented by local NGOs. The Iya Abbas
              Foundation partners with organizations like Sarauniyah Aid
              Foudation (SAF) to deliver vital services, including free medical
              outreach programs for thousands of underserved individuals. By
              collaborating with committed organizations, the foundation
              continues to make a profound impact on the communities it serves.
            </p>
          </div>
          <div
            class="w-full flex-col justify-start lg:items-start items-center gap-5 inline-flex"
          >
            <!-- Accordion Item 1 -->
            <div class="border-b border-slate-200">
              <button
                onclick="toggleAccordion(1)"
                class="w-full flex justify-between items-center py-3 text-slate-800"
              >
                <span>Mission</span>
                <span
                  id="icon-1"
                  class="text-slate-800 transition-transform duration-300"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
                    />
                  </svg>
                </span>
              </button>
              <div
                id="content-1"
                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
              >
                <div class="pb-5 text-sm text-slate-500">
                  The Iya Abbas Foundation is committed to enhancing the quality
                  of life of Nigerians by supporting initiatives that improve
                  access to health and educational opportunities and
                  entrepreneurship
                </div>
              </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="border-b border-slate-200">
              <button
                onclick="toggleAccordion(2)"
                class="w-full flex justify-between items-center py-2 text-slate-800"
              >
                <span>Vision</span>
                <span
                  id="icon-2"
                  class="text-slate-800 transition-transform duration-300"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
                    />
                  </svg>
                </span>
              </button>
              <div
                id="content-2"
                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
              >
                <div class="pb-5 text-sm text-slate-500">
                  To contribute to building a Nigeria where all citizens have
                  access to affordable quality health care, education and equal
                  opportunities to realize their potential.
                </div>
              </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="border-b border-slate-200">
              <button
                onclick="toggleAccordion(3)"
                class="w-full flex justify-between items-center py-2 text-slate-800"
              >
                <span>Aims and Objectives</span>
                <span
                  id="icon-3"
                  class="text-slate-800 transition-transform duration-300"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
                    />
                  </svg>
                </span>
              </button>
              <div
                id="content-3"
                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
              >
                <div class="pb-5 text-sm text-slate-500">
                  <ul class="list-disc list-outside">
                    <li class="text-gray-500">
                      <span class="text-gray-800 font-semibold"
                        >Empowerment for Growth:</span
                      >
                      Supporting the development of entrepreneurial skills among
                      youths, women, and underprivileged individuals to drive
                      economic progress.
                    </li>
                    <li class="text-gray-500 mt-2">
                      <span class="text-gray-800 font-semibold"
                        >Education for All:</span
                      >
                      Facilitating scholarships for disadvantaged students and
                      encouraging out-of-school children to return to education.
                    </li>
                    <li class="text-gray-500 mt-2">
                      <span class="text-gray-800 font-semibold"
                        >Community Support:</span
                      >
                      Facilitating scholarships for disadvantaged students and
                      encouraging out-of-school children to return to
                      education.Organizing programs to provide care and
                      assistance for orphans, vulnerable children, widows, and
                      other marginalized groups.
                    </li>
                    <li class="text-gray-500 mt-2">
                      <span class="text-gray-800 font-semibold"
                        >Empowering the Vulnerable:</span
                      >
                      Providing training and financial aid for elderly widows
                      and less privileged individuals.
                    </li>
                    <li class="text-gray-500 mt-2">
                      <span class="text-gray-800 font-semibold"
                        >Information Exchange:</span
                      >
                      Promoting collaboration and sharing of knowledge with
                      relevant governmental institutions and NGOs at local and
                      international levels
                    </li>
                    <li class="text-gray-500 mt-2">
                      <span class="text-gray-800 font-semibold"
                        >Educational Endowments:</span
                      >
                      Establishing endowments and scholarships to support
                      students from financially challenged backgrounds
                    </li>
                    <li class="text-gray-500 mt-2">
                      <span class="text-gray-800 font-semibold"
                        >Holistic Assistance:</span
                      >Catering to the diverse needs of women, children, youths,
                      and seniors in the community.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->