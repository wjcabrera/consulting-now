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
                backgroundImage: `url('/images/products/productos-ADN2.jpg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row class="d-flex" style="margin-top: -5%;">
                    <v-col class="align-self-center" xl="4" lg="4" sm="12">
                        <h1 class="h1Custom">
                            Cultura Organizacional y el ADN del Liderazgo
                        </h1>
                        <h2 class="h2Custom" style="color: #fafafa;">
                            ¿Ya ha reconocido cuál es el ADN de su organización?
                        </h2>
                    </v-col>
                    <v-col class="align-self-center" xl="8" lg="8" sm="12" style="border: 5px solid #F3B007; height: 100%;">
                        <p class="pCustom" style="color: #fafafa; margin: 5%; text-align: center;">
                            ¿Sabe qué motiva a las personas a dar lo mejor de sí mismos y comprometerse en la construcción de una identidad? ¿Qué causa que los líderes pierdan la confianza en sus equipos? En la identificación y comprensión del ADN del liderazgo intervienen dimensiones y comportamientos, con el fin de medir las características esenciales de la cultura organizacional, que devela el código genético de interacción para moldear la calidad de la cultura y acceder al siguiente nivel de grandeza.
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </v-window-item>
        <v-window-item :value="2">
            <v-container class="d-flex justify-center align-center fullscreen90">
                <v-row>
                    <v-col xl="6" lg="6" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">
                            Cultura Organizacional y el ADN del Liderazgo
                        </h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            En la identificación y comprensión del ADN del liderazgo intervienen dimensiones y comportamientos, con el fin de medir las características esenciales de la cultura organizacional, que devela el código genético de interacción para moldear la calidad de la cultura y acceder al siguiente nivel de grandeza.
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            ¿Ya ha reconocido cuál es el ADN de su organización? ¿Sabe qué motiva a las personas a dar lo mejor de sí mismos y comprometerse en la construcción de una identidad? ¿Qué causa que los líderes pierdan la confianza en sus equipos?
                        </p>
                    </v-col>
                    <v-col xl="6" lg="6" sm="12" class="d-flex justify-center align-center">
                        <p class="pCustom" style="color: #4c4c4c;">
                            Cuando pensamos en las dimensiones como genes, nos abrimos a una nueva forma de pensar; una que nos inspira a descubrir el ADN de la cultura.
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
            }
        },
    }
</script>