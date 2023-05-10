<style scoped>
    p {
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 23px;
        color: #4c4c4c;
    }

    h1 {
        color: #fafafa;
        font-size: 50px;
        line-height: 50px;
        font-weight: 400;
    }

    .dividerCustom {
        height: 5px;
        background-color: #F3B007;
        border: 0px;
    }

    .titleCustom {
        color: #4c4c4c;
        font-size: 30px;
        font-weight: 300;
        line-height: 35px;
    }
</style>

<template>
    <v-app style="margin-top: 64px;">
        <div
            :style="{
                backgroundImage: `url('/images/alliances/alliances.jpeg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }">
            <v-container style="width: fit-content; display: inline-block; text-align: left; padding-left: 8%; padding-top: 10%; padding-bottom: 10%;">
                <h1 style="color: white;">
                    {{ $t("/alliances") }}
                </h1>
                <hr aria-orientation="horizontal" class="dividerCustom" style="text-align: left;">
            </v-container>
        </div>
        <v-container id="creating" class="justify-center align-center fullscreen" style="display: flex;">
            <v-row v-intersect="onIntersectCreating">
                <v-col cols="12" xl="4" lg="4" sm="12">
                    <transition name="slide-up">
                        <v-img style="border-radius: 2%; margin-top: 30px; cursor: pointer;" src="/images/creating-we.png" @click="redirect('https://www.creatingwe.com/')" v-show="showCreating"></v-img>
                    </transition>
                </v-col>
                <v-col cols="12" xl="8" lg="8" sm="12">
                    <transition name="slide-down">
                        <v-container v-show="showCreating">
                            <h2 class="titleCustom">
                                Creating We
                            </h2>
                            <hr aria-orientation="horizontal" class="dividerCustom">
                            <br>
                            <p>
                                {{ $t("creating we p1") }}
                            </p>
                            <p>
                                {{ $t("creating we p2") }}
                            </p>
                            <p>
                                {{ $t("creating we p3") }}
                            </p>
                            <p>
                                {{ $t("creating we p4") }}
                            </p>
                        </v-container>
                    </transition>
                </v-col>
            </v-row>
        </v-container>
        <div style="background-color: #F7F7F7;">
            <v-container id="experience-point" class="justify-center align-center fullscreen" style="display: flex;">
                <v-row v-intersect="onIntersectExpePoint">
                    <v-col cols="12" xl="8" lg="8" sm="12">
                        <transition name="slide-right">
                            <v-container v-show="showExpePoint">
                                <h2 class="titleCustom">
                                    ExperiencePoint
                                </h2>
                                <hr aria-orientation="horizontal" class="dividerCustom">
                                <br>
                                <p>
                                    {{ $t("ExperiencePoint p1") }}
                                </p>
                                <p>
                                    {{ $t("ExperiencePoint p2") }}
                                </p>
                                <p>
                                    {{ $t("ExperiencePoint p3") }}
                                </p>
                            </v-container>
                        </transition>
                    </v-col>
                    <v-col cols="12" xl="4" lg="4" sm="12">
                        <transition name="slide-left">
                            <v-img v-show="showExpePoint" style="border-radius: 2%; margin-top: 30px; cursor: pointer;" src="/images/ExperiencePoint_stacked_colour_lightBG.png" @click="redirect('https://www.experiencepoint.com/')"></v-img>
                        </transition>
                    </v-col>
                </v-row>
            </v-container>
        </div>
        <v-container id="master" class="justify-center align-center fullscreen" style="display: flex;">
            <v-row  v-intersect="onIntersectMaster">
                <v-col cols="12" xl="4" lg="4" sm="12">
                    <transition name="slide-left">
                        <v-img style="border-radius: 2%; margin-top: 30px;" src="/images/master.png" v-show="showMaster"></v-img>
                    </transition>
                </v-col>
                <v-col cols="12" xl="8" lg="8" sm="12">
                    <transition name="slide-down">
                        <v-container v-show="showMaster">
                            <h2 class="titleCustom">
                                Master Value People
                            </h2>
                            <hr aria-orientation="horizontal" class="dividerCustom">
                            <br>
                            <p>
                                {{ $t("master p1") }}
                            </p>
                            <p>
                                {{ $t("master p2") }}
                            </p>
                            <p>
                                {{ $t("master p3") }}
                            </p>
                            <p>
                                {{ $t("master p4") }}
                            </p>
                        </v-container>
                    </transition>
                </v-col>
            </v-row>
        </v-container>
        <div style="background-color: #F7F7F7;">
            <v-container id="e-valuation" class="justify-center align-center fullscreen" style="display: flex;">
                <v-row v-intersect="onIntersectEValuation">
                    <v-col cols="12" xl="8" lg="8" sm="12">
                        <transition name="slide-left">
                            <v-container v-show="showEValuation">
                                <h2 class="titleCustom">
                                    E-Valuation
                                </h2>
                                <hr aria-orientation="horizontal" class="dividerCustom">
                                <br>
                                <p>
                                    {{ $t("E-Valuation") }}
                                </p>
                            </v-container>
                        </transition>
                    </v-col>
                    <v-col cols="12" xl="4" lg="4" sm="12">
                        <transition name="slide-up">
                            <v-img v-show="showEValuation" style="border-radius: 2%; margin-top: 30px; cursor: pointer;" src="/images/logo-e-valuation.png" @click="redirect('https://www.e-valuation.com/')"></v-img>
                        </transition>
                    </v-col>
                </v-row>
            </v-container>
        </div>
    </v-app>
</template>

<script lang="ts">
    import i18n from '../plugins/i18n';

    export default {
        data() {
            return {
                showCreating: false,
                showExpePoint: false,
                showMaster: false,
                showEValuation: false
            }
        },
        mounted() {
            if (this.$route.hash != '') {
                const element = document.getElementById(this.$route.hash.substring(1));
                if (element) {
                    element.scrollIntoView();
                }
            }
        },

        methods: {
            redirect(link: string) {
                window.location.href = link;
            },

            onIntersectCreating(isIntersecting: boolean) {
                if (isIntersecting && !this.showCreating)
                    this.showCreating = true;
            },

            onIntersectExpePoint(isIntersecting: boolean) {
                if (isIntersecting && !this.showExpePoint)
                    this.showExpePoint = true;
            },

            onIntersectMaster(isIntersecting: boolean) {
                if (isIntersecting && !this.showMaster)
                    this.showMaster = true;
            },

            onIntersectEValuation(isIntersecting: boolean) {
                if (isIntersecting && !this.showEValuation)
                    this.showEValuation = true;
            },
        },
    }
</script>