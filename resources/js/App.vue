<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');
    .fontFamily {
        font-family: 'Poppins', sans-serif;
    }

    .fullscreen {
        width: 100vw;
        height: 100vh;
    }

    .fullscreen90 {
        width: 100vw;
        height: 90vh;
    }

    /* Transitions */
    /* from right to left: para usarlo hay que agregar name="slide-right" class="slide-right"> en <transition> */
    .slide-right-enter-active,.slide-right-leave-active {
        transition: transform 1s;
    }
    .slide-right-enter-from {
        transform: translateX(20%);
    }
    .slide-right-enter-to {
        transform: translateX(0);
    }
    .slide-right-leave-from {
        transform: translateX(0);
    }
    .slide-right-leave-to {
        transform: translateX(-20%);
    }

    /* from left to right: para usarlo hay que agregar name="slide-left" class="slide-left"> en <transition> */
    .slide-left-enter-active,.slide-left-leave-active {
        transition: transform 1s;
    }
    .slide-left-enter {
        transform: translateX(-20%);
    }
    .slide-left-enter-to {
        transform: translateX(0);
    }
    .slide-left-leave {
        transform: translateX(0);
    }
    .slide-left-leave-to {
        transform: translateX(20%);
    }
    /* from bottom to top: para usarlo hay que agregar name="slide-up" class="slide-up" en <transition> */
    .slide-up-enter-active,.slide-up-leave-active {
        transition: transform 1s;
    }
    .slide-up-enter {
        transform: translateY(20%);
    }
    .slide-up-enter-to {
        transform: translateY(0);
    }
    .slide-up-leave {
        transform: translateY(0);
    }
    .slide-up-leave-to {
        transform: translateY(-20%);
    }
    /* from top to bottom: para usarlo hay que agregar name="slide-down" class="slide-down"> en <transition> */
    .slide-down-enter-active,.slide-down-leave-active {
        transition: transform 1s;
    }
    .slide-down-enter {
        transform: translateY(-20%);
    }
    .slide-down-enter-to {
        transform: translateY(0);
    }
    .slide-down-leave {
        transform: translateY(0);
    }
    .slide-down-leave-to {
        transform: translateY(20%);
    }

    /* Scroll snap */
    .scroll-container,.scroll-area {
        width: 100vw;
        height: 100vh;
    }

    .scroll-container {
        overflow-x: hidden;
    }

    .scroll-area {
        scroll-snap-align: center;
    }

    .scroll-container, .scroll-area {
        margin: 0 auto;
        scroll-snap-type: both mandatory;
    }

    .scroll-area {
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }
</style>

<template>
    <v-app>
        <NavBarComponent/>
        <RouterView/>
        <FooterComponent/>
    </v-app>
</template>

<script>
    import { RouterView } from 'vue-router'
    import NavBarComponent from './components/NavBarComponent.vue';
    import FooterComponent from './components/FooterComponent.vue';

    export default {
        components: {
            NavBarComponent,
            FooterComponent
        },

        data() {
            return {
            };
        },
    };
</script>