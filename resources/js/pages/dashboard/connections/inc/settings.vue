<template>
    <!-- here we specify which rows and columns we want to connect
    this will require good design to make it easy for user to understand -->
    <div>
    <!-- <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg"> -->
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100"
            @click="makeCompleted">
            Configuration
        </div>
        <!-- <div class="p-4 flex-grow"> -->
        <div class="p-4 grid grid-cols-7 space-x-1">
            <!-- <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                Specifiying fields and settings
            </div> -->
            <div class="col-span-7 text-gray-600 mb-4">
                Please link source columns with output columns, the ones that you want to be updated with each other.
            </div>
            <div class="w-full col-span-3 max-w-md text-center">
                <div class="border-b my-3">
                    selected tabs:
                </div>
                <draggable tag="ul"
                    class="w-full max-w-md"
                    ghost-class="moving-card"
                    filter=".action-button"
                    :list="source.selectedFiles"
                    group="sourceFiles"
                    >
                    <!-- :animation="200" -->
                    <li v-for="file in source.selectedFiles"
                        :key="file.id"
                        class="p-4 my-2 flex justify-between items-center bg-gray-50 border shadow-none rounded-lg cursor-move">
                        {{file.name}}
                        <!-- <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full" :src="user.avatar" :alt="user.name">
                            <p class="ml-2 text-gray-700 font-semibold font-sans tracking-wide">{{user.name}}</p>
                        </div> -->
                    </li>
                </draggable>
                <div class="border-b my-3">
                    all tabs:
                </div>
                <draggable tag="ul"
                    class="w-full max-w-md"
                    ghost-class="moving-card"
                    filter=".action-button"
                    group="sourceFiles"
                    :list="source.files"
                    @change="log"
                    >
                    <!-- :animation="200" -->
                    <li v-for="file in source.files"
                        :key="file.id"
                        class="p-4 my-2 flex justify-between items-center bg-gray-50 border shadow-none rounded-lg cursor-move">
                        {{file.name}}
                        <!-- <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full" :src="user.avatar" :alt="user.name">
                            <p class="ml-2 text-gray-700 font-semibold font-sans tracking-wide">{{user.name}}</p>
                        </div> -->
                    </li>
                </draggable>
            </div>

            <div class="mb-2 text-gray-700">
                <div class="text-white my-3">
                   to:
                </div>
                <ul>
                    <li v-for="file in output.selectedFiles"
                        :key="file.id"
                        class="p-4 my-2 flex justify-center items-center shadow-none rounded-lg">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/>
                        </svg>
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/>
                        </svg>
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/>
                        </svg>
                    </li>
                </ul>
            </div>

            <div class="w-full col-span-3 max-w-md text-center">
                <div class="border-b my-3">
                    selected tabs:
                </div>
                <draggable tag="ul"
                        ghost-class="moving-card"
                        :list="output.selectedFiles"
                        group="outputFiles"
                        >
                        <!-- :animation="200" -->
                    <li v-for="file in output.selectedFiles"
                        :key="file.id"
                        class="p-4 my-2 flex justify-between items-center bg-gray-50 border shadow-none rounded-lg cursor-move">
                        {{file.name}}
                    </li>
                    <!-- <user-card v-for="user in newUsers"
                            :user="user"
                            :key="user.id"
                            @on-edit="onEdit"
                            @on-delete="onDelete">
                    </user-card> -->
                </draggable>
                <div class="border-b my-3">
                    all tabs:
                </div>
                <draggable tag="ul"
                        @change="log"
                        group="outputFiles"
                        ghost-class="moving-card"
                        :list="output.files"
                        >
                        <!-- :animation="200" -->
                    <li v-for="file in output.files"
                        :key="file.id"
                        class="p-4 my-2 flex justify-between items-center bg-gray-50 border shadow-none rounded-lg cursor-move">
                        {{file.name}}
                    </li>
                    <!-- <user-card v-for="user in newUsers"
                            :user="user"
                            :key="user.id"
                            @on-edit="onEdit"
                            @on-delete="onDelete">
                    </user-card> -->
                </draggable>
            </div>

        </div>
    </div>
</template>

<script>
import Draggable from 'vuedraggable'

export default {
    name: 'Settings',

    components: {
        Draggable
    },
    
    data: () => ({
        source: {
            files:[
                {
                    id: 1,
                    name: "Colomn 1",
                    avatar: "https://pickaface.net/gallery/avatar/unr_sample_161118_2054_ynlrg.png"
                },
                {
                    id: 2,
                    name: "Colomn 2",
                    avatar: "https://pickaface.net/gallery/avatar/freud51c8b3f65e7dc.png"
                },
                {
                    id: 3,
                    name: "Colomn 3",
                    avatar: "https://pickaface.net/gallery/avatar/Opi51c74d0125fd4.png"
                },
                {
                    id: 4,
                    name: "Colomn 4",
                    avatar: "https://pickaface.net/gallery/avatar/unr_yassine_191124_2012_3gngr.png"
                },
                {
                    id: 5,
                    name: "Colomn 5",
                    avatar: "https://pickaface.net/gallery/avatar/elmedinilla541c03412955c.png"
                }
            ],
            selectedFiles: [],
        },
        output: {
            files: [
                {
                    id: 1,
                    name: "Col 1",
                    avatar: "https://pickaface.net/gallery/avatar/unr_sample_161118_2054_ynlrg.png"
                },
                {
                    id: 2,
                    name: "Col 2",
                    avatar: "https://pickaface.net/gallery/avatar/freud51c8b3f65e7dc.png"
                },
                {
                    id: 3,
                    name: "Col 3",
                    avatar: "https://pickaface.net/gallery/avatar/Opi51c74d0125fd4.png"
                }
            ],
            selectedFiles: [],
        },
        options:{
            files:null,
        },
    }),

    methods: {
        closePicker: function() {
            this.showPicker = false
        },
        makeCompleted: function() {
            // check if length of selectedSourceFiles == selectedOutputFiles
            this.$emit("step-three-completed", this.options) ;
        },
        log: function(evt) {
            window.console.log(evt);
        }
    },
}
</script>

<style lang="scss">
    .moving-card {
        @apply opacity-50 bg-gray-100 border border-main-500;
    }
</style>
