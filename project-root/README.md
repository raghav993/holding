Project Structure
=================
This is the project structure for our PHP application.

### Directories

* `config`: Database and constant configurations
* `public`: Publicly accessible files (index.php, assets, css, js, images)
* `includes`: Reusable PHP files (header.php, footer.php, navbar.php)
* `pages`: Page-specific PHP files (about.php, holdings.php, philosophy.php, news.php, careers.php, contact.php)
* `admin`: Administrative panel
	+ `login.php`: Admin login page
	+ `dashboard.php`: Admin dashboard
	+ `manage_pages.php`: Page management
	+ `manage_news.php`: News management
	+ `manage_holdings.php`: Holdings management
	+ `manage_users.php`: User management
* `uploads`: User-uploaded files (images, videos)



dummy data

INSERT INTO admins (name, email, password, role, status, last_login) VALUES
('Rajesh Sharma', 'rajesh.sharma@company.in', 'hashed_password_1', 'super_admin', 1, '2026-02-10 10:15:00'),
('Priya Verma', 'priya.verma@company.in', 'hashed_password_2', 'editor', 1, '2026-02-09 14:20:00'),
('Amit Patel', 'amit.patel@company.in', 'hashed_password_3', 'editor', 1, '2026-02-08 09:45:00'),
('Sneha Iyer', 'sneha.iyer@company.in', 'hashed_password_4', 'editor', 1, NULL),
('Vikram Singh', 'vikram.singh@company.in', 'hashed_password_5', 'editor', 0, NULL),
('Neha Kapoor', 'neha.kapoor@company.in', 'hashed_password_6', 'editor', 1, '2026-02-07 16:30:00'),
('Arjun Reddy', 'arjun.reddy@company.in', 'hashed_password_7', 'editor', 1, NULL),
('Pooja Mehta', 'pooja.mehta@company.in', 'hashed_password_8', 'editor', 1, '2026-02-05 11:00:00'),
('Karan Malhotra', 'karan.malhotra@company.in', 'hashed_password_9', 'editor', 1, NULL),
('Anjali Desai', 'anjali.desai@company.in', 'hashed_password_10', 'editor', 1, '2026-02-01 13:15:00');

INSERT INTO metrics (title, value, display_order, status) VALUES
('Assets Under Management', '₹5,200 Cr+', 1, 1),
('Portfolio Companies', '28+', 2, 1),
('Years of Experience', '15+', 3, 1),
('Employees', '450+', 4, 1),
('Global Partners', '12+', 5, 1),
('Successful Exits', '18+', 6, 1),
('Annual Revenue', '₹1,100 Cr+', 7, 1),
('Offices in India', '6', 8, 1),
('CSR Projects', '22+', 9, 1),
('Awards Won', '14+', 10, 1);

INSERT INTO holdings (company_name, sector, short_description, logo, website_url, status) VALUES
('Shakti Renewable Energy Pvt Ltd', 'Energy', 'Solar and wind power solutions across India.', 'shakti.png', 'https://shaktirenewable.in', 1),
('Bharat Agro Industries Ltd', 'Agriculture', 'Agri-tech and organic farming solutions.', 'bharatagro.png', 'https://bharatagro.in', 1),
('Triveni Healthcare Pvt Ltd', 'Healthcare', 'Multi-specialty hospital chain.', 'triveni.png', 'https://trivenihealth.in', 1),
('Ganga Infrastructure Ltd', 'Infrastructure', 'Highway and metro infrastructure projects.', 'ganga.png', 'https://gangainfra.in', 1),
('Vedant Finserv Pvt Ltd', 'Financial Services', 'NBFC providing MSME loans.', 'vedant.png', 'https://vedantfinserv.in', 1),
('Suryodaya Textiles Ltd', 'Textile', 'Export quality textile manufacturing.', 'suryodaya.png', 'https://suryodayatextiles.in', 1),
('Indus Edutech Pvt Ltd', 'Education', 'Digital learning platforms for schools.', 'indus.png', 'https://indusedutech.in', 1),
('Pratham Logistics Ltd', 'Logistics', 'Pan-India logistics and warehousing.', 'pratham.png', 'https://prathamlogistics.in', 1),
('Narmada Foods Pvt Ltd', 'FMCG', 'Packaged food and dairy products.', 'narmada.png', 'https://narmadafoods.in', 1),
('Udaan Mobility Solutions', 'Automobile', 'Electric vehicle manufacturing startup.', 'udaan.png', 'https://udaanmobility.in', 1);

