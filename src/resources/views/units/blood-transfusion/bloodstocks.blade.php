@extends('partials.layouts.base')
@section('title')
Unit Donor Darah PMI Kabupaten Bojonegoro
@endsection
@section('navbar')
@include('partials.landings.navbar')
@endsection

@section('body')
<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800 py-8 pt-32">
    <div class="pb-2">
        <h4 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
            Informasi Stok Darah Siap Pakai
        </h4>
        <h4 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
            UDD PMI Bojonegoro
        </h4>
        <h4 class="w-full my-2 text-l font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
            Update {{ str_replace('"', '', $release->datetime) }}
        </h4>
    </div>
    <div class="flex justify-items-stretch justify-center">
        <div class="inline-block shadow rounded-lg overflow-scroll">
            <table class="table-auto">
                <thead class="bg-green-600 divide-y">
                    <tr>
                        <th rowspan="2" class="px-4 py-2  text-white border-solid border-1 border-white">
                            Komponen
                        </th>
                        <th colspan="4" class="px-4 py-2  text-white border-solid border-1 border-white">
                            Golongan
                        </th>
                        <th rowspan="2" class="px-4 py-2  text-white border-solid border-1 border-white">
                            Total
                        </th>
                    </tr>
                    <tr>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            A
                        </th>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            B
                        </th>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            O
                        </th>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            AB
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-double divide-y divide-gray-300">
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  bg-white  text-gray-500 tracking-wide">
                            WB (Whole Blood)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center tracking-wide">
                            {{ $release->wb_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->wb_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $release->wb_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->wb_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->wb_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            PRC (Packed Red Cell)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->prc_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->prc_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $release->prc_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->prc_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->prc_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            TC (Trombocyte)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tc_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tc_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $release->tc_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tc_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tc_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            FFP (Fresh Frozen Plasma)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->ffp_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->ffp_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $release->ffp_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->ffp_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->ffp_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            Total
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tot_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tot_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $release->tot_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tot_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $release->tot_jum }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800 py-8">
    <div class="pb-2">
        <h4 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
            Informasi Stok Darah Sehat
        </h4>
        <h4 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
            UDD PMI Bojonegoro
        </h4>
        <h4 class="w-full my-2 text-l font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
            Update {{ str_replace('"', '', $healthy->datetime) }}
        </h4>
    </div>
    <div class="flex justify-items-stretch justify-center">
        <div class="inline-block shadow rounded-lg overflow-scroll">
            <table class="table-auto">
                <thead class="bg-blue-600 divide-y">
                    <tr>
                        <th rowspan="2" class="px-4 py-2  text-white border-solid border-1 border-white">
                            Komponen
                        </th>
                        <th colspan="4" class="px-4 py-2  text-white border-solid border-1 border-white">
                            Golongan
                        </th>
                        <th rowspan="2" class="px-4 py-2  text-white border-solid border-1 border-white">
                            Total
                        </th>
                    </tr>
                    <tr>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            A
                        </th>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            B
                        </th>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            O
                        </th>
                        <th class="px-4 py-2  text-white border-solid border-1 border-white">
                            AB
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-double divide-y divide-gray-300">
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  bg-white  text-gray-500 tracking-wide">
                            WB (Whole Blood)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center tracking-wide">
                            {{ $healthy->wb_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->wb_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $healthy->wb_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->wb_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->wb_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            PRC (Packed Red Cell)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->prc_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->prc_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $healthy->prc_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->prc_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->prc_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            TC (Trombocyte)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tc_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tc_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $healthy->tc_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tc_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tc_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            FFP (Fresh Frozen Plasma)
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->ffp_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->ffp_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $healthy->ffp_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->ffp_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->ffp_jum }}
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap bg-white">
                        <td class="px-4 py-4  text-gray-500">
                            Total
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tot_a }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tot_b }}
                        </td>
                        <td class="px-4 py-4  text-gray-500  text-center">
                            {{ $healthy->tot_o }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tot_ab }}
                        </td>
                        <td class="px-4 py-4 text-gray-500  text-center">
                            {{ $healthy->tot_jum }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- End block -->
<footer class="bg-red-500 dark:bg-red-700">
    <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
        <div class="text-center">
            Developed by UTD PMI Bojonegoro
        </div>
    </div>
</footer>
@endsection