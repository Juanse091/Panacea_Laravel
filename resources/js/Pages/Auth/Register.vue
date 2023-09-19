<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/vue3';


    const { data, methods } = useUnifiedScript();

    const persona = useForm({
        NUIP: '',
        Nombre_Persona: '',
        Email: '',
        Telefono_Movil: '',
        Direccion: '',
    });

    const confirm = useForm({
        Nombre_Usuario: '',
        Hast: '',
    });

    const Persona_submit = () => {
        const user_value = persona.NUIP; // Usar el valor de NUIP directamente
        const hast_value = persona.Hast;
        data.hidden = false;
        confirm.Nombre_Usuario = user_value; 
        confirm.Hast = hast_value;
        persona.post(route('persona'), {
        });
    };

    const User_submit = () => {
        confirm.post(route('usuario'), {
            onFinish: () => confirm.reset('Hast_support'),
        });
    };
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <InputLabel value="Registro" class="textregister" style="font-size: 50px; font-weight: bold;"></InputLabel>
        <form @submit.prevent="Persona_submit" class=" flex flex-col">

            <section class="register_column_container flex flex-row gap-10">
                <section class="register_column_left">

                    <div class="mt-20">
                        <TextInput id="Nombre_Persona" placeholder="Nombre" type="text" class=" TextInput mt-1 block w-full"
                            v-model="persona.Nombre_Persona" required autofocus autocomplete="Nombre_Persona" />

                        <InputError class="mt-2" :message="persona.errors.Nombre_Persona" />
                    </div>

                    <div class="mt-4">
                        <TextInput id="Email" placeholder="Correo" type="email" class=" TextInput mt-1 block w-full"
                            v-model="persona.Email" required autocomplete="Email" />

                        <InputError class="mt-2" :message="persona.errors.Email" />
                    </div>

                    <div class="mt-4">
                        <TextInput id="Telefono_Movil" placeholder="Telefono" type="text" class=" TextInput mt-1 block w-full"
                            v-model="persona.Telefono_Movil" required autocomplete="Telefono_Movil" />

                        <InputError class="mt-2" :message="persona.errors.Telefono_Movil" />
                    </div>

                </section>

                <section class="register_column_right">

                    <div class="mt-20 no-margin">
                        <TextInput 
                            id="Direccion" 
                            placeholder="Dirección" 
                            type="text" 
                            class=" TextInput mt-1 block w-full"
                            v-model="persona.Direccion" required autocomplete="Direccion" 
                        />
                        
                        <InputError class="mt-2" :message="persona.errors.Direccion" />
                    </div>

                    <div class="mt-4">
                        
                        <TextInput 
                            id="NUIP" 
                            placeholder="Documento"
                            type="text" 
                            class=" TextInput  mt-1 block w-full"
                            v-model="persona.NUIP" required autocomplete="new-password" 
                            ref="documento"

                            />
                    </div>
                    <div class="mt-4">
                        <TextInput 
                            id="Hast_support" 
                            placeholder="Contraseña" 
                            type="password" 
                            class=" TextInput mt-1 block w-full"
                            v-model="persona.Hast" required autocomplete="new-password" 
                            ref="hast"
                        />
                    </div>
                </section>
            </section>

            <section>
                <div class="button_section flex items-center justify-end mt-4">
                    <Link :href="route('login')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    ¿Ya tienes cuenta?
                    </Link>

                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': persona.processing }" :disabled="persona.processing">
                        Register
                    </PrimaryButton>
                </div>
            </section>
        </form>

        <form v-if="!data.hidden" @submit.prevent="User_submit" class="confirm_form ">
            <TextInput
                hidden

            >

            </TextInput>
            <input class="Nombre_Usuario" id="Nombre_Usuario" type="hidden" v-model="data.Nombre_Usuario">
            <input class="Hast" id="Hast" type="hidden" v-model="data.Hast">
            <p class="label_re">Registro exitoso</p>
            <section class="flex flex-row mt-20">
                <PrimaryButton class="confirm_btn" :class="{ 'opacity-25': confirm.processing }" :disabled="confirm.processing" >Continuar</PrimaryButton>
            </section>
        </form>
    </GuestLayout>
</template>
<script>
function useUnifiedScript() {
    const data = {
        hidden: true,
        Nombre_Usuario: "",
        Hast: ""
    };

    const methods = {};

    return { data, methods };
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

.confirm_form{
    position: absolute;
    background-color: #f5f5f5;
    width: 500px;
    height: 300px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px solid black ;
    border-radius: 30px;
}

.label_re{
    font-weight: bold;
    font-size: 40px;
    font-family: 'Montserrat';

}
.register_column_container{
        justify-content: center;
        align-items: center;
    }

@media (max-width: 500px){


    .confirm_form{
        width: 300px;
        text-align: center;
    }
    .textregister{
        margin-left: 20px;
    }

    .register_column_container{
        flex-direction: column;
        gap: 0;
        justify-content: center;
        align-items: center;
    }

    .no-margin{
        margin-top: 1rem;
    }

    .TextInput{
        width: 90%;
    }

    .register_column_left,
    .register_column_right{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .button_section{
        justify-content: center;
    }

}

</style>