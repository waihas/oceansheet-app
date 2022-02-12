<template>
    <div>
        <section class="text-gray-600">
            <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-20">
                    <h1 class="sm:text-5xl text-3xl font-medium text-gray-900 mb-4">
                        OceanSheet Blog
                    </h1>
                    <p class="text-base leading-relaxed lg:w-3/4 mx-auto text-gray-500s">
                        Your go-to resource for all things spreadsheet related
                    </p>
                    <div class="flex mt-6 justify-center">
                        <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
                    </div>
                </div>
                <div class="lg:w-2/3 mx-auto flex flex-wrap">
                    <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
                        <img alt="How to solve the #REF! error on spreadsheets" 
                            class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                            src="/assets/img/blog-1.jpg">
                        <div class="text-center relative z-10 w-full">
                            <h2 class="text-2xl text-gray-900 font-medium mb-2">
                                How to solve the #REF! error on spreadsheets
                            </h2>
                            <p class="leading-relaxed">
                                Whether you’re an advanced spreadsheet user, or you’re more comfortable with the more basic functions of spreadsheets,...
                            </p>
                            <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-2">
                        <div class="px-2 w-1/2">
                            <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                                <img alt="How to filter Google Sheets without affecting other users" 
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                                    src="/assets/img/blog-2.jpg">
                                <div class="text-center relative z-10 w-full">
                                    <h2 class="text-xl text-gray-900 font-medium mb-2">
                                        How to filter Google Sheets without affecting other users
                                    </h2>
                                    <p class="leading-relaxed">
                                        One of the reasons why spreadsheets are used as a collaborative tool is their information storage capacity. The...
                                    </p>
                                    <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 w-1/2">
                            <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                                <img alt="How to convert Google Sheets to PDF automatically"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                                    src="/assets/img/blog-3.jpg">
                                <div class="text-center relative z-10 w-full">
                                    <h2 class="text-xl text-gray-900 font-medium mb-2">
                                        How to convert Google Sheets to PDF automatically
                                    </h2>
                                    <p class="leading-relaxed">
                                        Google Sheets is a cloud-based web application well known for its amazing sharing and collaborative capabilities. But...
                                    </p>
                                    <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
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
        return { title: 'OceanSheet Blog' }
    },

    data: () => ({
        title: window.config.appName,
    }),
}
</script>
