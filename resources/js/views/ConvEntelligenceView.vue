<style scoped>
    .h1Custom {
        color: #f3b007;
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
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
</style>

<template>
    <div v-intersect="onIntersect" style="margin-top: 64px;">
        <div class="fullscreen">
            <transition name="slide-up">
                <div class="fullscreen" v-show="window1"
                    :style="{
                        backgroundImage: `url('/images/products/conv_in2.png')`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                    }">
                    <v-container class="d-flex justify-center align-center fullscreen">
                        <v-row class="d-flex" style="margin-top: 8%;">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    {{ $t('conversationalIntelligence') }}
                                </h1>
                                <h1 class="h1Custom">
                                    (C-IQ)
                                </h1>
                                <p class="pCustom" style="color: #fafafa;">
                                    {{ $t('conversationalIntelligence1') }}
                                </p>
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
                        <h4 class="h4Custom">
                            {{ $t('conversationalIntelligence2') }}
                        </h4>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('conversationalIntelligence3') }}
                        </p>
                    </v-col>
                    <v-col cols="12" class="d-flex justify-center align-center" xl="6" lg="6" sm="12" style="display: inline-flex; justify-content: flex-start; align-items: center;">
                        <v-img src="/images/pdf/i_conver.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                        <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                        <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                            {{ $t('download') }} PDF
                        </p>
                    </v-col>
                </v-row>
            </transition>
        </v-container>
    </v-container>
    <v-container class="d-flex justify-center align-center fullscreen">
        <v-container v-intersect="onIntersectWindow3">
            <transition name="slide-up">
                <v-container v-show="window3">
                    <v-container class="d-flex justify-center align-center">
                        <iframe
                            width="80%"
                            height="100%"
                            src="https://www.youtube.com/embed/Tutj0ehhtIU"
                            title="YouTube video player"
                            frameborder="0"
                            style="text-align: center; min-height: calc(100vh - 200px); height: 100%;"
                            allowfullscreen>
                        </iframe>
                    </v-container>
                    <v-container class="d-flex justify-center">
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
                window3: false
            }
        },
        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            abrirPDF() {
                window.open('/pdf/convEntelligence.pdf', '_blank');
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