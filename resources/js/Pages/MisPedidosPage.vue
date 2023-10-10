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
        <Link to="/" style="text-decoration: none;">
            <BackButton></BackButton>
        </Link>

        <h1 class="mpedidos_title">MIS PEDIDOS</h1>

        <Pedidos></Pedidos>
        <Pedidos></Pedidos>
    </PanaceaLayout>
</template>

<script>
import BackButton from '../Components/Panacea/BackButton.vue'
import Pedidos from '../Components/Panacea/Pedidos.vue'
export default {
    props: {},
    components: {
        BackButton,
        Pedidos,
    }
}
</script>

<style scoped>
@import '../../css/MisPedidos.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}
</style>