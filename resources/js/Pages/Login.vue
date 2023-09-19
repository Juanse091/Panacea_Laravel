<template>
    <div class="background_login">
        <section class="login_box">
            <h1 class="login_title">Login</h1>
            <form class="login_form_container">
                <input id="usuario" type="text" class="user_input" placeholder="Usuario" maxlength="20" required>
                <input type="password" class="pass_input" placeholder="Contraseña" maxlength="50" required>
                <a class="recovery_password">Olvide mi Contraseña</a>
                <button type="submit" class="login_form_btn">
                    <p>Iniciar Sesión</p>
                </button>
            </form>
            <router-link to="/Register" style="text-decoration: none;">
                <a>No tengo cuenta <span class="sp_color">Registrate</span></a>
            </router-link>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Login',
    props: {},
}
</script>

<style scoped>@import '../../css/Login.css';</style>