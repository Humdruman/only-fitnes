<template id="text-input">
    <div class="text_input">
        <label :for="id">{{title}}</label>
        <input :id="id" type="text" :name="name" :placeholder="placeholder">
    </div>
</template>


<script>
    BX.Vue.component('text-input', {
        template: '#text-input',
        props: ['title', 'name', 'placeholder'],
        computed: {
            id() {
                return 'text-input-' + this.title;
            }
        }
    })
</script>

<style>
    .text_input {
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 577px;
        height: 114px;
        border-radius: 20px;
        background-color: #fdfdfd;
    }

    @media screen and (max-width: 600px){
        .text_input {
            width: 100%;
        }
    }

    .text_input label {
        margin-left: 40px;
        color: #242011;
        font-family: "Berlingske-Serif-Lt", sans-serif;
        font-size: 24px;
        font-weight: 400;
    }

    .text_input input {
        margin-left: 79px;
    }
    @media screen and (max-width: 400px){
        .text_input input {
            width: 50%;
            margin-left: 30px;
        }
    }
</style>