using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CicloMov
{
    public partial class frm_menu : Form
    {
        public frm_menu()
        {
            InitializeComponent();
        }

        private void btn_area_cliente_Click(object sender, EventArgs e)
        {
            this.Hide();

            frm_cliente area_cliente = new frm_cliente();

            area_cliente.Show();
        }

        private void btn_area_fornecedores_Click(object sender, EventArgs e)
        {
            this.Hide();

            frm_fornecedores area_fonecedores = new frm_fornecedores();

            area_fonecedores.Show();
        }

        private void btn_area_produtos_Click(object sender, EventArgs e)
        {
            this.Hide();

            frm_produtos area_produtos = new frm_produtos();

            area_produtos.Show();
        }

        private void btn_area_funcionarios_Click(object sender, EventArgs e)
        {
            this.Hide();

            frm_funcionarios area_funcionarios = new frm_funcionarios();

            area_funcionarios.Show();
        }

        private void btn_usuario_Click(object sender, EventArgs e)
        {
            this.Hide();

            frm_usuario area_usuario = new frm_usuario();

            area_usuario.Show();
        }
    }
}
