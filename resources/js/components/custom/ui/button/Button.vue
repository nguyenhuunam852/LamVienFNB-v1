<script setup lang="ts">
import { cn } from '@/lib/utils'
import type { HTMLAttributes } from 'vue'

const props = defineProps<{
    class?: HTMLAttributes['class'];
}>()

</script>

<template>
    <button :class="cn('', props.class)">
        <slot />
    </button>
</template>
