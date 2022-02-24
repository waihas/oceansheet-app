
<template>
    <!-- here we select the sheet and tab for output -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Select output data
        </div>
        <div class="p-4 flex-grow">

            <google-drive-sheets
              @file-choosed="fileChoosed1"
              @sheet-choosed="sheetChoosed1"
              :key="'firstOutput'"
            ></google-drive-sheets>

            <div v-if="error1" class="mt-2 text-sm text-red-600">
                {{ error1 }}
            </div>

            <div v-if="output.count > 1" class="mt-6 mb-2">
              <div class="flex w-full justify-end">
                <span @click="minusOutput" class="text-sm cursor-pointer text-gray-500 hover:text-red-500">remove</span>
              </div>

              <google-drive-sheets
                @file-choosed="fileChoosed2"
                @sheet-choosed="sheetChoosed2"
                :key="'secondOutput'"
              ></google-drive-sheets>
              
              <div v-if="error2" class="mt-2 text-sm text-red-600">
                  {{ error2 }}
              </div>
            </div>
            
            
            <div v-if="output.count === 3" class="mt-6 mb-2">
              <div class="flex w-full justify-end">
                <span @click="minusOutput" class="text-sm cursor-pointer text-gray-500 hover:text-red-500">remove</span>
              </div>

              <google-drive-sheets
                @file-choosed="fileChoosed3"
                @sheet-choosed="sheetChoosed3"
                :key="'thirdOutput'"
              ></google-drive-sheets>

              <div v-if="error3" class="mt-2 text-sm text-red-600">
                  {{ error3 }}
              </div>
            </div>

            <div v-if="output.count < 3" class="flex items-center border-2 border-dashed group rounded-lg hover:border-main-300 cursor-pointer w-full mt-12"
              @click="extraOutput">
                <div class="flex flex-row items-center justify-start px-5 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-400 group-hover:text-gray-500" viewBox="0 0 24 24">
                      <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/>
                    </svg>
                    <p class="ml-6 text-gray-400 group-hover:text-gray-500">
                        New data endpoint sheet</p>
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
import GoogleDriveSheets from "~/components/sheet-selector/GoogleDriveSheets";

export default {
    name: 'OutputData',
    
    components: {
        GoogleDriveSheets
    },

    data: () => ({
        movingToNextStep: false,
        output: {
            count: 1,
            file1: {},
            sheet1: {},
            file2: {},
            sheet2: {},
            file3: {},
            sheet3: {},
        },
        // output:{
        //     file: {},
        //     sheet: {},
        // },
        error1: '',
        error2: '',
        error3: '',
    }),

    methods: {
        fileChoosed1: function(data) {
              this.output.file1 = data
              this.error1 = ''
        },
        sheetChoosed1: function(data) {
            this.output.sheet1 = data
            this.error1 = ''
        },
        fileChoosed2: function(data) {
              this.output.file2 = data
              this.error2 = ''
        },
        sheetChoosed2: function(data) {
            this.output.sheet2 = data
            this.error2 = ''
        },
        fileChoosed3: function(data) {
              this.output.file3 = data
              this.error3 = ''
        },
        sheetChoosed3: function(data) {
            this.output.sheet3 = data
            this.error3 = ''
        },
        checkFileSelected: function() {
            if(Object.keys(this.output.file1).length < 1) {
                this.error1 = 'Please select a Google Sheet file.'
                return false
            }
            this.error1 = ''
            if(this.output.count > 1 && Object.keys(this.output.file2).length < 1) {
                this.error2 = 'Please select a Google Sheet file.'
                return false
            }
            this.error2 = ''
            if(this.output.count === 3 && Object.keys(this.output.file3).length < 1) {
                this.error3 = 'Please select a Google Sheet file.'
                return false
            }
            this.error3 = ''

            return true
        },
        checkSheetSelected: function() {
            if(Object.keys(this.output.sheet1).length === 0) {
              this.error1 = 'Please select your data endpoint sheet.'
              return false
            }
            this.error1 = ''
            if(this.output.count > 1 && Object.keys(this.output.sheet2).length === 0) {
              this.error2 = 'Please select your data endpoint sheet.'
              return false
            }
            this.error2 = ''
            if(this.output.count === 3 && Object.keys(this.output.sheet3).length === 0) {
              this.error3 = 'Please select your data endpoint sheet.'
              return false
            }
            this.error3 = ''

            return true
        },
        nextStep: function() {
            if(this.checkFileSelected() && this.checkSheetSelected()) {
                this.$emit("step-two-completed", this.output);
                // console.log('final output:')
                // console.log(JSON.stringify(this.output))
            }
        },
        prevStep: function() {
            this.$emit("go-one-step-back");
        },
        extraOutput: function() {
          if(this.output.count < 3)
            this.output.count++;
        },
        minusOutput: function() {
          if(this.output.count > 1 && this.output.count < 4)
            this.output.count--;
          // if(num == 2 && this.output.count == 2) {
          //   this.output.file2 = this.output.file3
          //   this.output.sheet2 = this.output.sheet3
          //   this.output.count--;
          // }
          // else if(num == 3 && this.output.count == 3) {
          //   this.output.count--;
          // }
        },
    },
}
</script>