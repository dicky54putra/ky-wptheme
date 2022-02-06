import { _ } from "../core/Doms";
import fetchData from "../core/fetchData";

class Setup {
  constructor() {
    this.useScrollAnchor();
    this.ajax();
  }

  useScrollAnchor() {
    const smoothScrollAnchor = document.querySelectorAll("a[href^='#']");
    for (let anchor = 0; anchor < smoothScrollAnchor.length; anchor++) {
      const element = smoothScrollAnchor[anchor];

      element.addEventListener("click", function (e) {
        e.preventDefault();
        if (document.getElementById(this.getAttribute("href").replace("#", "")))
          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
          });
      });
    }
  }

  ajax() {
    let data = {
      action: themeObj.test.action,
      nonce: themeObj.nonceFE,
      user_id: 1,
    };

    fetchData(themeObj.ajaxUrl, "POST", data)
      .then((res) => {
        _(".underline").innerHTML = res.data.name;
      })
      .catch((err) => console.log(err));
  }
}

export default Setup;
