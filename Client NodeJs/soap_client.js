//SOAP
const soap = require('soap');
const url = "http://localhost:8000/?wsdl";
const input = {input: 'Francisco'};

soap.createClientAsync(url, {overridePromiseSuffix: 'Promise'})
  .then(client => {
    client.prueba(input, function(err, result) {
      //console.log(result);
      console.log(result.pruebaOutput.$value);
  });
  })
