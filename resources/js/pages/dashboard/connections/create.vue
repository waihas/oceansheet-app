<template>
  <div class="p-6 sm:p-10 space-y-6">
    
    <steps :step="step"></steps>

    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-flow-col gap-6">
      <div class="flex flex-col md:col-span-3 md:row-span-3 bg-white shadow rounded-lg">
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
              :tosheetscount="output.count"
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

      <div class="bg-white rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">
            Tips & help
          </div>
          <div class="flex p-4">
              <p v-if="step == 1" class="text-gray-600">
                Select your source Google Sheet file from where you wan't to grab data.
              </p>
              <p v-else-if="step == 2" class="text-gray-600">
                Select endpoint Google Sheet files to which you want the data to be distributed automatically.
              </p>
              <p v-else-if="step == 3" class="text-gray-600">
                Configure your connection by selecting the source data cells and that data will transferred to output sheets. Also, by configuring the time you would like the automatic update to launch.
              </p>
              <p v-else-if="step == 4" class="text-gray-600">
                The last step is we configure and create your connection, this takes some seconds to build everything and make it look sharp.
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
                count: 1,
                file1: {},
                sheet1: {},
                file2: {},
                sheet2: {},
                file3: {},
                sheet3: {},
            },
            options: {
                fromSheets: '',
                toSheets1: '',
                toSheets2: '',
                toSheets3: '',
                runTime: '',
            },
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
        stepFourCompleted: function() {
          this.$router.push({ name: 'dashboard.connections' })
        },
        goOneStepBack: function() {
          if(this.step > 1)
            this.step--
        },
    }
}
</script>
