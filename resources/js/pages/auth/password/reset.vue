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
            Réinitialiser le mot de passe
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form submit.prevent="resetPassword">
                <input id="token" type="hidden">

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Adresse e-mail
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    <!-- <p class="mt-2 text-sm text-red-600">{{ $message }}</p> -->
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Mot de passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    <!-- <p class="mt-2 text-sm text-red-600">{{ $message }}</p> -->
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                        Confirmez le mot de passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password_confirmation" type="password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-6">
                  <v-button :loading="form.busy">
                    {{ $t('reset_password') }}
                  </v-button>
                    <!-- <span class="block w-full rounded-md" wire:loading wire:target="resetPassword">
                        <button type="button"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium hover:bg-gray-700 rounded-md text-white bg-ayyaw-600 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out cursor-wait"
                            disabled>
                            <svg class="animate-spin h-5 w-5 mr-3 fill-current text-white" viewBox="0 0 24 24">
                                <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                            </svg>
                            En traitement
                        </button>
                    </span>
                    <span class="block w-full rounded-md" wire:loading.remove wire:target="resetPassword">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium hover:bg-gray-700 rounded-md text-white bg-ayyaw-600 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out">
                            Réinitialiser
                        </button>
                    </span> -->
                </div>

                <!-- <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-ayyaw-600 border border-transparent rounded-md hover:bg-ayyaw-500 focus:outline-none focus:border-ayyaw-700 focus:ring-ayyaw active:bg-ayyaw-700 transition duration-150 ease-in-out">
                            Reset password
                        </button>
                    </span>
                </div> -->
            </form>
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
