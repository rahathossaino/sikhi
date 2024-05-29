
</p>
<p align="center">
School Management and Accounting Software
</p>



We like to challenge the quality of what we build to make it better. To do so, we try to make the product intuitive, beautiful, and user friendly. Innovation and hard work help to fulfill these requirements. I believe in order to innovate we need to think differently. A few months ago I discovered there was no open source free school management software that met my quality standards. I happen to know a bit of programming so I decided to make one. I also believe that working with more people can push the standard higher than working alone. So I decided to make it open source and free.

## Featured on Laravel News !!
![Screenshot_2019-04-07 Laravel News](https://user-images.githubusercontent.com/9896315/55683832-1b3c8c80-5966-11e9-8dfb-ab30a79a98ed.png)
See the news [here](https://laravel-news.com/unified-transform-open-source-school-management-platform)

## Framework used

- [Laravel 11.X](https://laravel.com/docs/11.x)
- [Bootstrap 5.X](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

##  Requirements
- PHP (latest stable version)
- Composer
- Laravel (latest stable version)
- MySql


## Steps to follow:
Please carefully follow the steps to setup the school.
<li>Clone the Repository</li> 
        <p>git clone https://github.com/rahathossaino/sikhi.git</p>
        <p>cd todo-list</p>
    <li>Install Dependencies</li>
        <p>composer install</p>
    <li>Run Migrations</li>
        <p>php artisan migrate</p>
    <li>Serve the Application</li>
    <p>php artisan serve</p>
    <p>Visit http://127.0.0.1:8000 in your browser to see the application.</p


 Visit **http://localhost:8080**. Admin login credentials:

    - Email: admin@ut.com
    - Password: admin



**Role: Admin**

**School Dashboard**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-27-05 Unifiedtransform.png"></h1>

### 1. Create a School Session:
After logging in for the first time, you will see following message at the top nav bar.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-31-38 Unifiedtransform.png"></h1>

To create a new session, go to **Academic Settings** page.

#### Academic Settings page:
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-32-44 Unifiedtransform.png"></h1>

Successful creation of session using following form will display success message:

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-33-45 Unifiedtransform.png"></h1>

### 2. Create a Semester
Now create a semester. A semester duration usually is 3 - 6 months.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-34-45 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-36-39 Unifiedtransform.png"></h1>

### 3. Create classes
Now create classes. Give common names such as: **Class 1** or **Class 11 (Science)**.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-35-16 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-37-26 Unifiedtransform.png"></h1>

### 4. Create sections
Now create sections for each classes. Give section's name (e.g.: Section A, Section B), room number and assign them to respective class.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-36-27 Unifiedtransform.png"></h1>

### 5. Create Courses
Now create courses and assign them to respective semester and class.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-38-13 Unifiedtransform.png"></h1>

### 6. Set attendance type
Attendance can be maintained in two ways: 1. By section, 2. By course. Stick to one type for a semester. Default: **By section**.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-37-09 Unifiedtransform.png"></h1>

### 7. Add teachers
Now add teachers.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-11-34 Unifiedtransform.png"></h1>

### 8. Assign teacher
Now assign teachers to semester, class, section, and course.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-12-05 Unifiedtransform.png"></h1>

### 9. Add students
Now add students and assign them to class, and section.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-43-37 Unifiedtransform.png"></h1>

### 10. View added teachers and students
Now browse to **View Teachers** and **View Students** pages.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-55-18 Unifiedtransform.png"></h1>

### 11. View student and teacher profile
Now browse to **Profile** from student and teacher list.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 18-29-30 Unifiedtransform.png"></h1>

### 12. View and Edit Classes and Sections
Now go to **Classes**. Here you can view all classes and their respective sections, syllabi, and courses. Classes, sections, and courses can be edited from here.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-30-30 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-30-55 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-31-14 Unifiedtransform.png"></h1>

### 13. Create Grading Systems
Now create grading system for each class and a semester.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-32-31 Unifiedtransform.png"></h1>

### 14. View Grading Systems
Now browse to created Grading Systems.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-33-23 Unifiedtransform.png"></h1>

### 15. Add and view Grading System Rules
Now add rules to the grading system and browse them.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-33-36 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 12-16-04 Unifiedtransform.png"></h1>

### 16. Add Notices
Admin can add notice. Right now, notices can be written using a rich text editor.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-03-55 Unifiedtransform.png"></h1>

### 17. Create Events
Events can be created inside a calendar. Click and drag on a date or time period to prompt the input box. An already created event can be **deleted** by clicking on the event.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot from 2021-12-07 01-24-28.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-26-18 Unifiedtransform.png"></h1>

### 18. Create and view Routines
Routines can be created for each class and section.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-27-54 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 02-26-21 Unifiedtransform.png"></h1>

### 19. Add Syllabi
Syllabus for each class and course can be added. Admin can view them from **Classes** page. Syllabus can be downloaded.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 18-14-31 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-55-50 Unifiedtransform.png"></h1>

### 20. Browse by Sessions
You can browse previous sessions like a snapshot. This mode is **Read only**. Nobody should be able to change the previous sessions' data.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 02-28-23 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-37-02 Unifiedtransform.png"></h1>

### 21. Allow Teachers to submit Final Marks
Submitting final marks of a semester should be controlled. By enabling this feature, it is possible to open a Mark Submission Window for a short time period. **Default: Disallowed**.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 00-38-37 Unifiedtransform.png"></h1>

### 22. Promote students
Students can only be promoted to a new class and section when a new Session along with its classes and sections are created.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 02-27-32 Unifiedtransform.png"></h1>
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 02-28-00 Unifiedtransform.png"></h1>

**Role: Teacher**

**Teacher's dashboard**

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-41-04 Unifiedtransform.png"></h1>

### 1. View assigned courses
Teachers can manage their assigned courses from this page. From this page, teacher can do following:

- Take and view attendance
- View Syllabus
- Create and view Assignment
- Give Marks
- Message Students (Available in v1.X. Will be added in v2.X as well).

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-41-34 Unifiedtransform.png"></h1>

### 2. Take attendance
Teacher can take attendance for a section or a course (attendance type set by Admin).

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-51-20 Unifiedtransform.png"></h1>

### 3. View attendance
Teacher can view attendance.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-52-00 Unifiedtransform.png"></h1>

### 4. View syllabus
Teacher can view and download syllabus.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-56-20 Unifiedtransform.png"></h1>

### 5. Create assignment
Teacher can create assignment for an assigned course by uploading files.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-52-27 Unifiedtransform.png"></h1>

### 6. View assignments
Teacher can view and download created assignments.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-54-12 Unifiedtransform.png"></h1>

### 7. Create Exams
Before giving marks, teacher needs to create exams and set their rules. Don't have to create all the exams at a time. (Admin can also create exams on behalf of teachers).

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 20-10-30 Unifiedtransform.png"></h1>

### 8. View created exams
Teacher can view their created exams.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-43-58 Unifiedtransform.png"></h1>

### 9. Add, edit and view exam rules
Teacher can add, edit, and view exam rules.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-44-24 Unifiedtransform.png"></h1>

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-45-21 Unifiedtransform.png"></h1>

### 10. Give marks
Teacher can give marks after creating exams. Clicking on the exam names will lead to associated exam rules.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 11-47-50 Unifiedtransform.png"></h1>

### 11. Submit Final Marks
When the Grade submission window is open, teacher can submit final marks. Calculated marks will be generated based on all exams' marks. Final marks should be in **between** the marks set in the grade rules.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 11-48-01 Unifiedtransform.png"></h1>

If final marks is submitted, a message will be shown in place of submit button in **Give Marks** page.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 11-59-51 Unifiedtransform.png"></h1>

### 12. View Final Results
Teachers can view final results and calculated grades for a semester, class, section, and course based on their created grade rules.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 13-23-22 Unifiedtransform.png"></h1>

**Role: Student**

**Student dashboard**

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-57-15 Unifiedtransform.png"></h1>

### 1. View attendance
A student can view his/her attendance.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 11-39-45 Unifiedtransform.png"></h1>

### 2. View courses
A student can view his/her courses that are assigned in his/her class. From here, a student can do following:

- View Marks
- View Syllabus
- View Assignments

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-57-57 Unifiedtransform.png"></h1>

### 3. View Marks
A student can view marks, final results and grade for a course.

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 13-41-38 Unifiedtransform.png"></h1>

### 4. View and download Syllabus
Students can view and download syllabi of their courses just like their teachers.

### 5. View and download assignments
Students can view and download assignments of their courses just like their teachers.

### 6. View routine
Students can view their class and section routine just like their admin/teachers.


