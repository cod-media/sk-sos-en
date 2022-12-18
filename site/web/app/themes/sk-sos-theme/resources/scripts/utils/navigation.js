export const menuListenerSetup = () => {
  const menuButton = document.querySelector("#menuButton");
  const menuIcon = document.querySelector("#menuIcon");
  const menuCloseIcon = document.querySelector("#menuCloseIcon");
  const mobileMenu = document.querySelector("#mobile-menu");
  const poloskaMenu = document.querySelector("#poloska-menu");

  if (!menuButton || !mobileMenu) {
    console.log("Menu setup error.");
    return;
  }
  menuButton.addEventListener("click", () => {
    const isOpen = mobileMenu.classList.contains("hidden") ? false : true;
    if (isOpen) {
      mobileMenu.classList.add("hidden");
      menuIcon.classList.add("block");
      menuIcon.classList.remove("hidden");
      menuCloseIcon.classList.remove("block");
      menuCloseIcon.classList.add("hidden");
      poloskaMenu.classList.remove("hidden");
    } else {
      mobileMenu.classList.remove("hidden");
      menuIcon.classList.remove("block");
      menuIcon.classList.add("hidden");
      menuCloseIcon.classList.add("block");
      menuCloseIcon.classList.remove("hidden");
      poloskaMenu.classList.add("hidden");
    }
  });
};
