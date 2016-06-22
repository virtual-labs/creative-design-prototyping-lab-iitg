using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace ISTOVE
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Form2.ActiveForm.Hide();
        }
    }

}


    