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

.fullscreen {
    width: 100vw;
    min-height: calc(100vh - 64px);
    /* Ajusta el valor de 64px a tu barra superior de navegación */
    height: 100%;
}
</style>

<template>
    <v-dialog transition="dialog-top-transition" v-model="dialog">
        <v-card-actions style="background-color: cornflowerblue;">
            <v-spacer></v-spacer>
            <h1 style="color: #F7F7F7;">
                PREVIEW
            </h1>
            <v-spacer></v-spacer>
            <v-btn style="color: #F7F7F7;" variant="text" @click="hiddenpreview">
                <font-awesome-icon icon="fa-solid fa-xmark" style="color: #ffffff;" />
            </v-btn>
        </v-card-actions>
        <v-card>
            <div style="background-color: #F7F7F7; display: flex; align-items: center; padding-left: 10%;">
                <h1 class="h1Custom" style="margin-top: 40px; margin-bottom: 40px;">
                    {{ post['title_' + this.$i18n.locale] }}
                    <hr aria-orientation="horizontal" class="dividerCustom">
                </h1>
            </div>
            <v-container class="justify-center align-center">
                <v-container style="height: 600px;">
                    <v-img :src="getImageUrl()"></v-img>
                </v-container>
                <v-container v-html="post['text_' + this.$i18n.locale]" :class="small ? '' : 'twoColumns'"></v-container>
            </v-container>
        </v-card>
    </v-dialog>
</template>

<script lang="ts">
import axios from 'axios';

    export default {
        data() {
            return {
                dialog: true,
                small: false,
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

        props: {
            id: {
                type: Number,
                required: true
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

            hiddenpreview() {
                this.$emit('hiddenpreview');
            },
        },

        async created() {
            await this.getPostById();
            this.small = window.innerWidth < 600 || this.post['text_' + this.$i18n.locale].length < 1000;
        },
    }
</script>