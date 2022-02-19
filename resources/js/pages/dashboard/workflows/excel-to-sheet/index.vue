<template>
  <div class="w-full h-full flex">
    <h1 class="text-7xl font-bold text-gray-400 m-auto leading-none select-none text-center">
      Excel To Google Sheet
    </h1>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'Excel To Google Sheet' }
  }
}
</script>
