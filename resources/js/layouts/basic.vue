<template>
  <div>
    <navbar></navbar>
    
    <child />

    <cookies></cookies>

    <footer-home></footer-home>
  </div>
</template>

<script>
import Navbar from '~/components/home/Navbar'
import FooterHome from '~/components/home/Footer'
import Cookies from '~/components/home/Cookies'

export default {
  name: 'BasicLayout',

   components: {
    Navbar,
    FooterHome,
    Cookies,
  },
}
</script>
