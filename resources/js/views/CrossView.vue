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
    <div v-intersect="onIntersect" style="margin-top: 64px;">
        <div class="fullscreen">
            <transition name="slide-up">
                <div class="fullscreen" v-show="window1"
                    :style="{
                        backgroundImage: `url('/images/products/productos-cross-view2.jpg')`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                    }">
                    <v-container class="d-flex justify-center align-cente fullscreen">
                        <v-row>
                            <v-col cols="12" class="align-self-center" xl="4" lg="4" sm="12">
                                <h1 class="h1Custom">
                                    Cross view 360° y 540°
                                </h1>
                                <br>
                                <p class="pCustom" style="color: #fafafa;">
                                    Cross View es una herramienta online de desarrollo. En sus dos versiones, brinda feedback sobre el desempeño identificando fortalezas y oportunidades de mejora.
                                </p>
                            </v-col>
                            <v-col cols="12" xl="4" lg="4" sm="12" class="align-self-center">
                                <v-container style="border: 4px solid #F3B007; padding: 14%;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        Cross View 360°
                                    </h4>
                                    <br>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        La medición online más flexible y fácil de usar
                                    </p>
                                    <v-divider color="white"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Presenta diferentes opciones para acercarnos al máximo a las necesidades del cliente y está disponible en varios idiomas.
                                    </p>
                                </v-container>
                            </v-col>
                            <v-col cols="12" xl="4" lg="4" sm="12" class="align-self-center">
                                <v-container style="border: 4px solid #F3B007; padding: 14%;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        Cross View 540°
                                    </h4>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Aporta 180° + de valor a su proceso
                                    </p>
                                    <v-divider color="white"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Esta versión centra el relevamiento en los valores de la organización y en los atributos personales de su gente.
                                    </p>
                                </v-container>
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
                    <v-container class="d-flex justify-center align-center fullscreen">
                        <v-row>
                            <v-col cols="12" xl="6" lg="6" sm="12">
                                <h2 class="h2Custom" style="color: #4c4c4c;">Cross View 360° y 540°</h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Es una herramienta de desarrollo que provee feedback sobre el desempeño, identificando aspectos fuertes y oportunidades de mejora. Es un proceso anónimo y confidencial que recolecta las percepciones de aquellos con quienes interactuamos en el día a día: jefes, reportes directos, pares y otros.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Mide las habilidades y comportamientos dentro de un modelo de competencias, demostrando qué necesita cada persona para crecer y desarrollarse en lo personal y profesional. Provee información enriquecedora sobre los comportamientos, constituyendo una mirada amplia que contribuye al autoconocimiento. Provee, además, las bases para la construcción del plan de desarrollo individual y la preparación para los próximos pasos.
                                </p>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 5%;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Cross View es flexible y permite ser adaptada a distintos modelos de competencias, niveles de liderazgo e idiomas.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Cross View 540° ofrece un compilado de valores y atributos específicos para quienes deseen focalizar en estos aspectos, acompañando las competencias de gestión.
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
                            <v-col cols="12" xl="8" lg="8" sm="12">
                                <h2 class="h2Custom" style="color: #4c4c4c;">2nd View</h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    Es una herramienta que puede ser utilizada luego de cualquier proceso de evaluación y mide el grado de mejora en la performance para las competencias seleccionadas para el desarrollo.
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    En sentido real, representa el resultado visible de la inversión en el desarrollo. Facilita a los participantes feedback valioso con respecto a la percepción que los demás tienen de su mejora. Por otro lado, aporta a la empresa información cuantificable para ganar insight acerca de las barreras culturales y los obstáculos en el desempeño que pudieran permanecer existentes.
                                </p>
                            </v-col>
                            <v-col cols="12" class="d-flex justify-center align-center" xl="4" lg="4" sm="12">
                                <v-img src="/images/pdf/cross_view.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                                <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                                <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                    descargar PDF
                                </p>
                            </v-col>
                        </v-row>
                    </v-container>
                    <v-container style="display: flex; justify-content: center;">
                        <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                            Volver
                        </v-btn>
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

            abrirPDF() {
                window.open('/pdf/crossView.pdf', '_blank');
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