import "./index.scss";
import component from "./component";
import merkliste from "./merkliste.js";
//import showdata from "./showdata";
import scrollConverter from "./hs.js";
import t from "./theme.js";
import 'lazysizes';
// import a plugin
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
const bodyScrollLock = require('body-scroll-lock');
//const disableBodyScroll = bodyScrollLock.disableBodyScroll;
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
//Globals
console.log(t.breakpoints.sm);
let triggerWidth = t.breakpoints.sm;
let converter_status = false;
let page_for_hs_scroll = true; // not all pages are supposed to have hs scroll example about.php
//handler_scroll();
// Moderne Bro
document.addEventListener("readystatechange", () => {
  if (document.readyState == "loading") {
    doShowAll();
  }
  if (document.readyState == "complete") {
    var img = document.querySelectorAll("img");
    var body = document.body;
    setTimeout(() => {
      //console.log("World!");
      body.classList.remove("hide");
      body.classList.add("show");
      handler_scroll();
    }, 1);
    const list_button = document.querySelector("#menu-list");
    merkliste()
  }
});

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
    //console.log("target: " + target)
  } else {
    page_for_hs_scroll = false;
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
    scrollConverter.activate();
    // console.log("hs scoll active ")
  } else {
    // console.log("hs scoll deactive ")
    converter_status = false;
    scrollConverter.deactivate();
  }
}
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
  }, 2);
};
/*
=====> Checking browser support.
 //This step might not be required because most modern browsers do support HTML5.
 */
//Function below might be redundant.
