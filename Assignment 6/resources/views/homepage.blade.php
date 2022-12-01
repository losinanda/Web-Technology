<x-app-layout>
    <!-- Main Content -->
    <!-- Sambutan -->
    <div class="">
        <section class="bg-white dark:bg-gray-900">
            <div class="gap-16 items-center py-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-8 lg:px-6">
                <div class="font-light text-gray-700 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        KAMI SIAP MELAYANI ANDA
                    </h2>
                    <p class="mb-4 text-justify">
                        Selamat datang di Puskesmas Buleleng I. Puskesmas Buleleng I
                        merupakan unit pelaksana teknis daerah di kabupaten Buleleng yang
                        mewilayahi 1 desa dan 15 kelurahan dari kecamatan Buleleng. Kami
                        siap melayani masyarakat dengan sepenuh hati dan mewujudkan
                        kecamatan Buleleng yang Sehat dan Sejahtera.
                    </p>
                </div>
                <div class="w-[80%] h-[80%]">
                    <img class="w-full rounded-lg" src="img/gambar1.jpg" />
                </div>
            </div>
        </section>
    </div>

    <!-- End of Sambutan -->
    <!-- Services -->
    <div class="container my-20 mx-auto px-4 md:px-12">
        <h2 class="mb-4 text-4xl tracking-tight font-normal text-center text-gray-900 dark:text-white">
            Services
        </h2>
        <div class="flex justify-center flex-wrap -mx-1 lg:-mx-4">
            <div
                class="text-center p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <i class="fa fa-stethoscope fa-3x mb-6"></i>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Poli Umum
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                    Pemeriksaan dan pengobatan penyakit secara umum.
                </p>
            </div>
            <div
                class="text-center p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <i class="fa fa-check fa-3x mb-6 fill-"></i>
                <a href="{{ route('doctor') }}">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        E-Reservation
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                    Reservasi Antrian secara Online.
                </p>
            </div>
            <div
                class="text-center p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <i class="fa fa-flask fa-3x mb-6"></i>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Laboratorium
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                    Laboratorium untuk menunjang pelayanan puskesmas.
                </p>
            </div>
            <div
                class="text-center p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <i class="fa fa-shield fa-3x mb-6"></i>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Imunisasi dan Gizi
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                    Imunisasi dan layanan konsultasi gizi.
                </p>
            </div>
            <div
                class="text-center p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <i class="fa fa-truck fa-3x mb-6"></i>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Ambulans dan UGD
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                    Siap 24 jam melayani pasien gawat darurat.
                </p>
            </div>
        </div>
    </div>
    <!-- End of Services -->

    <!-- Information -->
    <div class="container my-20 mx-auto px-4 md:px-12">
        <h2 class="mb-4 text-4xl tracking-tight font-normal text-center text-gray-900 dark:text-white">
            Informations
        </h2>
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="img/news1.jpeg" />
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                Sosialisasi HIV
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">27/10/22</p>
                    </header>
                </article>
            </div>

            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="img/news3.jpeg" />
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href=""#>
                                Posyandu Remaja
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">26/10/22</p>
                    </header>
                </article>
            </div>

            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="img/news2.jpeg" />
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                Advokasi GERMAS 2022
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">09/10/2022</p>
                    </header>
                </article>
            </div>
        </div>
    </div>

    <!-- End of Information -->
    <!-- End of Main Content -->


</x-app-layout>
