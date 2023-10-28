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
        <Link href="#" @click="back()" style="text-decoration: none;"> 
            <BackButton></BackButton>
        </Link>
        
        <section class="politicas_container">
            <h1>Politica de protección de datos</h1>
            <p>Como empresa, en PanaceaNova Pharmacy nos comprometemos a cumplir con todas las disposiciones de la Ley 1581 de
                2012 y el Decreto 1081 de 2015 en Colombia, así como con otras regulaciones pertinentes relacionadas con la
                protección de datos personales. Esto incluye, entre otros aspectos, el deber de: </p>
                
                <ul>
                    <li>Obtener el consentimiento informado de los titulares de datos antes de la recopilación y el procesamiento de
                        sus datos personales. </li>
                        <li>Garantizar que los datos personales sean utilizados únicamente para los fines para los cuales fueron
                            recopilados. </li>
                            <li>Mantener la confidencialidad y la seguridad de los datos personales a través de medidas técnicas y
                                organizativas adecuadas. </li>
                                <li>Respetar los derechos de los titulares de datos, incluyendo el derecho de acceso, rectificación y supresión
                                    de datos. </li>
                                </ul>
                                
                                <p>Se implementarán medidas de seguridad técnicas y organizativas para proteger los datos personales contra el
            acceso no autorizado, la divulgación, la alteración o la destrucción. Esto incluirá la encriptación de datos, el
            control de acceso, la capacitación del personal y la gestión adecuada de contraseñas. </p>

            <p>Los titulares de datos tienen el derecho de acceder a sus datos personales, corregirlos, suprimirlos y oponerse
                al procesamiento. La Empresa facilitará el ejercicio de estos derechos de manera oportuna y efectiva. </p>
                
            </section>
    </PanaceaLayout>
</template>


<script>
import BackButton from '../Components/Panacea/BackButton.vue'
export default {
    components: {
        BackButton
    },
    methods: {
        back(){
            window.history.back();
        }
    }
}
</script>

<style scoped>
@import '../../css/PoliticasPage.css';
</style>