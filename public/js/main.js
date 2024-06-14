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

$(document).ready(function() {
    // Trigger modal when clicking on search icon
    $("#searchIcon").click(function() {
        $("#exampleModal").modal('show');
    });
});
$(document).ready(function() {
// Handle click event on close icon to close the modal
    $("#closeModalButton").click(function() {
        $("#exampleModal").modal('hide');
    });
});

const dark =document.getElementById("dark")
const body =document.getElementById("body")
dark.addEventListener("click",(eo)=>{
    body.classList.toggle("dark")
})




document.addEventListener("DOMContentLoaded", function() {

    // Initialize the modal
    const transferModal = new bootstrap.Modal(document.getElementById('transferModal'));

    // Get the transfer button and transfer text area
    const transferButton = document.getElementById('transferButton');
    const transferText = document.getElementById('transferText');

    // Add click event listener to the transfer button
    transferButton.addEventListener('click', function() {
        // Get the transfer details from the text area
        const details = transferText.value;


        // Close the modal
        transferModal.hide();
    });

    // Add event listener to the document for button clicks and close icon
    document.addEventListener('click', function(event) {
        // Check if the clicked element is the close icon
        if (event.target.closest('.modal-content') && event.target.classList.contains('btn-close')) {
            // Close the modal
            transferModal.hide();
        }

        // Check if the clicked element is the Cancel button
        if (event.target.closest('.modal-content') && event.target.classList.contains('btn-secondary')) {
            // Close the modal
            transferModal.hide();
        }

        // Check if the clicked element has the class 'test-button'
        if (event.target.classList.contains('test-button')) {
            // Show the modal
            transferModal.show();
        }
    });
});
