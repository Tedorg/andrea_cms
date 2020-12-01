import st from "./index.scss";
import component from "./component";
import showdata from "./showdata";
import scrollConverter from "./hs.js";
import t from "./theme.js";
import 'lazysizes';
// import a plugin
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
// import "lazysizes";
// var HorizontalScroll = require("horizontal-scroll");
//Globals
const minHeight = t.sm
console.log(t);
let triggerWidth = 700;
let converter_status = false;
//showdata();
handler_scroll();
// Moderne Browser
document.addEventListener("readystatechange", () => {
  if (document.readyState == "complete") {
    var img = document.querySelectorAll("img");
    var body = document.body;
    body.classList.remove("hide");
    body.classList.add("show");
    // if (document.readyState == 'complete') {
    //     var blocks = document.getElementsByClassName('project');
    //     var container = document.getElementsByClassName('projects');
    //     console.log(document.readyState);
    //         blocks : blocks,
    //    container: container,
    //    isAnimated: true,
    //    springEffect: 0.8
    //     });
    //   }
    // console.log("tesg d")
  }
  var links = document.querySelectorAll("a");
  links[1].addEventListener('click', function(evt) {
    // Ereignis behandeln
    //evt.stopPropagation();
  });
});

function handler_scroll() {
  //activate  if wondow is bigger thann 600
  if (window.innerWidth > triggerWidth && !converter_status) {
    converter_status = true;
    scrollConverter.activate();
  }
  if ((window.innerWidth < triggerWidth && converter_status) || (window.innerHeight < 400 && converter_status)) {
    converter_status = false;
    scrollConverter.deactivate();
  }
}
var to = true,
  throttle = function(func, delay) {
    if (to) {
      window.clearTimeout(to);
    }
    to = window.setTimeout(func, delay);
  };
window.onresize = function() {
  throttle(function() {
    console.log(window.innerWidth);
    handler_scroll();
  }, 10);
};
