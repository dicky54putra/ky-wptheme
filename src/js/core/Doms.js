const _ = (param) => {
  return document.querySelector(param);
};

const __ = (param) => {
  return document.querySelectorAll(param);
};

const _id = (param) => {
  return document.getElementById(param);
};

const _class = (param) => {
  return document.getElementsByClassName(param);
};

const _name = (param) => {
  return document.getElementsByName(param);
};

export { _, __, _id, _class, _name };
