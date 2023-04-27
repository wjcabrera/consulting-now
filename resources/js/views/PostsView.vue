<style scoped>
    .pCustom {
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 23px;
        color: #fafafa;
        text-align: left !important;
        margin-top: 2%;
        margin-bottom: 2%;
    }

    .h1Custom {
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
        cursor: pointer;
        padding: 5%;
        color: #4c4c4c;
        font-size: 23px !important;
        line-height: 30px;
        font-weight: 400;
    }

    .pCustomCategory {
        color: #4c4c4c;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0.5px;
        line-height: 21.4286px;
    }

    .spanCustom {
        color: #9c9c9c;
        font-size: 14px;
        font-weight: 300;
        line-height: 23px;
    }

    .h5Custom {
        color:#4c4c4c;
        font-size:14px;
        font-weight:600;
        line-height:15.4px;
    }

    .colorCustom {
        color: #F3B007;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 20px;
    }
</style>

<template>
    <v-app style="background-color: #F7F7F7;">
        <v-img style="align-items: center;" src="/images/posts/posts.jpg">
            <v-container style="width: fit-content; display: inline-block; text-align: left; padding-left: 8%;">
                <h1 class="h1Custom">
                    {{ $t("/posts") }}
                </h1>
                <hr aria-orientation="horizontal" class="dividerCustom">
            </v-container>
        </v-img>
        <v-container>
            <v-row>
                <v-col cols="12" lg="9" md="9" sm="12">
                    <v-container class="pa-1">
                        <v-item-group v-model="selected" multiple>
                            <v-row>
                                <v-col v-for="(post) in selected" :key="post.id" cols="12" lg="6" md="6" sm="12">
                                    <v-card @click="getPostById(post.id)">
                                        <v-hover v-slot="{ hover }">
                                            <v-card-title class="titleCustom" v-text="post['title_' + this.$i18n.locale]" :class="{ 'colorCustom': hover }"></v-card-title>
                                        </v-hover>
                                        <v-card-text class="line-clamp-2" v-html="post['text_' + this.$i18n.locale]"></v-card-text>
                                    </v-card>
                                </v-col>
                            </v-row>
                        </v-item-group>
                    </v-container>
                </v-col>
                <v-col cols="12" lg="3" md="3" sm="12">
                    <v-text-field
                        outlined
                        :label="searchLabel"
                        append-icon="mdi mdi-magnify"
                        v-model="searchText"
                    ></v-text-field>

                    <v-list>
                        <v-list-subheader>
                            {{ $t("Categorias")}}
                        </v-list-subheader>

                        <v-list-item v-for="(category) in categorys" min-height="10" :value="category" active-color="#F3B007" rounded="xl">
                            <v-list-item-title @click="filter(category.title)" v-text="category.title" color="#4c4c4c" style="padding-left: 2%; font-size: smaller;"></v-list-item-title>
                            <v-divider></v-divider>
                        </v-list-item>
                    </v-list>

                    <v-list lines="two">
                        <v-list-subheader>
                            {{ $t("Ultimos post")}}
                        </v-list-subheader>

                        <v-list-item v-for="(post, i) in posts" :key="i" :value="post" active-color="#F3B007" rounded="xl">
                            <v-divider></v-divider>
                            <template v-slot:prepend>
                                <font-awesome-icon icon="fa-solid fa-calendar-days" style="color: #F3B007"/>
                            </template>
                            <v-list-item-title @click="sort(i)" v-text="post.created_at.substring(0, 10)" color="#4c4c4c" style="padding-left: 2%; color: #9c9c9c;"></v-list-item-title>
                            <h5 class="h5Custom" style="padding-left: 2%;">
                                {{ post['title_' + this.$i18n.locale] }}
                            </h5>
                            <v-list-item-subtitle style="padding-left: 2%;" v-html="post['text_' + this.$i18n.locale]">
                            </v-list-item-subtitle>
                        </v-list-item>
                    </v-list>
                </v-col>
            </v-row>
        </v-container>
    </v-app>
</template>

<script lang="ts">
import axios from 'axios';

    export default {
        data: () => ({
            searchText: '',
            searchLabel: 'search',
            categotySelected: -1,
            selected: [
                {
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
                }
            ],
            posts: [
                {
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
                }
            ],
            categorys: [
                {
                    title: 'Medicion de talento'
                },
                {
                    title: 'Soluciones de formación' 
                },
                {
                    title: 'Nuevas estrategias de intervención'
                },
                {
                    title: 'Cambio e inovacion'
                },
                {
                    title: 'Soluciones de formación'
                }
            ]
        }),

        methods: {
            getPostById(idPost: number){
                this.$router.push({ name: 'post', params: { id: idPost } });
            },

            sort(categoryId: number) {
                console.log(categoryId);
            },

            filter(categoryId: string) {
                if (this.categotySelected == categoryId) {
                    this.selected = this.posts;
                } else {
                    this.selected = this.posts.filter(post => post.category === categoryId);
                    this.categotySelected = categoryId;
                }
            },

            search(text: string): void {
                if (text == '')
                    this.selected = this.posts;
                else
                    this.selected = this.posts.filter(
                        post => post['title_' + this.$i18n.locale].toLowerCase().includes(text.toLowerCase())
                    );
            },

            getPosts() {
                axios.get('/getPosts')
                .then((response) => {
                    this.posts = response.data.post;
                    this.selected = this.posts;
                })
                .catch((error) => {
                    console.log(error);
                });
            }
        },

        watch: {
            searchText(newVal) {
                this.search(newVal);
            },
        },

        created() {
            this.getPosts();
        }
    }
</script>