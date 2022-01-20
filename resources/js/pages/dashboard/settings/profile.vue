<template>
    <div class="container mx-auto px-4 sm:px-8 max-w-5xl">
          <div class="sm:w-full sm:max-w-md mt-8">
            <h2 class="text-3xl font-extrabold text-gray-900 leading-9">
                Account
            </h2>
          </div>
          
          <notification class="mt-8" ref="success">
            {{ $t('info_updated') }}
          </notification>

          <!-- <div v-show="success" class="alert flex flex-row items-center bg-green-200 p-5 mt-8 rounded border-b-2 border-green-300">
            <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-green-500">
                    <svg fill="currentColor"
                            viewBox="0 0 20 20"
                            class="h-6 w-6">
                        <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-green-800">
                    Success
                </div>
                <div class="alert-description text-sm text-green-600">
                    {{ $t('info_updated') }}
                </div>
            </div>
          </div> -->

          <form class="mt-8" @submit.prevent="update" @keydown="form.onKeydown($event)">
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="px-4 py-5 bg-white sm:p-6">

                      <div>
                          <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                              Name
                          </label>

                          <div class="mt-1 rounded-md shadow-sm">
                              <input id="name" v-model="form.name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                              :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('name') }"
                              />
                          </div>

                          <has-error class="mt-2 text-sm text-red-600" :form="form" field="name" />
                      </div>

                      <div class="mt-6">
                          <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                              Email address
                          </label>

                          <div class="mt-1 rounded-md shadow-sm">
                              <input id="email" v-model="form.email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                              :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('email') }"
                              />
                          </div>
                          
                          <has-error class="text-sm text-red-600 mt-2" :form="form" field="email" />
                      </div>

                  </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <v-button :loading="form.busy" type="success" class="text-white bg-main-600 hover:bg-main-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-500">
                        {{ $t('update') }}
                      </v-button>
                  </div>
              </div>
          </form>		
    </div>
</template>

<!--template>
  <div class="w-full flex">
    <card class="w-160 mx-auto">
      <div class="mx-auto py-4 lg:py-8 px-0 lg:px-12">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
          <notification ref="success">
            {{ $t('info_updated') }}
          </notification>

          <!-- Name->
          <div class="mb-6">
            <label class="font-bold text-gray-700 select-none" for="name">Name</label>
            <input id="name" v-model="form.name" :class="{ 'invalid': form.errors.has('name') }"
                   class="form-input block w-full text-gray-800 mt-2" name="name" type="text"
            >
            <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="name" />
          </div>

          <!-- Email ->
          <div class="mb-8">
            <label class="font-bold text-gray-700 select-none" for="email">Email</label>
            <input id="email" v-model="form.email" :class="{ 'invalid': form.errors.has('email') }"
                   class="form-input block w-full text-gray-800 mt-2" name="email" type="email"
            >
            <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="email" />
          </div>

          <!-- Submit Button ->
          <div>
            <div>
              <v-button :loading="form.busy">
                {{ $t('update') }}
              </v-button>
            </div>
          </div>
        </form>
      </div>
    </card>
  </div>
</template-->

<script>
import Form from 'vform'
import { mapGetters } from 'vuex'
import Notification from '~/components/Notification'

export default {
  components: { Notification },
  scrollToTop: false,
  layout: 'dashboard',

  metaInfo () {
    return { title: this.$t('settings') }
  },

  data: () => ({
    form: new Form({
      name: '',
      email: ''
    }),
    // success: false
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  created () {
    // Fill the form with user data.
    this.form.keys().forEach(key => {
      this.form[key] = this.user[key]
    })
  },

  methods: {
    async update () {
      const { data } = await this.form.patch('/api/settings/profile')

      // this.success = true
      this.$refs.success.show()
      await this.$store.dispatch('auth/updateUser', { user: data })
    }
  }
}
</script>
