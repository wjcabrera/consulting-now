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
                backgroundImage: `url('/images/products/productos-talent-mapping02.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex" style="margin-top: -3%;">
                    <v-col class="align-self-center" xl="6" lg="6" sm="12">
                        <h1 class="h1Custom">
                            Talent mapping
                        </h1>
                        <br>
                        <h2 class="h2Custom" style="color: #fafafa;">
                            Es una herramienta que mide e integra diferentes dimensiones de medición del talento.
                        </h2>
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
                        <h2 class="h2Custom" style="color: #4c4c4c;">Cross View 360° y 540°</h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            Es una herramienta de desarrollo que provee feedback sobre el desempeño, identificando aspectos fuertes y oportunidades de mejora. Es un proceso anónimo y confidencial que recolecta las percepciones de aquellos con quienes interactuamos en el día a día: jefes, reportes directos, pares y otros.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Mide las habilidades y comportamientos dentro de un modelo de competencias, demostrando qué necesita cada persona para crecer y desarrollarse en lo personal y profesional. Provee información enriquecedora sobre los comportamientos, constituyendo una mirada amplia que contribuye al autoconocimiento. Provee, además, las bases para la construcción del plan de desarrollo individual y la preparación para los próximos pasos.
                        </p>
                    </v-col>
                    <v-col xl="6" lg="6" sm="12" style="padding-top: 5%;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            Cross View es flexible y permite ser adaptada a distintos modelos de competencias, niveles de liderazgo e idiomas.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Cross View 540° ofrece un compilado de valores y atributos específicos para quienes deseen focalizar en estos aspectos, acompañando las competencias de gestión.
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="3">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="8" lg="8" sm="12">
                        <h3 class="h3Custom" style="padding-bottom: 10px;">
                            Talent Mapping
                        </h3>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            ¿Por qué elegir Talent Mapping? Porque es un proceso versátil e integrado que provee información sobre los distintos aspectos y factores que intervienen a la hora de medir y reconocer el potencial de un individuo.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            → A través de la integración de diferentes dimensiones y en concordancia con nivel de liderazgo, Talent Mapping es una poderosa herramienta que utiliza una plataforma digital para evaluar potencial. En combinación con ejercicios de gestión, es utilizada para evaluar performance.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            → Es flexible y al mismo tiempo robusta y rigurosa en como integra la información. Puede configurarse seleccionando las técnicas e instrumentos que más se ajusten a lo que se desea medir en cada rol. Asimismo, es aplicable a múltiples áreas y funciones en procesos clave como selección, desarrollo y sucesión.
                        </p>
                    </v-col>
                    <v-col class="d-flex justify-center align-center" xl="4" lg="4" sm="12">
                        <v-img src="/images/pdf/talentmapping_pdf_img.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                        <font-awesome-icon icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px;cursor: pointer;" @click="abrirPDF"/>
                        <p class="pCustom" style="color: #4c4c4c; margin-left: 10px; margin-bottom: 0;cursor: pointer;" @click="abrirPDF">
                            descargar PDF
                        </p>
                    </v-col>
                    <v-container style="display: flex; justify-content: end;">
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
                step: 1,
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            abrirPDF() {
                window.open('/pdf/Talent Mapping - Ingles.pdf', '_blank');
            }
        },
    }
</script>