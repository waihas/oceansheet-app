@extends('welcome.layouts.basic')
@section('title', 'Workflows')

@section('stylesheets')
@endsection

@section('content')

<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
        <h1 class="sm:text-5xl text-3xl font-medium text-center text-gray-900 mb-4">
            OceanSheet Workflows
        </h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
            Remove your team’s information silos with easy to use, no-code, automation. OceanSheet workflows lets you get more value from your data.
        </p>
        </div>
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
        <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-main-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="font-bold text-main-800 text-xl">Build workflows</span>
                    <p class="leading-relaxed text-sm mt-3">Automate the data collecting, manipulating, and sharing process. See your whole workflow, and share it with your teammates, all without a single line of code.</p>
                </div>
            </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-main-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="font-bold text-main-800 text-xl">Refine data</span>
                    <p class="leading-relaxed text-sm mt-3">OceanSheet workflows easily filters through data with Query functions, conditionals, even cell color.</p>
                </div>
            </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-main-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="font-bold text-main-800 text-xl">Append values</span>
                    <p class="leading-relaxed text-sm mt-3">Never lose historic values again. You can track changing data with the append feature, adding new values to your list and leaving previous data untouched.</p>
                </div>
            </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-main-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="font-bold text-main-800 text-xl">Consolidate sheets</span>
                    <p class="leading-relaxed text-sm mt-3">Consolidate all your data at once. Get the big picture without the big struggle. Keep everyone on the same page, automatically.</p>
                </div>
            </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-main-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="font-bold text-main-800 text-xl">Automatic sync</span>
                    <p class="leading-relaxed text-sm mt-3"></p>Update your workflows whenever you want — daily, hourly, or create a custom update schedule. Data flows automatically so there’s no need to open each spreadsheet.
                </div>
            </div>
        </div>
        <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-main-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="font-bold text-main-800 text-xl">Lighter workloads</span>
                    <p class="leading-relaxed text-sm mt-3">Save everyone’s time by eliminating repetitive tasks. Create automatically updated workflows and get back to doing real work.</p>
                </div>
            </div>
        </div>
        </div>
        <router-link :to="{name: 'register'}" class="flex w-1/5 justify-center mx-auto mt-16 text-white bg-main-500 border-0 py-2 px-8 focus:outline-none hover:bg-main-600 rounded text-lg">
            Start for free
        </router-link>
    </div>
</section>
<!-- <section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium text-gray-900 mb-4">Workflows</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
            </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg font-medium mb-3">Shooting Stars</h2>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg font-medium mb-3">The Catalyzer</h2>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg font-medium mb-3">Neptune</h2>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <button class="flex mx-auto mt-16 text-white bg-main-500 border-0 py-2 px-8 focus:outline-none hover:bg-main-600 rounded text-lg">Button</button>
    </div>
</section> -->

<section class="text-gray-600 bg-gray-100">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-5xl text-3xl font-medium text-center text-gray-900 mb-20">
            The simplest way to automate
        </h1>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-2xl font-medium mb-2">
                        Inventory
                    </h2>
                    <p class="leading-relaxed text-lg">
                        Track stock levels and automate communication across your entire supply chain.
                    </p>
                    <a class="mt-3 text-main-500 inline-flex items-center">Try it now
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-2xl font-medium mb-2">
                        Finance
                    </h2>
                    <p class="leading-relaxed text-lg">
                        Automatically process financial information. Streamline all your accounting and reporting tasks.
                    </p>
                    <a class="mt-3 text-main-500 inline-flex items-center">Try it now
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-2xl font-medium mb-2">
                        Education
                    </h2>
                    <p class="leading-relaxed text-lg">
                        Track attendance and performance. Share information with teachers and administrators automatically.
                    </p>
                    <a class="mt-3 text-main-500 inline-flex items-center">Try it now
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed text-lg">OceanSheet has allowed us to facilitate and optimize the collection of data from many suppliers spread across many Excel spreadsheets in a few files that bring it all together. A huge time saver!</p>
            <span class="inline-block h-1 w-10 rounded bg-main-500 mt-8 mb-6"></span>
            <h2 class="text-gray-900 font-medium tracking-wider text-sm">SAID OUBLA</h2>
            <p class="text-gray-500">CEO & Co-Founder of Inesevents</p>
        </div>
    </div>
</section>

    @include('welcome.partials.banner')

@endsection

@section('scripts')
@endsection
