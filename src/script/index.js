import "flowbite";
import prettier from "prettier/standalone";
import phpPlugin from "@prettier/plugin-php/standalone";

prettier.format(YOUR_CODE, {
  plugins: prettierPlugins,
  parser: "php",
});
