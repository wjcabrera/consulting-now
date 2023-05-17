<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin: 10px;
        /* padding: 10px; */
    }

    .fullscreen {
        width: 100vw;
        height: 100%;
    }
</style>
<template>
    <v-app style="background-color: #F7F7F7;">
        <NavBarComponent :session="true" :user="user"/>
        <v-container style="padding-top: 80px;">
            <v-row>
                <v-col cols="12" lg="6" md="6" sm="12">
                    <v-text-field
                        outlined
                        variant="solo"
                        :label="searchLabel"
                        v-model="searchText"
                        append-inner-icon="mdi-magnify"
                    ></v-text-field>
                </v-col>
                <v-col cols="12" lg="6" md="6" sm="12" style="display: flex; justify-content: end;">
                    <v-btn color="green-darken-3" @click="createPost()">
                        <font-awesome-icon icon="fa-solid fa-plus" style="padding-right: 5px;"/>
                        New Post
                    </v-btn>
                </v-col>
            </v-row>

            <v-item-group v-model="selection">
                <v-row>
                    <v-col cols="12" v-for="(post) in selected" :key="post.id" lg="6" md="6" sm="12">
                        <v-card>
                            <v-card-actions>
                                <v-row>
                                    <v-col cols="8">
                                        <v-card-title class="titleCustom" v-text="post['title_' + this.$i18n.locale]"></v-card-title>
                                    </v-col>
                                    <v-col cols="4">
                                        <v-btn icon color="#F3B007" @click="showPreview(post.id)">
                                            <font-awesome-icon icon="fa-solid fa-eye"/>
                                        </v-btn>
                                        <v-btn icon color="blue-darken-2" @click="editPost(post.id)">
                                            <font-awesome-icon :icon="['fas', 'marker']" />
                                        </v-btn>
                                        <v-btn icon color="error" @click="deleteDialog(post.id)">
                                            <font-awesome-icon icon="fa-solid fa-trash-can" />
                                        </v-btn>
                                    </v-col>
                                </v-row>
                                <!-- <p class="titleCustom">
                                    {{post.title_es}}
                                </p> -->
                            </v-card-actions>
                            <v-card-subtitle class="pCustom">
                                <font-awesome-icon icon="fa-solid fa-calendar-days" style="color: #F3B007"/>
                                <span style="padding-left: 5px;">{{post.created_at.substring(0, 10)}}</span>
                            </v-card-subtitle>
                            <div class="line-clamp-2" v-html="eliminarEtiquetas(post['text_es'])"></div>
                        </v-card>
                    </v-col>
                </v-row>
            </v-item-group>
            <v-dialog transition="dialog-top-transition" width="auto" v-model="showDelete">
                <v-card>
                    <v-card-title class="headline">Estas seguro de eliminar este post?</v-card-title>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" text @click="notDeletePost()">Cancel</v-btn>
                        <v-btn color="error" text @click="deletePost()">OK</v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-container>
    </v-app>

    <CreateEditPostComponent
    :id="postId"
    :edit="edit"
    v-if="dialog"
    @hiddenDialog="hiddenDialog">
    </CreateEditPostComponent>

    <PreViewPostComponent
    :id="postId"
    v-if="preview"
    class="fullscreen"
    @hiddenpreview="hiddenpreview"
    >
    </PreViewPostComponent>
</template>
<script lang="ts">
    import CreateEditPostComponent from './components/CreateEditPostComponent.vue';
    import PreViewPostComponent from './components/PreViewPostComponent.vue';
    import NavBarComponent from './components/NavBarComponent.vue';
    import axios from 'axios';

    export default {
        components: {
            CreateEditPostComponent,
            NavBarComponent,
            PreViewPostComponent
        },

        data: () => ({
            searchText: '',
            searchLabel: 'search',
            user: '',
            showDelete: false,
            postId: -1,
            edit: false,
            dialog: false,
            preview: false,
            items: [
                {
                    id: -1,
                    category: 0,
                    title_es: '',
                    title_en: '',
                    title_pt: '',
                    text_es: '',
                    text_en: '',
                    text_pt: '',
                    file_path: '',
                    created_at: '',
                }
            ],
            selected: [
                {
                    id: -1,
                    category: 0,
                    title_es: '',
                    title_en: '',
                    title_pt: '',
                    text_es: '',
                    text_en: '',
                    text_pt: '',
                    file_path: '',
                    created_at: '',
                }
            ],
            selection: [],
        }),

        methods: {
            createPost(): void {
                this.postId = -1;
                this.edit = false;
                this.dialog = true;
            },

            editPost(postId: number): void {
                this.postId = postId;
                this.edit = true;
                this.dialog = true;
            },

            showPreview(postId: number): void {
                this.postId = postId;
                this.preview = true;
            },

            deleteDialog(postId: number): void {
                this.showDelete = true;
                this.postId = postId;
            },

            deletePost(): void {
                let data = {id: this.postId}
                axios.post('/newsite/consulting-now/public/deletePost', data)
                .then((response) => {
                    this.getAllPosts();
                    this.showDelete = false;
                })
                .catch((error) => {
                    console.log(error);
                });
            },

            notDeletePost(): void {
                this.showDelete = false;
                this.postId = -1;
            },

            hiddenDialog(): void{
                this.dialog = false;
                this.postId = -1;
                this.edit = false;
                this.getAllPosts();
            },

            hiddenpreview(): void{
                this.preview = false;
                this.postId = -1;
            },

            async getAllPosts(): Promise<void> {
                axios.get('/newsite/consulting-now/public/getPosts')
                .then((response) => {
                    this.items = response.data.post;
                    this.selected = this.items;
                })
                .catch((error) => {
                    console.log(error);
                });
            },

            async getCurrentUser(): Promise<void> {
                await axios.get('/newsite/consulting-now/public/getCurrentUser')
                .then((response) => {
                    this.user = response.data.user;
                })
                .catch((error) => {
                    console.log(error);
                });
            },

            search(text: string): void {
                if (text == '')
                    this.selected = this.items;
                else
                    this.selected = this.items.filter(
                        post => post['title_es'].toLowerCase().includes(text.toLowerCase())
                    );
            },

            eliminarEtiquetas(html: string) {
                return html.replace(/<[^>]*>/g, ' ');
            }
        },

        watch: {
            searchText(newVal) {
                this.search(newVal);
            },
        },

        mounted(): void {
            this.getAllPosts();
            this.getCurrentUser();
        }
    }
</script>