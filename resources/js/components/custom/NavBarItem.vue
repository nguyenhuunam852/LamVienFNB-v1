<script setup lang="ts">
import { ref } from 'vue'
import type { NavItem } from '@/types'
import DropDownItem from './DropDownItem.vue'

defineProps({
  title: { type: String, required: true },
  href: { type: String, default: '#' },
  icon: { type: String, default: '#' },
  active: { type: String, default: '#' },
  subItems: { type: Array as () => NavItem[], default: () => [] },
})

const isOpen = ref(false)

const toggleDropdown = () => {
  isOpen.value = !isOpen.value
}

</script>

<template>
    <li v-if="subItems.length === 0" class="text-center max-1199:mr-0 max-1350:mr-[1px]">
        <a :class="['py-[15px]'
        , 'px-[20px]'
        , 'min-1200:!pl-[28px]'
        , 'min-1200:!pr-[28px]'
        ,'max-1199:p-[15px]'
        ,'max-1199:flex-row',
        'max-1199:bg-[#567086]',
        'max-1199:text-white'
        , 'nav-link', active]"
            :href="href">
            <li :class="[icon,'max-1199:text-[1rem]','max-1199:mr-[10px]','max-1199:mb-0', 'inline-block', 'mb-[10px]', 'mr-0', 'text-[1.5rem]']" />
            {{ title }}
            <span class="sr-only">(current)</span>
        </a>
    </li>
    <li v-else class="text-center dropdown max-1199:mr-0 max-1350:mr-[1px]">
        <a @click="toggleDropdown"
            :class="['py-[15px]', 'px-[20px]', 'min-1200:!pl-[28px]', 'min-1200:!pr-[28px]','max-1199:p-[15px]','max-1199:flex-row', 'nav-link'
            ,'max-1199:bg-[#567086]',
            'max-1199:text-white'
            , active]"
            href="#">
            <li :class="[icon,'max-1199:text-[1rem]','max-1199:mr-[10px]','max-1199:mb-0', 'inline-block', 'mb-[10px]', 'mr-0', 'text-[1.5rem]']" />
            <span> {{ title }} <i class="fas fa-angle-down" /></span>
        </a>
        <div :class="[
            'dropdown-menu',
            'mt-0',
            'text-[90%]',
            'text-[#fff]',
            'bg-[#567086]',
            'pt-[10px]',
            'pb-[10px]',
            'min-w-auto',
            isOpen ? 'show':'']">
            <DropDownItem v-for="(item, index) in subItems" :key="index" :title="item.title" :href="item.href" />
        </div>
    </li>
</template>
