import { domReady } from "@roots/sage/client";
import { menuListenerSetup } from "./utils/navigation";
import { injectLeikaStyles } from "./utils/injectLeika.js"
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }
  menuListenerSetup();
  injectLeikaStyles();

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
