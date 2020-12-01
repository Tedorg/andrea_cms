const throttle = require("lodash/throttle");

export default(tagname = "data") => {
    const interval = 20;
    const triggers = ["scroll", "resize", "load"];
    let lastelem = "";
    const display = document.getElementById("display");
    function checkEl() {
        let centerX = document.documentElement.clientWidth / 2;
        let centerY = window.outerHeight / 3;
        let elem = document.elementFromPoint(centerX, centerY);
        if (lastelem != elem) {
            if (elem.parentElement) {
                let d = elem.parentElement.getAttribute("data");
                displayTitle(d);
            }
        }
        lastelem = elem;
    }

    let check = throttle(() => {
        checkEl();
    }, interval);
    history.initialcall = 1;
    triggers.forEach((event) => addEventListener(event, check));
    function displayTitle(titletext) {
        display.innerHTML = titletext;
    }
};
