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
                    backgroundImage: `url('/images/products/productos-experience-innovation2.jpg')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }">
                    <v-container class="d-flex justify-center align-center fullscreen">
                        <v-row class="d-flex" style="margin-top: 8%;">
                            <v-col cols="12" class="align-self-center" xl="8" lg="8" sm="12">
                            </v-col>
                            <v-col cols="12" class="align-self-center" xl="4" lg="4" sm="12" style="margin-top: -10%;">
                                <h1 class="h1Custom">
                                    {{ $t('innovationExperienceView.title') }}
                                </h1>
                                <br>
                                <p class="pCustom" style="color: #fafafa;">
                                    {{ $t('innovationExperienceView.0') }}
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
                        <h3 class="h3Custom">
                            {{ $t('innovationExperienceView.1') }}
                        </h3>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('innovationExperienceView.2') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('innovationExperienceView.3') }}
                        </p>
                    </v-col>
                    <v-col cols="12" xl="6" lg="6" sm="12">
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('innovationExperienceView.4') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('innovationExperienceView.5') }}
                        </p>
                        <v-container style="display: inline-flex; justify-content: flex-start; align-items: center;">
                            <v-img src="/images/pdf/transforming_.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                            <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                            <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                {{ $t('donwload') }} PDF
                            </p>
                        </v-container>
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
                            src="https://player.vimeo.com/video/521946126?h=ff28db48c7"
                            title="YouTube video player"
                            frameborder="0"
                            style="text-align: center; min-height: calc(100vh - 200px); height: 100%;"
                            allowfullscreen>
                        </iframe>
                    </v-container>
                    <v-container class="d-flex justify-center">
                        <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                            {{ $t('return') }}
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
                window.open('/pdf/innovationExperience.pdf', '_blank');
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