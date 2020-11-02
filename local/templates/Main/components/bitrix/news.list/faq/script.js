$(document).ready((e) => {
   $('.faq-question_btn').on('click', (e) => {
       e.preventDefault();
       const item = $(e.target).closest('.faq-item').get(0);
       $(item).toggleClass('active')
   });
});