document.addEventListener('DOMContentLoaded', function() {
  var toggleLinks = document.querySelectorAll('.toggle-link');
  for (var i = 0; i < toggleLinks.length; i++) {
    toggleLinks[i].addEventListener('click', function() {
      var sublist = this.nextElementSibling;
      sublist.style.display = sublist.style.display === 'block' ? 'none' : 'block';
    });
  }
});


function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('active');
}

function toggleDropdown() {
  const dropdownContent = document.getElementById('dropdownContent');
  dropdownContent.classList.toggle('show');
}

window.onclick = function(event) {
  if (!event.target.matches('.profile-icon')) {
    const dropdowns = document.getElementsByClassName('dropdown-content');
    for (let i = 0; i < dropdowns.length; i++) {
      const openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};






// Get all delete buttons
var deleteButtons = document.querySelectorAll(".container3 .delete-button");

// Get the modal
var modal = document.getElementById("myModal");

// Get the confirm delete button
var confirmDeleteBtn = document.getElementById("confirmDelete");

// Get the cancel delete button
var cancelDeleteBtn = document.getElementById("cancelDelete");

// Function to handle delete button click
function handleDeleteButtonClick(event) {
    // Show the modal
    modal.style.display = "block";
    event.stopPropagation(); // Prevent the event from bubbling up to the container
}

// Function to close the modal
function closeModal() {
    modal.style.display = "none";
}

// Attach event listeners to all delete buttons within the container
deleteButtons.forEach(function(button) {
    button.addEventListener("click", handleDeleteButtonClick);
});

// When the user clicks on cancel delete button or outside the modal, close the modal
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        closeModal();
    }
});

// When the user clicks on confirm delete button
confirmDeleteBtn.addEventListener("click", function() {
    // Perform the delete operation
    alert(" deleted successfully.");
    closeModal();
});

// When the user clicks on cancel delete button
cancelDeleteBtn.addEventListener("click", closeModal);
