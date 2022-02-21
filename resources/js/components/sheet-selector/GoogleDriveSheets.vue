<template>
    <div>
        <div v-if="Object.keys(tmp.file).length > 0">
            <div class="bg-white p-3 flex flex-wrap">
                <img class="w-28 h-28" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                <div class="ml-6 flex flex-col my-auto">
                    <div class="text-2xl">
                        {{ tmp.file.name }}
                    </div>
                    <div class="text-sm" v-if="tmp.file.size">
                        Size : {{ tmp.file.size }} bytes
                    </div>
                </div>
                <button @click="clearChoosedFile" class="ml-auto cursor-pointer text-gray-400 text-sm">
                    remove
                </button>
            </div>
            <div class="border-t border-gray-200 mt-6 py-6 border-dashed">
                <label for="selectSheet" class="block text-sm font-medium text-gray-700 leading-5">
                    Select the sheet do you want to use
                </label>

                <!-- <div v-if="loadingSheetSheets">
                    <div class="inline-flex items-center text-center cursor-wait">
                        <svg class="animate-spin h-4 w-4 mx-auto mr-1 fill-current text-gray-500" viewBox="0 0 24 24">
                            <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                        </svg>
                        <span class="text-gray-500 text-sm">Loading ...</span>
                    </div>
                </div>
                <div v-else> -->
                    <div v-if="loadingSheetSheets">
                        <div class="mt-1 appearance-none cursor-wait flex w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm">
                            <div class="flex items-center justify-start text-center cursor-wait my-auto">
                                <svg class="animate-spin h-4 w-4 mx-auto mr-1 fill-current text-gray-500" viewBox="0 0 24 24">
                                    <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                                </svg>
                                <span class="text-gray-500 text-sm">loading...</span>
                            </div>
                        </div>
                        <!-- <div class="inline-flex items-center text-center cursor-wait">
                            <svg class="animate-spin h-4 w-4 mx-auto mr-1 fill-current text-gray-500" viewBox="0 0 24 24">
                                <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                            </svg>
                            <span class="text-gray-500 text-sm">Loading ...</span>
                        </div> -->
                    </div>
                    <div v-else>
                        <div class="mt-1 rounded-md shadow-sm" v-if="tmp.fileSheets">
                            <select v-model="tmp.sheet" 
                                id="selectSheet"
                                @change="selectedSheetChanged($event)"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <option :value="null" selected disabled>Select</option>
                                <option v-for="item in tmp.fileSheets" :value="item" :key="item.properties.sheetId">
                                    {{ item.properties.title }}
                                </option>
                            </select>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
        <div v-else class="flex items-center justify-center w-full">
            <label class="flex flex-col w-full border-2 border-dashed group rounded-lg bg-gray-50 hover:bg-gray-100 hover:border-main-300 cursor-pointer"
                @click.stop="openPicker">
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
                                            <div class="relative">
                                                <button @click="isMenuOpen = !isMenuOpen"
                                                    class="inline-flex items-center p-2 hover:bg-gray-200 focus:bg-gray-200 rounded-lg cursor-pointer">
                                                    <span v-if="user.Iu">{{ user.Iu.yv }}</span>
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
                                    <div v-if="loadingSheetFiles">
                                        <div class="p-4 flex justify-center items-center w-full h-80 border bg-gray-100">
                                            <div class="flex flex-col text-center space-y-3 cursor-wait">
                                                <svg class="animate-spin h-24 w-24 mb-3 fill-current text-main-500" viewBox="0 0 24 24">
                                                    <path d="M4.262 18.324l-1.42 1.42c-1.77-2.09-2.842-4.79-2.842-7.744s1.072-5.654 2.841-7.745l1.42 1.42c-1.411 1.725-2.261 3.928-2.261 6.325s.85 4.6 2.262 6.324zm17.738-6.324c0 2.397-.85 4.6-2.262 6.324l1.42 1.42c1.77-2.09 2.842-4.79 2.842-7.744s-1.072-5.654-2.842-7.745l-1.42 1.42c1.412 1.725 2.262 3.928 2.262 6.325zm-16.324-7.738c1.724-1.412 3.927-2.262 6.324-2.262s4.6.85 6.324 2.262l1.42-1.42c-2.091-1.77-4.791-2.842-7.744-2.842-2.954 0-5.654 1.072-7.744 2.842l1.42 1.42zm12.648 15.476c-1.724 1.412-3.927 2.262-6.324 2.262s-4.6-.85-6.324-2.262l-1.42 1.42c2.09 1.77 4.79 2.842 7.744 2.842 2.953 0 5.653-1.072 7.744-2.842l-1.42-1.42z"/>
                                                </svg>
                                                <span class="text-gray-500">Loading ...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-else>
                                        <div v-if="driveFiles.length > 0" class="grid grid-cols-2 md:grid-cols-5 gap-4 p-4 w-full h-80 border bg-gray-100 overflow-y-auto overflow-x-hidden">
                                            <div v-for="file in driveFiles" :key="file.id"
                                                class="p-3 mx-3 flex flex-col rounded-md justify-center items-center transform scale-105 hover:bg-white cursor-pointer"
                                                @click="choosedFile(file)"
                                                :class="file.id == tmpChoosedFile.id ? 'bg-white border border-main-300' : ''">
                                                <img class="h-20 w-20" src="/assets/img/sheet-logo.svg" alt="Sheet logo">
                                                <h2 class="mt-4 w-28 text-center truncate">{{ file.name }}</h2>
                                                <p v-if="file.size" class="mt-2 w-24 text-sm text-center truncate">{{ file.size }} bytes</p>
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
import UploadIcon from "~/components/sheet-selector/UploadIcon";
import { mapGetters, mapActions } from 'vuex'

