namespace CicloMov
{
    partial class frm_menu
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
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.btn_usuario = new System.Windows.Forms.Button();
            this.btn_cancelar = new System.Windows.Forms.Button();
            this.btn_area_funcionarios = new System.Windows.Forms.Button();
            this.btn_area_produtos = new System.Windows.Forms.Button();
            this.btn_area_fornecedores = new System.Windows.Forms.Button();
            this.btn_area_cliente = new System.Windows.Forms.Button();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.btn_usuario);
            this.groupBox1.Controls.Add(this.btn_cancelar);
            this.groupBox1.Controls.Add(this.btn_area_funcionarios);
            this.groupBox1.Controls.Add(this.btn_area_produtos);
            this.groupBox1.Controls.Add(this.btn_area_fornecedores);
            this.groupBox1.Controls.Add(this.btn_area_cliente);
            this.groupBox1.Location = new System.Drawing.Point(24, 16);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(184, 264);
            this.groupBox1.TabIndex = 0;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Menu de Opções";
            // 
            // btn_usuario
            // 
            this.btn_usuario.BackgroundImage = global::CicloMov.Properties.Resources.users_12820;
            this.btn_usuario.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_usuario.Location = new System.Drawing.Point(56, 184);
            this.btn_usuario.Name = "btn_usuario";
            this.btn_usuario.Size = new System.Drawing.Size(70, 70);
            this.btn_usuario.TabIndex = 5;
            this.btn_usuario.UseVisualStyleBackColor = true;
            this.btn_usuario.Click += new System.EventHandler(this.btn_usuario_Click);
            // 
            // btn_cancelar
            // 
            this.btn_cancelar.AccessibleRole = System.Windows.Forms.AccessibleRole.None;
            this.btn_cancelar.Image = global::CicloMov.Properties.Resources.cancelar;
            this.btn_cancelar.Location = new System.Drawing.Point(86, 85);
            this.btn_cancelar.Name = "btn_cancelar";
            this.btn_cancelar.Size = new System.Drawing.Size(0, 0);
            this.btn_cancelar.TabIndex = 4;
            this.btn_cancelar.UseVisualStyleBackColor = true;
            // 
            // btn_area_funcionarios
            // 
            this.btn_area_funcionarios.BackColor = System.Drawing.Color.Transparent;
            this.btn_area_funcionarios.BackgroundImage = global::CicloMov.Properties.Resources.technicalsupport_support_representative_person_people_man_1641__2_;
            this.btn_area_funcionarios.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_area_funcionarios.Location = new System.Drawing.Point(16, 104);
            this.btn_area_funcionarios.Name = "btn_area_funcionarios";
            this.btn_area_funcionarios.Padding = new System.Windows.Forms.Padding(15);
            this.btn_area_funcionarios.Size = new System.Drawing.Size(70, 70);
            this.btn_area_funcionarios.TabIndex = 3;
            this.btn_area_funcionarios.UseVisualStyleBackColor = false;
            this.btn_area_funcionarios.Click += new System.EventHandler(this.btn_area_funcionarios_Click);
            // 
            // btn_area_produtos
            // 
            this.btn_area_produtos.BackColor = System.Drawing.Color.Transparent;
            this.btn_area_produtos.BackgroundImage = global::CicloMov.Properties.Resources.business_inventory_maintenance_product_box_boxes_2326;
            this.btn_area_produtos.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_area_produtos.Location = new System.Drawing.Point(96, 104);
            this.btn_area_produtos.Name = "btn_area_produtos";
            this.btn_area_produtos.Padding = new System.Windows.Forms.Padding(15);
            this.btn_area_produtos.Size = new System.Drawing.Size(70, 70);
            this.btn_area_produtos.TabIndex = 2;
            this.btn_area_produtos.UseVisualStyleBackColor = false;
            this.btn_area_produtos.Click += new System.EventHandler(this.btn_area_produtos_Click);
            // 
            // btn_area_fornecedores
            // 
            this.btn_area_fornecedores.BackColor = System.Drawing.Color.Transparent;
            this.btn_area_fornecedores.BackgroundImage = global::CicloMov.Properties.Resources.customer_person_people_man_user_client_1629__1_;
            this.btn_area_fornecedores.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_area_fornecedores.Location = new System.Drawing.Point(96, 24);
            this.btn_area_fornecedores.Name = "btn_area_fornecedores";
            this.btn_area_fornecedores.Padding = new System.Windows.Forms.Padding(15);
            this.btn_area_fornecedores.Size = new System.Drawing.Size(70, 70);
            this.btn_area_fornecedores.TabIndex = 1;
            this.btn_area_fornecedores.UseVisualStyleBackColor = false;
            this.btn_area_fornecedores.Click += new System.EventHandler(this.btn_area_fornecedores_Click);
            // 
            // btn_area_cliente
            // 
            this.btn_area_cliente.BackColor = System.Drawing.Color.Transparent;
            this.btn_area_cliente.BackgroundImage = global::CicloMov.Properties.Resources.person_user_customer_man_male_man_boy_people_1687__2_;
            this.btn_area_cliente.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.btn_area_cliente.Location = new System.Drawing.Point(16, 24);
            this.btn_area_cliente.Name = "btn_area_cliente";
            this.btn_area_cliente.Padding = new System.Windows.Forms.Padding(15);
            this.btn_area_cliente.Size = new System.Drawing.Size(70, 70);
            this.btn_area_cliente.TabIndex = 0;
            this.btn_area_cliente.UseVisualStyleBackColor = false;
            this.btn_area_cliente.Click += new System.EventHandler(this.btn_area_cliente_Click);
            // 
            // frm_menu
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(226, 288);
            this.Controls.Add(this.groupBox1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.Name = "frm_menu";
            this.Padding = new System.Windows.Forms.Padding(5);
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "MENU";
            this.groupBox1.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Button btn_area_cliente;
        private System.Windows.Forms.Button btn_area_fornecedores;
        private System.Windows.Forms.Button btn_area_produtos;
        private System.Windows.Forms.Button btn_area_funcionarios;
        private System.Windows.Forms.Button btn_cancelar;
        private System.Windows.Forms.Button btn_usuario;
    }
}