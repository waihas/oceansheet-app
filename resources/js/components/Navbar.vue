<template>
  <nav class="bg-white text-gray-800 flex py-4 px-8 justify-between border-b z-50">
    <div class="flex">
      <h1 class="my-auto text-3xl font-semibold tracking-tighter text-teal-600">
        <!-- LOGO HERE -->
      </h1>
    </div>

    <div class="flex my-auto">
      <div class="my-auto">
        <!-- Notifications -->
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
              <!-- <img :src="user.photo_url" class="select-none h-6" :alt="user.name"> -->
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
  </nav>
</template>

<script>
import { mapGetters } from 'vuex'
import DropdownMenu from './DropdownMenu'

export default {
  components: { DropdownMenu },
  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      await this.$router.push({ name: 'login' })
    }
  }
}
</script>
