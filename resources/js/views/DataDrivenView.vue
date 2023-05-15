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
                    backgroundImage: `url('/images/products/opto-back2.jpg')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                    display: 'flex',
                }">
                    <v-container class="d-flex justify-center align-center">
                        <v-row class="d-flex">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    {{ $t('dataDriven.title') }}
                                </h1>
                            </v-col>
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                            </v-col>
                        </v-row>
                    </v-container>
                </div>
            </transition>
        </div>
    </div>
    <v-container class="">
        <v-container v-intersect="onIntersectWindow2">
            <transition name="slide-up">
                <v-container v-show="window2">
                    <v-container>
                        <v-row>
                            <v-col cols="12" xl="6" lg="6" sm="12">
                                <h2 class="h2Custom" style="color: #4c4c4c;">
                                    OPTO
                                </h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.0') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.1') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.2') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.3') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.4') }}
                                </p>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 4%;">
                                <h4 class="h4Custom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.5') }}
                                </h4>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.6') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.7') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.8') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.9') }}
                                </p>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-container>
            </transition>
        </v-container>
    </v-container>
    <v-container class="" style="display: flex;">
        <v-container class="d-flex justify-center align-center" v-intersect="onIntersectWindow3">
            <transition name="slide-up">
                <v-container v-show="window3">
                    <v-container class="d-flex justify-center align-center">
                        <v-row>
                            <v-col cols="12" xl="6" lg="6" sm="12">
                                <h2 class="h2Custom" style="color: #4c4c4c;">
                                    MPA
                                </h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.10') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.11') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.12') }}
                                </p>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 4%;">
                                <h4 class="h4Custom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.13') }}
                                </h4>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('dataDriven.14') }}
                                </p>
                            </v-col>
                            <v-container class="d-flex justify-center align-center">
                                <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                                    {{ $t('return') }}
                                </v-btn>
                            </v-container>
                        </v-row>
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