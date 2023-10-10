<script setup>
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/vue3';
    import PanaceaLayout from '../Layouts/PanaceaLayout.vue';
</script>
<template>
    <PanaceaLayout>
        <Link href="#" @click="back()" style="text-decoration: none;">
        <BackButton></BackButton>
        </Link>

        <section class="tool_bar">
            <div class="admin_product_search">
                <div class="admin_search_container">
                    <input type="text" class="admin_search_bar" maxlength="45" v-model="searchQuery">
                    <i class="bi bi-search admin_search_icon"></i>
                </div>
            </div>

            <form>
                <select name="categorie" id="categorie" class="select_categorie">
                    <option value="" disabled selected hidden>Categorías</option>
                    <option value="1">Medicamentos</option>
                    <option value="2">Salud sexual</option>
                    <option value="3">Asistencia Medica</option>
                    <option value="4">Bebes</option>
                    <option value="5">Cuidado personal</option>
                </select>
            </form>
            <Link :href="route('adminHUB.editarProductos') + '?accion=agregar' + '&producto=nuevoProducto'" style="text-decoration: none;">
                <Button class="add_product">
                    <p>Agregar Producto</p>
                </Button>
            </Link>
        </section>

        <ProductoAdmin v-for="producto in filteredProducts" :key="producto.Codigo_Producto" :name="producto.Nombre_Producto"
            :img="producto.Imagen_Prod" :SA="producto.Existencia" :ID="producto.Codigo_Producto"
            @delete-product="deleteProduct(producto.Codigo_Producto)">
        </ProductoAdmin>
        
    </PanaceaLayout>
</template>


<script>
    import BackButton from '@/Components/Panacea/BackButton.vue'
    import ProductoAdmin from '@/Components/Panacea/ProductoAdmin.vue';
    import Button from '@/Components/PrimaryButton.vue';

    import axios from 'axios';

    export default {
        props: ['ruta_productos'],
        data() {
            return {
                searchQuery: '',
                productos: [],
            }
        },
        computed: {
        filteredProducts() {
            return this.productos.filter(producto => producto.Nombre_Producto.toLowerCase().includes(this.searchQuery.toLowerCase()));
        },
    },
        components: {
            BackButton,
        },
        methods: {
            back() {
                window.history.back();
            },
            deleteProduct(id) {
                var self = this;
                axios({
                    method: 'delete',
                    url: '/producto/' + id,
                }).then(function (response) {
                    // Vuelve a buscar los productos después de eliminar
                    self.fetchProducts(self.selectedCategorie);
                }).catch(function (error) {
                    console.log(error);
                });
            },
            fetchProducts(categorie) {
                var self = this;
                axios({
                    method: 'post',
                    url: self.ruta_productos,
                    data: {
                        categorie: categorie
                    }
                }).then(function (response) {
                    self.productos = response.data.productos
                }).catch(function (error) {
                    console.log(error);
                });
            }
        },
        mounted() {
            var self = this;
            $(document).ready(function () {
                $('#categorie').change(function () {
                    self.selectedCategorie = $(this).val();
                    self.fetchProducts(self.selectedCategorie);
                });
            });
        }
    }

</script>


<style scoped>
    @import '../../css/ProductoAdminPage.css';

</style>
