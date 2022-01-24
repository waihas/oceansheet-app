
<template>
    <!-- here we select the sheet and tab for output -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100"
            @click="makeCompleted">
            Select output data
        </div>
        <div class="p-4 flex-grow">
            
            <button @click.stop="showPicker = true" class="bg-teal-500 text-white font-bold py-2 px-4 rounded w-full transition-all duration-100 ease-in-out hover:bg-teal-700"
            id="buttonSelectFile">
                Select file
            </button>
        </div>

        <transition
            name="background"
            enter-active-class="transition ease-out duration-150"
            enter-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition ease-in duration-150"
            leave-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-if="showPicker"
                class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
                <transition
                    name="modal"
                    enter-active-class="transition ease-out duration-150"
                    enter-class="opacity-0 transform translate-y-1/2"
                    enter-to-class="opacity-100"
                    leave-active-class="transition ease-in duration-150"
                    leave-class="opacity-100"
                    leave-to-class="opacity-0 transform translate-y-1/2"
                    appear
                >
                    <div
                        v-if="showPicker"
                        v-click-outside="closePicker"
                        @keydown.esc="closePicker"
                        class="w-full sm:max-w-5xl px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 border-t-8 border-primary-500"
                        role="dialog"
                        id="modalGDriveSelector">
                        
                        <header class="flex justify-between items-center">
                            <h2 class="text-xl text-gray-600 font-medium">
                                Please select your output sheets.
                            </h2>
                            <button
                                class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded hover: hover:text-gray-700"
                                aria-label="close"
                                @click="closePicker"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                                        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </header>
                        
                        <div class="mt-12 mb-4">
                            <GDriveSelector />
                        </div>
                    </div>
                </transition>
            </div>
        </transition>
    </div>
</template>

<script>
import clickOutside from 'vue-click-outside'
import GDriveSelector from '~/components/picker/GDriveSelector'

export default {
    name: 'OutputData',
    
    directives: {
        clickOutside
    },

    components: { GDriveSelector },
    
    data: () => ({
        showPicker: false,
        output:{
            files:null,
        },
    }),
    
    methods: {
        closePicker: function() {
            this.showPicker = false
        },
        makeCompleted: function() {
            this.$emit("step-two-completed", this.output) ;
        }
    },
}
</script>