<template>
  <div>
    <aside class="hidden sm:flex sm:flex-col h-screen">
      <router-link :to="{name: 'dashboard.home'}" class="inline-flex items-center justify-center h-20 w-24 bg-main-500" style="height: 10vh; min-height: 4.5rem;">
          <img src="/assets/img/oceansheet-logo-white.svg" class="h-12 w-12" alt="OceanSheet logo">
      </router-link>
      <div class="flex-grow flex flex-col justify-between text-white bg-main-500 w-24">
          <nav class="flex flex-col mx-2 my-6 space-y-4">
              <sidebar-item route="dashboard.connections">
                <div class="flex justify-center"> 
                  <span class="sr-only">Connections</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M6.188 8.719c.439-.439.926-.801 1.444-1.087 2.887-1.591 6.589-.745 8.445 2.069l-2.246 2.245c-.644-1.469-2.243-2.305-3.834-1.949-.599.134-1.168.433-1.633.898l-4.304 4.306c-1.307 1.307-1.307 3.433 0 4.74 1.307 1.307 3.433 1.307 4.74 0l1.327-1.327c1.207.479 2.501.67 3.779.575l-2.929 2.929c-2.511 2.511-6.582 2.511-9.093 0s-2.511-6.582 0-9.093l4.304-4.306zm6.836-6.836l-2.929 2.929c1.277-.096 2.572.096 3.779.574l1.326-1.326c1.307-1.307 3.433-1.307 4.74 0 1.307 1.307 1.307 3.433 0 4.74l-4.305 4.305c-1.311 1.311-3.44 1.3-4.74 0-.303-.303-.564-.68-.727-1.051l-2.246 2.245c.236.358.481.667.796.982.812.812 1.846 1.417 3.036 1.704 1.542.371 3.194.166 4.613-.617.518-.286 1.005-.648 1.444-1.087l4.304-4.305c2.512-2.511 2.512-6.582.001-9.093-2.511-2.51-6.581-2.51-9.092 0z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Connections</div>
              </sidebar-item>
              <sidebar-item route="dashboard.workflows">
                <div class="flex justify-center"> 
                  <span class="sr-only">Workflows</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M10.26 4.171c-.58-.286-1.093-.517-1.581-.719.77-2.08 1.882-3.452 3.321-3.452 1.402 0 2.494 1.301 3.26 3.292-.492.211-.998.447-1.572.739-.588-1.567-1.258-2.275-1.688-2.275-.442 0-1.14.75-1.74 2.415zm1.74 18.073c-.429 0-1.1-.708-1.688-2.275-.58.295-1.081.528-1.572.739.767 1.991 1.858 3.292 3.26 3.292 1.439 0 2.551-1.372 3.321-3.452-.485-.201-.997-.431-1.581-.719-.6 1.665-1.298 2.415-1.74 2.415zm-4.708-2.216c-1.917.705-4.778 1.392-5.916-.317-.562-.845-.771-2.468 1.42-5.408.582-.78 1.254-1.545 1.937-2.249 1.531-1.554 3.256-3.05 5.505-4.598-1.083-.596-2.264-1.166-3.416-1.591-1.18-.434-2.219-.675-3.015-.675-.508 0-.886.107-1.009.289-.131.192-.138.783.445 1.842l.21-.012c1.048 0 1.897.865 1.897 1.932s-.85 1.932-1.897 1.932-1.897-.865-1.897-1.932c0-.345.089-.669.246-.95-1.11-1.96-.881-3.139-.419-3.815.324-.476 1.009-1.042 2.424-1.042 2.514 0 5.901 1.66 8.082 2.946 2.214-1.363 5.717-3.16 8.304-3.16 1.421 0 2.106.581 2.431 1.069.562.845.771 2.468-1.42 5.407-3.084 4.137-9.216 8.606-13.912 10.332zm12.538-11.394c1.506-2.019 1.552-3.082 1.366-3.361-.126-.189-.492-.298-1.003-.298-1.953 0-4.926 1.459-6.638 2.447 1.265.837 2.445 1.719 3.522 2.617-.407.413-.834.819-1.271 1.211-1.195-.984-2.523-1.947-3.9-2.811-1.581 1.037-3.173 2.254-4.603 3.551 1.075.951 2.356 1.949 3.721 2.873-.522.331-1.05.648-1.652.98l-.013-.009c-1.144-.811-2.271-1.701-3.316-2.632-2.818 2.878-3.612 4.964-3.239 5.525.126.189.492.298 1.003.298 2.35 0 6.08-2.017 8.287-3.464 2.709-1.776 5.799-4.328 7.736-6.927zm2.377 7.091c.141-.27.22-.577.22-.903 0-1.067-.849-1.932-1.897-1.932s-1.897.865-1.897 1.932.849 1.932 1.897 1.932l.258-.018c.553 1.024.544 1.598.415 1.787-.124.181-.501.288-1.009.288-1.602 0-3.833-.945-5.27-1.658-.48.342-1.077.748-1.659 1.119 1.926 1.037 4.758 2.295 6.929 2.295 1.415 0 2.1-.566 2.424-1.042.461-.674.69-1.85-.411-3.8z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Workflows</div>
              </sidebar-item>
              <sidebar-item route="dashboard.team">
                <div class="flex justify-center"> 
                  <span class="sr-only">Team</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Team</div>
              </sidebar-item>
              <sidebar-item route="dashboard.support">
                <div class="flex justify-center"> 
                  <span class="sr-only">Support</span>
                  <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                      <path d="M3.848 19h-.848c-.796 0-1.559-.316-2.121-.879-.563-.562-.879-1.325-.879-2.121v-3c0-7.175 5.377-13 12-13s12 5.825 12 13v3c0 .796-.316 1.559-.879 2.121-.562.563-1.325.879-2.121.879h-.848c-2.69 4.633-6.904 5-8.152 5-1.248 0-5.462-.367-8.152-5zm16.152-5.876c-.601.236-1.269-.18-1.269-.797 0-.304-.022-.61-.053-.915-1.761-.254-3.618-1.926-3.699-3.723-1.315 2.005-4.525 4.17-7.044 4.17 1.086-.699 1.839-2.773 1.903-3.508-.581 1.092-2.898 3.136-4.551 3.487l-.018.489c0 .619-.669 1.032-1.269.797v3.771c.287.256.632.464 1.041.594.225.072.412.224.521.424 2.206 4.046 5.426 4.087 6.438 4.087.929 0 3.719-.035 5.877-3.169-1.071.433-2.265.604-3.759.653-.37.6-1.18 1.016-2.118 1.016-1.288 0-2.333-.784-2.333-1.75s1.045-1.75 2.333-1.75c.933 0 1.738.411 2.112 1.005 1.9-.026 4.336-.334 5.888-2.645v-2.236zm-11-.624c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm6 0c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm5.478-1.5h1.357c-.856-5.118-4.937-9-9.835-9-4.898 0-8.979 3.882-9.835 9h1.357c.52-4.023 3.411-7.722 8.478-7.722s7.958 3.699 8.478 7.722z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Support</div>
              </sidebar-item>
              <sidebar-item route="dashboard.profile">
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
          </nav>
          <div class="flex flex-col mx-2 my-6 pt-3 space-y-4 border-t border-gray-600">
              <sidebar-item route="settings.billing">
                <div class="flex justify-center my-2"> 
                  <span class="sr-only">Settings</span>
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
              </sidebar-item>
          </div>
      </div>
    </aside>
    
    <div
    v-if="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 md:hidden sm:items-center sm:justify-center"
    ></div>
    <aside
      class="fixed inset-y-0 z-20 flex-shrink-0 overflow-y-auto md:hidden"
      v-if="isSideMenuOpen"
      x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0 transform -translate-x-20"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0 transform -translate-x-20"
      v-click-outside="toggleSidebar"
      >
      <!-- @keydown.esc="toggleSidebar" -->
      <router-link :to="{name: 'dashboard.home'}" class="inline-flex items-center justify-center h-20 w-24 bg-main-500"
        @click.native="toggleSidebar">
          <img src="/assets/img/oceansheet-logo-white.svg" class="h-12 w-12" alt="OceanSheet logo">
      </router-link>
      <div class="flex-grow flex flex-col justify-between text-white bg-main-500 w-24">
          <nav class="flex flex-col mx-2 my-6 space-y-4">
              <sidebar-item route="dashboard.connections">
                <div class="flex justify-center"> 
                  <span class="sr-only">Connections</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M6.188 8.719c.439-.439.926-.801 1.444-1.087 2.887-1.591 6.589-.745 8.445 2.069l-2.246 2.245c-.644-1.469-2.243-2.305-3.834-1.949-.599.134-1.168.433-1.633.898l-4.304 4.306c-1.307 1.307-1.307 3.433 0 4.74 1.307 1.307 3.433 1.307 4.74 0l1.327-1.327c1.207.479 2.501.67 3.779.575l-2.929 2.929c-2.511 2.511-6.582 2.511-9.093 0s-2.511-6.582 0-9.093l4.304-4.306zm6.836-6.836l-2.929 2.929c1.277-.096 2.572.096 3.779.574l1.326-1.326c1.307-1.307 3.433-1.307 4.74 0 1.307 1.307 1.307 3.433 0 4.74l-4.305 4.305c-1.311 1.311-3.44 1.3-4.74 0-.303-.303-.564-.68-.727-1.051l-2.246 2.245c.236.358.481.667.796.982.812.812 1.846 1.417 3.036 1.704 1.542.371 3.194.166 4.613-.617.518-.286 1.005-.648 1.444-1.087l4.304-4.305c2.512-2.511 2.512-6.582.001-9.093-2.511-2.51-6.581-2.51-9.092 0z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Connections</div>
              </sidebar-item>
              <sidebar-item route="dashboard.workflows">
                <div class="flex justify-center"> 
                  <span class="sr-only">Workflows</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M10.26 4.171c-.58-.286-1.093-.517-1.581-.719.77-2.08 1.882-3.452 3.321-3.452 1.402 0 2.494 1.301 3.26 3.292-.492.211-.998.447-1.572.739-.588-1.567-1.258-2.275-1.688-2.275-.442 0-1.14.75-1.74 2.415zm1.74 18.073c-.429 0-1.1-.708-1.688-2.275-.58.295-1.081.528-1.572.739.767 1.991 1.858 3.292 3.26 3.292 1.439 0 2.551-1.372 3.321-3.452-.485-.201-.997-.431-1.581-.719-.6 1.665-1.298 2.415-1.74 2.415zm-4.708-2.216c-1.917.705-4.778 1.392-5.916-.317-.562-.845-.771-2.468 1.42-5.408.582-.78 1.254-1.545 1.937-2.249 1.531-1.554 3.256-3.05 5.505-4.598-1.083-.596-2.264-1.166-3.416-1.591-1.18-.434-2.219-.675-3.015-.675-.508 0-.886.107-1.009.289-.131.192-.138.783.445 1.842l.21-.012c1.048 0 1.897.865 1.897 1.932s-.85 1.932-1.897 1.932-1.897-.865-1.897-1.932c0-.345.089-.669.246-.95-1.11-1.96-.881-3.139-.419-3.815.324-.476 1.009-1.042 2.424-1.042 2.514 0 5.901 1.66 8.082 2.946 2.214-1.363 5.717-3.16 8.304-3.16 1.421 0 2.106.581 2.431 1.069.562.845.771 2.468-1.42 5.407-3.084 4.137-9.216 8.606-13.912 10.332zm12.538-11.394c1.506-2.019 1.552-3.082 1.366-3.361-.126-.189-.492-.298-1.003-.298-1.953 0-4.926 1.459-6.638 2.447 1.265.837 2.445 1.719 3.522 2.617-.407.413-.834.819-1.271 1.211-1.195-.984-2.523-1.947-3.9-2.811-1.581 1.037-3.173 2.254-4.603 3.551 1.075.951 2.356 1.949 3.721 2.873-.522.331-1.05.648-1.652.98l-.013-.009c-1.144-.811-2.271-1.701-3.316-2.632-2.818 2.878-3.612 4.964-3.239 5.525.126.189.492.298 1.003.298 2.35 0 6.08-2.017 8.287-3.464 2.709-1.776 5.799-4.328 7.736-6.927zm2.377 7.091c.141-.27.22-.577.22-.903 0-1.067-.849-1.932-1.897-1.932s-1.897.865-1.897 1.932.849 1.932 1.897 1.932l.258-.018c.553 1.024.544 1.598.415 1.787-.124.181-.501.288-1.009.288-1.602 0-3.833-.945-5.27-1.658-.48.342-1.077.748-1.659 1.119 1.926 1.037 4.758 2.295 6.929 2.295 1.415 0 2.1-.566 2.424-1.042.461-.674.69-1.85-.411-3.8z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Workflows</div>
              </sidebar-item>
              <sidebar-item route="dashboard.team">
                <div class="flex justify-center"> 
                  <span class="sr-only">Team</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Team</div>
              </sidebar-item>
              <sidebar-item route="dashboard.support">
                <div class="flex justify-center"> 
                  <span class="sr-only">Support</span>
                  <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                      <path d="M3.848 19h-.848c-.796 0-1.559-.316-2.121-.879-.563-.562-.879-1.325-.879-2.121v-3c0-7.175 5.377-13 12-13s12 5.825 12 13v3c0 .796-.316 1.559-.879 2.121-.562.563-1.325.879-2.121.879h-.848c-2.69 4.633-6.904 5-8.152 5-1.248 0-5.462-.367-8.152-5zm16.152-5.876c-.601.236-1.269-.18-1.269-.797 0-.304-.022-.61-.053-.915-1.761-.254-3.618-1.926-3.699-3.723-1.315 2.005-4.525 4.17-7.044 4.17 1.086-.699 1.839-2.773 1.903-3.508-.581 1.092-2.898 3.136-4.551 3.487l-.018.489c0 .619-.669 1.032-1.269.797v3.771c.287.256.632.464 1.041.594.225.072.412.224.521.424 2.206 4.046 5.426 4.087 6.438 4.087.929 0 3.719-.035 5.877-3.169-1.071.433-2.265.604-3.759.653-.37.6-1.18 1.016-2.118 1.016-1.288 0-2.333-.784-2.333-1.75s1.045-1.75 2.333-1.75c.933 0 1.738.411 2.112 1.005 1.9-.026 4.336-.334 5.888-2.645v-2.236zm-11-.624c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm6 0c.686 0 1.243.672 1.243 1.5s-.557 1.5-1.243 1.5-1.243-.672-1.243-1.5.557-1.5 1.243-1.5zm5.478-1.5h1.357c-.856-5.118-4.937-9-9.835-9-4.898 0-8.979 3.882-9.835 9h1.357c.52-4.023 3.411-7.722 8.478-7.722s7.958 3.699 8.478 7.722z"/>
                  </svg>
                </div> 
                <div class="block text-center text-xs mt-2">Support</div>
              </sidebar-item>
              <sidebar-item route="dashboard.profile">
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
          </nav>
          <div class="flex flex-col mx-2 my-6 pt-3 space-y-4 border-t border-gray-600">
              <sidebar-item route="settings.billing">
                <div class="flex justify-center my-2"> 
                  <span class="sr-only">Settings</span>
                  <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
              </sidebar-item>
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
  
  computed: {
    isSideMenuOpen () {
      return this.$store.getters['main/sidebarOpen']
    }
  },

  // mounted() {
    // console.log(this.$store.getters['main/sidebarOpen']) // false
    // this.$store.dispatch('main/toggleSidebar')
    // console.log(this.$store.getters['main/sidebarOpen']) // true
    // this.$store.dispatch('main/toggleSidebar')
    // console.log(this.$store.getters['main/sidebarOpen']) // false
  // },

  methods: {
    toggleSidebar () {
      // console.log('toggledSidebar')
      this.$store.dispatch('main/toggleSidebar')
    }
  }
}
</script>

<style scoped>

</style>
