<script setup lang="ts">
import { cn } from '@/lib/utils'
import { useVModel } from '@vueuse/core'
import type { HTMLAttributes } from 'vue'

const props = defineProps<{
    defaultValue?: string | number;
    modelValue?: string | number;
    class?: HTMLAttributes['class'];
}>()

const emits = defineEmits<{
    // eslint-disable-next-line no-unused-vars
    (e: 'update:modelValue', payload: string | number): void;
}>()

const modelValue = useVModel(props, 'modelValue', emits, {
  passive: true,
  defaultValue: props.defaultValue,
})
</script>

<template>
    <input v-model="modelValue" :class="cn(
        'py-[18px] px-[19px] rounded-none h-[50px] bg-[#54657d] text-white border-none focus:bg-[#60738e] focus:text-white focus:border-transparent focus:shadow-[0_0_0_0.1rem_rgba(180,206,233,0.5)] form-control validate',
        props.class,
    )
        " />
</template>
