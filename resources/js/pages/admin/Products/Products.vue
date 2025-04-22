<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3'
import FilterBox from '@/components/custom/FilterBox.vue'
import { ref } from 'vue'
import type { PaginationData, SortParams } from '@/types'
import { buildFilterMap } from '@/utils/filterMap'
import SortableHeader from '@/components/custom/SortableHeader.vue'
import Pagination from '@/components/custom/Pagination.vue'

interface Filters {
    searchFields?: string;
    searchKeys?: string;
}

interface Category {
    id: number;
    name: string;
}

interface Products {
    id: number;
    name: string;
    description: string;
    category: Category;
    created_at: Date;
    updated_at: Date;
}

interface Props {
    products: Products[];
    filters: Filters;
    pagination: PaginationData;
    sort: SortParams;
}

const props = defineProps<Props>()

const sortField = ref('id')
const sortDirection = ref('desc')

const filterMap = buildFilterMap(
  props.filters?.searchFields,
  props.filters?.searchKeys,
)
const searchFields = ref([
  { label: 'Name', field: 'name', type: 'text', query: '' },
])

searchFields.value.forEach(fieldObj => {
  fieldObj.query = filterMap[fieldObj.field] ?? ''
})

let form = useForm({
  searchFields: props.filters.searchFields || '',
  searchKeys: props.filters.searchKeys || '',
  page: props.pagination.currentPage || 1,
  sortField: props.sort.sortField || 'id',
  sortDirection: props.sort.sortDirection || 'desc',
})

function handleSearch(payload: Record<string, string>) {

  form.searchFields = Object.keys(payload).join(',')
  form.searchKeys = Object.values(payload).join(',')

  // eslint-disable-next-line no-undef
  form.get(route('admin.product'), {
    preserveState: true,
    preserveScroll: true,
    onError: (errors) => console.error('Form errors:', errors),
  })
}

function handleSort(field: string, direction: string) {

  sortField.value = field
  sortDirection.value = direction

  form.sortField = field
  form.sortDirection = direction

  // eslint-disable-next-line no-undef
  form.get(route('admin.product'), {
    preserveState: true,
    preserveScroll: true,
    onError: (errors) => console.error('Form errors:', errors),
  })
}

function handlePageChange(newPage: number) {
  form.page = newPage

  // eslint-disable-next-line no-undef
  form.get(route('admin.product'), {
    preserveState: true,
    preserveScroll: true,
    onError: (errors) => console.error('Form errors:', errors),
  })
}

function handleInsert() {
  const createForm = useForm({})
  // eslint-disable-next-line no-undef
  createForm.get(route('admin.product.create'), {
    preserveState: false,
    onError: (errors) => console.error('Navigation errors:', errors),
  })
}

function editPage(id: number){
  // eslint-disable-next-line no-undef
  window.location.href = route('page.edit', { product: id })
}

</script>

<template>

    <Head title="Categories" />

    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">

                <div
                    class="relative min-h-[725px] bg-[#435c70] p-[40px] h-[100%] shadow-[1px_1px_5px_0_#455c71] max-h-[450px]">
                    <FilterBox :fields="searchFields" @search="handleSearch" />

                    <div class="max-h-[365px] overflow-y-scroll mt-[10px]">
                        <table class="w-[100%] mb-[1rem] bg-transparent table bg-[#50697f] text-white">
                            <thead class="bg-[#486177] text-white">
                                <tr class="font-semibold">
                                    <th
                                        class="border-b-0 pl-[12px] pr-[12px] border-t py-[15px] px-[25px] align-middle" />

                                    <SortableHeader label="Product Name" field="name" :modelValue="sortField"
                                        :direction="sortDirection" @update:modelValue="val => handleSort(val, 'desc')"
                                        @update:direction="val => handleSort(sortField, val)" />

                                    <SortableHeader label="Category" field="categoryId" :modelValue="sortField"
                                        :direction="sortDirection" @update:modelValue="val => handleSort(val, 'desc')"
                                        @update:direction="val => handleSort(sortField, val)" />

                                    <SortableHeader label="Created At" field="created_at" :modelValue="sortField"
                                        :direction="sortDirection" @update:modelValue="val => handleSort(val, 'desc')"
                                        @update:direction="val => handleSort(sortField, val)" />

                                    <SortableHeader label="Updated At" field="updated_at" :modelValue="sortField"
                                        :direction="sortDirection" @update:modelValue="val => handleSort(val, 'desc')"
                                        @update:direction="val => handleSort(sortField, val)" />

                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle" />
                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle" />
                                </tr>
                            </thead>
                            <tbody v-if="products.length > 0">
                                <!-- rows injected via JavaScript -->
                                <tr v-for="item in products" :key="item.id"
                                    class="transition-all cursor-pointer duration-200 ease-in-out font-semibold bg-[#50697f] hover:bg-[#a0c0de]">

                                    <th
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle ">
                                        <input label="text" type="checkbox"
                                            class="checkbox-checked cursor-pointer appearance-none bg-[#394e64] bg-center rounded-full box-border relative w-6 h-6 transition-all duration-100 ease-linear" />
                                    </th>

                                    <td
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle text-[0.95rem] font-semibold">
                                        {{ item.name }}
                                    </td>
                                    <td
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle text-[0.95rem] font-semibold">
                                        {{ item.category.name }}
                                    </td>
                                    <td
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle text-[0.95rem] font-semibold">
                                        {{ item.created_at }}
                                    </td>
                                    <td
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle text-[0.95rem] font-semibold">
                                        {{ item.updated_at }}
                                    </td>
                                    <td
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle text-[0.95rem] font-semibold">
                                        <a href="#" @click.stop="editPage(item.id)"
                                            class="p-[10px] rounded-full bg-[#394e64] inline-block w-[40px] h-[40px] text-center hover:bg-[#394e64] hover:no-underline text-white">
                                            <i class="fa fa-pencil hover:text-[#6d8ca6] text-[1.1rem] font-normal" />
                                        </a>
                                    </td>
                                    <td
                                        class="pl-[12px] pr-[12px] border-t border-[#415a70] py-[15px] px-[25px] align-middle text-[0.95rem] font-semibold">
                                        <a href="#"
                                            class="p-[10px] rounded-full bg-[#394e64] inline-block w-[40px] h-[40px] text-center hover:bg-[#394e64] hover:no-underline text-white">
                                            <i class="fa fa-trash-alt hover:text-[#6d8ca6] text-[1.1rem] font-normal" />
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="space-x-2 mt-[10px]">
                        <button @click="handleInsert"
                            class="px-4 py-2 bg-[#f5a623] text-white rounded hover:bg-[#6d8ca6] cursor-pointer">
                            Insert
                        </button>
                        <button class="px-4 py-2 bg-[#f5a623] text-white rounded hover:bg-[#6d8ca6]">
                            Delete Selected
                        </button>
                    </div>

                    <Pagination @update:currentPage="handlePageChange" :current-page="props.pagination.currentPage"
                        :total-pages="props.pagination.totalPages" :total-items="props.pagination.totalItems" />

                </div>
            </div>
        </div>
    </div>

</template>
