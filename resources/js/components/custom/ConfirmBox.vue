<template>
    <div v-if="visible" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg min-w-[300px] flex flex-col items-center">
            <button class="text-gray-500 self-end" @click="$emit('close')">
                ✖
            </button>
            <h2 class="text-xl font-bold mb-4 mt-5">{{ header }}</h2>
            <p>{{ content }}</p>
            <div class="flex-row justify-between">
                <button class="bg-blue-500 text-black mx-2 px-4 py-2 rounded" @click="$emit('close')">Close</button>
                <button class="bg-blue-500 text-black mx-2 px-4 py-2 rounded" @click="$emit('submit')">Confirm</button>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
  visible: Boolean,
  header: String,
  content: String,
})
defineEmits(['close', 'submit'])
</script>
