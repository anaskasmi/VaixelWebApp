<template>
    <v-app>

        <v-content>
            <div class="ma-12">
                <router-view></router-view>
            </div>
        </v-content>


        <v-footer
            app
            absolute
            class="font-weight-medium grey--text text--darken-4"
            light
            color="grey lighten-4"
        >
            <v-col
                class="text-center"
                cols="12"
            >
                {{ new Date().getFullYear() }} — <strong>Vaixel LTD</strong>
            </v-col>
        </v-footer>
    </v-app>
</template>

<script>


    export default {
        name: 'App',
    }
</script>
<style scoped>

</style>
