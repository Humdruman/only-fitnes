<template id="app-modal">
    <div v-if="isShow" class="l-modal">
        <component :is="currentModal"></component>
        <div class="l-modal_background" @click="close()">
        </div>
    </div>
</template>

<script>
    BX.Vue.component('app-modal', {
        template: '#app-modal',
        data() {
            return {}
        },
        computed: {
            ...BX.Vuex.mapGetters({
                isShow: 'isShowModal',
                currentModal: 'currentModal'
            })
        },
        methods: {
            close() {
                this.$store.commit('setShowModal', false);
            }
        }
    })
</script>

<style>
    .l-modal {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 100;
    }

    .l-modal_background {
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        background: black;
        z-index: 2;
        opacity: 0.2;
    }
</style>