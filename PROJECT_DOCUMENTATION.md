# APVR INFOTECH - Laravel 12 Project Documentation

## 📋 Project Overview

**APVR Infotech** is a modern web application built with **Laravel 12** that serves as a company website and admin management system for Apvr Infotech, an IT services company located in Surat, Gujarat, India.

**Key Information:**
- **Framework:** Laravel 12
- **Build Tool:** Vite
- **Styling:** Tailwind CSS 4.0 (CDN in frontend, integration in backend)
- **Frontend Framework:** Bootstrap 5 (legacy pages)
- **Database:** SQLite (default, can be configured for MySQL)
- **Node Version:** ES Module (type: "module")

---

## 🏗️ Project Structure

### Directory Layout

```
apvrinfotech/
├── app/                           # Application code
│   ├── Http/Controllers/
│   │   ├── Backend/               # Admin panel controllers
│   │   │   ├── AuthController.php
│   │   │   ├── ContactController.php
│   │   │   ├── PortfolioController.php
│   │   │   └── CareerController.php
│   │   └── Frontend/              # Public-facing controllers
│   │       ├── HomeController.php
│   │       ├── ContactController.php
│   │       ├── PortfolioController.php
│   │       └── CareerController.php
│   ├── Mail/
│   │   └── ContactThankYouEmail.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── Contact.php
│   │   ├── Portfolio.php
│   │   └── Career.php
│   └── Providers/
│       └── AppServiceProvider.php
├── bootstrap/                     # Bootstrap scripts
├── config/                        # Configuration files
├── database/
│   ├── migrations/                # Database migrations
│   ├── factories/
│   ├── seeders/
│   └── database.sqlite            # SQLite database
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/
│       ├── frontend/              # Customer-facing pages
│       ├── backend/               # Admin panel pages
│       ├── emails/
│       ├── welcome.blade.php
│       └── layouts/
├── routes/
│   ├── web.php                    # Main routing file
│   └── console.php
├── storage/
│   ├── app/                       # File storage
│   │   ├── private/
│   │   └── public/                # Public file uploads (contacts, etc.)
│   ├── framework/
│   ├── logs/
│   └── sessions/
├── public/
│   ├── index.php                  # Application entry point
│   ├── apvr/                      # Static HTML/assets
│   │   ├── *.html                 # Legacy HTML pages
│   │   ├── assets/
│   │   │   ├── css/
│   │   │   ├── js/
│   │   │   ├── images/
│   │   │   ├── fonts/
│   │   │   └── doc/               # Documents (brochures, etc.)
│   │   └── robots.txt
├── tests/
│   ├── Feature/
│   └── Unit/
├── .env.example                   # Environment template
├── composer.json                  # PHP dependencies
├── package.json                   # Node dependencies
├── vite.config.js                 # Vite configuration
├── phpunit.xml                    # PHPUnit configuration
├── artisan                        # Laravel CLI
└── README.md                      # Project readme
```

---

## 🗄️ Database Schema

### Tables Overview

#### **users** table
- `id` (PRIMARY KEY)
- `name` (string)
- `email` (string, unique)
- `email_verified_at` (timestamp, nullable)
- `password` (hashed)
- `remember_token` (nullable)
- `timestamps` (created_at, updated_at)

#### **contacts** table
- `id` (PRIMARY KEY)
- `name` (string)
- `email` (string)
- `service` (string) - Selected service type
- `others_service` (string, nullable) - Custom service if "others" selected
- `message` (text)
- `file_path` (string, nullable) - Path to uploaded attachment (PDF, documents)
- `timestamps` (created_at, updated_at)

**Migration Timeline:**
1. Initial creation: `2025_10_29_113758_create_contacts_table.php`
2. Added `others_service`: `2025_11_02_173533_add_others_service_to_contacts_table.php`
3. Added `file_path`: `2025_11_02_101005_add_file_path_to_contacts_table.php`

#### **portfolios** table
- `id` (PRIMARY KEY)
- `title` (string)
- `category` (string) - "website", "mobile-app", "graphic-design"
- `image` (string) - Image URL/path
- `short_details` (string, nullable) - Brief description
- `description` (text, nullable) - Full description
- `project_url` (string, nullable) - Link to project
- `is_active` (boolean) - Show/hide on frontend
- `sort_order` (integer, default: 0) - Display order
- `timestamps` (created_at, updated_at)

