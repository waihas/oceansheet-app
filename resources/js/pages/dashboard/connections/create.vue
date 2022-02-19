<template>
  <div class="p-6 sm:p-10 space-y-6">
    
    <steps :step="step"></steps>

    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
      <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg">
          <div v-show="step === 1">
            <source-data
              @step-one-completed="stepOneCompleted"
            ></source-data>
          </div>

          <div v-show="step === 2">
            <output-data
              @step-two-completed="stepTwoCompleted"
              @go-one-step-back="goOneStepBack"
            ></output-data>
          </div>

          <div v-show="step === 3">
              <!-- :startSettings="startSettings" -->
            <settings
              :source="source" 
              :output="output"
              @step-three-completed="stepThreeCompleted"
              @go-one-step-back="goOneStepBack"
            ></settings>
          </div>

          <div v-show="step === 4">
            <connecting
              :source="source"
              :output="output"
              :options="options"
              :startConnectiong="startConnectiong"
              @step-four-completed="stepFourCompleted"
              @go-one-step-back="goOneStepBack"
            ></connecting>
          </div>

          <!-- <div class="flex flex-row-reverse justify-between py-3 px-4 border-t border-gray-100">
              <div class="flex-initial">
                <button
                  :disabled="movingToNextStep"
                  @click.prevent="nextStep()"
                  class="bg-main-500 text-white text-sm py-2 px-8 rounded-3xl w-full transition-all duration-100 ease-in-out"
                  :class="!movingToNextStep ? 'hover:bg-main-700' : 'opacity-75 cursor-default' "
                >
                  <span v-if="!movingToNextStep">
                    {{ step == 4 ? 'Save & Continue' : 'Continue' }}
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    v-if="movingToNextStep"
                    width="24" height="24" class="animate-spin mx-auto" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M13,3.233L13,3.233c0,0.454,0.302,0.867,0.745,0.966c3.711,0.829,6.46,4.238,6.243,8.242 c-0.221,4.086-3.662,7.437-7.752,7.555C7.718,20.127,4,16.49,4,12c0-3.807,2.675-6.996,6.243-7.798C10.69,4.101,11,3.693,11,3.235 V3.234c0-0.64-0.595-1.126-1.219-0.985C5.151,3.302,1.732,7.576,2.017,12.58c0.289,5.093,4.568,9.256,9.666,9.415 C17.341,22.171,22,17.619,22,12c0-4.753-3.334-8.741-7.785-9.752C13.593,2.107,13,2.595,13,3.233z"></path>
                  </svg>
                </button>
              </div>

              <div class="flex-initial" v-if="step > 1">
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
          </div> -->

      </div>

      <div class="row-span-3 bg-white rounded-lg">
          <!-- this div changes changes depending on the step -->
          <div>
              <div class="px-6 py-5 font-semibold border-b border-gray-100">
              Tips & help
              </div>
              <div class="flex h-full p-4">
                  <p v-if="step == 1" class="text-gray-600">
                    First step is you select your source Google Sheet which is the place of data you want to transfer to another sheet automatically.
                  </p>
                  <p v-else-if="step == 2" class="text-gray-600">
                    Means you select to which Google Sheet you want the data to go to.
                  </p>
                  <p v-else-if="step == 3" class="text-gray-600">
                    Here you select your options like which columns or rows exacly you want to send to the other sheet, and many more other options to discover on the app.
                  </p>
                  <p v-else-if="step == 4" class="text-gray-600">
                    The last step is we configure and create your connection, this takes some seconds to building everything under the hood.
                  </p>
              </div>
          </div>
      </div>

    </section>

  </div>
</template>

<script>
import SourceData from './inc/source-data'
import OutputData from './inc/output-data'
import Settings from './inc/settings'
import Connecting from './inc/connecting'
import Steps from './inc/steps'

export default {
    middleware: 'auth',
    layout: 'dashboard',

    metaInfo () {
        return { title: 'Create connection' }
    },

    components: { 
        SourceData,
        OutputData,
        Settings,
        Connecting,
        Steps,
    },

    data() {
        return {
            step: 1,
            source: {
                file: {},
                sheet: {},
            },
            output: {
                file: {},
                sheet: {},
            },
            options: {
                fromSheets: '',
                toSheets: '',
            },
            // startSettings: false,
            startConnectiong: false
        }
    },

    methods: {
        // updateStep1Validated: function(newValue) {
        //   this.step1Validated = newValue
        // },
        stepOneCompleted: function(data) {
          this.source = data
          this.step1Validated = true
          this.step = 2
        },
        stepTwoCompleted: function(data) {
          this.output = data
          this.step2Validated = true
          // this.startSettings = true
          this.step = 3
        },
        stepThreeCompleted: function(data) {
          this.options = data
          this.step3Validated = true
          this.step = 4
          this.startConnectiong = true
        },
        stepFourCompleted: function(data) {
          alert('Yay. Done!');
        },
        goOneStepBack: function() {
          if(this.step > 1)
            this.step--
        },
    }
}
</script>
