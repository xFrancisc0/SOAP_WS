//REST
const axios = require('axios');

var url = "https://cat-fact.herokuapp.com/facts/";

axios.get("https://cat-fact.herokuapp.com/facts/")
.then(({ data }) => {
  console.log(JSON.stringify(data));
})
.catch(error=>{
  console.log(error);
});