
<template>
    <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg">
        <div class="px-6 py-5 font-semibold border-b border-gray-100">Overwiew</div>
        <!-- <section class="grid md:grid-cols-3 gap-4 p-4">
            <div class="flex items-center py-3 px-8 bg-gray-50 rounded-xl">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">62</span>
                    <span class="block text-gray-500">Students</span>
                </div>
            </div>
            <div class="flex items-center py-3 px-8 bg-gray-50 rounded-xl">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">6.8</span>
                    <span class="block text-gray-500">Average mark</span>
                </div>
            </div>
            <div class="flex items-center py-3 px-8 bg-gray-50 rounded-xl">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                    </svg>
                </div>
                <div>
                    <span class="inline-block text-2xl font-bold">9</span>
                    <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                    <span class="block text-gray-500">Underperforming students</span>
                </div>
            </div>
        </section> -->
        <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                <!-- to see overview of project settings
                we pass data of connection and show statistics -->
                Tutorial video 
                <!-- sheets flowcharts -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'WorkflowOverview',

    props: {
        workflow: Object,
    },
}
</script>