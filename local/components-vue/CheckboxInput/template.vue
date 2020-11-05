<template id="checkbox-input">
    <div class="checkbox_input">
        <input type="radio" :name="name" :value="value" :id="id">
        <label :for="id">
            {{title}}
        </label>
    </div>
</template>


<script>
    BX.Vue.component(
        'checkbox-input',
        {
            template: '#checkbox-input',
            props: ['value', 'name', 'title'],
            computed: {
                id() {
                    return 'checkbox-input-' + this.name + this.value;
                }
            }
        }
    )
</script>


<style>

    .checkbox_input label {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 44px;
        height: 100px;
        color: #7c7c7c;
        font-family: "Gotham-Pro-Regular", sans-serif;
        font-size: 16px;
        font-weight: 300;
    }


    .checkbox_input label::before {
        content: '';
        cursor: pointer;
        display: block;
        width: 13px;
        height: 13px;
        margin-right: 18px;
        border-radius: 40px;
        border: 13px solid #f3f3f5;
        background-color: #a9b0b6;
    }


    .checkbox_input input {
        display: none;
    }

    .checkbox_input input:checked + label::before {
        background-color: white;
        border: 13px solid #f1abcf;
    }
</style>