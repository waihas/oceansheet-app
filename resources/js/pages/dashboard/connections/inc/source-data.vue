<template>
    <!-- here we select the sheet and tab for source -->
    <div>
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            Select source data
            {{user}}
        </div>
        <div class="p-4 flex-grow">
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
                    <button @click="clearChoosedFile" class="ml-auto cursor-pointer text-gray-400 text-sm">
                        remove
                    </button>
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
                            <div class="w-full border-b pb-5">
                                <div v-if="isSignedIn">
                                    
                                    <!-- search and nav bar -->
                                    <div class="flex flex-wrap items-center rounded-t p-1 justify-between border bg-gray-100">
                                        <div class="flex flex-row items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                               class="w-8 h-8 mx-3" viewBox="0 0 48 48">
                                                <path fill="#FFC107" d="M17 6L31 6 45 30 31 30z"></path><path fill="#1976D2" d="M9.875 42L16.938 30 45 30 38 42z"></path><path fill="#4CAF50" d="M3 30.125L9.875 42 24 18 17 6z"></path>
                                            </svg>
                                            <!-- <div class="inline-flex items-center p-2 hover:bg-gray-200 focus:bg-white rounded-lg cursor-pointer">
                                                khalidhamdani25@gmail.com
                                            </div> -->
                                            <div class="relative">
                                                <button @click="isMenuOpen = !isMenuOpen"
                                                    class="inline-flex items-center p-2 hover:bg-gray-200 focus:bg-gray-200 rounded-lg cursor-pointer">
                                                    khalidhamdani25@gmail.com
                                                </button>
                                                <div v-show="isMenuOpen" 
                                                    class="absolute right-0 w-full p-2 bg-white shadow-lg mt-2 rounded-md origin-top-right z-20">
                                                    <button @click="disconnect(); isMenuOpen=false"
                                                        :disabled="!isSignedIn || !gauthReady"
                                                        :class="{'cursor-not-allowed': !isSignedIn || !gauthReady}"
                                                        class="w-full text-left rounded-lg text-gray-600 p-2 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                        Disconnect
                                                    </button>
                                                    <button @click="signOut(); isMenuOpen=false"
                                                        :disabled="!isSignedIn || !gauthReady"
                                                        :class="{'cursor-not-allowed': !isSignedIn || !gauthReady}"
                                                        class="w-full text-left rounded-lg text-gray-600 p-2 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                        Sign out
                                                    </button>
                                                </div>
                                            </div>  
                                        </div>
                                        
                                        <div class="flex flex-row items-center">
                                            <span class="w-64 h-10 cursor-pointer text-sm rounded-full flex">
                                                <input type="search" name="serch" placeholder="Search"
                                                class="flex-grow px-4 rounded-l-full rounded-r-full border-0 text-sm focus:outline-none">
                                            </span>
                                            <div class="flex flex-row-reverse mx-3">
                                                <button @click="loadSheets">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-5 w-5 text-gray-500 hover:text-gray-700" viewBox="0 0 24 24">
                                                        <path d="M13.5 2c-5.629 0-10.212 4.436-10.475 10h-3.025l4.537 5.917 4.463-5.917h-2.975c.26-3.902 3.508-7 7.475-7 4.136 0 7.5 3.364 7.5 7.5s-3.364 7.5-7.5 7.5c-2.381 0-4.502-1.119-5.876-2.854l-1.847 2.449c1.919 2.088 4.664 3.405 7.723 3.405 5.798 0 10.5-4.702 10.5-10.5s-4.702-10.5-10.5-10.5z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="driveFiles.length > 0" class="grid grid-cols-2 md:grid-cols-5 gap-4 p-4 w-full h-80 border bg-gray-100 overflow-y-auto overflow-x-hidden">
                                        <div v-for="file in driveFiles" :key="file.id"
                                            class="p-3 mx-3 flex flex-col rounded-md justify-center items-center transform scale-105 hover:bg-white cursor-pointer"
                                            @click="choosedFile(file)"
                                            :class="file.id == tmpChoosedFile.id ? 'bg-white border border-main-300' : ''">
                                            <img class="h-20 w-20" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                                            <h2 class="mt-4 w-28 text-center truncate">{{ file.name }}</h2>
                                            <p class="mt-2 w-24 text-sm truncate">{{ file.kind }} bytes</p>
                                        </div>
                                    </div>
                                    <div v-else class="p-4 flex justify-center items-center w-full h-80 border bg-gray-100">
                                        <div class="flex flex-col text-center space-y-3">
                                            <div class="bg-gray-200 p-8 rounded-full mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                class="w-16 h-16"
                                                viewBox="0 0 64 64">
                                                    <g data-name="28-folder"><path fill="#fcea81" d="M1,57V7H20l3,6H59a4,4,0,0,1,4,4V57Z"></path><path fill="#e2c47d" d="M1,57a8,8,0,0,0,8-8V25a4,4,0,0,1,4-4H63V57Z"></path></g>
                                                </svg>
                                            </div>
                                            <h4 class="text-xl">Empty folder</h4>
                                            <p class="text-gray-600 text-sm">
                                                This folder is empty. Upload some files in your Google Drive to start connecting your spreadsheets.
                                            </p>
                                        </div>
                                    </div>

                                    <div v-if="showConfirmFile" class="flex flex-row justify-center rounded-b p-1 border bg-gray-100">
                                        <button
                                            @click="confirmChoosedFile()"
                                            class="bg-main-600 text-white py-2 px-8 rounded-3xl transition-all duration-100 ease-in-out hover:bg-main-700">
                                            Confirm
                                        </button>
                                    </div>

                                </div>
                                <div v-else class="flex flex-col w-full group border rounded bg-gray-100 hover:border-main-300">
                                    <div class="flex flex-col items-center justify-center py-7">
                                        <UploadIcon/>
                                        <!-- <button @click="connectToDrive()" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition-all duration-100 ease-in-out"> -->
                                        <button :disabled="isSignedIn || !gauthReady"
                                            @click="signIn()"
                                            :class="{ 'cursor-not-allowed' : isSignedIn || !gauthReady}"
                                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition-all duration-100 ease-in-out">
                                            Connect to Google drive
                                        </button>
                                        <!-- <button :disabled="!isSignedIn || !gauthReady"
                                            @click="loadSheets"
                                            class="bg-main-500 hover:bg-main-600 text-white font-bold py-2 px-4 rounded transition-all duration-100 ease-in-out">
                                            Load Sheets
                                        </button> -->
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

    </div>
