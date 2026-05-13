// Peminjaman Functions

let currentReturnData = {
  id: null,
  name: '',
  book: '',
  isReturned: false
};

let currentEditId = null;
let currentDeleteId = null;

// Open Modal
function openModalPeminjaman(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }
}

// Close Modal
function closeModalPeminjaman(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    
    // Reset form if exists
    const form = modal.querySelector('form');
    if (form) {
      form.reset();
    }
  }
}

// Open Return Modal
function openReturnModal(id, name, book, isReturned) {
  currentReturnData = { id, name, book, isReturned };
  
  const modal = document.getElementById('modalReturn');
  const title = document.getElementById('returnModalTitle');
  const message = document.getElementById('returnMessage');
  const confirmBtn = document.getElementById('btnConfirmReturn');
  
  if (isReturned) {
    title.textContent = 'Konfirmasi Pengembalian';
    message.innerHTML = `Apakah buku <strong>"${book}"</strong> yang dipinjam oleh <strong>${name}</strong> sudah dikembalikan?`;
    confirmBtn.textContent = 'Ya, Sudah Dikembalikan';
    confirmBtn.style.background = 'linear-gradient(135deg, #66bb6a 0%, #4caf50 100%)';
  } else {
    title.textContent = 'Konfirmasi Status';
    message.innerHTML = `Apakah buku <strong>"${book}"</strong> yang dipinjam oleh <strong>${name}</strong> belum dikembalikan?`;
    confirmBtn.textContent = 'Ya, Belum Dikembalikan';
    confirmBtn.style.background = 'linear-gradient(135deg, #ef5350 0%, #e53935 100%)';
  }
  
  openModalPeminjaman('modalReturn');
}

// Confirm Return
function confirmReturn() {
  const { id, name, book, isReturned } = currentReturnData;
  
  // Here you would typically make an API call to update the status
  if (isReturned) {
    alert(`Buku "${book}" telah dikembalikan oleh ${name}.\nData akan dipindahkan ke Riwayat Peminjaman dengan status "Sudah Dikembalikan".`);
  } else {
    alert(`Status buku "${book}" yang dipinjam oleh ${name} dicatat sebagai "Belum Dikembalikan".\nData akan dipindahkan ke Riwayat Peminjaman.`);
  }
  
  closeModalPeminjaman('modalReturn');
  
  // Show success alert
  showSuccessAlert();
  
}

// Show Success Alert
function showSuccessAlert() {
  const alert = document.getElementById('successAlert');
  if (alert) {
    alert.style.display = 'flex';
    setTimeout(() => {
      alert.style.display = 'none';
    }, 3000);
  }
}

// Open Edit Riwayat Modal
function openEditRiwayat(id) {
  currentEditId = id;
  

  openModalPeminjaman('modalEditRiwayat');
}

// Open Delete Riwayat Modal
function openDeleteRiwayat(id) {
  currentDeleteId = id;
  openModalPeminjaman('modalDeleteRiwayat');
}

// Confirm Delete Riwayat
function confirmDeleteRiwayat() {
  // Here you would typically make an API call to delete the record
  alert(`Riwayat peminjaman dengan ID ${currentDeleteId} berhasil dihapus!`);
  closeModalPeminjaman('modalDeleteRiwayat');
  
  // Optionally reload or update the table
  // location.reload();
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modals = document.getElementsByClassName('modal-peminjaman');
  for (let i = 0; i < modals.length; i++) {
    if (event.target === modals[i]) {
      modals[i].style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  }
}

// Handle form submissions
document.addEventListener('DOMContentLoaded', function() {
  // Add Peminjaman Form
  const formAdd = document.getElementById('formAddPeminjaman');
  if (formAdd) {
    formAdd.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        namaPeminjam: document.getElementById('namaPeminjam').value,
        judulBuku: document.getElementById('judulBuku').value,
        tanggalPinjam: document.getElementById('tanggalPinjam').value,
        tanggalKembali: document.getElementById('tanggalKembali').value,
        nomerTelepon: document.getElementById('nomerTelepon').value,
        catatan: document.getElementById('catatan').value
      };
      console.log('Adding peminjaman:', formData);
      alert('Data peminjaman berhasil ditambahkan!');
      
      closeModalPeminjaman('modalAddPeminjaman');
      showSuccessAlert();
      
    });
  }
  
  const formEdit = document.getElementById('formEditRiwayat');
  if (formEdit) {
    formEdit.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        id: currentEditId,
        namaPeminjam: document.getElementById('editNamaPeminjam').value,
        judulBuku: document.getElementById('editJudulBuku').value,
        tanggalPinjam: document.getElementById('editTanggalPinjam').value,
        tanggalKembali: document.getElementById('editTanggalKembali').value,
        nomerTelepon: document.getElementById('editNomerTelepon').value,
        catatan: document.getElementById('editCatatan').value,
        status: document.getElementById('editStatus').value
      };
      
      console.log('Updating riwayat:', formData);
      alert('Data riwayat peminjaman berhasil diupdate!');
      
      closeModalPeminjaman('modalEditRiwayat');
    });
  }
});

// Keyboard shortcuts
document.addEventListener('keydown', function(e) {
  // Close modal on ESC key
  if (e.key === 'Escape') {
    const modals = document.getElementsByClassName('modal-peminjaman');
    for (let i = 0; i < modals.length; i++) {
      if (modals[i].style.display === 'block') {
        modals[i].style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    }
  }
});
