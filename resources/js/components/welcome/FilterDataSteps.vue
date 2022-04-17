<template>
    <section class="text-gray-600 bg-gray-100">
        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
            <img class="lg:w-1/3 md:w-1/2 w-2/3 block mx-auto mb-10 object-cover object-center rounded" alt="OceanSheet Workflow connect sheets" src="/assets/img/img-4.jpg">
            <div class="flex mx-auto flex-wrap mb-8">
                <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 font-medium inline-flex items-center leading-none tracking-wider cursor-pointer"
                    :class="step === 1 ? 'bg-gray-100 border-main-500 text-main-500' : 'border-gray-200 hover:text-gray-900'"
                    @click="step = 1">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>STEP 1
                </a>
                <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 font-medium inline-flex items-center leading-none tracking-wider cursor-pointer"
                    :class="step === 2 ? 'bg-gray-100 border-main-500 text-main-500' : 'border-gray-200 hover:text-gray-900'"
                    @click="step = 2">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>STEP 2
                </a>
                <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 font-medium inline-flex items-center leading-none tracking-wider cursor-pointer"
                    :class="step === 3 ? 'bg-gray-100 border-main-500 text-main-500' : 'border-gray-200 hover:text-gray-900'"
                    @click="step = 3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                    <circle cx="12" cy="5" r="3"></circle>
                    <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                    </svg>STEP 3
                </a>
                <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 font-medium inline-flex items-center leading-none tracking-wider cursor-pointer"
                    :class="step === 4 ? 'bg-gray-100 border-main-500 text-main-500' : 'border-gray-200 hover:text-gray-900'"
                    @click="step = 4">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    </svg>STEP 4
                </a>
                <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 font-medium inline-flex items-center leading-none tracking-wider cursor-pointer"
                    :class="step === 5 ? 'bg-gray-100 border-main-500 text-main-500' : 'border-gray-200 hover:text-gray-900'"
                    @click="step = 5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    </svg>STEP 5
                </a>
                <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 font-medium inline-flex items-center leading-none tracking-wider cursor-pointer"
                    :class="step === 6 ? 'bg-gray-100 border-main-500 text-main-500' : 'border-gray-200 hover:text-gray-900'"
                    @click="step = 6">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    </svg>STEP 6
                </a>
            </div>
            <div class="flex flex-col text-center w-full">
                <p class="text-lg font-medium lg:w-2/3 mx-auto text-gray-900">
                    <span v-show="step === 1">Click Start connecting. Choose to import or export data from single or multiple files.</span>
                    <span v-show="step === 2">Select your source data or destination (depending on which connection you want to make — an import or export). This can either be a Google Sheets, Excel, CSV, or TSV file or multiple files.</span>
                    <span v-show="step === 3">Find and select the file from inside one of the supported Cloud platforms (Google Drive, Onedrive, Sharepoint, or Dropbox).</span>
                    <span v-show="step === 4">Filter your data (optional). Filter by condition, query, or color and only send specific columns to the other spreadsheet.</span>
                    <span v-show="step === 5">Adjust the settings to your liking. Transfer formatting or Append data to create a historic track of data.</span>
                    <span v-show="step === 6">Click Finish and save to create your connection between different spreadsheets and Cloud platforms.</span>
                </p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FilterDataSteps',
    data: () => ({
        step: 1,
    }),
}
</script>