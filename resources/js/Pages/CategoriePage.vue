<script setup>
import {
    Head,
    Link
} from '@inertiajs/vue3';

import PanaceaLayout from '../Layouts/PanaceaLayout.vue';

defineProps({
    productos: Object,
})

</script>
<template>
    <PanaceaLayout>
        <Link href="/" style="text-decoration: none;">
        <BackButton></BackButton>
        </Link>

        <h1 class="categorie_title">MEDICAMENTOS</h1>

        <section class="content">

            <section class="filtros">
                <h2>Filtros</h2>
                <div class="catg" v-for="(section, sectionIndex) in sections" :key="sectionIndex">
                    <div class="catg_title" v-on:click="expandFilter(sectionIndex)">
                        <h3>{{ section.title }}</h3>
                        <i class="bi bi-caret-right-fill" v-if="!section.expanded"></i>
                        <i class="bi bi-caret-down-fill" v-else></i>
                    </div>
                    <div class="catg_opciones" v-bind:style="{ display: section.expanded ? 'block' : 'none' }">
                        <label v-for="(option, optionIndex) in section.options" :key="optionIndex">
                            <input type="radio" v-model="option.selected" :name="section.title"
                                :disabled="isOptionDisabled(sectionIndex, optionIndex)">
                            {{ option.label }}
                        </label>
                    </div>
                </div>
                <button class="filtro_btn" @click="limpiarFiltros">
                    <p>Limpiar Filtros</p>
                </button>
            </section>
            <section class="display_productos">
                <div class="products_container">
                    <swiper :slidesPerView="3" :grid="{ rows: 2, }" :spaceBetween="30" :pagination="{type: 'fraction',}"
                        :modules="modules" 
                        :navigation="{nextEl: '.swiper-button-next.custom-button', prevEl: '.swiper-button-prev.custom-button'}"
                        class="mySwiper">
                        <div class="swiper-button-next custom-button"></div>
                        <div class="swiper-button-prev custom-button"></div>
                        <swiper-slide v-for="producto in productos" key="producto.id">
                            <product :nombre="producto.Nombre_Producto" :img="producto.Imagen_Prod"
                                :precio="producto.Valor_Unitario" :id="producto.Codigo_Producto"></product>
                        </swiper-slide>
                    </swiper>
                </div>
            </section>
        </section>
    </PanaceaLayout>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/grid';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// import required modules
import {Navigation, Grid, Pagination } from 'swiper/modules';

import BackButton from '@/Components/Panacea/BackButton.vue';
import Producto from '@/Components/Panacea/Producto.vue';
import product from '@/Components/Panacea/Producto.vue'


export default {
    props: {},
    components: {
        BackButton,
        Producto,
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            sections: [{
                title: "Marcas",
                expanded: false,
                options: [{
                    label: "Marca 1",
                    selected: false
                },
                {
                    label: "Marca 2",
                    selected: false
                },
                    // Agrega más opciones según sea necesario
                ],
            },
            {
                title: "Categoria",
                expanded: false,
                options: [{
                    label: "Categoría 1",
                    selected: false
                },
                {
                    label: "Categoría 2",
                    selected: false
                },
                    // Otras opciones de categoría
                ],
            },
            {
                title: "Presentación",
                expanded: false,
                options: [{
                    label: "Presentación 1",
                    selected: false
                },
                {
                    label: "Presentación 2",
                    selected: false
                },
                    // Otras opciones de presentación
                ],
            }
            ]
        };
    },
    methods: {
        handleOptionChange(sectionIndex, optionIndex) {
            // Cuando se selecciona una opción en una sección,
            // deselecciona todas las opciones en las otras secciones.
            for (let i = 0; i < this.sections.length; i++) {
                if (i !== sectionIndex) {
                    this.sections[i].options.forEach((option) => {
                        option.selected = false;
                    });
                }
            }
        },
        isOptionDisabled(sectionIndex, optionIndex) {
            // Comprueba si una opción debe estar desactivada en función de si se ha seleccionado una opción en la misma sección.
            if (this.sections[sectionIndex].options[optionIndex].selected) {
                return false; // No está deshabilitada
            }
            // Si no se ha seleccionado una opción en esta sección, comprueba si se ha seleccionado en alguna otra sección.
            for (let i = 0; i < this.sections.length; i++) {
                if (i !== sectionIndex) {
                    for (const option of this.sections[i].options) {
                        if (option.selected) {
                            return true; // Deshabilitada
                        }
                    }
                }
            }
            return false; // No está deshabilitada

        },
        limpiarFiltros() {
            // Deselecciona todas las opciones en todas las secciones
            for (let i = 0; i < this.sections.length; i++) {
                this.sections[i].options.forEach((option) => {
                    option.selected = false;
                });
            }
            // Habilita todas las opciones deshabilitadas
            for (let i = 0; i < this.sections.length; i++) {
                for (const option of this.sections[i].options) {
                    option.disabled = false;
                }
            }
        },
        expandFilter(sectionIndex) {
            // Cambia el estado expandido de la sección de filtros correspondiente
            this.sections[sectionIndex].expanded = !this.sections[sectionIndex].expanded;
        },

    },
    setup() {
        return {
            modules: [Grid, Pagination, Navigation],
        };
    },
};

</script>

<style scoped>
@import '../../css/CategoriePage.css';
</style>
