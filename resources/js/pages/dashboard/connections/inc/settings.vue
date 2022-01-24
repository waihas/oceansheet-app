<template>
    <!-- here we specify which rows and columns we want to connect
    this will require good design to make it easy for user to understand -->
    <div>
    <!-- <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg"> -->
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100"
            @click="makeCompleted">
            Configuration
        </div>
        <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                Specifiying fields and settings
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Settings',
    
    data: () => ({
        options:{
            files:null,
        },
    }),

    methods: {
        closePicker: function() {
            this.showPicker = false
        },
        makeCompleted: function() {
            this.$emit("step-three-completed", this.options) ;
        }
    },
}
</script>