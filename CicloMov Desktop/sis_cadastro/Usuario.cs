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
    public partial class frm_usuario : Form
    {
        SqlConnection conexao;
        SqlCommand comando;
        SqlDataAdapter da;
        SqlDataReader dr;
        String strsql;
        public frm_usuario()
        {
            InitializeComponent();
        }

        private void btn_cadastrar_usuario_Click(object sender, EventArgs e)
        {
            if(txt_nome_usuario.Text == "" || txt_email_usuario.Text == "" || txt_senha_usuario.Text == "" || txt_depart_usuario.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
        
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha, departamento) VALUES (@nome_usuario,@email_usuario,@senha_usuario,@depart_usuario)";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@nome_usuario",
                    txt_nome_usuario.Text);
                    comando.Parameters.AddWithValue("@email_usuario",
                    txt_email_usuario.Text);
                    comando.Parameters.AddWithValue("@senha_usuario",
                    txt_senha_usuario.Text);
                    comando.Parameters.AddWithValue("@depart_usuario",
                    txt_depart_usuario.Text);
                    conexao.Open();
                    comando.ExecuteNonQuery();
                    MessageBox.Show("CADASTRO REALIZADO COM SUCESSO!!");

                    txt_cod_usuario.Text = "";
                    txt_nome_usuario.Text = "";
                    txt_email_usuario.Text = "";
                    txt_senha_usuario.Text = "";
                    txt_depart_usuario.Text = "";
                 
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

        private void btn_editar_usuario_Click(object sender, EventArgs e)
        {
            txt_cod_usuario.Enabled = false;
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if(txt_cod_usuario.Text == "" || txt_nome_usuario.Text == "" || txt_email_usuario.Text == "" || txt_senha_usuario.Text == "" || txt_depart_usuario.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "UPDATE usuarios SET nome_usuario = @nome_usuario, email_usuario = @email_usuario, senha = @senha_usuario, departamento = @depart_usuario WHERE codigo_usuario = @codigo_usuario";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@codigo_usuario",
                    txt_cod_usuario.Text);
                    comando.Parameters.AddWithValue("@nome_usuario",
                    txt_nome_usuario.Text);
                    comando.Parameters.AddWithValue("@email_usuario",
                    txt_email_usuario.Text);
                    comando.Parameters.AddWithValue("@senha_usuario",
                    txt_senha_usuario.Text);
                    comando.Parameters.AddWithValue("@depart_usuario",
                    txt_depart_usuario.Text);
                    conexao.Open();
                    comando.ExecuteNonQuery();
                    MessageBox.Show("CADASTRO ATUALIZADO COM SUCESSO!!");

                    txt_cod_usuario.Text = "";
                    txt_nome_usuario.Text = "";
                    txt_email_usuario.Text = "";
                    txt_senha_usuario.Text = "";
                    txt_depart_usuario.Text = "";
               
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

        private void btn_excluir_usuario_Click(object sender, EventArgs e)
        {
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if(txt_cod_usuario.Text == "")
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
                        strsql = "DELETE usuarios WHERE codigo_usuario = @codigo_usuario";
                        comando = new SqlCommand(strsql, conexao);
                        comando.Parameters.AddWithValue("@codigo_usuario",
                        txt_cod_usuario.Text);
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
                txt_cod_usuario.Text = "";
                txt_nome_usuario.Text = "";
                txt_email_usuario.Text = "";
                txt_senha_usuario.Text = "";
                txt_depart_usuario.Text = "";
                txt_usuario.Text = "";
            }
        }


        private void btn_cancelar_usuario_Click(object sender, EventArgs e)
        {
            //Apaga todos os dados dos campos preenchidos.
            txt_cod_usuario.Text = "";
            txt_nome_usuario.Text = "";
            txt_email_usuario.Text = "";
            txt_senha_usuario.Text = "";
            txt_depart_usuario.Text = "";
            txt_usuario.Text = "";
        }

        private void btn_pesquisar_usuario_Click(object sender, EventArgs e)
        {
            btn_editar_usuario.Enabled = true;
            btn_excluir_usuario.Enabled = true;
            btn_cadastrar_usuario.Enabled = true;

            if (txt_usuario.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else 
            {
                //INÍCIO DO BLOCO DE PROGRAMAÇÃO
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "SELECT * FROM usuarios WHERE codigo_usuario = @codigo_usuario";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@codigo_usuario",
                    txt_usuario.Text);
                    conexao.Open();
                    dr = comando.ExecuteReader();
                    if (dr.Read())
                    {
                        txt_cod_usuario.Text =
                        Convert.ToString(dr["codigo_usuario"]);
                        txt_nome_usuario.Text = (string)dr["nome_usuario"];
                        txt_email_usuario.Text = (string)dr["email_usuario"];
                        txt_senha_usuario.Text = (string)dr["senha"];
                        txt_depart_usuario.Text = (string)dr["departamento"];
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
                //FIM DO BLOCO DE PROGRAMAÇÃO
            }
        }

        private void btn_voltar_menu_Click(object sender, EventArgs e)
        {
             this.Close();

            frm_menu voltar_menu = new frm_menu();

            voltar_menu.Show();
        }

        private void frm_usuario_Load(object sender, EventArgs e)
        {
            txt_cod_usuario.Enabled = false;
        }
    }
}
