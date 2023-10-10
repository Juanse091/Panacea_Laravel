<template>
    <section class="pedido_container">
        <router-link to="/PedidoStatus" style="text-decoration: none;">
            <div class="pedido">
                <div class="containerpedido_img_info">
                    <i class="bi bi-box-seam-fill pedido_icon"></i>
                    <div class="pedido_info">
                        <div class="pedido_id">
                            <h2>Pedido:&nbsp</h2>
                            <h2>ASH1897W</h2>
                        </div>
                        <div class="pedido_date">
                            <h2>Realizado:&nbsp</h2>
                            <h2>05/10/2023</h2>
                        </div>
                    </div>
                </div>
                <div class="pedido_status">
                    <h2>Estado:&nbsp</h2>
                    <h2>Enviado</h2>
                </div>
            </div>
        </router-link>
    </section>
</template>

<style scoped>
.pedido_container {
    background: #F5F5F5;
    border-radius: 25px;
    width: 60%;
    margin-left: 16%;
    margin-bottom: 40px;
}

.pedido {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.containerpedido_img_info {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-left: 40px;
    width: 50%;
}

.pedido_icon {
    font-size: 100px;
    color: #A32B2B;
}

.pedido_info {
    display: flex;
    flex-direction: column;
    text-align: justify;
    margin-left: 20px;
}

.pedido_info>h2 {
    color: black;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 500;
}

.pedido_id {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.pedido_id>h2 {
    color: black;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 500;
}

.pedido_date {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.pedido_date>h2 {
    color: black;
    font-family: 'Montserrat';
    font-size: 25px;
    font-weight: 500;
}

.pedido_status {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 12%;
}

.pedido_status>h2 {
    color: black;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 500;
}

@media (max-width: 500px) {
    .pedido_container {
        background: #F5F5F5;
        border-radius: 12px;
        width: 96%;
        margin-left: 2%;
        margin-bottom: 15px;
    }

    .containerpedido_img_info {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 15px;
        width: 50%;
    }

    .pedido_icon {
        font-size: 50px;
    }

    .pedido_info {
        display: flex;
        flex-direction: column;
        text-align: justify;
        margin-left: 6px;
    }

    .pedido_id>h2 {
        color: black;
        font-family: 'Montserrat';
        font-size: 15px;
        font-weight: 500;
    }

    .pedido_date>h2 {
        color: black;
        font-family: 'Montserrat';
        font-size: 12px;
        font-weight: 500;
    }

    .pedido_status {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 5%;
    }

    .pedido_status>h2 {
        color: black;
        font-family: 'Montserrat';
        font-size: 15px;
        font-weight: 500;
    }


}
</style>

<script>
export default {
    name: 'Pedidos',
    props: {}
}
</script>