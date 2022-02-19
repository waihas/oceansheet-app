<template>
    <div>
        <div v-show="!acceptedCookies">
            <transition
                enter-class="opacity-0 scale-90" 
                enter-active-class="transition duration-200 transform ease"
                leave-active-class="transition duration-200 transform ease"
                leave-to-class="opacity-0 scale-90">
                <div class="max-w-screen-lg fixed p-5 bottom-5 bg-white inset-x-5 mx-auto rounded-lg drop-shadow-2xl flex gap-4 flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
                    <div class="w-full">
                        This website uses cookies to ensure you get the best experience on our website. 
                        <router-link :to="{name: 'cookies.policy'}" class="text-main-700 whitespace-nowrap hover:underline">Learn more</router-link>
                    </div>
                    <div class="flex gap-4 items-center flex-shrink-0">
                        <!-- setTimeout is for demo purposes only. Remove it & add to cookies
                            so that the popup won't appear next time they load. -->
                        <router-link :to="{name: 'cookies.policy'}" class="text-gray-500 focus:outline-none hover:underline">Settings</router-link>
                        <button type="button" @click="setCookies()" class="bg-main-600 px-5 py-2 text-white rounded-md hover:bg-main-800 focus:outline-none">Accept Cookies</button>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Cookies',

    computed: {
        acceptedCookies () {
            return this.$store.getters['main/acceptedCookies']
        }
    },

    methods: {
        setCookies() {
            this.$store.dispatch('main/setCookiesAccepted')
        }
    }
}
</script>