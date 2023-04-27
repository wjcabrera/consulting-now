<template>
    <v-app style="background-color: #F7F7F7;">
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
                    <v-col v-for="(post, id) in items" :key="id" cols="12" lg="6" md="4" sm="12">
                        <v-card>
                            <v-card-actions style="position: absolute; right: 0;">
                                <v-btn icon color="blue-darken-2" @click="editPost(id)">
                                    <font-awesome-icon :icon="['fas', 'marker']" />
                                </v-btn>
                                <v-btn icon color="error" @click="deletePost(id)">
                                    <font-awesome-icon icon="fa-solid fa-trash-can" />
                                </v-btn>
                            </v-card-actions>
                            <v-card-title class="titleCustom" v-text="post.title"></v-card-title>
                            <v-card-subtitle class="pCustom" v-text="post.body"></v-card-subtitle>
                            <v-card-text>
                                <div>Whitehaven Beach</div>
                                <div>Whitsunday Island, Whitsunday Islands</div>
                            </v-card-text>
                        </v-card>
                    </v-col>
                </v-row>
            </v-item-group>
        </v-container>
    </v-app>

    <CreateEditPostComponent
    :id="id"
    :edit="edit"
    v-if="dialog"
    @hiddenDialog="hiddenDialog">
    </CreateEditPostComponent>
</template>
<script lang="ts">
    import CreateEditPostComponent from '../components/CreateEditPostComponent.vue';
    export default {
        components: {
            CreateEditPostComponent
        },

        data: () => ({
            id: -1,
            edit: false,
            dialog: false,
            items: [
                    {
                        category: 1,
                        body: 'Hello is it',
                        en: 'hello',
                        pt: 'alo',
                        date: '12-05-2001',
                        id: 2,
                        title: 'hola en'
                    },
                    {
                        category: 1,
                        body: 'Hello is it',
                        en: 'hello',
                        pt: 'alo',
                        date: '12-05-2011',
                        id: 1,
                        title: 'hola en'
                    }
            ],
            selection: [],
        }),

        methods: {
            createPost(): void {
                this.dialog = true;
            },

            editPost(postId: number): void {
                this.dialog = true;
                this.id = postId;
                this.edit = true;
                console.log(postId);
            },

            deletePost(postId: number): void {
                console.log(postId);
            },

            hiddenDialog(){
                this.dialog = false;
                this.id = -1;
                this.edit = false;
            }
        }
    }
</script>