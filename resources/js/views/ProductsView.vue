<style scoped>
    .pCustom {
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 23px;
        color: #fafafa;
        text-align: left !important;
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

    .footerCustom {
        cursor: pointer;
        font-weight: 400;
        padding-bottom: 5px;
        padding-top: 5px;
        font-size: 17px;
        color: #3E3E3E;
        line-height: 35px;
        text-align: center;
    }

    .textItems {
        letter-spacing: 0.5px;
        text-transform: none;
        font-size: 14px;
        font-weight: 500;
        line-height: 20px;
        text-align: left;
    }
</style>

<style>
    .cell {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 25px;
        height: 25px;
        border: 1px solid #aaa;
        margin-right: -1px;
        margin-bottom: -1px;
    }
    .cell:nth-child(3n) {
        margin-right: 0;
    }
    .cell:nth-child(27n) {
        margin-bottom: 0;
    }
    .cell-move {
        transition: transform 0.5s;
    }

    .cell-enter-active,.cell-leave-active {
        transition: all 0.05s ease-out;
    }

    .cell-enter,.cell-leave-to {
        opacity: 0;
        transform: translateY(10px);
    }

</style>

<template>
    <v-app style="padding-top: 64px;">
        <div
            :style="{
                backgroundImage: `url('/images/products/products.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center'
            }">
            <v-container style="width: fit-content; display: inline-block; text-align: left; padding-left: 8%; padding-top: 6%; padding-bottom: 6%;">
                <v-row>
                    <v-col cols="12" md="8" sm="12" lg="8">
                        <h1 class="h1Custom">
                            {{ $t("high impact solutions") }}
                        </h1>
                        <hr aria-orientation="horizontal" class="dividerCustom">
                    </v-col>
                </v-row>
                <br>
                <v-row>
                    <v-col cols="12" md="6" sm="12" lg="6">
                        <p class="pCustom">
                            {{ $t("high impact solutions p1") }}
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </div>
        <v-container>
            <v-container class="d-flex justify-center align-center">
                <v-tabs color="#F3B007" class="d-none d-sm-flex">
                    <v-tab v-for="item in items" :key="item.category" height="100%" class="textItems" @click="filter(item.category)">
                        {{ $t(item.title) }}
                    </v-tab>
                    <v-tab height="100%" @click="order()">
                        <font-awesome-icon :icon="iconActive ? 'fa-solid fa-arrow-up' : 'fa-solid fa-arrow-down'"/>
                    </v-tab>
                </v-tabs>
                <v-select class="d-sm-none"
                    label="Select"
                    :items="items"
                    item-text="title"
                    item-value="category"
                    v-model="selectedItem"
                ></v-select>
                <v-btn class="d-sm-none" @click="order()" style="margin-left: 5%; height: 50px; width: 20px; margin-top: -6%;" variant="tonal">
                    <font-awesome-icon :icon="iconActive ? 'fa-solid fa-arrow-up' : 'fa-solid fa-arrow-down'"/>
                </v-btn>
            </v-container>
            <v-container>
                <v-row>
                    <transition-group name="cell" tag="div" style="display: contents;">
                        <v-col cols="12" v-for="product in selected" :key="product.src" sm="12" md="6" lg="3" style="height: fit-content;">
                            <v-hover v-slot="{ isHovering, props }">
                                <v-card height="150"
                                style="overflow: hidden;"
                                v-bind="props"
                                @click="redirect(product.link)">
                                    <v-img
                                        :src="product.src"
                                        height="150"
                                        style="overflow: hidden;"
                                        :style="{ transform: isHovering ? 'scale(1.2)' : 'scale(1)', transition: 'all 0.2s ease-in-out' }"
                                        :class="{ 'scale-120': isHovering }"
                                        transition="scale-transition"
                                    ></v-img>
                                </v-card>
                            </v-hover>
                            <p class="footerCustom" @click="redirect(product.link)">
                                {{ $t(product.title) }}
                            </p>
                        </v-col>
                    </transition-group>
                </v-row>
            </v-container>
        </v-container>
    </v-app>
</template>

<script lang="ts">
    import i18n from '../plugins/i18n';
    export default {
        data: () => ({
            selectedItem: {
                title: 'All',
                category: 0
            },
            iconActive: true,
            items: [
                {
                    title: 'All',
                    category: 0
                },
                {
                    title: 'Talent Measurement Solutions',
                    category: 1
                },
                {
                    title: 'training solutions',
                    category: 2
                },
                {
                    title: 'coaching',
                    category: 3
                },
                {
                    title: 'new intervention strategies',
                    category: 4
                }
            ],
            products: [
                {
                    src: `/images/products/productos-talent-mapping01.png`,
                    category: 1,
                    title: "Talent mapping",
                    link: '/products/talent-mapping' 
                },
                {
                    src: '/images/products/tme.jpg',
                    category: 1,
                    title: "Talent Management Exercise",
                    link: '/products/tme' 
                },
                {
                    src: '/images/products/productos-cross-view.jpg',
                    category: 1,
                    title: "Cross view 360° and 540°",
                    link: '/products/cross-view'
                },
                {
                    src: '/images/products/productos-opto-gris.jpg',
                    category: 1,
                    title: "Data-driven Analytics",
                    link: '/products/data-driven' 
                },
                {
                    src: '/images/products/productos-experience-innovation.jpg',
                    category: 2,
                    title: "Innovation Experience",
                    link: '/products/innovation-experience' 
                },
                {
                    src: '/images/products/productos-experience-change-001-big.jpg',
                    category: 2,
                    title: "Exchange Experience",
                    link: '/products/experience-of-change' 
                },
                {
                    src: '/images/products/conv_int.png',
                    category: 2,
                    title: "Conversational Intelligence (C-IQ)",
                    link: '/products/conversational-intelligence' 
                },
                {
                    src: '/images/products/productos-ADN.jpg',
                    category: 2,
                    title: "Organizational Culture and the DNA of Leadership",
                    link: '/products/dna-of-leadership' 
                },
                {
                    src: '/images/products/productos-c-iq.jpg',
                    category: 4,
                    title: "Human centered design",
                    link: '/products/human-centered-design' 
                },
                {
                    src: '/images/products/productos-coaching.png',
                    category: 3,
                    title: "coaching",
                    link: '/products/coaching' 
                },
                {
                    src: '/images/products/gestion_conjunta.png',
                    category: 4,
                    title: "Joint Management",
                    link: '/products/joint-management' 
                },
            ],
            selected: [
                {
                    src: '',
                    category: 0,
                    title: '',
                    link: ''
                }
            ],
        }),

        methods: {
            redirect(link: string) {
                this.$router.push(link);
            },
            filter(category: number) {
                if (category == 0)
                    this.selected = this.products;
                else 
                    this.selected = this.products.filter(producto => producto.category === category);
            },
            order() {
                this.iconActive = !this.iconActive;
                this.selected = this.selected.reverse();
            },

            compareByTitle(a: any, b: any): number {
                if (this.$t(a.title) < this.$t(b.title)) {
                    return -1;
                }
                if (this.$t(a.title) > this.$t(b.title)) {
                    return 1;
                }
                return 0;
            }
        },

        mounted() {
            this.selected = this.products.sort(this.compareByTitle);
        },

        watch: {
            selectedItem() {
                this.filter(this.selectedItem);
            }
        }
    }
</script>