<style>
    .w-57 {
        width: 57%;
    }

    .pCustom {
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 23px;
    }

    .label-centered .v-label {
        text-align: center;
        width: 100%;
    }

    .v-text-field .v-label {
        max-width: 100%!important;
    }

    .titleCustom {
        font-size: 30px;
        font-weight: 300;
        line-height: 35px;
    }
</style>

<template>
    <v-app class="d-flex justify-center">
        <v-container class="mx-auto">
            <v-img src="/images/contact/contact.jpg"></v-img>
            <v-container class="d-flex align-center justify-center" fluid>
                <div style="text-align: center;">
                    <h2 class="titleCustom">
                        {{ $t("contact us") }}
                    </h2>
                    <p class="pCustom">
                        {{ $t("contact us p1") }}
                    </p>
                </div>
            </v-container>
            <v-form ref="form" v-model="valid" lazy-validation>
                <v-row>
                    <v-col cols="12" lg="4" md="4" sm="12">
                        <v-text-field v-model="name" :counter="10" :rules="nameRules" :label="$t('name')" required class="label-centered"></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="4" md="4" sm="12">
                        <v-text-field v-model="email" :rules="emailRules" :label="$t('email')" required class="label-centered"></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="4" md="4" sm="12">
                        <v-text-field v-model="number" :label="$t('number')" class="label-centered"></v-text-field>
                    </v-col>
                </v-row>
                <v-text-field v-model="message" :label="$t('msg')" class="label-centered"></v-text-field>
                <v-container>
                    <v-row justify="center">
                        <v-btn color="error" class="mr-4" @click="reset">
                            {{ $t('resert') }}
                        </v-btn>
                        <v-btn :disabled="!valid" color="#F3B007" class="mr-4" @click="send">
                            {{ $t('send') }}
                        </v-btn>
                    </v-row>
                </v-container>
            </v-form>
        </v-container>
    </v-app>
</template>

<script lang="ts">
    import axios from 'axios';
    export default {
        data: () => ({
            valid: true,
            name: '',
            nameRules: [
                (v: any) => !!v || 'Name is required',
                (v: string | any[]) => (v && v.length <= 10) || 'Name must be less than 10 characters',
            ],
            email: '',
            emailRules: [
                (v: any) => !!v || 'E-mail is required',
                (v: string) => /.+@.+\..+/.test(v) || 'E-mail must be valid',
            ],
            number: '',
            message: ''
        }),

        methods: {
            async send() {
                await axios.post('/newsite/consulting-now/public/send', {
                    name: this.name,
                    email: this.email,
                    number: this.number,
                    message: this.message
                })
                .then((response) => {
                    console.log(response);
                    this.$refs.form.reset();
                }, (error) => {
                    console.log(error);
                });
            },
            reset () {
                this.$refs.form.reset();
            },
        },
    }
</script>