<script setup>



</script>

<template>
    <form class="enviopago_container" @submit.prevent="submit()">
        <section class="envio">
            <h2 class="envio_title">Dirección de envío</h2>
            <input type="text" class="envio_direccion_input" placeholder="Dirección" maxlength="200" required>
            <div class="name_id_container">
                <input type="text" class="envio_nombre_input" placeholder="Nombre" maxlength="100" required>
                <input type="text" class="envio_documento_input" placeholder="Documento" maxlength="10" required>
            </div>
            <div class="dept_ciudad_container">
                <input type="text" class="envio_departamento_input" placeholder="Departamento" maxlength="45" required>
                <input type="text" class="envio_ciudad_input" placeholder="Ciudad" maxlength="45" required>
            </div>
            <input type="text" class="envio_telefono_input" placeholder="Teléfono" maxlength="10" required>
        </section>

        <section class="pago">
            <div class="title_radio_container">
                <h2 class="pago_title">Metodo de pago</h2>
                <label>
                    <input type="radio" class="pago_radio" name="metodoPago" value="1" v-model="selectedOption"> Tarjeta de
                    Credito o Debito
                </label>

                <label>
                    <input type="radio" class="pago_radio" name="metodoPago" value="2" v-model="selectedOption"> PSE
                </label>

                <label>
                    <input type="radio" class="pago_radio" name="metodoPago" value="3" v-model="selectedOption"> PayPal
                </label>

                <label>
                    <input type="radio" class="pago_radio" name="metodoPago" value="4" v-model="selectedOption"> Mercado
                    Pago
                </label>
            </div>
            <button class="envio_pago_btn" type="submit" :disabled="selectedOption === null">PROCEDER AL PAGO</button>
        </section>
    </form>
</template>

<script>
export default {
    data() {
        return {
            selectedOption: null,
            compra: []
        };
    },
    methods: {
        submit() { 
            this.compra = JSON.parse(localStorage.getItem('productList'));
            axios.post('/venta', this.compra)
                .then((response) => {
                    localStorage.clear();
                    if (this.selectedOption === null) {
                        return;
                    }
                    switch (this.selectedOption) {
                        case '1':
                            this.$inertia.visit('/PagoTarjetaPage');
                            break;
                        case '2':
                            window.open('https://www.pse.com.co/persona', '_blank');
                            this.$inertia.visit('/pagoExitoso');
                            break;
                        case '3':
                            window.open('https://www.paypal.com/co/home', '_blank');
                            this.$inertia.visit('/pagoExitoso');
                            break;
                        case '4':
                            window.open('https://www.mercadopago.com.co', '_blank');
                            this.$inertia.visit('/pagoExitoso');
                            break;
                        default:
                            break;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    }
};
</script>

<style scoped>
@import '../../css/Envio_PagoPage.css';
</style>