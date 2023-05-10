<style scoped>
    .h1Custom {
        color: #f3b007;
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
    }

    .h2Custom {
        font-size: 30px;
        font-weight: 300;
        line-height: 35px;
    }

    .pCustom {
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 23px;
    }

    .h4Custom {
        font-size: 18px;
        font-weight: 300;
        line-height: 23px;
    }
</style>

<template>
    <div v-intersect="onIntersect" style="margin-top: 64px;">
        <div class="fullscreen">
            <transition name="slide-up">
                <div class="fullscreen" v-show="window1"
                :style="{
                    backgroundImage: `url('/images/products/opto-back2.jpg')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }">
                    <v-container class="d-flex justify-center align-center">
                        <v-row class="d-flex">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    Data-driven Analitics
                                </h1>
                            </v-col>
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                            </v-col>
                        </v-row>
                    </v-container>
                </div>
            </transition>
        </div>
    </div>
    <v-container class="fullscreen">
        <v-container class="d-flex justify-center align-center" v-intersect="onIntersectWindow2">
            <transition name="slide-up">
                <v-container v-show="window2">
                    <v-container class="d-flex justify-center align-center">
                        <v-row>
                            <v-col cols="12" xl="6" lg="6" sm="12">
                                <h2 class="h2Custom" style="color: #4c4c4c;">
                                    OPTO
                                </h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    La prueba de personalidad OPTO permite obtener, filtrar, desarrollar y reclutar talentos instantáneamente en función de criterios de rendimiento objetivos, análisis integrados e informes intuitivos
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    La combinación de análisis de performance y soporte para la toma de decisiones crea una experiencia completamente nueva y un nivel de calidad en todos los aspectos de atraer, adquirir y desarrollar talento.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    OPTO es flexible y se enfoca en la performance, permitiendo a las organizaciones ser mucho más eficientes.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    OPTO se basa en el modelo Big Five que mide 8 dimensiones de personalidad relevantes para el rendimiento en el trabajo y el éxito laboral general.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Cada dimensión incluye aspectos que miden elementos específicos de esa dimensión. Esto proporciona flexibilidad en términos del nivel requerido de complejidad y detalle.
                                </p>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 4%;">
                                <h4 class="h4Custom" style="color: #4c4c4c;">
                                    QUE ES OPTO?
                                </h4>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    → Evaluación de candidatos basada en datos que mejora la calidad de las decisiones.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    → Información analítica con criterios objetivos de desempeño laboral y comercial.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    → Digitalización que crea eficiencias internas y reduce los costos.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    →Informes gráficos y escalables que coincide con diferentes roles y necesidades .
                                </p>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-container>
            </transition>
        </v-container>
    </v-container>
    <v-container class="fullscreen">
        <v-container class="d-flex justify-center align-center" v-intersect="onIntersectWindow3">
            <transition name="slide-up">
                <v-container v-show="window3">
                    <v-container class="d-flex justify-center align-center">
                        <v-row>
                            <v-col cols="12" xl="6" lg="6" sm="12">
                                <h2 class="h2Custom" style="color: #4c4c4c;">
                                    MPA
                                </h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Es una herramienta que identifica características de personalidad y rasgos de comportamiento cooperando en la optimización de los procesos de Gestión de Talento.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Mide y describe el comportamiento en 3 dimensiones y 9 propiedades básicas.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Los resultados se transmiten en informes diseñados para adaptarse a diferentes necesidades.
                                </p>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 4%;">
                                <h4 class="h4Custom" style="color: #4c4c4c;">
                                    Áreas de aplicación
                                </h4>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    MPA es una evaluación confiable para procesos internos y externos de reclutamiento y desarrollo. Es adecuado para su uso en todos los niveles y en una amplia gama de aplicaciones.
                                </p>
                            </v-col>
                            <v-container class="d-flex justify-center align-center">
                                <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                                    Volver
                                </v-btn>
                            </v-container>
                        </v-row>
                    </v-container>
                </v-container>
            </transition>
        </v-container>
    </v-container>
</template>

<script lang="ts">
    export default {
        data() {
            return {
                window1: false,
                window2: false,
                window3: false,
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            onIntersect (isIntersecting: boolean) {
                if (isIntersecting && !this.window1)
                    this.window1 = isIntersecting;
            },

            onIntersectWindow2 (isIntersecting: boolean) {
                if (isIntersecting && !this.window2)
                    this.window2 = isIntersecting;
            },

            onIntersectWindow3 (isIntersecting: boolean) {
                if (isIntersecting && !this.window3)
                    this.window3 = isIntersecting;
            },
        },

        mounted() {
            window.scrollTo(0, 0);
        }
    }
</script>