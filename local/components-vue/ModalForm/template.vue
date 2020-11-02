<template id="modal-form">
    <div class="modal_form">
        <div class="modal_form-close_container">
            <span class="modal_form-close" @click="close()">x</span>
        </div>
        <div class="modal_form-success" v-if="isSubmitted">
            <h1 class="modal_form-success-title">Ваша заявка успешно отправлена!</h1>
        </div>
        <form  class="modal_form-form contact-form" @submit.prevent="send($event)" v-if="!isSubmitted">
            <h1 class="modal_form-title">Оставь заявку</h1>
            <div class="modal_form-inputs">
                <input type="text"
                       name="name"
                       class="contact-form-inputs-text name"
                       placeholder="Ваше имя" required
                >
                <input type="text" name="phone" class="contact-form-inputs-text phone" placeholder="+7" required>
                <div class="personal-data">
                    <input id="contactPersonalDataModal" type="checkbox" class="personal-data-input" name=""
                           autocomplete="off"
                           required>
                    <label for="contactPersonalDataModal" class="personal-data-label">Я даю согласие на обработку
                        персональных
                        данных в соотвествии с политикой конфиденцальности</label>
                </div>
                <input type="submit" name="web_form_submit" class="contact-form-inputs-submit"
                       value="получить консультацию">
            </div>

        </form>
    </div>
</template>


<script>
    BX.Vue.component('modal-form',
        {
            template: '#modal-form',
            computed: {
              ...BX.Vuex.mapGetters({
                  isSubmitted: 'isSubmittedFeedback'
              })
            },
            methods: {
                send(e) {
                    const data = new FormData(e.target);
                    this.$store.dispatch('sendFeedbackForm', {
                        name: data.get('name'),
                        phone: data.get('phone')
                    })
                },
                close() {
                    this.$store.commit('setShowModal', false);
                }
            },
            mounted () {
                if($) {
                    $('.modal_form .phone').mask("8(999) 999-9999");
                }

            }
        }
    )
</script>

<style>
    .modal_form {
        width: 50%;
        z-index: 10;
        background: white;
    }

    .modal_form-success {
        padding: 30px;
    }

    .modal_form-success-title {
        text-align: center;
    }

    @media screen and (max-height: 600px){
        .modal_form {
            overflow-y: scroll;
        }
    }

    @media screen and (max-width: 1000px){
        .modal_form {
            width: 80%;
        }
    }
    @media screen and (max-width: 600px){
        .modal_form {
            width: 98%;
        }
    }

    .modal_form-form {
        display: flex;
        flex-direction: column;
        padding: 30px;
    }

    .modal_form-close_container {
        text-align: end;
        padding-right: 20px;
    }

    .modal_form-close {
        font-size: 40px;
        font-family: 'Gotham-Pro-Light', sans-serif;
        color: gray;
        cursor: pointer;
    }

    .modal_form-inputs {
        display: flex;
        flex-direction: column;
    }


    .modal_form-title {
        margin-bottom: 20px;
    }


    .modal_form .contact-form-inputs-text {
        width: 80%;
    }
    
    @media screen and (max-width: 600px) {
        .modal_form .contact-form-inputs-text {
            width: 100%;
        }
    }

    .modal_form .personal-data {
        margin: 15px 0;
    }

    .modal_form .contact-form-inputs-submit {
        align-self: center;
    }
</style>