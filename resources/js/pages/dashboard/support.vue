<template>
  <div class="p-6 sm:p-10 space-y-6">
      <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Ask for support</h1>
          <h2 class="text-gray-600 ml-0.5">Having a trouble?</h2>
        </div>
      </div>

      <!-- <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex flex-col md:col-span-3 md:row-span-3 bg-white shadow rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">The number of applied and left connections per month</div>
          <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
          </div>
        </div>
      </section> -->

      <section class="container bg-white mx-auto p-4 sm:p-8 max-w-7xl rounded-xl">
          <div class="main-question mb-8 flex flex-col divide-y text-gray-800">
              <div class="item px-6 py-6">
                  <div class="flex items-center justify-between cursor-pointer" @click="faqOpen = 1">
                      <h4 :class="faqOpen == 1 ? 'text-main-600 font-bold' : ''">
                          What about security?
                      </h4>
                      <svg :class="faqOpen == 1 ? 'flip-y' : ''"
                          class="w-5 h-5 text-gray-500"
                          fill="none" stroke-linecap="round" 
                          stroke-linejoin="round" stroke-width="2" 
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </div>
                  <div v-show="faqOpen == 1" class="mt-3" :class="faqOpen == 1 ? 'text-gray-600' : ''">
                      OceanSheet data transfers are made from one file to another, via a secure connection. The content of a spreadsheet is never copied to another database. This ensures that your data is as safe as the environment that it’s hosted in.
                      <br><br>
                      You can read more about <router-link class="text-main-600 hover:underline" :to="{name: 'security'}">OceanSheet security here.</router-link>
                  </div>
              </div>

              <div class="item px-6 py-6">
                  <div class="flex items-center justify-between cursor-pointer" @click="faqOpen = 2">
                      <h4 :class="faqOpen == 2 ? 'text-main-600 font-bold' : ''">
                          What is a connection?
                      </h4>
                      <svg :class="faqOpen == 2 ? 'flip-y' : ''"
                          class="w-5 h-5 text-gray-500"
                          fill="none" stroke-linecap="round" 
                          stroke-linejoin="round" stroke-width="2" 
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </div>
                  <div v-show="faqOpen == 2" class="mt-3" :class="faqOpen == 2 ? 'text-gray-600' : ''">
                      A OceanSheet connection is created when you link a data source (one or multiple spreadsheet tabs, or a BigQuery table) to a destination (one or multiple spreadsheet tabs). Once you have created a connection, you can send data from the source to the destination automatically.
                      <br><br>
                      With a Free plan, you can connect a source file to a destination file of the same type (e.g. Excel to Excel or Google Sheets to Google Sheets). With an Advanced, Professional or Enterprise plan, you can connect any file types (e.g. Excel to Google Sheets, or CSV to Excel). If you want to transfer data to a new destination file, OceanSheet will create a spreadsheet for you automatically.
                  </div>
              </div>

              <div class="item px-6 py-6">
                  <div class="flex items-center justify-between cursor-pointer" @click="faqOpen = 3">
                      <h4 :class="faqOpen == 3 ? 'text-main-600 font-bold' : ''">
                          What’s a workflow?
                      </h4>
                      <svg :class="faqOpen == 3 ? 'flip-y' : ''"
                          class="w-5 h-5 text-gray-500"
                          fill="none" stroke-linecap="round" 
                          stroke-linejoin="round" stroke-width="2" 
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </div>
                  <div v-show="faqOpen == 3" class="mt-3" :class="faqOpen == 3 ? 'text-gray-600' : ''">
                      A OceanSheet workflow is a group of connections that work together to carry out a process. When you create a OceanSheet connection, you are starting to build a workflow. By connecting further files, you can expand the workflow to create an interconnected system that transfers data between multiple files. When you run the workflow or schedule automatic updates, data is transferred sequentially, from file to file. This ensures that the workflow transfers data smoothly, in a logical order.
                  </div>
              </div>

              <div class="item px-6 py-6">
                  <div class="flex items-center justify-between cursor-pointer" @click="faqOpen = 4">
                      <h4 :class="faqOpen == 4 ? 'text-main-600 font-bold' : ''">
                          What’s an update?
                      </h4>
                      <svg :class="faqOpen == 4 ? 'flip-y' : ''"
                          class="w-5 h-5 text-gray-500"
                          fill="none" stroke-linecap="round" 
                          stroke-linejoin="round" stroke-width="2" 
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </div>
                  <div v-show="faqOpen == 4" class="mt-3" :class="faqOpen == 4 ? 'text-gray-600' : ''">
                      When you update a OceanSheet connection, the source data is transferred to the destination tab, leaving the source tab intact. You can update a connection manually by clicking Update, update a workflow manually by clicking Run, or schedule automatic updates for the entire workflow. Each time a connection is updated, the data in the destination file is refreshed with the latest data from the source file. You can log previous data updates by using the Append feature.
                  </div>
              </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <div class="bg-white rounded-lg hover:bg-gray-100 pt-3 overflow-hidden">
                  <router-link :to="{name: 'dashboard.support.ticket'}">
                    <img class="w-2/3 md:w-1/2 mx-auto h-auto"
                        src="/assets/img/customer-support.svg"
                        alt="Contact with Customer support" title="Contact with Customer support">
                    <span class="text-center p-2 text-gray-700 text-sm inline-block w-full">
                      Customer support
                    </span>
                  </router-link>
              </div>
              <div class="bg-white rounded-lg hover:bg-gray-100 pt-3 overflow-hidden">
                  <router-link :to="{name: 'dashboard.support.feedback'}">
                    <img class="w-2/3 md:w-1/2 mx-auto h-auto"
                        src="/assets/img/write-feedback.svg"
                        alt="Write your feedback" title="Write your feedback">
                    <span class="text-center p-2 text-gray-700 text-sm inline-block w-full">
                      Write feedback
                    </span>
                  </router-link>
            </div>
          </div>
      </section>
    </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'Help center' }
  },

  data() {
    return {
      faqOpen: 0
    }
  },
}
</script>

<style scoped>
  .flip-y {
    transform: rotateX(180deg);
    transform-style: preserve-3d;
  }
</style>