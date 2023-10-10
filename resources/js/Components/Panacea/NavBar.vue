<script setup>
    import {
        Link
    } from '@inertiajs/vue3';
    import { onUpdated, ref } from 'vue';

    defineProps({

    });

    var quantityProduts = ref(localStorage.getItem('quantityProduts') || 0);


    onUpdated(() => {
      if (localStorage.getItem('quantityProduts')) {
        console.log(localStorage.getItem('quantityProduts'));
        var quantityProduts = ref(localStorage.getItem('quantityProduts')); 
      };
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
        <Link class="login"
        :href="route('login')"
        style="text-decoration: none;"
        v-if="!authUser"  
        >
          <p class="texto_login">Login</p>
          <p class="texto_login texto_nombre">{{ Nombre }}</p>
          <i class="bi bi-person-circle login_icon"></i>
        </Link>
        <Link class="login"
        :href="route('hubController')"
        style="text-decoration: none;"
        v-else
        >
          <p class="texto_login texto_nombre">{{ Nombre }}</p>
          <i class="bi bi-person-circle login_icon"></i>
        </Link>
      </div>

        <div class="shop_container">
          <button class="shoppingcart" style="border: none;"> 
            <Link href="/carrito" style="display: inline;">
              <i class="bi bi-cart-fill shop_icon"></i>
            </Link>
        </button>
          <div class="counter">
              <p class="quant">{{quantityProduts}}</p>
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
    data(){
      return {
            persona:[],
            Nombre: "",
            authUser
        };
    },
    methods: {
      logout(){
        window.location.reload();
      }
    },
    mounted(){
      axios.get('/userAutenticate')
      .then((response) => {
          this.persona = response.data.persona;
          if(this.persona.Nombre_Persona){
            const nombreCompleto = this.persona.Nombre_Persona;
            const nombreDividido = nombreCompleto.split(' ');
            this.Nombre = nombreDividido[0];
          }
          this.authUser = response.data.authUser;
      })
      .catch((error) => {
          console.log(error);
      });
    }
}
</script>

<style scoped>

  @import url('../../../css/Navbar.css');
</style>