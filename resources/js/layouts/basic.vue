<template>
  <div>
    <navbar></navbar>
    
    <child />

    <footer-home></footer-home>
  </div>
</template>

<script>
import Navbar from '~/components/home/Navbar'
import FooterHome from '~/components/home/Footer'

export default {
  name: 'BasicLayout',

   components: {
    Navbar,
    FooterHome,
  },
}
</script>
