<template>
<!-- here should be an overview about the sheets (idk if maybe the content too)
    then how many elements or connections made so far
    and also a button to sync the content of two sheets manually -->
  <div class="p-6 sm:p-10 space-y-6">
    
    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-flow-col gap-6">
        <div class="flex flex-col md:col-span-3 bg-white shadow rounded-lg">

        </div>

        <div class="row-span-3 bg-white rounded-lg">
            <!-- <div class="px-6 py-5 font-semibold border-b border-gray-100">
                Tips & help
            </div>
            <div class="flex p-4">
                <p class="text-gray-600">
                    First step is you select your source Google Sheet which is the place of data you want to transfer to another sheet automatically.
                </p>
            </div> -->
        </div>
    </section>

  </div>
</template>

<script>

export default {
    middleware: 'auth',
    layout: 'dashboard',

    metaInfo () {
        return { title: 'View connection' }
    },

    data() {
        return {
            loading: false
        }
    },

    methods: {
    }
}
</script>
