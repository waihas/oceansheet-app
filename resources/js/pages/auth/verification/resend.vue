<!--template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <card :title="$t('verify_email')">
        <form @submit.prevent="send" @keydown="form.onKeydown($event)">
          <alert-success :form="form" :message="status" />

          <!-- Email ->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
            <div class="col-md-7">
              <input v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control" type="email" name="email">
              <has-error :form="form" field="email" />
            </div>
          </div>

          <!-- Submit Button ->
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
</template-->



<template>
  <div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <v-logo></v-logo>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Verify your email address
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
          
            <alert-success :form="form" :message="status" class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" />

            <div class="text-sm text-gray-700 mb-6">
                <p>Before proceeding, please check your email for a verification link.</p>
            </div>

            <form @submit.prevent="send" @keydown="form.onKeydown($event)">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="email" name="email" v-model="form.email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                        :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': form.errors.has('email') }"/>
                    </div>
                    <has-error class="mt-2 text-sm text-red-600" :form="form" field="email" />
                </div>

                <div class="mt-6">
                    <v-button :loading="form.busy">
                    {{ $t('send_verification_link') }}
                  </v-button>
                </div>
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
    },
  }
}
</script>
