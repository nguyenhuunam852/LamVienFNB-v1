export default class Collapse {
    constructor(element) {
      this.element = element;
      this.isOpen = false;
      this.isTransitioning = false;
    }

    toggle() {
      // eslint-disable-next-line @typescript-eslint/no-unused-expressions
      this.isOpen ? this.hide() : this.show();
    }

    show() {
      if (this.isTransitioning || this.isOpen) return;
      this.isTransitioning = true;
      this.element.classList.remove("collapse");
      this.element.classList.add("collapsing");
      this.element.style.height = `${this.element.scrollHeight}px`;
      setTimeout(() => {
        this.isOpen = true;
        this.isTransitioning = false;
        this.element.classList.remove("collapsing");
        this.element.classList.add("collapse");
        this.element.classList.add("show");

        this.element.style.height = "auto";
      }, this.getTransitionDuration());
    }

    hide() {
      if (this.isTransitioning || !this.isOpen) return;
      this.isTransitioning = true;
      this.element.classList.remove("collapse");
      this.element.classList.add("collapsing");
      this.element.style.height = `${this.element.scrollHeight}px`;

      requestAnimationFrame(() => {
        this.element.style.height = "0px";
      });
      setTimeout(() => {
        this.isOpen = false;
        this.isTransitioning = false;
        this.element.classList.add("collapse");
        this.element.classList.remove("show");
      }, this.getTransitionDuration());
    }

    getTransitionDuration() {
      const style = window.getComputedStyle(this.element);
      return parseFloat(style.transitionDuration) * 1000 || 300;
    }
  }
