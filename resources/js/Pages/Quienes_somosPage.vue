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

        <section class="QS_info">
            <h1>¿Quiénes somos?</h1>
            <p>¡Te damos la bienvenida a PanaceaNova Pharmacy, tu destino en línea para productos farmacéuticos de alta calidad! Nos enorgullecemos de ofrecer una extensa gama de medicamentos y productos relacionados para cuidar de tu salud y bienestar. Nuestra plataforma está diseñada pensando en ti, brindándote la comodidad de acceder a una amplia variedad de medicamentos desde la comodidad de tu hogar.</p>
            <h2>Misión</h2>
            <p>Nuestra misión es ser uno de los proveedores líderes en el mercado en cuanto a productos hospitalarios y farmacéuticos en línea, entregando soluciones integrales a hospitales, clínicas, farmacias y otras instituciones de salud. Nuestra prioridad es proveer a instituciones dedicadas a la salud y el bienestar de los ciudadanos, brindando soluciones efectivas a soluciones médicas. De esta manera, demostramos lo comprometidos que estamos por brindar un servicio excepcional, conocimiento experto y un enfoque de interacciones centrado en los clientes.</p>
            <h2>Visión</h2>
            <p>Nos proyectamos como la empresa líder en la distribución de fármacos, destacándose por nuestra ética, dedicación a la excelencia y enfoque centrado tanto en nuestros clientes como en nuestras instituciones asociadas. Nuestro objetivo es establecer alianzas estratégicas con reconocidos proveedores y prestigiosos centros médicos, con el fin de expandir nuestra red de distribución y llevar nuestros servicios a lo largo de toda la región. Nuestra meta es ser un pilar fundamental en la mejora de la salud pública, facilitando el acceso a medicamentos esenciales para una amplia población.</p>
        </section>
        
    </PanaceaLayout>
</template>


<script>
    import BackButton from '../Components/Panacea/BackButton.vue'
    export default {
        name: 'Quienes_somosPage',
        props: {},
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
    @import '../../css/Quienes_somosPage.css';
</style>