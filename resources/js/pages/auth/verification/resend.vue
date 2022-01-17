<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <card :title="$t('verify_email')">
        <form @submit.prevent="send" @keydown="form.onKeydown($event)">
          <alert-success :form="form" :message="status" />

          <!-- Email -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
            <div class="col-md-7">
              <input v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control" type="email" name="email">
              <has-error :form="form" field="email" />
            </div>
          </div>

          <!-- Submit Button -->
          <div class="form-group row">
            <div class="col-md-9 ml-md-auto">
              <v-button :loading="form.busy">
                {{ $t('send_verification_link') }}
              </v-button>
            </div>
          </div>
        </form>
      </card>
    </div>
  </div>
</template>

<!--template>
  <div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <v-logo></v-logo>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Confirmer votre mot de passe
        </h2>
        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Veuillez confirmer votre mot de passe avant de continuer
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form submit.prevent="confirm">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Mot de passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password" name="password" type="password" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    <!-- <p class="mt-2 text-sm text-red-600" id="password-error">{{ $message }}</p> ->
                </div>

                <div class="flex items-center justify-end mt-6">
                    <div class="text-sm leading-5">
                        <a href="/password/request" class="font-medium text-ayyaw-600 hover:text-ayyaw-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Mot de passe oublié?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <v-button :loading="form.busy">
                    {{ $t('send_verification_link') }}
                  </v-button>
                    <!-- <span class="block w-full rounded-md" wire:loading wire:target="confirm">
                        <button type="button"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium hover:bg-gray-700 rounded-md text-white bg-ayyaw-600 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out cursor-wait"
                            disabled>
                            <svg class="animate-spin h-5 w-5 mr-3 fill-current text-white" viewBox="0 0 24 24">
                                <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                            </svg>
                            En traitement
                        </button>
                    </span>
                    <span class="block w-full rounded-md" wire:loading.remove wire:target="confirm">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium hover:bg-gray-700 rounded-md text-white bg-ayyaw-600 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out">
                            Confirmez le mot de passe
                        </button>
                    </span> ->
                </div>

                <!-- <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-ayyaw-600 border border-transparent rounded-md hover:bg-ayyaw-500 focus:outline-none focus:border-ayyaw-700 focus:ring-ayyaw active:bg-ayyaw-700 transition duration-150 ease-in-out">
                            Confirm password
                        </button>
                    </span>
                </div> ->
            </form>
        </div>
    </div>
</div>
</template-->

<script>
import Form from 'vform'

export default {
  middleware: 'guest',
  layout: 'auth',

  metaInfo () {
    return { title: this.$t('verify_email') }
  },

  data: () => ({
    status: '',
    form: new Form({
      email: ''
    })
  }),

  created () {
    if (this.$route.query.email) {
      this.form.email = this.$route.query.email
    }
  },

  methods: {
    async send () {
      const { data } = await this.form.post('/api/email/resend')

      this.status = data.status

      this.form.reset()
    }
  }
}
</script>