**Migrations:**
1. Initial: `2025_10_29_133449_create_portfolios_table.php`
2. Added short_details: `2025_10_30_000001_add_short_details_to_portfolios_table.php`

#### **careers** table
- `id` (PRIMARY KEY)
- `job_title` (string)
- `vacancy` (integer, default: 1) - Number of positions
- `experience` (string, nullable) - e.g., "0-2 Years", "1-3 Years"
- `location` (string, nullable)
- `job_type` (string, default: "Full time") - "Full time", "Part time", "Contract"
- `is_active` (boolean, default: true) - Enable/disable on frontend
- `sort_order` (integer, default: 0) - Display order
- `timestamps` (created_at, updated_at)

**Migration:** `2025_11_13_101920_create_careers_table.php`

---

## 🔐 Authentication System

### Login Details
- **Route:** `/admin/login`
- **Method:** `Backend\AuthController@login`
- **Credentials:** Email + Password authentication
- **Session Storage:** Database sessions
- **Remember Me:** Available on login

### Protected Routes
All admin routes require authentication and are prefixed with `/admin/`:
```
/admin/
  /login - Login page
  /contacts - Contact form submissions (view, delete)
  /contacts/{id} - View contact details
  /contacts/{id}/file/view - View attachment inline
  /contacts/{id}/file/download - Download attachment
  /portfolios - CRUD operations
  /careers - CRUD operations
```

### Authentication Flow
1. User navigates to `/admin/login`
2. Submits credentials via `AuthController@login`
3. Session created and stored in `storage/framework/sessions`
4. Middleware `auth` protects all admin routes
5. Logout clears session and invalidates token

---

## 🛣️ Routing Structure

### Frontend Routes (Public)

```php
// Homepage
GET / → HomeController@__invoke → frontend.home

// Portfolio/Projects
GET /portfolio → FrontendPortfolioController@__invoke → frontend.portfolio

// Contact Form
GET /contact → FrontendContactController@show → frontend.contact
POST /contact/submit → FrontendContactController@store

// Career Page
GET /career → FrontendCareerController@index → frontend.career

// Static Pages (view redirects)
GET /about → frontend.about
GET /appointment → frontend.appointment
GET /ui → frontend.ui
GET /graphics → frontend.graphics
GET /web → frontend.web
GET /app → frontend.app
GET /digital → frontend.digital

// Documents
GET /brochure → Redirect to PDF file

// Login Redirect
GET /login → Redirect to /admin/login
```

### Backend Routes (Protected)

```php
// Authentication
GET /admin/login → AuthController@showLoginForm
POST /admin/login → AuthController@login
POST /admin/logout → AuthController@logout

// Admin Dashboard (authenticated)
GET /admin → Redirect to /admin/contacts

// Contacts Management
GET /admin/contacts → BackendContactController@index
GET /admin/contacts/{id} → BackendContactController@show
DELETE /admin/contacts/{id} → BackendContactController@destroy
GET /admin/contacts/{id}/file/view → BackendContactController@viewFile
GET /admin/contacts/{id}/file/download → BackendContactController@downloadFile

// Portfolio Management
GET /admin/portfolios → BackendPortfolioController@index
GET /admin/portfolios/create → BackendPortfolioController@create
POST /admin/portfolios → BackendPortfolioController@store
GET /admin/portfolios/{id} → BackendPortfolioController@show
GET /admin/portfolios/{id}/edit → BackendPortfolioController@edit
PUT /admin/portfolios/{id} → BackendPortfolioController@update
DELETE /admin/portfolios/{id} → BackendPortfolioController@destroy

// Career Management
GET /admin/careers → BackendCareerController@index
GET /admin/careers/create → BackendCareerController@create
POST /admin/careers → BackendCareerController@store
GET /admin/careers/{id} → BackendCareerController@show
GET /admin/careers/{id}/edit → BackendCareerController@edit
PUT /admin/careers/{id} → BackendCareerController@update
DELETE /admin/careers/{id} → BackendCareerController@destroy
```