export default {
    name: 'GoogleDriveSheets',

    directives: {
        clickOutside,
    },

    components: {
        UploadIcon,
    },

    data: () => ({
        showPicker: false,
        showConfirmFile: false,
        tmpChoosedFile: {},
        isMenuOpen: false, 
        tmp: {
            file: {},
            fileSheets: {},
            sheet: null
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
        // isSignedIn: true,
        loadingSheetFiles: false,
        loadingSheetSheets: false,
    }),

    computed: {
        ...mapGetters('gauth',{
            gauthReady: 'isReady',
            isSignedIn: 'isSignedIn',
            user: 'getUser',
            userMail: 'getUserEmail',
        }),
    },
    mounted() {
        this.$store.dispatch('gauth/init')
    },

    watch: {
        isSignedIn: function (val, oldVal) {
            // console.log('new: %s, old: %s', val, oldVal)
            // make this condition more specific if not null and true
            if(val) 
                this.loadSheets()
        }
    },

    methods: {
        ...mapActions('gauth',{
            signIn: 'signIn',
            signOut: 'signOut',
            disconnect: 'disconnect',
        }),
        openPicker: function() {
            this.showPicker = true
            if(this.isSignedIn && this.driveFiles == [])
                this.loadSheets()
        },
        closePicker: function() {
            this.showPicker = false
        },
        async loadSheets() {
            this.loadingSheetFiles = true;
            const response = await this.$google.api.client.drive.files.list({
                q: "mimeType='application/vnd.google-apps.spreadsheet'",
                fields: 'files(id,size,name,webViewLink,mimeType,shared,ownedByMe,exportLinks)'
            })
            if ('result' in response && 'files' in response.result && response.result.files.length > 0) {
                
                console.log(response.result.files)
                this.driveFiles = response.result.files

            } else this.driveFiles = []
            this.loadingSheetFiles = false
        },
        async loadSheetDetails() {
            // const response = await this.$google.api.client.drive.files.get({
            //     fileId: this.tmp.file.id,
            //     fields: '*'
            //     // fields: 'size,modifiedTime,webViewLink,webContentLink,createdTime'
            // })
            this.loadingSheetSheets = true;
            const response = await this.$google.api.client.sheets.spreadsheets.get({
                spreadsheetId: this.tmp.file.id,
                includeGridData: true
            })
            this.tmp.fileSheets = response.result.sheets;
            // console.log(response.result)
            // console.log(JSON.stringify(response.result))
            this.loadingSheetSheets = false;
        },
        choosedFile: function(file) {
            this.tmpChoosedFile = file
            this.showConfirmFile = true
        },
        confirmChoosedFile: function() {
            this.tmp.file = this.tmpChoosedFile
            this.$emit("file-choosed", this.tmpChoosedFile)
            console.log('choosed fileId is: ' + this.tmpChoosedFile.id)
            this.loadSheetDetails()
            this.closePicker()
        },
        clearChoosedFile: function() {
            this.showConfirmFile = false
            this.tmpChoosedFile = {}
            this.tmp = {
                file: {},
                fileSheets: {},
                sheet: null
            }
        },
        selectedSheetChanged: function(event) {
            this.$emit("sheet-choosed", this.tmp.sheet)
            console.log('choosed sheet is: ' + this.tmp.sheet.properties.title)
        }
    },
}
// {
//    "kind": "drive#file",
//    "id": "1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k",
//    "name": "SheetB",
//    "mimeType": "application/vnd.google-apps.spreadsheet",
//    "starred": false,
//    "trashed": false,
//    "explicitlyTrashed": false,
//    "parents": [
//     "0AE8QIOTrNGfoUk9PVA"
//    ],
//    "spaces": [
//     "drive"
//    ],
//    "version": "53",
//    "webViewLink": "https://docs.google.com/spreadsheets/d/1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k/edit?usp=drivesdk",
//    "iconLink": "https://drive-thirdparty.googleusercontent.com/16/type/application/vnd.google-apps.spreadsheet",
//    "hasThumbnail": true,
//    "thumbnailLink": "https://docs.google.com/feeds/vt?gd=true&id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&v=27&s=AMedNnoAAAAAYhPCZo3YQlcorKbph9eCNE7-QQ5HYgd1&sz=s220",
//    "thumbnailVersion": "27",
//    "viewedByMe": true,
//    "viewedByMeTime": "2022-02-21T13:15:59.296Z",
//    "createdTime": "2022-02-08T13:18:20.008Z",
//    "modifiedTime": "2022-02-21T13:15:59.296Z",
//    "modifiedByMeTime": "2022-02-21T13:15:59.296Z",
//    "modifiedByMe": true,
//    "owners": [
//     {
//      "kind": "drive#user",
//      "displayName": "Khalid HAMDANI",
//      "photoLink": "https://lh3.googleusercontent.com/a-/AOh14GhBJzF4hcdR85oznqTBEmwO8H0xcKP2lc66kmjuhA=s64",
//      "me": true,
//      "permissionId": "01114560854106063882",
//      "emailAddress": "khalidhamdani25@gmail.com"
//     }
//    ],
//    "lastModifyingUser": {
//     "kind": "drive#user",
//     "displayName": "Khalid HAMDANI",
//     "photoLink": "https://lh3.googleusercontent.com/a-/AOh14GhBJzF4hcdR85oznqTBEmwO8H0xcKP2lc66kmjuhA=s64",
//     "me": true,
//     "permissionId": "01114560854106063882",
//     "emailAddress": "khalidhamdani25@gmail.com"
//    },
//    "shared": false,
//    "ownedByMe": true,
//    "capabilities": {
//     "canAcceptOwnership": false,
//     "canAddChildren": false,
//     "canAddMyDriveParent": false,
//     "canChangeCopyRequiresWriterPermission": true,
//     "canChangeSecurityUpdateEnabled": false,
//     "canChangeViewersCanCopyContent": true,
//     "canComment": true,
//     "canCopy": true,
//     "canDelete": true,
//     "canDownload": true,
//     "canEdit": true,
//     "canListChildren": false,
//     "canModifyContent": true,
//     "canMoveChildrenWithinDrive": false,
//     "canMoveItemIntoTeamDrive": true,
//     "canMoveItemOutOfDrive": true,
//     "canMoveItemWithinDrive": true,
//     "canReadRevisions": true,
//     "canRemoveChildren": false,
//     "canRemoveMyDriveParent": true,
//     "canRename": true,
//     "canShare": true,
//     "canTrash": true,
//     "canUntrash": true
//    },
//    "viewersCanCopyContent": true,
//    "copyRequiresWriterPermission": false,
//    "writersCanShare": true,
//    "permissions": [
//     {
//      "kind": "drive#permission",
//      "id": "01114560854106063882",
//      "type": "user",
//      "emailAddress": "khalidhamdani25@gmail.com",
//      "role": "owner",
//      "displayName": "Khalid HAMDANI",
//      "photoLink": "https://lh3.googleusercontent.com/a-/AOh14GhBJzF4hcdR85oznqTBEmwO8H0xcKP2lc66kmjuhA=s64",
//      "deleted": false,
//      "pendingOwner": false
//     }
//    ],
//    "permissionIds": [
//     "01114560854106063882"
//    ],
//    "size": "2106",
//    "quotaBytesUsed": "2106",
//    "isAppAuthorized": false,
//    "exportLinks": {
//     "application/x-vnd.oasis.opendocument.spreadsheet": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=ods",
//     "text/tab-separated-values": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=tsv",
//     "application/pdf": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=pdf",
//     "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=xlsx",
//     "text/csv": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=csv",
//     "application/zip": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=zip",
//     "application/vnd.oasis.opendocument.spreadsheet": "https://docs.google.com/spreadsheets/export?id=1bosoLboTO4DSnKalfZiN907ddMF1BfhOR9Qt84E6D7k&exportFormat=ods"
//    },
//    "linkShareMetadata": {
//     "securityUpdateEligible": false,
//     "securityUpdateEnabled": true
//    }
//   }
</script>