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
    public partial class frm_produtos : Form
    {
        SqlConnection conexao;
        SqlCommand comando;
        SqlDataAdapter da;
        SqlDataReader dr;
        String strsql;
        public frm_produtos()
        {
            InitializeComponent();
        }

        private void btn_cadastrar_Click(object sender, EventArgs e)
        {
            if (txt_nome_produtos.Text == "" || txt_valor_produtos.Text == "" || txt_estoque_produtos.Text == "" || txt_categoria_produtos.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "INSERT INTO produtos (nome_produto, valor_produto, estoque_produto, categoria_produto) VALUES (@nome_produto,@valor_produto,@estoque_produto,@categoria_produto)";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@nome_produto",
                    txt_nome_produtos.Text);
                    comando.Parameters.AddWithValue("@valor_produto",
                    Convert.ToDecimal(txt_valor_produtos.Text));
                    comando.Parameters.AddWithValue("@estoque_produto",
                    txt_estoque_produtos.Text);
                    comando.Parameters.AddWithValue("@categoria_produto",
                    txt_categoria_produtos.Text);
                    conexao.Open();
                    comando.ExecuteNonQuery();
                    MessageBox.Show("CADASTRO REALIZADO COM SUCESSO!!");

                    txt_cod_produtos.Text = "";
                    txt_nome_produtos.Text = "";
                    txt_valor_produtos.Text = "";
                    txt_estoque_produtos.Text = "";
                    txt_categoria_produtos.Text = "";
                    txt_pesquisar_produtos.Text = "";
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

        private void btn_editar_produtos_Click(object sender, EventArgs e)
        {
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if (txt_cod_produtos.Text == "" || txt_nome_produtos.Text == "" || txt_valor_produtos.Text == "" || txt_estoque_produtos.Text == "" || txt_categoria_produtos.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "UPDATE produtos SET nome_produto = @nome_produto, valor_produto = @valor_produto, estoque_produto = @estoque_produto, categoria_produto = @categoria_produto WHERE cod_produto = @cod_produto";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@cod_produto",
                    txt_cod_produtos.Text);
                    comando.Parameters.AddWithValue("@nome_produto",
                    txt_nome_produtos.Text);
                    comando.Parameters.AddWithValue("@valor_produto",
                    Convert.ToDecimal(txt_valor_produtos.Text));
                    comando.Parameters.AddWithValue("@estoque_produto",
                    txt_estoque_produtos.Text);
                    comando.Parameters.AddWithValue("@categoria_produto",
                    txt_categoria_produtos.Text);
                    conexao.Open();
                    comando.ExecuteNonQuery();
                    MessageBox.Show("CADASTRO ATUALIZADO COM SUCESSO!!");

                    txt_cod_produtos.Text = "";
                    txt_nome_produtos.Text = "";
                    txt_valor_produtos.Text = "";
                    txt_estoque_produtos.Text = "";
                    txt_categoria_produtos.Text = "";
                    txt_pesquisar_produtos.Text = "";
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

        private void btn_excluir_Click(object sender, EventArgs e)
        {
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if (txt_cod_produtos.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //Criar um MessageBox com os botões Sim e Não e deixar o botão 2(Não) selecionado por padrão e comparar o botão apertado

                    //Sua rotina de exclusão
                    //Confirmando exclusão para o usuário

                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");

                    if (DialogResult.Yes == MessageBox.Show("Tem certeza que deseja apagar o registro?", "Confirmação", MessageBoxButtons.YesNo, MessageBoxIcon.Question, MessageBoxDefaultButton.Button2))
                    {
                        strsql = "DELETE produtos WHERE cod_produto = @cod_produto";
                        comando = new SqlCommand(strsql, conexao);
                        comando.Parameters.AddWithValue("@cod_produto",
                        txt_cod_produtos.Text);
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
                txt_cod_produtos.Text = "";
                txt_nome_produtos.Text = "";
                txt_valor_produtos.Text = "";
                txt_estoque_produtos.Text = "";
                txt_categoria_produtos.Text = "";
                txt_pesquisar_produtos.Text = "";
            }
        }

        private void btn_cancelar_Click(object sender, EventArgs e)
        {
            //Apaga todos os dados dos campos preenchidos.
            txt_cod_produtos.Text = "";
            txt_nome_produtos.Text = "";
            txt_valor_produtos.Text = "";
            txt_estoque_produtos.Text = "";
            txt_categoria_produtos.Text = "";
            txt_pesquisar_produtos.Text = "";
        }

        private void btn_pesquisar_Click(object sender, EventArgs e)
        {
            //INÍCIO DO BLOCO DE PROGRAMAÇÃO
            if (txt_pesquisar_produtos.Text == "")
            {
                MessageBox.Show("Preencha todos os campos para prosseguir!");
            }
            else
            {
                try
                {
                    //A variável conexao define uma string para conexão com o BD.
                    conexao = new SqlConnection(@"Server=LAB136-16\SQLEXPRESS; Database=bd_cadastro_clayteam; User id=sa; Password=123456;");
                    strsql = "SELECT * FROM produtos WHERE cod_produto = @cod_produto";
                    comando = new SqlCommand(strsql, conexao);
                    comando.Parameters.AddWithValue("@cod_produto",
                    txt_pesquisar_produtos.Text);
                    conexao.Open();
                    dr = comando.ExecuteReader();
                    if (dr.Read())
                    {
                        txt_cod_produtos.Text =
                        Convert.ToString(dr["cod_produto"]);
                        txt_nome_produtos.Text = (string)dr["nome_produto"];
                        txt_valor_produtos.Text = Convert.ToString(String.Format("{0:0,0.00}", dr["valor_produto"]));
                        txt_estoque_produtos.Text = (string)dr["estoque_produto"];
                        txt_categoria_produtos.Text = (string)dr["categoria_produto"];
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
            this.Hide();

            frm_menu voltar_menu = new frm_menu();

            voltar_menu.Show();
        }

        private void frm_produtos_Load(object sender, EventArgs e)
        {
            txt_cod_produtos.Enabled = false;
        }
    }
}
