<style>
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
        <NavBarComponent :session="true" :user="user"/>
        <v-container style="padding-top: 80px;">
            <v-row>
                <v-col cols="12" lg="6" md="6" sm="12">
                    <v-text-field
                        density="compact"
                        variant="solo"
                        label="Search Posts"
                        single-line
                        hide-details
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
                    <v-col v-for="(post) in items" :key="post.id" cols="12" lg="6" md="4" sm="12">
                        <v-card>
                            <v-card-actions style="position: absolute; right: 0;">
                                <v-btn icon color="blue-darken-2" @click="editPost(post.id)">
                                    <font-awesome-icon :icon="['fas', 'marker']" />
                                </v-btn>
                                <v-btn icon color="error" @click="deleteDialog(post.id)">
                                    <font-awesome-icon icon="fa-solid fa-trash-can" />
                                </v-btn>
                            </v-card-actions>
                            <v-card-title class="titleCustom" v-text="post.title_es"></v-card-title>
                            <v-card-subtitle class="pCustom">
                                <font-awesome-icon icon="fa-solid fa-calendar-days" style="color: #F3B007"/>
                                <span style="padding-left: 5px;">{{post.created_at.substring(0, 10)}}</span>
                            </v-card-subtitle>
                            <v-card-text class="line-clamp-2" v-html="post.text_es"></v-card-text>
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
</template>
<script lang="ts">
    import CreateEditPostComponent from './components/CreateEditPostComponent.vue';
    import NavBarComponent from './components/NavBarComponent.vue';
    import axios from 'axios';

    export default {
        components: {
            CreateEditPostComponent,
            NavBarComponent
        },

        data: () => ({
            user: '',
            showDelete: false,
            postId: -1,
            edit: false,
            dialog: false,
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

            deleteDialog(postId: number): void {
                this.showDelete = true;
                this.postId = postId;
            },

            deletePost(): void {
                let data = {id: this.postId}
                axios.post('/deletePost', data)
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

            async getAllPosts(): Promise<void> {
                axios.get('/getPosts')
                .then((response) => {
                    this.items = response.data.post;
                })
                .catch((error) => {
                    console.log(error);
                });
            },

            async getCurrentUser(): Promise<void> {
                await axios.get('/getCurrentUser')
                .then((response) => {
                    this.user = response.data.user;
                })
                .catch((error) => {
                    console.log(error);
                });
            },
        },

        mounted(): void {
            this.getAllPosts();
            this.getCurrentUser();
        }
    }
</script>