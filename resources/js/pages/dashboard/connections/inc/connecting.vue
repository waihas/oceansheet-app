<template>
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            We're connectiong yours sheets now...
        </div>
        <div class="p-4 flex-grow">
            <div v-if="connecting" class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                <div class="flex flex-col text-center space-y-3 cursor-wait">
                  <svg class="animate-spin h-24 w-24 mb-3 fill-current text-gray-400" viewBox="0 0 24 24">
                      <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                  </svg>
                  <span class="text-gray-500">Loading ...</span>
              </div>
            </div>
            <div v-else class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
              Successfully connected :)
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
import Swal from 'sweetalert2'
import axios from 'axios'

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
            connecting: false,
        }
    },

    watch: { 
      	startConnectiong: function(newVal, oldVal) {
          if(newVal)
            this.connectSheets()
        }
    },

    methods: {
        async connectSheets() {
            this.connecting = true;

            await this.updateCell()

            this.connecting = false;
        },
        async updateCell() {

          /* ######################## */
          //1. get data from source sheet (update from the selected cells to the end where there is no more text)
          const sourceData = await this.$google.api.client.sheets.spreadsheets.values.get({
              spreadsheetId: this.source.file.id,
              // range: 'Feuille 1!D1:D8'
              // range: 'Feuille 1!D1:D'
              range: this.source.sheet.properties.title+'!'+this.options.fromSheets+':'+this.options.fromSheets.charAt(0),
          });

          if(sourceData.status !== 200) {
            // put it in database
            
            // show alert
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'something went wrong with source sheet!',
                confirmButtonColor: "#10b981",
            }).then(() => {
              this.$router.push({ name: 'dashboard.connections' })
            })
            // return alert('something went wrong with sourceData');
          }

          // console.log('sourceData');
          // console.log(sourceData.result.values);
          // console.log(sourceData);

          /* ######################## */
          //2. put data on output sheet (override maybe the previous putted one)
          const response = await this.$google.api.client.sheets.spreadsheets.values.update({
              spreadsheetId: this.output.file.id,
              range: this.output.sheet.properties.title+'!'+this.options.toSheets,
              valueInputOption: 'USER_ENTERED',
              values: sourceData.result.values
              // values: [ ["123"],["455"],["sdqsdf"],["sqdf"] ]
          })

          // this.source.file.id
          // this.source.sheet.properties.title
          // this.options.fromSheets
          // this.options.fromSheets.charAt(0)

          // // file id
          // this.output.file.id
          // // sheet name
          // this.output.sheet.properties.title
          // // range
          // this.options.toSheets

          // "sheet":{
          //   "properties":{
          //     "sheetId":0,
          //     "title":"Feuille 1",
          //     "index":0,
          //     "sheetType":"GRID",
          //     "gridProperties":{
          //       "rowCount":1000,
          //       "columnCount":26
          //       }
          //     }
          //   }

          // console.log(response);
          if(response.status !== 200) {
            // put it in database

            // show alert
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'something went wrong with output sheet!',
                confirmButtonColor: "#10b981",
            }).then(() => {
              this.$router.push({ name: 'dashboard.connections' })
            })
            // return alert('something went wrong with output response');
          }

          /* ######################## */
          //3. save things on database
          await this.saveInDatabase();
          
          //4. increment used_connection for user
        },
        async saveInDatabase() {
          await axios.post('/api/connection/create', {
              source_sheetId: this.source.sheet.properties.sheetId,
              source_title: this.source.sheet.properties.title,
              source_index: this.source.sheet.properties.index,
              source_sheetType: this.source.sheet.properties.sheetType,
              source_rowCount: this.source.sheet.properties.gridProperties.rowCount,
              source_columnCount: this.source.sheet.properties.gridProperties.columnCount,

              output_sheetId: this.output.sheet.properties.sheetId,
              output_title: this.output.sheet.properties.title,
              output_index: this.output.sheet.properties.index,
              output_sheetType: this.output.sheet.properties.sheetType,
              output_rowCount: this.output.sheet.properties.gridProperties.rowCount,
              output_columnCount: this.output.sheet.properties.gridProperties.columnCount,

              source_from: this.options.fromSheets,
              source_to: this.options.fromSheets.charAt(0),

              output_from: this.options.toSheets,
              output_to: this.options.toSheets.charAt(0),

              source_spreadsheetId: this.source.file.id,
              source_name: this.source.file.name,
              source_mimeType: this.source.file.mimeType,
              source_size: this.source.file.size,
              source_webViewLink: this.source.file.webViewLink,
              source_shared: this.source.file.shared,
              source_ownedByMe: this.source.file.ownedByMe,
              source_exportLinks: this.source.file.exportLinks,

              output_spreadsheetId: this.output.file.id,
              output_name: this.output.file.name,
              output_mimeType: this.output.file.mimeType,
              output_size: this.output.file.size,
              output_webViewLink: this.output.file.webViewLink,
              output_shared: this.output.file.shared,
              output_ownedByMe: this.output.file.ownedByMe,
              output_exportLinks: this.output.file.exportLinks,
          })
          .then(response => {
            console.log(response)
          })
          .catch(e => {
            console.error(e)
            console.log(e.error)
          })
          // .finally(() => this.connecting = false)
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