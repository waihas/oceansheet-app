<template>
    <!-- here we select the sheet and tab for source -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Select source data
        </div>
        <div class="p-4 flex-grow">
            
            <!-- <button @click.stop="showPicker = true" class="bg-teal-500 text-white font-bold py-2 px-4 rounded w-full transition-all duration-100 ease-in-out hover:bg-teal-700"
                id="buttonSelectFile">
                Select file
            </button> -->

            <!-- on click on this one make step validated just for now -->
            <!-- <div class="mt-2 text-sm text-red-600" @click="makeCompleted">
                Please select your data source sheet.
            </div> -->

            <!-- <div @click="execute()">
                Execute
            </div> -->

            <!-- <div>
                <img src="/assets/img/sheet-logo.svg" class="w-auto h-32 mx-auto" alt="Sheet logo" />
            </div> -->

            <div v-if="Object.keys(sourceFile).length > 0">
                <div class="bg-white p-3">
                    <img class="w-28 h-28" src="/assets/img/sheet-logo.svg" alt="Sheet logo" >
                    <div class="file-details">
                        <div class="file-name display-flex align-center">
                            <p class="text-xl" ref="attachmentTitle">{{ sourceFile.name }}</p>
                        </div>
                        <div class="file-info">
                            <span class="uploaded-date">File Size : {{ sourceFile.kind }} bytes</span>
                            <!-- <span v-if="checkProgress(sourceFile)" class="upload-prgress"></span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div v-else class="flex items-center justify-center w-full">
                <label class="flex flex-col w-full border-2 border-dashed group rounded-lg bg-gray-50 hover:bg-gray-100 hover:border-main-300 cursor-pointer"
                    @click.stop="showPicker = true">
                    <div class="flex flex-col items-center justify-center py-7">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-gray-400 group-hover:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <p class="mt-2 text-sm tracking-wider text-gray-400 group-hover:text-gray-500">
                            Select a file</p>
                    </div>
                </label>
            </div>

            <!-- <AttachmentList :tempAttachments="source.files"/> -->
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
                            <h2 class="text-2xl text-gray-800 font-medium">
                                Cloud Storage
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
                            <!-- <file-picker-button :config="gConfig"
                                @picked="showDetails"
                                >
                                Open Google Drive Dialog
                            </file-picker-button> -->

                            <div class="flex items-center justify-center w-full border-b pb-5">
                                <div v-if="driveFiles.length > 0" class="grid grid-cols-2 md:grid-cols-5 gap-4 p-4 w-full h-1/2 border rounded bg-gray-100 overflow-visible">
                                    
                                    <!-- search and nav bar -->


                                    <div v-for="file in driveFiles" :key="file.id"
                                        class="p-3 mx-3 flex flex-col rounded-md justify-center items-center transform scale-105 hover:bg-white cursor-pointer"
                                        @click="choosedFile(file)"
                                        :class="file.id == sourceFile.id ? 'bg-white border border-main-300' : ''">
                                        <img class="h-20 w-20" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                                        <h2 class="mt-4">{{ file.name }}</h2>
                                        <p class="mt-2 text-sm">{{ file.kind }} bytes</p>
                                    </div>

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
                                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Share Files </a>
                                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings w-4 h-4 mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                                            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                                                <div class="file box rounded-md px-3 pt-8 pb-5 sm:px-5 relative zoom-in">
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
                                                <div class="file box rounded-md pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
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
                                                <div class="file box rounded-md pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
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
                                <div v-else class="flex flex-col w-full group border rounded bg-gray-100 hover:border-main-300">
                                    <div class="flex flex-col items-center justify-center py-7">
                                        <UploadIcon/>
                                        <button @click="connectToDrive()" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition-all duration-100 ease-in-out">
                                            Connect to Google drive
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 inline-flex text-sm text-gray-700 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-6 w-6 mr-4" viewBox="0 0 24 24">
                                    <path d="M15.762 8.047l-4.381 4.475-2.215-2.123-1.236 1.239 3.451 3.362 5.619-5.715-1.238-1.238zm-3.762-5.503c2.5 1.805 4.555 2.292 7 2.416v9.575c0 3.042-1.686 3.827-7 7.107-5.309-3.278-7-4.065-7-7.107v-9.575c2.447-.124 4.5-.611 7-2.416zm0-2.544c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3z"/>
                                </svg>
                                <div>
                                    OceanSheet does not store any copies of your file content.<br>
                                    Read our privacy policy 
                                    <router-link class="text-main-500" :to="{name: 'privacy.policy'}">
                                    here.
                                    </router-link>
                                </div>
                            </div>

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
// import FilePickerButton from 'vue-google-picker'
// import AttachmentList from "~/components/picker/AttachmentList";
import UploadIcon from "~/components/picker/UploadIcon";


