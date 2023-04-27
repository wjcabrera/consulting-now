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
                backgroundImage: `url('/images/products/gestion_conjunta2.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex" style="margin-top: -4%;">
                    <v-col class="align-self-center" xl="6" lg="6" sm="12">
                        <h1 class="h1Custom">
                            Gestión Conjunta
                        </h1>
                        <br>
                        <h2 class="h2Custom" style="color: #fafafa;">
                            Análisis multidimensional de la cultura para gestar el cambio y promover la transformación.
                        </h2>
                    </v-col>
                    <v-col xl="6" lg="6" sm="12">
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                        <v-col xl="6" lg="6" sm="12" style="padding-top: 5%; padding-right: 2%;">
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
                        <v-col xl="6" lg="6" sm="12" style="background-color: #F7F7F7; padding: 5%;">
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
                window.open('/pdf/jointManagement.pdf', '_blank');
            }
        },
    }
</script>