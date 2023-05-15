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
                    display: 'flex',
                }">
                    <v-container class="d-flex justify-center align-center">
                        <v-row class="d-flex">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    {{ $t('tmeObject.title') }}
                                </h1>
                                <br>
                                <h2 class="h2Custom" style="color: #fafafa;">
                                    Un proceso objetivo que garantiza una experiencia de medición y aprendizaje.
                                    {{ $t('tmeObject.0') }}
                                </h2>
                                <br>
                                <p class="pCustom" style="color: #fafafa;">
                                    {{ $t('tmeObject.1') }}
                                </p>
                            </v-col>
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <v-container style="border: 4px solid #F3B007; padding: 50px;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        {{ $t('tmeObject.2') }}
                                    </h4>
                                    <br>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('tmeObject.3') }}
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('tmeObject.4') }}
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('tmeObject.5') }}
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('tmeObject.6') }}
                                    </p>
                                    <v-divider color="#fafafa"></v-divider>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('tmeObject.7') }}
                                    </p>
                                </v-container>
                            </v-col>
                        </v-row>
                    </v-container>
                </div>
            </transition>
        </div>
    </div>
    <v-container class="fullscreen" style="display: flex; align-items: center;">
        <v-container v-intersect="onIntersectWindow2">
            <transition name="slide-up">
                <v-row v-show="window2">
                    <v-col cols="12" xl="6" lg="6" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.title') }} (TME)
                        </h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.8') }}
                        </p>
                    </v-col>
                    <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 6%;">
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.9') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.10') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.11') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.12') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.13') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.14') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c; margin: 0 0 10px;">
                            {{ $t('tmeObject.15') }}
                        </p>
                    </v-col>
                </v-row>
            </transition>
        </v-container>
    </v-container>
    <v-container>
        <v-container v-intersect="onIntersectWindow3">
            <transition name="slide-up">
                <v-row v-show="window3">
                    <v-col cols="12" xl="6" lg="6" sm="12">
                        <h2 class="h2Custom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.16') }}
                        </h2>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <h4 class="h4Custom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.17') }}
                        </h4>
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.18') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.19') }}
                        </p>
                        <v-container style="display: inline-flex; justify-content: center; align-items: center;" click="abrirPDF('/pdf/tme' + this.$i18n.locale + '.pdf')">
                            <v-img max-width="89px" src="/images/pdf/tme.png" width="78" height="120" style="cursor: pointer;" ></v-img>
                            <font-awesome-icon @click="abrirPDF('/pdf/tme' + this.$i18n.locale + '.pdf')" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                            <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF('/pdf/tme' + this.$i18n.locale + '.pdf')">
                                {{ $t('dowload') }} PDF
                            </p>
                        </v-container>
                    </v-col>
                    <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 6%;">
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.20') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('tmeObject.21') }}
                        </p>
                        <br>
                        <v-container class="d-flex justify-center">
                            <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                                {{ $t('return') }}
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

            abrirPDF(link: string) {
                window.open(link, '_blank');
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