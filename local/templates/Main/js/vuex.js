window.buex = BX.Vuex.store({
    state: {
        modal: {
            show: false,
            current: 'modal-form'
        },
        feedbackForm: {
            isSubmitted: false,
            msg: '',
            id: 1
        },
    },
    getters: {
        isShowModal: state => state.modal.show,
        currentModal: state => state.modal.current,
        isSubmittedFeedback: state => state.feedbackForm.isSubmitted,
        feedbackMsg: state => state.feedbackForm.msg
    },
    mutations: {
        setShowModal(state, status) {
            state.modal.show = Boolean(status);
        },
        setFormModal(state) {
            state.modal.current = 'modal-form'
        },
        setFeedbackMsg(state, msg) {
            console.log(msg);
            state.feedbackForm.msg = msg;
        }
    },
    actions: {
        sendFeedbackForm({commit, state}, data) {
            const req = BX.ajax.runComponentAction(
                'humdruman:form.ajax',
                'addResult',
                {
                    mode: 'class',
                    data: {
                        formId: state.feedbackForm.id,
                        data: JSON.stringify({
                            form_text_1: data.name,
                            form_text_2: data.phone
                        })
                    }
                });
            req.then((res) => {
                endRequest(`Ваша заявка № ${res.data.resultId} успешно отправлена!`)
            }).catch(e => {
                endRequest('Произошла ошибка при сохранении заявки');
            })

            function endRequest(msg) {
                commit('setFeedbackMsg', msg);
                state.feedbackForm.isSubmitted = true
            }
        },
        pay({commit}, productId) {
            const req = BX.ajax.runComponentAction(
                'humdruman:pay.ajax',
                'pay',
                {
                    mode: 'class',
                    data: {
                        productId: productId
                    }
                }
            )
            req.then( (res) => {
                if(res.data.url) {
                    window.location = res.data.url;
                }
            })
        }
    }
});
