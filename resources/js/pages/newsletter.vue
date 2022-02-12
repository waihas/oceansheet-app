<template>
    <div>
        <section class="text-gray-600" style="height: 80vh">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-5xl text-3xl font-medium mb-4 text-gray-900">
                    Subscribe to get notified when we launch!
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    OceanSheet is a web application that allows you to Connect, Manage and Automate your spreadsheets easily.
                </p>
            </div>
            <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                <div class="relative flex-grow w-full">
                    <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
                    <input type="text" id="full-name" name="full-name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-main-500 focus:bg-transparent focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative flex-grow w-full">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-main-500 focus:bg-transparent focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="text-white bg-main-500 border-0 py-2 px-8 focus:outline-none hover:bg-main-600 rounded text-lg">
                    Subscribe
                </button>
            </div>
        </div>
    </section>
    </div>
</template>

<script>

export default {
  layout: 'simple',

  metaInfo () {
    return { title: 'Get Notified at Launch!' }
  },

  data: () => ({
    title: window.config.appName,
  }),
}
</script>
