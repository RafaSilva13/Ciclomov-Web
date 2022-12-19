using CicloMov.Configuration;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Hosting;
using System;
using System.Windows.Forms;
using CicloMov.IRepositories;
using CicloMov.Repositories;

namespace CicloMov
{
    static class Program
    {
        public static IServiceProvider ServiceProvider { get; private set; }

        /// <summary>
        /// The main entry point for the application.
        /// </summary>
        [STAThread]
        static void Main()
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);

            //Application.Run(new frm_cliente());

            var host = CreateHostBuilder().Build();

            ServiceProvider = host.Services;

            Application.Run(ServiceProvider.GetRequiredService<frm_cliente>());
        }
        static IHostBuilder CreateHostBuilder()
        {
            return Host.CreateDefaultBuilder()
                .ConfigureServices((context, services) =>
                {
                    var connection = "Server=localhost;DataBase=bd_carrinho;Uid=root;Pwd=\"\";";
                    services.AddDbContext<Context>(options =>
                        options.UseMySql(connection)
                    );

                    //Repositorios
                    services.AddTransient<IClientesRepository, ClientesRepository>();

                    //Forms
                    services.AddTransient<frm_cliente>();
                    services.AddTransient<frm_listar>();
                });
        }
    }
}
