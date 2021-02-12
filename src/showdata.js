/*
check if a element is out of viewport
pass a selector to this module
if selected elemtn is out, add a class to this elem if it its clicked


*/
import throttle from "lodash/throttle";
export default (d, selector) => {
  const interval = 100;
  const triggers = ["resize", "load"];
  let previousstate = false;
  const classname = 'descritpion';
  let debouncer = 0;
  const targetElements = document.querySelectorAll(selector);
  // const theKid = document.createElement("div");
  // theKid.classList.add('button');
  //theKid.setAttribute("style", "border:2px solid transparent; display:hidden");
  // theKid.innerHTML = '+';
  // theKid.addEventListener("click", function(e) {
  //   console.log(theKid)
  //   if ((this.parentNode.classList.contains(classname)) || this.classList.contains(classname)) {
  //     theKid.innerHTML = '+';
  //     this.parentNode.classList.remove(classname) || this.classList.remove(classname)
  //   } else {
  //     if (!this.parentNode.classList.contains(classname)) {
  //       this.parentNode.classList.add(classname);
  //     }
  //     if (!this.classList.contains(classname)) {
  //       theKid.innerHTML = '-';
  //       this.classList.add(classname);
  //     }
  //     //apply the Kid only to the selectoer and not the chil
  //   }
  // });
  function checkEl() {
    targetElements.forEach(function(elm, key) {
          var w = elm.clientWidth;
          console.log(w)
          // targetElements.forEach(function(elm, key) {
          //   if (!isInViewport(elm)) {
          if (!elm.classList.contains(classname)) {
            //       elm.classList.add(classname)
            //     }
            //     //elm.classList.add(classname);
            //     //theKid.setAttribute("style", " display:block");
            //     // elm.firstChild.setAttribute("style", "display:block;")
            //     // console.log("bigger vp:" + elm.firstChild)
            //   } else {
            //     console.log("smaller vp:")
            //     if (elm.classList.contains(classname)) {
            //       elm.classList.remove(classname)
            //     }
            //     //pass
            //   }
            // });
          }
          let check = throttle(() => {
            checkEl();
          }, interval);
          history.initialcall = 1;
          // function displayTitle(titletext) {
          //   display.innerHTML = titletext;
          // }
          triggers.forEach((event) => window.addEventListener(event, check));
          var isInViewport = function(elem) {
            var bounding = elem.getBoundingClientRect();
            return (bounding.top >= 0 && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight));
          };
        };
        // window.onresize = function() {
        //   throttle2(function() {
        //     readableText()
        //   }, 100);
        // };
        // // Returns something like this:
        // // {top: -123, left: 0, right: 0, bottom: 25}
        // function readableText() {
        //   var elem = document.querySelectorAll('.viewporttext');
        //}
