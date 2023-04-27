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

    .h3Custom {
        color: #4c4c4c;
        font-size: 24px;
        font-weight: 300;
        line-height: 26.4px;
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
                backgroundImage: `url('/images/products/productos-experience-innovation2.jpg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex" style="margin-top: 8%;">
                    <v-col class="align-self-center" xl="8" lg="8" sm="12">
                    </v-col>
                    <v-col class="align-self-center" xl="4" lg="4" sm="12" style="margin-top: -10%;">
                        <h1 class="h1Custom">
                            Experiencia de Innovación
                        </h1>
                        <br>
                        <p class="pCustom" style="color: #fafafa;">
                            Esta Experiencia de Innovación provee técnicas que ejercitan un pensar diferente trabajando sobre soluciones creativas, para generar resultados de alto impacto.
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="6" lg="6" sm="12">
                        <h3 class="h3Custom">
                            Un programa diseñado para que las personas puedan ser auténticas protagonistas de su futuro.
                        </h3>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            Esta Experiencia de Innovación provee técnicas que ejercitan un pensar diferente trabajando sobre soluciones creativas, para generar resultados de alto impacto.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Este tipo de experiencia pone foco en las personas y se vale de los recursos de diseño para integrar las necesidades y los requerimientos para el éxito del negocio. Se nutre de la intuición para visualizar patrones e integra ideas emocionalmente funcionales.
                        </p>
                    </v-col>
                    <v-col xl="6" lg="6" sm="12">
                        <p class="pCustom" style="color: #4c4c4c;">
                            Se trabaja en equipo para hacer frente a un proyecto de innovación realista. Al avanzar a través del proceso de diseño, la simulación ofrece lo esencial para un desafío innovador.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Haciendo foco en lo importante, un experto lidera los equipos explorando distintas técnicas y alentando nuevas idea.
                        </p>
                        <v-container style="display: inline-flex; justify-content: flex-start; align-items: center;">
                            <v-img src="/images/pdf/transforming_.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                            <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                            <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                descargar PDF
                            </p>
                        </v-container>
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
                            src="https://player.vimeo.com/video/521946126?h=ff28db48c7"
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
                step: 1,
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },
            abrirPDF() {
                window.open('/pdf/innovationExperience.pdf', '_blank');
            }
        },
    }
</script>