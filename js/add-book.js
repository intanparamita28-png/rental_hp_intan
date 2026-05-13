// Add Book Page Functions

document.addEventListener('DOMContentLoaded', function() {
  // Handle Cover Upload
  const coverUpload = document.getElementById('coverUpload');
  const coverPreview = document.getElementById('coverPreview');
  const coverPlaceholder = document.getElementById('coverPlaceholder');
  const uploadLabel = document.querySelector('.upload-cover-label');

  // Click on placeholder to trigger file input
  if (coverPlaceholder) {
    coverPlaceholder.addEventListener('click', function() {
      coverUpload.click();
    });
  }

  // Handle cover upload
  if (coverUpload) {
    coverUpload.addEventListener('change', function(e) {
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
          coverPreview.src = event.target.result;
          coverPreview.style.display = 'block';
          coverPlaceholder.style.display = 'none';
        };
        reader.readAsDataURL(file);
      }
    });
  }

  // Handle Add Book Form
  const addBookForm = document.getElementById('addBookForm');
  if (addBookForm) {
    addBookForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get selected genres
      const genreSelect = document.getElementById('genre');
      const selectedGenres = Array.from(genreSelect.selectedOptions).map(option => option.value);
      
      // Get selected categories
      const categorySelect = document.getElementById('category');
      const selectedCategories = Array.from(categorySelect.selectedOptions).map(option => option.value);
      
      const formData = {
        judulBuku: document.getElementById('judulBuku').value,
        penulis: document.getElementById('penulis').value,
        penerbit: document.getElementById('penerbit').value,
        tahunTerbit: document.getElementById('tahunTerbit').value,
        isbn: document.getElementById('isbn').value,
        halaman: document.getElementById('halaman').value,
        bahasa: document.getElementById('bahasa').value,
        stok: document.getElementById('stok').value,
        genre: selectedGenres,
        category: selectedCategories,
        deskripsi: document.getElementById('deskripsi').value,
        cover: coverUpload.files[0] ? coverUpload.files[0].name : null
      };
      
      // Validate required fields
      if (!formData.judulBuku || !formData.penulis || !formData.stok) {
        alert('Mohon lengkapi semua field yang wajib diisi (*)!');
        return;
      }
      
      // Validate stok
      if (formData.stok < 0) {
        alert('Stok buku tidak boleh negatif!');
        return;
      }
      
      // Validate tahun terbit
      if (formData.tahunTerbit) {
        const currentYear = new Date().getFullYear();
        if (formData.tahunTerbit < 1900 || formData.tahunTerbit > currentYear + 1) {
          alert('Tahun terbit tidak valid!');
          return;
        }
      }
      
      // Here you would typically make an API call to save the data
      console.log('Adding book:', formData);
      alert('Buku berhasil ditambahkan!');
      
      // Redirect to allbook page
      window.location.href = 'allbook.html';
    });
  }
});

// Auto-save draft (optional feature)
let autoSaveTimer;
const formInputs = document.querySelectorAll('.book-form-group input, .book-form-group select, .book-form-group textarea');

formInputs.forEach(input => {
  input.addEventListener('input', function() {
    clearTimeout(autoSaveTimer);
    autoSaveTimer = setTimeout(() => {
      // Save draft to localStorage
      const formData = {
        judulBuku: document.getElementById('judulBuku').value,
        penulis: document.getElementById('penulis').value,
        penerbit: document.getElementById('penerbit').value,
        tahunTerbit: document.getElementById('tahunTerbit').value,
        isbn: document.getElementById('isbn').value,
        halaman: document.getElementById('halaman').value,
        bahasa: document.getElementById('bahasa').value,
        stok: document.getElementById('stok').value,
        deskripsi: document.getElementById('deskripsi').value
      };
      localStorage.setItem('bookDraft', JSON.stringify(formData));
      console.log('Draft saved');
    }, 2000); // Save after 2 seconds of inactivity
  });
});

// Load draft on page load
window.addEventListener('load', function() {
  const draft = localStorage.getItem('bookDraft');
  if (draft) {
    const formData = JSON.parse(draft);
    if (confirm('Ditemukan draft yang belum disimpan. Muat draft?')) {
      document.getElementById('judulBuku').value = formData.judulBuku || '';
      document.getElementById('penulis').value = formData.penulis || '';
      document.getElementById('penerbit').value = formData.penerbit || '';
      document.getElementById('tahunTerbit').value = formData.tahunTerbit || '';
      document.getElementById('isbn').value = formData.isbn || '';
      document.getElementById('halaman').value = formData.halaman || '';
      document.getElementById('bahasa').value = formData.bahasa || '';
      document.getElementById('stok').value = formData.stok || '';
      document.getElementById('deskripsi').value = formData.deskripsi || '';
    } else {
      localStorage.removeItem('bookDraft');
    }
  }
});

// Clear draft after successful save
function clearBookDraft() {
  localStorage.removeItem('bookDraft');
}

// Keyboard shortcuts
document.addEventListener('keydown', function(e) {
  // Save on Ctrl+S or Cmd+S
  if ((e.ctrlKey || e.metaKey) && e.key === 's') {
    e.preventDefault();
    const form = document.getElementById('addBookForm');
    if (form) {
      form.dispatchEvent(new Event('submit'));
    }
  }
});
