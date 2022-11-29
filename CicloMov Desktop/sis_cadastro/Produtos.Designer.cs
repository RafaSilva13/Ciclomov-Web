namespace CicloMov
{
    partial class frm_produtos
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.txt_cod_produtos = new System.Windows.Forms.MaskedTextBox();
            this.txt_nome_produtos = new System.Windows.Forms.MaskedTextBox();
            this.txt_valor_produtos = new System.Windows.Forms.MaskedTextBox();
            this.txt_estoque_produtos = new System.Windows.Forms.MaskedTextBox();
            this.txt_pesquisar_produtos = new System.Windows.Forms.MaskedTextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.btn_pesquisar_produtos = new System.Windows.Forms.Button();
            this.btn_cancelar_produtos = new System.Windows.Forms.Button();
            this.btn_excluir_produtos = new System.Windows.Forms.Button();
            this.btn_editar_produtos = new System.Windows.Forms.Button();
            this.btn_cadastrar_produtos = new System.Windows.Forms.Button();
            this.txt_categoria_produtos = new System.Windows.Forms.ComboBox();
            this.btn_voltar_menu = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(100, 107);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(49, 13);
            this.label1.TabIndex = 5;
            this.label1.Text = "CÓDIGO";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(100, 148);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(39, 13);
            this.label2.TabIndex = 6;
            this.label2.Text = "NOME";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(100, 192);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(43, 13);
            this.label3.TabIndex = 7;
            this.label3.Text = "VALOR";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(100, 231);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(59, 13);
            this.label4.TabIndex = 8;
            this.label4.Text = "ESTOQUE";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(100, 273);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(69, 13);
            this.label5.TabIndex = 9;
            this.label5.Text = "CATEGORIA";
            // 
            // txt_cod_produtos
            // 
            this.txt_cod_produtos.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_cod_produtos.Location = new System.Drawing.Point(194, 100);
            this.txt_cod_produtos.Name = "txt_cod_produtos";
            this.txt_cod_produtos.Size = new System.Drawing.Size(130, 23);
            this.txt_cod_produtos.TabIndex = 10;
            // 
            // txt_nome_produtos
            // 
            this.txt_nome_produtos.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_nome_produtos.Location = new System.Drawing.Point(194, 141);
            this.txt_nome_produtos.Name = "txt_nome_produtos";
            this.txt_nome_produtos.Size = new System.Drawing.Size(332, 23);
            this.txt_nome_produtos.TabIndex = 11;
            // 
            // txt_valor_produtos
            // 
            this.txt_valor_produtos.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_valor_produtos.Location = new System.Drawing.Point(194, 185);
            this.txt_valor_produtos.Name = "txt_valor_produtos";
            this.txt_valor_produtos.Size = new System.Drawing.Size(456, 23);
            this.txt_valor_produtos.TabIndex = 12;
            // 
            // txt_estoque_produtos
            // 
            this.txt_estoque_produtos.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_estoque_produtos.Location = new System.Drawing.Point(194, 228);
            this.txt_estoque_produtos.Name = "txt_estoque_produtos";
            this.txt_estoque_produtos.Size = new System.Drawing.Size(168, 23);
            this.txt_estoque_produtos.TabIndex = 13;
            // 
            // txt_pesquisar_produtos
            // 
            this.txt_pesquisar_produtos.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_pesquisar_produtos.Location = new System.Drawing.Point(510, 44);
            this.txt_pesquisar_produtos.Name = "txt_pesquisar_produtos";
            this.txt_pesquisar_produtos.Size = new System.Drawing.Size(202, 23);
            this.txt_pesquisar_produtos.TabIndex = 15;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(510, 25);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(72, 13);
            this.label6.TabIndex = 16;
            this.label6.Text = "PESQUISAR:";
            // 
            // btn_pesquisar_produtos
            // 
            this.btn_pesquisar_produtos.Image = global::CicloMov.Properties.Resources.search_user;
            this.btn_pesquisar_produtos.Location = new System.Drawing.Point(718, 2);
            this.btn_pesquisar_produtos.Name = "btn_pesquisar_produtos";
            this.btn_pesquisar_produtos.Size = new System.Drawing.Size(69, 63);
            this.btn_pesquisar_produtos.TabIndex = 4;
            this.btn_pesquisar_produtos.UseVisualStyleBackColor = true;
            this.btn_pesquisar_produtos.Click += new System.EventHandler(this.btn_pesquisar_Click);
            // 
            // btn_cancelar_produtos
            // 
            this.btn_cancelar_produtos.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_cancelar_produtos.Image = global::CicloMov.Properties.Resources.cancelar;
            this.btn_cancelar_produtos.Location = new System.Drawing.Point(212, 2);
            this.btn_cancelar_produtos.Name = "btn_cancelar_produtos";
            this.btn_cancelar_produtos.Size = new System.Drawing.Size(69, 63);
            this.btn_cancelar_produtos.TabIndex = 3;
            this.btn_cancelar_produtos.UseVisualStyleBackColor = true;
            this.btn_cancelar_produtos.Click += new System.EventHandler(this.btn_cancelar_Click);
            // 
            // btn_excluir_produtos
            // 
            this.btn_excluir_produtos.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_excluir_produtos.Image = global::CicloMov.Properties.Resources.del_user;
            this.btn_excluir_produtos.Location = new System.Drawing.Point(142, 2);
            this.btn_excluir_produtos.Name = "btn_excluir_produtos";
            this.btn_excluir_produtos.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.btn_excluir_produtos.Size = new System.Drawing.Size(69, 63);
            this.btn_excluir_produtos.TabIndex = 2;
            this.btn_excluir_produtos.UseVisualStyleBackColor = true;
            this.btn_excluir_produtos.Click += new System.EventHandler(this.btn_excluir_Click);
            // 
            // btn_editar_produtos
            // 
            this.btn_editar_produtos.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_editar_produtos.Image = global::CicloMov.Properties.Resources.update_user;
            this.btn_editar_produtos.Location = new System.Drawing.Point(72, 2);
            this.btn_editar_produtos.Name = "btn_editar_produtos";
            this.btn_editar_produtos.Size = new System.Drawing.Size(69, 63);
            this.btn_editar_produtos.TabIndex = 1;
            this.btn_editar_produtos.UseVisualStyleBackColor = true;
            this.btn_editar_produtos.Click += new System.EventHandler(this.btn_editar_produtos_Click);
            // 
            // btn_cadastrar_produtos
            // 
            this.btn_cadastrar_produtos.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_cadastrar_produtos.BackColor = System.Drawing.Color.Transparent;
            this.btn_cadastrar_produtos.ForeColor = System.Drawing.Color.Transparent;
            this.btn_cadastrar_produtos.Image = global::CicloMov.Properties.Resources.add_user;
            this.btn_cadastrar_produtos.Location = new System.Drawing.Point(2, 2);
            this.btn_cadastrar_produtos.Name = "btn_cadastrar_produtos";
            this.btn_cadastrar_produtos.Size = new System.Drawing.Size(69, 63);
            this.btn_cadastrar_produtos.TabIndex = 0;
            this.btn_cadastrar_produtos.UseVisualStyleBackColor = false;
            this.btn_cadastrar_produtos.Click += new System.EventHandler(this.btn_cadastrar_Click);
            // 
            // txt_categoria_produtos
            // 
            this.txt_categoria_produtos.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.txt_categoria_produtos.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.25F);
            this.txt_categoria_produtos.FormattingEnabled = true;
            this.txt_categoria_produtos.Items.AddRange(new object[] {
            "Bebidas",
            "Frios",
            "Pereciveis",
            "Bebidas Alcoólicas"});
            this.txt_categoria_produtos.Location = new System.Drawing.Point(194, 270);
            this.txt_categoria_produtos.Name = "txt_categoria_produtos";
            this.txt_categoria_produtos.Size = new System.Drawing.Size(168, 23);
            this.txt_categoria_produtos.TabIndex = 17;
            // 
            // btn_voltar_menu
            // 
            this.btn_voltar_menu.BackColor = System.Drawing.Color.Transparent;
            this.btn_voltar_menu.BackgroundImage = global::CicloMov.Properties.Resources._3643769_building_home_house_main_menu_start_113416;
            this.btn_voltar_menu.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_voltar_menu.Location = new System.Drawing.Point(718, 67);
            this.btn_voltar_menu.Name = "btn_voltar_menu";
            this.btn_voltar_menu.Size = new System.Drawing.Size(69, 63);
            this.btn_voltar_menu.TabIndex = 19;
            this.btn_voltar_menu.UseVisualStyleBackColor = false;
            this.btn_voltar_menu.Click += new System.EventHandler(this.btn_voltar_menu_Click);
            // 
            // frm_produtos
            // 
            this.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(790, 443);
            this.Controls.Add(this.btn_voltar_menu);
            this.Controls.Add(this.txt_categoria_produtos);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.txt_pesquisar_produtos);
            this.Controls.Add(this.txt_estoque_produtos);
            this.Controls.Add(this.txt_valor_produtos);
            this.Controls.Add(this.txt_nome_produtos);
            this.Controls.Add(this.txt_cod_produtos);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btn_pesquisar_produtos);
            this.Controls.Add(this.btn_cancelar_produtos);
            this.Controls.Add(this.btn_excluir_produtos);
            this.Controls.Add(this.btn_editar_produtos);
            this.Controls.Add(this.btn_cadastrar_produtos);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.Name = "frm_produtos";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "PRODUTOS";
            this.Load += new System.EventHandler(this.frm_produtos_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btn_cadastrar_produtos;
        private System.Windows.Forms.Button btn_excluir_produtos;
        private System.Windows.Forms.Button btn_cancelar_produtos;
        private System.Windows.Forms.Button btn_pesquisar_produtos;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.MaskedTextBox txt_cod_produtos;
        private System.Windows.Forms.MaskedTextBox txt_nome_produtos;
        private System.Windows.Forms.MaskedTextBox txt_valor_produtos;
        private System.Windows.Forms.MaskedTextBox txt_estoque_produtos;
        private System.Windows.Forms.MaskedTextBox txt_pesquisar_produtos;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Button btn_editar_produtos;
        private System.Windows.Forms.ComboBox txt_categoria_produtos;
        private System.Windows.Forms.Button btn_voltar_menu;
    }
}

