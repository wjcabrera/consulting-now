<style scoped>
    .textItems {
        text-transform: none;
        color: #444444!important;
        font-size: 14px;
        font-weight: 300;
        line-height: 20px;
        text-align: left;
    }
</style>

<template>
  <v-toolbar color="#FFFFFF" style="position: fixed;top: 0;left: 0;right: 0;z-index: 999;">
    <v-spacer></v-spacer>
    <v-app-bar-nav-icon>
      <v-img class="bg-white" width="70" src="/images/logo-consulting-now.png" @click="redirect()" ></v-img>
    </v-app-bar-nav-icon>
    <v-spacer></v-spacer>

    <v-tabs fixed-tabs slider-color="#F3B007">
      <v-tab v-for="item in items" :key="item" height="100%" :to="item" class="textItems">
        {{ $t(item) }}
      </v-tab>
    </v-tabs>
    <v-spacer></v-spacer>
    <v-menu offset-y open-on-hover v-if="session">
      <template v-slot:activator="{ props }">
        <v-btn variant="plain" rounded="0" class="align-self-center me-4" height="100%" v-bind="props">
          {{ user }}
          <font-awesome-icon icon="fa-solid fa-chevron-down"/>
        </v-btn>
      </template>

      <v-list>
        <v-list-item>
        <v-list-item-title>
            <v-btn @click="logout()" style="text-transform: none">
              salir
              <font-awesome-icon icon="fa-solid fa-arrow-right-from-bracket" style="padding-left: 5px;"/>
            </v-btn>
        </v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
    <v-menu offset-y open-on-hover v-else>
      <template v-slot:activator="{ props }">
        <v-btn variant="plain" rounded="0" class="align-self-center me-4" height="100%" v-bind="props">
          {{ langCurrent }}
          <font-awesome-icon icon="fa-solid fa-chevron-down"/>
        </v-btn>
      </template>

      <v-list>
        <v-list-item v-for="lang in langs" :key="lang" @click="changeLang(lang)">
        <v-list-item-title>
            <v-btn icon>
                {{ lang }}
            </v-btn>
        </v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
    <v-btn icon @click="redirectLinkedin">
      <font-awesome-icon icon="fa-brands fa-linkedin-in" style="color: #F3B007"/>
    </v-btn>
  <v-spacer></v-spacer>

  </v-toolbar>
</template>

<script lang="ts">
import axios from 'axios';

  export default {
    props: {
      session: {
        type: Boolean,
        default: false
      },
      user: {
        type: String,
        default: null
      }
    },
    data() {
      return {
        langs: [
          'es', 'en', 'pt'
        ],
        langCurrent: 'es',
        items: [
          '/us',
          '/alliances',
          '/products',
          '/posts',
          '/contact',
        ],
      };
    },
    methods: {
      changeLang (lang: string) {
        this.langCurrent = lang;
        this.$i18n.locale = this.langCurrent;
      },
      redirect() {
        this.$router.push('/us');
      },
      redirectLinkedin() {
        window.location.href = 'https://www.linkedin.com/company/consulting-now/about/';
      },
      async logout() {
        await axios.post('/logout')
          .then(() => {
            window.location.reload();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    }
  };
</script>