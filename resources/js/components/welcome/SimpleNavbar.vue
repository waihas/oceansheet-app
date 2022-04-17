<template>
    <div class="antialiased bg-white">
        <div class="w-full text-gray-700">
          <div class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
              <a href="/" class="flex flex-row items-center font-bold text-xl text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">
                <img src="/assets/img/oceansheet-logo.svg" class="w-10 h-10 mr-3" alt="OceanSheet logo" />
                OceanSheet
              </a>
              <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="isOpen = !isOpen">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                  <path v-show="!isOpen" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  <path v-show="isOpen" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>

            <div :class="isOpen ? 'flex' : 'hidden'"
            class="relative md:flex mx-auto md:m-0">
              <template v-if="authenticated">
                <a href="/dashboard" class="transition-all duration-100 ease-in-out bg-main-600 text-white hover:text-white hover:bg-main-800 px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 focus:bg-main-800 focus:outline-none focus:shadow-outline">
                  Dashboard
                </a>
              </template>
              <template v-else>
                <a href="/login" class="transition-all duration-100 ease-in-out hover:text-main-500 px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-transparent md:mt-0 md:ml-4 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  Login
                </a>
                <a href="/register" class="transition-all duration-100 ease-in-out bg-main-600 text-white hover:text-white hover:bg-main-800 px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 focus:bg-main-800 focus:outline-none focus:shadow-outline">
                  Register
                </a>
              </template>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: 'SimpleNavbar',

    data: () => ({
        isOpen: false,
    }),

    computed: mapGetters({
        authenticated: 'auth/check'
    }),
}
</script>