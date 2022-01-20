<template>
  
  <header class="flex items-center px-6 sm:px-10 bg-white" style="height: 10vh;">
      <button type="button" @click="toggleSideMenu" class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
        <span class="sr-only">Menu</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <!-- <div class="relative w-full max-w-md sm:-ml-2">
        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
        <input type="text" role="search" placeholder="Search..." class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
      </div> -->
      <div class="relative w-full max-w-md sm:-ml-2">
          <h1 class="text-3xl font-semibold">OceanSheet</h1>
          <!-- <h1 class="text-3xl font-semibold">{{ title }}</h1> -->
      </div>
      <div class="flex flex-shrink-0 items-center ml-auto">
        <div class="border-r pr-3 mr-3 space-x-1">
            <dropdown-notification class="relative">
                
              <span class="sr-only">Notifications</span>
              <!-- <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span> -->
              <!-- <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span> -->
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>

              <template v-slot:items>
                
                  <div class="py-2">
                      <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                          <p class="text-gray-600 text-sm mx-2">
                            None!
                          </p>
                      </a>
                      <!-- <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                          <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                          <p class="text-gray-600 text-sm mx-2">
                              <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span> artical . 2m
                          </p>
                      </a>
                      <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                          <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
                          <p class="text-gray-600 text-sm mx-2">
                              <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                          </p>
                      </a>
                      <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                          <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                          <p class="text-gray-600 text-sm mx-2">
                              <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-blue-500" href="#">Test with TDD</span> artical . 1h
                          </p>
                      </a>
                      <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                          <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
                          <p class="text-gray-600 text-sm mx-2">
                              <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                          </p>
                      </a> -->
                  </div>
                  <!-- <a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a> -->
                <!-- </div> -->
              </template>
            </dropdown-notification>
          <!-- <div class="relative">
            
            
          </div> -->
          <!-- <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
            <span class="sr-only">Log out</span>
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
          </button> -->
        </div>
        <dropdown-menu class="my-auto">
            <span class="sr-only">{{ user.name }}</span>
            <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
              <span class="font-semibold">{{ user.name }}</span>
              <span class="text-sm text-gray-600">{{ user.email }}</span>
            </div>
            <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
              <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="user profile photo" class="h-full w-full object-cover">
            </span>
            <template v-slot:items>
              <div class="py-1">
                <router-link :to="{name: 'dashboard.profile'}"
                            class="font-semibold block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                            role="menuitem"
                >
                  Profile
                </router-link>
                <router-link :to="{name: 'settings.billing'}"
                            class="font-semibold block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                            role="menuitem"
                >
                  Billing
                </router-link>
                <router-link :to="{name: 'settings.notifications'}"
                            class="font-semibold block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                            role="menuitem"
                >
                  Notifications
                </router-link>
              </div>
              <div class="border-t border-gray-100" />
              <div class="py-1">
                <span
                  class="font-semibold cursor-pointer block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                  role="menuitem"
                  @click="logout"
                >
                  Logout
                </span>
              </div>
            </template>
          </dropdown-menu>
        <!-- <dropdown-menu class="my-auto">
          <div class="flex">
            <div class="my-auto bg-gray-200 mr-3 rounded-full border-2 border-gray-200 overflow-hidden select-none">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                class="select-none h-6 text-teal-800"
                viewBox="0 0 512 512"
                :alt="user.name" fill="currentColor">
                <path d="M256,11C120.69,11,11,120.69,11,256S120.69,501,256,501,501,391.31,501,256,391.31,11,256,11Zm0,99.7733a88.0258,88.0258,0,1,1-88.0259,88.0258A88.0259,88.0259,0,0,1,256,110.7733ZM380.1269,354.398a46.8289,46.8289,0,0,1-46.8286,46.8286H178.7016a46.8285,46.8285,0,0,1-46.8281-46.8286v0a46.8285,46.8285,0,0,1,46.8281-46.8286H333.2983a46.8289,46.8289,0,0,1,46.8286,46.8286Z"></path>
              </svg>
            </div>
            <div class="my-auto mr-4">
              <p class="font-semibold leading-none tracking-wide">
                {{ user.name }}
              </p>
            </div>
          </div>

          <template v-slot:items>
            <div class="py-1">
              <router-link :to="{name: 'settings.profile'}"
                           class="font-semibold block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                           role="menuitem"
              >
                Settings
              </router-link>
            </div>
            <div class="border-t border-gray-100" />
            <div class="py-1">
              <span
                class="font-semibold cursor-pointer block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                role="menuitem"
                @click="logout"
              >
                Logout
              </span>
            </div>
          </template>
        </dropdown-menu> -->
      </div>
    </header>

  <!--nav class="bg-white text-gray-800 flex py-4 px-8 justify-between border-b z-50">
    <div class="flex">
      <h1 class="my-auto text-3xl font-semibold tracking-tighter text-teal-600">
        <!- LOGO HERE ->
      </h1>
    </div>

    <div class="flex my-auto">
      <div class="my-auto">
        <!- Notifications ->
      </div>
      <div class="my-auto flex">
        <dropdown-menu class="my-auto">
          <div class="flex">
            <div class="my-auto bg-gray-200 mr-3 rounded-full border-2 border-gray-200 overflow-hidden select-none">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                class="select-none h-6 text-teal-800"
                viewBox="0 0 512 512"
                :alt="user.name" fill="currentColor">
                <path d="M256,11C120.69,11,11,120.69,11,256S120.69,501,256,501,501,391.31,501,256,391.31,11,256,11Zm0,99.7733a88.0258,88.0258,0,1,1-88.0259,88.0258A88.0259,88.0259,0,0,1,256,110.7733ZM380.1269,354.398a46.8289,46.8289,0,0,1-46.8286,46.8286H178.7016a46.8285,46.8285,0,0,1-46.8281-46.8286v0a46.8285,46.8285,0,0,1,46.8281-46.8286H333.2983a46.8289,46.8289,0,0,1,46.8286,46.8286Z"></path>
              </svg>
              <!- <img :src="user.photo_url" class="select-none h-6" :alt="user.name"> ->
            </div>
            <div class="my-auto mr-4">
              <p class="font-semibold leading-none tracking-wide">
                {{ user.name }}
              </p>
            </div>
          </div>

          <template v-slot:items>
            <div class="py-1">
              <router-link :to="{name: 'settings.profile'}"
                           class="font-semibold block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                           role="menuitem"
              >
                Settings
              </router-link>
            </div>
            <div class="border-t border-gray-100" />
            <div class="py-1">
              <span
                class="font-semibold cursor-pointer block px-4 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 transition-all duration-100 ease-in-out outline-none"
                role="menuitem"
                @click="logout"
              >
                Logout
              </span>
            </div>
          </template>
        </dropdown-menu>
      </div>
    </div>
  </nav-->
</template>

<script>
import { mapGetters } from 'vuex'
import DropdownMenu from './DropdownMenu'
import DropdownNotification from './DropdownNotification'
// import router from '~/router'

export default {
  components: { DropdownMenu, DropdownNotification },
  data: () => ({
    appName: window.config.appName,
    // title: document.title,
    // title: this.$meta.refresh().titleTemplate,
    // title: window.titleTemplate
  }),
  
  computed: mapGetters({
    user: 'auth/user'
  }),
  
  // created() {
  //   console.log(router);
  //   let meta = router.currentRoute.meta;
  //   console.log(meta);

  //   console.log( meta.fields); // not sure what you're trying to return exactly
    
  // },

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      await this.$router.push({ name: 'login' })
    },
    toggleSideMenu () {
      this.$store.dispatch('main/toggleSidebar')
    }
    // toggleSideMenu () {
    //   await this.$store.dispatch('toggleSideMenu');
    //   // this.$parent.$emit('toggleSideMenu')
    // }
  }
}
</script>
