<script setup>
    import {Head,Link} from '@inertiajs/vue3';
</script>

<template>
    <article class="product">
        <img :src="`${img}`" alt="">
        <hr>
        <p class="product_name">{{ nombre }}</p>
        <div class="puntuacion">
            <i class="bi bi-star-fill star_icon"></i>
            <i class="bi bi-star-fill star_icon"></i>
            <i class="bi bi-star-fill star_icon"></i>
            <i class="bi bi-star-fill star_icon"></i>
            <i class="bi bi-star-fill star_icon"></i>
        </div>
        <p>${{ precio }}</p>
        <Link :href="`/medicamento/id=${id}`">
            <button class="btn_buy">Comprar</button>
        </Link>
    </article>
</template>

<script>
    export default {
        props:[
            'nombre',
            'precio',
            'id',
            'img'
        ],
    }

</script>

<style scoped>

.product{
    position: relative;
    bottom: 2px;
    display: flex;
    flex-direction: column;
    padding: 30px 50px;
    background: #F8F8F8;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 30px;
    gap: 3px;   
    width: 300px;
}

.product > img{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    width: 182px;
    height: 182px;
}

.product_name{
    font-family: 'Montserrat';
    font-size: 100%;
    font-weight: 600;
}

.product>p{
    display: flex;
    justify-content: left;
    
}

.btn_buy{
    cursor: pointer;
    border: none;
    background-color: #A32B2B;
    color: white;
    height: 36px;
    width: 100%;
    border-radius: 16px;
    font-size: 18px;
    font-family: 'Montserrat';
    margin-top: 5px;
}

.puntuacion{
    display: flex;
    flex-direction: row;
    justify-content: left;
    align-items: center;
}

.star_icon{
    font-size: 18px;
    color: #A32B2B;
    padding-right: 4px;
}

@media (max-width: 500px) {
    .product{
        position: relative;
        bottom: 1px;
        padding: 30px 60px;
        justify-content: center;
        border-radius: 15px;
        /* align-items: center; */
        font-size: 10px;
        width: auto;
    }

    .product > img{
        position: relative;
        width: 53px;
        height: 58px;
        margin-top: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    .product_name{
        font-family: 'Montserrat';
        font-size: 90%;
        font-weight: 600;
    }
    .display_none{
        display: none;
    }    
    .btn_buy{
        font-size: 9px;
        height: 15px;
        border-radius: 6px;
    }

    .star_icon{
        font-size: 10px;
        color: #A32B2B;
        padding-right: 1px;
    }
}

</style>
