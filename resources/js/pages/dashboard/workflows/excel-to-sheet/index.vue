<template>
  <div class="p-6 sm:p-10 space-y-6">
    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          <router-link :to="{name: 'dashboard.workflows'}"
              class="inline-flex px-5 py-2 text-main-600 hover:text-main-700 focus:text-main-700 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" class="flex-shrink-0 h-4 w-4 -ml-1 my-auto mr-2 fill-current">
                  <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/>
              </svg>
              Back
          </router-link>
        </div>
    </div>

    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-flow-col gap-6">
      <div class="bg-white rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">
            List of workflows
          </div>
          <div class="overflow-y-auto">
            <!-- <div class="w-full p-2 space-y-1 text-gray-700">
              <div class="flex cursor-pointer px-3 py-2 rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-4/5 py-3 px-1">
                  <p @click="overviewETS(1)">Excel_Sheet_#1</p>
                </div>
                <div class="w-1/5 p-3 my-auto">
                  <svg class="w-4 h-4 fill-current float-right" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                  </svg>
                </div>
              </div>
              <div class="flex cursor-pointer px-3 py-2 rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-4/5 py-3 px-1">
                  <p @click="overviewETS(2)">Excel_Sheet_#2</p>
                </div>
                <div class="w-1/5 p-3 my-auto">
                  <svg class="w-4 h-4 fill-current float-right" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                  </svg>
                </div>
              </div>
              <div class="flex cursor-pointer px-3 py-2 rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-4/5 py-3 px-1">
                  <p @click="overviewETS(3)">Excel_Sheet_#3</p>
                </div>
                <div class="w-1/5 p-3 my-auto">
                  <svg class="w-4 h-4 fill-current float-right" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                  </svg>
                </div>
              </div>
            </div> -->
            <div class="p-6 w-full">
              <router-link :to="{name: 'dashboard.workflows.excel-to-sheet.create'}" class="w-full inline-flex px-5 py-4 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add new one
              </router-link>
            </div>
          </div>
        </div>
        <overview :workflow="null"></overview>
    </section>
  </div>
</template>

<script>
import Overview from '../overview'

export default {
  middleware: 'auth',
  layout: 'dashboard',

  components: { Overview },

  metaInfo () {
    return { title: 'Excel To Google Sheet' }
  },

  methods: {
     overviewETS(number) {
       console.log('we will show connection' + number)
     }
  },
}
</script>
