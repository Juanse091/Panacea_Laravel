<script setup>
    import {
        Head,
        Link
    } from '@inertiajs/vue3';

    import PanaceaLayout from '../Layouts/PanaceaLayout.vue'

    defineProps({
        id: Object,
        producto: Object,
        nombreCategoria: Object,
        nombreTipo: Object,
    });
</script>
<template>
    <PanaceaLayout>
        <Head :title="`${producto.Nombre_Producto}`" />

        <Link href="#" @click="back()" style="text-decoration: none;"> 
            <BackButton></BackButton>
        </Link>

        <section class="medicamento">
            <img class="img_medicamento" :src="`${producto.Imagen_Prod}`" alt="#">
            <div class="info_medicamento">
                <h1>{{ producto.Nombre_Producto}}</h1>
                <div class="puntuacion">
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <p>5.0 (85)</p>
                </div>
                <h2>${{ producto.Valor_Unitario }}</h2>
                <div class="cantidad">
                    <i class="bi bi-dash minus_icon" id="minus" @click="minus()"></i>
                    <input id="quantity" type="text" class="quantity" maxlength="45" value="1">
                    <i class="bi bi-plus-lg plus_icon" id="plus" @click="plus()"></i>
                </div>
                <button class="comprar">
                    <p>Agregar al carrito</p>
                </button>
            </div>
        </section>

        <div class="line_container">
            <hr class="line_div">
        </div>

        <div class="fichatitle_container">
            <h2 class="ficha_title">Ficha Tecnica</h2>
        </div>

        <section class="ficha_tecnica">
            <div class="tabla_tecnica">
                <div class="row_type1">
                    <p class="categorie">Marca: </p>
                    <p>{{ producto.Marca }}</p>
                </div>
                <div class="row_type2">
                    <p class="categorie">Pais: </p>
                    <p>{{ producto.Pais_Produccion }}</p>
                </div>
                <div class="row_type1">
                    <p class="categorie">Cantidad: </p>
                    <p>{{ producto.Cantidad }}</p>
                </div>
                <div class="row_type2">
                    <p class="categorie">Público: </p>
                    <p>{{ producto.Publico }}</p>
                </div>
                <div class="row_type1">
                    <p class="categorie">Categoria: </p>
                    <p>{{ nombreCategoria }}</p>
                </div>
                <div class="row_type2">
                    <p class="categorie">Tipo: </p>
                    <p>{{ nombreTipo }}</p>
                </div>
            </div>
            <div class="descripcion">
                <p>{{ producto.Descripcion_Producto }}</p>
            </div>
        </section>
    </PanaceaLayout>
</template>

<script>
    import BackButton from '@/Components/Panacea/BackButton.vue';
    export default {
        props: {},
        components: {
            BackButton
        },
        methods:{
            plus(){
                const quantity = document.getElementById('quantity')
                let value = parseInt(quantity.value);
                const minus = document.getElementById('minus');
                value = value + 1;
                quantity.value = value;
                if(value > 1){
                    minus.style.backgroundColor = '#A32B2B'
                }
            },
            minus(){
                const quantity = document.getElementById('quantity')
                let value = parseInt(quantity.value);
                const minus = document.getElementById('minus');
                value = value - 1;
                quantity.value = value;
                if(value <= 1){
                    minus.style.backgroundColor = 'rgba(163, 43, 43, 0.76)'
                    value = 1;
                    quantity.value = value;
                }

            },
            back(){
            window.history.back();
            }
        }
    }
</script>

<style scoped>
    @import url('../../css/MedicamentoPage.css');
</style>