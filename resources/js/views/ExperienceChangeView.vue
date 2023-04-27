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
                backgroundImage: `url('/images/products/productos-experience-change-001-big2.jpg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex" style="margin-top: -4%;">
                    <v-col class="align-self-center" xl="4" lg="4" sm="12">
                        <h1 class="h1Custom">
                            Experiencia de Cambio
                        </h1>
                        <p class="pCustom" style="color: #fafafa;">
                            La inteligencia Conversacional (C-IQ) es una habilidad inherente al ser humano, que se puede potenciar, desplegar y desarrollar, y nos permite conectarnos unos con otros y crecer juntos a partir de esa conexión. Es una destreza que precisamos desarrollar, si queremos construir organizaciones más resilientes en un mundo de grandes cambios.
                        </p>
                    </v-col>
                    <v-col class="align-self-center" xl="8" lg="8" sm="12">
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="6" lg="6" sm="12">
                        <h3 class="h3Custom">
                            La experiencia de cambio invita a los participantes a considerar el cambio como un proceso y no como un suceso.
                        </h3>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            La experiencia de cambio invita a los participantes a considerar el cambio como un proceso y no como un suceso. Se trata de un workshop de un día de duración en donde la audiencia es dividida en grupos y se los invita a experimentar de primera mano lo que significa implementar un proceso de cambio desde la concepción y análisis del mismo, hasta su comunicación e implementación. Cada grupo interactúa con una plataforma simulada en donde se puede apreciar el impacto que sus acciones generan, recibiendo feedback inmediato, fomentando el intercambio en el equipo y promoviendo una experiencia acelerada de aprendizaje. Entre cada una de las actividades se plantean intervenciones de teoría para apuntalar los conceptos básicos a considerar.
                        </p>
                    </v-col>
                    <v-col class="d-flex justify-center align-center" xl="6" lg="6" sm="12">
                        <v-img src="/images/pdf/ex_cambio.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                        <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                        <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                            descargar PDF
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="3">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <iframe
                    width="80%"
                    height="80%"
                    src="https://player.vimeo.com/video/521946373?h=773b1af351"
                    title="YouTube video player"
                    frameborder="0"
                    style="text-align: center;"
                    allowfullscreen>
                </iframe>
            </v-container>
        </v-window-item>
        <v-window-item :value="4">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="10" lg="10" sm="12" class="d-flex justify-center align-center">
                        <iframe
                            width="80%"
                            height="300%"
                            src="https://player.vimeo.com/video/521945777?h=dc9e8cbbc1"
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
                window.open('/pdf/experienceChange.pdf', '_blank');
            }
        },
    }
</script>