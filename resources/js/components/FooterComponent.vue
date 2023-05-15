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
                <h2 class="titleCustom" style="color: #fafafa; text-align: left;">
                    {{ $t('footer.0') }}
                </h2>
                <hr aria-orientation="horizontal" style="height: 4px; color: white; background-color: white; border-color: white; border: 0px; text-align: left;">
            </v-container>
            <v-container class="absolute">
                <v-container>
                    <v-row>
                        <v-col cols="12" xl="4" lg="4" sm="12">
                            <h4>
                                {{ $t('footer.1') }}
                            </h4>
                            <br>
                            <b>
                                {{ $t('footer.2') }}
                            </b>
                            <a href="mailto:info.usa@consultingnow.solutions"> info.usa@consultingnow.solutions</a>
                            <br>
                            <b>
                                {{ $t('footer.3') }}
                            </b>
                            <a href="mailto:info.mexico@consultingnow.solutions"> info.mexico@consultingnow.solutions</a>
                        </v-col>
                        <v-col cols="12" xl="4" lg="4" sm="12">
                            <h4>
                                {{ $t('footer.4') }}
                            </h4>
                            <br>
                            <b>
                                {{ $t('footer.5') }}
                            </b>
                            <a href="mailto:info.argentina@consultingnow.solutions"> info.argentina@consultingnow.solutions</a>
                            <br>
                            <b>
                                {{ $t('footer.6') }}
                            </b>
                            <a href="mailto:info.chile@consultingnow.solutions"> info.chile@consultingnow.solutions</a>
                            <br>
                            <b>
                                {{ $t('footer.7') }}
                            </b>
                            <a href="mailto:info.brasil@consultingnow.solutions"> info.brasil@consultingnow.solutions</a>
                        </v-col>
                        <v-col cols="12" xl="4" lg="4" sm="12">
                            <h4>
                                {{ $t('footer.8') }}
                            </h4>
                            <br>
                            <b>
                                {{ $t('footer.9') }}
                            </b>
                            <a href="mailto:info.espana@consultingnow.solutions"> info.espana@consultingnow.solutions</a>
                            <br>
                            <b>
                                {{ $t('footer.10') }}
                            </b>
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
        data: () => ({})
    }
</script>