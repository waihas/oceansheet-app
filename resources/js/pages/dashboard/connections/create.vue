<template>
  <div class="p-6 sm:p-10 space-y-6">
    
    <steps :step="step"></steps>

    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-flow-col gap-6">
      <div class="flex flex-col md:col-span-3 bg-white shadow rounded-lg">
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
      </div>

      <div class="row-span-3 bg-white rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">
            Tips & help
          </div>
          <div class="flex p-4">
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
