<template>
  <div>
    <section>
          <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:pt-24">
            <div class="flex flex-col w-full mb-12 text-center">
              <div class="inline-flex items-center justify-center flex-shrink-0 mx-auto mb-5 rounded-full bg-main-50">
               <lottie-player src="/assets/gif/sync-files.json" background="transparent" speed="1" class="w-32 h-32" loop autoplay>
               </lottie-player>
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
              </div>
              <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-gray-900 md:text-5xl lg:text-6xl lg:max-w-7xl">
                Connect and manage your <br class="hidden lg:block"> spreadsheets easily. 
              </h1>
              <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-center text-gray-500">
                The best way to connect and manage your spreadsheets for free.
              </p>
              <router-link :to="{ name: 'register' }" class="animate-bounce mx-auto mt-8 transition-all duration-100 ease-in-out border-2 border-main-600 text-main-800 hover:text-white hover:bg-main-600 px-4 py-2 font-bold rounded-lg focus:bg-main-600 focus:outline-none focus:shadow-outline" title="sign up"> 
                Get Started Now »
              </router-link>
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
          <h2 class="text-xs text-main-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Master Cleanse Reliac Heirloom</h1>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
              <div class="flex items-center mb-3">
                <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-main-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium">Shooting Stars</h2>
              </div>
              <div class="flex-grow">
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
              <div class="flex items-center mb-3">
                <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-main-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium">The Catalyzer</h2>
              </div>
              <div class="flex-grow">
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="p-4 md:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
              <div class="flex items-center mb-3">
                <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-main-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                  </svg>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium">Neptune</h2>
              </div>
              <div class="flex-grow">
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
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
              <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1201x501">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Buy YouTube Videos</h2>
            <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
            <button class="flex mx-auto mt-6 text-white bg-main-500 border-0 py-2 px-5 focus:outline-none hover:bg-main-600 rounded">Button</button>
          </div>
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1202x502">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">The Catalyzer</h2>
            <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
            <button class="flex mx-auto mt-6 text-white bg-main-500 border-0 py-2 px-5 focus:outline-none hover:bg-main-600 rounded">Button</button>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-main-500 text-gray-600">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
          <img alt="feature" class="object-cover object-center h-full w-full" src="https://dummyimage.com/460x500">
        </div>
        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
          <div class="flex flex-col mb-10 lg:items-start items-center">
            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-white text-main-500 mb-5">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
              <p class="leading-relaxed text-base text-white">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
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
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
              <p class="leading-relaxed text-base text-white">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
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
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
              <p class="leading-relaxed text-base text-white">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <a class="mt-3 text-main-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
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
  </div>
</template>

<script>
import Banner from '~/components/home/Banner'

export default {
  layout: 'basic',

  components: { Banner },

  metaInfo () {
    return { title: 'Connect and Manage your Spreadsheets' }
  },

  mounted() {
    let Script = document.createElement("script");
    Script.setAttribute("src", "https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js");
    document.head.appendChild(Script);
  },

  data: () => ({
    title: window.config.appName,
  }),
}
</script>
