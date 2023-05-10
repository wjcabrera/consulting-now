<style scoped>
  p {
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 0.5px;
    line-height: 23px;
  }

  .dividerCustom {
    height: 5px;
    background-color: #F3B007;
    border: 0px;
  }

  .titleCustom {
    font-size: 30px;
    font-weight: 300;
    line-height: 35px;
  }

  .parallax-section {
    /* height: 100vh; */
    overflow-x: hidden;
    overflow-y: auto;
    perspective: 1px;
    background-size: cover;
    background-attachment: fixed;
  }

  .color-on-hover {
    filter: grayscale(100%);
  }

  .color-on-hover:hover {
    filter: none;
  }

.h1Custom {
  font-size: 27px;
  line-height: 38px;
  font-weight: 400;
  color: white;
  margin: 0;
}
  .align-center {
    align-items: center;
  }
</style>

<template>
  <v-app style="padding-top: 64px;">
    <div style="width: 100vw;"
      :style="{ backgroundImage: `url('/images/us/photoPageUs.jpg')`,
      backgroundSize: 'cover',
      backgroundPosition: 'center' }">
      <transition name="slide-right" appear>
        <v-container style="display: flex; align-items: center; justify-content: space-between;">
          <h1 class="h1Custom" style="padding-bottom: 7%;">Gestión estratégica del Talento</h1>
          <v-img max-width="25%" src="/images/logo-consulting-now.png" style="flex: 1; margin-top: 9%; margin-right: 1%;"></v-img>
        </v-container>
      </transition>
    </div>
    <v-container style="background-color: #FFFFFF; display: flex; width: 100vw;" class="justify-center align-center fullscreen">
      <v-row>
        <v-col cols="12" xl="4" lg="4" sm="12" v-intersect="onIntersect">
          <transition name="slide-up">
            <v-container v-show="showANewApproach">
              <v-img style="border-radius: 5px; margin-top: 30px;" src="/images/us/photoPageUs3.jpg"></v-img>
            </v-container>
          </transition>
        </v-col>
        <v-col cols="12" xl="8" lg="8" sm="12">
        <transition name="slide-down">
          <v-container v-show="showANewApproach">
            <h2 class="titleCustom" style="color: #4c4c4c;">
              {{ $t('A new approach for a new world') }}
            </h2>
            <hr aria-orientation="horizontal" class="dividerCustom">
            <br>
            <p style="color: #4c4c4c;">
              {{ $t('A new approach for a new world p1') }}
            </p>
            <p style="color: #4c4c4c;">
              {{ $t('A new approach for a new world p2') }}
            </p>
            <p style="color: #4c4c4c;">
              {{ $t('A new approach for a new world p3') }}
            </p>
            <p style="color: #4c4c4c;">
              {{ $t('A new approach for a new world p4') }}
            </p>
          </v-container>
        </transition>
        </v-col>
      </v-row>
    </v-container>
    <section class="parallax-section fullscreen" :style="{ backgroundImage: `url(${'/images/us/photoPageUs2.jpg'})` }">
      <v-container v-intersect="onIntersectAlliances">
        <h2 class="titleCustom" style="color: #F3B007;">
          {{ $t("/alliances") }}
        </h2>
        <p style="color: #fafafa;">
          {{ $t("alliances p1") }}
        </p>
        <v-row>
            <v-col cols="12" v-for="item in items" :key="item.src" xl="3" lg="3" sm="12">
              <transition name="slide-down">
                <v-container v-show="item.show" style="border: 4px solid #F3B007; height: 240px; display: flex; justify-content: center; align-items: center;">
                    <v-hover v-slot="{ hover }">
                      <v-card style="width: 170px; height: 100px; display: flex; justify-content: center; align-items: center;" :style="{ transform: hover ? 'scale(1.2)' : 'scale(1)', transition: 'all 0.2s ease-in-out' }">
                        <v-img
                          style="cursor: pointer;"
                          max-width="100%"
                          max-height="100%"
                          :src="item.src"
                          @click="redirect(item.link)"
                        >
                        </v-img>
                      </v-card>
                    </v-hover>
                </v-container>
              </transition>
            </v-col>
        </v-row>
      </v-container>
    </section>
    <v-container style="background-color: #FFFFFF;" v-intersect="onIntersectInternationalExperience" class="fullscreen">
      <v-row>
        <v-col cols="12" xl="8" lg="8" sm="12">
        <transition name="slide-right">
          <v-container v-show="showInternationalExperience">
            <h2 class="titleCustom" style="color: #4c4c4c;">
              {{ $t("International experience") }}
            </h2>
            <hr aria-orientation="horizontal" class="dividerCustom">
            <br>
            <p style="color: #4c4c4c;">
              {{ $t("International experience p1") }}
            </p>
            <p style="color: #4c4c4c;">
              {{ $t("International experience p2") }}
            </p>
          </v-container>
        </transition>
        </v-col>
        <v-col cols="12" xl="4" lg="4" sm="12">
          <transition name="slide-left">
            <v-img style="border-radius: 2%; margin-top: 30px;" src="/images/us/iStock-831031024.jpg" v-show="showInternationalExperience"></v-img>
          </transition>
        </v-col>
      </v-row>
    </v-container>
    <section class="parallax-section fullscreen" :style="{ backgroundImage: `url('/images/us/pyd_index.jpg')` }">
      <v-container v-intersect="onIntersectProduct">
        <h2 class="titleCustom" style="color: #4c4c4c;">
          {{ $t("/products") }}
        </h2>
        <hr aria-orientation="horizontal" class="dividerCustom" style="width: 50%;">
        <br>
        <v-row>
          <v-col cols="12" v-for="(product, index) in products" :key="index" xl="3" lg="3" sm="12">
            <transition name="slide-left">
              <v-container v-show="product.show" class="align-center text-center" style="border: 5px solid #F3B007; height: 100%; display: table;"
              :style="{ backgroundColor: index % 2 === 0 ? '#F3B007' : '' }">
                <v-container style="cursor: pointer; display: table-cell; vertical-align: middle;" @click="redirect(product.link)"
                :style="{ color: index % 2 === 0 ? '#fafafa' : '#696969' }">
                  <h4>
                    {{ product.title}}
                  </h4>
                  <p>
                    {{ $t(product.paragraph) }}
                  </p>
                </v-container>
              </v-container>
            </transition>
          </v-col>
        </v-row>
      </v-container>
    </section>
    <v-container style="background-color: #FFFFFF;">
      <h2 class="titleCustom" style="color: #4c4c4c;">
        {{ $t("Who trusted us") }}
      </h2>
      <hr aria-orientation="horizontal" class="dividerCustom" style="width: 50%;">
      <v-slide-group ref="slideGroup" show-arrows :value="slideIndex" style="margin-top: 30px;">
        <v-slide-group-item v-for="n in 56" :key="n">
          <v-img class="color-on-hover d-flex" contain width="100" style="margin-left: 20px;" :src="`/images/partners/${n}.jpg`"></v-img>
        </v-slide-group-item>
      </v-slide-group>
    </v-container>
  </v-app>
