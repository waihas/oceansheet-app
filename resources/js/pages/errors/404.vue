<template>
    <div class="w-full h-96 flex flex-col bg-gray-50 text-center">
      <div class="m-auto">
        <span class="text-9xl font-bold text-main-800">404</span>
        <h1 class="text-5xl text-gray-600 mt-4 leading-none select-none text-center">
          {{ $t('page_not_found') }}
        </h1>
      </div>
    </div>
</template>

<script>
export default {
  layout: 'basic',

  name: 'NotFound',

  metaInfo () {
      return { title: 'Page not found' }
  },

  data: () => ({
      title: window.config.appName,
  }),
}
</script>
