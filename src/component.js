export default (text = "fdf") => {
  const element = document.createElement("p");

  element.innerHTML = text;

  return element;
};
