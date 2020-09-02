export default class OptionSelector {
  constructor (btnClass) {
    this.btnClass = btnClass;
  }
  
  start () {
    this.findBtns();
    this.addListener();
  }
  
  findBtns () {
    this.btns = document.querySelectorAll('.' + this.btnClass)
  }
  
  addListener () {
    [].forEach.call(this.btns, btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('opened');
      })
    })
  }
}