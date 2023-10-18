<script setup>
    import {
        Head,
        Link
    } from '@inertiajs/vue3';

    import { onMounted, ref } from 'vue'


    import PanaceaLayout from '../Layouts/PanaceaLayout.vue'


    var precio_Total= 0;
    var productos = JSON.parse(localStorage.getItem('productList'));
    console.log(productos);
    var precios = [];
    for (const key in productos) {
        let producto = productos[key];
        console.log(key);

        let precio = parseInt(producto.valor) * parseInt(producto.quantity);
        precio_Total = precio_Total + precio;

        precios.push(precio);
    }

    const removeProductFromCart = (index) => {
        let quantity = 0
        productos.splice(index, 1); // Elimina el producto del arreglo
        // También, actualiza el precio total y el arreglo de precios
        precio_Total -= precios[index];
        precios.splice(index, 1);
        // Además, actualiza el carrito en el almacenamiento local
        localStorage.setItem('productList', JSON.stringify(productos));
        quantity = parseInt(localStorage.getItem('quantityProduts'));
        quantity--;
        localStorage.setItem('quantityProduts', quantity.toString());
        
        location.reload();
    };    


</script>
<template>
    <PanaceaLayout>

        <Link href="/" style="text-decoration: none;">
        <BackButton></BackButton>
        </Link>

        <h1 class="cart_title">CARRITO</h1>

        <section class="resumen" v-for="(producto, index) in productos" :key="producto.id">
            <div class="cart_producto">
                <div class="container_img_info">
                    <img class="cart_img_producto" :src="`${producto.imagen}`" alt="#">
                    <div class="cart_info">
                        <h2>{{ producto.nombre }}</h2>
                        <h3>${{ precios[index] }}</h3>
                    </div>
                </div>
                <div class="container_cantidad_trash">
                    <div class="cart_cantidad">
                        <input type="text" class="cart_quantity" maxlength="45" readonly :value="`${producto.quantity}`">
                    </div>
                    <i class="bi bi-trash-fill cart_trash_icon" @click="removeProductFromCart(index)"></i>
                </div>
            </div>
        </section>

        <div class="cart_line_container">
            <hr class="cart_line_div">
        </div>

        <section class="cart_pago">
            <h2>Subtotal</h2>
            <div class="container_precio_pagar">
                <h2>$ {{ precio_Total }}</h2>
                <button class="cart_checkout" @click="CheckOut()">
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
    },
    methods: {
        CheckOut(){
            let quantity = parseInt(localStorage.getItem('quantityProduts'));
            if(quantity > 0){
                this.$inertia.visit('/checkout');
            }else{
                alert('No tienes ningun producto en el carrito!');
            }
        }
    }

}
</script>

<style scoped>
@import '../../css/CarritoPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}
</style>