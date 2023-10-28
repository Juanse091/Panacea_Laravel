<script setup>
    import {Link} from '@inertiajs/vue3';
</script>
<template>
    <footer>
        <section class="informacion">
            <div class="nosotros">
                <h2 class="info_titles">Nosotros</h2>

                    <Link href="/quienes_somos" class="info_text"> 
                        <p>¿Quienes Somos?</p> 
                    </Link>

                    <Link href="/preguntas" class="info_text"> 
                        <p>Preguntas Frecuentes</p> 
                    </Link>

                    <Link href="/politicas" class="info_text">
                        <p>Politicas</p>
                    </Link>
            </div>
            <div class="contactanos">
                <h2 class="info_titles">Contáctanos</h2>
                <p class="info_text">panaceanova@gmail.com</p>
                <p class="info_text">+57 3228324910</p>
            </div>
            <div class="encuentranos">
                <h2 class="info_titles">Encuéntranos</h2>
                <a href="https://www.google.com/maps/search/Cra.+68c+Bis+A+%2337b+Sur-74+a+37b+Sur-2+Bogot%C3%A1+-+Colombia/@4.6043726,-74.1378526,17z/data=!3m1!4b1?entry=ttu" style="text-decoration: none;">
                    <p class="info_text">Cra. 68c Bis A #37b Sur-74 a 37b Sur-2 <br> Bogotá - Colombia</p>
                </a>
            </div>
        </section>

        <section class="redes_sociales">
            <div class="red_social">
                <img src="../../../svg/facebook.svg" alt="">
            </div>
            <div class="red_social">
                <img src="../../../svg/twitter.svg" alt="">
            </div>
            <div class="red_social">
                <img src="../../../svg/youtube.svg" alt="">
            </div>
            <div class="red_social">
                <img src="../../../svg/instagram.svg">
            </div>
        </section>
        
        <section class="metodos_pago">
            <div class="metodo">
                <img src="../../../img/Visa_logo.png" alt="#" class="visa">
            </div>
            <div class="metodo">
                <img src="../../../img/Mastercard_logo.png" alt="#" class="master">
            </div>
            <div class="metodo">
                <img src="../../../img/pse_logo.png" alt="#" class="pse">
            </div>
            <div class="metodo">
                <img src="../../../img/PayPal_logo.png" alt="#" class="paypal">
            </div>
            <div class="metodo">
                <img src="../../../img/Mercadopago_logo.png" alt="#" class="mercado">
            </div>
        </section>
    </footer>
</template>

<script>
  export default {
    name: 'Footer',
    props: {}
  }
</script>

<style scoped>
  @import url('../../../css/Footer.css');
</style>