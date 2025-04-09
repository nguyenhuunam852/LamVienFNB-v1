<script setup lang="ts">
import AppLogo from './AppLogo.vue'
import NavBarItem from './NavBarItem.vue'
import ResponsiveMenu from './ResponsiveMenu.vue'
import type { NavItem } from '@/types'
import { router , usePage } from '@inertiajs/vue3'
import { ref, computed, onMounted } from 'vue'
import Collapse from '@/utils/collapse.js'
import type { Auth } from '@/types'

const mainNavItems: NavItem[] = [
  {
    title: 'Dashboard',
    href: '/admin/dashboard',
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
const auth = computed(() => page.props.auth as Auth)

const isCurrentRoute = computed(() => (url: string) => page.url === url)

const activeItemStyles = computed(
  () => (url: string) => (isCurrentRoute.value(url) ? 'active' : ''),
)

const collapseRef = ref<HTMLElement | null>(null)
let collapseInstance: Collapse | null = null

onMounted(() => {
  if (collapseRef.value) {
    collapseInstance = new Collapse(collapseRef.value)
  }
})

const toggleCollapse = () => {
  collapseInstance?.toggle()
}

function logout() {
  // eslint-disable-next-line no-undef
  router.post(route('logout'))
}

</script>

<template>
    <div class="navbar navbar-expand-xl h-[100px] bg-[#567086] p-0 max-575:h-[50px]">
        <div class="container h-100 relative max-1199:px-[15px]">
            <AppLogo class="navbar-brand flex items-center" href="/" />

            <ResponsiveMenu @click="toggleCollapse" />

            <div ref="collapseRef" :class="['navbar-collapse collapse',
                'collapse-content',
                'min-1200:h-[100%]',
                'max-1199:right-[15px]',
                'max-1199:p-0',
                'max-1199:shadow-[rgba(255,255,255,0.1)_0px_1px_1px_1px]',
                'max-1199:absolute',
                'max-1199:top-[72px]',
                'max-1199:w-[200px]',
                'max-1199:z-[1000]',
                'max-575:!top-[47px]',
            ]">
                <ul class="navbar-nav mx-auto h-100">
                    <template v-if="auth.user">
                        <NavBarItem v-for="(item, index) in mainNavItems" :key="index" :title="item.title"
                            :icon="item.icon" :href="item.href" :subItems="item.subItems"
                            :active="activeItemStyles(item.href)" />
                    </template>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <template v-if="auth.user">
                            <a @click.prevent="logout" :class="['min-1200:!pl-[28px]', 'min-1200:!pr-[28px]', 'nav-link', 'd-block'
                                ,'max-1199:bg-[#567086]',
                                'max-1199:text-white'
                            ]" href="">
                                Admin, <b>Logout</b>
                            </a>
                        </template>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
