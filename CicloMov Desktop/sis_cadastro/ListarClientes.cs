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

        private void dataGridView1_DefaultValuesNeeded(object sender, System.Windows.Forms.DataGridViewRowEventArgs e)
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
                        e.Row.Cells["col_codigo"].Value = myReader.GetString(0);
                        e.Row.Cells["col_usuario"].Value = myReader.GetString(5);
                        e.Row.Cells["col_email"].Value = myReader.GetString(2);
                        e.Row.Cells["col_cpf"].Value = myReader.GetString(3);
                        e.Row.Cells["col_tempo"].Value = myReader.GetString(4);
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
