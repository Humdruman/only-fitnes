<template id="feedback-message">
    <h1>{{msg}}</h1>
</template>

<script>
    BX.Vue.component(
        'feedback-message',
        {
            template: '#feedback-message',
            computed: {
                ...BX.Vuex.mapGetters({
                    msg: 'feedbackMsg'
                })
            }
        }
    )
</script>