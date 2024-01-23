class MenuOverlayShow {
  constructor() {
    this.menuIconShape = document.getElementById("menu-icon-shape");
    this.topMiddleBottom = document.querySelectorAll("#top, #middle, #bottom");
    this.overlayNav = document.querySelector("#overlay-nav");
    this.menuIconShape.addEventListener("click", () => {
      this.toggleMenu();
      this.stopScroll();
      this.headerChange();
    });

    document.addEventListener("keyup", (e) => this.escKeyClose(e));
  }

  stopScroll() {
    const navEls = [
      document.querySelector("header-nav"),
      document.querySelector("div.logo > a > p"),
    ];

    navEls.forEach((element) => {
      if (element) {
        element.classList.toggle(
          "modal-open",
          this.overlayNav.classList.contains("active")
        );
      }
    });
  }

  headerChange() {
    const header = document.querySelector("header-nav");
    header.classList.toggle(
      "modal-open",
      this.overlayNav.classList.contains("active")
    );
  }

  toggleMenu() {
    this.menuIconShape.classList.toggle("active");
    this.topMiddleBottom.forEach((element) =>
      element.classList.toggle("active")
    );
    this.overlayNav.classList.toggle("active");
  }

  escKeyClose(e) {
    if (this.overlayNav.classList.contains("active") && e.key === "Escape") {
      this.overlayNav.classList.remove("active");
      this.menuIconShape.classList.remove("active");
      this.topMiddleBottom.forEach((element) =>
        element.classList.remove("active")
      );
      this.stopScroll();
    }
  }
}

export default MenuOverlayShow;
