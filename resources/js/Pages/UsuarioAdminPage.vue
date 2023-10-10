<script setup>
    import {
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


        <section class="tool_bar">
            <div class="admin_product_search">
                <div class="admin_search_container">
                    <input type="text" class="admin_search_bar" maxlength="45"  v-model="searchQuery">
                    <i class="bi bi-search admin_search_icon"></i>
                </div>
            </div>

            <label for="categorie"></label>
            <select name="categorie" id="categorie" class="select_categorie">
                <option value="" disabled selected hidden>Categorías</option>
                <option value="2">Afiliado</option>
                <option value="4">Particular</option>
                <option value="3">Consorcio</option>
            </select>
            <Link :href="route('adminHUB.editarUsuarios') + '?accion=agregar' + '&usuario=nuevoUsuario  '" style="text-decoration: none;">
                <Button class="add_product">
                    <p>Agregar Usuario</p>
                </Button>
            </Link>
        </section>

        <UsersAdmin v-for="usuario in filteredProducts" :key="usuario.Nombre_Usuario" :Nombre="usuario.Nombre_Usuario" :ID="usuario.ID" :Tipo="usuario.Tipo_usuario"></UsersAdmin>
    </PanaceaLayout>
</template>


<script>

import BackButton from '@/Components/Panacea/BackButton.vue'
import UsersAdmin from '@/Components/Panacea/UsersAdmin.vue';
import Button from '@/Components/PrimaryButton.vue';
import axios from 'axios';

export default {
        props: ['ruta_usuarios'],
        data() {
            return {
                searchQuery: '',
                usuarios: [],
            }
        },
        computed: {
        filteredProducts() {
            return this.usuarios.filter(usuario => usuario.Nombre_Usuario.toLowerCase().includes(this.searchQuery.toLowerCase()));
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
                    url: '/usuariosAdmin',
                    data: {
                        categorie: categorie
                    }
                }).then(function (response) {
                    console.log(response.data.usuarios);
                    self.usuarios = response.data.usuarios;
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
@import '../../css/UsuarioAdminPage.css';
</style>