</template>

<script lang="ts">
  import { defineComponent } from 'vue';

  export default defineComponent({
    data() {
      return {
        showANewApproach: false,
        showInternationalExperience: false,
        showImg: false,
        showTME: false,
        showCiq: false,
        showInnova: false,
        slideIndex: 0,
        slideTimer: 0,
        reset: true,
        items: [
          {
            src: '/images/creating-we.png',
            link: '/alliances#creating',
            show: false
          },
          {
            src: '/images/ExperiencePoint_stacked_colour_lightBG.png',
            link: '/alliances#experience-point',
            show: false
          },
          {
            src: '/images/logo-e-valuation.png',
            link: '/alliances#e-valuation',
            show: false
          },
          {
            src: '/images/master.png',
            link: '/alliances#master',
            show: false
          }
        ],
        products: [
          {
            link: '/products/tme',
            show: false,
            title: 'TME',
            paragraph: 'tme'
          },
          {
            link: '/products/conversational-intelligence',
            show: false,
            title: 'TME',
            paragraph: 'c-iq'
          },
          {
            link: '/products/innovation-experience',
            show: false,
            title: 'TME',
            paragraph: 'expeInnova'
          },
          {
            link: '/products/experience-of-change',
            show: false,
            title: 'TME',
            paragraph: 'expeChange'
          }
        ]
      }
    },
    mounted() {
      this.startSlideTimer();
    },
    methods: {
      startSlideTimer() {
        this.slideTimer = setInterval(() => {
          this.slideIndex += 6;
        }, 30000)
      },
      redirect(link: string) {
        this.$router.push(link);
      },
      onIntersect (isIntersecting: boolean) {
        if (isIntersecting && !this.showANewApproach)
          this.showANewApproach = true;
      },

      onIntersectInternationalExperience (isIntersecting: boolean) {
        if (isIntersecting && !this.showInternationalExperience)
          this.showInternationalExperience = true;
      },

      onIntersectImg(isIntersecting: boolean): void {
        if (isIntersecting && !this.showImg) {
          setTimeout(() => {
            this.showImg = true;
          }, 1000);
        }
      },

      onIntersectAlliances(isIntersecting: boolean) {
        if (isIntersecting) {
          this.items.forEach((element, index) => {
            setTimeout(() => {
              element.show = true;
            }, index * 300);
          });
        }
      },

      onIntersectProduct(isIntersecting: boolean) {
        if (isIntersecting) {
          this.products.forEach((element, index) => {
            setTimeout(() => {
              element.show = true;
            }, index * 300);
          });
        }
      },
    },
    beforeDestroy() {
      clearInterval(this.slideTimer)
    },
  });
</script>