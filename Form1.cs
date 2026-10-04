namespace WinFormsApp3
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
         
            double dbms = double.Parse(textdbms.Text);    

            double dsa = double.Parse(textdsa.Text);

            double csharp = double.Parse(textcsharp.Text);

            double python = double.Parse(textpython.Text);

            double total = dbms + dsa + csharp + python;

            double average = total / 4;

            texttotal.Text = total.ToString();

            textaverage.Text = average.ToString("0.00");
        }

        private void button2_Click(object sender, EventArgs e)
        {
            textdbms.Clear();

            textdsa.Clear();

            textcsharp.Clear();

            textpython.Clear();

            texttotal.Clear();

            textaverage.Clear();

            textdbms.Focus();

        }
        

        // Double-click the EXIT button in design view to generate this
        private void btnExit_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
    }