---

## 📱 Controllers

### Frontend Controllers

#### **HomeController**
```php
- __invoke() → Returns frontend.home view
```

#### **ContactController**
```php
- show() → Display contact form (frontend.contact)
- store(Request $request) → Save contact submission
  ├─ Validates: name, email, service, comment, attachment (optional)
  ├─ Stores: Contact data + optional file upload
  ├─ Emails: Thank you email to user
  └─ Handles: Both traditional form and AJAX requests
```

**File Upload Details:**
- Max size: 10MB
- Location: `storage/app/public/contacts/`
- Naming: `{timestamp}_{uniqid}_{original_filename}`
- All file types allowed

#### **PortfolioController**
```php
- __invoke() → Fetch and display active portfolios
  ├─ Returns: All active projects + categorized (website, mobile-app, graphic-design)
  └─ Sorting: By sort_order, then by latest ID
```

#### **CareerController**
```php
- index() → Fetch and display active job openings
  ├─ Returns: Active careers only (is_active = true)
  └─ Sorting: By sort_order, then by latest ID
```

### Backend Controllers

#### **AuthController**
```php
- showLoginForm() → Display login page (redirects if already logged in)
- login(Request $request) → Authenticate user
  ├─ Validates: email, password
  ├─ Features: Remember me functionality
  └─ Redirects: To contacts dashboard on success
- logout(Request $request) → Destroy session and redirect
```

#### **ContactController (Backend)**
```php
- index(Request $request) → List all contacts with pagination (10 per page)
  ├─ Features: Search by name, email, service, others_service, message
  └─ Returns: backend.contacts.index
  
- show(Contact $contact) → Display single contact details
  └─ Returns: backend.contacts.show
  
- viewFile(Contact $contact) → Display file inline (PDF, images, docs)
  ├─ Checks: File existence
  └─ Returns: File with MIME type headers
  
- downloadFile(Contact $contact) → Download file as attachment
  
- destroy(Contact $contact) → Delete contact and associated file
  ├─ Deletes: Database record + storage file
  └─ Redirects: Back with success message
```

#### **PortfolioController (Backend)**
```php
- index() → List all portfolios with pagination (12 per page)
  └─ Sorting: By sort_order, then latest ID
  
- create() → Show create form → backend.portfolios.create
  
- store(Request $request) → Save new portfolio
  ├─ Validates: title, category, image, description, etc.
  └─ Defaults: is_active=false, sort_order=0
  
- show(string $id) → Display portfolio details
  
- edit(string $id) → Show edit form
  
- update(Request $request, string $id) → Update portfolio
  
- destroy(string $id) → Delete portfolio
```

**Portfolio Validation:**
- `title`: required, string, max 255
- `category`: required, string, max 50
- `image`: required, string (URL or path), max 255
- `short_details`: nullable, string, max 255
- `description`: nullable, string
- `project_url`: nullable, valid URL
- `is_active`: nullable, boolean
- `sort_order`: nullable, integer ≥ 0

#### **CareerController (Backend)**
```php
- index() → List careers with pagination (12 per page)
  
- create() → Show create form → backend.careers.create
  
- store(Request $request) → Save new career
  
- show(string $id) → Display career details
  
- edit(string $id) → Show edit form
  
- update(Request $request, string $id) → Update career
  
- destroy(string $id) → Delete career
```

**Career Validation:**
- `job_title`: required, string, max 255
- `vacancy`: required, integer ≥ 1
- `experience`: nullable, string, max 255
- `location`: nullable, string, max 255
- `job_type`: required, string, max 255
- `is_active`: nullable, boolean
- `sort_order`: nullable, integer ≥ 0

---

## 📧 Email System

### Contact Thank You Email

**Class:** `App\Mail\ContactThankYouEmail`

**Configuration:**
- Subject: "Thank You for Contacting Apvr Infotech"
- Template: `emails.contact-thank-you`
- Recipient: User's email address
- Triggered: After successful contact form submission

