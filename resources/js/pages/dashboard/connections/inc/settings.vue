<template>
    <!-- here we specify which rows and columns we want to connect
    this will require good design to make it easy for user to understand -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Configuration
        </div>
        <div class="p-4 flex flex-col space-x-1">
            <div class="text-main-600 my-6">
                #1: 
                <span class="text-gray-600 text-lg">Please select the cell you want to bring data from.</span>
            </div>
            <sheet-row-col @cell-selected="cellFromSelected"></sheet-row-col>

            <div v-if="errorFrom" class="mt-2 text-sm text-red-600">
                {{ errorFrom }}
            </div>

            <div class="text-main-600 mb-6 mt-12">
                #2: 
                <span class="text-gray-600 text-lg">Please which cell you want the data to appear at.</span>
            </div>

            <sheet-row-col class="mb-6" @cell-selected="cellToSelected"></sheet-row-col>

            <div v-if="errorTo" class="mt-2 text-sm text-red-600">
                {{ errorTo }}
            </div>
        </div>

        <div class="flex flex-row-reverse justify-between py-3 px-4 border-t border-gray-100">
            <div class="flex-initial">
                <button
                  :disabled="movingToNextStep"
                  @click.prevent="nextStep()"
                  class="bg-main-500 text-white text-sm py-2 px-8 rounded-3xl w-full transition-all duration-100 ease-in-out"
                  :class="!movingToNextStep ? 'hover:bg-main-700' : 'opacity-75 cursor-default' "
                >
                  <span v-if="!movingToNextStep">
                    Continue
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    v-if="movingToNextStep"
                    width="24" height="24" class="animate-spin mx-auto" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M13,3.233L13,3.233c0,0.454,0.302,0.867,0.745,0.966c3.711,0.829,6.46,4.238,6.243,8.242 c-0.221,4.086-3.662,7.437-7.752,7.555C7.718,20.127,4,16.49,4,12c0-3.807,2.675-6.996,6.243-7.798C10.69,4.101,11,3.693,11,3.235 V3.234c0-0.64-0.595-1.126-1.219-0.985C5.151,3.302,1.732,7.576,2.017,12.58c0.289,5.093,4.568,9.256,9.666,9.415 C17.341,22.171,22,17.619,22,12c0-4.753-3.334-8.741-7.785-9.752C13.593,2.107,13,2.595,13,3.233z"></path>
                  </svg>
                </button>
            </div>

            <div class="flex-initial">
                <button
                  :disabled="movingToNextStep"
                  @click.prevent="prevStep()"
                  class="bg-white text-main-500 text-sm py-2 px-8 border border-gray-200 rounded-3xl w-full transition-all duration-100 ease-in-out"
                  :class="!movingToNextStep ? 'hover:bg-gray-100' : 'opacity-75 cursor-default' "
                >
                  <span v-if="!movingToNextStep">Back</span>
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    v-if="movingToNextStep"
                    width="24" height="24" class="animate-spin mx-auto" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M13,3.233L13,3.233c0,0.454,0.302,0.867,0.745,0.966c3.711,0.829,6.46,4.238,6.243,8.242 c-0.221,4.086-3.662,7.437-7.752,7.555C7.718,20.127,4,16.49,4,12c0-3.807,2.675-6.996,6.243-7.798C10.69,4.101,11,3.693,11,3.235 V3.234c0-0.64-0.595-1.126-1.219-0.985C5.151,3.302,1.732,7.576,2.017,12.58c0.289,5.093,4.568,9.256,9.666,9.415 C17.341,22.171,22,17.619,22,12c0-4.753-3.334-8.741-7.785-9.752C13.593,2.107,13,2.595,13,3.233z"></path>
                  </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
// import Draggable from 'vuedraggable'
import SheetRowCol from '~/components/sheet-selector/SheetRowCol';

export default {
    name: 'Settings',

    components: {
        // Draggable,
        SheetRowCol
    },

    props: {
        source:{},
        output:{},
        // startSettings:false
    },
    
    data: () => ({
        movingToNextStep: false,
        options:{
            fromSheets: '',
            toSheets: '',
        },
        errorFrom: '',
        errorTo: ''
    }),

     watch: { 
      	// startSettings: function(newVal, oldVal) { // watch it | function(newVal, oldVal)
        //   if(newVal)
        //     this.loadData()
        //     // console.log('Prop changed: ', newVal, ' | was: ', oldVal)
        // }
    },

    methods: {
        // loadData: function() {
        //     // hna load rows and cols, check first row thats is not empty and first col that is not empty until it\'s empty agail
        // },
        cellFromSelected: function(data) {
            this.options.fromSheets = data
            this.errorFrom = ''
        },
        cellToSelected: function(data) {
            this.options.toSheets = data
            this.errorTo = ''
        },
        log: function(evt) {
            window.console.log(evt);
        },
        nextStep: function() {
            if(this.options.fromSheets === '') {
                this.errorFrom = "Please select a row and column from the source data sheet."
            }
            else if(this.options.toSheets === '') {
                this.errorTo = "Please select a row and column from the output data sheet."
            }
            else {
                this.$emit("step-three-completed", this.options);
            }
        },
        prevStep: function() {
            this.$emit("go-one-step-back");
        }
    },
}
</script>

<style lang="scss">
    .moving-card {
        @apply opacity-50 bg-gray-100 border border-main-500;
    }
</style>
