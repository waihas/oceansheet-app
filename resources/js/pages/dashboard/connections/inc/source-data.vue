<template>
    <!-- here we select the sheet and tab for source -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Select source data
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

              <!-- <div class="flex-initial" v-if="step > 1">
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
              </div> -->
          </div>

    </div>
</template>

<script>
// import clickOutside from 'vue-click-outside'
// import UploadIcon from "~/components/sheet-selector/UploadIcon";
import GoogleDriveSheets from "~/components/sheet-selector/GoogleDriveSheets";
// import { mapGetters, mapActions } from 'vuex'

export default {
    name: 'SourceData',
    
    // directives: {
    //     clickOutside,
    // },

    components: {
        GoogleDriveSheets
    },

    data: () => ({
        movingToNextStep: false,
        // showPicker: false,
        // showConfirmFile: false,
        // tmpChoosedFile: {},
        // isMenuOpen: false, 
        source: {
            file: {},
            sheet: {}
        },
        error: '',
        // driveFiles: [
        //     // {
        //     //     "kind": "drive#file",
        //     //     "id": "6-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
        //     //     "name": "Laravel Sheets",
        //     //     "mimeType": "application/vnd.google-apps.folder",
        //     // },
        //     // {
        //     //     "kind": "drive#file",
        //     //     "id": "7-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
        //     //     "name": "Laravel Sheets",
        //     //     "mimeType": "application/vnd.google-apps.folder",
        //     // },
        //     // {
        //     //     "kind": "drive#file",
        //     //     "id": "8-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
        //     //     "name": "Laravel Sheets",
        //     //     "mimeType": "application/vnd.google-apps.folder",
        //     // },
        // ],
        // isSignedIn: true
    }),

    // computed: {
    //     ...mapGetters('gauth',{
    //         gauthReady: 'isReady',
    //         isSignedIn: 'isSignedIn',
    //         user: 'getUser',
    //         userMail: 'getUserEmail',
    //     }),
    // },
    // mounted() {
    //     this.$store.dispatch('gauth/init')
    // },

    methods: {
        // ...mapActions('gauth',{
        //     signIn: 'signIn',
        //     signOut: 'signOut',
        //     disconnect: 'disconnect',
        // }),
        // openPicker: function() {
        //     this.showPicker = true
        //     if(this.isSignedIn && this.driveFiles == [])
        //         this.loadSheets()
        // },
        // closePicker: function() {
        //     this.showPicker = false
        // },
        // makeCompleted: function() {
        //     this.$emit("step-one-completed", this.source);
        // },
        // async loadSheets() {
        //     const response = await this.$google.api.client.drive.files.list({
        //         q: "mimeType='application/vnd.google-apps.spreadsheet'",
        //         fields: 'files(id,size,name)'
        //     })
        //     if ('result' in response && 'files' in response.result && response.result.files.length > 0) {
        //         console.log(response.result.files)

        //         this.driveFiles = response.result.files
        //         // this.driveFiles = response.result.files.filter(file => {
        //         //     return file.mimeType == 'application/vnd.google-apps.spreadsheet'
        //         // })
        //     } else this.driveFiles = []
        // },
        // async loadSheetDetails() {
        //     // const response = await this.$google.api.client.drive.files.get({
        //     //     fileId: this.source.file.id,
        //     //     fields: '*'
        //     //     // fields: 'size,modifiedTime,webViewLink,webContentLink,createdTime'
        //     // })
        //     const response = await this.$google.api.client.sheets.spreadsheets.get({
        //         // spreadsheetId: '1sdxqzuQ7fANcYUJjbnFJ0YCpHZqWH9gBCxcT-0M9vTY',
        //         spreadsheetId: this.source.file.id,
        //         includeGridData: true
        //     })
        //     // console.log(response.result)
        //     this.source.sheets = response.result.sheets;
        //     // console.log(JSON.stringify(response.result))
            
        // },
        // choosedFile: function(file) {
        //     this.tmpChoosedFile = file
        //     this.showConfirmFile = true
        // },
        // confirmChoosedFile: function() {
        //     this.source.file = this.tmpChoosedFile
        //     this.$emit("step-one-completed", this.source)
        //     console.log('choosed file is: ' + this.tmpChoosedFile.id)
        //     this.loadSheetDetails()
        //     this.closePicker()
        // },
        // chooseTab: function() {
        //     this.$emit("step-one-completed", this.source);
        // },
        // clearChoosedFile: function() {
        //     this.showConfirmFile = false
        //     this.tmpChoosedFile = {}
        //     this.source = {
        //         file: {},
        //         sheets: {},
        //         tab: null
        //     }
        // },
        fileChoosed: function(data) {
            this.source.file = data
            this.error = ''
        },
        sheetChoosed: function(data) {
            this.source.sheet = data
            this.error = ''
        },
        checkFileSelected: function() {
            if(Object.keys(this.source.file).length < 1) {
                this.error = 'Please select a Google Sheet file.'
                return false
            }
            return true
        },
        checkSheetSelected: function() {
            if(Object.keys(this.source.sheet).length === 0) {
                this.error = 'Please select your data source sheet.'
                return false
            }
            return true
        },
        nextStep: function() {

            if(this.checkFileSelected() && this.checkSheetSelected()) {
                this.error = ''
                this.$emit("step-one-completed", this.source);
                console.log('final source:')
                console.log(JSON.stringify(this.source))
            }

        }
    },
}
</script>
