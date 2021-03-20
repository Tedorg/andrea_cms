import "./index.scss";
import component from "./component";
//import merkliste from "./merkliste.js";
import { toggleClass, select } from './helpers.js';
import scrollConverter from "./hs.js";
//import SweetScroll from 'sweet-scroll';
import 'horizontal-scroll';
//import HorizontalScroll from '@oberon-amsterdam/horizontal';
import t from "./theme.js";
import 'lazysizes';
// import a plugin
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
// window.onscroll = function () {
//   // Horizontal Scroll.
//   var y = document.body.getBoundingClientRect().top;
//   var x = element.scrollLeft//
//   page.scrollLeft = -y -x;
//   // Looping Scroll.
// //   var diff = window.scrollY - dummy_x;
// //   if (diff > 0) {
// //     window.scrollTo(0, diff);
// //   }
// //   else if (window.scrollY == 0) {
// //     window.scrollTo(0, dummy_x);
// //   }
// }
console.log(component())
if (component() == "Safari") {
  const targetElement = document.querySelectorAll(".color_fix");
  targetElement.forEach(function(item) {
    item.classList.add("inverted_color")
  })
}
// // Adjust the body height if the window resizes.
// window.onresize = resize;
// // Initial resize.
// resize();
// // Reset window-based vars
// function resize() {
//   var w = page.scrollWidth-window.innerWidth+window.innerHeight;
//   document.body.style.height = w + 'px';
//   dummy_x = last_pane.getBoundingClientRect().left+window.scrollY;
// }
const bodyScrollLock = require('body-scroll-lock');
const disableBodyScroll = bodyScrollLock.disableBodyScroll;
const enableBodyScroll = bodyScrollLock.enableBodyScroll;
// 2. Get a target element that you want to persist scrolling for (such as a modal/lightbox/flyout/nav).
// Specifically, the target element is the one we would like to allow scroll on (NOT a parent of that element).
// This is also the element to apply the CSS '-webkit-overflow-scrolling: touch;' if desired.
const targetElement = document.querySelector('body');
// 3. ...in some event handler after showing the target element...disable body scroll
//disableBodyScroll(targetElement);
// 4. ...in some event handler after hiding the target element...
enableBodyScroll(targetElement);
// import "lazysizes";
// var HorizontalScroll = require("horizontal-scroll");
//Globalconst horizontal
// const horizontal = new HorizontalScroll({ 
//   container: document.querySelector('body'),  
//   showScrollbars: false,
//   // if true, scrolling up and down and using the up or down arrow key will prevent the user from scrolling.
//   preventVerticalScroll: false,
//   // amount of px to scroll when using arrow keys
//   scrollAmount: 1500,
//   // amount of px to scroll when 'stepping' (pagedown/up, space, etc)
//   scrollAmountStep: 1000,
//});
//const m = merkliste();
console.log(t.breakpoints.sm);
let triggerWidth = t.breakpoints.sm;
let converter_status = false;
let page_for_hs_scroll = true; // not all pages are supposed to have hs scroll example about.php
//handler_scroll();
// Moderne Bro
var docHeight = document.documentElement.offsetHeight;
[].forEach.call(document.querySelectorAll('*'), function(el) {
  if (el.offsetHeight > docHeight) {
    console.log(el);
  }
});
document.addEventListener("readystatechange", () => {
  if (document.readyState == "loading") {
    doShowAll();
  }
  if (document.readyState == "complete") {
    var img = document.querySelectorAll("img");
    var cover = document.querySelector(".blanket");
    var body = document.body;
    setTimeout(() => {
      //console.log("World!");
      cover.classList.remove("show");
      cover.classList.add("hide");
      handler_scroll();
      //handler_scroll();
    }, 1);
    const list_button = document.querySelector("#menu-list");
    //merkliste()
    // const scroller = new SweetScroll({
    //   horizontal: true              // Enable the horizontal scroll
    // });
    console.log(typeof HorizontalScroll == "undefined")
  }
});
const index_button = select(".index_button")
const app = select(".app")
const index = select(".index")
index_button.addEventListener("click", () => {
  handle_index_view();
})
detect_hasindex()

function handle_index_view() {
  toggleClass(index, "show")
  toggleClass(app, "hs")
  toggleClass(index_button, "active")
  toggleClass(app, "show")
  detectHscroll()
  handler_scroll()
  //
}

function detectOrientation() {
  !navigator.maxTouchPoints ? 'desktop' : !window.screen.orientation.angle ? 'portrait' : 'landscape'
  return !navigator.maxTouchPoints ? 'desktop' : !window.screen.orientation.angle ? 'portrait' : 'landscape'
}

function handleYscroll() {
  let _main = document.querySelector("html")
  if (detectOrientation() === "landscape") {
    //console.log("overflow-y-hidden aktivert")
    _main.classList.add("overflow-y-hidden")
  } else {
    _main.classList.remove("overflow-y-hidden")
  }
}

function detectHscroll() {
  var target = document.querySelector(".hs");
  if (target !== null) {
    page_for_hs_scroll = true;
  } else {
    page_for_hs_scroll = false;
  }
}

function detect_hasindex() {
  var target = select(".has_index")
  if (target !== null) {
    index_button.style.display = "block";
    console.log("target: " + target)
  } else {
    index_button.style.display = "none";
    console.log("target: " + target)
  }
}
window.onload = function() {
  detectHscroll()
  //readableText()
  // console.log(detectOrientation())
};

function handler_scroll_old() {
  //activate  if wondow is bigger thann 600
  if ((window.innerWidth > triggerWidth) && !converter_status && page_for_hs_scroll && detectOrientation() === "desktop") {
    // console.log("hs scroll aktivert")
    converter_status = true;
    scrollConverter.activate();
  } else {
    //  console.log("hs scroll deaktivert")
    converter_status = false;
    scrollConverter.deactivate();
  }
}

function handler_scroll() {
  //activate  if wondow is bigger thann 600
  if (detectOrientation() === "desktop" && (window.innerWidth > triggerWidth) && page_for_hs_scroll) {
    converter_status = true;
    //horizontal.on('scroll',3);
    scrollConverter.activate();
    // console.log("hs scoll active ")
  } else {
    // console.log("hs scoll deactive ")
    converter_status = false;
    // horizontal.off('scroll',3);
    scrollConverter.deactivate();
  }
}

function handle_index() {}
var to1 = true,
  throttle1 = function(func, delay) {
    if (to1) {
      window.clearTimeout(to1);
    }
    to1 = window.setTimeout(func, delay);
  };
window.onresize = function() {
  throttle1(function() {
    //console.log(window.innerWidth);
    handler_scroll();
    //handleYscroll();
    detectHscroll();
    //checkiftextreadable();
  }, 100);
};
/*
=====> Checking browser support.
 //This step might not be required because most modern browsers do support HTML5.
 */
//Function below might be redundant.
