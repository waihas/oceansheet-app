<template>
    <div>
        <section class="text-gray-600">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
                    A plan for every business
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">
                    Start automating your spreadsheet work for free, and scale up as you grow.
                </p>
                <div class="flex mx-auto border-2 border-main-500 rounded overflow-hidden mt-6">
                    <button @click="isMonthly = true" class="py-1 px-4 focus:outline-none"
                        :class="isMonthly ? 'bg-main-500 text-white' : ''">Monthly</button>
                    <button @click="isMonthly = false" class="py-1 px-4 focus:outline-none"
                        :class="isMonthly ? '' : 'bg-main-500 text-white'">Annually</button>
                </div>
                </div>
                <div class="flex flex-wrap -m-4">
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">START</h2>
                    <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">Free</h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Unlimited connections
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Click to manually update
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Connect same file type
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Consolidate data from up to three sources into one
                    </p>
                    <router-link :to="{name: 'register'}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                        Get Started
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </router-link>
                    <p class="text-xs text-gray-500 mt-3">No credit card required.</p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-main-500 flex flex-col relative overflow-hidden">
                    <span class="bg-main-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PRO</h2>
                    <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                        <span v-if="isMonthly">$29</span>
                        <span v-else>$23</span>
                        <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                    </h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Unlimited connections
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Automatic updates up to once a day
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Connect different file types
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Consolidate data from unlimited sources into one
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Distribute data to multiple files
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Filter by query & Share workflow
                    </p>
                    <router-link :to="{name: 'register'}" class="flex items-center mt-auto text-white bg-main-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-main-600 rounded">
                        Try for free
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </router-link>
                    <p class="text-xs text-gray-500 mt-3">No credit card required.</p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
                    <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                        <span v-if="isMonthly">$56</span>
                        <span v-else>$49</span>
                        <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                    </h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Unlimited connections
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Automatic updates up to once an hour
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Connect different file types
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Consolidate data from unlimited sources into one
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Distribute data to multiple files
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Filter by query & Share workflow & Transfer formatting
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Create cross-cloud connections
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Video support
                    </p>
                    <router-link :to="{name: 'register'}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                        Try for free
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </router-link>
                    <p class="text-xs text-gray-500 mt-3">No credit card required.</p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SPECIAL</h2>
                    <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                        <span v-if="isMonthly">$72</span>
                        <span v-else>$65</span>
                        <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                    </h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Unlimited connections
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Automatic updates up to once an hour
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Connect different file types
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Consolidate data from unlimited sources into one
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Distribute data to multiple files
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Filter by query & Share workflow & Transfer formatting
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Create cross-cloud connections
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Single Sign-on & Dedicated customer success manager
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>Video support
                    </p>
                    <router-link :to="{name: 'register'}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                        Try for free
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </router-link>
                    <p class="text-xs text-gray-500 mt-3">No credit card required.</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 bg-gray-100">
            <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium text-gray-900 mb-4">
                        Frequently asked questions
                    </h1>
                    <div class="flex mt-6 justify-center">
                        <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
                    </div>
                </div>

                <div class="flex flex-col sm:-m-4 px-5 -mt-4 md:space-y-0 space-y-6">
                    <div class="w-full md:mx-auto mb-8 flex flex-col divide-y text-gray-800 text-base">
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isFAQ1open = !isFAQ1open">
                                <h4 :class="isFAQ1open ? 'text-main-600 font-bold' : ''">
                                    What’s an update?
                                </h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    :class="isFAQ1open ? 'flip-y' : ''"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isFAQ1open" class="mt-3" :class="isFAQ1open ? 'text-gray-600' : ''">
                                When you update a OceanSheet connection, the source data is transferred to the destination tab, leaving the source tab intact. You can update a connection manually by clicking Update, update a workflow manually by clicking Run, or schedule automatic updates for the entire workflow. Each time a connection is updated, the data in the destination file is refreshed with the latest data from the source file. You can log previous data updates by using the Append feature.
                            </div>
                        </div>
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isFAQ2open = !isFAQ2open">
                                <h4 :class="isFAQ2open ? 'text-main-600 font-bold' : ''">
                                    What is a connection?
                                </h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    :class="isFAQ2open ? 'flip-y' : ''"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isFAQ2open" class="mt-3" :class="isFAQ2open ? 'text-gray-600' : ''">
                                A OceanSheet connection is created when you link a data source (one or multiple spreadsheet tabs, or a BigQuery table) to a destination (one or multiple spreadsheet tabs). Once you have created a connection, you can send data from the source to the destination automatically.
                                <br><br>
                                With a Free plan, you can connect a source file to a destination file of the same type (e.g. Excel to Excel or Google Sheets to Google Sheets). With an Advanced, Professional or Enterprise plan, you can connect any file types (e.g. Excel to Google Sheets, or CSV to Excel). If you want to transfer data to a new destination file, OceanSheet will create a spreadsheet for you automatically
                            </div>
                        </div>
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isFAQ3open = !isFAQ3open">
                                <h4 :class="isFAQ3open ? 'text-main-600 font-bold' : ''">
                                    What’s a workflow?
                                </h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    :class="isFAQ3open ? 'flip-y' : ''"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isFAQ3open" class="mt-3" :class="isFAQ3open ? 'text-gray-600' : ''">
                                A OceanSheet workflow is a group of connections that work together to carry out a process. When you create a OceanSheet connection, you are starting to build a workflow. By connecting further files, you can expand the workflow to create an interconnected system that transfers data between multiple files. When you run the workflow or schedule automatic updates, data is transferred sequentially, from file to file. This ensures that the workflow transfers data smoothly, in a logical order. 
                            </div>
                        </div>
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isFAQ4open = !isFAQ4open">
                                <h4 :class="isFAQ4open ? 'text-main-600 font-bold' : ''">
                                   What about compatibility and limitations? 
                                </h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    :class="isFAQ4open ? 'flip-y' : ''"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isFAQ4open" class="mt-3" :class="isFAQ4open ? 'text-gray-600' : ''">
                                OceanSheet is compatible with Google Sheets, Excel, CSV, and TSV files. Google Sheets currently has a 5 million cell limit. You will not be able to connect or consolidate files that exceed this size. If you have a large file, you may experience issues with update reliability due to server connection timeout. Use your trial period to test OceanSheet to its limits and contact us at support@oceansheet.com if you experience issues.
                            </div>
                        </div>
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isFAQ5open = !isFAQ5open">
                                <h4 :class="isFAQ5open ? 'text-main-600 font-bold' : ''">
                                    What’s included in the trial?
                                </h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    :class="isFAQ5open ? 'flip-y' : ''"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isFAQ5open" class="mt-3" :class="isFAQ5open ? 'text-gray-600' : ''">
                                During the free 7-day trial period, you can connect Google Sheets, Excel and CSV files stored in Google Drive, OneDrive, SharePoint, and Dropbox. The trial includes 2500 updates and you can also test all features including Transfer formatting.
                            </div>
                        </div>
                        <div class="item px-6 py-6">
                            <a class="flex items-center justify-between cursor-pointer" @click="isFAQ6open = !isFAQ6open">
                                <h4 :class="isFAQ6open ? 'text-main-600 font-bold' : ''">
                                    How can I cancel my subscription?
                                </h4>
                                <svg 
                                    class="w-5 h-5 text-gray-500"
                                    :class="isFAQ6open ? 'flip-y' : ''"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div v-show="isFAQ6open" class="mt-3" :class="isFAQ6open ? 'text-gray-600' : ''">
                                You can easily cancel your subscription in your account page whenever you feel like it. Get in touch with us before canceling so we can try to help you find the solution that’s right for you.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <banner></banner>

    </div>
</template>

<script>
import Banner from '~/components/home/Banner'

export default {
  layout: 'basic',

  components: { Banner },

  metaInfo () {
    return { title: 'Pricing' }
  },

  data: () => ({
    title: window.config.appName,
    isMonthly: true,
    isFAQ1open: false,
    isFAQ2open: false,
    isFAQ3open: false,
    isFAQ4open: false,
    isFAQ5open: false,
    isFAQ6open: false,
  }),

  methods: {
      toggleMonthly: function() {
          this.isMonthly = !this.isMonthly
      }
  }
}
</script>

<style scoped>
  .flip-y {
    transform: rotateX(180deg);
    transform-style: preserve-3d;
  }
</style>