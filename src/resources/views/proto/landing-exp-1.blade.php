<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        PMI Kabupaten Bojonegoro
    </title>
    <meta name="description" content="UDD PMI Bojonegoro" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #ff0900 0%, #ff6c67 100%);
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="#">
                    <img class="object-scale-down h-24 w-72 xs:h-auto xs:w-auto" src={{ asset('assets/image/pmibjn.png') }}
                        alt="">
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex sm:items-center sm:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="#">Unit Markas</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="#">Unit Donor Darah</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black no-underline"
                            href="https://gis.pmibojonegoro.com/">Bank Data
                            Darah</a>
                    </li>
                </ul>
                {{-- <button id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Action
                </button> --}}
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="mx-auto xl:max-w-none xl:ml-0 w-full">
        <div class="pt-24">
            <div class="container">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <p class="mt-5 uppercase tracking-loose w-full">PMI Kabupaten Bojonegoro</p>
                    <h1 class="my-4 text-5xl font-bold leading-tight">
                        Mari Bersinergi dalam Kemanusiaan
                    </h1>
                    <p class="leading-normal text-2xl mb-8">
                        Kemanusiaan tidak mengenal batas negara, agama, dan ras. Kemanusiaan tumbuh dari keajaiban
                        nurani.
                    </p>
                    {{-- <button
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Subscribe
                </button> --}}
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-full md:w-5/5 z-50" src={{ asset('assets/image/hero.png') }} />
                </div>
            </div>
        </div>
        <div class="relative -mt-12 lg:-mt-24">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
        <section class="bg-white border-b py-8">
            <div class="pb-2">
                <h4 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800 b-1">
                    Informasi stok darah siap pakai
                </h4>
                <h4 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800 b-1">
                    UDD PMI Bojonegoro
                </h4>
                <h4 class="w-full my-2 text-l font-bold leading-tight text-center text-gray-800 b-1">
                    Update {{ str_replace('"', '', $stocks->datetime) }}
                </h4>
            </div>
            <div class="flex justify-items-stretch md:justify-center">
                <div class="basis-1/8 flex-shrink-0">
                    <div class="mx-8 sm:mx-1 px-4 sm:px-4 py-4">
                        <div class="inline-block shadow rounded-lg overflow-hidden">
                            <table class="table-auto">
                                <thead class="bg-red-600 divide-y">
                                    <tr>
                                        <th rowspan="2"
                                            class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            Komponen
                                        </th>
                                        <th colspan="4"
                                            class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            Golongan
                                        </th>
                                        <th rowspan="2"
                                            class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            Total
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            A
                                        </th>
                                        <th class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            B
                                        </th>
                                        <th class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            O
                                        </th>
                                        <th class="px-4 py-2 text-lg text-white border-solid border-1 border-white">
                                            AB
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-double divide-y divide-gray-300">
                                    <tr class="whitespace-nowrap bg-white">
                                        <td class="px-4 py-4 text-lg bg-white  text-gray-500 tracking-wide">
                                            WB (Whole Blood)
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center tracking-wide">
                                            {{ $stocks->wb_a }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->wb_b }}
                                        </td>
                                        <td class="px-4 py-4  text-gray-500 text-lg text-center">
                                            {{ $stocks->wb_o }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->wb_ab }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->wb_jum }}
                                        </td>
                                    </tr>
                                    <tr class="whitespace-nowrap bg-white">
                                        <td class="px-4 py-4  text-gray-500">
                                            PRC (Packed Red Cell)
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->prc_a }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->prc_b }}
                                        </td>
                                        <td class="px-4 py-4  text-gray-500 text-lg text-center">
                                            {{ $stocks->prc_o }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->prc_ab }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->prc_jum }}
                                        </td>
                                    </tr>
                                    <tr class="whitespace-nowrap bg-white">
                                        <td class="px-4 py-4  text-gray-500">
                                            TC (Trombocyte)
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tc_a }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tc_b }}
                                        </td>
                                        <td class="px-4 py-4  text-gray-500 text-lg text-center">
                                            {{ $stocks->tc_o }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tc_ab }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tc_jum }}
                                        </td>
                                    </tr>
                                    <tr class="whitespace-nowrap bg-white">
                                        <td class="px-4 py-4  text-gray-500">
                                            FFP (Fresh Frozen Plasma)
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->ffp_a }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->ffp_b }}
                                        </td>
                                        <td class="px-4 py-4  text-gray-500 text-lg text-center">
                                            {{ $stocks->ffp_o }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->ffp_ab }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->ffp_jum }}
                                        </td>
                                    </tr>
                                    <tr class="whitespace-nowrap bg-white">
                                        <td class="px-4 py-4  text-gray-500">
                                            Total
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tot_a }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tot_b }}
                                        </td>
                                        <td class="px-4 py-4  text-gray-500 text-lg text-center">
                                            {{ $stocks->tot_o }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tot_ab }}
                                        </td>
                                        <td class="px-4 py-4 text-gray-500 text-lg text-center">
                                            {{ $stocks->tot_jum }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-2">
                <h4 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800 b-1">
                    Informasi Jadwal Mobile Unit Donor Darah
                </h4>
            </div>
            @if (count((array) $schedules) > 0)
                <div class="flex justify-items-stretch md:justify-center">
                    <div class="basis-1/8 flex-none rounded-lg">
                        <div class="mx-8 sm:mx-4 px-4 sm:px-2 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Nomor</th>
                                            <th
                                                class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Lokasi</th>
                                            <th
                                                class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Jadwal</th>
                                            <th
                                                class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Alamat</th>

                                        </tr>
                                    </thead>

                                    <tbody class="bg-white">
                                        @foreach ($schedules as $schedule)
                                            <tr>
                                                <td
                                                    class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                                    {{ $loop->index + 1 }}
                                                </td>
                                                <td
                                                    class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                                    {{ str_replace('"', '', $schedule->Lokasi) }}
                                                </td>
                                                <td
                                                    class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                                    {{ str_replace('"', '', $schedule->Jadwal) }}
                                                </td>
                                                <td
                                                    class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                                    {{ str_replace('"', '', $schedule->Alamat) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container flex justify-center mx-auto">
                    <div class=" justify-center rounded-lg text-lg bg-red-500 border-2 border-gray-200 shadow px-4">
                        <h4 class="w-full my-2 text-4xl font-bol leading-tight text-center text-gray-100 b-1">
                            Belum Ada Jadwal Hari Ini
                        </h4>
                    </div>
                </div>
            @endif
            {{-- <div class="flex flex-col mt-8 justify-center">
            <div class="py-2 -my-2 justify-center sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="overflow-hidden align-middle justify-center border-b border-gray-200 shadow sm:rounded-lg"> --}}


        </section>
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                    <g class="wave" fill="#f8fafc">
                        <path
                            d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                        </path>
                    </g>
                    <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                        <g
                            transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                            <path
                                d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                opacity="0.100000001"></path>
                            <path
                                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                opacity="0.100000001"></path>
                            <path
                                d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                opacity="0.200000003"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        <section class="container mx-auto text-center py-6 mb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
                Coming Soon
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <h3 class="my-4 text-3xl leading-tight">
                Waiting is fun with sipping a coffee
            </h3>
            {{-- <button
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Action!
        </button> --}}
        </section>

        <!--Footer-->
        <footer class="bg-white">
            <div class="container mx-auto px-8">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-1 mb-6 text-black">
                        <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="#">
                            PMI Kab Bojonegoro
                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Links</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Company</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
                                    Blog</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
