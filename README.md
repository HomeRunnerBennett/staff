# **Staff Management System - Laravel CRUD Application**  

🚀 **A professional, fully-featured Staff Management System** built with Laravel, Bootstrap 5, and JavaScript.  

## **Features**  
✔️ **Complete CRUD Operations** (Create, Read, Update, Delete)  
✔️ **Beautiful Bootstrap 5 UI** (Fully responsive design)  
✔️ **Advanced Form Validation** (Server-side error handling)  
✔️ **Status Badges** (Color-coded Active/Inactive indicators)  
✔️ **Search & Filter** (Find staff by name, email, or status)  
✔️ **Delete Confirmation** (JavaScript popup protection)  
✔️ **Pagination** (Efficient data browsing)  

---

## **Technologies Used**  
| **Tech**       | **Purpose** |
|---------------|------------|
| **Laravel 10** | PHP backend framework |
| **Bootstrap 5** | Modern responsive styling |
| **Eloquent ORM** | Database interactions |
| **Blade Templates** | Dynamic HTML rendering |
| **JavaScript** | Interactive elements |

---

## **Installation Guide**  

### **1. Clone the Repository**  
```bash
git clone https://github.com/yourusername/staff-management-system.git
cd staff-management-system
```

### **2. Install Dependencies**  
```bash
composer install
npm install && npm run dev
```

### **3. Configure Environment**  
Copy the example env file and generate an app key:
```bash
cp .env.example .env
php artisan key:generate
```

### **4. Set Up Database**  
1. Create a MySQL database  
2. Update `.env` file with your database credentials:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=staff_management
DB_USERNAME=root
DB_PASSWORD=
```

### **5. Run Migrations**  
```bash
php artisan migrate
```

### **6. Start Development Server**  
```bash
php artisan serve
```
Visit: http://localhost:8000/staff

---

## **System Structure**  

### **Database Schema**  
```php
Schema::create('staff', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('phone')->nullable();
    $table->enum('gender', ['Male', 'Female', 'Other']);
    $table->string('position');
    $table->string('department');
    $table->decimal('salary', 10, 2);
    $table->enum('status', ['Active', 'Inactive'])->default('Active');
    $table->date('hire_date');
    $table->text('address')->nullable();
    $table->timestamps();
});
```

### **Key Components**  
1. **Staff Model** (`app/Models/Staff.php`)  
   - Handles data validation and business logic
   - Includes scopes for active/inactive staff

2. **Staff Controller** (`app/Http/Controllers/StaffController.php`)  
   - Complete CRUD operations
   - Search and filter functionality
   - Pagination support

3. **Views** (`resources/views/staff/`)  
   - Clean, responsive Bootstrap layouts
   - Form validation feedback
   - Status badges and action buttons

4. **Routes** (`routes/web.php`)  
   - RESTful resource routing
   - Named routes for easy maintenance

---

## **Usage Examples**  

### **Adding New Staff**  
1. Click "Add New Staff"  
2. Fill in the form (all fields required except phone/address)  
3. Submit to save

<img width="1220" height="829" alt="image" src="https://github.com/user-attachments/assets/eed270ac-b583-40ad-8c55-342ea37d8e7f" />


### **Editing Staff**  
1. Click "Edit" on any staff record  
2. Modify the details  
3. Submit to update

<img width="1220" height="829" alt="image" src="https://github.com/user-attachments/assets/6f92386a-d3da-4327-a2c8-1bcf2c8a0434" />


### **Searching Staff**  
1. Use the search box to find by name/email/phone  
2. Filter by Active/Inactive status  
<img width="1440" height="395" alt="image" src="https://github.com/user-attachments/assets/1cd8bf2f-4793-4c7e-bac7-82e6994cb726" />


### **Deleting Staff**  
1. Click "Delete"  
2. Confirm the action in the popup

<img width="1440" height="601" alt="image" src="https://github.com/user-attachments/assets/d2048b8d-5276-4e5d-859a-0efaf54e98fc" />


---

## **Customization**  

### **Changing Departments**  
Edit the array in `StaffController.php`:
```php
$departments = ['HR', 'Finance', 'IT', 'Marketing', 'Operations', 'Sales'];
```

### **Modifying Styling**  
Edit the CSS in `resources/views/layouts/master.blade.php`:
```css
/* Example: Change status badge colors */
.status-active {
    background-color: #d4edda; /* Light green */
    color: #155724; /* Dark green */
}
```

### **Adding New Fields**  
1. Add to migration  
2. Update `$fillable` in Staff model  
3. Add form fields in create/edit views  

---

## **Troubleshooting**  

❌ **Migration errors**  
- Ensure database credentials are correct in `.env`  
- Run `php artisan migrate:fresh` to reset  

❌ **Missing styles**  
- Run `npm run dev` to compile assets  

❌ **Form validation issues**  
- Check validation rules in `StaffController`  

---

## **License**  
Bennett Mikwala Licence - Free for educational use  only

---

## **Credits**  
Developed with ❤️ using:  
- [Laravel](https://laravel.com)  
- [Bootstrap 5](https://getbootstrap.com)  

🚀 **Happy coding!** Let me know if you need any enhancements.
