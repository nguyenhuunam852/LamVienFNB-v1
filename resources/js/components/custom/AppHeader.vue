<script setup lang="ts">
import AppLogo from './AppLogo.vue'
import NavBarItem from './NavBarItem.vue'
import ResponsiveMenu from './ResponsiveMenu.vue'
import type { NavItem } from '@/types'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const mainNavItems: NavItem[] = [
  {
    title: 'Dashboard',
    href: '/admin/login',
    icon: 'fas fa-tachometer-alt',
  }, {
    title: 'Reports',
    href: '/admin/reports',
    icon: 'far fa-file-alt',
    subItems: [
      {
        title: 'Daily Report',
        href: '#',
        icon: '',
      },
      {
        title: 'Weekly Report',
        href: '#',
        icon: '',
      },
      {
        title: 'Yearly Report',
        href: '#',
        icon: '',
      },
    ],
  }, {
    title: 'Products',
    href: '/admin/products',
    icon: 'fas fa-shopping-cart',
  }, {
    title: 'Accounts',
    href: '/admin/accounts',
    icon: 'far fa-user',
  }, {
    title: 'Settings',
    href: '/admin/settings',
    icon: 'fas fa-cog',
    subItems: [
      {
        title: 'Profile',
        href: '#',
        icon: '',
      },
      {
        title: 'Billing',
        href: '#',
        icon: '',
      },
      {
        title: 'Customize',
        href: '#',
        icon: '',
      }],
  },
]

const page = usePage()
const isCurrentRoute = computed(() => (url: string) => page.url === url)

console.log(page.url)

const activeItemStyles = computed(
  () => (url: string) => (isCurrentRoute.value(url) ? 'active' : ''),
)
</script>

<template>
    <div class="navbar navbar-expand-xl h-[100px] bg-[#567086] p-0 max-575:h-[50px]">
        <div class="container h-100 relative max-1199:px-[15px]">
            <AppLogo class="navbar-brand flex items-center" href="/" />

            <ResponsiveMenu/>

            <div class="navbar-collapse collapse show
                min-1200:h-[100%]
                max-1199:right-[15px]
                max-1199:p-0
                max-1199:shadow-[rgba(255,255,255,0.1)_0px_1px_1px_1px]
                max-1199:absolute
                max-1199:top-[72px]
                max-1199:w-[200px]
                max-1199:z-[1000]
            ">
                <ul class="navbar-nav mx-auto h-100">
                    <NavBarItem v-for="(item, index) in mainNavItems" :key="index" :title="item.title" :icon="item.icon"
                        :href="item.href" :subItems="item.subItems" :active="activeItemStyles(item.href)" />
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a :class="['min-1200:!pl-[28px]', 'min-1200:!pr-[28px]', 'nav-link', 'd-block']" href=""> Admin, <b>Logout</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
