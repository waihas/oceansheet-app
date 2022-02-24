<template>
    <div class="p-6 sm:p-10 space-y-6">
      <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
        </div>
        <div class="flex flex-wrap items-start justify-end">
          <button @click="run0700Updates" class="inline-flex px-5 py-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
              <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
            </svg>
            Run 07:00
          </button>
          <button @click="run1200Updates" class="inline-flex px-5 py-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md ml-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
              <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
            </svg>
            Run 12:00
          </button>
          <button @click="run2000Updates" class="inline-flex px-5 py-3 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 rounded-md ml-6">
           <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
              <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
            </svg>
            Run 20:00
          </button>
        </div>
      </div>

      <section v-if="messageRunUpdates" class="bg-white p-4 rounded-lg" >
          <div v-if="runningUpdates">
            Loading users...
          </div>
          <div class="flex rounded-lg">
            {{messageRunUpdates}}
          </div>
      </section>

      <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path d="M17.033 6.966c.584.583.584 1.529 0 2.112l-7.955 7.956c-.583.583-1.529.583-2.112 0-.583-.583-.583-1.529 0-2.112l7.956-7.956c.582-.583 1.528-.583 2.111 0zm-9.138 13.386c-1.171 1.171-3.076 1.171-4.248 0-1.171-1.171-1.171-3.077 0-4.248l5.639-5.632c-1.892-.459-3.971.05-5.449 1.528l-2.147 2.147c-2.254 2.254-2.254 5.909 0 8.163 2.254 2.254 5.909 2.254 8.163 0l2.147-2.148c1.477-1.477 1.986-3.556 1.527-5.448l-5.632 5.638zm6.251-18.662l-2.146 2.148c-1.478 1.478-1.99 3.553-1.53 5.445l5.634-5.635c1.172-1.171 3.077-1.171 4.248 0 1.172 1.171 1.172 3.077 0 4.248l-5.635 5.635c1.893.459 3.968-.053 5.445-1.53l2.146-2.147c2.254-2.254 2.254-5.908 0-8.163-2.253-2.254-5.908-2.254-8.162-.001z"/>
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">{{feedbacks ? feedbacks.length : '0'}}</span>
            <span class="block text-gray-500">Feedback</span>
          </div>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path d="M20 3c0-1.657-1.344-3-3-3s-3 1.343-3 3c0 .312.061.606.149.889l-4.21 3.157c.473.471.878 1.01 1.201 1.599l4.197-3.148c.477.316 1.048.503 1.663.503 1.656 0 3-1.343 3-3zm-2 0c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm3 12.062c1.656 0 3-1.343 3-3s-1.344-3-3-3c-1.281 0-2.367.807-2.797 1.938h-6.283c.047.328.08.66.08 1s-.033.672-.08 1h6.244c.396 1.195 1.509 2.062 2.836 2.062zm-1-3c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.448-1-1zm-20-.062c0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5-5 2.239-5 5zm2 0c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3-3-1.346-3-3zm7.939 4.955l4.21 3.157c-.088.282-.149.576-.149.888 0 1.657 1.344 3 3 3s3-1.343 3-3-1.344-3-3-3c-.615 0-1.186.187-1.662.504l-4.197-3.148c-.324.589-.729 1.127-1.202 1.599zm6.061 4.045c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.449-1-1z"/>
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">{{newsletters ? newsletters.length : '0'}}</span>
            <span class="block text-gray-500">Newsletter</span>
          </div>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path d="M6 22v-16h16v7.543c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362zm18-7.614v-10.386h-20v20h10.189c3.163 0 9.811-7.223 9.811-9.614zm-10 1.614h-5v-1h5v1zm5-4h-10v1h10v-1zm0-3h-10v1h10v-1zm2-7h-19v19h-2v-21h21v2z"/>
            </svg>
          </div>
          <div>
            <span class="inline-block text-2xl font-bold">{{errors ? errors.length : '0'}}</span>
            <span class="block text-gray-500">Errors</span>
          </div>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-main-600 bg-main-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">{{users ? users.length : '0'}}</span>
            <span class="block text-gray-500">Users</span>
          </div>
        </div>
      </section>

      <section class="bg-white p-4 rounded-lg" >
          <div class="flex border-b mb-2">
            <div class="w-4/5 py-3 px-1 text-gray-900 text-sm font-bold uppercase">
              User
            </div>
            <div class="w-1/5 p-3 my-auto text-gray-900 text-sm font-bold uppercase">
              Actions
            </div>
          </div>
          <div v-if="loadingUsers">
            Loading users...
          </div>
          <div v-else>
            <div v-if="users.length > 0">
              <div v-for="user in users" :key="user.id" class="flex rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-3/5 sm:w-4/5 py-3 px-1 my-auto truncate">
                  {{user.name}}
                </div>
                <div class="w-2/5 sm:w-1/5 p-3 my-auto flex flex-row justify-start items-center">
                  <button type="button" class="inline-flex justify-between items-center w-full text-sm px-3 py-2 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                      <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                    </svg>
                    Run
                  </button>
                </div>
              </div>
            </div>
            <div v-else class="flex rounded-lg">
              Nothing for now.
            </div>
          </div>
      </section>
      <section class="bg-white p-4 rounded-lg" >
          <div class="flex border-b mb-2">
            <div class="w-4/5 py-3 px-1 text-gray-900 text-sm font-bold uppercase">
              Error
            </div>
            <div class="w-1/5 p-3 my-auto text-gray-900 text-sm font-bold uppercase">
              Actions
            </div>
          </div>
          <div v-if="loadingErrors">
            Loading errors...
          </div>
          <div v-else>
            <div v-if="errors.length > 0">
              <div v-for="error in errors" :key="error.id" class="flex rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-3/5 sm:w-4/5 py-3 px-1 my-auto truncate">
                  {{error.error}}
                </div>
                <div class="w-2/5 sm:w-1/5 p-3 my-auto flex flex-row justify-start items-center">
                  <!-- <router-link :to="{name: 'dashboard.connections.view', params: { token: conn.token }}"
                    class="inline-flex text-sm items-center px-3 py-2 text-main-600 hover:text-main-700 focus:text-main-700 hover:bg-main-100 focus:bg-main-100 border border-main-600 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                      <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 7l-3.36-2.171c-.405.625-.64 1.371-.64 2.171 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-.742 0-1.438.202-2.033.554l2.033 3.446z"/>
                    </svg>
                    View
                  </router-link>
                  <run-button 
                    class="inline-flex justify-between items-center w-full text-sm px-3 py-2 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md ml-3"
                    :token="conn.token">
                  </run-button> -->
                  <button type="button" class="inline-flex justify-between items-center w-full text-sm px-3 py-2 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                      <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                    </svg>
                    Run
                  </button>
                </div>
              </div>
            </div>
            <div v-else class="flex rounded-lg">
              Nothing for now.
            </div>
          </div>
      </section>
      <section class="bg-white p-4 rounded-lg" >
          <div class="flex border-b mb-2">
            <div class="w-4/5 py-3 px-1 text-gray-900 text-sm font-bold uppercase">
              Newsletter
            </div>
            <div class="w-1/5 p-3 my-auto text-gray-900 text-sm font-bold uppercase">
              Actions
            </div>
          </div>
          <div v-if="loadingNewsletters">
            Loading newsletters...
          </div>
          <div v-else>
            <div v-if="newsletters.length > 0">
              <div v-for="newsletter in newsletters" :key="newsletter.id" class="flex rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-3/5 sm:w-4/5 py-3 px-1 my-auto truncate">
                  {{newsletter.email}}
                </div>
                <div class="w-2/5 sm:w-1/5 p-3 my-auto flex flex-row justify-start items-center">
                  <button type="button" class="inline-flex justify-between items-center w-full text-sm px-3 py-2 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                      <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                    </svg>
                    Run
                  </button>
                </div>
              </div>
            </div>
            <div v-else class="flex rounded-lg">
              Nothing for now.
            </div>
          </div>
      </section>
      <section class="bg-white p-4 rounded-lg" >
          <div class="flex border-b mb-2">
            <div class="w-4/5 py-3 px-1 text-gray-900 text-sm font-bold uppercase">
              Feedback
            </div>
            <div class="w-1/5 p-3 my-auto text-gray-900 text-sm font-bold uppercase">
              Actions
            </div>
          </div>
          <div v-if="loadingFeedbacks">
            Loading feedbacks...
          </div>
          <div v-else>
            <div v-if="feedbacks.length > 0">
              <div v-for="feedback in feedbacks" :key="feedback.id" class="flex rounded-lg hover:bg-gray-100">
                <div class="w-8 text-center py-1 my-auto">
                  <p class="text-xl text-main-500">&bull;</p>
                </div>
                <div class="w-3/5 sm:w-4/5 py-3 px-1 my-auto truncate">
                  {{feedback.message}}
                </div>
                <div class="w-2/5 sm:w-1/5 p-3 my-auto flex flex-row justify-start items-center">
                  <button type="button" class="inline-flex justify-between items-center w-full text-sm px-3 py-2 text-white bg-main-600 hover:bg-main-700 focus:bg-main-700 border border-main-600 hover:border-main-700 rounded-md ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 fill-current" viewBox="0 0 24 24">
                      <path d="M14 12h-4v-12h4v12zm6.949-4.493l1.81-.857c-.353-.7-.758-1.368-1.236-1.981l-1.512 1.318c.36.474.667.986.938 1.52zm-.797-4.299c-.589-.54-1.214-1.038-1.9-1.454l-1.216 1.599c.577.334 1.104.739 1.602 1.177l1.514-1.322zm1.827 7.792h2.006c-.072-.861-.229-1.694-.473-2.493l-1.82.862c.144.527.23 1.074.287 1.631zm-1.895 6.919l1.539 1.29c.465-.616.871-1.276 1.211-1.976l-1.846-.787c-.259.519-.562 1.011-.904 1.473zm1.912-4.919c-.054.54-.162 1.063-.299 1.574l1.864.795c.224-.762.372-1.553.439-2.369h-2.004zm-3.258 6.403c-1.779 1.608-4.129 2.597-6.713 2.597-5.525 0-10.021-4.486-10.021-10 0-1.913.554-3.691 1.496-5.207l2.162 2.162 1.353-7.014-7.015 1.351 2.045 2.045c-1.287 1.904-2.045 4.191-2.045 6.663 0 6.627 5.385 12 12.025 12 3.204 0 6.107-1.259 8.264-3.297l-1.551-1.3z"/>
                    </svg>
                    Run
                  </button>
                </div>
              </div>
            </div>
            <div v-else class="flex rounded-lg">
              Nothing for now.
            </div>
          </div>
      </section>
    </div>
