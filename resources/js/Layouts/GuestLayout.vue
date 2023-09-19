<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background: linear-gradient(108deg, #A32B2B 0%, #2F1515 100%);">

        <div
            class="contain mt-6 px-20 py-20 bg-white shadow-md overflow-hidden sm:rounded-lg"

        >
            <slot />
        </div>
    </div>
</template>

<style scoped>

.contain{
    width: 700px; 

}

@media (max-width: 500px) {
    .contain{
        /* margin-top: 40%; */
        width: 90%;
        border-radius: 30px;
        padding-left: 0rem;
        padding-right: 0rem;
    }
}

</style>
