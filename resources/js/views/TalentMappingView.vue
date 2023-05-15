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
                    backgroundImage: `url('/images/products/productos-talent-mapping02.png')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                }">
                    <v-container class="d-flex justify-center align-center fullscreen">
                        <v-row class="d-flex" style="margin-top: -3%;">
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                                <h1 class="h1Custom">
                                    {{ $t('talentMapping.title') }}
                                </h1>
                                <br>
                                <h2 class="h2Custom" style="color: #fafafa;">
                                    {{ $t('talentMapping.0') }}
                                </h2>
                            </v-col>
                            <v-col cols="12" class="align-self-center" xl="6" lg="6" sm="12">
                            </v-col>
                        </v-row>
                    </v-container>
                </div>
            </transition>
        </div>
    </div>
    <v-container class="d-flex justify-center align-center fullscreen">
        <v-container v-intersect="onIntersectWindow3">
            <transition name="slide-up">
                <v-row v-show="window3">
                    <v-col cols="12" xl="8" lg="8" sm="12">
                        <h3 class="h3Custom" style="padding-bottom: 10px;">
                            {{ $t('talentMapping.title') }}
                        </h3>
                        <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                        <br>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('talentMapping.1') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('talentMapping.2') }}
                        </p>
                        <p class="pCustom" style="color: #4c4c4c;">
                            {{ $t('talentMapping.3') }}
                        </p>
                    </v-col>
                    <v-col cols="12" class="d-flex justify-center align-center" xl="4" lg="4" sm="12">
                        <v-img src="/images/pdf/talentmapping_pdf_img.png" max-width="89" width="78" height="120" @click="abrirPDF('/pdf/tm' + this.$i18n.locale + '.pdf')" style="cursor: pointer;"></v-img>
                        <font-awesome-icon icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px;cursor: pointer;" @click="abrirPDF('/pdf/tm' + this.$i18n.locale + '.pdf')"/>
                        <p class="pCustom" style="color: #4c4c4c; margin-left: 10px; margin-bottom: 0;cursor: pointer;" @click="abrirPDF('/pdf/tm' + this.$i18n.locale + '.pdf')">
                            {{ $t('download') }} PDF
                        </p>
                    </v-col>
                    <v-container style="display: flex; justify-content: center;">
                        <v-btn rounded color="#F3B007" style="color: #fafafa; text-transform: none; text-align: center;" @click="redirect()">
                            {{ $t('return') }}
                        </v-btn>
                    </v-container>
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