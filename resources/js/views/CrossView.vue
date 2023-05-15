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
                                    {{ $t('crossView.title') }}
                                </h1>
                                <br>
                                <p class="pCustom" style="color: #fafafa;">
                                    {{ $t('crossView.0') }}
                                </p>
                            </v-col>
                            <v-col cols="12" xl="4" lg="4" sm="12" class="align-self-center">
                                <v-container style="border: 4px solid #F3B007; padding: 14%;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        {{ $t('crossView.1') }}
                                    </h4>
                                    <br>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('crossView.2') }}
                                    </p>
                                    <v-divider color="white"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('crossView.3') }}
                                    </p>
                                </v-container>
                            </v-col>
                            <v-col cols="12" xl="4" lg="4" sm="12" class="align-self-center">
                                <v-container style="border: 4px solid #F3B007; padding: 14%;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        {{ $t('crossView.4') }}
                                    </h4>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('crossView.5') }}
                                    </p>
                                    <v-divider color="white"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('crossView.6') }}
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
                                <h2 class="h2Custom" style="color: #4c4c4c;">
                                    {{ $t('crossView.title') }}
                                </h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('crossView.7') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('crossView.8') }}
                                </p>
                            </v-col>
                            <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 5%;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('crossView.9') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('crossView.10') }}
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
                                <h2 class="h2Custom" style="color: #4c4c4c;">
                                    {{ $t('crossView.13') }}
                                </h2>
                                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('crossView.11') }}
                                </p>
                                <p class="pCustom" style="color: #4c4c4c;">
                                    {{ $t('crossView.12') }}
                                </p>
                            </v-col>
                            <v-col cols="12" class="d-flex justify-center align-center" xl="4" lg="4" sm="12">
                                <v-img src="/images/pdf/cross_view.png" max-width="89" width="78" height="120" @click="abrirPDF" style="cursor: pointer;"></v-img>
                                <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                                <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                    {{ $t('download') }} PDF
                                </p>
                            </v-col>
                        </v-row>
                    </v-container>
                    <v-container style="display: flex; justify-content: center;">
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