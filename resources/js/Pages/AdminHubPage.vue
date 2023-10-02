<script setup>
    import {
        Link
    } from '@inertiajs/vue3';

    import PanaceaLayout from '../Layouts/PanaceaLayout.vue'

    defineProps({

    });
</script>

<template>
    <PanaceaLayout>
        
    <BackButton></BackButton>


    
    <section class="adminhub_opcion">
        <div class="product_user_container">
            <Link class="adminhub_card adminhub_productos" :href="route('adminHUB.Productos')">
                <h2>PRODUCTOS</h2>
                <p class="adminhub_description">ADMINISTRA, AGREGA O ELIMINA PRODUCTOS</p>
            </Link>

            <Link class="adminhub_card adminhub_usuarios" href="/UsuarioAdminPage">
                <h2>USUARIOS</h2>
                <p class="adminhub_description">ADMINISTRA, AGREGA O ELIMINA USUARIOS</p>
            </Link>
        </div>

        <div class="envios_logout_container">
            <Link class="adminhub_card adminhub_envios" href="/UsuarioAdminPage">
                <h2>ENVIOS</h2>
                <p class="adminhub_description">ADMINISTRA Y CAMBIA DE STATUS LOS ENVIOS</p>
            </Link>

            <Link class="adminhub_card particularhub_logout" :href="route('logout')" method="POST">
                <h2>SALIR</h2>
                <p class="adminhub_description">CIERRA TU SESIÓN</p>
            </Link>
        </div>
    </section>


    </PanaceaLayout>
</template>

<script>
import BackButton from '@/Components/Panacea/BackButton.vue'
export default {
    name: 'AdminHubPage',
    props: {},
    components: {

        BackButton,
    },
    data() {
        return {
            loading: true
        }
    },
    mounted() {
    },
    methods: {
    },

    
}
</script>

<style scoped>
@import '../../css/AdminHubPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}


</style>