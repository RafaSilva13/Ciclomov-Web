using CicloMov.Configuration;
using CicloMov.Entities;
using CicloMov.IRepositories;
using CicloMov.Repositories.Base;
using System.Linq;

namespace CicloMov.Repositories
{
    public class ClientesRepository : RepositoryBase<Clientes>, IClientesRepository
    {
        public ClientesRepository(Context context) : base(context)
        {
        }

        public Clientes GetById(int id)
        {
            return _dbSet.FirstOrDefault(x => x.IdCliente == id);
        }

    }
}
