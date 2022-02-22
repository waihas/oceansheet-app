<template>
<div class="p-6 sm:p-10 space-y-6">
      <!-- <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
          <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          <button class="inline-flex px-5 py-3 text-main-600 hover:text-main-700 focus:text-main-700 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md mb-3">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            Manage dashboard
          </button>
          <button class="inline-flex px-5 py-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md ml-6 mb-3">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Create new dashboard
          </button>
        </div>
      </div> -->
      <!-- <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">62</span>
            <span class="block text-gray-500">Students</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">6.8</span>
            <span class="block text-gray-500">Average mark</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
            </svg>
          </div>
          <div>
            <span class="inline-block text-2xl font-bold">9</span>
            <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
            <span class="block text-gray-500">Underperforming students</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">83%</span>
            <span class="block text-gray-500">Finished homeworks</span>
          </div>
        </div>
      </section> -->
      <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-flow-col gap-6">
        
        <!-- <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
              <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">25</span>
            <span class="block text-gray-500">Lections left</span>
          </div>
        </div> -->
        <!-- <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">139</span>
            <span class="block text-gray-500">Hours spent on lections</span>
          </div>
        </div> -->
        <div class="bg-white rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">List of connections</div>
          <!-- <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
            <span>Students by average mark</span>
            <button type="button" class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600" id="options-menu" aria-haspopup="true" aria-expanded="true">
              Descending
              <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div> -->
          <div class="overflow-y-auto"> <!-- style="max-height: 24rem;" -->
            <!-- <div class="bg-white rounded-lg shadow-xl px-4 relative"> -->
            <!-- <div class="p-6 space-y-6">

                  <div class="py-6 flex items-center w-full hover:bg-gray-50">
                      <a href="#" class="flex-1">
                          <div class="text-gray-400 text-base">Profile</div>
                      </a>
                      <div>
                          <svg width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
                              <line x1="30" y1="2" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="30" y1="18" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="20" y1="10" x2="40" y2="10" stroke="#9CA3AF" />
                          </svg>
                      </div>
                  </div>

                  <div class="py-6 flex items-center w-full border-t border-gray-200 hover:bg-gray-50">
                      <a href="#" class="flex-1">
                          <div class="text-gray-400 text-base">Status (Online)</div>
                      </a>
                      <div>
                          <svg width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
                              <line x1="30" y1="2" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="30" y1="18" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="20" y1="10" x2="40" y2="10" stroke="#9CA3AF" />
                          </svg>
                      </div>
                  </div>

                  <div class="py-6 flex items-center w-full border-t border-gray-200 hover:bg-gray-50">
                      <a href="#" class="flex-1">
                          <div class="text-gray-400 text-base">Notifications</div>
                      </a>
                      <div>
                          <svg width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
                              <line x1="30" y1="2" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="30" y1="18" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="20" y1="10" x2="40" y2="10" stroke="#9CA3AF" />
                          </svg>
                      </div>
                  </div>

                  <div class="py-6 flex items-center w-full hover:bg-gray-50 border-t border-gray-200 hover:bg-gray-50">
                      <a href="#" class="flex-1">
                          <div class="text-gray-400 text-base">Sign out</div>
                      </a>
                      <div>
                          <svg width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
                              <line x1="30" y1="2" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="30" y1="18" x2="40" y2="10" stroke="#9CA3AF" />
                              <line x1="20" y1="10" x2="40" y2="10" stroke="#9CA3AF" />
                          </svg>
                      </div>
                  </div>
              </div> -->
            <div class="w-full p-2 space-y-1 text-gray-700">
              <div v-if="loadingConnections">
                Loading connections...
              </div>
              <div v-else>
                <div v-for="conn in connections" :key="conn.id"
                  class="flex cursor-pointer px-3 py-2 rounded-lg"
                  :class="token == conn.token ? 'bg-gray-50 hover:bg-gray-100' : 'hover:bg-gray-50'"
                  @click="overviewConnection(conn.token)">
                  <div class="w-8 text-center py-1 my-auto">
                    <p class="text-xl text-main-500">&bull;</p>
                  </div>
                  <div class="w-4/5 py-3 px-1">
                      {{conn.name}}
                      <!-- Connection #{{index}} -->
                  </div>
                  <div class="w-1/5 p-3 my-auto">
                    <svg class="w-4 h-4 fill-current float-right" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                      <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-6 w-full">
              <router-link :to="{name: 'dashboard.connections.create'}" class="w-full inline-flex px-5 py-4 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                New Connection
              </router-link>
            </div>
          </div>
        </div>

        <div v-if="loadingConnections" class="md:col-span-3 md:row-span-2 flex flex-col bg-white rounded-lg">
           <div class="flex items-center justify-center h-full px-4 py-16 rounded-md">
              <div class="flex flex-col text-center cursor-wait">
                  <svg class="animate-spin h-24 mx-auto w-24 fill-current text-gray-200" viewBox="0 0 24 24">
                      <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                  </svg>
              </div>
          </div>
        </div>
        <div v-else class="md:col-span-3 md:row-span-2">
          <overview v-if="connections.length > 0" :token="token"></overview>
          <div v-else  class="flex flex-col bg-white rounded-lg">
            <div class="px-6 py-5 font-semibold border-b border-gray-100">
                How it works
            </div>
            <div class="p-2">
              <iframe class="w-full h-96 rounded-xl"
              src="https://www.youtube.com/embed/tgbNymZ7vqY">
              </iframe>
            </div>
          </div>
        </div>
        <!-- <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">Overwiew</div>
          <div class="p-4 flex-grow">
              <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                  Overview/Video tutorial
              </div>
          </div>
        </div> -->

      </section>
    </div>
</template>

<script>
import Overview from './connections/inc/overview'
import axios from 'axios'

export default {
  middleware: 'auth',
  layout: 'dashboard',

  components: { Overview },

  metaInfo () {
    return { title: 'Connections' }
  },

  data() {
    return {
      loadingConnections: true,
      connections: {},
      token: '',
    }
  },

  mounted () {
    this.loadConnections();
  },

  methods: {
      async loadConnections() {
        await axios.get('/api/connection/all')
          .then(response => {
            this.connections = response.data.data
            this.token = response.data.data[0].token
          })
          .catch(error => {
            console.error(error)
            console.log(error)
          })
          .finally(() => this.loadingConnections = false)
      },
      overviewConnection(token) {
        this.token = token;
        // console.log('we will show connection' + token)
      },
  }
}
</script>
