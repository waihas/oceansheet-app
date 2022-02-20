<template>
    <!-- here shows loading spinner while project is creating and connectiong between the sheets
    after that show succes icon -->
    <div>
    <!-- <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg"> -->
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            We're connectiong yours sheets now...
        </div>
        <div class="p-4 flex-grow">
            <div v-if="connectingCompleted" class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
              Successfully connected :)
            </div>
            <div v-else class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                Loading...
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
                    Save & Continue
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
export default {
    name: 'Connecting',

    props: {
        source:{
            file: {},
            sheet: {},
        },
        output:{
            file: {},
            sheet: {},
        },
        options:{
            fromSheets: '',
            toSheets: '',
        },
        startConnectiong:false
    },

    data() {
        return {
            movingToNextStep: false,
            connectingCompleted: false,
        }
    },

    watch: { 
      	startConnectiong: function(newVal, oldVal) {
          if(newVal)
            this.connectSheets()
        }
    },

    methods: {
        connectSheets: function() {
            console.log("We are connecting...")

            this.updateCell()
        },
        async updateCell() {

          //1. get data from source sheet (update from the selected cells to the end where there is no more text)
          const sourceData = await this.$google.api.client.sheets.spreadsheets.values.get({
              spreadsheetId: this.source.file.id,
              range: this.source.sheet.properties.title+'!'+this.options.fromSheets,
          });//.data.values
          
          console.log('sourceData');
          console.log(sourceData);

          //2. put data on output sheet (override maybe the previous putted one)
          const response = await this.$google.api.client.sheets.spreadsheets.values.update({
              spreadsheetId: this.output.file.id,
              range: this.output.sheet.properties.title+'!'+this.options.toSheets,
              valueInputOption: 'USER_ENTERED',
              values: [ ["123"],["455"],["sdqsdf"],["sqdf"] ]
          })
          //3. save things on database
          //4. increment used_connection for user

          console.log(response);
          if(response.status == 200) {
            this.connectingCompleted = true
          }
        },
        nextStep: function() {
          this.$emit("step-four-completed");
        },
        prevStep: function() {
            this.$emit("go-one-step-back");
        }
    }
}

// importrange proposition
// const response = await this.$google.api.client.sheets.spreadsheets.values.update({
//     spreadsheetId: this.output.file.id,
//     range: this.output.sheet.properties.title+'!'+this.options.toSheets,
//     valueInputOption: 'USER_ENTERED',
//               // =IMPORTRANGE("https://docs.google.com/spreadsheets/d/1Bj11WViPheHFxfwc7NAT-NaiK7qyEU6x5ZecfmS2LNg/edit";"Note1!A1:B500")
//     values: [ ["=IMPORTRANGE(\""+this.source.file.webViewLink.split('?')[0]+"\";\""+this.source.sheet.properties.title+"!"+this.options.fromSheets+":"+this.options.fromSheets.charAt(0)+"1000\")"] ]
//     // spreadsheetId: 'something',
//     // range: 'Sheet1!B2',
//     // valueInputOption: 'USER_ENTERED',
//     // values: [ ["123"] ]
// })

// console.log(response);
// if(response.status == 200) {
//   this.connectingCompleted = true
// }
</script>