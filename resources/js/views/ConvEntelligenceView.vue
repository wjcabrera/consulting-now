<style scoped>
    .h1Custom {
        color: #f3b007;
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
    }

    .pCustom {
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 23px;
    }

    .h4Custom {
        color: #4c4c4c;
        font-size: 18px;
        font-weight: 300;
        line-height: 23px;
    }
</style>

<template>
    <v-window v-model="step" show-arrows class="fullscreen" style="padding-top: 70px;">
        <template v-slot:prev="{ props }">
            <v-btn color="#f3b007" @click="props.onClick" icon>
                <font-awesome-icon icon="fa-solid fa-backward-step" />
            </v-btn>
        </template>
        <template v-slot:next="{ props }">
            <v-btn color="#f3b007" @click="props.onClick" icon>
                <font-awesome-icon icon="fa-solid fa-forward-step" />
            </v-btn>
        </template>
        <v-window-item class="fullscreen90" :value="1"
            :style="{
                backgroundImage: `url('/images/products/conv_in2.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex" style="margin-top: 8%;">
                    <v-col class="align-self-center" xl="6" lg="6" sm="12">
                        <h1 class="h1Custom">
                            {{ $t('conversationalIntelligence') }}
                        </h1>
                        <h1 class="h1Custom">
                            (C-IQ)
                        </h1>
                        <p class="pCustom" style="color: #fafafa;">
                            {{ $t('conversationalIntelligence1') }}
                        </p>
                    </v-col>
                    <v-col class="align-self-center" xl="6" lg="6" sm="12">
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="6" lg="6" sm="12">
                        <h4 class="h4Custom">
                            {{ $t('conversationalIntelligence2') }}
                        </h4>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('conversationalIntelligence3') }}
                        </p>
                    </v-col>
                    <v-col class="d-flex justify-center align-center" xl="6" lg="6" sm="12" style="display: inline-flex; justify-content: flex-start; align-items: center;">
                        <v-img src="/images/pdf/i_conver.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                        <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                        <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                            {{ $t('download') }} PDF
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="3">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="10" lg="10" sm="12" class="d-flex justify-center align-center">
                        <iframe
                            width="80%"
                            height="300%"
                            src="https://www.youtube.com/embed/Tutj0ehhtIU"
                            title="YouTube video player"
                            frameborder="0"
                            style="text-align: center;"
                            allowfullscreen>
                        </iframe>
                    </v-col>
                    <v-col  xl="2" lg="2" sm="12">
                        <v-container class="d-flex justify-center align-center">
                            <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                                Volver
                            </v-btn>
                        </v-container>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
    </v-window>
</template>

<script lang="ts">
    export default {
        data() {
            return {
                step: 0
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            abrirPDF() {
                window.open('/pdf/convEntelligence.pdf', '_blank');
            }
        },
    }
</script>