<template>
    <!-- here shows loading spinner while project is creating and connectiong between the sheets
    after that show succes icon -->
    <div>
    <!-- <div class="flex flex-col md:col-span-3 md:row-span-2 bg-white shadow rounded-lg"> -->
        <div class="text-2xl px-6 py-5 font-semibold border-b border-gray-100">
            We're connectiong yours sheets now...
        </div>
        <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                Loading...
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Connecting',

    props: {
        source:{
            files:null,
        },
        output:{
            files:null,
        },
        options:{
            files:null,
        },
        startConnectiong:false
    },

    watch: { 
      	startConnectiong: function() { // watch it | function(newVal, oldVal)
            this.connectSheets()
            // console.log('Prop changed: ', newVal, ' | was: ', oldVal)
        }
    },



    // created() {
        /// do your magic here with data i got from props
        // send requests through api and stuffs
        // alert('Connecting sheets!');
    // }
    methods: {
        connectSheets: function() {
            console.log("We are connecting...")
        }
    }
}
</script>