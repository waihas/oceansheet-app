<template>
<div>
  <aside class="hidden sm:flex sm:flex-col h-screen">
    <router-link :to="{name: 'dashboard.home'}" class="inline-flex items-center justify-center h-20 w-24 bg-main-500">
        <img src="/assets/img/oceansheet-logo-white.svg" class="h-12 w-12" alt="OceanSheet logo">
      <!-- <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
        <title>Company logo</title>
        <path d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z" fill="#fff"/>
      </svg> -->
    </router-link>
    <!-- <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <nav class="flex flex-col mx-4 my-6 space-y-4">
        <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Folders</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
          <span class="sr-only">Dashboard</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Messages</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Documents</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
        </a>
      </nav>
      <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
        <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Settings</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </button>
      </div>
    </div> -->
    <div class="flex-grow flex flex-col justify-between text-white bg-main-500 w-24">
        <nav class="flex flex-col mx-2 my-6 space-y-4">
            <!-- <a href="purchase"
              class="items-center justify-center py-3 @routeis(purchase) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
            <sidebar-item route="dashboard.connections">
              <div class="flex justify-center"> 
                <span class="sr-only">Connections</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M9.939 0l-.939 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l2.996-4.971h1.943zm-3.052 0l-2.887 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l4.874-4.971h2.013zm17.113 6.068c0 1.067-.933 1.932-2 1.932s-2-.933-2-2v-1.098l-2.887-4.902h2.014l4.873 4.971v1.097zm-10-1.168v1.098c0 1.066-.933 2.002-2 2.002s-2-.933-2-2v-1.098l1.047-4.902h1.905l1.048 4.9zm2.004-4.9l2.993 5.002v1.098c.001 1.067-.93 1.9-1.997 1.9s-2-.933-2-2v-1.098l-.939-4.902h1.943zm-15.004 10v14h10v-2h-8v-10h18v12h2v-14h-22zm18 4h-6v10h6v-10z"/>  
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Connections</div>
            </sidebar-item>
            <!-- <a href="purchase"
              class="items-center justify-center py-3 @routeis(purchase) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
            </a> -->
            <sidebar-item route="dashboard.workflows">
              <div class="flex justify-center"> 
                <span class="sr-only">Workflows</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M9.939 0l-.939 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l2.996-4.971h1.943zm-3.052 0l-2.887 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l4.874-4.971h2.013zm17.113 6.068c0 1.067-.933 1.932-2 1.932s-2-.933-2-2v-1.098l-2.887-4.902h2.014l4.873 4.971v1.097zm-10-1.168v1.098c0 1.066-.933 2.002-2 2.002s-2-.933-2-2v-1.098l1.047-4.902h1.905l1.048 4.9zm2.004-4.9l2.993 5.002v1.098c.001 1.067-.93 1.9-1.997 1.9s-2-.933-2-2v-1.098l-.939-4.902h1.943zm-15.004 10v14h10v-2h-8v-10h18v12h2v-14h-22zm18 4h-6v10h6v-10z"/>  
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Workflows</div>
            </sidebar-item>
            <!-- <a href="billing"
              class="items-center justify-center py-3 @routeis(billing) text-main-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
            <sidebar-item route="dashboard.team">
              <div class="flex justify-center"> 
                <span class="sr-only">Team</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M22 4h-20c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-12c0-1.104-.896-2-2-2zm0 13.5c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-6.5h20v6.5zm0-9.5h-20v-1.5c0-.276.224-.5.5-.5h19c.276 0 .5.224.5.5v1.5zm-9 6h-9v-1h9v1zm-3 2h-6v-1h6v1zm10-2h-3v-1h3v1z"/>
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Team</div>
            </sidebar-item>
            <!-- <a href="support"
              class="items-center justify-center py-3 @routeis(support) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
            <sidebar-item route="dashboard.support">
              <div class="flex justify-center"> 
                <span class="sr-only">Support</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M3.848 19h-.848c-.796 0-1.559-.316-2.121-.879-.563-.562-.879-1.325-.879-2.121v-3c0-7.175 5.377-13 12-13s12 5.825 12 13v3c0 .796-.316 1.559-.879 2.121-.562.563-1.325.879-2.121.879h-.848c-2.69 4.633-6.904 5-8.152 5-1.248 0-5.462-.367-8.152-5zm16.152-5.876c-.601.236-1.269-.18-1.269-.797 0-.304-.022-.61-.053-.915-1.761-.254-3.618-1.926-3.699-3.723-1.315 2.005-4.525 4.17-7.044 4.17 1.086-.699 1.839-2.773 1.903-3.508-.581 1.092-2.898 3.136-4.551 3.487l-.018.489c0 .619-.669 1.032-1.269.797v3.771c.287.256.632.464 1.041.594.225.072.412.224.521.424 2.206 4.046 5.426 4.087 6.438 4.087.929 0 3.719-.035 5.877-3.169-1.071.433-2.265.604-3.759.653-.37.6-1.18 1.016-2.118 1.016-1.288 0-2.333-.784-2.333-1.75s1.045-1.75 2.333-1.75c.933 0 1.738.411 2.112 1.005 1.9-.026 4.336-.334 5.888-2.645v-2.236zm-11-.624c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm6 0c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm5.478-1.5h1.357c-.856-5.118-4.937-9-9.835-9-4.898 0-8.979 3.882-9.835 9h1.357c.52-4.023 3.411-7.722 8.478-7.722s7.958 3.699 8.478 7.722z"/>
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Support</div>
            </sidebar-item>
            <sidebar-item route="settings.profile">
              <div class="flex justify-center"> 
                <span class="sr-only">Account</span>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  class="h-7 w-7 fill-current"
                  viewBox="0 0 24 24">
                  <path d="M 12 3 A 4 4 0 0 0 8 7 A 4 4 0 0 0 12 11 A 4 4 0 0 0 16 7 A 4 4 0 0 0 12 3 z M 9.4355469 14.263672 C 6.4565469 14.814672 3 16.228 3 18.5 L 3 21 L 21 21 L 21 18.5 C 21 16.228 17.543453 14.813672 14.564453 14.263672 L 12 16.828125 L 9.4355469 14.263672 z"></path>
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Account</div>
            </sidebar-item>
            <!-- <a href="account"
              class="items-center justify-center py-3 @routeis(account) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
        </nav>
        <div class="flex mx-4 items-center justify-center h-20 border-t border-gray-600">
            <sidebar-item route="settings.password">
              <div class="flex justify-center"> 
                <span class="sr-only">Settings</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div> 
            </sidebar-item>
            
            <!-- <a href="/settings" 
              class="p-3 mx-auto hover:bg-gray-200 focus:bg-gray-100 hover:text-gray-400 @routeis(settings) text-blue-600 bg-white @endrouteis rounded-lg">
              
            </a> -->
        </div>
    </div>
  </aside>
  <!--div class="bg-white w-80 border-r p-8 -my-2">
    <sidebar-item route="dashboard.home">
      Home
    </sidebar-item>
    <sidebar-item route="dashboard.components">
      Components
    </sidebar-item>
  </div-->
  <div
  v-show="isSideMenuOpen"
  x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
  ></div>
  <aside
    class="fixed inset-y-0 z-20 flex-shrink-0 overflow-y-auto md:hidden"
    v-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    >
    <!-- v-click-outside="closeSideMenu"
    @keydown.esc="closeSideMenu" -->
    <!-- <a href="/home" class="inline-flex items-center justify-center h-32 bg-gray-700 w-32">
      <img class="h-16 w-16" src="images/waihas-logo-circle-white.svg') }}" alt="Waihas">
    </a> -->
    <router-link :to="{name: 'dashboard.home'}" class="inline-flex items-center justify-center h-20 w-24 bg-main-500">
        <img src="/assets/img/oceansheet-logo-white.svg" class="h-12 w-12" alt="OceanSheet logo">
      <!-- <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
        <title>Company logo</title>
        <path d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z" fill="#fff"/>
      </svg> -->
    </router-link>
    <!-- <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-700 w-32 h-full">
      <nav class="flex flex-col mx-4 my-6 space-y-4">
        <a href="/purchase"
          class="items-center justify-center py-3 @routeis(purchase) text-blue-600 bg-white @else hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 @endrouteis rounded-lg">
          <div class="flex justify-center"> 
            <span class="sr-only">Purchases</span>
            <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                <path d="M9.939 0l-.939 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l2.996-4.971h1.943zm-3.052 0l-2.887 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l4.874-4.971h2.013zm17.113 6.068c0 1.067-.933 1.932-2 1.932s-2-.933-2-2v-1.098l-2.887-4.902h2.014l4.873 4.971v1.097zm-10-1.168v1.098c0 1.066-.933 2.002-2 2.002s-2-.933-2-2v-1.098l1.047-4.902h1.905l1.048 4.9zm2.004-4.9l2.993 5.002v1.098c.001 1.067-.93 1.9-1.997 1.9s-2-.933-2-2v-1.098l-.939-4.902h1.943zm-15.004 10v14h10v-2h-8v-10h18v12h2v-14h-22zm18 4h-6v10h6v-10z"/>  
            </svg>
          </div> 
          <div class="block text-center text-sm mt-2">Purchases</div>
        </a>
        <a href="/billing"
          class="items-center justify-center py-3 @routeis(billing) text-blue-600 bg-white @else hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 @endrouteis rounded-lg">
          <div class="flex justify-center"> 
            <span class="sr-only">Billing</span>
            <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                <path d="M22 4h-20c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-12c0-1.104-.896-2-2-2zm0 13.5c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-6.5h20v6.5zm0-9.5h-20v-1.5c0-.276.224-.5.5-.5h19c.276 0 .5.224.5.5v1.5zm-9 6h-9v-1h9v1zm-3 2h-6v-1h6v1zm10-2h-3v-1h3v1z"/>
            </svg>
          </div> 
          <div class="block text-center text-sm mt-2">Billing</div>
        </a>
      </nav>
      <div class="flex mx-4 items-center justify-center h-20 border-t border-gray-600">
        <a href="/settings" 
          class="p-3 mx-auto hover:text-gray-400 hover:bg-gray-800 focus:text-gray-400 focus:bg-gray-700 @routeis(settings) text-blue-600 bg-white @endrouteis rounded-lg">
          <span class="sr-only">Settings</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </a>
    </div>
    </div> -->
    <div class="flex-grow flex flex-col justify-between text-white bg-main-500 w-24">
        <nav class="flex flex-col mx-2 my-6 space-y-4">
            <!-- <a href="purchase"
              class="items-center justify-center py-3 @routeis(purchase) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
            <sidebar-item route="dashboard.connections">
              <div class="flex justify-center"> 
                <span class="sr-only">Connections</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M9.939 0l-.939 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l2.996-4.971h1.943zm-3.052 0l-2.887 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l4.874-4.971h2.013zm17.113 6.068c0 1.067-.933 1.932-2 1.932s-2-.933-2-2v-1.098l-2.887-4.902h2.014l4.873 4.971v1.097zm-10-1.168v1.098c0 1.066-.933 2.002-2 2.002s-2-.933-2-2v-1.098l1.047-4.902h1.905l1.048 4.9zm2.004-4.9l2.993 5.002v1.098c.001 1.067-.93 1.9-1.997 1.9s-2-.933-2-2v-1.098l-.939-4.902h1.943zm-15.004 10v14h10v-2h-8v-10h18v12h2v-14h-22zm18 4h-6v10h6v-10z"/>  
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Connections</div>
            </sidebar-item>
            <!-- <a href="purchase"
              class="items-center justify-center py-3 @routeis(purchase) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
            </a> -->
            <sidebar-item route="dashboard.workflows">
              <div class="flex justify-center"> 
                <span class="sr-only">Workflows</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M9.939 0l-.939 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l2.996-4.971h1.943zm-3.052 0l-2.887 4.971v1.098c0 1.066-.933 1.931-2 1.931s-2-.865-2-1.932v-1.097l4.874-4.971h2.013zm17.113 6.068c0 1.067-.933 1.932-2 1.932s-2-.933-2-2v-1.098l-2.887-4.902h2.014l4.873 4.971v1.097zm-10-1.168v1.098c0 1.066-.933 2.002-2 2.002s-2-.933-2-2v-1.098l1.047-4.902h1.905l1.048 4.9zm2.004-4.9l2.993 5.002v1.098c.001 1.067-.93 1.9-1.997 1.9s-2-.933-2-2v-1.098l-.939-4.902h1.943zm-15.004 10v14h10v-2h-8v-10h18v12h2v-14h-22zm18 4h-6v10h6v-10z"/>  
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Workflows</div>
            </sidebar-item>
            <!-- <a href="billing"
              class="items-center justify-center py-3 @routeis(billing) text-main-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
            <sidebar-item route="dashboard.team">
              <div class="flex justify-center"> 
                <span class="sr-only">Team</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M22 4h-20c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-12c0-1.104-.896-2-2-2zm0 13.5c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-6.5h20v6.5zm0-9.5h-20v-1.5c0-.276.224-.5.5-.5h19c.276 0 .5.224.5.5v1.5zm-9 6h-9v-1h9v1zm-3 2h-6v-1h6v1zm10-2h-3v-1h3v1z"/>
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Team</div>
            </sidebar-item>
            <!-- <a href="support"
              class="items-center justify-center py-3 @routeis(support) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
            <sidebar-item route="dashboard.support">
              <div class="flex justify-center"> 
                <span class="sr-only">Support</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path d="M3.848 19h-.848c-.796 0-1.559-.316-2.121-.879-.563-.562-.879-1.325-.879-2.121v-3c0-7.175 5.377-13 12-13s12 5.825 12 13v3c0 .796-.316 1.559-.879 2.121-.562.563-1.325.879-2.121.879h-.848c-2.69 4.633-6.904 5-8.152 5-1.248 0-5.462-.367-8.152-5zm16.152-5.876c-.601.236-1.269-.18-1.269-.797 0-.304-.022-.61-.053-.915-1.761-.254-3.618-1.926-3.699-3.723-1.315 2.005-4.525 4.17-7.044 4.17 1.086-.699 1.839-2.773 1.903-3.508-.581 1.092-2.898 3.136-4.551 3.487l-.018.489c0 .619-.669 1.032-1.269.797v3.771c.287.256.632.464 1.041.594.225.072.412.224.521.424 2.206 4.046 5.426 4.087 6.438 4.087.929 0 3.719-.035 5.877-3.169-1.071.433-2.265.604-3.759.653-.37.6-1.18 1.016-2.118 1.016-1.288 0-2.333-.784-2.333-1.75s1.045-1.75 2.333-1.75c.933 0 1.738.411 2.112 1.005 1.9-.026 4.336-.334 5.888-2.645v-2.236zm-11-.624c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm6 0c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm5.478-1.5h1.357c-.856-5.118-4.937-9-9.835-9-4.898 0-8.979 3.882-9.835 9h1.357c.52-4.023 3.411-7.722 8.478-7.722s7.958 3.699 8.478 7.722z"/>
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Support</div>
            </sidebar-item>
            <sidebar-item route="settings.profile">
              <div class="flex justify-center"> 
                <span class="sr-only">Account</span>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  class="h-7 w-7 fill-current"
                  viewBox="0 0 24 24">
                  <path d="M 12 3 A 4 4 0 0 0 8 7 A 4 4 0 0 0 12 11 A 4 4 0 0 0 16 7 A 4 4 0 0 0 12 3 z M 9.4355469 14.263672 C 6.4565469 14.814672 3 16.228 3 18.5 L 3 21 L 21 21 L 21 18.5 C 21 16.228 17.543453 14.813672 14.564453 14.263672 L 12 16.828125 L 9.4355469 14.263672 z"></path>
                </svg>
              </div> 
              <div class="block text-center text-xs mt-2">Account</div>
            </sidebar-item>
            <!-- <a href="account"
              class="items-center justify-center py-3 @routeis(account) text-blue-600 bg-white @else hover:bg-gray-200 focus:bg-gray-100 rounded-lg">
              
            </a> -->
        </nav>
        <div class="flex mx-4 items-center justify-center h-20 border-t border-gray-600">
            <sidebar-item route="settings.password">
              <div class="flex justify-center"> 
                <span class="sr-only">Settings</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div> 
            </sidebar-item>
            
            <!-- <a href="/settings" 
              class="p-3 mx-auto hover:bg-gray-200 focus:bg-gray-100 hover:text-gray-400 @routeis(settings) text-blue-600 bg-white @endrouteis rounded-lg">
              
            </a> -->
        </div>
    </div>
  </aside>
  </div>
</template>

<script>
import SidebarItem from './SidebarItem'
import ClickOutside from 'vue-click-outside'
export default {
  name: 'Sidebar',
  components: { SidebarItem },
  directives: {
    ClickOutside
  },
  
  data () {
    return {
      isSideMenuOpen: false
    }
  },

  methods: {
    // openSideMenu () {
    //   this.$parent.$emit('openSideMenu')
    // },
    // closeSideMenu () {
    //   this.$parent.$emit('closeSideMenu')
    // }
  }
}
</script>

<style scoped>

</style>
