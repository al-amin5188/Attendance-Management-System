<div class="main-content">
  <h2>Add Student</h2>
  <form action="process_add_student.php" method="POST" class="student-form">
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" name="name" id="name" placeholder="Enter full name" required>
    </div>

    <div class="form-group">
      <label for="roll">Roll Number</label>
      <input type="text" name="roll" id="roll" placeholder="Enter roll number" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Enter email" required>
    </div>

    <div class="form-group">
      <label for="department">Department</label>
      <select name="department" id="department" required>
        <option value="">-- Select Department --</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
        <option value="LLB">LLB</option>
      </select>
    </div>

    <div class="form-group">
      <label for="semester">Semester</label>
      <select name="semester" id="semester" required>
        <option value="">-- Select Semester --</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
        <option value="5th">5th</option>
        <option value="6th">6th</option>
        <option value="7th">7th</option>
        <option value="8th">8th</option>
      </select>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone" placeholder="Enter phone number" required>
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea name="address" id="address" rows="3" placeholder="Enter address"></textarea>
    </div>

    <button type="submit" class="btn">Add Student</button>
  </form>
</div>
