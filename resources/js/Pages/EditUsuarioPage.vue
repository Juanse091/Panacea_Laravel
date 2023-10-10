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

    <form class="useradmin_table">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" required></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" maxlength="45" required></td>
            </tr>
            <tr>
                <td>Hast</td>
                <td><input type="text" maxlength="45" required></td>
            </tr>
            <tr>
                <td>Salt</td>
                <td><input type="text" maxlength="45"></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><input type="text" maxlength="45" required></td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td>                    
                    <select name="tipo_usuario">
                        <option value=1>Admin</option>
                        <option value=2>Cliente Afiliado</option>
                        <option value=3>Socio Consorcio</option>
                        <option value=4>Cliente Particular</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>NUIP</td>
                <td><input type="number" required></td>
            </tr>
        </table>
        <button class="useradmin_form_btn">
            <p>Guardar</p>
        </button>
    </form>


    </PanaceaLayout>
</template>

<script>
import BackButton from '../Components/Panacea/BackButton.vue'
export default {
    props: {},
    components: {
        BackButton,
    },
}
</script>

<style scoped>
@import '../../css/EditUsuarioPage.css';

.custom-font {
    font-family: 'Montserrat', sans-serif;
}
</style>