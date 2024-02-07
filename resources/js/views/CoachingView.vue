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
                        backgroundImage: `url('/images/products/productos-coaching.png')`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                        display: 'flex',
                    }">
                    <v-container class="d-flex justify-center align-center">
                        <v-row>
                            <v-col cols="12" class="align-self-center" xl="4" lg="4" sm="12">
                                <h1 class="h1Custom">
                                    {{ $t('coachingView.title') }}
                                </h1>
                                <br>
                                <p class="pCustom" style="color: #fafafa;">
                                    {{ $t('coachingView.5') }}
                                </p>
                            </v-col>
                            <v-col cols="12" xl="4" lg="4" sm="12">
                                <v-container style="border: 4px solid #F3B007; padding: 14%;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        {{ $t('coachingView.6') }}
                                    </h4>
                                    <br>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('coachingView.7') }}
                                    </p>
                                </v-container>
                            </v-col>
                            <v-col cols="12" xl="4" lg="4" sm="12">
                                <v-container style="border: 4px solid #F3B007; padding: 14%;">
                                    <h4 class="h4Custom" style="text-align: center;">
                                        {{ $t('coachingView.title') }}
                                    </h4>
                                    <p class="pCustom" style="text-align: center; padding-top: 16px; color: #fafafa;">
                                        {{ $t('coachingView.8') }}
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
                    <v-row>
                        <v-col cols="12" xl="6" lg="6" sm="12">
                            <h2 class="h2Custom" style="color: #4c4c4c;">
                                {{ $t('coachingView.title') }}
                            </h2>
                            <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: #F3B007; border-color: white; border: 0px;">
                            <br>
                            <p class="pCustom" style="color: #4c4c4c;">
                                {{ $t('coachingView.0') }}
                            </p>
                            <p class="pCustom" style="color: #4c4c4c;">
                                {{ $t('coachingView.1') }}
                            </p>
                        </v-col>
    
                        <v-col cols="12" xl="6" lg="6" sm="12" style="padding-top: 6%;">
                            <p class="pCustom" style="color: #4c4c4c;">
                                {{ $t('coachingView.2') }}
                            </p>
                            <p class="pCustom" style="color: #4c4c4c;">
                                {{ $t('coachingView.3') }}
                            </p>
                            <p class="pCustom" style="color: #4c4c4c;">
                                {{ $t('coachingView.4') }}
                            </p>
    
                            <v-container style="display: inline-flex; justify-content: flex-start; align-items: center;">
                                <v-img max-width="89px" src="/images/pdf/coaching.png" width="78" height="120" style="cursor: pointer;"></v-img>
                                <font-awesome-icon @click="abrirPDF" icon="fa-regular fa-circle-down" style="color: #F3B007; width: 50px; height: 50px; cursor: pointer; margin-left: 5%;" />
                                <p class="pCustom" style="color: #4c4c4c; cursor: pointer; margin-left: 5%;" @click="abrirPDF">
                                    {{ $t('download')}} PDF
                                </p>
                            </v-container>
                        </v-col>
                    </v-row>
                    <v-container class="d-flex justify-center align-center">
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
            }
        },

        methods: {
            redirect() {
                this.$router.push('/products/');
            },

            abrirPDF() {
                window.open('/pdf/coaching.pdf', '_blank');
            },

            onIntersect (isIntersecting: boolean) {
                if (isIntersecting && !this.window1)
                    this.window1 = isIntersecting;
            },

            onIntersectWindow2 (isIntersecting: boolean) {
                if (isIntersecting && !this.window2)
                    this.window2 = isIntersecting;
            },
        },

        mounted() {
            window.scrollTo(0, 0);
        }
    }
</script>