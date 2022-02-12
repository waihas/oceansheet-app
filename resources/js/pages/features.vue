<template>
    <div>
        <section class="text-gray-600">
            <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-20">
                    <h1 class="sm:text-5xl text-3xl font-medium text-gray-900 mb-4">
                        Product overview
                    </h1>
                    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500">
                        Create no-code automation for yourself and your team. Use custom workflows to collect, manage and share data — all from a spreadsheet.
                    </p>
                    <div class="flex mt-6 justify-center">
                        <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg font-medium mb-2">
                            OceanSheet workflows
                        </h2>
                        <p class="leading-relaxed text-base">
                            OceanSheet makes data collection, distribution, and analysis a cinch. It works with whatever spreadsheet system you use. Start with one of our pre-built templates, or create your own.
                        </p>
                        <router-link :to="{name: 'workflows'}" class="mt-3 text-main-500 inline-flex items-center">Explore features
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </router-link>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg font-medium mb-2">
                            OceanSheet connect for Google Sheets
                        </h2>
                        <p class="leading-relaxed text-base">
                            Find us in the Workspace Marketplace. Use OceanSheet in Google Sheets to update, collect, and distribute your data all from one place.
                        </p>
                        <router-link :to="{name: 'products.for-gsheet'}" class="mt-3 text-main-500 inline-flex items-center">Explore features
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </router-link>
                    </div>
                    <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg font-medium mb-2">
                            OceanSheet connect for Microsoft Excel
                        </h2>
                        <p class="leading-relaxed text-base">
                            Manage your data all from one place. Connect, merge, distribute and append your sheets without leaving Excel. OceanSheet connect makes it a cinch.
                        </p>
                        <router-link :to="{name: 'products.for-microsoft'}" class="mt-3 text-main-500 inline-flex items-center">Explore features
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 bg-gray-100">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed text-lg">I didn’t realize how much time could be saved until we used OceanSheet to automate our process</p>
                    <span class="inline-block h-1 w-10 rounded bg-main-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium tracking-wider text-sm">RACHID</h2>
                    <p class="text-gray-500">Co-Founder of Inesevents</p>
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
        return { title: 'Our Products Features' }
    },

    data: () => ({
        title: window.config.appName,
    }),
}
</script>
