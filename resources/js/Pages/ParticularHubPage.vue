<script setup>
    import {
        Link
    } from '@inertiajs/vue3';

    defineProps({

    });
</script>
<template>
    <NavBar></NavBar>

    <BackButton></BackButton>

    <section class="particularhub_opcion">

        <Link class="particularhub_card particularhub_envios" to="/MisPedidos">
            <h2>ENVIOS</h2>
            <p class="particularhub_description">REVISA TUS PEDIDOS Y EL STATUS DE ESTOS</p>
        </Link>

        <Link class="particularhub_card particularhub_logout" :href="route('logout')" method="POST">
            <h2>SALIR</h2>
            <p class="particularhub_description">CIERRA TU SESIÓN</p>
        </Link>

    </section>

    <Footer></Footer>
</template>

<script>
import NavBar from '@/Components/Panacea/NavBar.vue'
import Footer from '@/Components/Panacea/Footer.vue'
import BackButton from '@/Components/Panacea/BackButton.vue'
export default {
    name: 'ParticularHubPage',
    props: {},
    components: {
        NavBar,
        Footer,
        BackButton,
    }
}
</script>

<style scoped>
@import '../../css/ParticularHubPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}
</style>