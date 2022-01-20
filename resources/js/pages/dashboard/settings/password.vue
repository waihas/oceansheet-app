<template>
    <div class="container mx-auto px-4 sm:px-8 max-w-5xl">
          <div class="sm:w-full sm:max-w-md mt-8">
            <h2 class="text-3xl font-extrabold text-gray-900 leading-9">
                Settings
            </h2>
          </div>
          
          <notification class="mt-8" ref="success">
            {{ $t('info_updated') }}
          </notification>

          <form class="mt-8" @submit.prevent="update" @keydown="form.onKeydown($event)">
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="px-4 py-5 bg-white sm:p-6">

                      <div>
                          <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                              New Password
                          </label>

                          <div class="mt-1 rounded-md shadow-sm">
                              <input id="password" v-model="form.password" type="password" required autofocus placeholder="Min. 6 characters" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                              :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('password') }"
                              />
                          </div>

                          <has-error class="mt-2 text-sm text-red-600" :form="form" field="password" />
                      </div>

                      <div class="mt-6">
                          <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                              Repeat New Password
                          </label>

                          <div class="mt-1 rounded-md shadow-sm">
                              <input id="password_confirmation" v-model="form.password_confirmation" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                              :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('password_confirmation') }"
                              />
                          </div>
                          
                          <has-error class="text-sm text-red-600 mt-2" :form="form" field="password_confirmation" />
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
            {{ $t('password_updated') }}
          </notification>

          <!-- Password ->
          <div class="mb-6">
            <label class="font-bold text-gray-700 select-none" for="password">Password</label>
            <input id="password" v-model="form.password" :class="{ 'invalid': form.errors.has('password') }"
                   class="form-input block w-full text-gray-800 mt-2" name="password" type="password" placeholder="Min. 6 characters"
            >
            <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="password" />
          </div>

          <!-- Password Confirmation ->
          <div class="mb-8">
            <label class="font-bold text-gray-700 select-none" for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" v-model="form.password_confirmation" :class="{ 'invalid': form.errors.has('password_confirmation') }"
                   class="form-input block w-full text-gray-800 mt-2" name="password_confirmation" type="password"
            >
            <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="password_confirmation" />
          </div>

          <!-- Submit Button ->
          <div>
            <div>
              <v-button :loading="form.busy" type="success">
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
      password: '',
      password_confirmation: ''
    })
  }),

  methods: {
    async update () {
      await this.form.patch('/api/settings/password')

      this.form.reset()
      this.$refs.success.show()
    }
  }
}
</script>
