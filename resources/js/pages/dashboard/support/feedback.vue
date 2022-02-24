<template>
    <div class="p-6 sm:p-10 space-y-6">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2">Your opinion matters to us!</h1>
                <h2 class="text-gray-500 ml-0.5">To help us improve more and more!</h2>
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
                <div v-if="successed" class="container px-5 py-8 mx-auto">
                    <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-5xl text-3xl font-medium mb-4 text-gray-900">
                            Super thank you!
                        </h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-8">
                            We've got your feedback, we thank you and we will try to make this application as easy as possible for you.
                        </p>
                        <img class="w-full lg:w-1/5 mx-auto"
                            src="/assets/img/super-thank-you.svg" 
                            alt="OceanSheet Thanks you">
                    </div>
                </div>
                <div v-else class="flex flex-col p-4">
                    <form @submit.prevent="sendFeedback" @keydown="form.onKeydown($event)"
                        class="flex flex-col items-center">
                        <div class="flex flex-col items-center py-6 space-y-3">
                            <span class="text-lg text-gray-600">How was quality of our solution?</span>
                            <div class="flex space-x-3">
                                <svg @click="setNote(1)" :class="form.note > 0 ? 'text-yellow-500' : 'text-gray-500'" class="w-12 h-12 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg @click="setNote(2)" :class="form.note > 1 ? 'text-yellow-500' : 'text-gray-500'" class="w-12 h-12 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg @click="setNote(3)" :class="form.note > 2 ? 'text-yellow-500' : 'text-gray-500'" class="w-12 h-12 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg @click="setNote(4)" :class="form.note > 3 ? 'text-yellow-500' : 'text-gray-500'" class="w-12 h-12 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg @click="setNote(5)" :class="form.note > 4 ? 'text-yellow-500' : 'text-gray-500'" class="w-12 h-12 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <has-error class="text-sm text-red-600 mt-2" :form="form" field="note" />
                        </div>
                        <div class="w-3/4 flex flex-col pb-6">
                            <textarea rows="3"
                                v-model="form.message"
                                required
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-main-500 focus:bg-transparent focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                placeholder="Leave us a message describing your experience!"></textarea>
                            <has-error class="text-sm text-red-600 mt-2" :form="form" field="message" />
                            
                            <div class="my-6">
                                <v-button :loading="form.busy">
                                    Rate now
                                </v-button>
                            </div>
                        </div>
                    </form>
                </div>
            <!-- </div> -->
        </section>
    </div>
</template>

<script>
import Form from 'vform'

export default {
    middleware: 'auth',
    layout: 'dashboard',

    metaInfo () {
        return { title: 'Give us your feedback!' }
    },

    data: () => ({
        form: new Form({
            note: null,
            message: '',
        }),
        successed: false
    }),

    methods: {
        async sendFeedback () {
            const { data } = await this.form.post('/api/feedback/add')

            if (data.success) {
                this.successed = true
            }
        },
        setNote: function(val) {
            if(val > 0 && val < 6)
                this.form.note = val
        }
    }
}
</script>
