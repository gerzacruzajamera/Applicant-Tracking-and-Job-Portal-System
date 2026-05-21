using System;
using System.Drawing;
using System.Windows.Forms;

namespace ApplicantTrackingSystem
{
    static class Program
    {
        [STAThread]
        static void Main()
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);

            Application.Run(new StarterForm());
        }
    }

    public class StarterForm : Form
    {
        public StarterForm()
        {
            Text = "CareerLink Seeker";
            StartPosition = FormStartPosition.CenterScreen;
            MinimumSize = new Size(900, 560);
            BackColor = Color.FromArgb(217, 222, 231);

            TableLayoutPanel root = new TableLayoutPanel();
            root.Dock = DockStyle.Fill;
            root.Padding = new Padding(24);
            root.RowCount = 2;
            root.ColumnCount = 1;

            root.RowStyles.Add(new RowStyle(SizeType.Absolute, 92));
            root.RowStyles.Add(new RowStyle(SizeType.Percent, 100));

            Controls.Add(root);

            // HEADER
            Panel header = new Panel();
            header.BackColor = Color.FromArgb(11, 12, 16);
            header.Padding = new Padding(24);

            root.Controls.Add(header, 0, 0);

            Label title = new Label();
            title.Text = "CareerLink Applicant Starter";
            title.ForeColor = Color.White;
            title.Font = new Font("Segoe UI", 20, FontStyle.Bold);
            title.AutoSize = true;
            title.Location = new Point(24, 24);

            header.Controls.Add(title);

            // CARD
            Panel card = new Panel();
            card.BackColor = Color.White;
            card.Padding = new Padding(28);

            root.Controls.Add(card, 0, 1);

            Label body = new Label();
            body.Dock = DockStyle.Top;
            body.Height = 120;
            body.Font = new Font("Segoe UI", 12);
            body.ForeColor = Color.FromArgb(21, 23, 28);

            body.Text =
                "This is the starter version of the Applicant Tracking System.\n\n" +
                "Future updates will include login, registration,\n" +
                "job browsing, profile management, and API integration.";

            card.Controls.Add(body);

            // LOGIN BUTTON
            Button btnLogin = new Button();
            btnLogin.Text = "Login";
            btnLogin.Size = new Size(120, 40);
            btnLogin.Location = new Point(50, 150);

            btnLogin.Click += BtnLogin_Click;

            card.Controls.Add(btnLogin);
        }

        private void BtnLogin_Click(object sender, EventArgs e)
        {
            MessageBox.Show(
                "Login feature is not available yet.",
                "Information",
                MessageBoxButtons.OK,
                MessageBoxIcon.Information
            );
        }
    }
}