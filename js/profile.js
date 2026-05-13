// Profile Page Functions

// Photo Upload Handler
document.addEventListener('DOMContentLoaded', function() {
  const photoUpload = document.getElementById('photoUpload');
  const photoPreview = document.getElementById('photoPreview');
  const photoCircle = document.getElementById('photoCircle');
  const uploadLabel = document.querySelector('.upload-label');

  // Click on label to trigger file input
  uploadLabel.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default behavior
    photoUpload.click();
  });

  // Handle photo upload
  if (photoUpload) {
    photoUpload.addEventListener('change', function(e) {
      const file = e.target.files[0];
      
      if (file) {
        // Validate file type
        const validTypes = ['image/jpeg', 'image/png'];
        if (!validTypes.includes(file.type)) {
          alert('Hanya file JPG dan PNG yang diperbolehkan!');
          return;
        }

        // Validate file size (max 5MB)
        const maxSize = 5 * 1024 * 1024; // 5MB
        if (file.size > maxSize) {
          alert('Ukuran file maksimal 5MB!');
          return;
        }

        // Read and display the image
        const reader = new FileReader();
        reader.onload = function(event) {
          photoPreview.src = event.target.result;
          photoPreview.style.display = 'block';
          photoCircle.style.display = 'none';
        };
        reader.readAsDataURL(file);
      }
    });
  }

  // Handle form submission
  const profileForm = document.getElementById('profileForm');
  if (profileForm) {
    profileForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const formData = {
        namaLengkap: document.getElementById('namaLengkap').value,
        namaPanggilan: document.getElementById('namaPanggilan').value,
        password: document.getElementById('password').value,
        role: document.getElementById('role').value,
        deskripsi: document.getElementById('deskripsi').value,
        photo: photoUpload.files[0] ? photoUpload.files[0].name : null
      };

      // Validate required fields
      if (!formData.namaLengkap || !formData.namaPanggilan) {
        alert('Nama Lengkap dan Nama Panggilan harus diisi!');
        return;
      }

      // Here you would typically make an API call to update the profile
      console.log('Updating profile:', formData);
      
      // Show success modal
      showSuccessModal();
    });
  }
});

// Toggle Password Visibility
function togglePassword() {
  const passwordInput = document.getElementById('password');
  const toggleIcon = document.getElementById('toggleIcon');
  
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    toggleIcon.classList.remove('fa-eye');
    toggleIcon.classList.add('fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    toggleIcon.classList.remove('fa-eye-slash');
    toggleIcon.classList.add('fa-eye');
  }
}

// Cancel Edit
function cancelEdit() {
  if (confirm('Apakah Anda yakin ingin membatalkan perubahan?')) {
    // Reset form to original values
    document.getElementById('profileForm').reset();
    
    // Reset photo preview
    const photoPreview = document.getElementById('photoPreview');
    const photoCircle = document.getElementById('photoCircle');
    photoPreview.style.display = 'none';
    photoCircle.style.display = 'flex';
    
    // Optionally redirect to dashboard
    // window.location.href = 'dashboard.html';
  }
}

// Show Success Modal
function showSuccessModal() {
  const modal = document.getElementById('successModal');
  if (modal) {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }
}

// Close Success Modal
function closeSuccessModal() {
  const modal = document.getElementById('successModal');
  if (modal) {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  }
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modal = document.getElementById('successModal');
  if (event.target === modal) {
    closeSuccessModal();
  }
}

// Keyboard shortcuts
document.addEventListener('keydown', function(e) {
  // Close modal on ESC key
  if (e.key === 'Escape') {
    closeSuccessModal();
  }
  
  // Save on Ctrl+S or Cmd+S
  if ((e.ctrlKey || e.metaKey) && e.key === 's') {
    e.preventDefault();
    document.getElementById('profileForm').dispatchEvent(new Event('submit'));
  }
});

// Auto-save draft (optional feature)
let autoSaveTimer;
const formInputs = document.querySelectorAll('.form-group-profile input, .form-group-profile textarea');

formInputs.forEach(input => {
  input.addEventListener('input', function() {
    clearTimeout(autoSaveTimer);
    autoSaveTimer = setTimeout(() => {
      // Save draft to localStorage
      const formData = {
        namaLengkap: document.getElementById('namaLengkap').value,
        namaPanggilan: document.getElementById('namaPanggilan').value,
        deskripsi: document.getElementById('deskripsi').value
      };
      localStorage.setItem('profileDraft', JSON.stringify(formData));
      console.log('Draft saved');
    }, 2000); // Save after 2 seconds of inactivity
  });
});

// Load draft on page load
window.addEventListener('load', function() {
  const draft = localStorage.getItem('profileDraft');
  if (draft) {
    const formData = JSON.parse(draft);
    if (confirm('Ditemukan draft yang belum disimpan. Muat draft?')) {
      document.getElementById('namaLengkap').value = formData.namaLengkap || '';
      document.getElementById('namaPanggilan').value = formData.namaPanggilan || '';
      document.getElementById('deskripsi').value = formData.deskripsi || '';
    }
  }
});

// Clear draft after successful save
function clearDraft() {
  localStorage.removeItem('profileDraft');
}

// Add clear draft to success modal close
const originalCloseSuccessModal = closeSuccessModal;
closeSuccessModal = function() {
  clearDraft();
  originalCloseSuccessModal();
};
