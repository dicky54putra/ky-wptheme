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