</template>

<script>
import clickOutside from 'vue-click-outside'
import GDriveSelector from '~/components/picker/GDriveSelector'
import UploadIcon from "~/components/picker/UploadIcon";
import { mapGetters, mapActions } from 'vuex'

export default {
    name: 'SourceData',
    
    directives: {
        clickOutside,
    },

    components: {
        GDriveSelector,
        UploadIcon
    },

    data: () => ({
        showPicker: false,
        showConfirmFile: false,
        tmpChoosedFile: {},
        isMenuOpen: false, 
        source: {
            file: {},
            tab: null
        },
        driveFiles: [
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
        ],
        // isSignedIn: true
    }),

    computed: {
        ...mapGetters('gauth',{
            gauthReady: 'isReady',
            isSignedIn: 'isSignedIn',
            user: 'getUser',
            signedId: 'getSignedId',
        }),
    },
    mounted() {
        this.$store.dispatch('gauth/init')
        // console.log(this.user.Ba)
    },

    watch: {
        signedId: function (val, oldVal) {
            console.log('new: %s, old: %s', val, oldVal)
            // then here call loadSheets
            if(val) 
                this.loadSheets()
        },
        // user: function (val, oldVal) {
        //     console.log('user; new: %s, old: %s', val, oldVal)
        //     console.log(JSON.stringify(val))
        // },
        isSignedIn: function (val, oldVal) {
            console.log('isSignedIn; new: %s, old: %s', val, oldVal)
        },

        // {
        //     "Ba":"111729100170439209451",
        //     "wc":null,
        //     "Iu":{
        //         "SW":"111729100170439209451",
        //         "sf":"Khalid HAMDANI",
        //         "hY":"Khalid",
        //         "vW":"HAMDANI",
        //         "zN":"https://lh3.googleusercontent.com/a-/AOh14GhBJzF4hcdR85oznqTBEmwO8H0xcKP2lc66kmjuhA=s96-c",
        //         "yv":"khalidhamdani25@gmail.com"
        //     }
        // }
        /// this use "Ba":"111729100170439209451",
        // {
        //     "Ba":"111729100170439209451",
        //     "wc":null,
        //     "Iu":{
        //         "SW":"111729100170439209451",
        //         "sf":"Khalid HAMDANI",
        //         "hY":"Khalid",
        //         "vW":"HAMDANI",
        //         "zN":"https://lh3.googleusercontent.com/a-/AOh14GhBJzF4hcdR85oznqTBEmwO8H0xcKP2lc66kmjuhA=s96-c",
        //         "yv":"khalidhamdani25@gmail.com"
        //     }
        // }

        // {
        //     "Ba":"115060874369806567293",
        //     "wc":null,
        //     "Iu":{
        //         "SW":"115060874369806567293",
        //         "sf":"Khalid Ham",
        //         "hY":"Khalid",
        //         "vW":"Ham",
        //         "zN":"https://lh3.googleusercontent.com/a/AATXAJyVTV1frNxq5a77LQeyiiVmB9WkOxl1zIvws2NM=s96-c",
        //         "yv":"khalidwork222@gmail.com"
        //     }
        // }
    },

    created() {
        console.log('here we are')
        console.log('signedID' + this.signedId)
        console.log("user:" + this.user)
    },
    
    methods: {
        ...mapActions('gauth',{
            signIn: 'signIn',
            signOut: 'signOut',
            disconnect: 'disconnect'
        }),
        closePicker: function() {
            this.showPicker = false
        },
        makeCompleted: function() {
            this.$emit("step-one-completed", this.source);
        },
        async loadSheets() {
            const response = await this.$google.api.client.drive.files.list({
                q: "mimeType='application/vnd.google-apps.spreadsheet'"
            })
            if ('result' in response && 'files' in response.result && response.result.files.length > 0) {
                console.log(response.result.files)

                this.driveFiles = response.result.files
                // this.driveFiles = response.result.files.filter(file => {
                //     return file.mimeType == 'application/vnd.google-apps.spreadsheet'
                // })
            } else this.driveFiles = []

        },
        choosedFile: function(file) {
            this.tmpChoosedFile = file
            this.showConfirmFile = true
        },
        confirmChoosedFile: function() {
            this.source.file = this.tmpChoosedFile
            this.$emit("step-one-completed", this.source)
            console.log('choosed file is: ' + this.tmpChoosedFile.id)
            this.closePicker()
        },
        chooseTab: function() {
            this.$emit("step-one-completed", this.source);
        },
        clearChoosedFile: function() {
            this.showConfirmFile = false
            this.tmpChoosedFile = {}
            this.source = {
                file: {},
                tab: null
            }
        },
    },
}
</script>
