<?php

$title = "Partnership";
$page = "partnership";
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
        <h2 class="sm:text-4xl text-2xl font-bold mb-6">
            Partnership
        </h2>
        <p class="sm:text-lg text-base text-center text-gray-200">
            Embark on unforgettable journeys. Book your dream vacation today!
        </p>
    </div>
</div>

<section class="py-24 relative">
    <div class="w-full max-w-6xl px-4 mx-auto">
        <div class="w-full items-start gap-20 grid lg:grid-cols-2 grid-cols-1">
            <div>

                <h1 class="mt-4 text-xl font-semibold">
                    Partnership & Collaboration
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
                class="w-full flex-col justify-start lg:items-start items-center gap-5 inline-flex">
                <h1 class="mt-4 text-xl font-semibold">Our Partnership Categories</h1>
                <!-- Accordion Item 1 -->
                <div class="border-b border-slate-200">
                    <button
                        onclick="toggleAccordion(1)"
                        class="w-full flex justify-between items-center py-3 text-slate-800 active">
                        <span>Resource Partners</span>
                        <span
                            id="icon-1"
                            class="text-slate-800 transition-transform duration-300">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                                class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div
                        id="content-1"
                        style="max-height: 120px;"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            These are institutions or persons that are able, ready and willing to put resources in cash or kind to support project ideas as the basis for collaboration. Resource partners envisaged include persons interested in our work, other Foundations, National and International Development Agencies.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="border-b border-slate-200">
                    <button
                        onclick="toggleAccordion(2)"
                        class="w-full flex justify-between items-center py-2 text-slate-800">
                        <span>Network Partners</span>
                        <span
                            id="icon-2"
                            class="text-slate-800 transition-transform duration-300">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                                class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div
                        id="content-2"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            The primary value in Network partners is in co-creating and amplifying the work of partnerships. These include associations and coalitions that the Foundation belongs to either nationally, regionally or globally. These partners co-contribute to network events and activities. An example in this category is African Philanthropy Forum (APF).
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="border-b border-slate-200">
                    <button
                        onclick="toggleAccordion(3)"
                        class="w-full flex justify-between items-center py-2 text-slate-800">
                        <span>Learning Partners</span>
                        <span
                            id="icon-3"
                            class="text-slate-800 transition-transform duration-300">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                                class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div
                        id="content-3"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            These are partnerships for mutual learning. This type of partnership currently exists between TY Danjuma Foundation and the Foundation Center of New York.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact us -->
<div class="font-[sans-serif]">
    <div class="bg-gradient-to-r from-emerald-700 to-emerald-300 w-full h-60">
        <img src="https://readymadeui.com/cardImg.webp" alt="Banner Image" class="w-full h-full object-cover" />
    </div>

    <div class="-mt-28 mb-6 px-4">
        <div class="mx-auto max-w-6xl shadow-lg p-8 relative bg-white rounded">
            <h2 class="text-xl text-gray-800 font-bold">Partnership</h2>
            <p class="mt-2  "> Thank you for your interest in the work of the Foundation. If you wish to partner with the Iya Abbas Foundation, please complete the form below and we will get back to you</p>

            <form class="mt-8 grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="text-gray-800 text-sm block mb-2">First Name *</label>
                    <input type='text' placeholder='Enter Name'
                        class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:border-emerald-600 outline-none" />
                </div>
                <div>
                    <label class="text-gray-800 text-sm block mb-2">Last Name * </label>
                    <input type='text' placeholder='Last Name'
                        class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:border-emerald-600 outline-none" />
                </div>
                <div>
                    <label class="text-gray-800 text-sm block mb-2">Email *</label>
                    <input type='email' placeholder='Phone No.'
                        class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:border-emerald-600 outline-none" />
                </div>
                <div>
                    <label class="text-gray-800 text-sm block mb-2">Phone Number</label>
                    <input type='number' placeholder='number'
                        class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:border-emerald-600 outline-none" />
                </div>
                <div>
                    <label class="text-gray-800 text-sm block mb-2">Your Organisation</label>
                    <input type='text' placeholder='Organisation'
                        class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:border-emerald-600 outline-none" />
                </div>
                <div>
                    <label class="text-gray-800 text-sm block mb-2">
                        Partnership Category *</label>
                    <select class="w-full rounded py-2.5 px-4 border border-gray-300 text-sm focus:border-emerald-600 outline-none" name="partner" id="partner">
                        <option value="">Resource Partner</option>
                        <option value="">Network Partner</option>
                        <option value="">Learning Partner</option>
                    </select>
                </div>
                <div class="col-span-full">
                    <label class="text-gray-800 text-sm block mb-2">Message</label>
                    <textarea placeholder='Message' rows="6"
                        class="w-full rounded px-4 border border-gray-300 text-sm pt-3 focus:border-emerald-600 outline-none"></textarea>
                </div>
                <div class="flex items-center col-span-full">
                    <input id="checkbox1" type="checkbox"
                        class="w-4 h-4 mr-3 shrink-0" />
                    <label for="checkbox1" class="text-sm text-gray-500">I agree to the <a href="javascript:void(0);" class="underline">Terms and Conditions</a> and <a href="javascript:void(0);" class="underline">Privacy Policy</a></label>
                </div>

                <button type='button'
                    class="text-white w-max bg-emerald-600 hover:bg-emerald-500 tracking-wide rounded text-sm px-4 py-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2 inline" viewBox="0 0 548.244 548.244">
                        <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                    </svg>
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>



<!-- footer start -->
<?php include __DIR__ . "/layouts/_footer.php"; ?>
<!-- footer end -->