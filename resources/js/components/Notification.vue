<template>
  <div v-if="active" class="w-full flex p-4 bg-green-100 text-green-600 font-semibold text-sm rounded mb-6">
    <div class="bg-green-600 h-4 w-4 rounded-full text-2xs flex my-auto">
      <!-- <fa :icon="['fas', 'check']" class="text-white m-auto" /> -->
      <svg fill="currentColor"
              viewBox="0 0 20 20"
              class="h-4 w-4 text-white m-auto">
          <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
      </svg>
    </div>
    <h2 class="px-3">
      <slot />
    </h2>
    <!-- <fa :icon="['fas', 'times']" class="text-green-600 opacity-50 hover:opacity-100 transition-all ease-in-out duration-100 my-auto ml-auto cursor-pointer"
        @click="dismiss()"
    /> -->
  </div>
</template>

<script>
export default {
  name: 'Notification',
  data: () => ({
    active: false
  }),
  methods: {
    show () {
      this.active = true
    },
    dismiss () {
      this.active = false
    }
  }
}
</script>
