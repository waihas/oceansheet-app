<template>
  <div 
    class="items-center justify-center py-3 focus:bg-gray-100 rounded-lg hover:cursor-pointer"
       :class="isCurrentRoute ? 'text-main-600 bg-gray-50' : 'bg-main-500 hover:bg-main-600'"
       @click="go"
  >
    <!-- <span class="font-semibold transition-all duration-100 ease-in-out" :class="isCurrentRoute ? 'text-white' : 'text-gray-600 group-hover:text-gray-800'"> -->
      <slot />
    <!-- </span> -->
  </div>
</template>

<script>
export default {
  name: 'SidebarItem',
  props: {
    route: {
      default: 'dashboard',
      type: String,
      required: true
    }
  },
  computed: {
    isCurrentRoute: function () {
      return this.route === this.$route.name
    }
  },
  methods: {
    go: function () {
      if (!this.isCurrentRoute) {
        this.$router.push({ name: this.route })
      }
    }
  }
}
</script>

<style scoped>

</style>
