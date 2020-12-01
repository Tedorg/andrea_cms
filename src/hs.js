module.exports = (function (e, t, n) {
  var o,
    r,
    a = t.documentElement,
    l = !1,
    i = !1,
    s = !1,
    c = function () {
      var t = !1;
      try {
        var n = Object.defineProperty({}, "passive", {
          get: function () {
            t = !0;
          },
        });
        e.addEventListener("test", null, n),
          e.removeEventListener("test", null, n);
      } catch (e) {}
      return t;
    },
    v = function (n) {
      var o,
        r = "scroll" + (n = n.toUpperCase()),
        a = "scroll" + ("X" === n ? "Left" : "Top");
      return (
        e["page" + n + "Offset"] ||
        e[r] ||
        ("number" == typeof (o = t.documentElement || t.body.parentNode)[a]
          ? o
          : t.body)[a]
      );
    },
    d = function (n, i) {
      if (
        ((o = function (o) {
          if (
            ((o = o || e.event),
            !1 ===
              (function (n, o, r) {
                return (
                  !l ||
                  ((i = 0),
                  (v = (a ? a.offsetWidth : 0) || 0),
                  (d = t.body.scrollWidth || 0),
                  (u = a ? a.clientWidth : 0),
                  (f = Math.max(v, d) - u),
                  Math.abs(o.wheelDeltaX) >= Math.abs(o.wheelDeltaY) ||
                    Math.abs(o.deltaX) >= Math.abs(o.deltaY) ||
                    ("deltaY" in o
                      ? (i = -10 * o.deltaY)
                      : o.detail
                      ? (i = -240 * o.detail)
                      : o.wheelDelta && (i = 5 * o.wheelDelta),
                    (s = (i / 120) * 10),
                    (c = n.x - s) >= 0 && c <= f
                      ? ((n.x = c), (n.setByScript = !0), e.scrollTo(n.x, n.y))
                      : 0 !== n.x &&
                        n.x !== f &&
                        ((n.x = c > f ? f : 0),
                        (n.setByScript = !0),
                        e.scrollTo(n.x, n.y)),
                    "function" == typeof r && r(n),
                    !1))
                );
                var i, s, c, v, d, u, f;
              })(n, o, i))
          ) {
            if (!o.preventDefault || !o.stopPropagation) return !1;
            o.preventDefault(), o.stopPropagation();
          }
        }),
        (r = function () {
          n.setByScript || ((n.x = v("x")), (n.y = v("y"))),
            (n.setByScript = !1);
        }),
        e.addEventListener)
      ) {
        var s = !!c() && { capture: !1, passive: !1 };
        "onwheel" in e
          ? e.addEventListener("wheel", o, s)
          : "onmousewheel" in e
          ? e.addEventListener("mousewheel", o, s)
          : e.addEventListener("DOMMouseScroll", o, s),
          e.addEventListener("scroll", r, s);
      } else t.attachEvent("onmousewheel", o), e.attachEvent("onscroll", r);
    },
    u = function (e) {
      return e.preventDefault(), e.stopPropagation(), !1;
    };
  return {
    activate: function (t) {
      if (((l = !0), !s)) {
        d({ x: 0, y: 0 }, t), (s = !0);
      }
      if (i) {
        if (e.addEventListener) {
          var n = !c() || { capture: !0, passive: !1 };
          e.removeEventListener("scroll", u, n);
        } else e.detachEvent("onscroll", u);
        i = !1;
      }
    },
    deactivate: function () {
      (l = !1),
        s &&
          (!(function () {
            if (o || r)
              if (e.removeEventListener) {
                var n = !!c() && { capture: !1, passive: !1 };
                "onwheel" in e
                  ? e.removeEventListener("wheel", o, n)
                  : "onmousewheel" in e
                  ? e.removeEventListener("mousewheel", o, n)
                  : e.removeEventListener("DOMMouseScroll", o, n),
                  e.removeEventListener("scroll", r, n);
              } else
                t.detachEvent("onmousewheel", o), e.detachEvent("onscroll", r);
          })(),
          (s = !1));
    },
    deactivateAllScrolling: function () {
      if (((l = !1), (i = !0), e.addEventListener)) {
        var t = !c() || { capture: !0, passive: !1 };
        e.addEventListener("scroll", u, t);
      } else e.attachEvent("onscroll", u);
    },
  };
})(window, document);
