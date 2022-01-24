<template>
  <div class="container mx-auto px-4 sm:px-8 max-w-5xl">
    <form class="mt-8">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white sm:p-6">

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Plan
                        </label>
                        <!-- <div class="mt-1 rounded-md shadow-sm">
                            <input id="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': formAccount.errors.has('name') }"
                            />
                        </div>
                        <has-error class="mt-2 text-sm text-red-600" :form="formAccount" field="name" /> -->
                    </div>

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            Usage
                        </label>
                        <!-- <div class="mt-1 rounded-md shadow-sm">
                            <input id="email" v-model="form.email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red': formAccount.errors.has('email') }"
                            />
                        </div>
                        <has-error class="text-sm text-red-600 mt-2" :form="form" field="email" /> -->
                    </div>

                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <!-- <v-button :loading="form.busy" type="success" class="text-white bg-main-600 hover:bg-main-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-500">
                    {{ $t('update') }}
                    </v-button> -->
                </div>
            </div>
        </form>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'Settings · Billing' }
  }
}
</script>
