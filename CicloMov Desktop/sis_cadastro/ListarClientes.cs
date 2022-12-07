using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace CicloMov
{
    public partial class frm_listarClientes : Form
    {
        public frm_listarClientes()
        {
            InitializeComponent();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            MySqlConnection cnn = new MySqlConnection("server=localhost;database=bd_estacionamento;uid=root;pwd=\"\";");
            MySqlCommand comando = new MySqlCommand("SELECT * FROM clientes", cnn);
            try
            {

                cnn.Open();

                MySqlDataReader myReader;
                myReader = comando.ExecuteReader();
                try
                {
                    while (myReader.Read())
                    {
                        //Console.WriteLine(myReader.GetString(0));
                        txt_cod_cliente.Text = myReader.GetString(0);
                        txt_email_cliente.Text = myReader.GetString(1);
                        txt_cpf_cliente.Text = myReader.GetString(2);
                        txt_tempo_cliente.Text = myReader.GetString(3);
                    }
                }
                finally
                {
                    myReader.Close();
                    cnn.Close();
                }

            }
            catch (Exception ex)
            {
                MessageBox.Show("Can not open connection ! ");
            }
        }

    }
}
