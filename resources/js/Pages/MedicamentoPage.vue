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

        <section class="medicamento">
            <img class="img_medicamento" src="../../img/DolexGripa.png" alt="#">
            <div class="info_medicamento">
                <h1>Dolex Gripa</h1>
                <div class="puntuacion">
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <i class="bi bi-star-fill star_icon"></i>
                    <p>5.0 (85)</p>
                </div>
                <h2>$12.200</h2>
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
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
                <div class="row_type2">
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
                <div class="row_type1">
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
                <div class="row_type2">
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
                <div class="row_type1">
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
                <div class="row_type2">
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
                <div class="row_type1">
                    <p class="categorie">Lorem Ipsum: </p>
                    <p>dolor sit amet</p>
                </div>
            </div>
            <div class="descripcion">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dictum augue. Sed enim orci, feugiat sit amet consectetur sit amet, dictum eu lacus. Maecenas id risus at tellus euismod suscipit fringilla et mauris. Nulla facilisi. Nullam id sem eget velit gravida faucibus et nec orci. Pellentesque tellus nibh, mattis at pellentesque sed, mollis in sapien. Curabitur consectetur vulputate libero, ac maximus ipsum vulputate a. Nulla a ante et mauris hendrerit egestas eu vitae sapien. Phasellus a magna nulla. Duis dignissim at velit sit amet scelerisque. Vivamus interdum lectus id vestibulum blandit. Aliquam in erat dapibus, aliquam metus sed, blandit dui. Proin sit amet mi mollis, blandit libero in, fringilla orci. Pellentesque euismod nisl vel lacus fermentum, varius gravida ex fermentum. In risus elit, mollis nec leo eget, maximus fringilla risus.</p>
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
                console.log(value);
                value = value - 1;
                quantity.value = value;
                if(value <= 1){
                    minus.style.backgroundColor = 'rgba(163, 43, 43, 0.76)'
                    value = 1;
                    quantity.value = value;
                }

            }
        }
    }
</script>

<style scoped>
    @import url('../../css/MedicamentoPage.css');
</style>