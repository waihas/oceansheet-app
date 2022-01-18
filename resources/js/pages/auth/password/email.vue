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
          <form v-if="!status" @submit.prevent="send" @keydown="form.onKeydown($event)">
            <div class="mb-8">
              <label class="font-bold text-gray-700 select-none" for="email">Email address</label>
              <input id="email" v-model="form.email"
                     :class="{ 'invalid': form.errors.has('email') || form.errors.has('credentials') }"
                     class="form-input block w-full text-gray-800 mt-2" name="email" type="email"
              >
              <p v-if="!form.errors.has('email')" class="font-medium text-sm text-gray-500 mt-2 select-none">
                We'll send a password reset link to your inbox
              </p>
              <has-error class="text-sm text-red-500 font-semibold mt-2" :form="form" field="email" />
            </div>

            <div>
              <v-button :loading="form.busy">
                {{ $t('send_password_reset_link') }}
              </v-button>
            </div>
          </form>
          <div v-else class="text-center">
            <fa :icon="['far', 'envelope-open']" class="text-teal-500 opacity-50 text-7xl mb-4" />
            <h1 class="text-3xl font-bold text-gray-800 leading-loose">
              You've got mail
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

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            New here?
            <router-link :to="{name: 'register'}" class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                Create an account
            </router-link>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <form v-if="!status" @submit.prevent="send" @keydown="form.onKeydown($event)">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            Email address
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="email" name="email" v-model="form.email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                             :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('email') || form.errors.has('credentials') }"/>
                        </div>
                        <p v-if="!form.errors.has('email')" class="font-medium text-sm text-gray-500 mt-2 select-none">
                          We'll send a password reset link to your inbox
                        </p>
                        <has-error class="text-sm text-red-600 mt-2" :form="form" field="email" />
                    </div>

                    <div class="mt-6">
                      <v-button :loading="form.busy">
                      {{ $t('send_password_reset_link') }}
                    </v-button>
                        <!-- <span class="block w-full rounded-md" wire:loading wire:target="sendResetPasswordLink">
                            <button type="button"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium hover:bg-gray-700 rounded-md text-white bg-teal-600 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out cursor-wait"
                                disabled>
                                <svg class="animate-spin h-5 w-5 mr-3 fill-current text-white" viewBox="0 0 24 24">
                                    <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                                </svg>
                                En traitement
                            </button>
                        </span>
                        <span class="block w-full rounded-md" wire:loading.remove wire:target="sendResetPasswordLink">
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium hover:bg-gray-700 rounded-md text-white bg-teal-600 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out">
                                Envoyer le lien de réinitialisation
                            </button>
                        </span> -->
                    </div>
                    <!-- <div class="mt-4">
                      <router-link :to="{name: 'login'}"
                                  class="hover:text-teal-600 transition-all duration-100 ease-in-out text-gray-800 font-medium"
                      >
                        <fa :icon="['fas', 'chevron-left']" class="mr-1 text-sm" />
                        Back to login
                      </router-link>
                    </div>
                     -->

                    <!-- <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:ring-teal active:bg-teal-700 transition duration-150 ease-in-out">
                                Send password reset link
                            </button>
                        </span>
                    </div> -->
                </form>
                <!-- <div  class="text-center">
                  <fa :icon="['far', 'envelope-open']" class="text-teal-500 opacity-50 text-7xl mb-4" />
                  <h1 class="text-3xl font-bold text-gray-800 leading-loose">
                    You've got mail
                  </h1>
                  <h2 class="text-base font-medium text-gray-500">
                    {{ status }}
                  </h2>
                </div> -->

                <div v-else class="rounded-md bg-green-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>

                        <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-green-800">
                                {{ status }}
                            </p>
                        </div>
                    </div>
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
    status: null,
    form: new Form({
      email: ''
    })
  }),

  methods: {
    async send () {
      const { data } = await this.form.post('/api/password/email')

      this.status = data.status

      this.form.reset()
    }
  }
}
</script>
