<template>
    <div>
        <section class="text-gray-600 min-h-screen flex items-center">
            <div v-if="successed" class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-5xl text-3xl font-medium mb-4 text-gray-900">
                        Super thank you!
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-8">
                        We've got your email, and we will let you know when launch OceanSheet as soon as possible.
                    </p>
                    <img class="w-full lg:w-1/5 mx-auto"
                        src="/assets/img/super-thank-you.svg" 
                        alt="OceanSheet Thanks you">
                </div>
            </div>
            <div v-else class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-5xl text-3xl font-medium mb-4 text-gray-900">
                        Subscribe to get notified when we launch!
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        OceanSheet is a web application that allows you to Connect, Manage and Automate your spreadsheets easily.
                    </p>
                </div>
                <form @submit.prevent="subscribe" @keydown="form.onKeydown($event)"
                    class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                    <div class="relative flex-grow w-full">
                        <label for="full-name" class="leading-7 text-sm text-gray-600">
                            Name
                        </label>
                        <input type="text" v-model="form.name" id="name" required
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-main-500 focus:bg-transparent focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        <has-error class="text-sm text-red-600 mt-2" :form="form" field="name" />
                    </div>
                    <div class="relative flex-grow w-full">
                        <label for="email" class="leading-7 text-sm text-gray-600">
                            Email
                        </label>
                        <input type="email" id="email" v-model="form.email" required
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-main-500 focus:bg-transparent focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        <has-error class="text-sm text-red-600 mt-2" :form="form" field="email" />
                    </div>
                    <v-button :loading="form.busy">
                        Subscribe
                    </v-button>
                    <!-- <button class="text-white bg-main-500 border-0 py-2 px-8 focus:outline-none hover:bg-main-600 rounded text-lg">
                        Subscribe
                    </button> -->
                </form>
            </div>
        </section>
    </div>
</template>

<script>
import Form from 'vform'

export default {
  layout: 'simple',

  metaInfo () {
    return { title: 'Get Notified at Launch!' }
  },

  data: () => ({
    title: window.config.appName,
    form: new Form({
      name: '',
      email: '',
    }),
    successed: false
  }),

  methods: {
    async subscribe () {
      const { data } = await this.form.post('/api/newsletter/add')

      if (data.success) {
        this.successed = true
      }
    }
  }
}
</script>
