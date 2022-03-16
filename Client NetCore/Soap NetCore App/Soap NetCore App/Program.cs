using System;
using System.ServiceModel;

namespace SoapNetCoreApp // Note: actual namespace depends on the project name.
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Cliente SOAP en ejecución!");
            //Instalar All in one runtimes (vscutil esta ahi)
            //Ejecutar en la terminal de vs: vscutil http://localhost:8000/?wsdl
            //Mover ambos archivos output.config y Servidordeprueba.cs al proyecto
            //Darles click derecho desde el visual studio y add a ambos

            //Specify the binding to be used for the client.
            BasicHttpBinding binding = new BasicHttpBinding();

            //Specify the address to be used for the client.
            EndpointAddress address = new EndpointAddress("http://localhost:8000/?wsdl");

            PruebaSOAPClient client = new PruebaSOAPClient(binding, address);

            var result = client.prueba("Francisco");

            Console.WriteLine(result);
        }
    }
}