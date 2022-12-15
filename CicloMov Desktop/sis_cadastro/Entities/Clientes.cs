using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace CicloMov.Entities
{
    [Table("clientes")]
    public class Clientes
    {
        [Key, Column("id_cliente")]
        [Browsable(false)]
        public int IdCliente { get; set; }

        [Column("nome_completo")]
        public string NomeCompleto { get; set; }

        [Column("email")]
        public string Email { get; set; }

        [Column("telefone")]
        public string Telefone { get; set; }

        [Column("username")]
        public string Username { get; set; }

        [Column("senha")]
        [Browsable(false)]
        public string Senha { get; set; }
    }
}
