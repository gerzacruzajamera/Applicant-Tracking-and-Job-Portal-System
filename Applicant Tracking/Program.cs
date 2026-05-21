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

            // START WITH LOGIN FORM
            Application.Run(new StarterForm());
        }
    }

    public class StarterForm : Form
    {
        public StarterForm()
        {
            Text = "CareerLink Seeker - Starter";
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

            Panel card = new Panel();
            card.BackColor = Color.White;
            card.Padding = new Padding(28);
            root.Controls.Add(card, 0, 1);

            Label body = new Label();
            body.Dock = DockStyle.Fill;
            body.Font = new Font("Segoe UI", 12, FontStyle.Regular);
            body.Text = "This is the incomplete seeker desktop starter.\n\n" +
                        "Follow COMMIT_GUIDE_STEP_BY_STEP.md in the project root.\n" +
                        "Later commits add login, registration, job browsing, applications, profile update, API sync, and the LuckyJob-inspired theme.";
            body.ForeColor = Color.FromArgb(21, 23, 28);
            card.Controls.Add(body);

            Button btnLogin = new Button();
            btnLogin.Text = "Login";
            btnLogin.Width = 120;
            btnLogin.Height = 40;
            btnLogin.Location = new Point(50, 150);

            btnLogin.Click += (s, e) =>
            {
                new LoginForm().Show();
                this.Hide();
            };

            card.Controls.Add(btnLogin);
        }
    }
}
