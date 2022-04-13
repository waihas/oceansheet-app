<template>
  <div>
    <section>
      <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:pt-24">
        <div class="flex flex-col w-full mb-12 text-center">
          <!-- <div class="inline-flex items-center justify-center flex-shrink-0 mx-auto mb-5 rounded-full bg-main-50"> -->
            <!-- <lottie-player src="/assets/gif/sync-files.json" background="transparent" speed="1" class="w-32 h-32" loop autoplay v-pre>
            </lottie-player> -->
            <!-- <v-logo></v-logo> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 icon icon-tabler icon-tabler-aperture" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <circle cx="12" cy="12" r="9"></circle>
              <line x1="3.6" y1="15" x2="14.15" y2="15"></line>
              <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(72 12 12)"></line>
              <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(144 12 12)"></line>
              <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(216 12 12)"></line>
              <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(288 12 12)"></line>
            </svg> -->
            
          <!-- </div> -->
          <h1 class="max-w-5xl text-2xl font-bold leading-loose text-gray-900 md:text-5xl lg:text-6xl lg:max-w-7xl">
            Connect, Manage and Automate your <br class="hidden lg:block"> spreadsheets easily. 
          </h1>
          <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-center text-gray-500">
            Connect spreadsheets and automate your work to empower you business.
          </p>
          <router-link :to="{ name: 'register' }" class="animate-bounce mx-auto mt-8 transition-all duration-100 ease-in-out border-2 border-main-600 text-main-800 hover:text-white hover:bg-main-600 px-4 py-2 font-bold rounded-lg focus:bg-main-600 focus:outline-none focus:shadow-outline" title="sign up"> 
            Get Started Now »
          </router-link>

          <div class="inline-flex mx-auto mt-12 bg-white">
            <video class="object-cover object-center bg-white rounded" muted="muted" playsinline controls loop autoplay style="pointer-events: none;">
              <source src="/assets/demo.mp4" class="bg-white" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-6">
            <div class="flex items-center justify-center p-6 col-span-1 md:col-span-2 lg:col-span-1">
              <img src="/assets/img/sponsor-1.png" class="w-4/5" alt="SudImpression.ma Sponsor">
            </div>
            <div class="flex items-center justify-center p-6 col-span-1 md:col-span-2 lg:col-span-1">
              <img src="/assets/img/sponsor-2.png" class="w-4/5" alt="Waihas.com Sponsor">
            </div>
            <div class="flex items-center justify-center p-6 col-span-1 md:col-span-2 lg:col-span-1">
              <img src="/assets/img/sponsor-3.png" class="w-4/5" alt="Organic Village Sponsor">
            </div>
            <div class="flex items-center justify-center p-6 col-span-1 md:col-span-2 lg:col-span-1">
              <img src="/assets/img/sponsor-4.png" class="w-4/5" alt="IpafAgadir.ma Sponsor">
            </div>
            <div class="flex items-center justify-center p-6 col-span-1 md:col-span-2 lg:col-span-1">
              <img src="/assets/img/sponsor-5.png" class="w-4/5" alt="InesEvents.ma Sponsor">
            </div>
            <div class="flex items-center justify-center p-6 col-span-1 md:col-span-2 lg:col-span-1">
              <img src="/assets/img/sponsor-6.png" class="w-4/5" alt="Ayyaw.ma Sponsor">
            </div>
        </div>
    </section>

    <section class="text-gray-600">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h2 class="text-xs text-main-500 tracking-widest font-medium title-font mb-1">OCEANSHEET</h2>
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Connect, Filter, Merge Sheets, Excel, CSV</h1>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col text-center">
              <div class="flex items-center mb-3 justify-center">
                <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-main-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
              </div>
              <div class="flex-grow mt-4">
                <h2 class="text-gray-900 text-xl font-bold">Connect Google Sheets to Google Sheets</h2>
                <p class="leading-relaxed text-base mt-3">Link Google Sheets to move data between different files automatically.</p>
              </div>
            </div>
          </div>
          <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col text-center">
              <div class="flex items-center mb-3 justify-center">
                <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-main-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
              </div>
              <div class="flex-grow mt-4">
                <h2 class="text-gray-900 text-xl font-bold">Connect Excel to Google Sheets or CSV</h2>
                <p class="leading-relaxed text-base mt-3">Transfer, Convert and Export Excel to Google Sheets automatically.</p>
              </div>
            </div>
          </div>
          <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col text-center">
              <div class="flex items-center mb-3 justify-center">
                <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-main-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
              </div>
              <div class="flex-grow mt-4">
                <h2 class="text-gray-900 text-xl font-bold">Control data privacy with custom workflows</h2>
                <p class="leading-relaxed text-base mt-3">Share data without sharing your entire spreadsheet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-50 text-gray-600">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="assets/img/img-1.jpg">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Export data to multiple other files</h2>
            <p class="leading-relaxed text-base">Send filtered data from a master sheet to up to 100 other Google Sheets files automatically.</p>
            <router-link :to="{ name: 'workflows.one-to-many' }" class="inline-flex items-center justify-center mt-8 text-main-500 hover:underline">
              Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </router-link>
          </div>
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="assets/img/img-2.jpg">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Import data from multiple files into one</h2>
            <p class="leading-relaxed text-base">Automatically merge Google Sheets, Excel or CSV files, pulling data into one master sheet for analysis, reporting and dashboards.</p>
            <router-link :to="{ name: 'workflows.many-to-one' }" class="inline-flex items-center justify-center mt-8 text-main-500 hover:underline">
              Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </router-link>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-main-500 text-gray-600">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
          <img alt="feature" class="object-cover object-center h-full w-full" src="assets/img/img-3.jpg">
        </div>
        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
          <div class="flex flex-col mb-10 lg:items-start items-center">
            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-white text-main-500 mb-5">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Connect Google Sheets, Excel & CSV/TSV</h2>
              <p class="leading-relaxed text-base text-white">Transfer data between CSV or TSV and Google Sheets automatically.</p>
              <p class="leading-relaxed text-base text-white">Upload CSV to Google Sheets automatically.</p>
              <p class="leading-relaxed text-base text-white">Send data from CSV to Excel online files.</p>
              <!-- <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a> -->
            </div>
          </div>
          <div class="flex flex-col mb-10 lg:items-start items-center">
            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-white text-main-500 mb-5">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Better business intelligence</h2>
              <p class="leading-relaxed text-base text-white">Generate automated reports and dashboards.</p>
              <p class="leading-relaxed text-base text-white">Get accurate and traceable data.</p>
              <p class="leading-relaxed text-base text-white">Build a custom solution for any business process.</p>
            </div>
          </div>
          <div class="flex flex-col mb-10 lg:items-start items-center">
            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-white text-main-500 mb-5">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Append Google Sheets data</h2>
              <p class="leading-relaxed text-base text-white">Create historical charts and record changes to your data over time.</p>
              <p class="leading-relaxed text-base text-white">Freeze values at specified intervals and append data in a log.</p>
              <p class="leading-relaxed text-base text-white">Append Excel to Google Sheets or append Google Sheets to Excel.</p>
              <p class="leading-relaxed text-base text-white">Track changes in Excel.</p>
              <p class="leading-relaxed text-base text-white">Track changes in Google Sheets by appending values at regular times.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <banner></banner>

    <!-- <section class="text-gray-600">
      <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
          <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
          <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Contact sales</h2>
          <div class="relative mb-4">
            <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
            <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
            <input type="text" id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button class="text-white bg-main-500 border-0 py-2 px-8 focus:outline-none hover:bg-main-600 rounded text-lg">Contact</button>
          <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
        </div>
      </div>
    </section> -->
    <!-- <div class="fixed bottom-4 right-1 lg:right-4 p-4 bg-white border-t-4 shadow-lg">
      <h2 class="text-lg lg:text-xl mb-4 block font-bold leading-tight text-gray-600">Cookie Policy</h2>
      <div class="lg:flex lg:space-x-5">
        <p class="mb-5 font-medium text-gray-600">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus condimentum libero. Nulla tempus metus sit amet
          sagittis tempus. Donec maximus odio nibh, ut congue ante dictum suscipit.
        </p>
        <button
        class="w-full lg:w-48 px-3 py-1 bg-gray-300 hover:bg-gray-200 hover:underline rounded text-gray-700 mr-2 mb-5 uppercase tracking-widest text-xs font-bold">
          I agree
        </button>
      </div>
    </div> -->
  </div>
</template>

<script>
import Banner from '~/components/home/Banner'

export default {
  layout: 'basic',

  components: { Banner },

  metaInfo () {
    return { title: 'Connect, Manage and Automate your spreadsheets easily' }
  },

  // mounted() {
    // let Script = document.createElement("script");
    // Script.setAttribute("src", "https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js");
    // document.head.appendChild(Script);

    // this.$refs.demoVideoRef.src = "/assets/demo.mp4";
    // this.$refs.demoRef.play();
  // },

  data: () => ({
    title: window.config.appName,
  }),
}
</script>