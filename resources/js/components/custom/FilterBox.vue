<template>
    <div class="space-y-4">
      <div
        v-for="(item, index) in fields"
        :key="index"
        class="flex items-center space-x-2"
      >
        <label class="w-32 font-medium text-white">
          {{ item.label }}
        </label>
        <input
          v-model="item.query"
          type="text"
          :placeholder="`Search ${item.label.toLowerCase()}...`"
          class="flex-1 p-2 rounded border border-gray-300"
        />
      </div>

      <div class="flex justify-end">
        <button
          @click="emitSearch"
          class="bg-[#486177] text-white px-4 py-2 rounded hover:bg-[#3b4f60]"
        >
          Search
        </button>
      </div>
    </div>
  </template>

<script setup lang="ts">
import { reactive, watch } from 'vue'

interface FieldItem {
  label: string;
  type: string;
  query: string;
}

const props = defineProps<{
  fields: FieldItem[];
}>()

const emit = defineEmits<{
  // eslint-disable-next-line no-unused-vars
  (e: 'search', payload: Record<string, string>): void
}>()

const internalFields = reactive<FieldItem[]>([])

watch(
  () => props.fields,
  (newFields) => {
    internalFields.splice(0, internalFields.length, ...newFields.map(f => ({ ...f })))
  },
  { immediate: true, deep: true },
)

function emitSearch() {
  const result: Record<string, string> = {}
  for (const item of internalFields) {
    result[item.label] = item.query
  }
  emit('search', result)
}
</script>
