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
