<template>
    <div>
        <section class="text-gray-600">
            <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium text-gray-900 mb-4">Need help?</h1>
                    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">You facing problems using one of our products our services, feel free to send us a message describing your issue.</p>
                    <div class="flex mt-6 justify-center">
                        <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
                    </div>
                </div>

                <div class="flex flex-col sm:-m-4 px-5 -mt-4 md:space-y-0 space-y-6">

                    <div class="md:w-1/2 w-full md:mx-auto mb-8 flex flex-col divide-y text-gray-800 text-base">
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isOpen1 = !isOpen1">
                                <h4 :class="isOpen1 ? 'text-main-600 font-bold' : ''">Can't create a connection for Google Sheets</h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isOpen1" class="mt-3" :class="isOpen1 ? 'text-gray-600' : ''">
                                First go to the dashboard and click in the sidebar on Connections, after that click on "Create new connection", then please try to follow the instruction in the right of each step.
                            </div>
                        </div>
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isOpen2 = !isOpen2">
                                <h4 :class="isOpen2 ? 'text-main-600 font-bold' : ''">Can't create a workflow</h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isOpen2" class="mt-3" :class="isOpen2 ? 'text-gray-600' : ''">
                                First thing go to the dashboard and click in the sidebar on Workflows, after that click on "Create new workflow", then please try to follow the instruction in the right of each step.
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 bg-gray-100 md:mx-auto rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 relative z-10 shadow-md">
                        <div class="relative mb-4">
                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="message" class="leading-7 text-sm text-gray-600">Describe your issue</label>
                            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <button class="text-white bg-main-500 border-0 py-2 px-6 focus:outline-none hover:bg-main-600 rounded text-lg">Send request</button>
                    </div>

                </div>
            </div>
        </section>
    </div>
</template>

<script>

export default {
  layout: 'basic',

  metaInfo () {
    return { title: 'Need help?' }
  },

  data: () => ({
    title: window.config.appName,
    isOpen1: false,
    isOpen2: false,
  }),
}
</script>
