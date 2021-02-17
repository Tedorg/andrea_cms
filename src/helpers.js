// hasClass
hasClass = (elem, className) => {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// toggleClass
exports.toggleClass = (elem, className) => {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
  console.log(elem.className)
  if (hasClass(elem, className)) {
    while (newClass.indexOf(' ' + className + ' ') >= 0) {
      newClass = newClass.replace(' ' + className + ' ', ' ');
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, '');
  } else {
    elem.className += ' ' + className;
  }
}
// select
exports.select = (selector) => {
  var elements;
  try {
    elements = document.querySelectorAll(selector);
    if (elements.length > 1) {
      return elements;
    } else {
      return elements.item(0);
    }
  } catch (e) {
    if (e instanceof TypeError) {
      // Anweisungen für die verschiedenen Fehlertypen
    } else if (e instanceof RangeError) {
      // Anweisungen für Bereichsfehler
    } else if (e instanceof EvalError) {
      // Anweisungen für Berechnungsfehler
    } else {
      // Anweisungen für nicht festgelegte Fehlertypen
      logMyErrors(e); // Objekt an die Fehler-Funktion geben
    }
  }
}
