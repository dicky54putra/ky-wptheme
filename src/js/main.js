import $, { htmlPrefilter, ajax } from "jquery";
window.$ = window.jQuery = $;
import "slick-carousel";
import Setup from "./setup/setup";

(function ($) {
  new Setup();
})(jQuery);
