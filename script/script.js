///////////////////////////////// Menu Hamburger  //////////////////////////////////
document.addEventListener("DOMContentLoaded", function() {
function initNavigationMenu() {
  const hamburgerBtn = document.querySelector(".hamburger");
  const navLinksContainer = document.querySelector(".navlinks_container");

  console.log(hamburgerBtn);

  if (hamburgerBtn && navLinksContainer) {

    console.log('L\'utilisateur a cliqué sur l\'élément !');
    const toggleNav = () => {
      hamburgerBtn.classList.toggle("open");
      navLinksContainer.classList.toggle("open");
      hamburgerBtn.setAttribute(
        "aria-expanded",
        hamburgerBtn.getAttribute("aria-expanded") === "true" ? "false" : "true"
      );
    };

    hamburgerBtn.addEventListener("click", toggleNav);
  }

  new ResizeObserver((entries) => {
    navLinksContainer.style.transitionProperty =
      entries[0].contentRect.width <= 900 ? "transform" : "none";
    navLinksContainer.style.transitionDuration = "0.3s";
    navLinksContainer.style.transitionTimingFunction = "ease-out";
  });
}

initNavigationMenu();
});

///////////////////////////////// Connexion  //////////////////////////////////
document.addEventListener("DOMContentLoaded", function () {
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container = document.getElementById("containerlogin");

  if (signUpButton && signInButton && container) {
    signUpButton.addEventListener("click", () => {
      container.classList.add("right-panel-active");
    });
    signInButton.addEventListener("click", () => {
      container.classList.remove("right-panel-active");
    });
  }
});

///////////////////////////////// Selector helper function //////////////////////////////////

const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};

///////////////////////////////// Event listener function //////////////////////////////////

const on = (type, el, listener, all = false) => {
  let selectEl = select(el, all);
  if (selectEl) {
    if (all) {
      selectEl.forEach((e) => e.addEventListener(type, listener));
    } else {
      selectEl.addEventListener(type, listener);
    }
  }
};

///////////////////////////////// Filtres videos //////////////////////////////////

window.addEventListener("load", () => {
  let videoContainer = select(".video-container");
  videoContainer.addEventListener("click", () => {});
  if (videoContainer) {
    let videoIsotope = new Isotope(videoContainer, {
      itemSelector: ".video-item",
    });

    let videoFilters = select("#video-flters li", true);

    on("click", "#video-flters li", function (e) {
      e.preventDefault();
      videoFilters.forEach((el) => {
        el.classList.remove("filter-active");
      });
      this.classList.add("filter-active");

      videoIsotope.arrange({
        filter: this.getAttribute("data-filter"),
      });
      videoIsotope.on("arrangeComplete", () => {
        AOS.refresh();
      });
    }, true);
  }
});








