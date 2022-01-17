<!--template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <card :title="$t('verify_email')">
        <template v-if="success">
          <div class="alert alert-success" role="alert">
            {{ success }}
          </div>

          <router-link :to="{ name: 'login' }" class="btn btn-primary">
            {{ $t('login') }}
          </router-link>
        </template>
        <template v-else>
          <div class="alert alert-danger" role="alert">
            {{ error || $t('failed_to_verify_email') }}
          </div>

          <router-link :to="{ name: 'verification.resend' }" class="small float-right">
            {{ $t('resend_verification_link') }}
          </router-link>
        </template>
      </card>
    </div>
  </div>
</template-->

<template>
  <div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <v-logo></v-logo>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Vérifiez votre adresse e-mail
        </h2>

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Ou
            <a href="/logout" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
            class="font-medium text-ayyaw-600 hover:text-ayyaw-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                se déconnecter
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <!-- @if (session('resent'))
                <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" role="alert">
                    <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>

                    <p>Un nouveau lien de vérification a été envoyé à votre adresse e-mail.</p>
                </div>
            @endif -->

            <div class="text-sm text-gray-700">
                <p>Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.</p>

                <p class="mt-3">
                    Si vous n'avez pas reçu l'e-mail, <a click="resend" class="text-ayyaw-700 cursor-pointer hover:text-ayyaw-600 focus:outline-none focus:underline transition ease-in-out duration-150">cliquez ici pour en demander un autre</a>.
                </p>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios'

const qs = (params) => Object.keys(params).map(key => `${key}=${params[key]}`).join('&')

export default {
  middleware: 'guest',
  layout: 'auth',

  metaInfo () {
    return { title: this.$t('verify_email') }
  },

  async beforeRouteEnter (to, from, next) {
    try {
      const { data } = await axios.post(`/api/email/verify/${to.params.id}?${qs(to.query)}`)

      next(vm => { vm.success = data.status })
    } catch (e) {
      next(vm => { vm.error = e.response.data.status })
    }
  },

  data: () => ({
    error: '',
    success: ''
  })
}
</script>
