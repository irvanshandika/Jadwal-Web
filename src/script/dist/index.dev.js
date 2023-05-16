"use strict";

require("flowbite");

var _standalone = _interopRequireDefault(require("prettier/standalone"));

var _standalone2 = _interopRequireDefault(require("@prettier/plugin-php/standalone"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

_standalone["default"].format(YOUR_CODE, {
  plugins: prettierPlugins,
  parser: "php"
});