</template>

<script>
import RunButton from '~/components/connection/RunButton'
import axios from 'axios'

export default {
  middleware: 'auth',
  layout: 'dashboard',

  components: { RunButton },

  metaInfo () {
    return { title: 'Admin' }
  },

  data() {
    return {
      loadingUsers: true,
      loadingErrors: true,
      loadingNewsletters: true,
      loadingFeedbacks: true,
      users: null,
      errors: null,
      newsletters: null,
      feedbacks: null,
      messageRunUpdates: '',
      runningUpdates: false,
    }
  },

  unmounted() {
      alert('login');
    //   here check username and password
  },

  mounted () {
    this.loadUsers();
    this.loadErrors();
    this.loadFeedbacks();
    this.loadNewsletters();
  },

  methods: {
    async loadUsers() {
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/users')
        .then(response => {
          this.users = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingUsers = false)
    },
    async loadErrors() {
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/errors')
        .then(response => {
          this.errors = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingErrors = false)
    },
    async loadFeedbacks() {
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/feedbacks')
        .then(response => {
          this.feedbacks = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingFeedbacks = false)
    },
    async loadNewsletters() {
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/newsletters')
        .then(response => {
          this.newsletters = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingNewsletters = false)
    },
    async run0700Updates() {
      this.runningUpdates = true;
      let connections;
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/connections/07:00/all')
        .then(response => {
          connections = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingNewsletters = false)

        //loop and run each one in the list
        for (let index = 0; index < connections.length; index++) {
          const conn = connections[index];
          this.runUpdate(conn.token)
        }
        this.runningUpdates = false
    },
    async run1200Updates() {
      this.runningUpdates = true;
      let connections;
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/connections/12:00/all')
        .then(response => {
          connections = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingNewsletters = false)

        //loop and run each one in the list
        for (let index = 0; index < connections.length; index++) {
          const conn = connections[index];
          this.runUpdate(conn.token)
        }
        this.runningUpdates = false
    },
    async run2000Updates() {
      this.runningUpdates = true;
      let connections;
      await axios.get('/api/admin/backdoor/0623656897/oceansheet/connections/20:00/all')
        .then(response => {
          connections = response.data.data
        })
        .catch(error => {
          console.error(error)
          console.log(error)
        })
        .finally(() => this.loadingNewsletters = false)

        //loop and run each one in the list
        for (let index = 0; index < connections.length; index++) {
          const conn = connections[index];
          this.runUpdate(conn.token)
        }
        this.runningUpdates = false
    },
    async runUpdate(token) {
      let count_outputs = 1
      let source_spreadsheetId = ''
      let source_title = ''
      let source_from = ''
      let source_to = ''
      let output_1_spreadsheetId = ''
      let output_1_title = ''
      let output_1_from = ''
      let output_2_spreadsheetId = ''
      let output_2_title = ''
      let output_2_from = ''
      let output_3_spreadsheetId = ''
      let output_3_title = ''
      let output_3_from = ''

      //1. get connection data
      await axios.get('/api/connection/'+token+'/get')
          .then(res => {
              count_outputs = res.data.data.count_outputs
              source_spreadsheetId = res.data.data.source_spreadsheetId
              source_title = res.data.data.source_title
              source_from = res.data.data.source_from
              source_to = res.data.data.source_to
              output_1_spreadsheetId = res.data.data.output_1_spreadsheetId
              output_1_title = res.data.data.output_1_title
              output_1_from = res.data.data.output_1_from
              output_2_spreadsheetId = res.data.data.output_2_spreadsheetId
              output_2_title = res.data.data.output_2_title
              output_2_from = res.data.data.output_2_from
              output_3_spreadsheetId = res.data.data.output_3_spreadsheetId
              output_3_title = res.data.data.output_3_title
              output_3_from = res.data.data.output_3_from
          })
          .catch(e => {
              console.error(e)
          })

      //2. get data from source sheet (update from the selected cells to the end where there is no more text)
      const sourceData = await this.$google.api.client.sheets.spreadsheets.values.get({
          spreadsheetId: source_spreadsheetId,
          range: source_title+'!'+source_from+':'+source_to,
      });

      if(sourceData.status !== 200) {
          console.error(sourceData.data)
      }

      //3. put data on output sheets (override maybe the previous putted one)
      const response1 = await this.$google.api.client.sheets.spreadsheets.values.update({
          spreadsheetId: output_1_spreadsheetId,
          range: output_1_title+'!'+output_1_from,
          valueInputOption: 'USER_ENTERED',
          values: sourceData.result.values
      })

      if(response1.status !== 200) {
          console.error(response1.data)
      }

      if(count_outputs > 1) {
          const response2 = await this.$google.api.client.sheets.spreadsheets.values.update({
              spreadsheetId: output_2_spreadsheetId,
              range: output_2_title+'!'+output_2_from,
              valueInputOption: 'USER_ENTERED',
              values: sourceData.result.values
          })

          if(response2.status !== 200) {
              console.error(response2.data)
          }
      }

      if(count_outputs === 3) {
          const response3 = await this.$google.api.client.sheets.spreadsheets.values.update({
              spreadsheetId: output_3_spreadsheetId,
              range: output_3_title+'!'+output_3_from,
              valueInputOption: 'USER_ENTERED',
              values: sourceData.result.values
          })

          if(response3.status !== 200) {
              console.error(response3.data)
          }
      }

      //4. decrement number of updates in database
      await axios.post('/api/connection/'+token+'/run')
        .then(response => {
            this.messageRunUpdates = this.messageRunUpdates + '\n' + token + ' is done.'
        })
        .catch(e => {
            console.error(e)
        })
    }
  }
}
</script>
