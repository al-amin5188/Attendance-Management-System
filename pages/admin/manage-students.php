<div class="main-content">
  <div class="page-header">
    <h2>Manage Students</h2>
    <div class="actions">
        <input type="text" placeholder="🔍 Search student...">
        <a href="admin-dashboard.php?page=add_student" class="btn register-btn">+ Add New Student</a>
    </div>
  </div>
  
  <!-- Student Table -->
  <div class="table-container">
    <table class="table table-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Semester</th>
            <th>Credit</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>CSE101</td>
            <td>Database Management</td>
            <td>7th</td>
            <td>3</td>
            <td>
            <button class="btn edit-btn btn-sm">Edit</button>
            <button class="btn delete-btn btn-sm">Delete</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>CSE102</td>
            <td>Operating System</td>
            <td>7th</td>
            <td>3</td>
            <td>
            <button class="btn edit-btn btn-sm">Edit</button>
            <button class="btn delete-btn btn-sm">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
  </div>
</div>
