using System;
using System.ServiceModel;

namespace RestNetCoreApp // Note: actual namespace depends on the project name.
{
    internal class Program
    {
        static async Task Main(string[] args) //Si la funcion es async no puede ser void si no que task
        {

            Console.WriteLine("Cliente REST en ejecución!");

            var url = "https://cat-fact.herokuapp.com/facts/";

            using (var http = new HttpClient())
            {
                //get
                var response = await http.GetStringAsync(url);
                Console.WriteLine(response);

                //post
                //client.PostAsync(uri, new StringContent(jsonInString, Encoding.UTF8, "application/json"));
            }
        }
    }
}