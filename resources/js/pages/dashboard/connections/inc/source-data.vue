<template>
    <!-- here we select the sheet and tab for source -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100"
        @click="getFilesBB">
            Select source data
        </div>
        <div class="p-4 flex-grow">
            
            <button @click.stop="showPicker = true" class="bg-teal-500 text-white font-bold py-2 px-4 rounded w-full transition-all duration-100 ease-in-out hover:bg-teal-700"
                id="buttonSelectFile">
                Select file
            </button>

            <!-- on click on this one make step validated just for now -->
            <div class="mt-2 text-sm text-red-600" @click="makeCompleted">
                Please select your data source sheet.
            </div>

            <br>
            <br>
            <AttachmentList :tempAttachments="source.files"/>
        </div>

        <transition
            name="background"
            enter-active-class="transition ease-out duration-150"
            enter-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition ease-in duration-150"
            leave-class="opacity-100"
            leave-to-class="opacity-0">
            <div
                v-if="showPicker"
                class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
                <transition
                    name="modal"
                    enter-active-class="transition ease-out duration-150"
                    enter-class="opacity-0 transform translate-y-1/2"
                    enter-to-class="opacity-100"
                    leave-active-class="transition ease-in duration-150"
                    leave-class="opacity-100"
                    leave-to-class="opacity-0 transform translate-y-1/2"
                    appear
                >
                    <div
                        v-if="showPicker"
                        v-click-outside="closePicker"
                        @keydown.esc="closePicker"
                        class="w-full sm:max-w-5xl px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 border-t-8 border-primary-500"
                        role="dialog"
                        id="modalGDriveSelector">
                        
                        <header class="flex justify-between items-center">
                            <h2 class="text-xl text-gray-600 font-medium">
                                Please select your source sheets.
                            </h2>
                            <button
                                class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded hover: hover:text-gray-700"
                                aria-label="close"
                                @click="closePicker"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                                        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </header>

                        <div class="mt-12 mb-4">
                            <!-- <GDriveSelector /> -->
                            <file-picker-button :config="gConfig"
                                @picked="showDetails"
                                >
                                Open Google Drive Dialog
                            </file-picker-button>



                            <!-- example dyal design for files -->
                            <!-- <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
                                <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                                    <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> 
                                        <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search files">
                                    </div>
                                    <div class="w-full sm:w-auto flex">
                                        <button class="button text-white bg-theme-1 shadow-md mr-2">Upload New Files</button>
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button px-2 box text-gray-700">
                                                <span class="w-5 h-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus w-4 h-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> </span>
                                            </button>
                                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                                <div class="dropdown-box__content box p-2">
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Share Files </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings w-4 h-4 mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                                <input class="input border border-gray-500" type="checkbox">
                                            </div>
                                            <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                                <div class="file__icon__file-name">TXT</div>
                                            </a>
                                            <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a> 
                                            <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                                <input class="input border border-gray-500" type="checkbox">
                                            </div>
                                            <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                                <div class="file__icon__file-name">TXT</div>
                                            </a>
                                            <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a> 
                                            <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                                <input class="input border border-gray-500" type="checkbox">
                                            </div>
                                            <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                                <div class="file__icon__file-name">TXT</div>
                                            </a>
                                            <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a> 
                                            <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                        </div>
                    </div>
                </transition>
            </div>
        </transition>

        <!-- x-transition:enter = enter-active-class
        x-transition:enter-start = enter-class
        x-transition:enter-end = enter-to-class
        x-transition:leave = leave-active-class
        x-transition:leave-start = leave-class
        x-transition:leave-end = leave-to-class -->

    </div>
</template>

<script>
import clickOutside from 'vue-click-outside'
import GDriveSelector from '~/components/picker/GDriveSelector'
import FilePickerButton from 'vue-google-picker'
import AttachmentList from "~/components/picker/AttachmentList";
import axios from 'axios'