**Email Template Contents:**
- Greeting with user's name
- Confirmation of service inquiry
- Expected response time (24-48 hours)
- Company contact details:
  - Phone: +91 99099971138
  - Email: info@apvrinfotech.com
- Office location in Surat
- Professional closing from team

**Email Error Handling:**
- If mail fails, error is logged but form submission succeeds
- User still receives success message despite email failure

---

## 🎨 Frontend Views

### Layout Structure
- **Master Layout:** `frontend.layouts.master`
- **Base Href:** Uses `public/apvr/` directory for assets
- **Libraries:** Bootstrap 5, Font Awesome 6, jQuery, Slick carousel, Fancybox

### Pages

#### **home.blade.php** (940 lines)
- Hero section with animated shapes
- Technology stack showcase slider
- Services overview
- Team/staff section
- Testimonials/reviews
- CTA buttons

#### **portfolio.blade.php** (160 lines)
- Breadcrumb navigation
- Tab-based filtering:
  - All projects
  - Websites
  - Mobile apps
  - Graphic designs
- Project cards with:
  - Images
  - Titles
  - Categories
  - External links (if available)
- Responsive grid layout (col-lg-3, col-sm-6)

#### **contact.blade.php** (416 lines)
- Breadcrumb navigation
- Contact information cards:
  - Location
  - Phone number
  - Email address
- Contact form with:
  - Name (required)
  - Email (required, RFC validated)
  - Service dropdown (required)
  - "Others" field (conditional required)
  - Message/comment (required)
  - File attachment (optional, max 10MB)
- Form validation with error display
- AJAX support for form submission
- Success/error messages

#### **career.blade.php** (105 lines)
- Breadcrumb navigation
- Career value propositions:
  - Excel
  - Develop
  - Advance
- Job openings list:
  - Job title
  - Vacancies
  - Experience requirement
  - Location
  - Job type
- Filtered to show only `is_active = true` careers

#### **Other Pages**
- **about.blade.php** - Company information
- **app.blade.php** - App development services
- **appointment.blade.php** - Booking/scheduling
- **digital.blade.php** - Digital marketing services
- **graphics.blade.php** - Graphic design services
- **ui.blade.php** - UI/UX design services
- **web.blade.php** - Web development services

---

## 🔧 Backend Views

