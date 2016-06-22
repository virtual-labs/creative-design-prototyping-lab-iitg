using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace ISTOVE
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
         
        Point start = new Point(0, 0);// to get the intial position
        
        private void Form1_Load(object sender, EventArgs e)
        {   
            //to disable max and min button
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            //had taken texbox for see the co-ordinates once postions are set textbox can be removed from form
            textBox1.Hide();
            textBox2.Hide();
            label9.Text = "";//to display which control has be selected initially will display nothing
            flame.BringToFront();//bringtofront function is used to display one control on another, to display in grid
            auto.BringToFront();
            manual.BringToFront();
            boilwater.BringToFront();
            heatmilk.BringToFront();
            tea.BringToFront();
            cookrice.BringToFront();
            heatfood.BringToFront();
            button1.BringToFront();
            button2.BringToFront();
            button3.BringToFront();
            richTextBox1.BringToFront();
            
            //to move the controls at runtime a new mouse event handler is created
            richTextBox1.MouseUp -= new MouseEventHandler(richTextBox1_MouseUp);
            richTextBox1.MouseUp -= new MouseEventHandler(richTextBox1_MouseMove);
            richTextBox1.MouseDown += new MouseEventHandler(richTextBox1_MouseDown);
            
            button1.MouseUp -= new MouseEventHandler(button1_MouseUp);
            button1.MouseUp -= new MouseEventHandler(button1_MouseMove);
            button1.MouseDown += new MouseEventHandler(button1_MouseDown);
            
            flame.MouseUp -= new MouseEventHandler(flame_MouseUp);
            flame.MouseUp -= new MouseEventHandler(flame_MouseMove);
            flame.MouseDown += new MouseEventHandler(flame_MouseDown);

            auto.MouseUp -= new MouseEventHandler(auto_MouseUp);
            auto.MouseUp -= new MouseEventHandler(auto_MouseMove);
            auto.MouseDown += new MouseEventHandler(auto_MouseDown);

            manual.MouseUp -= new MouseEventHandler(manual_MouseUp);
            manual.MouseUp -= new MouseEventHandler(manual_MouseMove);
            manual.MouseDown += new MouseEventHandler(manual_MouseDown);
            
            boilwater.MouseUp -= new MouseEventHandler(boilwater_MouseUp);
            boilwater.MouseUp-= new MouseEventHandler(boilwater_MouseMove);
            boilwater.MouseDown+=new MouseEventHandler(boilwater_MouseDown);
            
            heatmilk.MouseUp -= new MouseEventHandler(heatmilk_MouseUp);
            heatmilk.MouseUp-= new MouseEventHandler(heatmilk_MouseMove);
            heatmilk.MouseDown+=new MouseEventHandler(heatmilk_MouseDown);
            
            tea.MouseUp -= new MouseEventHandler(tea_MouseUp);
            tea.MouseUp-= new MouseEventHandler(tea_MouseMove);
            tea.MouseDown+=new MouseEventHandler(tea_MouseDown);
            
            cookrice.MouseUp -= new MouseEventHandler(cookrice_MouseUp);
            cookrice.MouseUp-= new MouseEventHandler(cookrice_MouseMove);
            cookrice.MouseDown+=new MouseEventHandler(cookrice_MouseDown);

            heatfood.MouseUp -= new MouseEventHandler(heatfood_MouseUp);
            heatfood.MouseUp -= new MouseEventHandler(heatfood_MouseMove);
            heatfood.MouseDown += new MouseEventHandler(heatfood_MouseDown);  
                      
            button2.MouseUp -= new MouseEventHandler(button2_MouseUp);
            button2.MouseUp -= new MouseEventHandler(button2_MouseMove);
            button2.MouseDown += new MouseEventHandler(button2_MouseDown);

            button3.MouseUp -= new MouseEventHandler(button3_MouseUp);
            button3.MouseUp -= new MouseEventHandler(button3_MouseMove);
            button3.MouseDown += new MouseEventHandler(button3_MouseDown);
        }
       
        //Controls to move actually from the current position
        //for display unit
        public void richTextBox1_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                richTextBox1.MouseUp += new MouseEventHandler(richTextBox1_MouseUp);
                richTextBox1.MouseMove += new MouseEventHandler(richTextBox1_MouseMove);
            }
        }

        private void richTextBox1_MouseUp(object sender, MouseEventArgs e)
        {
            richTextBox1.MouseMove -= new MouseEventHandler(richTextBox1_MouseMove);
            richTextBox1.MouseUp -= new MouseEventHandler(richTextBox1_MouseUp);
        }

        private void richTextBox1_MouseMove(object sender, MouseEventArgs e)
        {
            richTextBox1.Location = new Point(richTextBox1.Location.X - (start.X - e.X), richTextBox1.Location.Y - (start.Y - e.Y));
        }

        //for flame
        public void flame_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                flame.MouseUp += new MouseEventHandler(flame_MouseUp);
                flame.MouseMove += new MouseEventHandler(flame_MouseMove);
            }
        }

        private void flame_MouseUp(object sender, MouseEventArgs e)
        {
            flame.MouseMove -= new MouseEventHandler(flame_MouseMove);
            flame.MouseUp -= new MouseEventHandler(flame_MouseUp);
        }

        private void flame_MouseMove(object sender, MouseEventArgs e)
        {
            flame.Location = new Point(flame.Location.X - (start.X - e.X), flame.Location.Y - (start.Y - e.Y));
        }

        //for auto
        public void auto_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                auto.MouseUp += new MouseEventHandler(auto_MouseUp);
                auto.MouseMove += new MouseEventHandler(auto_MouseMove);
            }
        }

        private void auto_MouseUp(object sender, MouseEventArgs e)
        {
            auto.MouseMove -= new MouseEventHandler(auto_MouseMove);
            auto.MouseUp -= new MouseEventHandler(auto_MouseUp);
        }

        private void auto_MouseMove(object sender, MouseEventArgs e)
        {
            auto.Location = new Point(auto.Location.X - (start.X - e.X), auto.Location.Y - (start.Y - e.Y));
        }

        //for manual

        public void manual_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                manual.MouseUp += new MouseEventHandler(manual_MouseUp);
                manual.MouseMove += new MouseEventHandler(manual_MouseMove);
            }
        }

        private void manual_MouseUp(object sender, MouseEventArgs e)
        {
            manual.MouseMove -= new MouseEventHandler(manual_MouseMove);
            manual.MouseUp -= new MouseEventHandler(manual_MouseUp);
        }

        private void manual_MouseMove(object sender, MouseEventArgs e)
        {
            manual.Location = new Point(manual.Location.X - (start.X - e.X), manual.Location.Y - (start.Y - e.Y));
        }


        //for boil water
        public void boilwater_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                boilwater.MouseUp += new MouseEventHandler(boilwater_MouseUp);
                boilwater.MouseMove += new MouseEventHandler(boilwater_MouseMove);
            }
        }

        private void boilwater_MouseUp(object sender, MouseEventArgs e)
        {
            boilwater.MouseMove -= new MouseEventHandler(boilwater_MouseMove);
            boilwater.MouseUp -= new MouseEventHandler(boilwater_MouseUp);
        }

        private void boilwater_MouseMove(object sender, MouseEventArgs e)
        {
            boilwater.Location = new Point(boilwater.Location.X - (start.X - e.X), boilwater.Location.Y - (start.Y - e.Y));
        }

        //for heat milk
        public void heatmilk_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                heatmilk.MouseUp += new MouseEventHandler(heatmilk_MouseUp);
                heatmilk.MouseMove += new MouseEventHandler(heatmilk_MouseMove);
            }
        }

        private void heatmilk_MouseUp(object sender, MouseEventArgs e)
        {
            heatmilk.MouseMove -= new MouseEventHandler(heatmilk_MouseMove);
            heatmilk.MouseUp -= new MouseEventHandler(heatmilk_MouseUp);
        }

        private void heatmilk_MouseMove(object sender, MouseEventArgs e)
        {
            heatmilk.Location = new Point(heatmilk.Location.X - (start.X - e.X), heatmilk.Location.Y - (start.Y - e.Y));
        }

        //for tea
        public void tea_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                tea.MouseUp += new MouseEventHandler(tea_MouseUp);
                tea.MouseMove += new MouseEventHandler(tea_MouseMove);
            }
        }

        private void tea_MouseUp(object sender, MouseEventArgs e)
        {
            tea.MouseMove -= new MouseEventHandler(tea_MouseMove);
            tea.MouseUp -= new MouseEventHandler(tea_MouseUp);
        }

        private void tea_MouseMove(object sender, MouseEventArgs e)
        {
            tea.Location = new Point(tea.Location.X - (start.X - e.X), tea.Location.Y - (start.Y - e.Y));
        }

        //for cookrice
        public void cookrice_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                cookrice.MouseUp += new MouseEventHandler(cookrice_MouseUp);
                cookrice.MouseMove += new MouseEventHandler(cookrice_MouseMove);
            }
        }

        private void cookrice_MouseUp(object sender, MouseEventArgs e)
        {
            cookrice.MouseMove -= new MouseEventHandler(cookrice_MouseMove);
            cookrice.MouseUp -= new MouseEventHandler(cookrice_MouseUp);
        }

        private void cookrice_MouseMove(object sender, MouseEventArgs e)
        {
            cookrice.Location = new Point(cookrice.Location.X - (start.X - e.X), cookrice.Location.Y - (start.Y - e.Y));
        }

        //for heatfood
        public void heatfood_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                heatfood.MouseUp += new MouseEventHandler(heatfood_MouseUp);
                heatfood.MouseMove += new MouseEventHandler(heatfood_MouseMove);
            }
        }

        private void heatfood_MouseUp(object sender, MouseEventArgs e)
        {
            heatfood.MouseMove -= new MouseEventHandler(heatfood_MouseMove);
            heatfood.MouseUp -= new MouseEventHandler(heatfood_MouseUp);
        }

        private void heatfood_MouseMove(object sender, MouseEventArgs e)
        {
            heatfood.Location = new Point(heatfood.Location.X - (start.X - e.X), heatfood.Location.Y - (start.Y - e.Y));
        }
 
        //for button1
        public void button1_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                button1.MouseUp += new MouseEventHandler(button1_MouseUp);
                button1.MouseMove += new MouseEventHandler(button1_MouseMove);
            }
        }

        private void button1_MouseUp(object sender, MouseEventArgs e)
        {
            button1.MouseMove -= new MouseEventHandler(button1_MouseMove);
            button1.MouseUp -= new MouseEventHandler(button1_MouseUp);
        }

        private void button1_MouseMove(object sender, MouseEventArgs e)
        {
            button1.Location = new Point(button1.Location.X - (start.X - e.X), button1.Location.Y - (start.Y - e.Y));
        }
        
        //for button2
        public void button2_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                button2.MouseUp += new MouseEventHandler(button2_MouseUp);
                button2.MouseMove += new MouseEventHandler(button2_MouseMove);
            }
        }

        private void button2_MouseUp(object sender, MouseEventArgs e)
        {
            button2.MouseMove -= new MouseEventHandler(button2_MouseMove);
            button2.MouseUp -= new MouseEventHandler(button2_MouseUp);
        }

        private void button2_MouseMove(object sender, MouseEventArgs e)
        {
            button2.Location = new Point(button2.Location.X - (start.X - e.X), button2.Location.Y - (start.Y - e.Y));
        }

        //for button3
        public void button3_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                start = e.Location;
                button3.MouseUp += new MouseEventHandler(button3_MouseUp);
                button3.MouseMove += new MouseEventHandler(button3_MouseMove);
            }
        }

        private void button3_MouseUp(object sender, MouseEventArgs e)
        {
            button3.MouseMove -= new MouseEventHandler(button3_MouseMove);
            button3.MouseUp -= new MouseEventHandler(button3_MouseUp);
        }

        private void button3_MouseMove(object sender, MouseEventArgs e)
        {
            button3.Location = new Point(button3.Location.X - (start.X - e.X), button3.Location.Y - (start.Y - e.Y));
        }

        //to display grids on the panels, have made used of picturebox on pressing button grids will appear small grid,large grid,no grid based on what user press
        private void button4_Click(object sender, EventArgs e)
        {
            pictureBox1.Show();
            pictureBox2.Hide();
            pictureBox3.Hide();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            pictureBox3.Hide();
            pictureBox2.Show();
            pictureBox1.Hide();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            pictureBox3.Show();
            pictureBox2.Hide();
            pictureBox1.Hide();
        }

        //Resets the postions of all control to intial postion so that user can start from first
        private void button7_Click(object sender, EventArgs e)
        {
            flame.SetBounds(764, 125, 45, 100);
            auto.SetBounds(800,250,66,34);
            manual.SetBounds(800,300,66,34);
            button1.SetBounds(870, 250, 66, 34);
            boilwater.SetBounds(870, 300, 66, 34);
            heatmilk.SetBounds(940, 300, 66, 34);
            tea.SetBounds(940, 250, 66, 34);
            cookrice.SetBounds(800, 350, 66, 34);
            heatfood.SetBounds(870, 350, 66, 34);
            richTextBox1.SetBounds(825, 125, 193, 108);
            button2.SetBounds(940, 350, 66, 34);
            button3.SetBounds(870, 400, 66, 34);
        }

        //to evaulate wheather controls are properly placed(freeze button)
        private void button8_Click(object sender, EventArgs e)
        {
            Form2 a = new Form2();

            a.Show();
            //taking current location of controls and storing it in variable
            int b1x = button1.Location.X;
            int b1y = button1.Location.Y;
            int b2x = button2.Location.X;
            int b2y = button2.Location.Y;
            int b3x = button3.Location.X;
            int b3y = button3.Location.Y;
            int bwx = boilwater.Location.X;
            int bwy = boilwater.Location.Y;
            int hmx = heatmilk.Location.X;
            int hmy = heatmilk.Location.Y;
            int crx = cookrice.Location.X;
            int cry = cookrice.Location.Y;
            int hfx = heatfood.Location.X;
            int hfy = heatfood.Location.Y;
            int teax = tea.Location.X;
            int teay = tea.Location.Y;
            int flamex = flame.Location.X;
            int flamey = flame.Location.Y;
            int disx = richTextBox1.Location.X;
            int disy = richTextBox1.Location.Y;
            int autox = auto.Location.X;
            int autoy = auto.Location.Y;
            int manx = manual.Location.X;
            int many = manual.Location.Y;

            //for each controls its checked weather it is placed in proper position, have made used of co-ordinates
            //here only the control area is specified once exact position is know it can be set accordingly 
            //for manual button to place within grid
            if ((manx > 10 && manx < 737) && (many > 410 && many < 710)) //out of control boundary
            {
                // Reason for why the control is placed is explained to user
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                //control was not placed in proper position so control is sent bact to its original position
                MessageBox.Show("Try to place Manual Button in proper position","Induction Stove");
                manual.SetBounds(800, 300, 66, 34);
            }

            //for automatic button to place within grid
            if ((autox > 10 && autox < 737) && (autoy > 410 && autoy < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to Automatic Button in proper position","Induction Stove");
                auto.SetBounds(800, 250, 66, 34);
            }

            //for display to place within grid
            if ((flamex > 10 && flamex < 737) && (flamey > 410 && flamey < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place Display unit in proper position","Induction Stove");
                richTextBox1.SetBounds(825, 125, 193, 108);
            }

            //for flame to place within grid
            if ((flamex > 10 && flamex < 737) && (flamey > 410 && flamey < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place flame control in proper position","Induction Stove");
                flame.SetBounds(764, 125, 45, 100);
            }


            //for tea to place within grid
            if ((crx > 10 && crx < 737) && (cry > 410 && cry < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place TEA BUTTON in proper position","Induction Stove");
                tea.SetBounds(940, 250, 66, 34);
            }

            //for heat food to place within grid
            if ((crx > 10 && crx < 737) && (cry > 410 && cry < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place HEAT FOOD BUTTON in proper position","Induction Stove");
                heatfood.SetBounds(870, 350, 66, 34);
            }
            
            //for cook rice to place within grid
            if ((crx > 10 && crx < 737) && (cry > 410 && cry < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place COOK RICE BUTTON in proper position","Induction Stove");
                cookrice.SetBounds(800, 350, 66, 34);
            }
            
            //for heat milk button to place within grid
            if ((hmx > 10 && hmx < 737) && (hmy > 410 && hmy < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place HEAT MILK BUTTON in proper position","Induction Stove");
                heatmilk.SetBounds(940, 300, 66, 34);
            }

            //for boil water to place within grid
            if ((bwx > 10 && bwx < 737) && (bwy > 410 && bwy < 710)) //out of control boundary
            {
                //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place BOIL WATER BUTTON in proper position","Induction Stove");
                boilwater.SetBounds(870, 300, 66, 34);
            }
             
            //for button1(power button)
            
            if ((b1x > 10 && b1x < 737) && (b1y > 410 && b1y < 710)) //out of control boundary
            {
            //    MessageBox.Show("GOOD PLACEMENT");    
            }
            else
            {
                MessageBox.Show("Try to place POWER BUTTON in proper position","Induction Stove");
                button1.SetBounds(870, 250, 66, 34);
            }
                     
            //for button2
            if ((b2x > 10 && b2x < 737) && (b2y > 410 && b2y < 710))
            {
                //MessageBox.Show("GOOD PLACEMENT");
            }
            else
            {
                MessageBox.Show("Try to place START BUTTON in proper position","Induction Stove");
                button2.SetBounds(940, 350, 66, 34);
            }
            //for button3
                   
            if ((b3x > 10 && b3x < 737) && (b3y > 410 && b3y < 710))
            {
                //MessageBox.Show("GOOD PLACEMENT");
            }
            else
            {

                MessageBox.Show("Try to place RESET BUTTON in proper position","Induction Stove");
                button3.SetBounds(870, 400, 66, 34);
            }            
            }


            //to find current cursor position
            protected override void OnMouseMove(MouseEventArgs mouseEv)
            {
                int a = mouseEv.X;
                int b = mouseEv.Y;

                textBox1.Text = mouseEv.X.ToString();
                textBox2.Text = mouseEv.Y.ToString();
            }
        
        // To display in label which label has been selected
        
        private void button1_MouseDown_1(object sender, MouseEventArgs e)
        {  
            label9.Text = "Power Button selected place in proper postion";
        }
        private void button1_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void flame_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Flame knob selected place in proper position";
        }
        private void flame_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void richTextBox1_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Display unit selected place in proper position";
        }
        private void richTextBox1_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void auto_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Auto mode button selected place in proper position";
        }
        private void auto_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void tea_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Tea button selected place in proper position";
        }
        private void tea_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void manual_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Manual mode button selected place in proper position";
        }

        private void manual_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void boilwater_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Boil water button selected place in proper position";
        }

        private void boilwater_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void heatmilk_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Heat Milk button selected place in proper position";
        }

        private void heatmilk_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void cookrice_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Cook Rice button selected place in proper position";
        }

        private void cookrice_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void heatfood_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Heat Food button selected place in proper position";
        }

        private void heatfood_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void button2_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Start/Pause button selected place in proper position";
        }

        private void button2_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

        private void button3_MouseDown_1(object sender, MouseEventArgs e)
        {
            label9.Text = "Reset button selected place in proper position";
        }

        private void button3_MouseUp_1(object sender, MouseEventArgs e)
        {
            label9.Text = "";
        }

       
       }                  
    }      
 

        
    
