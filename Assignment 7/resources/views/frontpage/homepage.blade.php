<x-frontpage>
    {{-- <x-slot name="header"> --}}
    {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> --}}
    {{-- {{ __('Dashboard') }} --}}
    {{-- </h2> --}}
    {{-- </x-slot> --}}

    <div class="w-full bg-cover bg-center"
        style="background-position: top; height:24rem; background-image: url('https://3.bp.blogspot.com/-cIoe3CAerjc/WOV2qHvzC4I/AAAAAAAATAg/noszJrFPAlIhrRIiOnTeK8AhpJ-2OVcXQCLcB/s1600/IMG_5173.JPG');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <div class="py-2 text-white text-3xl font-bold uppercase sm:text-4xl md:text-6xl">Puskesmas Buleleng I
                </div>
                <div class="py-4 text-white text-xl font-light uppercase sm:text-2xl md:text-3xl">Kabupaten Buleleng
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <section id="profiles" class="pt-6text-center text-gray-500">
            <h3 class="font-bold pt-8 pb-6 text-center text-2xl md:text-4xl text-gray-800">Profiles</h3>
            <div class="container mx-auto px-4 relative">
                {{-- <div class="-mx-4 flex flex-wrap items-center my-5">
                    <div class="mx-auto px-4 w-full md:w-10/12 lg:w-8/12 xl:w-7/12 ">
                    </div>
                </div> --}}
                <div class="mt-3 flex justify-center items-center">
                    <!-- Start of component -->
                    <div class="max-w-xl bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg">
                        <div id="header"
                            class="flex flex-col justify-center sm:flex-row sm:justify-start items-center mb-4">
                            <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300"
                                src="data:image/jpeg;base64,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" />
                            <div id="header-text" class="leading-5 ml-6 sm">
                                <h4 id="name" class="text-xl font-semibold">Dr. I Gede Purnamawan</h4>
                                <h5 id="job" class="font-semibold text-sky-500">Head of Puskesmas Buleleng I</h5>
                            </div>
                        </div>
                        <div id="quote">
                            <q class="italic text-gray-600">Welcome to the official website of Puskesmas Buleleng I.
                                This
                                website was created as a form of our commitment to provide information services and
                                public
                                disclosure.</q>
                        </div>
                    </div>
                    <!-- End of component -->
                </div>
                <div class="flex flex-wrap -mx-4 my-10 items-center">
                    <div class="mx-auto px-4 w-full lg:w-11/12 xl:w-8/12">
                        <div class="-mx-2 flex flex-wrap">
                            <div class="p-2 w-full sm:w-4/12">
                                <div>
                                    <h2 class="font-bold mb-3 text-5xl text-sky-500 xl:text-6xl">10<sup>+</sup></h2>
                                    <h3 class="fs-6 mb-0">More than 10 years of experience and establishment</h3>
                                </div>
                            </div>
                            <div class="p-2 w-full sm:w-4/12">
                                <div>
                                    <h2 class="font-bold mb-3 text-5xl text-sky-500 xl:text-6xl">30<sup>+</sup></h2>
                                    <h3 class="fs-6 mb-0">Over 30 experienced medical professionals for all your need
                                    </h3>
                                </div>
                            </div>
                            <div class="p-2 w-full sm:w-4/12">
                                <div>
                                    <h2 class="font-bold mb-3 text-5xl text-sky-500 xl:text-6xl">8<sup>+</sup></h2>
                                    <h3 class="fs-6 mb-0">Growing number for healthcare services under one roof</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-[15%] mx-auto my-5 block h-1 bg-gradient-to-r from-cyan-500 to-blue-500 " />
        <section id="services">
            <h3 class="text-center font-bold mb-6 text-2xl md:text-4xl text-gray-800">Services</h3>
            <div class="flex flex-wrap -mx-4 px-6 pb-4 justify-center">
                <div class="pb-4 pt-12 px-4 w-full sm:w-6/12 lg:w-4/12">
                    <div class="border pb-6 pt-2 px-6 rounded">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                            viewBox="0 0 512 512" xml:space="preserve" width="7rem" height="7rem"
                            class="-mt-12 mb-4 rounded-xl">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 122.88 112.48" style="enable-background:new 0 0 122.88 112.48"
                                xml:space="preserve">
                                <style type="text/css">
                                    <![CDATA[
                                    .st_0 {
                                        fill: #262626;
                                    }

                                    .st_1 {
                                        fill: #F86464;
                                    }

                                    .st_3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #8BBCDB;
                                    }

                                    .st_2 {
                                        fill: #61C4F2;
                                    }

                                    .st_4 {
                                        fill: #324768;
                                    }

                                    .st_5 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FFFFFF;
                                    }
                                    ]]>
                                </style>
                                <g>
                                    <path class="st_4"
                                        d="M84.94,56.56h16.2c1.26,0,2.29,1.02,2.29,2.29v11.78c0,0.45-0.01,0.26-0.02,0.84c-0.01,0.47-0.01,0.73,0,0.77 c0.02,0.06,0.2,0.35,0.61,0.97l16.95,26.07l0.1,0.14c1.26,2.02,1.85,4.06,1.8,5.88c-0.03,1.15-0.29,2.22-0.8,3.15 c-0.52,0.97-1.28,1.79-2.27,2.4c-1.22,0.76-2.79,1.19-4.66,1.18l-0.17,0.01h-40.1c-0.83,0-0.97,0-1.09,0 c-2.81,0.05-5.5,0.1-8.1-2.18c-1.47-1.29-2.32-3.02-2.3-5.08c0.01-1.69,0.62-3.54,2-5.48c5.56-8.7,11.65-17.65,16.91-26.47 c0.27-0.42,0.36-0.51,0.38-0.56c0.01-0.05-0.02-0.11-0.02-0.41l0-0.61l0.01-12.22c-0.01-0.07-0.01-0.13-0.01-0.2 C82.65,57.58,83.68,56.56,84.94,56.56L84.94,56.56z" />
                                    <path class="st_5"
                                        d="M101.14,58.85h-16.2l-0.01,12.42c0,1.77,0.14,1.48-0.81,2.97l-16.87,26.4c-2.28,3.2-1.91,5.87-0.04,7.51 c2.24,1.98,4.92,1.61,7.68,1.61h40.1c5.5,0.12,7.12-4.35,4.15-9.13l-16.87-25.93c-1.32-2.03-1.13-1.63-1.13-4.06V58.85 L101.14,58.85z" />
                                    <path class="st_3"
                                        d="M72.69,92.08l-5.47,8.56c-2.28,3.2-1.91,5.87-0.04,7.51c2.24,1.98,4.92,1.61,7.68,1.61h40.1 c5.5,0.12,7.12-4.35,4.15-9.13l-5.56-8.55H72.69L72.69,92.08z" />
                                    <path class="st_0"
                                        d="M80.16,80.65c-0.61,0-1.1-0.49-1.1-1.1s0.49-1.1,1.1-1.1h4.33c0.61,0,1.1,0.49,1.1,1.1s-0.49,1.1-1.1,1.1 H80.16L80.16,80.65z" />
                                    <path class="st_0"
                                        d="M77.17,85.44c-0.61,0-1.1-0.49-1.1-1.1s0.49-1.1,1.1-1.1h5.54c0.61,0,1.1,0.49,1.1,1.1s-0.49,1.1-1.1,1.1 H77.17L77.17,85.44z" />
                                    <path class="st_4"
                                        d="M100.41,98.57c1.35,0,2.57,0.55,3.46,1.43c0.88,0.89,1.43,2.11,1.43,3.46s-0.55,2.57-1.43,3.46 s-2.11,1.43-3.46,1.43c-1.34,0-2.57-0.55-3.45-1.44l0,0c-0.88-0.88-1.43-2.11-1.43-3.46s0.55-2.57,1.43-3.46 C97.84,99.12,99.06,98.57,100.41,98.57L100.41,98.57z" />
                                    <path class="st_3"
                                        d="M100.41,100.03c1.89,0,3.42,1.53,3.42,3.42s-1.53,3.42-3.42,3.42c-1.89,0-3.42-1.53-3.42-3.42 S98.52,100.03,100.41,100.03L100.41,100.03z" />
                                    <path class="st_4"
                                        d="M112.04,98.52c0.77,0,1.46,0.31,1.96,0.81s0.81,1.2,0.81,1.96s-0.31,1.46-0.81,1.96 c-0.5,0.5-1.2,0.81-1.96,0.81s-1.46-0.31-1.96-0.81c-0.5-0.5-0.81-1.2-0.81-1.96s0.31-1.46,0.81-1.96 C110.58,98.83,111.27,98.52,112.04,98.52L112.04,98.52z" />
                                    <path class="st_3"
                                        d="M112.04,99.98c0.72,0,1.31,0.59,1.31,1.31s-0.59,1.31-1.31,1.31c-0.72,0-1.31-0.59-1.31-1.31 S111.32,99.98,112.04,99.98L112.04,99.98z" />
                                    <path class="st_4"
                                        d="M101.74,86.16c1.06,0,2.02,0.43,2.72,1.13l0.09,0.1c0.64,0.69,1.04,1.61,1.04,2.62c0,1.06-0.43,2.02-1.13,2.71 v0c-0.7,0.7-1.66,1.13-2.72,1.13c-1.06,0-2.02-0.43-2.72-1.13c-0.7-0.69-1.13-1.66-1.13-2.72s0.43-2.02,1.13-2.72 S100.68,86.16,101.74,86.16L101.74,86.16z" />
                                    <path class="st_3"
                                        d="M101.74,87.62c1.31,0,2.38,1.06,2.38,2.38s-1.06,2.38-2.38,2.38s-2.38-1.06-2.38-2.38 S100.43,87.62,101.74,87.62L101.74,87.62z" />
                                    <path class="st_4"
                                        d="M92.09,77.23c0.75,0,1.43,0.31,1.92,0.8l0.01,0.01c0.49,0.49,0.8,1.17,0.8,1.92c0,0.75-0.31,1.43-0.8,1.92 l-0.01,0c-0.49,0.49-1.17,0.8-1.92,0.8s-1.43-0.31-1.92-0.8l-0.01,0c-0.49-0.49-0.8-1.18-0.8-1.92s0.31-1.43,0.8-1.92l0.01-0.01 C90.66,77.54,91.34,77.23,92.09,77.23L92.09,77.23z" />
                                    <path class="st_3"
                                        d="M92.09,78.7c0.7,0,1.26,0.57,1.26,1.26s-0.57,1.26-1.26,1.26s-1.26-0.57-1.26-1.26S91.39,78.7,92.09,78.7 L92.09,78.7z" />
                                    <path class="st_4"
                                        d="M91.85,86.3c0.85,0,1.62,0.34,2.17,0.9l0.1,0.11c0.5,0.55,0.8,1.27,0.8,2.07c0,0.85-0.34,1.62-0.9,2.17 l-0.11,0.1c-0.55,0.5-1.27,0.8-2.06,0.8c-0.84,0-1.61-0.35-2.17-0.9l0,0c-0.56-0.56-0.9-1.33-0.9-2.17c0-0.84,0.34-1.61,0.9-2.17v0 C90.23,86.65,91,86.3,91.85,86.3L91.85,86.3z" />
                                    <path class="st_3"
                                        d="M91.85,87.77c0.89,0,1.61,0.72,1.61,1.61s-0.72,1.61-1.61,1.61s-1.61-0.72-1.61-1.61S90.96,87.77,91.85,87.77 L91.85,87.77z" />
                                    <path class="st_4"
                                        d="M90.73,41.77c1.06,0,2.02,0.43,2.71,1.13h0.01c0.7,0.7,1.13,1.66,1.13,2.72s-0.43,2.02-1.13,2.72 c-0.7,0.69-1.66,1.13-2.72,1.13c-1.06,0-2.02-0.43-2.72-1.13c-0.69-0.7-1.13-1.66-1.13-2.72s0.43-2.02,1.13-2.72l0.1-0.09 C88.8,42.16,89.72,41.77,90.73,41.77L90.73,41.77z" />
                                    <path class="st_3"
                                        d="M90.73,43.23c1.31,0,2.38,1.06,2.38,2.38s-1.07,2.38-2.38,2.38s-2.38-1.06-2.38-2.38S89.42,43.23,90.73,43.23 L90.73,43.23z" />
                                    <path class="st_4"
                                        d="M96.57,35.78c0.85,0,1.62,0.34,2.17,0.9c0.56,0.56,0.9,1.33,0.9,2.17c0,0.85-0.34,1.62-0.9,2.18 s-1.33,0.9-2.17,0.9c-0.85,0-1.62-0.34-2.17-0.9s-0.9-1.33-0.9-2.18c0-0.85,0.34-1.62,0.9-2.17 C94.95,36.13,95.72,35.78,96.57,35.78L96.57,35.78z" />
                                    <path class="st_3"
                                        d="M96.57,37.25c0.89,0,1.61,0.72,1.61,1.61s-0.72,1.61-1.61,1.61s-1.61-0.72-1.61-1.61S95.68,37.25,96.57,37.25 L96.57,37.25z" />
                                    <path class="st_4"
                                        d="M84.39,51.07h17.5c1.39,0,2.65,0.57,3.56,1.48c0.91,0.91,1.48,2.17,1.48,3.56c0,1.39-0.57,2.65-1.48,3.56 c-0.06,0.06-0.11,0.11-0.17,0.16c-0.9,0.82-2.09,1.32-3.38,1.32h-17.5c-1.38,0-2.64-0.57-3.55-1.48l0,0 c-0.91-0.91-1.48-2.17-1.48-3.56c0-1.39,0.57-2.65,1.48-3.56C81.74,51.64,83,51.07,84.39,51.07L84.39,51.07z" />
                                    <path class="st_5"
                                        d="M84.39,53.37h17.5c1.51,0,2.74,1.23,2.74,2.74v0c0,1.51-1.23,2.74-2.74,2.74h-17.5 c-1.51,0-2.74-1.23-2.74-2.74v0C81.65,54.6,82.88,53.37,84.39,53.37L84.39,53.37z" />
                                    <path class="st_4"
                                        d="M47.23,44.29c-3.62,0.33-6.89,1.36-9.6,2.97c-2.59,1.54-4.66,3.62-6.02,6.11c-1.35,2.5-2,5.44-1.75,8.71 c0.25,3.15,1.33,6.61,3.41,10.31c0.81-0.12,1.6-0.2,2.41-0.26c3.85-0.23,7.69,0.36,11.27,1.68c1.39,0.51,2.75,1.13,4.05,1.87h35.36 c0.7,0,1.25,0.56,1.25,1.25v10.42c0,0.7-0.56,1.25-1.25,1.25H62.88c1.34,2.94,2.24,6.21,2.59,9.78h24.76l0,0 c0.31,0,0.62,0.11,0.86,0.35l12.11,11.53c0.28,0.23,0.46,0.58,0.46,0.97c0,0.7-0.56,1.25-1.25,1.25H1.25v-0.01 c-0.28,0-0.56-0.09-0.8-0.28c-0.53-0.44-0.61-1.23-0.17-1.76l9.23-11.25c0.01-3.41,0.68-6.58,1.91-9.52 c1.16-2.79,2.83-5.38,4.9-7.81c-2.48-4.17-4.19-8.28-5.22-12.26C8.9,61.05,9.81,53.1,12.88,46.29c3.06-6.8,8.27-12.45,14.66-16.4 c3.15-1.95,6.6-3.48,10.22-4.54l-0.79-1.57c-0.02-0.04-0.05-0.07-0.06-0.12c-0.3-0.62-0.04-1.37,0.59-1.68l1.52-0.72l-3.64-7.25 l-2.18,1.14c-0.04,0.03-0.08,0.05-0.12,0.06c-0.62,0.3-1.37,0.05-1.67-0.58l-3.07-6.3l0,0c-0.29-0.6-0.06-1.34,0.54-1.66l12.36-6.5 c0.03-0.02,0.05-0.03,0.07-0.05c0.61-0.31,1.37-0.06,1.68,0.55l3.2,6.28l0,0c0.31,0.61,0.07,1.35-0.54,1.67L44.01,9.5l3.94,7.5 l1.76-0.84l0,0c0.6-0.29,1.34-0.05,1.65,0.55l15.42,29.47l1.5-0.8c0.61-0.32,1.37-0.09,1.69,0.52l3.44,6.54l0,0l0.01,0.01 c0.32,0.61,0.07,1.37-0.54,1.68l-18.26,9.45l-0.04,0.02c-0.62,0.3-1.37,0.04-1.67-0.59l-3.11-6.43c-0.3-0.6-0.06-1.35,0.54-1.67 l1.74-0.92L47.23,44.29L47.23,44.29L47.23,44.29z" />
                                    <path class="st_1"
                                        d="M64.53,100.89c-0.05,0.01-0.1,0.02-0.15,0.02c-0.1,0.01-0.2,0-0.29-0.02H11.35l-7.45,9.09h95.37l-9.55-9.09 H64.53L64.53,100.89L64.53,100.89z" />
                                    <path class="st_1"
                                        d="M18.91,82.67c-0.04,0.06-0.07,0.11-0.12,0.16l0,0c-2.17,2.43-3.9,5.01-5.06,7.8c-1.01,2.42-1.6,4.99-1.7,7.75 h50.92c-0.72-6.94-3.74-12.62-8-16.7c-2.57-2.45-5.6-4.32-8.86-5.52c-3.26-1.2-6.75-1.74-10.25-1.53 C29.85,74.99,23.84,77.54,18.91,82.67L18.91,82.67L18.91,82.67z" />
                                    <path class="st_2"
                                        d="M54.73,78.18c0.67,0.53,1.32,1.09,1.94,1.68c1.89,1.79,3.54,3.88,4.91,6.22l23.52,0v-7.91H54.73L54.73,78.18 L54.73,78.18z" />
                                    <polygon class="st_2"
                                        points="41.28,20.19 41.43,20.12 45.66,18.02 41.82,10.72 39,12.12 37.6,12.85 41.28,20.19 41.28,20.19" />
                                    <rect x="54.62" y="63.57" width="0" height="0" />
                                    <path class="st_2"
                                        d="M54.29,52.81l0.85-0.45l9.42-5.02L49.7,18.96l-7.49,3.57L41.27,23l0,0c-0.06,0.03-0.12,0.06-0.18,0.07 l-1.35,0.65L54.29,52.81L54.29,52.81L54.29,52.81z" />
                                    <polygon class="st_2"
                                        points="70.61,52.5 68.34,48.2 55.06,55.24 54.33,55.62 54.33,55.62 54.3,55.64 54.26,55.66 52.57,56.56 54.6,60.76 70.61,52.5 70.61,52.5" />
                                    <path class="st_2"
                                        d="M38.89,27.62c-3.56,0.99-6.95,2.48-10.04,4.39c-5.98,3.69-10.84,8.97-13.69,15.3 c-2.85,6.33-3.69,13.71-1.64,21.66c0.92,3.55,2.42,7.23,4.58,10.98c3.8-3.63,8.13-5.92,12.6-7.05c-2.01-3.76-3.08-7.34-3.34-10.64 c-0.29-3.77,0.46-7.18,2.04-10.09c1.57-2.9,3.97-5.3,6.95-7.08c2.77-1.65,6.07-2.75,9.68-3.2L38.89,27.62L38.89,27.62L38.89,27.62z" />
                                    <path class="st_2"
                                        d="M43.41,7.01l-2.07-4.05L31.12,8.34l1.98,4.05l1.91-1c0.1-0.1,0.21-0.18,0.34-0.25l2.69-1.34L43.41,7.01 L43.41,7.01L43.41,7.01z" />
                                </g>
                            </svg>
                        </svg>
                        <h3 class="font-bold mb-4 text-md md:text-2xl text-gray-900"><a href="#">Laboratory</a>
                        </h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque.
                        </p>
                    </div>
                </div>
                <div class="pb-4 pt-12 px-4 w-full sm:w-6/12 lg:w-4/12">
                    <div class="border pb-6 pt-2 px-6 rounded">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                            viewBox="0 0 512 512" xml:space="preserve" width="7rem" height="7rem"
                            class="-mt-12 mb-4 rounded-xl">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 122.18 108.61">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #01b5e6;
                                        }

                                        .cls-1,
                                        .cls-2,
                                        .cls-3,
                                        .cls-4,
                                        .cls-5 {
                                            fill-rule: evenodd;
                                        }

                                        .cls-2 {
                                            fill: #d92d27;
                                        }

                                        .cls-3 {
                                            fill: #de5149;
                                        }

                                        .cls-4 {
                                            fill: #fccb64;
                                        }

                                        .cls-5 {
                                            fill: #fcd582;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M118.19,33.5A16.34,16.34,0,0,1,94.93,56.37L118.19,33.5Z" />
                                <path class="cls-1"
                                    d="M90.05,40a16.35,16.35,0,0,1,26.26-8.32L93.11,54.45A16.36,16.36,0,0,1,90.05,40Z" />
                                <path class="cls-1"
                                    d="M75.1,88a16.35,16.35,0,0,1,26.26-8.32l-23.19,22.8A16.32,16.32,0,0,1,75.1,88Z" />
                                <path class="cls-2"
                                    d="M53.65,11.94A16.16,16.16,0,0,1,73.39.55h0A16.16,16.16,0,0,1,84.78,20.29c-2.52,9.42-5,18.79-7.58,28.17L62.76,44.59V38.65A9.45,9.45,0,0,0,60,32l0,0a9.48,9.48,0,0,0-6.69-2.78h-4.2q2.28-8.58,4.59-17.21Z" />
                                <path class="cls-3"
                                    d="M58.25,4.33A16.21,16.21,0,0,1,65.79.38L57.08,30a9.41,9.41,0,0,0-3.82-.81H49.12l5.44-18.42h0a15.78,15.78,0,0,1,3.69-6.4Z" />
                                <path class="cls-4"
                                    d="M74.42,52.6Q71.07,65,67.76,77.36h0A16.09,16.09,0,0,1,48.11,88.7h0A16.09,16.09,0,0,1,37,78a9.63,9.63,0,0,0,3.21-2.11l0,0A9.48,9.48,0,0,0,43,69.19V58.94H53.26A9.45,9.45,0,0,0,60,56.15l0,0a9.5,9.5,0,0,0,2.79-6.65L74.42,52.6Z" />
                                <path class="cls-5"
                                    d="M37.47,77.81a9.44,9.44,0,0,0,2.72-1.9l0,0A9.48,9.48,0,0,0,43,69.19V58.94h5.55L41.09,84.28a15.71,15.71,0,0,1-3.62-6.47Z" />
                                <path class="cls-1" d="M103.24,81.57A16.34,16.34,0,0,1,80,104.44l23.26-22.87Z" />
                                <path class="cls-2"
                                    d="M22.57,15.93H33.65a3.79,3.79,0,0,1,3.77,3.77v15h15a3.78,3.78,0,0,1,3.77,3.76V49.58a3.79,3.79,0,0,1-3.77,3.77h-15v15a3.79,3.79,0,0,1-3.77,3.77H22.57a3.79,3.79,0,0,1-3.77-3.77v-15h-15A3.79,3.79,0,0,1,0,49.58V38.5a3.79,3.79,0,0,1,3.77-3.77h15v-15a3.78,3.78,0,0,1,3.76-3.77Z" />
                            </svg>
                        </svg>
                        <h3 class="font-bold mb-4 text-md md:text-2xl text-gray-900"><a href="#">E-Medicine</a>
                        </h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque.
                        </p>
                    </div>
                </div>
                <div class="pb-4 pt-12 px-4 w-full sm:w-6/12 lg:w-4/12">
                    <div class="border pb-6 pt-2 px-6 rounded">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                            viewBox="0 0 512 512" xml:space="preserve" width="7rem" height="7rem"
                            class="-mt-12 mb-4 rounded-xl">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 122.88 120.1" style="enable-background:new 0 0 122.88 120.1"
                                xml:space="preserve">
                                <style type="text/css">
                                    <![CDATA[
                                    .st11 {
                                        fill: #393939;
                                    }

                                    .st12 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #6BBE66;
                                    }
                                    ]]>
                                </style>
                                <g>
                                    <path class="st11"
                                        d="M69.43,4.04c0-2.22,2.19-4.04,4.92-4.04s4.92,1.8,4.92,4.04V21.7c0,2.22-2.19,4.04-4.92,4.04 s-4.92-1.8-4.92-4.04V4.04L69.43,4.04L69.43,4.04z M13.41,57.17c-0.28,0-0.53-1.23-0.53-2.73s0.22-2.72,0.53-2.72h13.44 c0.28,0,0.53,1.23,0.53,2.72c0,1.5-0.22,2.73-0.53,2.73H13.41L13.41,57.17L13.41,57.17z M34.82,57.17c-0.28,0-0.53-1.23-0.53-2.73 s0.22-2.72,0.53-2.72h13.44c0.28,0,0.53,1.23,0.53,2.72c0,1.5-0.22,2.73-0.53,2.73H34.82L34.82,57.17L34.82,57.17z M56.24,57.17 c-0.28,0-0.53-1.23-0.53-2.73s0.22-2.72,0.53-2.72h13.44c0.28,0,0.53,1.22,0.53,2.71c-1.35,0.84-2.64,1.75-3.88,2.74H56.24 L56.24,57.17L56.24,57.17z M13.44,72.8c-0.28,0-0.53-1.23-0.53-2.73c0-1.5,0.22-2.73,0.53-2.73h13.44c0.28,0,0.53,1.23,0.53,2.73 c0,1.51-0.22,2.73-0.53,2.73H13.44L13.44,72.8L13.44,72.8z M34.85,72.8c-0.28,0-0.53-1.23-0.53-2.73c0-1.5,0.22-2.73,0.53-2.73 h13.44c0.28,0,0.53,1.23,0.53,2.73c0,1.51-0.22,2.73-0.53,2.73H34.85L34.85,72.8L34.85,72.8z M13.46,88.43 c-0.28,0-0.53-1.23-0.53-2.73c0-1.51,0.22-2.73,0.53-2.73H26.9c0.28,0,0.53,1.23,0.53,2.73c0,1.5-0.22,2.73-0.53,2.73H13.46 L13.46,88.43L13.46,88.43z M34.88,88.43c-0.28,0-0.53-1.23-0.53-2.73c0-1.51,0.22-2.73,0.53-2.73h13.44c0.28,0,0.53,1.23,0.53,2.73 c0,1.5-0.22,2.73-0.53,2.73H34.88L34.88,88.43L34.88,88.43z M25.21,4.04C25.21,1.81,27.4,0,30.13,0c2.73,0,4.92,1.8,4.92,4.04V21.7 c0,2.22-2.2,4.04-4.92,4.04c-2.73,0-4.92-1.8-4.92-4.04V4.04L25.21,4.04L25.21,4.04z M5.42,38.61h93.77V18.28 c0-0.7-0.28-1.31-0.73-1.75c-0.45-0.45-1.09-0.73-1.75-0.73h-8.99c-1.51,0-2.73-1.23-2.73-2.73c0-1.5,1.22-2.73,2.73-2.73h8.99 c2.2,0,4.18,0.89,5.62,2.33c1.45,1.45,2.33,3.42,2.33,5.62v32.28c-1.79-0.62-3.64-1.12-5.53-1.49v-5.04h0.06H5.42V96.7 c0,0.7,0.28,1.31,0.73,1.75c0.45,0.45,1.09,0.73,1.75,0.73h44.56c0.51,1.89,1.15,3.74,1.91,5.51H7.95c-2.19,0-4.18-0.89-5.62-2.33 C0.89,100.92,0,98.95,0,96.75V18.3c0-2.19,0.89-4.18,2.33-5.62c1.45-1.45,3.42-2.33,5.62-2.33h9.6c1.5,0,2.73,1.23,2.73,2.73 s-1.23,2.73-2.73,2.73h-9.6c-0.7,0-1.31,0.28-1.75,0.73c-0.45,0.45-0.73,1.09-0.73,1.75v20.33L5.42,38.61L5.42,38.61L5.42,38.61z M42.93,15.8c-1.5,0-2.73-1.23-2.73-2.73c0-1.5,1.23-2.73,2.73-2.73h18.3c1.51,0,2.73,1.23,2.73,2.73c0,1.51-1.23,2.73-2.73,2.73 H42.93L42.93,15.8L42.93,15.8z" />
                                    <path class="st12"
                                        d="M91.09,56.53c8.78,0,16.73,3.56,22.48,9.31c5.74,5.76,9.3,13.71,9.3,22.48s-3.56,16.73-9.3,22.48 c-5.76,5.75-13.71,9.31-22.48,9.31s-16.73-3.56-22.48-9.31c-5.75-5.76-9.31-13.71-9.31-22.48c0-8.77,3.56-16.73,9.31-22.48 C74.36,60.09,82.31,56.53,91.09,56.53L91.09,56.53z M77.09,91.7c-0.15-0.16-0.28-0.33-0.39-0.51c-0.12-0.18-0.21-0.37-0.3-0.57 c-0.28-0.66-0.35-1.36-0.23-2.04c0.12-0.67,0.42-1.31,0.9-1.83l0.18-0.18c1.19-1.13,2.99-1.34,4.4-0.49 c0.2,0.12,0.39,0.26,0.57,0.43l0.02,0.02c1,0.96,2.69,2.53,3.8,3.51l0.95,0.85l11.66-12.23c0.16-0.17,0.34-0.32,0.54-0.45 c0.2-0.14,0.4-0.25,0.61-0.34c0.21-0.09,0.44-0.17,0.67-0.22c0.23-0.05,0.47-0.08,0.7-0.08h0.01c0.23,0,0.46,0.01,0.69,0.05 c0.23,0.04,0.45,0.1,0.69,0.19c0.22,0.08,0.43,0.19,0.63,0.31c0.19,0.12,0.37,0.26,0.55,0.43l0.08,0.08 c0.16,0.16,0.31,0.34,0.44,0.53c0.13,0.19,0.25,0.4,0.34,0.61c0.1,0.21,0.17,0.44,0.22,0.67c0.05,0.23,0.08,0.46,0.09,0.7v0.12 c0,0.21-0.02,0.42-0.06,0.62c-0.04,0.22-0.1,0.45-0.18,0.66c-0.08,0.22-0.19,0.43-0.31,0.63c-0.12,0.2-0.27,0.38-0.43,0.55 L89.83,98.49c-0.17,0.18-0.34,0.33-0.53,0.46c-0.19,0.14-0.4,0.25-0.61,0.35s-0.44,0.17-0.67,0.23s-0.46,0.09-0.7,0.1l-0.06,0 c-0.22,0-0.44-0.01-0.64-0.04l-0.05-0.01c-0.21-0.04-0.42-0.09-0.62-0.16c-0.22-0.08-0.43-0.18-0.63-0.3l-0.03-0.02 c-0.19-0.12-0.37-0.25-0.54-0.39l-0.03-0.03c-0.82-0.76-1.71-1.53-2.6-2.31C80.55,95.02,78.39,93.07,77.09,91.7L77.09,91.7 L77.09,91.7L77.09,91.7z" />
                                </g>
                            </svg>
                        </svg>
                        <h3 class="font-bold mb-4 text-md md:text-2xl text-gray-900"><a
                                href="{{ route('list_doctor') }}">E-Reservation</a>
                        </h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque.
                        </p>
                    </div>
                </div>
                <div class="pb-4 pt-12 px-4 w-full sm:w-6/12 lg:w-4/12">
                    <div class="border pb-6 pt-2 px-6 rounded">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                            viewBox="0 0 512 512" xml:space="preserve" width="7rem" height="7rem"
                            class="-mt-12 mb-4 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 418.89">
                                <path
                                    d="M29.06 67.65H160.3V20.57C160.3 9.24 169.54 0 180.87 0h150.26c11.33 0 20.57 9.24 20.57 20.57v47.08h131.24c16 0 29.06 13.06 29.06 29.07v293.1c0 8.01-3.27 15.28-8.53 20.54s-12.53 8.53-20.53 8.53H29.06c-8 0-15.27-3.27-20.53-8.53C3.27 405.1 0 397.83 0 389.82V96.72c0-16.01 13.06-29.07 29.06-29.07zm297.33-44.89H185.61c-1.38 0-2.55 1.16-2.55 2.55v41.96h145.88V25.31c0-1.39-1.17-2.55-2.55-2.55zM22.76 385.09c0 6.05 4.98 11.04 11.04 11.04h444.4c6.06 0 11.04-4.99 11.04-11.04V101.45c0-6.05-4.98-11.04-11.04-11.04H33.8c-6.06 0-11.04 4.99-11.04 11.04v283.64z" />
                                <path fill="#D8453E"
                                    d="M236.92 155.61h38.15c7.13 0 12.96 5.83 12.96 12.96v42.66h42.67c7.12 0 12.95 5.83 12.95 12.96v38.15c0 7.13-5.83 12.96-12.95 12.96h-42.67v42.66c0 7.13-5.83 12.96-12.96 12.96h-38.15c-7.13 0-12.96-5.83-12.96-12.96V275.3H181.3c-7.13 0-12.96-5.83-12.96-12.96v-38.15c0-7.13 5.83-12.96 12.96-12.96h42.66v-42.66c0-7.13 5.83-12.96 12.96-12.96z" />
                            </svg>
                        </svg>
                        <h3 class="font-bold mb-4 text-md md:text-2xl text-gray-900"><a href="#">Clinic</a></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque.
                        </p>
                    </div>
                </div>
                <div class="pb-4 pt-12 px-4 w-full sm:w-6/12 lg:w-4/12">
                    <div class="border pb-6 pt-2 px-6 rounded">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                            viewBox="0 0 512 512" xml:space="preserve" width="7rem" height="7rem"
                            class="-mt-12 mb-4 rounded-xl">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 122.88 102.58" style="enable-background:new 0 0 122.88 102.58"
                                xml:space="preserve">
                                <style type="text/css">
                                    <![CDATA[
                                    .st0 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #EF4136;
                                    }

                                    .st1 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #F0C419;
                                    }

                                    .st2 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FFFFFF;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #393939;
                                    }
                                    ]]>
                                </style>
                                <g>
                                    <path class="st1"
                                        d="M11.61,55.55c1.84,0,3.32,1.49,3.32,3.32s-1.49,3.32-3.32,3.32H3.32C1.49,62.2,0,60.71,0,58.88 s1.49-3.32,3.32-3.32H11.61L11.61,55.55L11.61,55.55z M19.59,32.37c1.58,0.91,2.13,2.93,1.22,4.52c-0.91,1.58-2.93,2.13-4.52,1.22 l-7.17-4.14c-1.58-0.91-2.13-2.93-1.22-4.52c0.91-1.58,2.93-2.13,4.52-1.22L19.59,32.37L19.59,32.37L19.59,32.37z M38.11,16.28 c0.92,1.58,0.38,3.61-1.21,4.53c-1.58,0.92-3.61,0.38-4.53-1.21l-4.14-7.17c-0.92-1.58-0.38-3.61,1.21-4.53 c1.58-0.92,3.61-0.38,4.53,1.21L38.11,16.28L38.11,16.28L38.11,16.28z M106.6,38.11c-1.58,0.91-3.61,0.36-4.52-1.22 c-0.91-1.58-0.36-3.61,1.22-4.52l7.17-4.14c1.58-0.91,3.61-0.36,4.52,1.22c0.91,1.58,0.36,3.61-1.22,4.52L106.6,38.11L106.6,38.11 L106.6,38.11z M90.52,19.6c-0.92,1.58-2.95,2.13-4.53,1.21c-1.58-0.92-2.13-2.95-1.21-4.53l4.14-7.17 c0.92-1.58,2.95-2.13,4.53-1.21s2.13,2.95,1.21,4.53L90.52,19.6L90.52,19.6L90.52,19.6z M67.34,11.61c0,1.84-1.49,3.32-3.32,3.32 c-1.84,0-3.32-1.49-3.32-3.32V3.32C60.7,1.48,62.19,0,64.02,0c1.84,0,3.32,1.49,3.32,3.32V11.61L67.34,11.61L67.34,11.61z M111.28,62.2c-1.84,0-3.32-1.49-3.32-3.32s1.49-3.32,3.32-3.32h8.28c1.84,0,3.32,1.49,3.32,3.32s-1.49,3.32-3.32,3.32H111.28 L111.28,62.2L111.28,62.2z" />
                                    <path class="st0"
                                        d="M59.75,24.77h3.37c16.56,0,30.12,13.55,30.12,30.12v30.54H29.64V54.88C29.63,38.32,43.19,24.77,59.75,24.77 L59.75,24.77L59.75,24.77z" />
                                    <path class="st2"
                                        d="M44.12,75.26h-6.13v-7.98c0-2.23,0-2.47-0.01-2.73c-0.09-8.52-0.17-15.78,6.97-23.21 c2.03-2.11,4.39-3.78,7.03-5.07C45.88,48.4,43.85,61.35,44.12,75.26L44.12,75.26L44.12,75.26z" />
                                    <path class="st3"
                                        d="M24.59,85.24h74.04c3.49,0,6.34,2.85,6.34,6.34v4.66c0,3.49-2.85,6.34-6.34,6.34H24.59 c-3.49,0-6.34-2.85-6.34-6.34v-4.66C18.25,88.09,21.1,85.24,24.59,85.24L24.59,85.24z" />
                                </g>
                            </svg>
                        </svg>
                        <h3 class="font-bold mb-4 text-md md:text-2xl text-gray-900"><a href="#">Emergency
                                Unit</a>
                        </h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-[25%] mx-auto my-5 block h-1 bg-gradient-to-r from-cyan-500 to-blue-500 " />
        <section id="informations" class="bg-white dark:bg-gray-900">
            <h3 class="text-center font-bold mb-12 text-2xl md:text-4xl text-gray-800">Informations</h3>
            <div class="container px-6 pb-12 mx-auto">
                <div class="grid grid-cols-1 gap-8 mt-4 md:mt-8 md:grid-cols-2 xl:grid-cols-3">
                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="{{ asset('assets/news1.jpeg') }}" alt="">

                            <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="{{ asset('assets/admin.png') }}" alt="">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700 dark:text-gray-200">Putu</h1>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Admin 1</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                            Advokasi GERMAS 2022
                        </h1>

                        <hr class="w-32 my-6 text-blue-500">

                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet
                            dolores
                            praesentium, alias nam? Tempore
                        </p>

                        <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read
                            more</a>
                    </div>

                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="{{ asset('assets/news2.jpeg') }}" alt="">

                            <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="{{ asset('assets/admin.png') }}" alt="">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700 dark:text-gray-200">Kadek</h1>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Admin 2</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                            Posyandu Remaja
                        </h1>

                        <hr class="w-32 my-6 text-blue-500">

                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet
                            dolores
                            praesentium, alias nam? Tempore
                        </p>

                        <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read
                            more</a>
                    </div>

                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="{{ asset('assets/news3.jpeg') }}" alt="">

                            <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="{{ asset('assets/admin.png') }}" alt="">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700 dark:text-gray-200">Nyoman</h1>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Admin 3</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                            Sosialisasi HIV
                        </h1>

                        <hr class="w-32 my-6 text-blue-500">

                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet
                            dolores
                            praesentium, alias nam? Tempore
                        </p>

                        <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read
                            more</a>
                    </div>
                </div>
            </div>
        </section>
        <hr class="w-[15%] mx-auto my-5 block h-1 bg-gradient-to-r from-cyan-500 to-blue-500 " />
        {{-- <div class="container my-24 px-6 mx-auto"> --}}
            <section id="about" class="mb-12 text-gray-800">
                <h3 class="text-center font-bold mb-2 text-2xl md:text-4xl text-gray-800">About</h3>
                <div class="container text-gray-800 px-4 md:px-12">
                    <div class="block rounded-lg py-2 md:py-12 px-4 md:px-6">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-4 mb-12">
                            <div class="mb-8 lg:mb-0 text-center mx-auto">
                                <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 496 512">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-10 {
                                                    fill: #1877f2;
                                                }

                                                </defs><path class="cls-1" d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" /></svg></svg><h6 class="font-medium">Jl. Ahmad Yani no.43,
                                                Singaraja</h6></div><div class="mb-12 lg:mb-0 text-center mx-auto"><svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86"><defs><style>.cls-1 {
                                                    fill: #1877f2;
                                                }

                                                .cls-20 {
                                                    fill: #fff;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-10"
                                            d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z" />
                                        <path class="cls-20"
                                            d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z" />
                                    </svg>
                                </svg>
                                <h6 class="font-medium">Puskesmas Buleleng I</h6>
                            </div>
                            <div class=" mb-6 md:mb-0 text-center mx-auto">
                                <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 333333 333333" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd">>
                                    <path
                                        d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-40642 71361h81288c30526 0 55489 24654 55489 54772v81069c0 30125-24963 54771-55488 54771l-81289-1c-30526 0-55492-24646-55492-54771v-81069c0-30117 24966-54771 55492-54771zm40125 43843c29663 0 53734 24072 53734 53735 0 29667-24071 53735-53734 53735-29672 0-53739-24068-53739-53735 0-29663 24068-53735 53739-53735zm0 18150c19643 0 35586 15939 35586 35585 0 19647-15943 35589-35586 35589-19650 0-35590-15943-35590-35589s15940-35585 35590-35585zm51986-25598c4819 0 8726 3907 8726 8721 0 4819-3907 8726-8726 8726-4815 0-8721-3907-8721-8726 0-4815 3907-8721 8721-8721zm-85468-20825h68009c25537 0 46422 20782 46422 46178v68350c0 25395-20885 46174-46422 46174l-68009 1c-25537 0-46426-20778-46426-46174v-68352c0-25395 20889-46177 46426-46177z"
                                        fill="#1877f2" />
                                </svg>
                                </svg>
                                <h6 class="font-medium">Puskesmas Buleleng I</h6>
                            </div>
                            <div class="mb-6 md:mb-0 text-center mx-auto">
                                <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                    </path>
                                </svg>
                                <h6 class="font-medium">(0362) 28145</h6>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center">
                            <div class="grow-0 shrink-0 basis-auto block w-full lg:flex lg:w-full lg:h-full">
                                <div class="map-container-2 w-full h-full">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15799.643664144427!2d115.0882372!3d-8.1105531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4166da85d0592db3!2sPuskesmas%20Buleleng%20I!5e0!3m2!1sen!2sid!4v1670229721653!5m2!1sen!2sid"
                                        class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                                        frameborder="0" allowfullscreen loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {{-- </div> --}}
    </div>
</x-frontpage>
