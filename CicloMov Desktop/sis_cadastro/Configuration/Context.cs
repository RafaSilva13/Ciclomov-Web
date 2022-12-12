using CicloMov.Entities;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.DependencyInjection;

namespace CicloMov.Configuration
{
    public class Context : DbContext
    {
        public Context(DbContextOptions<Context> options) : base(options)
        {
        }

        public DbSet<Clientes> Clientes { get; set; }
        //public DbSet<Produtos> Produtos { get; set; }
    }
}