### Master Layout
- **File:** `backend.layouts.master`
- **Design:** Tailwind CSS + Font Awesome
- **Sidebar:** Dark navy (#13114C) with navigation
- **Navigation Items:**
  - Contacts
  - Portfolio
  - Career
  - View Site (external link)
  - Logout

### Admin Pages

#### **Contacts Management**

**Index View:** `backend.contacts.index`
- Responsive table with columns:
  - ID
  - Name (linked)
  - Email (mailto link)
  - Service (badge)
  - Others Service (truncated with tooltip)
  - Message (truncated with tooltip)
  - Attachment (view/download icons)
  - Date
  - Actions (view, delete)
- Search functionality (name, email, service, message)
- Pagination (10 per page)
- Mass delete with confirmation

**Show View:** `backend.contacts.show`
- Contact details display
- File preview/download if attachment exists
- Related actions

#### **Portfolio Management**

**Index View:** `backend.portfolios.index`
- Table columns:
  - ID
  - Title
  - Short Details
  - Image thumbnail
  - Active status (green/gray badge)
  - Actions (edit, view, delete)
- "Add Portfolio" button
- Pagination (12 per page)
- No items message when empty

**Create View:** `backend.portfolios.create`
- Form fields:
  - Title
  - Category (dropdown)
  - Image (URL/path input)
  - Short Details
  - Description (WYSIWYG)
  - Project URL
  - Active checkbox
  - Sort Order
- Submit button
- Cancel/back link

**Edit View:** `backend.portfolios.edit`
- Pre-populated form with existing data
- Same fields as create
- Update submit button

**Show View:** `backend.portfolios.show`
- Display portfolio details
- Image preview
- Edit/delete buttons

#### **Career Management**

**Index View:** `backend.careers.index`
- Table columns:
  - ID
  - Job Title
  - Vacancy count
  - Experience
  - Location
  - Job Type
  - Active status
  - Actions
- "Add Career" button
- Pagination (12 per page)

**Create/Edit Views:** `backend.careers.create` & `backend.careers.edit`
- Form fields:
  - Job Title
  - Vacancy (number)
  - Experience
  - Location
  - Job Type
  - Active checkbox
  - Sort Order

**Show View:** `backend.careers.show`
- Career details display

---

## 📦 Dependencies

### PHP Dependencies (Composer)
```json
{
  "php": "^8.2",
  "laravel/framework": "^12.0",
  "laravel/tinker": "^2.10.1"
}
```

### Development Dependencies
```json
{
  "fakerphp/faker": "^1.23",
  "laravel/pail": "^1.2.2",
  "laravel/pint": "^1.24",
  "laravel/sail": "^1.41",
  "mockery/mockery": "^1.6",
  "nunomaduro/collision": "^8.6",
  "phpunit/phpunit": "^11.5.3"
}
```

### Node Dependencies
```json
{
  "@tailwindcss/vite": "^4.0.0",
  "axios": "^1.11.0",
  "concurrently": "^9.0.1",
  "laravel-vite-plugin": "^2.0.0",
  "tailwindcss": "^4.0.0",
  "vite": "^7.0.7"
}
```

---

## 🚀 Installation & Setup

### Environment Setup
1. Copy `.env.example` to `.env`
2. Generate app key: `php artisan key:generate`
3. Configure database in `.env` (defaults to SQLite)

### Database Setup
```bash
php artisan migrate        # Run all migrations
php artisan migrate:fresh  # Reset and re-run (development)
```

### Build & Run

#### Development
```bash
npm install           # Install Node dependencies
npm run dev          # Start Vite dev server
php artisan serve    # Start Laravel dev server
php artisan queue:listen   # Start queue worker (optional)
php artisan pail     # Watch logs (optional)
```

#### Production
```bash
npm run build        # Build assets with Vite
php artisan cache:clear
php artisan config:clear
```

#### Automated Setup Script
```bash
composer run setup
```

This runs:
1. `composer install`
2. Copies `.env.example` to `.env`
3. Generates app key
4. Runs migrations
5. Installs npm dependencies
6. Builds assets

---

## ⚙️ Configuration Files

### **config/app.php**
- Application name: Configurable via `APP_NAME` env variable
- Environment: Controlled by `APP_ENV`
- Debug mode: Controlled by `APP_DEBUG`
- URL: Set via `APP_URL`
- Timezone: PHP default timezone

### **config/database.php**
- Default connection: SQLite
- MySQL available for production
- Supports: SQLite, MySQL, PostgreSQL, SQL Server

### **config/mail.php**
- SMTP configuration
- From address
- Queue configuration

### **vite.config.js**
```javascript
- Input files: resources/css/app.css, resources/js/app.js
- Plugins: laravel-vite-plugin, @tailwindcss/vite
- Hot reload enabled
```

---

## 📁 File Storage System

### Storage Structure
```
storage/
├── app/
│   ├── private/          # Private file storage
│   └── public/
│       └── contacts/     # Contact form attachments
├── framework/
│   ├── cache/data/
│   ├── sessions/         # Session files
│   ├── testing/
│   └── views/            # Compiled views
└── logs/                 # Application logs
```

### Symbolic Link
- Public storage linked to: `public/storage/`
- Contact files accessible at: `public/storage/contacts/{filename}`

---

## 🔍 Key Features

### 1. Contact Management System
- ✅ Multi-field contact form
- ✅ File upload (PDFs, documents)
- ✅ Thank you email notifications
- ✅ Admin dashboard with search and pagination
- ✅ File viewing and download capability
- ✅ Data persistence with timestamps

### 2. Portfolio Showcase
- ✅ Dynamic portfolio items
- ✅ Category filtering (website, app, graphics)
- ✅ Image thumbnails
- ✅ Project URLs linking
- ✅ Sortable and hideable items
- ✅ CRUD backend management

### 3. Career Portal
- ✅ Job listings
- ✅ Position details (title, vacancies, experience, location, type)
- ✅ Enable/disable specific listings
- ✅ Sortable job order
- ✅ Full admin CRUD

### 4. Authentication & Authorization
- ✅ Admin login system
- ✅ Session-based authentication
- ✅ Password hashing
- ✅ Remember me functionality
- ✅ Protected admin routes

### 5. Email Notifications
- ✅ Automated thank you emails
- ✅ User name personalization
- ✅ Service confirmation
- ✅ Company contact information in email
- ✅ Error logging on email failure

---

## 🧪 Testing

### Test Structure
```
tests/
├── Feature/           # Feature tests
│   └── ExampleTest.php
└── Unit/              # Unit tests
    └── ExampleTest.php
```

### Running Tests
```bash
composer run test     # Run PHPUnit tests
php artisan test      # Alternative command
```

---

## 📊 Company Information

**Organization:** Apvr Infotech
**Location:** J-162, Japan Market, Near Delhi Gate, Surat, Gujarat - 395003
**Phone:** +91 99099971138
**Email:** info@apvrinfotech.com

**Social Media:**
- Facebook: https://www.facebook.com/Apvrinfotech
- Instagram: https://www.instagram.com/apvr_infotech
- LinkedIn: https://www.linkedin.com/company/apvrinfotech
- Twitter/X: https://x.com/Apvr_infotech

**Services Offered:**
- Web Development
- Mobile App Development
- Digital Marketing
- Graphic Design
- UI/UX Design
- Cloud Services
- DevOps
- QA Testing
- AI/ML Solutions
- E-commerce Solutions

---

## 🔐 Security Considerations

### Implemented Security
1. ✅ CSRF protection (via @csrf in forms)
2. ✅ Password hashing (Laravel authentication)
3. ✅ Session-based authentication
4. ✅ Route middleware protection
5. ✅ File validation on upload
6. ✅ File path security (stored in storage, not public)
7. ✅ Input validation on all forms
8. ✅ SQL injection prevention (Eloquent ORM)

### Recommendations
1. Use HTTPS in production
2. Set secure .env variables
3. Implement rate limiting on forms
4. Regular security updates
5. Monitor logs for suspicious activity
6. Use strong admin passwords
7. Enable password reset functionality
8. Consider 2FA for admin panel

---

## 📝 Notes

### Development Status
- Project is in active development
- Multiple migrations indicate iterative feature addition
- Frontend uses Bootstrap 5 (legacy)
- Backend uses Tailwind CSS
- Gradual modernization from static HTML to dynamic content

### Performance Considerations
- Pagination implemented for large datasets
- Efficient Eloquent queries with sorting
- Lazy loading for portfolio images
- Session-based authentication
- No API endpoints (traditional form-based)

### Future Enhancement Opportunities
1. RESTful API endpoints
2. Admin password reset
3. Two-factor authentication
4. Role-based access control
5. Email templates customization
6. Advanced analytics
7. Automated backups
8. Caching layer (Redis)
9. Search optimization
10. SEO enhancements

---

## 📚 Directory Quick Reference

| Directory | Purpose |
|-----------|---------|
| `app/` | Application logic (controllers, models, services) |
| `config/` | Configuration files |
| `database/` | Migrations, seeders, factories |
| `public/` | Publicly accessible files (index.php, assets) |
| `resources/` | Views, CSS, JavaScript |
| `routes/` | Route definitions |
| `storage/` | Uploads, cache, logs, sessions |
| `tests/` | Test files |
| `bootstrap/` | Framework bootstrapping |

---

## 🎯 Key Takeaways

1. **Architecture:** MVC pattern with separated frontend (public) and backend (admin) routes
2. **Database:** SQLite by default, 4 main tables (users, contacts, portfolios, careers)
3. **Frontend:** Bootstrap 5 with custom styling
4. **Backend Admin:** Tailwind CSS with modern design
5. **Authentication:** Simple email/password login with sessions
6. **File Handling:** Secure file uploads for contact attachments
7. **Email:** Automated notifications for contact form submissions
8. **Modularity:** Controllers handle specific business logic
9. **Scalability:** Easy to extend with new models and controllers
10. **Development:** Using Vite for modern build pipeline

---

**Document Generated:** December 13, 2025
**Laravel Version:** 12.0
**Last Updated:** Based on current project state

