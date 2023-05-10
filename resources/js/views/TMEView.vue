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
                    backgroundImage: `url('/images/products/fotor_2023-3-5_11_26_1.jpg')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }">
                    <v-container class="d-flex justify-center align-center">
                        <v-row class="d-flex">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    Talent Management Exercise (TME)
                                </h1>
                                <br>
                                <h2 class="h2Custom" style="color: #fafafa;">
                                    Un proceso objetivo que garantiza una experiencia de medición y aprendizaje.
                                </h2>
                                <br>
                                <p class="pCustom" style="color: #fafafa;">
                                    Provee información de varias fuentes que consolidan un proceso único e integrado desde distintas perspectivas. Se utilizan simulaciones de negocio e instrumentos y técnicas de medición, abarcando diferentes dimensiones de performance
                                </p>
                            </v-col>
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <v-container style="border: 4px solid #F3B007; padding: 50px;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        ¿En qué consiste Talent Management Exercise ?
                                    </h4>
                                    <br>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Entrevista por Competencias
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Ejercicio de inbox
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Instrumentos y Técnicas
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Simulaciones de Negocio
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        Feedback al Participante y la Organización
                                    </p>
                                </v-container>
                            </v-col>
                        </v-row>
                    </v-container>
                </div>
            </transition>
        </div>
    </div>
    <v-container class="d-flex justify-center align-center fullscreen">
        <v-container v-intersect="onIntersectWindow2">
            <transition name="slide-up">
                <v-row v-show="window2">
                    <v-col cols="12" xl="6" lg="6" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">Talent Management Exercise (TME)</h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">Es un proceso que garantiza una mirada amplia y profunda, brindando la mejor información para tomar decisiones acertadas de Talento. El ejercicio recrea un día simulado de trabajo, involucra distintas simulaciones de Negocios y provee información sobre las áreas fuertes y las oportunidades de mejora. El tipo de escenario se selecciona de acuerdo con el nivel de liderazgo que se quiere medir, considerando los desafíos y las competencias que corresponden al rol y o posición a evaluar. Hoy en día es un ejercicio que se puede llevar a cabo en forma presencial o virtual mapeando las competencias y comportamientos con el Modelo de gestión de la Empresa u Organización. Idiomas: español, inglés, portugués y francés.</p>
                    </v-col>
                    <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 6%;">
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            → Simulaciones de negocio.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            → Inventario de personalidad, intereses y motivaciones.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            → Modo de resolución de conflictos.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            → Instrumento cognitivo.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            → Entrevistas por competencias.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            La combinación e integración de las herramientas e instrumentos proporcionan un entendimiento claro de las capacidades, habilidades, intereses y motivaciones de las personas.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            Se involucran varios consultores con el objetivo de brindar distintas miradas y percepciones al resultado final de medición.
                        </p>
                    </v-col>
                </v-row>
            </transition>
        </v-container>
    </v-container>
    <v-container class="d-flex justify-center align-center fullscreen">
        <v-container v-intersect="onIntersectWindow3">
            <transition name="slide-up">
                <v-row v-show="window3">
                    <v-col cols="12" xl="6" lg="6" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">
                            TME On-line
                        </h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <h4 class="h4Custom" style="color: #4c4c4c;">
                            Una experiencia de Gestión virtual
                        </h4>
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Las mediciones constituyen un proceso interactivo, en un marco visualmente amigable y de gran impacto.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Mide e identifica capacidades y habilidades actuales, así como el potencial para la transición a un siguiente nivel.
                        </p>
                        <v-container style="display: inline-flex; justify-content: center; align-items: center;">
                            <v-img max-width="89px" src="/images/pdf/tme.png" width="78" height="120" style="cursor: pointer;"></v-img>
                            <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                            <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                descargar PDF
                            </p>
                        </v-container>
                    </v-col>
                    <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 6%;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            El proceso integra simulaciones y videos que permiten identificar el proceso de toma de decisiones de las distintas situaciones planteadas.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Mantenemos la misma calidad y la calidez que en lo presencial, acompañando el ejercicio de forma personal y con una coordinación en línea durante toda la experiencia.
                        </p>
                        <br>
                        <v-container class="d-flex justify-center">
                            <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                                Volver
                            </v-btn>
                        </v-container>
                    </v-col>
                </v-row>
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
                window3: false
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            abrirPDF() {
                window.open('/pdf/tme.pdf', '_blank');
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
            }
        },

        mounted() {
            window.scrollTo(0, 0);
        }
    }
</script>