using Microsoft.Extensions.DependencyInjection;
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
            this.Close();

            var form1 = Program.ServiceProvider.GetRequiredService<frm_cliente>();

            form1.ShowDialog();

        }

        private void btn_area_fornecedores_Click(object sender, EventArgs e)
        {
            this.Close();

            var form2 = Program.ServiceProvider.GetRequiredService<frm_listar>();

            form2.ShowDialog();
        }

        private void btn_area_produtos_Click(object sender, EventArgs e)
        {
             this.Close();

            frm_produtos area_produtos = new frm_produtos();

            area_produtos.Show();
        }

        private void btn_area_funcionarios_Click(object sender, EventArgs e)
        {
             this.Close();

            frm_funcionarios area_funcionarios = new frm_funcionarios();

            area_funcionarios.Show();
        }

        private void btn_usuario_Click(object sender, EventArgs e)
        {
             this.Close();

            frm_usuario area_usuario = new frm_usuario();

            area_usuario.Show();
        }
    }
}
