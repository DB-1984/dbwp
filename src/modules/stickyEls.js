class StickyEls {
  constructor() {
    this.navElems = [document.querySelector(".header-nav")];
    this.scrollPosition = 0;

    window.addEventListener("scroll", () => this.checkPosition());
  }

  checkPosition() {
    this.scrollPosition = window.scrollY;

    if (this.scrollPosition > 150) {
      this.navElems.forEach((elem) => elem.classList.add("header-bg"));
    } else {
      this.navElems.forEach((elem) => elem.classList.remove("header-bg"));
    }
  }
}

export default StickyEls;
