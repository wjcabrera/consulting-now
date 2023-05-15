<style>
#editor {
    max-height: 300px;
    max-width: 900px;
    overflow: scroll;
}
</style>

<template>
    <v-dialog transition="dialog-top-transition" width="auto" v-model="dialog">
        <v-card class="mx-auto" min-width="500">
            <v-card-title class="text-h6 font-weight-regular justify-space-between">
                <span>{{ currentTitle }}</span>
            </v-card-title>

            <v-window v-model="step">
                <v-form enctype="multipart/form-data">
                    <v-window-item :value="1">
                        <v-card-text>
                            <span class="text-caption text-grey-darken-1">
                                Seleccione la categoria del post
                            </span>
                            <v-select
                                v-model="post.category"
                                :items="categories"
                                item-title="name"
                                item-value="id"
                                label="Categoria"
                            ></v-select>
                        </v-card-text>
                    </v-window-item>
    
                    <v-window-item :value="2">
                        <v-card-text>
                            <v-text-field label="Titulo" v-model="post.title_es" placeholder="Titulo"></v-text-field>
                            <vue-editor id="editor" v-model="post.text_es" :editorToolbar="editorOptions"></vue-editor>
                            <span class="text-caption text-grey-darken-1">
                                Escribe el texto del post
                            </span>
                        </v-card-text>
                    </v-window-item>
    
                    <v-window-item :value="3">
                        <v-card-text>
                            <v-text-field label="Title" v-model="post.title_en" placeholder="Title"></v-text-field>
                            <vue-editor id="editor" v-model="post.text_en" :editorToolbar="editorOptions"></vue-editor>
                            <span class="text-caption text-grey-darken-1">
                                write the post text
                            </span>
                        </v-card-text>
                    </v-window-item>
    
                    <v-window-item :value="4">
                        <v-card-text>
                            <v-text-field label="Qualificação" v-model="post.title_pt" placeholder="Qualificação"></v-text-field>
                            <vue-editor id="editor" v-model="post.text_pt" :editorToolbar="editorOptions"></vue-editor>
                            <span class="text-caption text-grey-darken-1">
                                Escreva o texto do post
                            </span>
                        </v-card-text>
                    </v-window-item>
    
                    <v-window-item :value="5">
                        <v-card-text>
                            <v-file-input accept="image/*" label="File input" v-model="post.file_path"></v-file-input>
                            <span class="text-caption text-grey-darken-1">
                                select the image
                            </span>
                        </v-card-text>
                    </v-window-item>
                </v-form>
            </v-window>

            <v-divider></v-divider>

            <v-card-actions>
                <v-btn
                    v-if="step > 1"
                    variant="text"
                    @click="step--"
                >
                    Back
                </v-btn>
                <v-spacer></v-spacer>
                <v-btn
                    v-if="step < 5"
                    color="primary"
                    variant="flat"
                    @click="step++"
                >
                    Next
                </v-btn>
                <v-btn
                    v-else
                    color="primary"
                    variant="flat"
                    @click="save"
                >
                    Save
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    import axios from "axios";
    import { VueEditor } from "vue3-editor";

    export default {
        props: {
            id: Number,
            edit: Boolean,
        },

        components: {
            VueEditor
        },

        data: () => ({
            step: 1,
            dialog: true,
            post: {
                id: -1,
                category: '',
                title_es: '',
                title_en: '',
                title_pt: '',
                text_es: '',
                text_en: '',
                text_pt: '',
                file_path: []
            },
            editorOptions: [
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'indent': '-1' }, { 'indent': '+1' }],
                [{ 'size': ['small', false, 'large', 'huge'] }],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                ['clean']
            ],
            categories: [
                {
                    'name': 'Medicion de talento',
                    'id': 'talent measurement'
                },
                {
                    'name': 'Soluciones de formación',
                    'id': 'training solutions'
                },
                {
                    'name': 'Nuevas estrategias de intervención',
                    'id': 'new intervention strategies'
                },
                {
                    'name': 'Cambio e inovacion',
                    'id': 'change and innovation'
                },
                {
                    'name': 'Coaching',
                    'id': 'coaching'
                }
            ]
        }),

        watch: {
            dialog(newVal) {
                if(!newVal)
                    this.hiddenDialog();
            },
            post(newVal){
                console.log(newVal);
            }
        },

        methods: {
            hiddenDialog() {
                this.$emit('hiddenDialog');
            },

            async save() {
                const formData = new FormData();
                formData.append('id', this.post.id);
                formData.append('category', this.post.category);
                formData.append('title_es', this.post.title_es);
                formData.append('title_en', this.post.title_en);
                formData.append('title_pt', this.post.title_pt);
                formData.append('text_es', this.post.text_es);
                formData.append('text_en', this.post.text_en);
                formData.append('text_pt', this.post.text_pt);
                this.post.file_path[0] == undefined ? '' : formData.append('file_path', this.post.file_path[0]);

                await axios.post(this.edit ? '/editPost' : '/posts', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(response => {
                    this.hiddenDialog();
                })
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
                    this.post.file_path = [];
                })
                .catch(function (error) {
                });
            },
        },

        computed: {
            currentTitle () {
                switch (this.step) {
                    case 1: return 'Categoria'
                    case 2: return 'Español'
                    case 3: return 'English'
                    case 4: return 'português'
                    case 5: return 'Multimedia'
                }
            },
        },

        created() {
            if (this.edit)
                this.getPostById();
        }
    }
</script>