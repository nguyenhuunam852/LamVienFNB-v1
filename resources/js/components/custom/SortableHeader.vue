<template>
    <th
      @click="toggleSort"
      class="cursor-pointer border-b-0 border-t border-b-[#fff] border-[#486177] py-[15px] px-[25px] align-middle select-none items-center gap-1"
    >
      <span>{{ label }}</span>
      <span v-if="isActive">
        <svg
          v-if="direction === 'asc'"
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
        <svg
          v-else
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </span>
    </th>
  </template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  label: String,
  field: String,
  modelValue: String,  // bound to sortField
  direction: String,   // bound to sortDirection
})

const emit = defineEmits(['update:modelValue', 'update:direction'])

const isActive = computed(() => props.modelValue === props.field)

function toggleSort() {
  if (!isActive.value) {
    emit('update:modelValue', props.field)
    emit('update:direction', 'asc')
  } else {
    emit('update:direction', props.direction === 'asc' ? 'desc' : 'asc')
  }
}
</script>
