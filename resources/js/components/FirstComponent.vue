<template>
    <h1 v-if="message.length">{{message}}</h1>
</template>

<script>
    export default {
        name: "FirstComponent",
        data() {
            return {
                message:'Laravel!!!!'
            }
        },
    }
</script>

<style scoped>

</style>