// Form Page Functions - For Add/Edit Peminjaman

document.addEventListener('DOMContentLoaded', function() {
  // Handle Add Peminjaman Form
  const addForm = document.getElementById('addPeminjamanForm');
  if (addForm) {
    addForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        namaPeminjam: document.getElementById('namaPeminjam').value,
        kelasJurusan: document.getElementById('kelasJurusan').value,
        idUser: document.getElementById('idUser').value,
        judulBuku: document.getElementById('judulBuku').value,
        tanggalPinjam: document.getElementById('tanggalPinjam').value,
        tanggalKembali: document.getElementById('tanggalKembali').value,
        nomorTelepon: document.getElementById('nomorTelepon').value,
        catatan: document.getElementById('catatan').value
      };
      
      // Validate required fields
      if (!formData.namaPeminjam || !formData.kelasJurusan || !formData.judulBuku || 
          !formData.tanggalPinjam || !formData.tanggalKembali) {
        alert('Mohon lengkapi semua field yang wajib diisi!');
        return;
      }
      
      // Validate dates
      const pinjam = new Date(formData.tanggalPinjam);
      const kembali = new Date(formData.tanggalKembali);
      
      if (kembali <= pinjam) {
        alert('Tanggal kembali harus lebih besar dari tanggal pinjam!');
        return;
      }
      
      // Here you would typically make an API call to save the data
      console.log('Adding peminjaman:', formData);
      alert('Data peminjaman berhasil ditambahkan!');
      
      // Redirect to buku-dipinjam page
      window.location.href = 'buku-dipinjam.html';
    });
  }
  
  // Handle Edit Peminjaman Form
  const editForm = document.getElementById('editPeminjamanForm');
  if (editForm) {
    editForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        namaPeminjam: document.getElementById('namaPeminjam').value,
        kelasJurusan: document.getElementById('kelasJurusan').value,
        idUser: document.getElementById('idUser').value,
        judulBuku: document.getElementById('judulBuku').value,
        tanggalPinjam: document.getElementById('tanggalPinjam').value,
        tanggalKembali: document.getElementById('tanggalKembali').value,
        nomorTelepon: document.getElementById('nomorTelepon').value,
        catatan: document.getElementById('catatan').value
      };
      
      // Validate required fields
      if (!formData.namaPeminjam || !formData.kelasJurusan || !formData.judulBuku || 
          !formData.tanggalPinjam || !formData.tanggalKembali) {
        alert('Mohon lengkapi semua field yang wajib diisi!');
        return;
      }
      
      // Validate dates
      const pinjam = new Date(formData.tanggalPinjam);
      const kembali = new Date(formData.tanggalKembali);
      
      if (kembali <= pinjam) {
        alert('Tanggal kembali harus lebih besar dari tanggal pinjam!');
        return;
      }
      
      // Here you would typically make an API call to update the data
      console.log('Updating peminjaman:', formData);
      alert('Data peminjaman berhasil diupdate!');
      
      // Redirect to buku-dipinjam page
      window.location.href = 'buku-dipinjam.html';
    });
  }
});

// Set minimum date to today for date inputs
window.addEventListener('load', function() {
  const today = new Date().toISOString().split('T')[0];
  const tanggalPinjam = document.getElementById('tanggalPinjam');
  const tanggalKembali = document.getElementById('tanggalKembali');
  
  if (tanggalPinjam && !tanggalPinjam.value) {
    tanggalPinjam.setAttribute('min', today);
  }
  
  if (tanggalKembali && !tanggalKembali.value) {
    tanggalKembali.setAttribute('min', today);
  }
  
  // Update min date for tanggal kembali when tanggal pinjam changes
  if (tanggalPinjam) {
    tanggalPinjam.addEventListener('change', function() {
      if (tanggalKembali) {
        tanggalKembali.setAttribute('min', this.value);
        
        // Reset tanggal kembali if it's before tanggal pinjam
        if (tanggalKembali.value && tanggalKembali.value < this.value) {
          tanggalKembali.value = '';
        }
      }
    });
  }
});
