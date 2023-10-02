<script setup>
            import {Head,Link} from '@inertiajs/vue3';

</script>
<template>
    <section class="product_container">
        <div class="admin_producto">
            <div class="container_img_name">
                <img class="admin_img_producto" :src="`${img}`" alt="Hola">
                <div class="product_name">
                    <h2>{{ name }}</h2>
                </div>
            </div>
            <div class="container_stock_icons">
                <div class="stock_actual">
                    <h2>Stock Actual: </h2>
                    <input type="text" class="stock_quantity" readonly maxlength="45" :value="`${SA}`">
                </div>
                <Link :href="`${route('adminHUB.editarProductos')}?accion=actualizar&producto=${ID}`" style="text-decoration: none;">
                    <i class="bi bi-pencil-fill admin_pencil_icon" style="cursor: pointer;"></i>
                </Link>

                <i @click="deleteProduct" class="bi bi-trash-fill admin_trash_icon" style="cursor: pointer;"></i>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        name: 'ProductoAdmin',
        props: [
            'name',
            'img',
            'SA',
            'ID'
        ],
        methods: {
            deleteProduct() {
                this.$emit('delete-product');
            }
        }
    }
</script>
<style scoped>
.product_container{
    background: #F5F5F5;
    border-radius: 25px;
    width: 60%;
    margin-left: 10%;
    margin-bottom: 40px;
}
.admin_producto{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.container_img_name{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-left: 40px;
    width: 50%;
}

.admin_img_producto{
    height: auto;
    width: 130px;
}

.product_name{
    display: flex;
    flex-direction: column;
    text-align: justify;
    margin-left: 20px;
}

.product_name>h2{
    color: black;
    font-family: 'Montserrat';
    font-size: 22px;
    font-weight: 500;
}


.container_stock_icons{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 40px;
}


.stock_actual{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 70px;
}

.stock_actual>h2{
    color: black;
    font-family: 'Montserrat';
    font-size: 30px;
    font-weight: 500;
}

.stock_quantity{
    width: 60px;
    height: 30px;
    text-align: center;
    font-family: 'Montserrat';
    font-size: 22px;
    font-weight: 400;
    margin-left: 10px;
    color: black;
}

.admin_trash_icon{
    font-size: 40px;
    margin-top: 3px;
    margin-left: 20px;
    color: rgba(141, 141, 141, 1);
}

.admin_pencil_icon{
    font-size: 35px;
    color: rgba(141, 141, 141, 1);
}

@media (max-width: 500px) {
    
    .product_container{
        background: #F5F5F5;
        border-radius: 15px;
        width: 96%;
        margin-left: 2%;
        margin-bottom: 15px;
    }
    
    .container_img_name{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 20px;
        width: 50%;
    }
    
    .admin_img_producto{
        height: auto;
        width: 65px;
    }
    
    .product_name{
        display: flex;
        flex-direction: column;
        text-align: justify;
        margin-left: 6px;
    }
    
    .product_name>h2{
        color: black;
        font-family: 'Montserrat';
        font-size: 15px;
        font-weight: 500;
    }
    
    .container_stock_icons{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 5px;
    }
    
    .stock_actual{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 15px;
    }

    .stock_actual>h2{
        color: black;
        font-family: 'Montserrat';
        font-size: 12px;
        font-weight: 500;
    }

    .stock_quantity{
        width: 25px;
        height: 10px;
        text-align: center;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 400;
        margin-left: 5px;
        color: black;
    }
    
    .admin_trash_icon{
        font-size: 20px;
        margin-top: 3px;
        margin-left: 8px;
        color: rgba(141, 141, 141, 1);
    }

    .admin_pencil_icon{
        font-size: 18px;
        margin-top: 3px;
        color: rgba(141, 141, 141, 1);
    }
 
}

</style>

