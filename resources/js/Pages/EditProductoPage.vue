<script setup>
    import { Head, Link, useForm } from '@inertiajs/vue3';
    import PanaceaLayout from '../Layouts/PanaceaLayout.vue'

    defineProps({
        canResetPassword: {
            type: Boolean,
        },
        status: {
            type: String,
        },
    });

    const form = useForm({
        ID: '',
        Nombre: '',
        Imagen: '',
        Descripcion: '',
        StockMinimo: '',
        StockMaximo: '',
        Existencia: '',
        PrecioUnitario: '',
        Categoria: '',
        Tipo: '',
        Presentacion: '',
        Marca: '',
        PaisOrigen: '',
        Cantidad: '',
        Publico: '',
        VentaLibre: '',
        UnidadesDePaquete: '',
        Alto: '',
        Ancho: '',
        Profundidad: '',
        Calificacion: '',
        Contador: ''
    });

    let accion = new URLSearchParams(window.location.search).get('accion');
    let id = new URLSearchParams(window.location.search).get('producto');

    let url = accion === 'agregar' ? 'importProduct' : 'editProduct';
    let params = accion === 'agregar' ? {} : { id: id };
    console.log(url);

    const submit = () => {
        form.post(route(url, params), {
        })
        .then((response) => {
            if(response.data.success) {
                console.log(response.data.mensaje); // Aquí puedes manejar el mensaje de éxito
            } else {
                console.log('Hubo un error'); // Aquí puedes manejar el error
            }
        })
        .catch((error) => {
            console.log(error); // Aquí puedes manejar los errores de red, etc.
        });
    };
    </script>

<template>
    <PanaceaLayout>

    
        <Link href="" @click="back()" style="text-decoration: none;"> 
            <BackButton></BackButton>
        </Link>

    <form class="productadmin_table" @submit.prevent="submit" >
        <table>
            <tr>
                <td>ID</td>
                <td><input v-model="form.ID" type="number"  :placeholder="`${ Producto.Codigo_Producto }`"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input v-model="form.Nombre" type="text" maxlength="30"  :placeholder="`${Producto.Nombre_Producto}`"></td>
            </tr>
            <tr>
                <td>Imagen</td>
                <td><input v-model="form.Imagen" type="url" maxlength="250"  :placeholder="`${Producto.Imagen_Prod}`"></td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td><input v-model="form.Descripcion" type="text" maxlength="500"  :placeholder="`${Producto.Descripcion_Producto}`"></td>
            </tr>
            <tr>
                <td>Stock Minimo</td>
                <td><input v-model="form.StockMinimo" type="number"  :placeholder="`${Producto.Minimo}`"></td>
            </tr>
            <tr>
                <td>Stock Maximo</td>
                <td><input v-model="form.StockMaximo" type="number"  :placeholder="`${Producto.Maximo}`"></td>
            </tr>
            <tr>
                <td>Existencia</td>
                <td><input v-model="form.Existencia" type="number"  :placeholder="`${Producto.Existencia}`"></td>
            </tr>
            <tr>
                <td>Precio Unitario</td>
                <td><input v-model="form.PrecioUnitario" type="number" step="0.01"  :placeholder="`${Producto.Valor_Unitario}`"></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select v-model="form.Categoria">
                        <option disabled value hidden ="">{{CategoriaProd}}</option>
                        <option value="1">Salud y Medicamentos</option>
                        <option value="2">Bienestar Sexual</option>
                        <option value="3">Asistencia Medica</option>
                        <option value="4">Cuidado del bebé</option>
                        <option value="5">Cuidado Personal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td>
                    <select v-model="form.Tipo">
                        <option disabled value hidden ="">{{TipoProd}}</option>
                        <option v-for="(option, index) in Tipos" :key="index" :value="option.value">{{ option.label }}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Presentación</td>
                <td>
                    <select v-model="form.Presentacion">
                        <option disabled value hidden ="">{{PresentacionProd}}</option>
                        <option v-for="(option, index) in Presentaciones" :key="index" :value="option.value">{{ option.label }}</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Marca</td>
                <td><input v-model="form.Marca" type="text" maxlength="45"  :placeholder="`${Producto.Marca}`"></td>
            </tr>
            <tr>
                <td>Pais Origen</td>
                <td><input v-model="form.PaisOrigen" type="text" maxlength="45"  :placeholder="`${Producto.Pais_Produccion}`"></td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input v-model="form.Cantidad" type="text" maxlength="45"  :placeholder="`${Producto.Cantidad}`"></td>
            </tr>
            <tr>
                <td>Publico</td>
                <td><input v-model="form.Publico" type="text" maxlength="45"  :placeholder="`${Producto.Publico}`"></td>
            </tr>
            <tr>
                <td>Venta Libre</td>
                <td><input v-model="form.VentaLibre" type="number" min="0" max="1"  :placeholder="`${Producto.VentaLibre}`"></td>
            </tr>
            <tr>
                <td>Unidades de paquete</td>
                <td><input v-model="form.UnidadesDePaquete" type="number" min="0" max="1" :placeholder="`${Producto.Unidades_Paquete}`"></td>
            </tr>
            <tr>
                <td>Alto</td>
                <td><input v-model="form.Alto" type="text" maxlength="45" :placeholder="`${Producto.Alto_Item}`"></td>
            </tr>
            <tr>
                <td>Ancho</td>
                <td><input v-model="form.Ancho" type="text" maxlength="45" :placeholder="`${Producto.Ancho_Item}`"></td>
            </tr>
            <tr>
                <td>Profundidad</td>
                <td><input v-model="form.Profundidad" type="text" maxlength="45" :placeholder="`${Producto.Profundidad_Item}`"></td>
            </tr>
            <tr>
                <td>Calificación</td>
                <td><input v-model="form.Calificacion" type="number" :placeholder="`${Producto.Calificacion}`"></td>
            </tr>
            <tr>
                <td>Contador</td>
                <td><input v-model="form.Contador" type="number" :placeholder="`${Producto.Contador}`"></td>
            </tr>
        </table>
        <button class="productadmin_form_btn" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            <p>Guardar</p>
        </button>
    </form>


    </PanaceaLayout>
