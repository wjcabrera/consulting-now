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
                backgroundImage: `url('/images/products/productos-c-iq2.jpg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex">
                    <v-col class="align-self-center" xl="4" lg="4" sm="12">
                        <h1 class="h1Custom">
                            Human centered design
                        </h1>
                        <br>
                        <p class="pCustom" style="color: #fafafa;">
                            “Necesitamos crear una cultura de colaboración integrando los esfuerzos para lograr una ejecución ágil y efectiva”.
                        </p>
                    </v-col>
                    <v-col class="align-self-center" xl="8" lg="8" sm="12">
                        <v-container style="border: 4px solid #F3B007; padding: 6%;">
                            <h4 class="h4Custom" style="text-align: center;">
                                Que se espera alcanzar
                            </h4>
                            <br>
                            <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                Cultivar nuevos modelos mentales , aplicando empatía para entender mejor a quienes servimos.
                            </p>
                            <v-divider color="#fafafa"></v-divider>
                            <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                Crear un ambiente que habilite a las personas a adoptar una forma creativa de pensar los problemas y soluciones.
                            </p>
                            <v-divider color="#fafafa"></v-divider>
                            <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                Generar compromiso experimentando en los equipos de proyecto, el enfrentar barreras y resolver los desafíos en colaboración , para crear procesos y servicios que luego se van a compartir con el resto de la Compañía u Organización.
                            </p>
                        </v-container>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="8" lg="8" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">
                            Human centered design
                        </h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            En el centro de diseño el foco esta en la experimentación en colaboración. El resultado es la forma de construir procesos y soluciones que sean adecuados para la compañía y las diferentes circunstancias.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Al construir una ejecución cruzada, los equipos aprenden nuevos métodos, aplicándolos a proyectos reales de una manera estructurada y con diferentes formas de apoyo.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            Se descubren barreras en forma conjunta y se construyen soluciones, adaptando el enfoque a la cultura existente.
                        </p>
                    </v-col>
                    <v-col class="d-flex justify-center align-center" xl="4" lg="4" sm="12">
                        <v-img src="/images/pdf/human_center_design.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                        <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                        <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
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
                window.open('/pdf/humanCenterDesign.pdf', '_blank');
            }
        },
    }
</script>