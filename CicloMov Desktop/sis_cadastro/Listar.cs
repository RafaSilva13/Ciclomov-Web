using CicloMov.IRepositories;
using MySqlX.XDevAPI.Relational;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CicloMov
{
    public partial class frm_listar : Form
    {

        SqlConnection conexao;
        SqlCommand comando;
        SqlDataAdapter da;
        SqlDataReader dr;
        String strsql;
        private object dataGrid1;

        private readonly IClientesRepository _clientesRepository;

        public frm_listar(IClientesRepository clientesRepository)
        {
            InitializeComponent();
            _clientesRepository = clientesRepository;
            PreencherTabela();

        }

        private void PreencherTabela()
        {
            dataGridView1.DataSource = _clientesRepository.GetAll();
        }

        private void btn_cadastrar_Click(object sender, EventArgs e)
        {


            //var cliente = new Clientes()
            //{
            //    Email = ""
            //};
            //var sucesso = _clientesRepository.Insert(cliente);



        }

        private void toolStripLabel1_Click(object sender, EventArgs e)
        {

        }
    }
}