<template>
  <div class="w-full h-full flex">
    <h1 class="text-7xl font-bold text-gray-400 m-auto leading-none select-none text-center">
      Create FD Workflow
    </h1>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'Create FD Workflow' }
  }
}
</script>
