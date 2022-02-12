<template>
  <div class="h-full">
    <navbar></navbar>
    
    <child />

    <footer-home></footer-home>
  </div>
</template>

<script>
import Navbar from '~/components/home/SimpleNavbar'
import FooterHome from '~/components/home/SimpleFooter'

export default {
  name: 'SimpleLayout',

   components: {
    Navbar,
    FooterHome,
  },
}
</script>
