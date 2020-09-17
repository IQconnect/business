const CONFIG = {
  TRIGGER: '.accordion__header',
  CLASS: 'accordion__content--active',
  CLASSARROW: 'accordion__arrow--active',
};

const accordion = {
  init() {
    const { TRIGGER } = CONFIG;
    this.triggers = document.querySelectorAll(TRIGGER);

    if(this.triggers) {
      this.addEvent();
    }
  },

  addEvent() {
    const { CLASS, CLASSARROW } = CONFIG;
    this.triggers.forEach((item) => {
      item.addEventListener('click', (event) => {
        event.preventDefault();
        let target = event.currentTarget;
        this.getelement
        const content = target.nextElementSibling;
        const arrow = target.querySelector('.accordion__arrow');
        content.classList.toggle(CLASS);
        arrow.classList.toggle(CLASSARROW);
      });
    });
  },
};

export default accordion;