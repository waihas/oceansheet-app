<template>
    <div class="antialiased bg-gray-100">
        <div class="w-full text-gray-700 bg-white">
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
            <nav :class="isOpen ? 'flex' : 'hidden'"
            class="flex-col flex-grow pb-4 md:pb-0 md:flex md:justify-center md:flex-row items-center">
              <!-- <router-link :to="{ name: 'about' }" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                About
              </router-link> -->
              <!-- v-click-outside="isOpen = false" -->
              <!-- v-click-outside="closeDropdowns" -->
              <!-- <div class="relative">
                <button @click="toggleProducts" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <span>Product</span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="productsOpen ? 'rotate-180' : 'rotate-0'" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div v-if="productsOpen" 
                  @click="toggleProducts"
                  x-transition:enter="transition ease-out duration-100" 
                  x-transition:enter-start="transform opacity-0 scale-95" 
                  x-transition:enter-end="transform opacity-100 scale-100" 
                  x-transition:leave="transition ease-in duration-75" 
                  x-transition:leave-start="transform opacity-100 scale-100" 
                  x-transition:leave-end="transform opacity-0 scale-95" 
                  class="absolute left-1/2 w-64 md:max-w-screen-sm md:w-screen transform -translate-x-1/2 mt-2 z-20">
                  <div class="p-2 bg-white rounded-md shadow-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <router-link :to="{ name: 'products.for-gsheet' }" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">For Google Sheet</p>
                          <p class="text-sm">Create Connection between Sheets</p>
                        </div>
                      </router-link>
                      <router-link :to="{ name: 'products.for-microsoft' }" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">For Microsoft Excel</p>
                          <p class="text-sm">Manage your Microsoft Excel files</p>
                        </div>
                      </router-link>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="relative">
                <button @click="toggleProducts" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <span>Product</span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="productsOpen ? 'rotate-180' : 'rotate-0'" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div v-show="productsOpen" 
                  @click="toggleProducts"
                  x-transition:enter="transition ease-out duration-100" 
                  x-transition:enter-start="transform opacity-0 scale-95" 
                  x-transition:enter-end="transform opacity-100 scale-100" 
                  x-transition:leave="transition ease-in duration-75" 
                  x-transition:leave-start="transform opacity-100 scale-100" 
                  x-transition:leave-end="transform opacity-0 scale-95" 
                  class="absolute left-1/2 w-64 md:max-w-screen-sm md:w-screen transform -translate-x-1/2 mt-2 z-20">
                  <div class="p-2 bg-white rounded-md shadow-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <a href="/product/for-google-sheets" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">For Google Sheet</p>
                          <p class="text-sm">Create Connection between Sheets</p>
                        </div>
                      </a>
                      <a href="/product/for-microsoft-excel" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">For Microsoft Excel</p>
                          <p class="text-sm">Manage your Microsoft Excel files</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- v-click-outside="isOpen = false" -->
              <!-- v-click-outside="closeDropdowns" -->
              <div class="relative">
                <button @click="toggleWorkflows" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <span>Workflows</span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="workflowsOpen ? 'rotate-180' : 'rotate-0'" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div v-show="workflowsOpen"
                  @click="toggleWorkflows"
                  x-transition:enter="transition ease-out duration-100" 
                  x-transition:enter-start="transform opacity-0 scale-95" 
                  x-transition:enter-end="transform opacity-100 scale-100" 
                  x-transition:leave="transition ease-in duration-75" 
                  x-transition:leave-start="transform opacity-100 scale-100" 
                  x-transition:leave-end="transform opacity-0 scale-95" 
                  class="absolute left-1/2 w-64 md:max-w-screen-sm md:w-screen transform -translate-x-1/2 mt-2 z-20">
                  <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <a href="/workflows/excel-to-google-sheet" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">Excel to Google Sheet</p>
                          <p class="text-sm">Transfer data from Microsoft Excel to Google Sheet</p>
                        </div>
                      </a>

                      <a href="/workflows/many-google-sheets-to-one" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">Many To One</p>
                          <p class="text-sm">Group data of many sheets inside one</p>
                        </div>
                      </a>

                      <a href="/workflows/one-google-sheets-to-many" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">One To Many</p>
                          <p class="text-sm">Connect one sheet to many</p>
                        </div>
                      </a>

                      <a href="/workflows/google-sheet-filter-data" class="flex row items-center rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="bg-main-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">Filer Data</p>
                          <p class="text-sm">Filter the data inside a sheet</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="/pricing" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                Pricing
              </a>
            </nav>
            <div :class="isOpen ? 'flex' : 'hidden'"
            class="relative md:flex mx-auto">
              <template v-if="authenticated">
                <a href="https://app.oceansheet.com/dashboard" class="transition-all duration-100 ease-in-out bg-main-600 text-white hover:text-white hover:bg-main-800 px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 focus:bg-main-800 focus:outline-none focus:shadow-outline">
                  Dashboard
                </a>
              </template>
              <template v-else>
                <a href="https://app.oceansheet.com/login" class="transition-all duration-100 ease-in-out hover:text-main-500 px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-transparent md:mt-0 md:ml-4 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    Login
                </a>
                <a href="https://app.oceansheet.com/register" class="transition-all duration-100 ease-in-out bg-main-600 text-white hover:text-white hover:bg-main-800 px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 focus:bg-main-800 focus:outline-none focus:shadow-outline">
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
import clickOutside from 'vue-click-outside'

export default {
    name: 'WelcomeNavbar',

    directives: {
        clickOutside,
    },

    data: () => ({
        isOpen: false,
        productsOpen: false,
        workflowsOpen: false,
    }),

    computed: mapGetters({
        authenticated: 'auth/check'
    }),

    methods: {
      toggleWorkflows() {
        this.workflowsOpen = !this.workflowsOpen
        this.productsOpen = false
      },
      toggleProducts() {
        this.productsOpen = !this.productsOpen
        this.workflowsOpen = false
      },
      closeDropdowns() {
        if(this.workflowsOpen)
          this.workflowsOpen = false
          
        if(this.productsOpen)
          this.productsOpen = false
      }
    },
}
</script>