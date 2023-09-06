<script setup>
    import {
        Head,
        Link
    } from '@inertiajs/vue3';

</script>
<template>
    <Link  :href="`/categoria/${id}`" style="text-decoration: none;">
    <article class="categories">
        <img :src="`${img}`" alt="">
            <p class="txt_categorie"> {{ nombre }} </p>
        </article>
    </Link>
</template>

<script>
    export default {
        name: 'CategorieBox',
        props: [
            'nombre',
            'img',
            'id'
        ]
    }
</script>

<style scoped>
    .categories{
        position: relative;
        bottom: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 50px;
        /* border: 2px solid yellow; */
        background: #F8F8F8;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 30px;
        cursor: pointer;
        text-align: start;
        gap: 2rem;
        margin-top: 20px;
    }

    .categories > img{
        width: 76px;
        height: 76px;
    }

    .txt_categorie{
        color: #000;
        font-family: Montserrat;
        font-size: 28px;
        font-weight: 400;
    }

    @media (max-width: 500px) {
        
        .categories{
            position: relative;
            bottom: 8px;
            padding: 25px;
            margin: 20px 0;
            gap: 1rem;
        }

        .categories > img{
            width: 32.5px;
            height: 32.5px;
        }

        .txt_categorie{
            font-size: 13px;
        }
    }

</style>
