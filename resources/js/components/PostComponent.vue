<style scoped>
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

.twoColumns {
    column-count: 2;
    column-gap: 20px;
}
</style>

<template>
    <div
        style="background-color: #F7F7F7; margin-top: 64px; height: 8%; display: flex; flex-direction: column; align-items: start; padding-left: 10%; justify-content: center;">
        <!-- <h1 class="h1Custom"> {{ post['title_' + this.$i18n.locale] }} </h1> -->
        <h1 class="h1Custom"> {{ post['title_en'] }} </h1>
        <hr aria-orientation="horizontal" class="dividerCustom" style="width: 20%">
    </div>
    <!-- <v-container class="justify-center align-center"> -->
    <v-container style="height: 30%;">
        <v-img :src="getImageUrl()"></v-img>
    </v-container>
    <v-container v-html="post['text_en']" :class="small ? '' : 'twoColumns'"></v-container>
    <!-- <v-container v-html="post['text_' + this.$i18n.locale]" :class="small ? '' : 'twoColumns'"></v-container> -->
    <v-container style="display: flex; justify-content: center;">
        <v-btn rounded color="#F3B007" style="color: #fafafa" @click="redirect()">
            Volver
        </v-btn>
    </v-container>
    <!-- </v-container> -->
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                small: false,
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

        async created() {
            this.id = this.$route.params.id;
            await this.getPostById();
            this.small = window.innerWidth < 600 || this.post['text_en'].length < 1000;
            // this.small = window.innerWidth < 600 || this.post['text_' + this.$i18n.locale].length < 1000;
        },
    }
</script>