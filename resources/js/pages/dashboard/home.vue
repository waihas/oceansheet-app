<template>
    <div class="p-6 sm:p-10 space-y-6">
      <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <!-- <h1 class="text-4xl font-semibold mb-2">OceanSheet</h1>
          <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2> -->
        </div>
        <div class="flex flex-wrap items-start justify-end">
          <router-link :to="{name: 'dashboard.workflows'}" class="inline-flex px-5 py-3 text-main-600 hover:text-main-700 focus:text-main-700 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
              <path d="M10.26 4.171c-.58-.286-1.093-.517-1.581-.719.77-2.08 1.882-3.452 3.321-3.452 1.402 0 2.494 1.301 3.26 3.292-.492.211-.998.447-1.572.739-.588-1.567-1.258-2.275-1.688-2.275-.442 0-1.14.75-1.74 2.415zm1.74 18.073c-.429 0-1.1-.708-1.688-2.275-.58.295-1.081.528-1.572.739.767 1.991 1.858 3.292 3.26 3.292 1.439 0 2.551-1.372 3.321-3.452-.485-.201-.997-.431-1.581-.719-.6 1.665-1.298 2.415-1.74 2.415zm-4.708-2.216c-1.917.705-4.778 1.392-5.916-.317-.562-.845-.771-2.468 1.42-5.408.582-.78 1.254-1.545 1.937-2.249 1.531-1.554 3.256-3.05 5.505-4.598-1.083-.596-2.264-1.166-3.416-1.591-1.18-.434-2.219-.675-3.015-.675-.508 0-.886.107-1.009.289-.131.192-.138.783.445 1.842l.21-.012c1.048 0 1.897.865 1.897 1.932s-.85 1.932-1.897 1.932-1.897-.865-1.897-1.932c0-.345.089-.669.246-.95-1.11-1.96-.881-3.139-.419-3.815.324-.476 1.009-1.042 2.424-1.042 2.514 0 5.901 1.66 8.082 2.946 2.214-1.363 5.717-3.16 8.304-3.16 1.421 0 2.106.581 2.431 1.069.562.845.771 2.468-1.42 5.407-3.084 4.137-9.216 8.606-13.912 10.332zm12.538-11.394c1.506-2.019 1.552-3.082 1.366-3.361-.126-.189-.492-.298-1.003-.298-1.953 0-4.926 1.459-6.638 2.447 1.265.837 2.445 1.719 3.522 2.617-.407.413-.834.819-1.271 1.211-1.195-.984-2.523-1.947-3.9-2.811-1.581 1.037-3.173 2.254-4.603 3.551 1.075.951 2.356 1.949 3.721 2.873-.522.331-1.05.648-1.652.98l-.013-.009c-1.144-.811-2.271-1.701-3.316-2.632-2.818 2.878-3.612 4.964-3.239 5.525.126.189.492.298 1.003.298 2.35 0 6.08-2.017 8.287-3.464 2.709-1.776 5.799-4.328 7.736-6.927zm2.377 7.091c.141-.27.22-.577.22-.903 0-1.067-.849-1.932-1.897-1.932s-1.897.865-1.897 1.932.849 1.932 1.897 1.932l.258-.018c.553 1.024.544 1.598.415 1.787-.124.181-.501.288-1.009.288-1.602 0-3.833-.945-5.27-1.658-.48.342-1.077.748-1.659 1.119 1.926 1.037 4.758 2.295 6.929 2.295 1.415 0 2.1-.566 2.424-1.042.461-.674.69-1.85-.411-3.8z"/>
            </svg>
            Workflows
          </router-link>
          <router-link :to="{name: 'dashboard.connections.create'}" class="inline-flex px-5 py-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md ml-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            New Connection
          </router-link>
        </div>
      </div>

      <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path d="M17.033 6.966c.584.583.584 1.529 0 2.112l-7.955 7.956c-.583.583-1.529.583-2.112 0-.583-.583-.583-1.529 0-2.112l7.956-7.956c.582-.583 1.528-.583 2.111 0zm-9.138 13.386c-1.171 1.171-3.076 1.171-4.248 0-1.171-1.171-1.171-3.077 0-4.248l5.639-5.632c-1.892-.459-3.971.05-5.449 1.528l-2.147 2.147c-2.254 2.254-2.254 5.909 0 8.163 2.254 2.254 5.909 2.254 8.163 0l2.147-2.148c1.477-1.477 1.986-3.556 1.527-5.448l-5.632 5.638zm6.251-18.662l-2.146 2.148c-1.478 1.478-1.99 3.553-1.53 5.445l5.634-5.635c1.172-1.171 3.077-1.171 4.248 0 1.172 1.171 1.172 3.077 0 4.248l-5.635 5.635c1.893.459 3.968-.053 5.445-1.53l2.146-2.147c2.254-2.254 2.254-5.908 0-8.163-2.253-2.254-5.908-2.254-8.162-.001z"/>
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">70</span>
            <span class="block text-gray-500">Connections</span>
          </div>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path d="M20 3c0-1.657-1.344-3-3-3s-3 1.343-3 3c0 .312.061.606.149.889l-4.21 3.157c.473.471.878 1.01 1.201 1.599l4.197-3.148c.477.316 1.048.503 1.663.503 1.656 0 3-1.343 3-3zm-2 0c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm3 12.062c1.656 0 3-1.343 3-3s-1.344-3-3-3c-1.281 0-2.367.807-2.797 1.938h-6.283c.047.328.08.66.08 1s-.033.672-.08 1h6.244c.396 1.195 1.509 2.062 2.836 2.062zm-1-3c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.448-1-1zm-20-.062c0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5-5 2.239-5 5zm2 0c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3-3-1.346-3-3zm7.939 4.955l4.21 3.157c-.088.282-.149.576-.149.888 0 1.657 1.344 3 3 3s3-1.343 3-3-1.344-3-3-3c-.615 0-1.186.187-1.662.504l-4.197-3.148c-.324.589-.729 1.127-1.202 1.599zm6.061 4.045c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.449-1-1z"/>
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">15</span>
            <span class="block text-gray-500">Workflows</span>
          </div>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path d="M6 22v-16h16v7.543c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362zm18-7.614v-10.386h-20v20h10.189c3.163 0 9.811-7.223 9.811-9.614zm-10 1.614h-5v-1h5v1zm5-4h-10v1h10v-1zm0-3h-10v1h10v-1zm2-7h-19v19h-2v-21h21v2z"/>
            </svg>
          </div>
          <div>
            <span class="inline-block text-2xl font-bold">23</span>
            <span class="block text-gray-500">Sheet files</span>
          </div>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">7</span>
            <span class="block text-gray-500">Team members</span>
          </div>
        </div>
      </section>

      <section class="bg-white p-4 rounded-lg">
          <div class="flex border-b mb-2">
            <div class="w-4/5 py-3 px-1 text-gray-900 text-sm font-bold uppercase">
              Connection
            </div>
            <div class="w-1/5 p-3 my-auto text-gray-900 text-sm font-bold uppercase">
              Actions
            </div>
          </div>
          <div v-for="index in 6" :key="index" class="flex rounded-lg hover:bg-gray-100">
            <div class="w-8 text-center py-1 my-auto">
              <p class="text-xl text-main-500">&bull;</p>
            </div>
            <div class="w-3/5 sm:w-4/5 py-3 px-1 my-auto truncate">
              SheetA_Feuille_1_SheetB_Tab2_Connection_#{{index}}
            </div>
            <div class="w-2/5 sm:w-1/5 p-3 my-auto flex flex-row justify-start items-center">
              <router-link :to="{name: 'dashboard.workflows'}" 
                class="inline-flex text-sm items-center px-3 py-2 text-main-600 hover:text-main-700 focus:text-main-700 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                  <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 7l-3.36-2.171c-.405.625-.64 1.371-.64 2.171 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-.742 0-1.438.202-2.033.554l2.033 3.446z"/>
                </svg>
                View
              </router-link>
              <button type="button" class="inline-flex justify-between items-center w-full text-sm px-3 py-2 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                  <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                </svg>
                Run
              </button>
            </div>
          </div>
      </section>
      
      <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <!-- <div class="row-span-3 bg-white rounded-lg">
          <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
            <span>Connection per member</span>
            <button type="button" class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600" id="options-menu" aria-haspopup="true" aria-expanded="true">
              Desc
              <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div class="overflow-y-auto" style="max-height: 24rem;">
            <ul class="p-6 space-y-6">
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/women/82.jpg" alt="Annette Watson profile picture">
                </div>
                <span class="text-gray-600">Annette Watson</span>
                <span class="ml-auto font-semibold">9</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/men/81.jpg" alt="Calvin Steward profile picture">
                </div>
                <span class="text-gray-600">Calvin Steward</span>
                <span class="ml-auto font-semibold">8</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/men/80.jpg" alt="Ralph Richards profile picture">
                </div>
                <span class="text-gray-600">Ralph Richards</span>
                <span class="ml-auto font-semibold">8</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/men/79.jpg" alt="Bernard Murphy profile picture">
                </div>
                <span class="text-gray-600">Bernard Murphy</span>
                <span class="ml-auto font-semibold">8</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/women/78.jpg" alt="Arlene Robertson profile picture">
                </div>
                <span class="text-gray-600">Arlene Robertson</span>
                <span class="ml-auto font-semibold">8</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/women/77.jpg" alt="Jane Lane profile picture">
                </div>
                <span class="text-gray-600">Jane Lane</span>
                <span class="ml-auto font-semibold">8</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Pat Mckinney profile picture">
                </div>
                <span class="text-gray-600">Pat Mckinney</span>
                <span class="ml-auto font-semibold">7</span>
              </li>
              <li class="flex items-center">
                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                  <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Norman Walters profile picture">
                </div>
                <span class="text-gray-600">Norman Walters</span>
                <span class="ml-auto font-semibold">7</span>
              </li>
            </ul>
          </div>
        </div> -->
        <div class="flex flex-col md:col-span-2 xl:col-span-3 md:row-span-3 bg-white rounded-lg">
          <!-- <div class="px-6 py-5 font-semibold border-b border-gray-100">
            Overview
          </div> -->
          <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
              Workflow #{{workflowId}}
            </div>
          </div>
        </div>
        <!-- <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
              <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">25</span>
            <span class="block text-gray-500">Lections left</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">139</span>
            <span class="block text-gray-500">Hours spent on lections</span>
          </div>
        </div> -->
        <div class="row-span-3 bg-white rounded-lg">
          <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
            <span>Workflows</span>
            <button type="button" class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600" id="options-menu" aria-haspopup="true" aria-expanded="true">
              Desc
              <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
            <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
          </div>
          <div class="overflow-y-auto" style="max-height: 24rem;">
            <ul class="p-2 space-y-6">
              <li v-for="index in 10" :key="index" 
                @click="overviewWorkflow(index)"
                class="flex cursor-pointer text-gray-600 px-3 py-2 rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-main-500" viewBox="0 0 24 24">
                    <path d="M20 3c0-1.657-1.344-3-3-3s-3 1.343-3 3c0 .312.061.606.149.889l-4.21 3.157c.473.471.878 1.01 1.201 1.599l4.197-3.148c.477.316 1.048.503 1.663.503 1.656 0 3-1.343 3-3zm-2 0c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm3 12.062c1.656 0 3-1.343 3-3s-1.344-3-3-3c-1.281 0-2.367.807-2.797 1.938h-6.283c.047.328.08.66.08 1s-.033.672-.08 1h6.244c.396 1.195 1.509 2.062 2.836 2.062zm-1-3c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.448-1-1zm-20-.062c0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5-5 2.239-5 5zm2 0c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3-3-1.346-3-3zm7.939 4.955l4.21 3.157c-.088.282-.149.576-.149.888 0 1.657 1.344 3 3 3s3-1.343 3-3-1.344-3-3-3c-.615 0-1.186.187-1.662.504l-4.197-3.148c-.324.589-.729 1.127-1.202 1.599zm6.061 4.045c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.449-1-1z"/>
                  </svg>
                </div>
                <div class="w-4/5 py-3 px-1">
                  Workflow #{{index}}
                </div>
                <div class="w-1/5 p-3 my-auto">
                  <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 fill-current float-right" viewBox="0 0 24 24">
                    <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 7l-3.36-2.171c-.405.625-.64 1.371-.64 2.171 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-.742 0-1.438.202-2.033.554l2.033 3.446z"/>
                  </svg>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">Students by type of studying</div>
          <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-24 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
          </div>
        </div> -->
      </section>
    </div>
</template>

<script>
export default {
  middleware: 'auth',
  layout: 'dashboard',

  metaInfo () {
    return { title: 'Dashboard' }
  },

  data() {
    return {
      workflowId: 1
    }
  },

  methods: {
    overviewWorkflow: function(ind) {
      this.workflowId = ind;
    }
  }
}
</script>
