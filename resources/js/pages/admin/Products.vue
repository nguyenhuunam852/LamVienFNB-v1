<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
</script>

<template>

    <Head title="Products" />

    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">

                <div
                    class="relative min-h-[725px] bg-[#435c70] p-[40px] h-[100%] shadow-[1px_1px_5px_0_#455c71] max-h-[450px]">
                    <div class="flex justify-end items-center mb-4 space-x-2">
                        <input type="text" id="filterInput" placeholder="Search category..."
                            class="p-2 rounded border border-gray-300 w-[250px]" />
                        <button onclick="filterTable()"
                            class="bg-[#486177] text-white px-4 py-2 rounded hover:bg-[#3b4f60]">
                            Search
                        </button>
                    </div>

                    <div class="max-h-[365px] overflow-y-scroll">
                        <table class="w-[100%] mb-[1rem] bg-transparent table bg-[#50697f]">
                            <thead class="bg-[#486177] text-white">
                                <tr class="font-semibold">
                                    <th
                                        class="border-b-0 pl-[12px] pr-[12px] border-t py-[15px] px-[25px] align-middle" />
                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">
                                        Category Name</th>
                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">
                                        Description</th>
                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">
                                        Created At</th>
                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">
                                        Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- rows injected via JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <div class="absolute bottom-4 left-0 w-full flex justify-center items-center mt-4 space-x-2">
                        <button onclick="prevPage()"
                            class="bg-[#486177] text-white px-3 py-1 rounded hover:bg-[#3b4f60]">Prev</button>
                        <span id="pageInfo" class="text-white">Page 1</span>
                        <button onclick="nextPage()"
                            class="bg-[#486177] text-white px-3 py-1 rounded hover:bg-[#3b4f60]">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
