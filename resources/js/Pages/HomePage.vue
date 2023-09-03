
    <script setup>
            import {Head,Link} from '@inertiajs/vue3';

            import PanaceaLayout from '../Layouts/PanaceaLayout.vue'
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
                <div class="arrow_container">
                    <i class="bi bi-chevron-compact-left arrow"></i>
                </div>
                <article class="categories">
                    <img src="../../img/medicamentos.png" alt="">
                    <p class="txt_categorie"> Categoria 1 </p>
                </article>
                <article class="categories">
                    <img src="../../img/medicamentos.png" alt="">
                    <p class="txt_categorie"> Categoria 2 </p>
                </article>
                <article class="categories display_none">
                    <img src="../../img/medicamentos.png" alt="">
                    <p class="txt_categorie"> Categoria 3 </p>
                </article>
                <article class="categories display_none">
                    <img src="../../img/medicamentos.png" alt="">
                    <p class="txt_categorie"> Categoria 4 </p>
                </article>
                <div class="arrow_container">
                    <i class="bi bi-chevron-compact-right arrow"></i>
                </div>
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
                    @autoplayTimeLeft="onAutoplayTimeLeft"
                    class="mySwiper"
                >
                    <swiper-slide class="product">
                        <img src="../../img/Acetaminofen.png" alt="">
                        <hr>
                        <p>Acetaminofén</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>$16.500</p>
                        <Link href="/medicamentos" class="btn_buy">
                        Comprar
                        </Link>
                    </swiper-slide>
                    <swiper-slide class="product">
                        <img src="../../img/Olmetec.png" alt="">
                        <hr>
                        <p>Olmetec 20mg</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>$24.350</p>
                        <Link href="/medicamentos" class="btn_buy">
                        Comprar
                        </Link>
                    </swiper-slide>
                    <swiper-slide class="product">
                        <img src="../../img/DolexGripa.png" alt="">
                        <hr>
                        <p>Dolex gripa</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>$12.200</p>
                        <Link href="/medicamentos" class="btn_buy">
                        Comprar
                        </Link>
                    </swiper-slide>
                    <swiper-slide class="product">
                        <img src="../../img/Acetaminofen.png" alt="">
                        <hr>
                        <p>Acetaminofén</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>$16.500</p>
                        <Link href="/medicamentos" class="btn_buy">
                        Comprar
                        </Link>
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
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';

  // Import Swiper styles
  import 'swiper/css';

  import 'swiper/css/pagination';
  import 'swiper/css/navigation';

  // import required modules
  import {Navigation } from 'swiper/modules';

  export default {
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Navigation],
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
