<script setup></script>

<template>
  
  <main>
    <NavBar></NavBar>
        <slot />
    <Footer></Footer>
  </main>


</template>

<script>
    import NavBar from '@/Components/Panacea/NavBar.vue'
    import Footer from '../Components/Panacea/Footer.vue'
    export default {
        props: {},
        components: {
            NavBar,
            Footer
        }
    }
</script>

<style>
*{
  margin: 0;
  padding: 0;
}
</style>