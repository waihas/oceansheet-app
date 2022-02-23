<template>
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            We're connectiong yours sheets now...
        </div>
        <div class="p-4 flex-grow">
            <div v-if="connecting" class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                <div class="flex flex-col text-center space-y-3 cursor-wait">
                  <svg class="animate-spin h-24 mx-auto w-24 mb-3 fill-current text-gray-400" viewBox="0 0 24 24">
                      <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                  </svg>
                  <span class="text-gray-500">Connecting your spreadsheets...</span>
                </div>
            </div>
            <div v-else class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                <div class="flex flex-col text-center space-y-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-24 mx-auto w-24 mb-3 fill-current text-main-500" viewBox="0 0 24 24">
                    <path d="M0 12.116l2.053-1.897c2.401 1.162 3.924 2.045 6.622 3.969 5.073-5.757 8.426-8.678 14.657-12.555l.668 1.536c-5.139 4.484-8.902 9.479-14.321 19.198-3.343-3.936-5.574-6.446-9.679-10.251z"/>
                  </svg>
                  <span class="text-gray-500">Your spreadsheets are connected successfully :)</span>
                  <p class="text-gray-500 text-sm">Please click 'Save & Continue' to save the connection.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-row-reverse justify-between py-3 px-4 border-t border-gray-100">
            <div class="flex-initial">
              <button
                :disabled="connecting"
                @click.prevent="nextStep()"
                class="bg-main-500 text-white text-sm py-2 px-8 rounded-3xl w-full transition-all duration-100 ease-in-out"
                :class="!connecting ? 'hover:bg-main-700' : 'opacity-75 cursor-default' "
                >
                  Save & Continue
              </button>
            </div>

            <div class="flex-initial">
              <button
                :disabled="connecting || connected"
                @click.prevent="prevStep()"
                class="bg-white text-main-500 text-sm py-2 px-8 border border-gray-200 rounded-3xl w-full transition-all duration-100 ease-in-out"
                :class="(connecting || connected) ? 'opacity-75 cursor-not-allowed' : 'hover:bg-gray-100' "
              >
                Back
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
            count: 1,
            file1: {},
            sheet1: {},
            file2: {},
            sheet2: {},
            file3: {},
            sheet3: {},
        },
        options:{
            fromSheets: '',
            toSheets1: '',
            toSheets2: '',
            toSheets3: '',
            runTime: '',
        },
        startConnectiong:false
    },

    data() {
        return {
            connecting: false,
            connected:false,
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
            this.connected = true;
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
            await axios.post('/api/calls/error/save', {
                error: sourceData.status,
                log: sourceData.data,
            })
            
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
          const response1 = await this.$google.api.client.sheets.spreadsheets.values.update({
              spreadsheetId: this.output.file1.id,
              range: this.output.sheet1.properties.title+'!'+this.options.toSheets1,
              valueInputOption: 'USER_ENTERED',
              values: sourceData.result.values
              // values: [ ["123"],["455"],["sdqsdf"],["sqdf"] ]
          })

          if(response1.status !== 200) {
            await axios.post('/api/calls/error/save', {
                error: response1.status,
                log: response1.data,
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'something went wrong with output sheet!',
                confirmButtonColor: "#10b981",
            }).then(() => {
              this.$router.push({ name: 'dashboard.connections' })
            })
          }

          if(this.output.count > 1) {
            const response2 = await this.$google.api.client.sheets.spreadsheets.values.update({
                spreadsheetId: this.output.file2.id,
                range: this.output.sheet2.properties.title+'!'+this.options.toSheets2,
                valueInputOption: 'USER_ENTERED',
                values: sourceData.result.values
                // values: [ ["123"],["455"],["sdqsdf"],["sqdf"] ]
            })

            if(response2.status !== 200) {
              // put it in database
              await axios.post('/api/calls/error/save', {
                  error: response2.status,
                  log: response2.data,
              })

              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'something went wrong with output sheet!',
                  confirmButtonColor: "#10b981",
              }).then(() => {
                this.$router.push({ name: 'dashboard.connections' })
              })
            }
          }
          if(this.output.count === 3) {
            const response3 = await this.$google.api.client.sheets.spreadsheets.values.update({
                spreadsheetId: this.output.file3.id,
                range: this.output.sheet3.properties.title+'!'+this.options.toSheets3,
                valueInputOption: 'USER_ENTERED',
                values: sourceData.result.values
                // values: [ ["123"],["455"],["sdqsdf"],["sqdf"] ]
            })

            // console.log(response);
            if(response3.status !== 200) {
              // put it in database
              await axios.post('/api/calls/error/save', {
                  error: response3.status,
                  log: response3.data,
              })

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
          }

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

              output_sheets_count: this.output.count,
              run_time: this.options.runTime,

              output_1_sheetId: this.output.sheet1.properties.sheetId,
              output_1_title: this.output.sheet1.properties.title,
              output_1_index: this.output.sheet1.properties.index,
              output_1_sheetType: this.output.sheet1.properties.sheetType,
              output_1_rowCount: this.output.sheet1.properties.gridProperties.rowCount,
              output_1_columnCount: this.output.sheet1.properties.gridProperties.columnCount,
              
              output_2_sheetId: this.output.sheet2.properties.sheetId,
              output_2_title: this.output.sheet2.properties.title,
              output_2_index: this.output.sheet2.properties.index,
              output_2_sheetType: this.output.sheet2.properties.sheetType,
              output_2_rowCount: this.output.sheet2.properties.gridProperties.rowCount,
              output_2_columnCount: this.output.sheet2.properties.gridProperties.columnCount,
              
              output_3_sheetId: this.output.sheet3.properties.sheetId,
              output_3_title: this.output.sheet3.properties.title,
              output_3_index: this.output.sheet3.properties.index,
              output_3_sheetType: this.output.sheet3.properties.sheetType,
              output_3_rowCount: this.output.sheet3.properties.gridProperties.rowCount,
              output_3_columnCount: this.output.sheet3.properties.gridProperties.columnCount,

              source_from: this.options.fromSheets,
              source_to: this.options.fromSheets.charAt(0),

              output_1_from: this.options.toSheets1,
              output_1_to: this.options.toSheets1.charAt(0),
              output_2_from: this.options.toSheets2,
              output_2_to: this.options.toSheets2.charAt(0),
              output_3_from: this.options.toSheets3,
              output_3_to: this.options.toSheets3.charAt(0),

              source_spreadsheetId: this.source.file.id,
              source_name: this.source.file.name,
              source_mimeType: this.source.file.mimeType,
              source_size: this.source.file.size,
              source_webViewLink: this.source.file.webViewLink,
              source_shared: this.source.file.shared,
              source_ownedByMe: this.source.file.ownedByMe,
              source_exportLinks: this.source.file.exportLinks,

              output_1_spreadsheetId: this.output.file1.id,
              output_1_name: this.output.file1.name,
              output_1_mimeType: this.output.file1.mimeType,
              output_1_size: this.output.file1.size,
              output_1_webViewLink: this.output.file1.webViewLink,
              output_1_shared: this.output.file1.shared,
              output_1_ownedByMe: this.output.file1.ownedByMe,
              output_1_exportLinks: this.output.file1.exportLinks,
              
              output_2_spreadsheetId: this.output.file2.id,
              output_2_name: this.output.file2.name,
              output_2_mimeType: this.output.file2.mimeType,
              output_2_size: this.output.file2.size,
              output_2_webViewLink: this.output.file2.webViewLink,
              output_2_shared: this.output.file2.shared,
              output_2_ownedByMe: this.output.file2.ownedByMe,
              output_2_exportLinks: this.output.file2.exportLinks,
              
              output_3_spreadsheetId: this.output.file3.id,
              output_3_name: this.output.file3.name,
              output_3_mimeType: this.output.file3.mimeType,
              output_3_size: this.output.file3.size,
              output_3_webViewLink: this.output.file3.webViewLink,
              output_3_shared: this.output.file3.shared,
              output_3_ownedByMe: this.output.file3.ownedByMe,
              output_3_exportLinks: this.output.file3.exportLinks,
          })
          .then(response => {
            // console.log(response)
          })
          .catch(e => {
            console.error(e)
            axios.post('/api/calls/error/save', {
                error: e.response.status,
                log: e.response.data,
            })
            // console.log(e.error)
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