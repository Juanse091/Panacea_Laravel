<script setup>
    import {
        Head,
        Link
    } from '@inertiajs/vue3';

    import PanaceaLayout from '../Layouts/PanaceaLayout.vue'

    defineProps({

    });
</script>
<template>
    <PanaceaLayout>

        <Link href="/" style="text-decoration: none;"> 
            <BackButton></BackButton>
        </Link>
        
        <h1 class="cart_title">CARRITO</h1>
        <section class="resumen">
            <div class="cart_producto">
                <div class="container_img_info">
                    <img class="cart_img_producto" src="../../img/Mastercard_logo.png" alt="#">
                    <div class="cart_info">
                        <h2>Dolex Gripa</h2>
                        <h3>$12.200</h3>
                    </div>
                </div>
                <div class="container_cantidad_trash">
                    <div class="cart_cantidad">
                        <i class="bi bi-dash cart_minus_icon"></i>
                        <input type="text" class="cart_quantity" maxlength="45" value="1">
                        <i class="bi bi-plus-lg cart_plus_icon"></i>
                    </div>
                    <i class="bi bi-trash-fill cart_trash_icon"></i>
                </div>
            </div>
        </section>

        <div class="cart_line_container">
            <hr class="cart_line_div">
        </div>

        <section class="cart_pago">
            <h2>Subtotal</h2>
            <div class="container_precio_pagar">
                <h2>$36.600</h2>
                <button class="cart_checkout">
                    <p>IR AL CHECKOUT</p>
                </button>
            </div>
        </section>

    </PanaceaLayout>
</template>

<script>
    import BackButton from '@/Components/Panacea/BackButton.vue'
    export default {
        name: 'CarritoPage',
        props: {},
        components: {
            BackButton
        }
    }
</script>

<style scoped>
    @import '../../css/CarritoPage.css';

    .custom-font {
        font-family: 'Montserrat', sans-serif;
    }
</style>