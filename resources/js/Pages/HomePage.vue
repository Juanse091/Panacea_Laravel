
    <script setup>
            import {Head,Link} from '@inertiajs/vue3';

            import PanaceaLayout from '../Layouts/PanaceaLayout.vue';

            defineProps({
                
            })
    </script>

<template>

    <Head title="Welcome"></Head>
    <PanaceaLayout>
        <section class="ads">
            <img src="../../img/Publicidad1.jpg" alt="#">
        </section>
        <section class="categories_section">
            <h2 class="custom-font title">CATEGORIAS</h2>
            <div class="categories_container">
                <swiper
                    :slidesPerView="3"
                    :spaceBetween="50"
                    :pagination="{
                        clickable: true,
                    }"
                    :navigation="{nextEl: '.swiper-button-next.custom-button', prevEl: '.swiper-button-prev.custom-button'}"
                    :breakpoints="{
                        '600': {
                            slidesPerView: 3,
                        },
                        '100': {
                            slidesPerView: 1,
                        }
                    }"
                    :modules="modules"
                    class="mySwiper"
                >
                <div class="swiper-button-next custom-button"></div>
                <div class="swiper-button-prev custom-button"></div>
                
                    <swiper-slide  v-for="categoria in categorias" key="categoria.ID">
                        <categorie :nombre="categoria.Nombre_Categoria"></categorie>
                    </swiper-slide>
                </swiper>
            </div>
        </section>

        <section class="featured_section">
            <h2 class="title"> PRODUCTOS DESTACADOS</h2>
            <div class="fp_container">

                  <swiper
                    :slidesPerView="3"
                    :spaceBetween="50"
                    :navigation="true"
                    :breakpoints="{
                        '600': {
                            slidesPerView: 3,
                        },
                        '100': {
                            slidesPerView: 1,
                        }
                    }"
                    :modules="modules"
                    class="mySwiper"
                >
                    <swiper-slide v-for="producto in productos" key="producto.id">
                        <product :nombre="producto.Nombre_Producto"  :precio="producto.Precio" :id="producto.Codigo"></product>
                    </swiper-slide>
                    <swiper-slide class="product" v-for="producto in productos" key="producto.id">
                        <product :nombre="producto.Nombre_Producto"  :precio="producto.Precio"></product>
                    </swiper-slide>
                </swiper>
            </div>
        </section>

        <section class="partners_section">
            <h2 class="title">NUESTROS SOCIOS</h2>
            <div class="partners_container">
                <article class="partners"><img src="../../img/Logo.png" alt=""> </article>
                <article class="partners"><img src="../../img/Aliados2.jpg" alt=""> </article>
                <article class="partners display_none"><img src="../../img/Aliados4.jpg" alt=""> </article>
                <article class="partners display_none"><img src="../../img/Aliados3.png" alt=""> </article>
            </div>
        </section>
    </PanaceaLayout>
</template>

<script>
  import { Swiper, SwiperSlide } from 'swiper/vue';
  import 'swiper/css';
  import 'swiper/css/pagination';
  import 'swiper/css/navigation';
  import {Navigation, Pagination } from 'swiper/modules';
  import product from '@/Components/Panacea/Producto.vue'
  import categorie from '@/Components/Panacea/CategorieBox.vue'
  
  import axios from 'axios';
  export default {
    data(){
        return {
            productos:[],
            categorias:[]
        }
    },
    mounted() {

        axios.get('/productosDest')
        .then((response) => {
            this.productos = response.data.productos_destacados;
            this.categorias = response.data.categorias;
        });
    },
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Navigation, Pagination],
      };
    },
  };
</script>

<style scoped>
    @import '../../css/HomePage.css';

    .custom-font {
        font-family: 'Montserrat', sans-serif;
    }
    

</style>
