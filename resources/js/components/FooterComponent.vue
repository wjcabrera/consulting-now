<style scoped>
p {
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 0.5px;
    line-height: 23px;
}

h4 {
    color: #fafafa;
    font-size: 18px !important;
    line-height: 25px;
    font-weight: 400;
}

b {
    color: #fafafa;
    font-weight: 500;
    font-size: 14px;
    line-height: 23px;
}

a {
    color: #E2E2E2!important;
    opacity: .8!important;
    font-weight: 400;
    line-height: 25px;
    font-size: 14px;
    text-decoration: none;
    outline: none;
}

.titleCustom {
font-size: 30px;
font-weight: 300;
line-height: 35px;
}
</style>

<template>
    <v-footer style="justify-content: center; background-color: #F3B007;">
        <v-container class="relative">
            <v-container style="width: fit-content; display: inline-block;">
                <h2 class="titleCustom" style="color: #fafafa; text-align: left;">Nuestras Oficinas</h2>
                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: white; border-color: white; border: 0px; text-align: left;">
            </v-container>
            <v-container class="absolute">
                <v-container>
                    <v-row>
                        <v-col cols="12" xl="4" lg="4" sm="12">
                            <h4>
                                America del norte
                            </h4>
                            <br>
                            <b>
                                EE.UU
                            </b>
                            <a href="mailto:info.usa@consultingnow.solutions"> info.usa@consultingnow.solutions</a>
                            <br>
                            <b>
                                México
                            </b>
                            <a href="mailto:info.mexico@consultingnow.solutions"> info.mexico@consultingnow.solutions</a>
                        </v-col>
                        <v-col cols="12" xl="4" lg="4" sm="12">
                            <h4>America del sur</h4>
                            <br>
                            <b>
                                Argentina
                            </b>
                            <a href="mailto:info.argentina@consultingnow.solutions"> info.argentina@consultingnow.solutions</a>
                            <br>
                            <b>Chile</b>
                            <a href="mailto:info.chile@consultingnow.solutions"> info.chile@consultingnow.solutions</a>
                            <br>
                            <b>Brasil</b>
                            <a href="mailto:info.brasil@consultingnow.solutions"> info.brasil@consultingnow.solutions</a>
                        </v-col>
                        <v-col cols="12" xl="4" lg="4" sm="12">
                            <h4>Europa</h4>
                            <br>
                            <b>España</b>
                            <a href="mailto:info.espana@consultingnow.solutions"> info.espana@consultingnow.solutions</a>
                            <br>
                            <b>Portugal</b>
                            <a href="mailto:info.portugal@consultingnow.solutions"> info.portugal@consultingnow.solutions</a>
                        </v-col>
                    </v-row>
                </v-container>
            </v-container>
        </v-container>
    </v-footer>
</template>

<script lang="ts">
    export default{
        data: () => ({
            oficinas: [
                {
                    aNorth: 'EE.UU info.usa@consultingnow.solutions',
                    aSouth: 'Argentina info.argentina@consultingnow.solutions',
                    europe: 'España info.espana@consultingnow.solutions',
                },
                {
                    aNorth: 'México info.mexico@consultingnow.solutions',
                    aSouth: 'Chile info.chile@consultingnow.solutions',
                    europe: 'Portugal info.portugal@consultingnow.solutions'
                },
                {
                    aNorth: '',
                    aSouth: 'Brasil info.brasil@consultingnow.solutions',
                    europe: ''
                }
            ]
        }),
    }
</script>