// {
//     "result": {
//         "kind": "drive#fileList",
//         "nextPageToken": "~!!~AI9FV7RGv_YKBL_h0VAPMNC7JGabSdq--18QwgtW2sp7tNDSUKT09VI3kCvWFl0qigiuuwrnwGytZVUfRZTEr1AZB9gMnMdgRKe4u0vDgUvKrbaXizpbtUDb5_YvEO5lR8EdOY1itv71TkMzJzpKMAiKgmToaMbdo6ljboSKMIWrC2WZSE1lpTjeyrXnPRK9jm8e4zlAH2xBJzbdT7ohmMOQjiKHdWj90ipNKphcZ2hcSHNeyaSf7gkEza7MNfD22tIwQ4NpzuixEhzILnVwlhVGsGf3x5ubaA==",
//         "incompleteSearch": false,
//         "files": [
//             {
//                 "kind": "drive#file",
//                 "id": "1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
//                 "name": "Laravel Sheets",
//                 "mimeType": "application/vnd.google-apps.spreadsheet"
//             },
//             {
//                 "kind": "drive#file",
//                 "id": "0B6mYnb1g2UTDcGNUaGkycXRKUlE",
//                 "name": "English",
//                 "mimeType": "application/vnd.google-apps.folder",
//                 "resourceKey": "0-A58QZDTokYF-CLOvPwYtBw"
//             },
//         ]
//     },
//     "headers": {
//         "cache-control": "no-cache, no-store, max-age=0, must-revalidate",
//         "content-encoding": "gzip",
//         "content-length": "5936",
//         "content-type": "application/json; charset=UTF-8",
//         "date": "Thu, 27 Jan 2022 10:12:55 GMT",
//         "expires": "Mon, 01 Jan 1990 00:00:00 GMT",
//         "pragma": "no-cache",
//         "server": "GSE",
//         "vary": "Origin, X-Origin"
//     },
//     "status": 200,
//     "statusText": null
// }


export default {
    name: 'SourceData',
    
    directives: {
        clickOutside
    },

    components: {
        GDriveSelector,
        // FilePickerButton,
        // AttachmentList,
        UploadIcon
    },

    computed: {
        driveFiles: function () {
            // `this` points to the vm instance
            // return this.message.split('').reverse().join('')
            // return null

            return [
                // {
                //     "kind": "drive#file",
                //     "id": "1-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                //     // "id": "1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     // "serviceId": "spread",
                //     // "mimeType": "application/vnd.google-apps.spreadsheet",
                //     // "name": "Laravel Sheets",
                //     // "description": "",
                //     // "type": "document",
                //     // "lastEditedUtc": 1643187270278,
                //     // "iconUrl": "https://drive-thirdparty.googleusercontent.com/16/type/application/vnd.google-apps.spreadsheet",
                //     // "url": "https://docs.google.com/spreadsheets/d/1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ/edit?usp=drive_web",
                //     // "embedUrl": "https://docs.google.com/spreadsheets/d/1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ/htmlembed",
                //     // "sizeBytes": 0,
                //     // "isShared": true
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "2-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "3-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "4-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "5-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "6-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "7-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
                // {
                //     "kind": "drive#file",
                //     "id": "8-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
                //     "name": "Laravel Sheets",
                //     "mimeType": "application/vnd.google-apps.folder",
                // },
            ]
        }
    },

    data: () => ({
        showPicker: false,
        sourceFile: {},
    }),

    created() {

        gapi.load("client:auth2", function() {
            gapi.auth2.init({client_id: "727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com"});
        });

        // this.gConfig = {
        //     // The Browser API key obtained from the Google API Console.
        //     developerKey: 'AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw',

        //     // The Client ID obtained from the Google API Console. Replace with your own Client ID.
        //     clientId: '727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com',

        //     // Scope to use to access user's drive.
        //     scope: 'https://www.googleapis.com/auth/drive.file',

        //     // redirect_uri: 'https://www.example.com',
        //     // prompt: 'select_account'
        // }
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
        connectToDrive() {
            this.authenticate().then(this.loadClient());
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
                .signIn({scope: "https://www.googleapis.com/auth/drive"})
                // .signIn({scope: "https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.appdata https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive.metadata https://www.googleapis.com/auth/drive.metadata.readonly https://www.googleapis.com/auth/drive.photos.readonly https://www.googleapis.com/auth/drive.readonly"})
                .then(
                    function() {
                        console.log("Sign-in successful");
                        console.log('token:' + gapi.auth2.getAuthInstance().currentUser.get().getAuthResponse().id_token);
                        // this.loadClient();
                    },
                    function(err) {
                        console.error("Error signing in", err);
                    });
        },
        loadClient() {
            gapi.client.setApiKey("AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw");
            // gapi.client.setToken(tokenObject)
            return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/drive/v3/rest")
                .then(
                    function() {
                        console.log("GAPI client loaded for API");
                        this.execute();
                    },
                    function(err) {
                        console.error("Error loading GAPI client for API", err);
                    });
        },
        // Make sure the client is loaded and sign-in is complete before calling this method.
        execute() {
            return gapi.client.drive.files.list({})
                .then(
                    function(response) {
                        // Handle the results here (response.result has the parsed body).
                        this.driveFiles = response.result.files
                        console.log("Response", response);
                    },
                    function(err) {
                        console.error("Execute error", err);
                    });
        },
        choosedFile: function(file) {
            this.sourceFile = file
            console.log('choosed file is: ' + file.id)
        }
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
}
</script>