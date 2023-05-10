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
        color: #4c4c4c;
        font-size: 18px;
        font-weight: 300;
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
    <div v-intersect="onIntersect" style="margin-top: 64px;">
        <div class="fullscreen">
            <transition name="slide-up">
                <div class="fullscreen" v-show="window1"
                :style="{
                    backgroundImage: `url('/images/products/gestion_conjunta2.png')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }">
                    <v-container class="d-flex justify-center align-center fullscreen">
                        <v-row class="d-flex" style="margin-top: -4%;">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    Gestión Conjunta
                                </h1>
                                <br>
                                <h2 class="h2Custom" style="color: #fafafa;">
                                    Análisis multidimensional de la cultura para gestar el cambio y promover la transformación.
                                </h2>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12">
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
                    <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 5%; padding-right: 2%;">
                        <h3 class="h3Custom">
                            Gestión Conjunta
                        </h3>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Desde Consulting Now, entendemos que podemos sumar una mirada externa fresca y objetiva a las necesidades actuales, con el agregado de expertise y conocimiento de gestión para apoyar el Negocio y la proyección futura.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Gestión Conjunta propone contar con un pilar externo que agregue valor al gestionar en colaboración , apuntalando cada situación y cada persona para agilizar los resultados.
                        </p>
                        <v-container style="display: inline-flex; justify-content: flex-start; align-items: center;">
                            <v-img src="/images/pdf/gestion_conjunta.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                            <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                            <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                descargar PDF
                            </p>
                        </v-container>
                    </v-col>
                    <v-col cols="12" xl="6" lg="6" sm="12" style="background-color: #F7F7F7; padding: 5%;">
                        <h4 class="h4Custom">
                            Talento
                        </h4>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            → Apuntalar los pilares de la estrategia, con herramientas, procesos y sistemas clave para apoyar los diferentes desafíos.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            → Identificar y medir el talento de manera objetiva y precisa en cada nivel.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            → Colaborar en los procesos de selección e incorporación de personal clave.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            → Homologación de competencias y comportamientos para diseñar una arquitectura del talento, creando soluciones para las diferentes circunstancias.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            → Desarrollo y formación en las distintas áreas: Cliente, Operaciones, Cambio e Innovación y Liderazgo.
                        </p>
                        <v-container class="d-flex justify-center align-center">
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
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            abrirPDF() {
                window.open('/pdf/jointManagement.pdf', '_blank');
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