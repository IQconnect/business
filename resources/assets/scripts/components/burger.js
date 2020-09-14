const CONFIG = {
  TRIGGER: '.burger',
  CLASS: 'open',
};

const burger = {
  init() {
    const { TRIGGER } = CONFIG;
    this.trigger = document.querySelector(TRIGGER);

    if(this.trigger) {
      this.addEvent();
    }
  },

  addEvent() {
    const { CLASS } = CONFIG;
    this.trigger.addEventListener('click', (event) => {
      event.preventDefault();
      console.log('test');
      this.trigger.classList.toggle(CLASS);
    });
  },
};

export default burger;