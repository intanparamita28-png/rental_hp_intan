// Modal Functions

// Open Modal
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden'; // Prevent scrolling
  }
}

// Close Modal
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto'; // Enable scrolling
    
    // Reset form if exists
    const form = modal.querySelector('form');
    if (form) {
      form.reset();
    }
  }
}

// Open Edit Modal with data
function openEditModal(name) {
  openModal('modalEdit');
  
  // Set the value to edit input
  const editInput = document.getElementById('editGenreName') || document.getElementById('editCategoryName');
  if (editInput) {
    editInput.value = name;
  }
}

// Confirm Delete
function confirmDelete() {
  // Here you would typically make an API call to delete the item
  alert('Item berhasil dihapus!');
  closeModal('modalDelete');
  
  // Optionally reload or update the table
  // location.reload();
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modals = document.getElementsByClassName('modal');
  for (let i = 0; i < modals.length; i++) {
    if (event.target === modals[i]) {
      modals[i].style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  }
}

// Handle form submissions
document.addEventListener('DOMContentLoaded', function() {
  // Add Form
  const formAdd = document.getElementById('formAdd');
  if (formAdd) {
    formAdd.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const input = this.querySelector('input[type="text"]');
      const value = input.value.trim();
      
      if (value) {
        // Here you would typically make an API call to add the item
        alert('Data berhasil ditambahkan: ' + value);
        closeModal('modalAdd');
        
        // Optionally reload or update the table
        // location.reload();
      }
    });
  }
  
  // Edit Form
  const formEdit = document.getElementById('formEdit');
  if (formEdit) {
    formEdit.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const input = this.querySelector('input[type="text"]');
      const value = input.value.trim();
      
      if (value) {
        // Here you would typically make an API call to update the item
        alert('Data berhasil diupdate: ' + value);
        closeModal('modalEdit');
        
        // Optionally reload or update the table
        // location.reload();
      }
    });
  }
});

// Add onclick handlers to all edit and delete buttons
document.addEventListener('DOMContentLoaded', function() {
  // Edit buttons
  const editButtons = document.querySelectorAll('.btn-edit');
  editButtons.forEach(button => {
    if (!button.hasAttribute('onclick')) {
      button.addEventListener('click', function() {
        const row = this.closest('tr');
        const name = row.cells[1].textContent;
        openEditModal(name);
      });
    }
  });
  
  // Delete buttons
  const deleteButtons = document.querySelectorAll('.btn-delete');
  deleteButtons.forEach(button => {
    if (!button.hasAttribute('onclick')) {
      button.addEventListener('click', function() {
        openModal('modalDelete');
      });
    }
  });
});