export default {
    name: 'SourceData',
    
    directives: {
        clickOutside
    },

    components: {
        GDriveSelector,
        FilePickerButton,
        AttachmentList
    },
    
    // {
    //     "action": "picked",
    //     "viewToken": [
    //         "all",
    //         null,
    //         {}
    //     ],
    //     "docs": [
    //         {
    //             "id": "1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             "serviceId": "spread",
    //             "mimeType": "application/vnd.google-apps.spreadsheet",
    //             "name": "Laravel Sheets",
    //             "description": "",
    //             "type": "document",
    //             "lastEditedUtc": 1643187270278,
    //             "iconUrl": "https://drive-thirdparty.googleusercontent.com/16/type/application/vnd.google-apps.spreadsheet",
    //             "url": "https://docs.google.com/spreadsheets/d/1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ/edit?usp=drive_web",
    //             "embedUrl": "https://docs.google.com/spreadsheets/d/1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ/htmlembed",
    //             "sizeBytes": 0,
    //             "isShared": true
    //         },
    //         {
    //             "id": "1oa75jjArJFdWfcr1ejOMdEVULH_Lbo6drryxx4xTM5c",
    //             "serviceId": "spread",
    //             "mimeType": "application/vnd.google-apps.spreadsheet",
    //             "name": "Laravel Code Review",
    //             "description": "",
    //             "type": "document",
    //             "lastEditedUtc": 1642311000332,
    //             "iconUrl": "https://drive-thirdparty.googleusercontent.com/16/type/application/vnd.google-apps.spreadsheet",
    //             "url": "https://docs.google.com/spreadsheets/d/1oa75jjArJFdWfcr1ejOMdEVULH_Lbo6drryxx4xTM5c/edit?usp=drive_web",
    //             "embedUrl": "https://docs.google.com/spreadsheets/d/1oa75jjArJFdWfcr1ejOMdEVULH_Lbo6drryxx4xTM5c/htmlembed",
    //             "sizeBytes": 0,
    //             "isShared": true
    //         }
    //     ]
    // }
    

    data: () => ({
        showPicker: false,
        source: {
            files: [],
        },
    }),

    created() {

        gapi.load("client:auth2", function() {
            gapi.auth2.init({client_id: "727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com"});
        });

        this.gConfig = {
            // The Browser API key obtained from the Google API Console.
            developerKey: 'AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw',

            // The Client ID obtained from the Google API Console. Replace with your own Client ID.
            clientId: '727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com',

            // Scope to use to access user's drive.
            scope: 'https://www.googleapis.com/auth/drive.file',

            // redirect_uri: 'https://www.example.com',
            // prompt: 'select_account'
        }
    }, 
    
    methods: {
        closePicker: function() {
            this.showPicker = false
        },
        makeCompleted: function() {
            this.$emit("step-one-completed", this.source) ;
        },
        showDetails (data) {
            if(data.picked === 'picked') {
                this.source.files = data.docs
                console.log(data.docs)
            }
        },
         getFilesBB() { //
            this.authenticate().then(this.loadClient())
            // const { data } = await axios.get('https://www.googleapis.com/drive/v3/files/AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw?access_token=727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com')
            // .then((response) => {
            //     console.log(response.data);
            //     console.log(response.status);
            //     console.log(response.statusText);
            //     console.log(response.headers);
            //     console.log(response.config);
            // }, (error) => {
            //     console.log(error);
            // });
        },
        authenticate() {
            return gapi.auth2.getAuthInstance()
                .signIn({scope: "https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.appdata https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive.metadata https://www.googleapis.com/auth/drive.metadata.readonly https://www.googleapis.com/auth/drive.photos.readonly https://www.googleapis.com/auth/drive.readonly"})
                .then(function() { console.log("Sign-in successful"); },
                    function(err) { console.error("Error signing in", err); });
        },
        loadClient() {
            gapi.client.setApiKey("AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw");
            return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/drive/v3/rest")
                .then(function() { console.log("GAPI client loaded for API"); },
                    function(err) { console.error("Error loading GAPI client for API", err); });
        },
        // Make sure the client is loaded and sign-in is complete before calling this method.
        execute() {
            return gapi.client.drive.files.list({})
                .then(function(response) {
                        // Handle the results here (response.result has the parsed body).
                        console.log("Response", response);
                    },
                    function(err) { console.error("Execute error", err); });
        },
    },
}
</script>