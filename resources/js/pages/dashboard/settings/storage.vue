<template>
  <div class="w-full h-full flex">
    <!-- <h1 class="text-7xl font-bold text-gray-400 m-auto leading-none select-none text-center">
      File Storage - coming soon
    </h1> -->
    <div class="flex flex-col space-y-6 text-center m-auto text-gray-400">
        <h1 class="text-7xl font-bold leading-none select-none">
            File Storage
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
    return { title: 'File Storage' }
  }
}
</script>
