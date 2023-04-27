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
                backgroundImage: `url('/images/products/opto-back2.jpg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex">
                    <v-col class="align-self-center" xl="6" lg="6" sm="12">
                        <h1 class="h1Custom">
                            Data-driven Analitics
                        </h1>
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
                    <v-col xl="6" lg="6" sm="12" style="padding-top: 4%;">
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
        </v-window-item>
        <v-window-item :value="3">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="6" lg="6" sm="12">
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
                    <v-col xl="6" lg="6" sm="12" style="padding-top: 4%;">
                        <h4 class="h4Custom" style="color: #4c4c4c;">
                            Áreas de aplicación
                        </h4>
                        <p class="pCustom" style="color: #4c4c4c;">
                            MPA es una evaluación confiable para procesos internos y externos de reclutamiento y desarrollo. Es adecuado para su uso en todos los niveles y en una amplia gama de aplicaciones.
                        </p>
                    </v-col>
                    <v-container class="d-flex justify-end">
                        <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                            Volver
                        </v-btn>
                    </v-container>
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
            }
        },
    }
</script>