<script setup lang="ts">

defineProps({
  title: { type: String, required: true },
  href: { type: String, default: '#' },
})
</script>

<template>
    <a class="text-[#fff] py-[15px] px-[30px] dropdown-item" :href="href">
        {{title}}
    </a>
</template>