</template>

<script>
import BackButton from '@/Components/Panacea/BackButton.vue'
import axios from 'axios';
export default {
    props: {},
    components: {
        BackButton,
    },
    data() {
        return {
            Tipos: [
                { value: 1, label: "Medicamentos para la Incontinencia" },
                { value: 2, label: "Antirretrovirales" },
                { value: 3, label: "Oftálmicos" },
                { value: 4, label: "Dermatológicos" },
                { value: 5, label: "Hipoglucemiantes orales" },
                { value: 6, label: "Antihipertensores" },
                { value: 7, label: "Enfermedad ácido péptica" },
                { value: 8, label: "Tiroides" },
                { value: 9, label: "Hipolipemiantes" },
                { value: 10, label: "Antialérgicos y Antihistamínicos" },
                { value: 11, label: "Respiratorios" },
                { value: 12, label: "Hipotiroidismo" },
                { value: 13, label: "Insulinas" },
                { value: 14, label: "Sistema Nervioso" },
                { value: 15, label: "Anticoagulantes" },
                { value: 16, label: "Urológicos" },
                { value: 17, label: "Antiparkinsonianos" },
                { value: 18, label: "Antiácidos" },
                { value: 19, label: "Antivirales para la Hepatitis" },
                { value: 20, label: "Menopausia" },
                { value: 21, label: "Antieméticos" },
                { value: 22, label: "Corticosteroides Tópicos" },
                { value: 23, label: "Antiepilépticos" },
                { value: 24, label: "Antitiroides" },
                { value: 25, label: "AINEs" },
                { value: 26, label: "Osteoporosis" },
                { value: 27, label: "Vitaminas y minerales" },
                { value: 28, label: "Trastornos del Sueño" },
                { value: 29, label: "Anticonvulsivantes" },
                { value: 31, label: "Glaucoma" },
                { value: 32, label: "Antidepresivos" },
                { value: 33, label: "Analgésicos" },
                { value: 34, label: "Antiinfecciosos urinarios" },
                { value: 35, label: "EPOC" },
                { value: 36, label: "Antifúngicos" },
                { value: 37, label: "Inhaladores nasales" },
                { value: 38, label: "Antihiperglucemiantes" },
                { value: 39, label: "Antibióticos" },
                { value: 40, label: "Ansiolíticos" }
            ],
            Presentaciones:[
                { value: 1, label: "Tabletas - Comprimidos" },
                { value: 2, label: "Cápsulas" },
                { value: 3, label: "Jarabe" },
                { value: 4, label: "Inyección" },
                { value: 5, label: "Supositorio" },
                { value: 6, label: "Crema - Ungüento" },
                { value: 7, label: "Gotas" },
                { value: 8, label: "Aerosol" },
                { value: 9, label: "Polvos" },
                { value: 10, label: "Parches Transdérmicos" },
                { value: 11, label: "Ampolla" },
                { value: 12, label: "Óvulo" },
                { value: 13, label: "Gel" },
                { value: 14, label: "Pastilla Efervescente" },
                { value: 15, label: "Spray" },
                { value: 16, label: "Botella" },
                { value: 17, label: "Bolsa" },
                { value: 18, label: "Frasco" }
            ],
            Producto: [],
            CategoriaProd: '',
            TipoProd: '',
            PresentacionProd: ''
        };
    },
    mounted(){
        let producto = new URLSearchParams(window.location.search).get('producto');
        if(producto == 'nuevoProducto'){
            console.log('Nuevo Producto');
        }
        else{
            var self = this;
            console.log(producto);
            axios({
                method: 'post',
                url: '/producto/' + producto,
            }).then(function (response) {
                self.Producto = response.data.Producto;
                self.CategoriaProd  = response.data.Categoria.Nombre_Categoria;
                self.TipoProd  = response.data.Tipo.Nombre_tipo_prod;
                self.PresentacionProd  = response.data.data.Presentacion.Nombre_Presentacion;
            }).catch(function (error) {
                console.log(error);
            });
        }
    },
    
    methods: {
        back(){
            window.history.back();
        }
    }
}
</script>

<style scoped>
@import '../../css/EditProductoPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}
</style>