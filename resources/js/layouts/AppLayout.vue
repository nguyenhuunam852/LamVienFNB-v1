<script setup lang="ts">
import AppFooter from '@/components/custom/AppFooter.vue'
import AppHeader from '@/components/custom/AppHeader.vue'
import type { BreadcrumbItemType } from '@/types'

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
  breadcrumbs: () => [],
})
</script>

<template>
    <div id="home">
        <AppHeader />
        <slot />
        <AppFooter />
    </div>
</template>
