using CicloMov.Configuration;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CicloMov.Repositories.Base
{
    public abstract class RepositoryBase<TEntity> where TEntity : class
    {
        protected readonly Context _context;
        protected readonly DbSet<TEntity> _dbSet;

        public RepositoryBase(Context context)
        {
            _context = context;
            _dbSet=  _context.Set<TEntity>();
        }

        public IList<TEntity> GetAll()
        {
            return _dbSet.ToList();
        }

        public bool Insert(TEntity entity)
        {
            _dbSet.Add(entity);

            return _context.SaveChanges() > 0;
        }

        public bool Insert(ICollection<TEntity> entities)
        {
            _dbSet.AddRange(entities);

            return _context.SaveChanges() > 0;
        }
    }
}
