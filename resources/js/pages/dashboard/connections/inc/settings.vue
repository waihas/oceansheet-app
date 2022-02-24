<template>
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Configuration
        </div>
        <div class="p-4 flex flex-col space-x-1">
            <div class="flex text-main-600 mt-6 pb-2 border-b border-dashed items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex h-4 w-4 fill-current mr-3" viewBox="0 0 24 24">
                    <path d="M21 12l-18 12v-24z"/>
                </svg>
                <span class="text-gray-600">Select the cell you want to bring data from.</span>
            </div>

            <div class="text-lg pl-6 text-gray-900 mb-2 mt-6">
                {{source.file.length > 0 ? source.file.name : ''}} \ {{source.sheet.length > 0 ? source.sheet.properties.title : ''}} \ <span class="text-main-600">{{options.fromSheets}}</span>
            </div>
            <sheet-row-col 
                @cell-selected="cellFromSelected"
            ></sheet-row-col>
            <div v-if="errorFrom" class="mt-2 text-sm text-red-600">
                {{ errorFrom }}
            </div>

            <div class="flex text-main-600 mt-12 pb-2 border-b border-dashed items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex h-4 w-4 fill-current mr-3" viewBox="0 0 24 24">
                    <path d="M21 12l-18 12v-24z"/>
                </svg>
                <span class="text-gray-600">Select which cell you want the data to appear at.</span>
            </div>
            
            <div class="text-lg pl-6 text-gray-900 mb-2 mt-6">
                {{output.file1.length > 0 ? output.file1.name : ''}} \ {{output.sheet1.length > 0 ? output.sheet1.properties.title : ''}} \ <span class="text-main-600">{{options.toSheets1}}</span>
            </div>
            <sheet-row-col class="mb-6" 
                @cell-selected="cellToSelected1"
            ></sheet-row-col>
            <div v-if="errorTo1" class="mt-2 text-sm text-red-600">
                {{ errorTo1 }}
            </div>

            <div v-if="tosheetscount > 1">
                <div class="text-lg pl-6 text-gray-900 mb-2 mt-6">
                    {{output.file2.name}} \ {{output.sheet2.properties.title}} \ <span class="text-main-600">{{options.toSheets2}}</span>
                </div>
                <sheet-row-col class="mb-6" 
                    @cell-selected="cellToSelected2"
                ></sheet-row-col>
                <div v-if="errorTo2" class="mt-2 text-sm text-red-600">
                    {{ errorTo2 }}
                </div>
            </div>

            <div v-if="tosheetscount === 3">
                <div class="text-lg pl-6 text-gray-900 mb-2 mt-6">
                    {{output.file3.name}} \ {{output.sheet3.properties.title}} \ <span class="text-main-600">{{options.toSheets3}}</span>
                </div>
                <sheet-row-col class="mb-6" 
                    @cell-selected="cellToSelected3"
                ></sheet-row-col>
                <div v-if="errorTo3" class="mt-2 text-sm text-red-600">
                    {{ errorTo3 }}
                </div>
            </div>

            <div class="flex text-main-600 mt-12 pb-2 border-b border-dashed items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex h-4 w-4 fill-current mr-3" viewBox="0 0 24 24">
                    <path d="M21 12l-18 12v-24z"/>
                </svg>
                <span class="text-gray-600">Schedule an update so that your spreadsheets connects everyday.</span>
            </div>
            <div class="w-full p-4 mt-6 bg-white">
                <div class="flex items-center mb-4">
                    <button @click="toggleSchedule" class="relative inline-flex items-center h-6 rounded-full w-11 duration-200 select-none"
                    :class="scheduleRunTime ? 'bg-main-700': 'bg-gray-500'">
                        <span class="sr-only">Update automatically</span>
                        <span class="inline-block w-4 h-4 transform duration-300 bg-white rounded-full"
                        :class="scheduleRunTime ? 'translate-x-1 ' : 'translate-x-6'"></span>
                    </button>
                    <label @click="toggleSchedule" class="font-bold px-5 transform duration-200 inline-block" 
                        :class="scheduleRunTime ? ' text-gray-700' : 'text-gray-300'">
                        Update automatically
                    </label>
                </div>
                <select v-if="scheduleRunTime"
                    v-model="options.runTime"
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-main-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option value="" selected disabled>Select timing</option>
                    <option value="'07:00'">Between 07:00 and 08:00</option>
                    <option value="'12:00'">Between 12:00 and 13:00</option>
                    <option value="'20:00'">Between 20:00 and 21:00</option>
                </select>
                <div v-if="errorRunTime" class="mt-2 text-sm text-red-600">
                    {{ errorRunTime }}
                </div>
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
import SheetRowCol from '~/components/sheet-selector/SheetRowCol';

export default {
    name: 'Settings',

    components: {
        SheetRowCol
    },

    props: {
        source:{},
        output:{},
        tosheetscount: null,
    },
    
    data: () => ({
        movingToNextStep: false,
        options:{
            fromSheets: '',
            toSheets1: '',
            toSheets2: '',
            toSheets3: '',
            runTime: '',
        },
        scheduleRunTime: true,
        errorFrom: '',
        errorTo1: '',
        errorTo2: '',
        errorTo3: '',
        errorRunTime: '',
    }),

    methods: {
        toggleSchedule: function() {
            this.scheduleRunTime = !this.scheduleRunTime
            console.log('toggle ' + this.scheduleRunTime)
        },
        cellFromSelected: function(data) {
            this.options.fromSheets = data
            this.errorFrom = ''
        },
        cellToSelected1: function(data) {
            this.options.toSheets1 = data
            this.errorTo1 = ''
        },
        cellToSelected2: function(data) {
            this.options.toSheets2 = data
            this.errorTo2 = ''
        },
        cellToSelected3: function(data) {
            this.options.toSheets3 = data
            this.errorTo3 = ''
        },
        nextStep: function() {
            if(this.options.fromSheets === '') {
                this.errorFrom = "Please select a row and column from the source data sheet."
            }
            else if(this.options.toSheets1 === '') {
                this.errorTo1 = "Please select a row and column from the output data sheet."
            }
            else if(this.tosheetscount > 1 && this.options.toSheets2 === '') {
                this.errorTo2 = "Please select a row and column from the output data sheet."
            }
            else if(this.tosheetscount == 3 && this.options.toSheets3 === '') {
                this.errorTo3 = "Please select a row and column from the output data sheet."
            }
            else if(this.scheduleRunTime && this.options.runTime === '') {
                this.errorRunTime = "Please select a timing to run your update."
            }
            else {
                this.$emit("step-three-completed", this.options);
                this.errorRunTime = ''
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
