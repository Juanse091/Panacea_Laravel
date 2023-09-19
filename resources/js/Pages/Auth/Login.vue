<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    Nombre_Usuario: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {

    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form class="form" @submit.prevent="submit" >

            <InputLabel value="Login" class="textlogin" style="font-size: 50px; font-weight: bold;"></InputLabel>

            <div class="mt-10 mx-5 flex justify-center">

                <TextInput
                    id="Nombre_Usuario"
                    type="text"
                    class="texinput mt-1 block w-50"
                    placeholder="Documento"
                    v-model="form.Nombre_Usuario"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.Nombre_Usuario" />
            </div>

            <div class="mt-5 mx-5 flex justify-center">

                <TextInput
                    id="password"
                    type="password"
                    placeholder="Contraseña"
                    class="texinput mt-1 block"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-8 ml-20">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">No olvidar datos</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('register')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    ¿No tienes cuenta aún?
                </Link>
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>

            </div>
        </form>
    </GuestLayout>
</template>


<style scoped>

.texinput{
    width: 100%;
}

.form{
    width: 100%;
}

@media (max-width: 500px){
    .textlogin{
        margin-left: 30px;
    }
}
</style>
