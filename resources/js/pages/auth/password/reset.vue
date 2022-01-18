<!--template>
  <div class="flex w-screen h-screen">
    <div class="m-auto flex flex-col max-w-screen">
      <div class="p-8 mx-auto text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-1 tracking-tight">
          Reset your password
        </h1>
        <h2 class="text-lg text-gray-800 font-medium">
          New here?
          <router-link :to="{name: 'register'}"
                       class="text-teal-500 hover:text-teal-600 transition-all duration-100 ease-in-out"
          >
            Create an account
          </router-link>
        </h2>
      </div>
      <div class="px-3 w-screen sm:w-128 max-w-screen">
        <div class="bg-white rounded shadow py-10 lg:py-12 px-6 sm:px-8 md:px-10 lg:px-12">
          <form v-if="!status" @submit.prevent="reset" @keydown="form.onKeydown($event)">
            <div class="mb-6">
              <label class="font-bold text-gray-700 select-none" for="email">Email address</label>
              <input id="email" v-model="form.email"
                     :class="{ 'invalid': form.errors.has('email') }"
                     class="form-input block w-full text-gray-800 mt-2" name="email" type="email"
              >
              <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="email" />
            </div>

            <div class="mb-8">
              <label class="font-bold text-gray-700 select-none" for="password">New password</label>
              <input id="password" v-model="form.password" :class="{ 'invalid': form.errors.has('password') }"
                     class="form-input block w-full text-gray-800 mt-2" name="password" type="password" placeholder="Min. 6 characters"
              >
              <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="password" />
            </div>

            <div>
              <v-button :loading="form.busy">
                {{ $t('reset_password') }}
              </v-button>
            </div>
          </form>
          <div v-else class="text-center">
            <fa :icon="['far', 'check-circle']" class="text-teal-500 opacity-50 text-7xl mb-4" />
            <h1 class="text-3xl font-bold text-gray-800 leading-loose">
              Reset successful
            </h1>
            <h2 class="text-base font-medium text-gray-500">
              {{ status }}
            </h2>
          </div>
        </div>
        <div class="mt-4">
          <router-link :to="{name: 'login'}"
                       class="hover:text-teal-600 transition-all duration-100 ease-in-out text-gray-800 font-medium"
          >
            <fa :icon="['fas', 'chevron-left']" class="mr-1 text-sm" />
            Back to login
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template-->

<template>
  <div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <v-logo></v-logo>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Reset your password
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form v-if="!status" @submit.prevent="reset" @keydown="form.onKeydown($event)">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="email" v-model="form.email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('email') }" />
                    </div>
                    <has-error class="text-sm text-red-600 mt-2" :form="form" field="email" />
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        New password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password" v-model="form.password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                        :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('password') }"
                        placeholder="Min. 6 characters"/>
                    </div>
                    <has-error class="text-sm text-red-600 mt-2" :form="form" field="password" />
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                        Repeat new password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password_confirmation" v-model="form.password_confirmation" type="password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-6">
                  <v-button :loading="form.busy">
                    {{ $t('reset_password') }}
                  </v-button>
                </div>
            </form>
            <div v-else class="text-center">
              <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" role="alert">
                  <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <p>{{ success }}</p>
              </div>

              <router-link :to="{ name: 'login' }" class="text-teal-700 cursor-pointer hover:text-teal-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                {{ $t('login') }}
              </router-link>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Form from 'vform'

export default {
  middleware: 'guest',
  layout: 'auth',

  metaInfo () {
    return { title: this.$t('reset_password') }
  },

  data: () => ({
    status: '',
    form: new Form({
      token: '',
      email: '',
      password: '',
      password_confirmation: ''
    })
  }),

  created () {
    this.form.email = this.$route.query.email
    this.form.token = this.$route.params.token
  },

  methods: {
    async reset () {
      const { data } = await this.form.post('/api/password/reset')

      this.status = data.status

      this.form.reset()
    }
  }
}
</script>
