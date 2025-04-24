<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import FilterBox from '@/components/custom/FilterBox.vue'
import Pagination from '@/components/custom/Pagination.vue'
import { ref, watch } from 'vue'
import type { PaginationData, SortParams, Filters } from '@/types'
import SortableHeader from '@/components/custom/SortableHeader.vue'
import ConfirmBox from '@/components/custom/ConfirmBox.vue'
import { CrudForm, useCrudHandlers } from '@/composables/useCrudHandlers'
import { buildFilterMap } from '@/utils/filterMap'

interface Categories {
    id: number;
    name: string;
    description: string;
    created_at: Date;
    updated_at: Date;
}

interface Props {
    categories: Categories[];
    filters: Filters;
    pagination: PaginationData;
    sort: SortParams;
}

const props = defineProps<Props>()

const initialForm: CrudForm = ({
  searchFields: props.filters.searchFields || '',
  searchKeys: props.filters.searchKeys || '',
  page: props.pagination.currentPage || 1,
  sortField: props.sort.sortField || 'id',
  sortDirection: props.sort.sortDirection || 'desc',
})

const {
  handleSearch,
  handlePagi,
  handleSort,
  handleAddPage,
  handleUpdatePage,
  handleDelete,
  showDeletePopup,
  toggleDeletePopup,
} = useCrudHandlers('admin.category', initialForm)

const sortField = ref('id')
const sortDirection = ref('desc')

watch([sortField, sortDirection], ([field, direction]) => {
  handleSort(field, direction)
})

const searchFields = ref([
  { label: 'name', field: 'name', type: 'text', query: '' },
])

const filterMap = buildFilterMap(
  props.filters?.searchFields,
  props.filters?.searchKeys,
)

searchFields.value.forEach(fieldObj => {
  fieldObj.query = filterMap[fieldObj.field] ?? ''
})

</script>

<template>

    <Head title="Categories" />

    <ConfirmBox :visible="showDeletePopup" header='do u want to delete this' content="cannot rollaback after submit"
        @close="showDeletePopup = false" @submit="handleDelete()" />

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

                                    <SortableHeader :label="'Category Name'" :field="'name'"
                                        v-model:modelValue="sortField" v-model:direction="sortDirection" />

                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle">
                                        Description</th>

                                    <SortableHeader :label="'Create At'" :field="'created_at'"
                                        v-model:modelValue="sortField" v-model:direction="sortDirection" />

                                    <SortableHeader :label="'Update At'" :field="'updated_at'"
                                        v-model:modelValue="sortField" v-model:direction="sortDirection" />

                                    <th
                                        class="border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle" />
                                </tr>
                            </thead>
                            <tbody v-if="categories.length > 0">
                                <!-- rows injected via JavaScript -->
                                <tr v-for="item in categories" :key="item.id" @click="handleUpdatePage(item.id)"
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
                                        {{ item.description }}
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
                                        <a href="#" @click.stop="toggleDeletePopup(item.id)"
                                            class="p-[10px] rounded-full bg-[#394e64] inline-block w-[40px] h-[40px] text-center hover:bg-[#394e64] hover:no-underline text-white">
                                            <i class="fa fa-trash-alt hover:text-[#6d8ca6] text-[1.1rem] font-normal" />
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="space-x-2 mt-[10px]">
                        <button @click="handleAddPage"
                            class="px-4 py-2 bg-[#f5a623] text-white rounded hover:bg-[#6d8ca6] cursor-pointer">
                            Insert
                        </button>
                        <button class="px-4 py-2 bg-[#f5a623] text-white rounded hover:bg-[#6d8ca6]">
                            Delete Selected
                        </button>
                    </div>
                    <Pagination @update:currentPage="handlePagi" :current-page="props.pagination.currentPage"
                        :total-pages="props.pagination.totalPages" :total-items="props.pagination.totalItems" />
                </div>
            </div>
        </div>
    </div>
</template>
