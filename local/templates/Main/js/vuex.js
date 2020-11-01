window.buex = BX.Vuex.store({
    state: {
        modal: {
            show: false,
            current: 'modal-form'
        },
        feedbackForm: {
            isSubmitted: false,
            id: 1
        },
    },
    getters: {
        isShowModal: state => state.modal.show,
        currentModal: state => state.modal.current,
        isSubmittedFeedback: state => state.feedbackForm.isSubmitted
    },
    mutations: {
        setShowModal(state, status) {
            state.modal.show = Boolean(status);
        },
        setFormModal(state) {
            state.modal.current = 'modal-form'
        }
    },
    actions: {
        sendFeedbackForm({commit, state}, data) {
            data.form_id = state.feedbackForm.id
            BX.ajax.post(
                '/ajax/form.php',
                data,
                (response) => {
                    if(response > 0) {
                        state.feedbackForm.isSubmitted = true
                    }
                }
            )
        }
    }
});