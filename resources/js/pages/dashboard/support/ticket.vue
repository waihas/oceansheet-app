<template>
    <div class="p-6 sm:p-10 space-y-6">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2">Describe your problem in message</h1>
                <h2 class="text-gray-500 ml-0.5">What issue you facing?</h2>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <router-link :to="{name: 'dashboard.support'}"
                    class="inline-flex px-5 py-2 text-main-600 hover:text-main-700 focus:text-main-700 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" class="flex-shrink-0 h-4 w-4 -ml-1 my-auto mr-2 fill-current">
                        <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/>
                    </svg>
                    Back
                </router-link>
            </div>
        </div>

        <section class="container bg-white mx-auto max-w-7xl rounded-xl">
                <div v-if="isSent">
                    <div v-if="message" class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                            <span class="font-medium">Dear friend!</span> {{message}}
                        </div>
                    </div>
                    <!-- <img class="w-2/3 md:w-1/3 mx-auto h-auto" src="{{ asset('images/mail-sent.svg') }}" alt="Message has been sent!"> -->
                </div>
            <form v-else @submit.prevent="sendTicket" @keydown="form.onKeydown($event)">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="type" class="block text-sm font-medium text-gray-700">
                                Type
                            </label>
                            <select id="type"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-main-500 focus:border-main-500 sm:text-sm">
                                <option value="">Select type</option>
                                <option value="problem">Problem</option>
                                <option value="query">Query</option>
                            </select>
                            <span v-if="errorType" class="text-red-500 text-sm">{{ $errorType }}</span>
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3">
                                <label for="title" class="block text-sm font-medium text-gray-700">
                                Title
                                </label>
                                <div class="mt-1 flex rounded-md">
                                    <input type="text"
                                        class="border shadow-sm py-2 px-3 focus:ring-main-500 focus:border-main-500 flex-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                    >
                                </div>
                                <span v-if="errorTitle" class="text-red-500 text-sm">{{ $errorTitle }}</span>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Your message
                            </label>
                            <div class="mt-1">
                                <textarea id="about" rows="3"
                                    class="border shadow-sm focus:ring-main-500 px-3 py-2 focus:border-main-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                ></textarea>
                                <span v-if="messageError" class="text-red-500 text-sm">{{ $messageError }}</span>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Description for your situation.
                            </p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Add image
                            </label>
                            <div id="FileUpload"
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 relative bg-white appearance-none border-2 border-gray-300 border-dashed rounded-md cursor-pointer">
                                <input type="file" class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0">
                                <template>
                                    <div class="flex flex-col space-y-2 items-center justify-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="text-sm text-gray-600">
                                            <button class="bg-white rounded-md font-medium text-main-600 hover:text-main-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-500">
                                            Upload a file
                                            </button>
                                            or drag and drop
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 1MB
                                        </p>
                                    </div>
                                </template>
                            </div>
                            <!-- @if ($image)
                                Image Preview:
                                <img class="rounded-lg w-1/3 mx-auto shadow" src="{{ $image->temporaryUrl() }}">
                            @endif -->
                            <span v-if="imageError" class="text-red-500 text-sm">{{ $imageError }}</span> 
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                        <span v-if="sending">
                            <button type="button"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-medium rounded-md text-white bg-main-600 hover:bg-main-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-500 cursor-wait">
                                <svg class="animate-spin h-5 w-5 mr-3 fill-current text-white" viewBox="0 0 24 24">
                                    <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                                </svg>
                                Sending
                            </button>
                        </span>
                        <span v-else>
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-medium rounded-md text-white bg-main-600 hover:bg-main-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-500">
                                <svg class="fill-current w-4 h-4 mr-2 my-auto" viewBox="0 0 24 24">
                                    <path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/>
                                </svg>
                                Send
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </section>
    </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  data() {
      return {
          sending: false,
          message: '',
          isSent: false,
          errorType: '',
          errorTitle: '',
          messageError: '',
          imageError: '',
      }
  },

  metaInfo () {
    return { title: 'Describe your issue!' }
  },

  methods: {
      sendTicket: function() {
            this.sending = true
            this.message = "This form is not working yet. We are working on it to be available ASAP. Thank you for your understanding."
            this.sending = false
            this.isSent = true
      }
  }
}
</script>
