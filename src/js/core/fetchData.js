/* 
How to use:
====================================
  let data = {
    action: themeObj.test.action,
    nonce: themeObj.nonceFE,
    user_id: 1,
  };

  fetchData(theUrl, "POST", data)
    .then((res) => {
      your response
    })
    .catch((err) => console.log(err));
====================================

*/
const fetchData = (url, method = "GET", data) =>
  new Promise((res, rej) => {
    fetch(url, {
      method,
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
        "Cache-Control": "no-cache",
      },
      body: new URLSearchParams(data),
    })
      .then((response) => response.json())
      .then(res)
      .catch(rej);
  });

export default fetchData;
