using CicloMov.Entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CicloMov.IRepositories
{
    public interface IClientesRepository
    {
        IList<Clientes> GetAll();
        bool Insert(Clientes entity);
        bool Insert(ICollection<Clientes> entities);
        Clientes GetById(int id);
    }
}
