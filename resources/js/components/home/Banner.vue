<template>
    <section class="bg-gray-50 text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Build a custom workflow today, and automate your Sheet files.</h1>
                <router-link :to="{ name: 'register' }" class="flex-shrink-0 text-white bg-main-500 border-0 py-2 px-8 focus:outline-none hover:bg-main-600 rounded text-lg mt-10 sm:mt-0">Sign Up Now</router-link>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'Banner',
}
</script>