<script setup>
import {
    Head,
    Link,
    useForm
} from '@inertiajs/vue3';

import PanaceaLayout from '../Layouts/PanaceaLayout.vue';
import { onMounted, ref } from 'vue'
import axios from 'axios'


const define = defineProps({
    id: Object,
    producto: Object,
    nombreCategoria: Object,
    nombreTipo: Object,
    existencia: Object,
});

const persona = ref(null)
const authUser = ref(null)
const Nombre = ref(null)
var nombre = define.producto.Nombre_Producto;
var precio = define.producto.Valor_Unitario;
var url = define.producto.Imagen_Prod;
var cantidad = 1;
let path = window.location.pathname;
var id = path.split('=').pop();

function plus(existencia) {
    const quantity = document.getElementById('quantity')
    let value = parseInt(quantity.value);
    const minus = document.getElementById('minus');
    const plus = document.getElementById('plus');
    value = value + 1;
    quantity.value = value;
    if (value > 1) {
        minus.style.backgroundColor = '#A32B2B'
    };
    if (value >= existencia) {
        plus.style.backgroundColor = 'rgba(163, 43, 43, 0.76)'
        quantity.value = existencia;

    };
    cantidad = quantity.value;
};

function minus(existencia) {
    const quantity = document.getElementById('quantity')
    let value = parseInt(quantity.value);
    const minus = document.getElementById('minus');
    const plus = document.getElementById('plus');
    value = value - 1;
    quantity.value = value;
    if (value <= 1) {
        minus.style.backgroundColor = 'rgba(163, 43, 43, 0.76)'
        value = 1;
        quantity.value = value;
    };
    if (value < existencia) {
        plus.style.backgroundColor = '#A32B2B'
    };
    cantidad = quantity.value;
};

function back() {
    window.history.back();
};




onMounted(() => {
  axios.get('/userAutenticate')
    .then((response) => {
        persona.value = response.data.persona;
        if(persona.value.Nombre_Persona){
          const nombreCompleto = persona.value.Nombre_Persona;
          const nombreDividido = nombreCompleto.split(' ');
          Nombre.value = nombreDividido[0];
        }
        authUser.value = response.data.authUser;
    })
    .catch((error) => {
        console.log(error);
    });
})


function OnSudmit() {
    if(authUser.value){
        let quantProdcts = parseInt(localStorage.getItem('quantityProduts')) || 0;
        quantProdcts = quantProdcts + 1;
        localStorage.setItem('quantityProduts', quantProdcts.toString());

        let productList = JSON.parse(localStorage.getItem('productList')) || [];
        productList.push({ id: id, nombre: nombre,quantity: cantidad, imagen: url, valor: precio});
        localStorage.setItem('productList', JSON.stringify(productList));
        console.log(localStorage.getItem('productList'));
    }else{
        //!RECORDAR: Redirigir al inicio de sesion
    }



};



</script>
<template>
    <PanaceaLayout>

        <Head :title="`${producto.Nombre_Producto}`" />

        <Link href="#" @click="back()" style="text-decoration: none;">
        <BackButton></BackButton>
        </Link>

        <form action="" @submit.prevent="OnSudmit">
            <section class="medicamento">
                <img class="img_medicamento" :src="`${producto.Imagen_Prod}`" alt="#">
                <div class="info_medicamento">
                    <h1>{{ producto.Nombre_Producto }}</h1>
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
                        <i class="bi bi-dash minus_icon" id="minus" @click="minus(existencia)"></i>
                        <input id="quantity" type="text" class="quantity" readonly maxlength='45' value="1">
                        <i class="bi bi-plus-lg plus_icon" id="plus" @click="plus(existencia)"></i>
                    </div>
                    <button class="comprar">
                        <p>Agregar al carrito</p>
                    </button>
                </div>
            </section>
        </form>

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
import { onMounted } from 'vue';
export default {
    props: {},
    components: {
        BackButton
    },
    methods: {

    }
}
</script>

<style scoped>
@import url('../../css/MedicamentoPage.css');
</style>