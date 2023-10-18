<script setup>
    import {
        Head,
        Link,
    } from '@inertiajs/vue3';
</script>
<template>
    <div class="pagoexitoso">
        <i class="bi bi-check-circle-fill compra_check"></i>
        <h1>Su compra ha sido realizada con exito</h1>
        <Link class="volver" :href="route('homepage')" style="text-decoration: none;">
            <h2>Regresar al inicio</h2> 
        </Link>
    </div>
</template>


<style scoped>
@import '../../css/PagoExitosoPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}
</style>