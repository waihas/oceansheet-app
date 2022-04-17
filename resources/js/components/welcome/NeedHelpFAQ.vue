<template>
    <div class="md:w-1/2 w-full md:mx-auto mb-8 flex flex-col divide-y text-gray-800 text-base">
        <div class="item px-6 py-6">
            <a class="flex items-center justify-between cursor-pointer" @click="isOpen1 = !isOpen1">
                <h4 :class="isOpen1 ? 'text-main-600 font-bold' : ''">Can't create a connection for Google Sheets</h4>
                <svg 
                    class="w-5 h-5 text-gray-500"
                    fill="none" stroke-linecap="round" 
                    stroke-linejoin="round" stroke-width="2" 
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <div v-show="isOpen1" class="mt-3" :class="isOpen1 ? 'text-gray-600' : ''">
                First go to the dashboard and click in the sidebar on Connections, after that click on "Create new connection", then please try to follow the instruction in the right of each step.
            </div>
        </div>
        <div class="item px-6 py-6">
            <a class="flex items-center justify-between cursor-pointer" @click="isOpen2 = !isOpen2">
                <h4 :class="isOpen2 ? 'text-main-600 font-bold' : ''">Can't create a workflow</h4>
                <svg 
                    class="w-5 h-5 text-gray-500"
                    fill="none" stroke-linecap="round" 
                    stroke-linejoin="round" stroke-width="2" 
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <div v-show="isOpen2" class="mt-3" :class="isOpen2 ? 'text-gray-600' : ''">
                First thing go to the dashboard and click in the sidebar on Workflows, after that click on "Create new workflow", then please try to follow the instruction in the right of each step.
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NeedHelpFAQ',

    data: () => ({
        isOpen1: false,
        isOpen2: false,
    }),
}
</script>