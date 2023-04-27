
<style>
    
</style>

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
        color: #f3b007;
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
                backgroundImage: `url('/images/products/productos-coaching.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                backgroundColor: 'rgba(0,0,0,0.8)',
                backgroundAttachment: 'fixed'
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col class="align-self-center" xl="4" lg="4" sm="12">
                        <h1 class="h1Custom">
                            Coaching
                        </h1>
                        <br>
                        <p class="pCustom" style="color: #fafafa;">
                            Coaching de Equipos como forma de trabajar en la interacción de los equipos, generando conocimiento sobre los distintos perfiles que conforman el equipo, con el fin de adecuar la mejor forma de intercambiar la información, facilitando la comunicación y construyendo confianza y valores comunes.
                        </p>
                    </v-col>
                    <v-col xl="4" lg="4" sm="12">
                        <v-container style="border: 4px solid #F3B007; padding: 14%;">
                            <h4 class="h4Custom" style="text-align: center;">
                                Análisis de las necesidades
                            </h4>
                            <br>
                            <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                Para trazar los objetivos de trabajo y construir un Plan de Coaching consensuado. Se pueden incluir herramientas e Instrumentos que agilizan el reconocimiento de necesidades específicas y enfoque para promover el desarrollo
                            </p>
                        </v-container>
                    </v-col>
                    <v-col xl="4" lg="4" sm="12">
                        <v-container style="border: 4px solid #F3B007; padding: 14%;">
                            <h4 class="h4Custom" style="text-align: center;">
                                Coaching
                            </h4>
                            <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                Reuniones virtuales o presenciales, entrenamiento en habilidades, incluyendo nuevos conceptos, practica de destrezas y actividades especificas para transferir las habilidades aprendidas al entorno de trabajo.
                            </p>
                        </v-container>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="6" lg="6" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">
                            Coaching
                        </h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Es un proceso que contribuye al autoconocimiento y crecimiento personal y profesional haciendo foco en lo prioritario para fomentar un camino de desarrollo. Constituye un espacio único donde el potencial y las habilidades se ponen en juego para desplegar nuevas formas de afrontar los desafíos presentes y futuros.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Es un recorrido que se inicia con un plan, se trazan objetivos a alcanzar, explicitando el contrato en general y alineando acciones y herramientas para responder a las diferentes necesidades. Favorece el aprendizaje y traduce los conceptos en habilidades concretas, brindando oportunidades de poner en práctica nuevas habilidades dentro de un contexto de guía y acompañamiento, estimulando además una adecuada transferencia al día a día.
                        </p>

                        <v-container class="d-flex justify-center align-center">
                            <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                                Volver
                            </v-btn>
                        </v-container>
                    </v-col>
                    <v-col xl="6" lg="6" sm="12" style="margin-top: 63px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            Incluye coaching ejecutivo, diseñado para líderes e integrantes de la alta dirección y personalizado, de acuerdo a las necesidades individuales.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Coaching de Equipos como forma de trabajar en la interacción de los equipos, generando conocimiento sobre los distintos perfiles que conforman el equipo, con el fin de adecuar la mejor forma de intercambiar la información, facilitando la comunicación y construyendo confianza y valores comunes.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Se adapta y ajusta a las necesidades, utilizando instrumentos para promover entendimiento y aprendizaje.
                        </p>

                        <v-container style="display: inline-flex; justify-content: flex-start; align-items: center;">
                            <v-img max-width="89px" src="/images/pdf/coaching.png" width="78" height="120" style="cursor: pointer;"></v-img>
                            <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                            <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                descargar PDF
                            </p>
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
                window.open('/pdf/coaching.pdf', '_blank');
            }
        }
    }
</script>