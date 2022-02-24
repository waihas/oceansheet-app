<template>
    <div class="flex flex-col bg-white rounded-lg">
        <div class="px-6 py-5 font-semibold border-b border-gray-100">
            Overview: {{name}}
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
                        <span class="block text-2xl font-bold">{{runTime ? runTime : '--:--'}}</span>
                        <span class="block text-gray-500">Schedule</span>
                    </div>
                </div>
                <div class="flex items-center py-3 px-8 border rounded-xl">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">{{countUpdates}}</span>
                        <span class="block text-gray-500">Updates made</span>
                    </div>
                </div>
                <div class="flex items-center py-3 px-8 border rounded-xl">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-2xl font-bold">{{updatesLeft}}</span>
                        <span class="block text-gray-500">Updates left</span>
                    </div>
                </div>
            </section>
            <div class="p-4 flex-grow">
                <div class="flex items-center h-full px-4 py-8 border-2 border-gray-200 border-dashed rounded-md">
                    <!-- <div class="w-2/5 flex flex-col">
                        <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                        <div class="mt-6 flex flex-col text-center text-gray-700">
                            <div class="text-2xl">
                                {{this.sheetFileSource}}
                            </div>
                            <div class="text-sm mt-2">
                                {{this.sheetSource}}
                            </div>
                        </div>
                    </div> -->
                    <div class="w-full sm:w-1/5 flex flex-col">
                        <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                        <div class="mt-6 flex flex-col text-center text-gray-700">
                            <div class="text-xl">
                                {{this.sheetFileSource}}
                            </div>
                            <div class="text-sm mt-2">
                                {{this.sheetSource}}
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto text-gray-300 fill-current" viewBox="0 0 24 24">
                            <path d="M0 3.795l2.995-2.98 11.132 11.185-11.132 11.186-2.995-2.981 8.167-8.205-8.167-8.205zm18.04 8.205l-8.167 8.205 2.995 2.98 11.132-11.185-11.132-11.186-2.995 2.98 8.167 8.206z"/>
                        </svg>
                    </div>
                    <!-- <div class="w-2/5 flex flex-col">
                        <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                        <div class="mt-6 flex flex-col text-center text-gray-700">
                            <div class="text-2xl">
                                {{this.sheetFileOutput}}
                            </div>
                            <div class="text-sm mt-2">
                                {{this.sheetOutput}}
                            </div>
                        </div>
                    </div> -->
                    <div class="w-full sm:w-3/5 flex flex-wrap justify-between">
                        <div class="flex flex-col mx-auto">
                            <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                            <div class="mt-6 flex flex-col text-center text-gray-700">
                                <div class="text-xl">
                                    {{this.sheetFileOutput1}}
                                </div>
                                <div class="text-sm mt-2">
                                    {{this.sheetOutput1}}
                                </div>
                            </div>
                        </div>
                        <div v-if="countOutputs > 1" class="flex flex-col mx-auto">
                            <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                            <div class="mt-6 flex flex-col text-center text-gray-700">
                                <div class="text-xl">
                                    {{this.sheetFileOutput2}}
                                </div>
                                <div class="text-sm mt-2">
                                    {{this.sheetOutput2}}
                                </div>
                            </div>
                        </div>
                        <div v-if="countOutputs == 3" class="flex flex-col mx-auto">
                            <img class="w-28 h-28 mx-auto" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                            <div class="mt-6 flex flex-col text-center text-gray-700">
                                <div class="text-xl">
                                    {{this.sheetFileOutput3}}
                                </div>
                                <div class="text-sm mt-2">
                                    {{this.sheetOutput3}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
				<div class="flex flex-row space-x-3 py-1 rounded-xl border">
					<div class="flex group w-full">
						<router-link :to="{name: 'dashboard.connections.view', params: { token: token }}" class="p-3 pb-0 text-gray-400 hover:text-main-500 w-full">
							<span class="flex flex-col items-center">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500 group-hover:text-gray-700 transition-color duration-200" viewBox="0 0 24 24">
                                    <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 7l-3.36-2.171c-.405.625-.64 1.371-.64 2.171 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-.742 0-1.438.202-2.033.554l2.033 3.446z"/>
                                </svg>
								<span class="my-2 transition-all duration-200">
									View
								</span>
								<span class="h-1 w-6 rounded-full group-hover:bg-main-500 transition-all duration-150 delay-100"></span>
							</span>
						</router-link>
					</div>
					<div class="flex group w-full">
						<router-link :to="{name: 'dashboard.connections.edit', params: { token: token }}" class="p-3 pb-0 text-gray-400 hover:text-main-500 w-full">
							<span class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500 group-hover:text-gray-700 transition-color duration-200" viewBox="0 0 24 24">
                                    <path d="M18.363 8.464l1.433 1.431-12.67 12.669-7.125 1.436 1.439-7.127 12.665-12.668 1.431 1.431-12.255 12.224-.726 3.584 3.584-.723 12.224-12.257zm-.056-8.464l-2.815 2.817 5.691 5.692 2.817-2.821-5.693-5.688zm-12.318 18.718l11.313-11.316-.705-.707-11.313 11.314.705.709z"/>
                                </svg>
								<span class="my-2 transition-all duration-200">
									Edit
								</span>
								<span class="h-1 w-6 rounded-full group-hover:bg-main-500 transition-all duration-150 delay-100"></span>
							</span>
						</router-link>
					</div>
					<div class="flex group w-full">
						<router-link :to="{name: 'dashboard.connections.edit', params: { token: token }}" class="p-3 pb-0 text-gray-400 hover:text-main-500 w-full">
							<span class="flex flex-col items-center">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500 group-hover:text-gray-700 transition-color duration-200" viewBox="0 0 24 24">
                                    <path d="M.002 20h6.001c-.028-6.542 2.995-3.697 2.995-8.901 0-2.009-1.311-3.099-2.998-3.099-2.492 0-4.226 2.383-1.866 6.839.775 1.464-.825 1.812-2.545 2.209-1.49.344-1.589 1.072-1.589 2.333l.002.619zm20.498-7c-1.932 0-3.5 1.567-3.5 3.5s1.568 3.5 3.5 3.5 3.5-1.567 3.5-3.5-1.568-3.5-3.5-3.5zm1.5 4h-1v1h-1v-1h-1v-1h1v-1h1v1h1v1zm-4.814 3h-9.183l-.003-.829c0-1.679.133-2.649 2.118-3.107 2.243-.518 4.458-.981 3.394-2.945-3.156-5.82-.901-9.119 2.488-9.119 4.06 0 4.857 4.119 3.085 7.903-1.972.609-3.419 2.428-3.419 4.597 0 1.38.589 2.619 1.52 3.5z"/>
                                </svg>
								<span class="my-2 transition-all duration-200">
									Share
								</span>
								<span class="h-1 w-6 rounded-full group-hover:bg-main-500 transition-all duration-150 delay-100"></span>
							</span>
						</router-link>
					</div>
					<div class="flex group w-full">
						<router-link :to="{name: 'dashboard.connections.edit', params: { token: token }}" class="p-3 pb-0 text-gray-400 hover:text-main-500 w-full">
							<span class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500 group-hover:text-gray-700 transition-color duration-200" viewBox="0 0 24 24">
                                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/>
                                </svg>
								<span class="my-2 transition-all duration-200">
									Connect
								</span>
								<span class="h-1 w-6 rounded-full group-hover:bg-main-500 transition-all duration-150 delay-100"></span>
							</span>
						</router-link>
					</div>
					<div class="flex group w-full">
						<button @click="runConn(token)" type="button" class="p-3 pb-0 text-gray-400 hover:text-main-500 w-full">
							<span class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500 group-hover:text-gray-700 transition-color duration-200" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                                    <path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 2c5.519 0 10 4.481 10 10s-4.481 10-10 10-10-4.481-10-10 4.481-10 10-10zm2 12v-3l5 4-5 4v-3h-9v-2h9zm-4-6v-3l-5 4 5 4v-3h9v-2h-9z"/>
                                </svg>
								<span class="my-2 transition-all duration-200">
									Run
								</span>
								<span class="h-1 w-6 rounded-full group-hover:bg-main-500 transition-all duration-150 delay-100"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
            <!-- <section class="grid md:grid-cols-3 gap-4 p-4">
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
                    
                    <!- <button type="button" class="inline-flex justify-between items-center w-full p-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 fill-current" viewBox="0 0 24 24">
                            <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                        </svg>
                        Run
                    </button> ->
                </div>
            </section> -->
        </div>
    </div>
</template>

<script>
import axios from 'axios'
// import Run  from '~/components/connection/Run'

export default {
    name: 'Overview',

    props: {
        token: '',
    },

    data() {
        return {
            name: '',
            runTime: null,
            countUpdates: '',
            updatesLeft: '',
            countOutputs: 1,
            sheetFileSource: '',
            sheetSource: '',
            sheetFileOutput1: '',
            sheetOutput1: '',
            sheetFileOutput2: '',
            sheetOutput2: '',
            sheetFileOutput3: '',
            sheetOutput3: '',
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
        runConn(token) {
            this.$store.dispatch('run/updateConnection', {token: token});
            // Run.runConnection(token)
        },
        async loadConnection() {
            this.loading = true;
            if(this.token != null && this.token != '') {
                await axios.get('/api/connection/'+this.token+'/get')
                    .then(res => {
                        this.name = res.data.data.name
                        this.runTime = res.data.data.run_time
                        this.countUpdates = res.data.data.count_updates
                        this.updatesLeft = res.data.data.updates_left
                        this.countOutputs = res.data.data.count_outputs
                        this.sheetFileSource = res.data.data.source_spreadsheetName
                        this.sheetSource = res.data.data.source_title
                        this.sheetFileOutput1 = res.data.data.output_1_spreadsheetName
                        this.sheetOutput1 = res.data.data.output_1_title
                        if(this.countOutputs > 1) {
                            this.sheetFileOutput2 = res.data.data.output_2_spreadsheetName
                            this.sheetOutput2 = res.data.data.output_2_title
                        }
                        if(this.countOutputs == 3) {
                            this.sheetFileOutput3 = res.data.data.output_3_spreadsheetName
                            this.sheetOutput3 = res.data.data.output_3_title
                        }
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