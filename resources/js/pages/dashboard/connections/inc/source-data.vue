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

            <div v-if="Object.keys(source.file).length > 0">
                <div class="bg-white p-3 flex flex-wrap">
                    <img class="w-28 h-28" src="/assets/img/sheet-logo.svg" alt="Sheet logo" >
                    <div class="ml-6 flex flex-col my-auto">
                        <div class="text-2xl">
                            {{ source.file.name }}
                        </div>
                        <div class="text-sm">
                            File Size : {{ source.file.kind }} bytes
                            <!-- <span v-if="checkProgress(source.file)" class="upload-prgress"></span> -->
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 mt-6 py-6 border-dashed">
                    <label for="selectTab" class="block text-sm font-medium text-gray-700 leading-5">
                        Select the tab you want to use
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <select id="selectTab" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            <option>Sheet 1</option>
                            <option>Sheet 2</option>
                            <option>Employees</option>
                        </select>
                    </div>
                    
                     <div class="mt-2 text-sm text-red-600" @click="makeCompleted">
                        Please select your data source sheet.
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

                            <div class="w-full border-b pb-5">
                                <div v-if="driveFiles.length > 0">
                                    
                                    <!-- search and nav bar -->
                                    <div class="flex flex-row items-center rounded-t p-1 justify-between border bg-gray-100">
                                        <span class="w-2/3 md:w-1/3 h-10 cursor-pointer text-sm rounded-full flex">
                                            <input type="search" name="serch" placeholder="Search"
                                                class="flex-grow px-4 rounded-l-full rounded-r-full border-0 text-sm focus:outline-none">
                                        </span>
                                        <div class="flex flex-row-reverse mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-5 w-5 text-gray-500 hover:text-gray-700 " viewBox="0 0 24 24">
                                                <path d="M13.5 2c-5.629 0-10.212 4.436-10.475 10h-3.025l4.537 5.917 4.463-5.917h-2.975c.26-3.902 3.508-7 7.475-7 4.136 0 7.5 3.364 7.5 7.5s-3.364 7.5-7.5 7.5c-2.381 0-4.502-1.119-5.876-2.854l-1.847 2.449c1.919 2.088 4.664 3.405 7.723 3.405 5.798 0 10.5-4.702 10.5-10.5s-4.702-10.5-10.5-10.5z"/>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 p-4 w-full h-80 border rounded-b bg-gray-100 overflow-x-auto">
                                        <div v-for="file in driveFiles" :key="file.id"
                                            class="p-3 mx-3 flex flex-col rounded-md justify-center items-center transform scale-105 hover:bg-white cursor-pointer"
                                            @click="choosedFile(file)"
                                            :class="file.id == source.file.id ? 'bg-white border border-main-300' : ''">
                                            <img class="h-20 w-20" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                                            <h2 class="mt-4 truncate">{{ file.name }}</h2>
                                            <p class="mt-2 text-sm truncate">{{ file.kind }} bytes</p>
                                        </div>
                                    </div>

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

    // computed: {
    //     driveFiles: function () {
    //         // `this` points to the vm instance
    //         // return this.message.split('').reverse().join('')
    //         // return null

    //         return [
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "1-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             //     // "id": "1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     // "serviceId": "spread",
    //             //     // "mimeType": "application/vnd.google-apps.spreadsheet",
    //             //     // "name": "Laravel Sheets",
    //             //     // "description": "",
    //             //     // "type": "document",
    //             //     // "lastEditedUtc": 1643187270278,
    //             //     // "iconUrl": "https://drive-thirdparty.googleusercontent.com/16/type/application/vnd.google-apps.spreadsheet",
    //             //     // "url": "https://docs.google.com/spreadsheets/d/1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ/edit?usp=drive_web",
    //             //     // "embedUrl": "https://docs.google.com/spreadsheets/d/1SUNw7QzAMx-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ/htmlembed",
    //             //     // "sizeBytes": 0,
    //             //     // "isShared": true
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "2-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "3-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "4-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "5-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "6-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "7-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //             // {
    //             //     "kind": "drive#file",
    //             //     "id": "8-xXUwr5s-mJrZC9NGFRl4RqyzSL6CogkQ",
    //             //     "name": "Laravel Sheets",
    //             //     "mimeType": "application/vnd.google-apps.folder",
    //             // },
    //         ]
    //     }
    // },

    data: () => ({
        showPicker: false,
        source: {
            file: {},
            tab: null
        },
        driveFiles: [],
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
            this.$emit("step-one-completed", this.source);
        },
        showDetails (data) {
            if(data.picked === 'picked') {
                this.source.file = data.docs
                console.log(data.docs)
            }
        },
        async connectToDrive() {
            // if(hasToken) {
                // gapi.client.setToken('eyJhbGciOiJSUzI1NiIsImtpZCI6IjllYWEwMjZmNjM1MTU3ZGZhZDUzMmU0MTgzYTZiODIzZDc1MmFkMWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNzI3OTE0MzU3MzM4LWwzaGhjZWJmNDhjZmVzdjRyMjczM3ZwamlhNDBsOGZ0LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNzI3OTE0MzU3MzM4LWwzaGhjZWJmNDhjZmVzdjRyMjczM3ZwamlhNDBsOGZ0LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTExNzI5MTAwMTcwNDM5MjA5NDUxIiwiZW1haWwiOiJraGFsaWRoYW1kYW5pMjVAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJRZ0tMd0djR1p2d2VjUlBycEdkME1RIiwibmFtZSI6IktoYWxpZCBIQU1EQU5JIiwicGljdHVyZSI6Imh0dHBzOi8vbGgzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hLS9BT2gxNEdoQkp6RjRoY2RSODVvem5xVEJFbXdPOEgweGNLUDJsYzY2a21qdWhBPXM5Ni1jIiwiZ2l2ZW5fbmFtZSI6IktoYWxpZCIsImZhbWlseV9uYW1lIjoiSEFNREFOSSIsImxvY2FsZSI6ImZyIiwiaWF0IjoxNjQzMzYwMDI3LCJleHAiOjE2NDMzNjM2MjcsImp0aSI6ImQwNWQyMWU4NWNmYTI1NmQ1NWZhYjIxOWMwMmZkNmY5MTI0ZjIyMGQifQ.IA5sq4HxrjX7ht3mjtxck5uI-AOsOmxwm6qVwfrlr75kuAWbQNeY9EEADYV6_w334YBfNZ7PbW_oI8Nj6vk3qCVAZA2dVJ2pZWpgMm-AN3MOMZJk_2HYAHOyBf6ttQgyaS7ZyEiT3MRStzO7i4SQ0-FJAmOAHb51mo_B_brIrTi27KwU33jEGkfe7hxQyjX5IZU9oDaeZBBr1FvsTyCU7-5_XZAX1p0jDG70aziRL4VjnRGP4qXghrssdQK8mu9J-hzhmG2YocsgDQl2R1-5swn9AVuwPNs1SWD4EQwZXfhGrGtPfVS4BZkT93S_cdf2CWKziRG8LcyH7duL706XeQ');
                // await this.loadClient();
            // }
            // else {
                await this.authenticate().then(this.loadClient());
            // }
            this.execute()

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
            return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/drive/v3/rest?q=mimeType='application/vnd.google-apps.spreadsheet'")
                .then(
                    function() {
                        console.log("GAPI client loaded for API");
                    },
                    function(err) {
                        console.error("Error loading GAPI client for API", err);
                    });
        },
        // Make sure the client is loaded and sign-in is complete before calling this method.
        execute() {
            console.log('im executing')
            var self = this;
            return gapi.client.drive.files.list({})
                .then(
                    function(response) {
                        // Handle the results here (response.result has the parsed body).
                        self.driveFiles = response.result.files
                        console.log("Response", response);
                    },
                    function(err) {
                        console.error("Execute error", err);
                    });
        },
        choosedFile: function(file) {
            this.source.file = file
            this.$emit("step-one-completed", this.source)
            console.log('choosed file is: ' + file.id)
        },
        chooseTab: function() {
            this.$emit("step-one-completed", this.source);
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