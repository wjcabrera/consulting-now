<style>
    .dividerCustom {
        height: 5px;
        background-color: #F3B007;
        border: 0px;
    }

    .h1Custom {
        color: #4c4c4c;
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
    }
</style>

<template>
    <div style="background-color: #F7F7F7; margin-top: 5%; height: 150px; display: flex; align-items: center; padding-left: 10%;">
        <h1 class="h1Custom">
            {{ post['title_' + this.$i18n.locale] }}
            <hr aria-orientation="horizontal" class="dividerCustom">
        </h1>
    </div>
    <v-container style="height: 30%;margin: 5%;">
        <v-img :src="getImageUrl()"></v-img>
    </v-container>
    <v-container v-html="post['text_' + this.$i18n.locale]" style="column-count: 2; column-gap: 20px;"></v-container>
    <v-container style="display: flex; justify-content: center;">
        <v-btn rounded color="#F3B007" style="color: #fafafa" @click="redirect()">
            Volver
        </v-btn>
    </v-container>
</template>

<script lang="ts">
import axios from 'axios';

    export default {
        data() {
            return {
                id: null,
                post: {
                    id: -1,
                    category: '',
                    title_es: '',
                    title_en: '',
                    title_pt: '',
                    text_es: '',
                    text_en: '',
                    text_pt: '',
                    file_path: '',
                    created_at: ''
                },
                textColumn1: '',
                textColumn2: ''
            }
        },

        methods: {
            redirect() {
                this.$router.push('/posts/');
            },

            async getPostById() {
                let data = {
                    id: this.id
                };

                await axios.get('/getPostById', {
                    params: data
                })
                .then(response => {
                    this.post = response.data.post;
                })
                .catch(function (error) {
                });
            },

            getImageUrl() {
                return this.post.file_path.replace('public', '/storage');
            },
        },

        created() {
            this.id = this.$route.params.id;
            this.getPostById();
        },
    }
</script>