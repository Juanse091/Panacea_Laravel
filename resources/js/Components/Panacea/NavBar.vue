<script setup>
    import {
        Link
    } from '@inertiajs/vue3';

    defineProps({

    });
</script>
<template>
  <header>
    <div class="logo">
      <img src="../../../img/LogoPanaceaNova.png" alt="#">
    </div>

    <div class="nav">
      <div class="search_container">
        <input type="text" class="search_bar" maxlength="45">
        <i class="bi bi-search search_icon"></i>
      </div>
    </div>

    <div class="log">
      <div class="login_container">
        <button class="login" style="border: none;">
          <p class="texto_login">Iniciar sesión</p>
          <i class="bi bi-person-circle login_icon"></i>
        </button>
      </div>

        <div class="shop_container">
          <button class="shoppingcart" style="border: none;"> 
            <Link href="/carrito" style="display: inline;">
              <i class="bi bi-cart-fill shop_icon"></i>
            </Link>
        </button>
          <div class="counter">
              <p class="quant">0</p>
          </div>
        </div>
    </div>

  </header>
  <div class="division"></div>

</template>

<script>

  export default {
    name: 'NavBar',
    props: {},
}
</script>

<style scoped>

  @import url('../../../css/Navbar.css');
</style>