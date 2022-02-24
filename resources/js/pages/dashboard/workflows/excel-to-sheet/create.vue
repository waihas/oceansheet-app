<template>
  <div class="w-full h-full flex">
    <div class="flex flex-col space-y-6 text-center m-auto text-gray-400">
      <h1 class="text-7xl font-bold leading-none select-none">
          Create Workflow
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
    return { title: 'Create ETS Workflow' }
  }
}
</script>
