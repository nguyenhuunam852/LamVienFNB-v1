<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Products" />

    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
                <div class="min-h-[725px] bg-[#435c70] p-[40px] h-[100%] shadow-[1px_1px_5px_0_#455c71] max-h-[450px]">
                    <div class="max-h-[465px] mb-[15px] overflow-y-scroll">
                        <table class="w-[100%] mb-[1rem] bg-transparent table">
                            <thead class="bg-[#486177] text-white">
                                <tr class="font-semibold">
                                    <th scope="col" class="border-b-0 pl-[12px] pr-[12px] border-t border-[#486177] py-[15px] px-[25px] align-middle"/>
                                    <th scope="col" class="border-b-0 pl-[12px] pr-[12px] border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">Category Name</th>
                                    <th scope="col" class="border-b-0 pl-[12px] pr-[12px] border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">Description</th>
                                    <th scope="col" class="border-b-0 pl-[12px] pr-[12px] border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">Created At</th>
                                    <th scope="col" class="border-b-0 pl-[12px] pr-[12px] border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">Updated At</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
