﻿namespace CicloMov
{
    partial class frm_cliente
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
            this.txt_cod_cliente = new System.Windows.Forms.MaskedTextBox();
            this.txt_nome_cliente = new System.Windows.Forms.MaskedTextBox();
            this.txt_end_cliente = new System.Windows.Forms.MaskedTextBox();
            this.txt_cel_cliente = new System.Windows.Forms.MaskedTextBox();
            this.txt_cpf_cliente = new System.Windows.Forms.MaskedTextBox();
            this.txt_pesquisar = new System.Windows.Forms.MaskedTextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.btn_pesquisar = new System.Windows.Forms.Button();
            this.btn_cancelar = new System.Windows.Forms.Button();
            this.btn_excluir = new System.Windows.Forms.Button();
            this.btn_editar = new System.Windows.Forms.Button();
            this.btn_cadastrar = new System.Windows.Forms.Button();
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
            this.label3.Size = new System.Drawing.Size(67, 13);
            this.label3.TabIndex = 7;
            this.label3.Text = "ENDEREÇO";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(100, 231);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(56, 13);
            this.label4.TabIndex = 8;
            this.label4.Text = "CELULAR";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(100, 273);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(27, 13);
            this.label5.TabIndex = 9;
            this.label5.Text = "CPF";
            // 
            // txt_cod_cliente
            // 
            this.txt_cod_cliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_cod_cliente.Location = new System.Drawing.Point(194, 100);
            this.txt_cod_cliente.Name = "txt_cod_cliente";
            this.txt_cod_cliente.Size = new System.Drawing.Size(130, 23);
            this.txt_cod_cliente.TabIndex = 10;
            // 
            // txt_nome_cliente
            // 
            this.txt_nome_cliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_nome_cliente.Location = new System.Drawing.Point(194, 141);
            this.txt_nome_cliente.Name = "txt_nome_cliente";
            this.txt_nome_cliente.Size = new System.Drawing.Size(332, 23);
            this.txt_nome_cliente.TabIndex = 11;
            // 
            // txt_end_cliente
            // 
            this.txt_end_cliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_end_cliente.Location = new System.Drawing.Point(194, 185);
            this.txt_end_cliente.Name = "txt_end_cliente";
            this.txt_end_cliente.Size = new System.Drawing.Size(456, 23);
            this.txt_end_cliente.TabIndex = 12;
            // 
            // txt_cel_cliente
            // 
            this.txt_cel_cliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_cel_cliente.Location = new System.Drawing.Point(194, 228);
            this.txt_cel_cliente.Mask = "(99) 99999-9999";
            this.txt_cel_cliente.Name = "txt_cel_cliente";
            this.txt_cel_cliente.Size = new System.Drawing.Size(168, 23);
            this.txt_cel_cliente.TabIndex = 13;
            // 
            // txt_cpf_cliente
            // 
            this.txt_cpf_cliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_cpf_cliente.Location = new System.Drawing.Point(194, 266);
            this.txt_cpf_cliente.Mask = "999.999.999-99";
            this.txt_cpf_cliente.Name = "txt_cpf_cliente";
            this.txt_cpf_cliente.Size = new System.Drawing.Size(168, 23);
            this.txt_cpf_cliente.TabIndex = 14;
            // 
            // txt_pesquisar
            // 
            this.txt_pesquisar.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.txt_pesquisar.Location = new System.Drawing.Point(510, 44);
            this.txt_pesquisar.Name = "txt_pesquisar";
            this.txt_pesquisar.Size = new System.Drawing.Size(202, 23);
            this.txt_pesquisar.TabIndex = 15;
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
            // btn_pesquisar
            // 
            this.btn_pesquisar.Image = global::CicloMov.Properties.Resources.search_user;
            this.btn_pesquisar.Location = new System.Drawing.Point(718, 2);
            this.btn_pesquisar.Name = "btn_pesquisar";
            this.btn_pesquisar.Size = new System.Drawing.Size(69, 63);
            this.btn_pesquisar.TabIndex = 4;
            this.btn_pesquisar.UseVisualStyleBackColor = true;
            this.btn_pesquisar.Click += new System.EventHandler(this.btn_pesquisar_Click);
            // 
            // btn_cancelar
            // 
            this.btn_cancelar.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_cancelar.Image = global::CicloMov.Properties.Resources.cancelar;
            this.btn_cancelar.Location = new System.Drawing.Point(206, 2);
            this.btn_cancelar.Name = "btn_cancelar";
            this.btn_cancelar.Size = new System.Drawing.Size(69, 63);
            this.btn_cancelar.TabIndex = 3;
            this.btn_cancelar.UseVisualStyleBackColor = true;
            this.btn_cancelar.Click += new System.EventHandler(this.btn_cancelar_Click);
            // 
            // btn_excluir
            // 
            this.btn_excluir.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_excluir.Image = global::CicloMov.Properties.Resources.del_user;
            this.btn_excluir.Location = new System.Drawing.Point(138, 2);
            this.btn_excluir.Name = "btn_excluir";
            this.btn_excluir.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.btn_excluir.Size = new System.Drawing.Size(69, 63);
            this.btn_excluir.TabIndex = 2;
            this.btn_excluir.UseVisualStyleBackColor = true;
            this.btn_excluir.Click += new System.EventHandler(this.btn_excluir_Click);
            // 
            // btn_editar
            // 
            this.btn_editar.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_editar.Image = global::CicloMov.Properties.Resources.update_user;
            this.btn_editar.Location = new System.Drawing.Point(70, 2);
            this.btn_editar.Name = "btn_editar";
            this.btn_editar.Size = new System.Drawing.Size(69, 63);
            this.btn_editar.TabIndex = 1;
            this.btn_editar.UseVisualStyleBackColor = true;
            this.btn_editar.Click += new System.EventHandler(this.btn_editar_Click);
            // 
            // btn_cadastrar
            // 
            this.btn_cadastrar.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_cadastrar.BackColor = System.Drawing.Color.Transparent;
            this.btn_cadastrar.ForeColor = System.Drawing.Color.Transparent;
            this.btn_cadastrar.Image = global::CicloMov.Properties.Resources.add_user;
            this.btn_cadastrar.Location = new System.Drawing.Point(2, 2);
            this.btn_cadastrar.Name = "btn_cadastrar";
            this.btn_cadastrar.Size = new System.Drawing.Size(69, 63);
            this.btn_cadastrar.TabIndex = 0;
            this.btn_cadastrar.UseVisualStyleBackColor = false;
            this.btn_cadastrar.Click += new System.EventHandler(this.btn_cadastrar_Click);
            // 
            // btn_voltar_menu
            // 
            this.btn_voltar_menu.BackColor = System.Drawing.Color.Transparent;
            this.btn_voltar_menu.BackgroundImage = global::CicloMov.Properties.Resources._3643769_building_home_house_main_menu_start_113416;
            this.btn_voltar_menu.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_voltar_menu.Location = new System.Drawing.Point(718, 67);
            this.btn_voltar_menu.Name = "btn_voltar_menu";
            this.btn_voltar_menu.Size = new System.Drawing.Size(69, 63);
            this.btn_voltar_menu.TabIndex = 18;
            this.btn_voltar_menu.UseVisualStyleBackColor = false;
            this.btn_voltar_menu.Click += new System.EventHandler(this.btn_voltar_menu_Click);
            // 
            // frm_cliente
            // 
            this.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(790, 443);
            this.Controls.Add(this.btn_voltar_menu);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.txt_pesquisar);
            this.Controls.Add(this.txt_cpf_cliente);
            this.Controls.Add(this.txt_cel_cliente);
            this.Controls.Add(this.txt_end_cliente);
            this.Controls.Add(this.txt_nome_cliente);
            this.Controls.Add(this.txt_cod_cliente);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btn_pesquisar);
            this.Controls.Add(this.btn_cancelar);
            this.Controls.Add(this.btn_excluir);
            this.Controls.Add(this.btn_editar);
            this.Controls.Add(this.btn_cadastrar);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.Name = "frm_cliente";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "CLIENTES";
            this.Load += new System.EventHandler(this.frm_clientes_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btn_cadastrar;
        private System.Windows.Forms.Button btn_excluir;
        private System.Windows.Forms.Button btn_cancelar;
        private System.Windows.Forms.Button btn_pesquisar;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.MaskedTextBox txt_cod_cliente;
        private System.Windows.Forms.MaskedTextBox txt_nome_cliente;
        private System.Windows.Forms.MaskedTextBox txt_end_cliente;
        private System.Windows.Forms.MaskedTextBox txt_cel_cliente;
        private System.Windows.Forms.MaskedTextBox txt_cpf_cliente;
        private System.Windows.Forms.MaskedTextBox txt_pesquisar;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Button btn_editar;
        private System.Windows.Forms.Button btn_voltar_menu;
    }
}
