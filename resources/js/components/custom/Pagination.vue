<template>
    <div class="absolute bottom-4 left-0 w-full flex justify-center items-center mt-4 space-x-2">
        <button @click="prevPage" :disabled="currentPage <= 1"
            class="bg-[#486177] text-white px-3 py-1 rounded hover:bg-[#3b4f60] disabled:opacity-50 disabled:cursor-not-allowed">
            Prev
        </button>
        <span class="text-white">Page {{ currentPage }} of {{ totalPages }}</span>
        <span class="text-white">Total: {{ totalItems }} {{ totalItems === 1 ? 'item' : 'items' }}</span>
        <button @click="nextPage" :disabled="currentPage >= totalPages"
            class="bg-[#486177] text-white px-3 py-1 rounded hover:bg-[#3b4f60] disabled:opacity-50 disabled:cursor-not-allowed">
            Next
        </button>
    </div>
</template>

<script setup lang="ts">
import { defineProps, defineEmits } from 'vue'

interface Props {
    currentPage: number;
    totalPages: number;
    totalItems: number;
}

const props = defineProps<Props>()

const emit = defineEmits<{
    // eslint-disable-next-line no-unused-vars
    (e: 'update:currentPage', page: number): void;
}>()

function prevPage() {
  if (props.currentPage > 1) {
    emit('update:currentPage', props.currentPage - 1)
  }
}

function nextPage() {
  if (props.currentPage < props.totalPages) {
    emit('update:currentPage', props.currentPage + 1)
  }
}
</script>
