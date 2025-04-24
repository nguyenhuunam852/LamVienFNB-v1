<script setup lang="ts">
import { ref, watch } from 'vue'
import { useVModel } from '@vueuse/core'
import type { HTMLAttributes } from 'vue'
import axios from 'axios'

const props = defineProps<{
  defaultValue?: string
  modelValue?: string
  class?: HTMLAttributes['class']
}>()

const emit = defineEmits<{
  // eslint-disable-next-line no-unused-vars
  (e: 'update:modelValue', value: string): void
}>()

const modelValue = useVModel(props, 'modelValue', emit, {
  passive: true,
  defaultValue: props.defaultValue,
})

const fileInput = ref<HTMLInputElement | null>(null)
const previewUrl = ref<string | null>(modelValue.value || null)

watch(modelValue, (newVal) => {
  console.log(newVal)
  previewUrl.value = newVal || null
})

function onUploadClick() {
  fileInput.value?.click()
}

async function handleFileChange(event: Event) {
  const target = event.target as HTMLInputElement
  const file = target.files?.[0]
  if (!file) return

  const formData = new FormData()
  formData.append('file', file)

  try {
    // eslint-disable-next-line no-undef
    const response = await axios.post(route('file.upload'), formData)
    const url = response.data.uploadedUrl
    previewUrl.value = url
    emit('update:modelValue', url)
  } catch (err) {
    console.error('Upload failed:', err.response?.data ?? err)
  }
}
</script>

<template>
  <div class="flex gap-4 flex-wrap justify-center">
    <!-- Upload Box -->
    <div
      :class="[
        'cursor-pointer w-[240px] h-[240px] flex justify-center items-center bg-[#aaa] relative overflow-hidden',
        props.class,
      ]"
      @click="onUploadClick"
    >
      <!-- Show cloud icon if no image is uploaded -->
      <i
        v-if="!previewUrl"
        class="fas fa-cloud-upload-alt tm-upload-icon bg-[#455c71] w-[55px] h-[55px] rounded-full text-center pt-[15px] text-[22px] text-white absolute"
      />
      <!-- Show image if uploaded -->
      <img
        v-else
        :src="previewUrl"
        alt="Uploaded Image"
        class="w-full h-full object-cover"
      />
      <input
        ref="fileInput"
        type="file"
        class="hidden"
        @change="handleFileChange"
      />
    </div>
  </div>
</template>
