<template>
    <v-app>
        <v-alert v-if="show" title="Error al iniciar sesion" text="Usuario y/o contaseña incorrectos" type="error"
            style="position: absolute; right: 0; margin-right: 20px; margin-top: 20px;"></v-alert>
        <v-container class="d-flex justify-center align-center"
            style="background: url('/images/us/photoPageUs2.jpg') center / cover no-repeat; min-width: 100vw; min-height: 100vh;">
            <v-card class="mx-auto px-6 py-8" max-width="344" width="344"
                style="background-color: rgba(192, 192, 192, 0.9);">
                <v-img src="/images/logo-consulting-now.png"></v-img>
                <v-form v-model="form" @submit.prevent="onSubmit">
                    <v-text-field :rules="[required]" clearable label="Email" v-model="email"
                        variant="underlined"></v-text-field>
                    <v-text-field v-model="password" clearable :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                        :rules="[rules.required, rules.min]" :type="show1 ? 'text' : 'password'" name="input-10-1"
                        label="Password" counter variant="underlined" placeholder="Enter your password"
                        @click:append="show1 = !show1"></v-text-field>
                    <br>
                    <v-btn :disabled="!form" :loading="loading" block color="#f3b007" size="large" type="submit"
                        variant="elevated">
                        Sign In
                    </v-btn>
                </v-form>
            </v-card>
        </v-container>
    </v-app>
</template>

<script lang="ts">
    import axios from 'axios';

    export default {
        data: () => ({
            show1: false,
            form: false,
            email: null,
            password: null,
            loading: false,
            show: false,
            rules: {
                required: value => !!value || 'Required.',
                min: v => v.length >= 8 || 'Min 8 characters',
                emailMatch: () => (`The email and password you entered don't match`),
            },
        }),

        methods: {
            async onSubmit () {
                if (!this.form) return;
                this.loading = true;
                const vm = this;
                await axios.post('/login', {
                    email: this.email,
                    password: this.password
                })
                .then(function (response) {
                    window.location.href = '/home';
                })
                .catch(function (error) {
                    vm.show = true;
                    setTimeout(() => (vm.loading = false), 1000);
                });
            },

            required (v: string): boolean|string {
                return !!v || 'Field is required';
            },
        },
    }
</script>