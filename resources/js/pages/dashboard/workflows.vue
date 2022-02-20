<template>
  <div class="p-4 sm:p-8 sm:py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="overflow-hidden rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-2">
      <div class="px-6 py-4 bg-white border-b border-gray-100 font-bold uppercase">
          Excel To Sheet
      </div>
      <img
        src="/assets/img/excel-to-sheet.jpg"
        class="h-auto border-gray-100 border-b"
        alt="Microsoft Excel To Google Sheet"
      />
      <div class="flex p-2 bg-white text-center">
        <router-link :to="{name: 'dashboard.workflows.excel-to-sheet'}"
          class="bg-main-500 text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-main-600 rounded uppercase w-full">
          Select
        </router-link>
      </div>
    </div>

    <div class="overflow-hidden rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-2">
      <div class="px-6 py-4 bg-white border-b border-gray-100 font-bold uppercase">
          One Sheet to many
      </div>
      <img
        src="/assets/img/one-to-many.jpg"
        class="h-auto border-gray-100 border-b"
        alt="One to many Google Sheets"
      />
      <div class="flex p-2 bg-white text-center">
        <router-link :to="{name: 'dashboard.workflows.one-to-many'}"
          class="bg-main-500 text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-main-600 rounded uppercase w-full">
          Select
        </router-link>
      </div>
    </div>

    <div class="overflow-hidden rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-2">
      <div class="px-6 py-4 bg-white border-b border-gray-100 font-bold uppercase">
          Many to One Sheet
      </div>
      <img
        src="/assets/img/many-to-one.jpg"
        class="h-auto border-gray-100 border-b"
        alt="Many Google Sheets to One"
      />
      <div class="flex p-2 bg-white text-center">
        <router-link :to="{name: 'dashboard.workflows.many-to-one'}"
          class="bg-main-500 text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-main-600 rounded uppercase w-full">
          Select
        </router-link>
      </div>
    </div>

    <div class="overflow-hidden rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-2">
      <div class="px-6 py-4 bg-white border-b border-gray-100 font-bold uppercase">
          Filter sheet data
      </div>
      <img
        src="/assets/img/filter-data.jpg"
        class="h-auto border-gray-100 border-b"
        alt="Filter Google Sheet Data"
      />
      <div class="flex p-2 bg-white text-center">
        <router-link :to="{name: 'dashboard.workflows.filter-data'}"
          class="bg-main-500 text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-main-600 rounded uppercase w-full">
          Select
        </router-link>
      </div>
    </div>

    <div class="overflow-hidden rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-2">
      <div class="px-6 py-4 bg-white border-b border-gray-100 font-bold uppercase">
          Sheet To Sheet
      </div>
      <img
        src="/assets/img/gsheet-to-gsheet.jpg"
        class="h-auto border-gray-100 border-b"
        alt="Google Sheet To Google Sheet"
      />
      <div class="flex p-2 bg-white text-center">
        <router-link :to="{name: 'dashboard.workflows.gsheet-to-gsheet'}"
          class="bg-main-500 text-sm text-white font-bold py-3 px-8 hover:bg-main-600 rounded uppercase w-full">
          Select
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'Workflows' }
  }
}
</script>
