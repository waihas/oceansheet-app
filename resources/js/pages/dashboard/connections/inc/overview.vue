<template>
    <div class="flex flex-col bg-white rounded-lg">
        <div class="px-6 py-5 font-semibold border-b border-gray-100">
            Connection overview
        </div>
        <div v-if="loading" class="flex items-center justify-center h-full px-4 py-16 rounded-md">
            <div class="flex flex-col text-center cursor-wait">
                <svg class="animate-spin h-24 mx-auto w-24 fill-current text-gray-200" viewBox="0 0 24 24">
                    <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                </svg>
            </div>
        </div>
        <div v-else>
            <section class="grid md:grid-cols-3 gap-4 p-4">
                <div class="flex items-center py-3 px-8 border rounded-xl">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">4</span>
                        <span class="block text-gray-500">Managers</span>
                    </div>
                </div>
                <div class="flex items-center py-3 px-8 border rounded-xl">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">69</span>
                        <span class="block text-gray-500">Updates per month</span>
                    </div>
                </div>
                <div class="flex items-center py-3 px-8 border rounded-xl">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-2xl font-bold">9</span>
                        <span class="block text-gray-500">Updates left</span>
                    </div>
                </div>
            </section>
            <div class="p-4 flex-grow">
                <div class="flex items-center h-full px-4 py-8 border-2 border-gray-200 border-dashed rounded-md">
                    <div class="w-2/5 flex flex-col">
                        <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                        <div class="mt-6 flex flex-col text-center text-gray-700">
                            <div class="text-2xl">
                                {{this.sheetFileSource}}
                            </div>
                            <div class="text-sm mt-2">
                                {{this.sheetSource}}
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto text-gray-300 fill-current" viewBox="0 0 24 24">
                            <path d="M0 3.795l2.995-2.98 11.132 11.185-11.132 11.186-2.995-2.981 8.167-8.205-8.167-8.205zm18.04 8.205l-8.167 8.205 2.995 2.98 11.132-11.185-11.132-11.186-2.995 2.98 8.167 8.206z"/>
                        </svg>
                    </div>
                    <div class="w-2/5 flex flex-col">
                        <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                        <div class="mt-6 flex flex-col text-center text-gray-700">
                            <div class="text-2xl">
                                {{this.sheetFileOutput}}
                            </div>
                            <div class="text-sm mt-2">
                                {{this.sheetOutput}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="grid md:grid-cols-3 gap-4 p-4">
                <div class="rounded-xl">
                    <router-link :to="{name: 'dashboard.connections.edit', params: { token: token }}" class="inline-flex justify-between items-center w-full p-3 text-main-600 hover:text-main-700 focus:text-main-700 bg-main-50 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 fill-current" viewBox="0 0 24 24">
                        <path d="M18.363 8.464l1.433 1.431-12.67 12.669-7.125 1.436 1.439-7.127 12.665-12.668 1.431 1.431-12.255 12.224-.726 3.584 3.584-.723 12.224-12.257zm-.056-8.464l-2.815 2.817 5.691 5.692 2.817-2.821-5.693-5.688zm-12.318 18.718l11.313-11.316-.705-.707-11.313 11.314.705.709z"/>
                    </svg>
                    Edit
                    </router-link>
                </div>
                <div class="rounded-xl">
                    <router-link :to="{name: 'dashboard.connections.view', params: { token: token }}" class="inline-flex justify-between items-center w-full p-3 text-main-600 hover:text-main-700 focus:text-main-700 bg-main-50 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 fill-current" viewBox="0 0 24 24">
                        <path d="M15 12c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-.199.02-.393.057-.581 1.474.541 2.927-.882 2.405-2.371.174-.03.354-.048.538-.048 1.657 0 3 1.344 3 3zm-2.985-7c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 12c-2.761 0-5-2.238-5-5 0-2.761 2.239-5 5-5 2.762 0 5 2.239 5 5 0 2.762-2.238 5-5 5z"/>
                    </svg>
                    View
                    </router-link>
                </div>
                <div class="rounded-xl">
                     <run-connection 
                        class="inline-flex justify-between items-center w-full p-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md"
                        :token="token">
                    </run-connection>
                    
                    <!-- <button type="button" class="inline-flex justify-between items-center w-full p-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 fill-current" viewBox="0 0 24 24">
                            <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                        </svg>
                        Run
                    </button> -->
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import RunConnection from '~/components/connection/Run'

export default {
    name: 'Overview',

    components: { RunConnection },

    props: {
        token: '',
    },

    data() {
        return {
            name: '',
            sheetFileSource: '',
            sheetSource: '',
            sheetFileOutput: '',
            sheetOutput: '',
            loading: true,
        }
    },

    watch: { 
      	token: function(newVal, oldVal) {
            this.loadConnection()
        }
    },

    mounted() {
        this.loadConnection();
    },

    methods: {
        async loadConnection() {
            this.loading = true;
            if(this.token != null && this.token != '') {
                await axios.get('/api/connection/'+this.token+'/get')
                    .then(res => {
                        this.sheetFileSource = res.data.data.source_spreadsheetName
                        this.sheetSource = res.data.data.source_title
                        this.sheetFileOutput = res.data.data.output_spreadsheetName
                        this.sheetOutput = res.data.data.output_title
                    })
                    .catch(e => {
                        console.error(e)
                    })
            }
            this.loading = false;
        }  
    },
}
</script>