function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('active');
}


// Modal open/close logic
const modal = document.getElementById("addStudentModal");
const openBtn = document.getElementById("openModalBtn");
const closeBtn = document.getElementById("closeModalBtn");

openBtn.onclick = () => {
  modal.style.display = "flex";
};

closeBtn.onclick = () => {
  modal.style.display = "none";
};

// যদি ইউজার modal এর বাইরে ক্লিক করে, তাও modal বন্ধ হবে
window.onclick = (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};
