const fetch = require('node-fetch');

async function getData() {
  const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');
  const json = await response.json();

  console.log(json);
}

getData();
