<script setup>
    import {
        Link
    } from '@inertiajs/vue3';

    defineProps({

    });
</script>

<template>
    <NavBar/>
        
    <BackButton></BackButton>


    
    <section class="adminhub_opcion">
        <div class="product_user_container">
            <router-link class="adminhub_card adminhub_productos" to="/ProductoAdminPage">
                <h2>PRODUCTOS</h2>
                <p class="adminhub_description">ADMINISTRA, AGREGA O ELIMINA PRODUCTOS</p>
            </router-link>

            <router-link class="adminhub_card adminhub_usuarios" to="/UsuarioAdminPage">
                <h2>USUARIOS</h2>
                <p class="adminhub_description">ADMINISTRA, AGREGA O ELIMINA USUARIOS</p>
            </router-link>
        </div>

        <div class="envios_logout_container">
            <router-link class="adminhub_card adminhub_envios" to="/UsuarioAdminPage">
                <h2>ENVIOS</h2>
                <p class="adminhub_description">ADMINISTRA Y CAMBIA DE STATUS LOS ENVIOS</p>
            </router-link>

            <Link class="adminhub_card particularhub_logout" :href="route('logout')" method="POST">
                <h2>SALIR</h2>
                <p class="adminhub_description">CIERRA TU SESIÓN</p>
            </Link>
        </div>
    </section>


    <Footer/>
</template>

<script>
import NavBar from '@/Components/Panacea/NavBar.vue'
import Footer from '@/Components/Panacea/Footer.vue'
import BackButton from '@/Components/Panacea/BackButton.vue'
import Loader from '@/Components/Panacea/Loader.vue'
export default {
    name: 'AdminHubPage',
    props: {},
    components: {
        NavBar,
        Footer,
        BackButton,
    },
    data() {
        return {
            loading: true
        }
    },
    mounted() {
        if (document.readyState === 'complete') {
            console.log("ya cargo");
            this.stopLoading();

        }
    },
    methods: {
        stopLoading() {
        this.loading = false;
        }
    },

    
}
</script>

<style scoped>
@import '../../css/AdminHubPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}


</style>