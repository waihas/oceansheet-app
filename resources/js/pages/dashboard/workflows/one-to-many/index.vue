<template>
  <div class="w-full h-full flex">
    <h1 class="text-7xl font-bold text-gray-400 m-auto leading-none select-none text-center">
      One Google Sheet To Many
    </h1>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'One Google Sheet To Many' }
  }
}
</script>
