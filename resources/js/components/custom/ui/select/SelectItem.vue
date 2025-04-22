<template>
    <div ref="dropdownRef" class="relative w-full">
        <!-- Trigger Button -->
        <div class="h-[50px] w-full text-[#acc6de] p-[15px] bg-[#50657b] border-none cursor-pointer" @click="toggle">
            {{ selectedLabel || 'Please select' }}
        </div>

        <!-- Dropdown Panel -->
        <div v-if="isOpen"
            class="absolute z-10 w-full mt-1 bg-[#50657b] shadow-lg rounded border border-[#3f5266] max-h-[200px] overflow-y-auto">
            <!-- Search Input -->
            <div class="p-2 sticky top-0 bg-[#50657b]">
                <input v-model="search"
                    class="w-full p-2 rounded bg-[#607a93] text-white focus:outline-none" />
            </div>

            <!-- Filtered Items -->
            <div v-for="option in filteredOptions" :key="option.value"
                class="p-2 text-white hover:bg-[#3f5266] cursor-pointer" @click="selectOption(option)">
                {{ option.label }}
            </div>

            <div v-if="filteredOptions.length === 0" class="p-2 text-gray-300 italic">
                No results
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue'
import { onClickOutside } from '@vueuse/core'

type Option = {
    value: string | number
    label: string
}

const props = defineProps<{
    modelValue?: string | number
    options: Option[]
}>()

const emit = defineEmits<{
    // eslint-disable-next-line no-unused-vars
    (e: 'update:modelValue', value: string | number): void
}>()

const dropdownRef = ref(null)
const isOpen = ref(false)
const search = ref('')
const selectedLabel = computed(() =>
  props.options.find((o) => o.value === props.modelValue)?.label ?? '',
)

const filteredOptions = computed(() =>
  props.options.filter((o) =>
    o.label.toLowerCase().includes(search.value.toLowerCase()),
  ),
)

function toggle() {
  isOpen.value = !isOpen.value
}

function selectOption(option: Option) {
  emit('update:modelValue', option.value)
  isOpen.value = false
  search.value = ''
}

onClickOutside(dropdownRef, () => {
  isOpen.value = false
})
</script>

<style scoped>
/* Optional scrollbar styling */
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 3px;
}
</style>
