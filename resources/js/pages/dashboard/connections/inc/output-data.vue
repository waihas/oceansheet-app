
<template>
    <!-- here we select the sheet and tab for output -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Select output data
        </div>
        <div class="p-4 flex-grow">
            
            <google-drive-sheets
              @file-choosed="fileChoosed"
              @sheet-choosed="sheetChoosed"
            ></google-drive-sheets>

            <div v-if="error" class="mt-2 text-sm text-red-600">
                {{ error }}
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
import GoogleDriveSheets from "~/components/picker/GoogleDriveSheets";

export default {
    name: 'OutputData',
    
    components: {
        GoogleDriveSheets
    },

    data: () => ({
        movingToNextStep: false,
        output:{
            file: {},
            sheet: {},
        },
        error: '',
    }),

    watch: {
        output: function () {
            if(this.checkFileSelected()) 
                this.error = ''
            if(this.checkSheetSelected())
                this.error = ''
        },
    },
    
    methods: {
        fileChoosed: function(data) {
            this.output.file = data
        },
        sheetChoosed: function(data) {
            this.output.sheet = data
        },
        checkFileSelected: function() {
            if(Object.keys(this.output.file).length < 1) {
                this.error = 'Please select a Google Sheet file.'
                return false
            }
            return true
        },
        checkSheetSelected: function() {
            if(Object.keys(this.output.sheet).length === 0) {
                this.error = 'Please select your data endpoint sheet.'
                return false
            }
            return true
        },
        nextStep: function() {
            if(this.checkFileSelected() && this.checkSheetSelected()) {
                this.error = ''
                this.$emit("step-two-completed", this.output);
                console.log('final output:')
                console.log(JSON.stringify(this.output))
            }
        },
        prevStep: function() {
            this.$emit("go-one-step-back");
        }
    },
}
</script>