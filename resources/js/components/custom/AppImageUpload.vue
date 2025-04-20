<template>
    <div class="flex gap-4 flex-wrap justify-center">
      <!-- Upload Box -->
      <div
        class="cursor-pointer w-[240px] h-[240px] flex justify-center items-center bg-[#aaa] relative overflow-hidden"
        @click="onUploadClick"
      >
        <!-- Show cloud icon if no image is uploaded -->
        <i
          v-if="!previewUrl"
          class="fas fa-cloud-upload-alt tm-upload-icon bg-[#455c71] w-[55px] h-[55px] rounded-full text-center pt-[15px] text-[22px] text-white absolute"
        />
        <!-- Show image if uploaded -->
        <img
          v-if="previewUrl"
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

<script setup>
import { ref, watch } from 'vue'
import axios from 'axios'

const props = defineProps({
  uploadedUrl: String,
})

const emit = defineEmits(['uploaded'])

const fileInput = ref(null)
const previewUrl = ref(props.uploadedUrl || null)

watch(() => props.uploadedUrl, (newVal) => {
  previewUrl.value = newVal
})

function onUploadClick() {
  fileInput.value?.click()
}

async function handleFileChange(event) {
  const file = event.target.files[0]
  if (!file) return

  const formData = new FormData()
  formData.append('file', file)

  try {
    // eslint-disable-next-line no-undef
    const response = await axios.post(route('admin.product.upload'), formData)
    const url = response.data.uploadedUrl
    previewUrl.value = url
    emit('uploaded', url)
  } catch (err) {
    console.error('Upload failed:', err.response?.data ?? err)
  }
}
</script>
