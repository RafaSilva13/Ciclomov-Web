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
    public partial class frm_fornecedores : Form
    {
        SqlConnection conexao;
        SqlCommand comando;
        SqlDataAdapter da;
        SqlDataReader dr;
        String strsql;
        public frm_fornecedores()
        {
            InitializeComponent();
        }

        private void btn_cadastrar_Click(object sender, EventArgs e)
        {
            if (txt_nome_fornecedores.Text == "" || txt_end_fornecedores.Text == "" || txt_cel_fornecedores.Text == "" || txt_cnpj_fornecedores.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "INSERT INTO fornecedores (nome_fornecedores, endereco_fornecedores, telefone_fornecedores, cnpj_fornecedores) VALUES (@nome_fornecedores,@endereco_fornecedores,@telefone_fornecedores,@cnpj_fornecedores)";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@codigo_fornecedores",
                    txt_cod_fornecedores.Text);
                    comando.Parameters.AddWithValue("@nome_fornecedores",
                    txt_nome_fornecedores.Text);
                    comando.Parameters.AddWithValue("@endereco_fornecedores",
                    txt_end_fornecedores.Text);
                    comando.Parameters.AddWithValue("@telefone_fornecedores",
                    txt_cel_fornecedores.Text);
                    comando.Parameters.AddWithValue("@cnpj_fornecedores",
                    txt_cnpj_fornecedores.Text);
                    conexao.Open();
                    comando.ExecuteNonQuery();
                    MessageBox.Show("CADASTRO REALIZADO COM SUCESSO!!");
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
                finally
                {
                    conexao.Close();
                    conexao = null;
                    comando = null;
                }
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if (txt_cod_fornecedores.Text == "" || txt_nome_fornecedores.Text == "" || txt_end_fornecedores.Text == "" || txt_cel_fornecedores.Text == "" || txt_cnpj_fornecedores.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "UPDATE fornecedores SET nome_fornecedores = @nome_fornecedores, endereco_fornecedores = @endereco_fornecedores, telefone_fornecedores = @telefone_fornecedores, cnpj_fornecedores = @cnpj_fornecedores WHERE codigo_fornecedores = @codigo_fornecedores";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@codigo_fornecedores",
                    txt_cod_fornecedores.Text);
                    comando.Parameters.AddWithValue("@nome_fornecedores",
                    txt_nome_fornecedores.Text);
                    comando.Parameters.AddWithValue("@endereco_fornecedores",
                    txt_end_fornecedores.Text);
                    comando.Parameters.AddWithValue("@telefone_fornecedores",
                    txt_cel_fornecedores.Text);
                    comando.Parameters.AddWithValue("@cnpj_fornecedores",
                    txt_cnpj_fornecedores.Text);
                    conexao.Open();
                    comando.ExecuteNonQuery();
                    MessageBox.Show("CADASTRO ATUALIZADO COM SUCESSO!!");

                    txt_cod_fornecedores.Text = "";
                    txt_nome_fornecedores.Text = "";
                    txt_end_fornecedores.Text = "";
                    txt_cel_fornecedores.Text = "";
                    txt_cnpj_fornecedores.Text = "";
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
                finally
                {
                    conexao.Close();
                    conexao = null;
                    comando = null;
                }
                //FIM DO BLOCO DE PROGRAMAÇÃO
            }
        }

        private void btn_excluir_Click(object sender, EventArgs e)
        {
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if (txt_cod_fornecedores.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");

                    //Sua rotina de exclusão
                    //Confirmando exclusão para o usuário

                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS;
                Database=bd_cadastro_clayteam; User id=sa; Password=123456;");

                    if (DialogResult.Yes == MessageBox.Show("Tem certeza que deseja apagar o registro?", "Confirmação", MessageBoxButtons.YesNo, MessageBoxIcon.Question, MessageBoxDefaultButton.Button2))
                    {
                        strsql = "DELETE fornecedores WHERE codigo_fornecedores = @codigo_fornecedores";
                        comando = new SqlCommand(strsql, conexao);
                        comando.Parameters.AddWithValue("@codigo_fornecedores",
                        txt_cod_fornecedores.Text);
                        conexao.Open();
                        comando.ExecuteNonQuery();
                        MessageBox.Show("REGISTRO APAGADO COM SUCESSO!!", "Sucesso", MessageBoxButtons.OK, MessageBoxIcon.Information);

                    }
                    else
                    {
                        MessageBox.Show("Operação Cancelada!");
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
                finally
                {
                    conexao.Close();
                    conexao = null;
                    comando = null;
                }
                //FIM DO BLOCO DE PROGRAMAÇÃO
                txt_cod_fornecedores.Text = "";
                txt_nome_fornecedores.Text = "";
                txt_end_fornecedores.Text = "";
                txt_cel_fornecedores.Text = "";
                txt_cnpj_fornecedores.Text = "";
                txt_pesquisar_fornecedores.Text = "";
            }
        }

        private void btn_cancelar_Click(object sender, EventArgs e)
        {
            //Apaga todos os dados dos campos preenchidos.
            txt_cod_fornecedores.Text = "";
            txt_nome_fornecedores.Text = "";
            txt_end_fornecedores.Text = "";
            txt_cel_fornecedores.Text = "";
            txt_cnpj_fornecedores.Text = "";
            txt_pesquisar_fornecedores.Text = "";
        }

        private void btn_pesquisar_Click(object sender, EventArgs e)
        {
            btn_editar_fornecedores.Enabled = true;
            btn_excluir_fornecedores.Enabled = true;
            btn_fornecedores.Enabled = true;
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if (txt_pesquisar_fornecedores.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "SELECT * FROM fornecedores WHERE codigo_fornecedores = @codigo_fornecedores";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@codigo_fornecedores",
                    txt_pesquisar_fornecedores.Text);
                    conexao.Open();
                    dr = comando.ExecuteReader();
                    if (dr.Read())
                    {
                        txt_cod_fornecedores.Text =
                        Convert.ToString(dr["codigo_fornecedores"]);
                        txt_nome_fornecedores.Text = (string)dr["nome_fornecedores"];
                        txt_end_fornecedores.Text = (string)dr["endereco_fornecedores"];
                        txt_cel_fornecedores.Text = (string)dr["telefone_fornecedores"];
                        txt_cnpj_fornecedores.Text = (string)dr["cnpj_fornecedores"];
                    }
                    else
                    {
                        MessageBox.Show("Nenhum registro encontrado!");
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
                finally
                {
                    conexao.Close();
                    conexao = null;
                    comando = null;
                }
            }
            //FIM DO BLOCO DE PROGRAMAÇÃO
        }

        private void btn_voltar_menu_Click(object sender, EventArgs e)
        {
             this.Close();

            frm_menu voltar_menu = new frm_menu();

            voltar_menu.Show();
        }

        private void frm_fornecedores_Load(object sender, EventArgs e)
        {
            txt_cod_fornecedores.Enabled = false;
        }
    }
}
