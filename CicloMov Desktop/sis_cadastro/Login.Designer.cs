﻿namespace CicloMov
{
    partial class frm_login
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
            this.lbs_usuario = new System.Windows.Forms.Label();
            this.text_login_usuario = new System.Windows.Forms.TextBox();
            this.lbs_senha = new System.Windows.Forms.Label();
            this.text_login_senha = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.btn_login = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lbs_usuario
            // 
            this.lbs_usuario.AutoSize = true;
            this.lbs_usuario.Location = new System.Drawing.Point(48, 80);
            this.lbs_usuario.Name = "lbs_usuario";
            this.lbs_usuario.Size = new System.Drawing.Size(32, 13);
            this.lbs_usuario.TabIndex = 0;
            this.lbs_usuario.Text = "Email";
            // 
            // text_login_usuario
            // 
            this.text_login_usuario.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.text_login_usuario.Location = new System.Drawing.Point(48, 96);
            this.text_login_usuario.Name = "text_login_usuario";
            this.text_login_usuario.Size = new System.Drawing.Size(160, 23);
            this.text_login_usuario.TabIndex = 1;
            // 
            // lbs_senha
            // 
            this.lbs_senha.AutoSize = true;
            this.lbs_senha.Location = new System.Drawing.Point(48, 128);
            this.lbs_senha.Name = "lbs_senha";
            this.lbs_senha.Size = new System.Drawing.Size(38, 13);
            this.lbs_senha.TabIndex = 2;
            this.lbs_senha.Text = "Senha";
            // 
            // text_login_senha
            // 
            this.text_login_senha.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.25F);
            this.text_login_senha.Location = new System.Drawing.Point(48, 144);
            this.text_login_senha.Name = "text_login_senha";
            this.text_login_senha.PasswordChar = '*';
            this.text_login_senha.Size = new System.Drawing.Size(160, 23);
            this.text_login_senha.TabIndex = 3;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Arial Narrow", 24F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(80, 24);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(98, 37);
            this.label1.TabIndex = 4;
            this.label1.Text = "LOGIN";
            // 
            // btn_login
            // 
            this.btn_login.Location = new System.Drawing.Point(88, 192);
            this.btn_login.Name = "btn_login";
            this.btn_login.Size = new System.Drawing.Size(75, 23);
            this.btn_login.TabIndex = 5;
            this.btn_login.Text = "Entrar";
            this.btn_login.UseVisualStyleBackColor = true;
            this.btn_login.Click += new System.EventHandler(this.btn_login_Click);
            // 
            // frm_login
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(257, 237);
            this.Controls.Add(this.btn_login);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.text_login_senha);
            this.Controls.Add(this.lbs_senha);
            this.Controls.Add(this.text_login_usuario);
            this.Controls.Add(this.lbs_usuario);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.Name = "frm_login";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "LOGIN";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lbs_usuario;
        private System.Windows.Forms.TextBox text_login_usuario;
        private System.Windows.Forms.Label lbs_senha;
        private System.Windows.Forms.TextBox text_login_senha;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btn_login;
    }
}