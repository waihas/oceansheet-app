<template>
<!-- here should be an overview about the sheets (idk if maybe the content too)
    then how many elements or connections made so far
    and also a button to sync the content of two sheets manually -->
  <div class="w-full h-full flex">
    <div class="flex flex-col space-y-6 text-center m-auto text-gray-400">
      <h1 class="text-7xl font-bold leading-none select-none">
        View connection
      </h1>
      <span class="uppercase">Coming soon</span>
    </div>
  </div>
</template>

<script>

export default {
    middleware: 'auth',
    layout: 'dashboard',

    metaInfo () {
        return { title: 'View connection' }
    },

    data() {
        return {
            loading: false
        }
    },

    methods: {
    }
}
</script>
