// When menu inside sidebar with inner items is clicked call this function
const toggleMenus = (index, numberOfItems) => {
    const element = document.getElementsByClassName("collapse-menu")[index];
    const arrow = document.getElementsByClassName("arrow")[index];
    const height = element?.style?.height;

    if (!height || height === "0px") {
        element.style.height = `${21 * numberOfItems + 24 * (numberOfItems - 1) + 30
            }px`;
        arrow.style.transform = "rotate(180deg)";
    } else {
        element.style.height = "0px";
        arrow.style.transform = "rotate(0deg)";
    }
};

const sidebar = document.getElementById("sidebar");
const shadowBackgroud = document.getElementById("shadow-background");

// When sidebar needs to be toggled
const toggleSidebar = (open) => {
    if (open) {
        sidebar.style.width = "340px";
        shadowBackgroud.style.zIndex = "25";
        shadowBackgroud.style.background = "rgba(0,0,0,0.4)";
        document.body.style.overflow = "hidden";
    } else {
        sidebar.style.width = "0";
        shadowBackgroud.style.zIndex = "-10";
        shadowBackgroud.style.background = "transparent";
        document.body.style.overflow = "auto";
    }
};

window.addEventListener("resize", () => {
    if (window.innerWidth >= 1024) {
        document.body.style.overflow = "auto";
        sidebar.style.width = "0";
        shadowBackgroud.style.transition = "none";
        shadowBackgroud.style.zIndex = "-10";
        shadowBackgroud.style.background = "transparent";
        document.body.style.overflow = "auto";
    } else {
        shadowBackgroud.style.transition = "0.5s ease";
    }
});