INSERT INTO news (title, category, short_description, full_content, publish_date, featured, image, status) VALUES
('Shakti Renewable Secures ₹500 Cr Funding', 'News', 'Major investment announced.', 'Full article content here...', '2026-01-15', 1, 'news1.jpg', 1),
('Quarterly Growth Report Q3 FY26', 'Report', 'Strong financial performance recorded.', 'Detailed quarterly report...', '2026-01-10', 0, 'news2.jpg', 1),
('Chairman’s Annual Letter to Investors', 'Letter', 'Vision for upcoming year.', 'Full chairman letter content...', '2026-01-05', 1, 'news3.jpg', 1),
('Healthcare Expansion in Tier-2 Cities', 'Insight', 'New hospitals launched.', 'Insight content...', '2026-01-01', 0, 'news4.jpg', 1),
('Indus Edutech Launches AI Platform', 'News', 'AI-powered learning solution.', 'Full article...', '2025-12-20', 0, 'news5.jpg', 1),
('Infrastructure Projects Update 2025', 'Report', 'Project milestone update.', 'Full report...', '2025-12-15', 0, 'news6.jpg', 1),
('CEO Interview with Business Today', 'Insight', 'Leadership insights shared.', 'Interview content...', '2025-12-10', 0, 'news7.jpg', 1),
('CSR Initiative in Rural Maharashtra', 'News', 'Community upliftment program.', 'CSR details...', '2025-12-05', 0, 'news8.jpg', 1),
('EV Manufacturing Plant Announcement', 'News', 'New EV facility in गुजरात.', 'Plant details...', '2025-12-01', 1, 'news9.jpg', 1),
('FY25 Annual Performance Summary', 'Report', 'Year-end highlights.', 'Annual summary...', '2025-11-30', 0, 'news10.jpg', 1);

INSERT INTO pages (page_key, page_title, content, meta_title, meta_description) VALUES
('about-us', 'About Us', 'About company content...', 'About Us - Company', 'Learn about our company.'),
('vision-mission', 'Vision & Mission', 'Vision and mission details...', 'Vision & Mission', 'Our core values and mission.'),
('leadership', 'Leadership Team', 'Leadership profiles...', 'Leadership Team', 'Meet our leadership.'),
('csr', 'CSR Activities', 'CSR initiatives...', 'CSR - Company', 'Corporate social responsibility initiatives.'),
('investors', 'Investor Relations', 'Investor information...', 'Investor Relations', 'Investor resources and reports.'),
('privacy-policy', 'Privacy Policy', 'Privacy policy content...', 'Privacy Policy', 'Read our privacy policy.'),
('terms-conditions', 'Terms & Conditions', 'Terms content...', 'Terms & Conditions', 'Website terms and conditions.'),
('careers', 'Careers', 'Join our team...', 'Careers - Company', 'Explore job opportunities.'),
('contact-us', 'Contact Us', 'Contact information...', 'Contact Us', 'Get in touch with us.'),
('media', 'Media & Press', 'Press releases...', 'Media & Press', 'Latest media updates.');

INSERT INTO careers (job_title, department, location, description, employment_type, status) VALUES
('Senior Investment Analyst', 'Finance', 'Mumbai', 'Analyze investment opportunities.', 'Full-time', 1),
('HR Manager', 'Human Resources', 'Delhi', 'Manage HR operations.', 'Full-time', 1),
('Marketing Executive', 'Marketing', 'Bengaluru', 'Digital marketing campaigns.', 'Full-time', 1),
('Site Engineer', 'Infrastructure', 'Pune', 'Manage project sites.', 'Full-time', 1),
('Business Development Manager', 'Sales', 'Ahmedabad', 'Client acquisition role.', 'Full-time', 1),
('Content Writer', 'Corporate Communications', 'Chennai', 'Write corporate content.', 'Contract', 1),
('Data Analyst Intern', 'IT', 'Hyderabad', 'Assist data analytics team.', 'Internship', 1),
('Operations Executive', 'Logistics', 'Kolkata', 'Oversee daily operations.', 'Full-time', 1),
('Legal Advisor', 'Legal', 'Mumbai', 'Handle corporate legal matters.', 'Part-time', 1),
('Accounts Executive', 'Finance', 'Jaipur', 'Manage accounting records.', 'Full-time', 1);

INSERT INTO contacts (name, email, category, message, ip_address) VALUES
('Rohit Agarwal', 'rohit@gmail.com', 'Investor Inquiries', 'Interested in investment details.', '103.21.45.10'),
('Meena Joshi', 'meena@yahoo.in', 'Business Proposals', 'Proposal for joint venture.', '49.36.112.55'),
('Suresh Nair', 'suresh@outlook.com', 'Media Relations', 'Request for interview.', '122.160.88.12'),
('Kavita Shah', 'kavita@gmail.com', 'General', 'General information request.', '157.48.99.100'),
('Imran Khan', 'imran@yahoo.in', 'Investor Inquiries', 'Shareholding pattern details.', '45.120.11.5'),
('Deepika Rao', 'deepika@gmail.com', 'Media Relations', 'Press coverage request.', '103.55.22.90'),
('Manoj Tiwari', 'manoj@gmail.com', 'Business Proposals', 'New project collaboration.', '182.70.45.66'),
('Ritika Sen', 'ritika@gmail.com', 'General', 'Feedback on website.', '150.129.88.45'),
('Alok Mishra', 'alok@yahoo.in', 'Investor Inquiries', 'Annual report copy request.', '27.60.11.200'),
('Farhan Ali', 'farhan@gmail.com', 'General', 'Looking for office address.', '106.51.77.88');

INSERT INTO subscribers (email, status) VALUES
('anita@gmail.com', 1),
('rahul@yahoo.in', 1),
('vikas@gmail.com', 1),
('pooja@yahoo.in', 1),
('manish@gmail.com', 1),
('sonal@yahoo.in', 1),
('tarun@gmail.com', 1),
('neetu@yahoo.in', 1),
('ajay@gmail.com', 1),
('bhavna@yahoo.in', 1);
