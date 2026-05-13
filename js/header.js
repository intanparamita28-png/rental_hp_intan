// Header Dropdown Functions

document.addEventListener('DOMContentLoaded', function() {
  const userDropdown = document.querySelector('.user-dropdown');
  const dropdownMenu = document.querySelector('.dropdown-menu');
  
  if (userDropdown && dropdownMenu) {
    // Toggle dropdown on click
    userDropdown.addEventListener('click', function(e) {
      e.stopPropagation();
      dropdownMenu.classList.toggle('show');
      userDropdown.classList.toggle('active');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!userDropdown.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove('show');
        userDropdown.classList.remove('active');
      }
    });
    
    // Prevent dropdown from closing when clicking inside
    dropdownMenu.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  }
  
  // Handle logout
  const logoutBtn = document.querySelector('.dropdown-item.logout');
  if (logoutBtn) {
    logoutBtn.addEventListener('click', function(e) {
      e.preventDefault();
      
      if (confirm('Apakah Anda yakin ingin logout?')) {
        // Here you would typically make an API call to logout
        console.log('Logging out...');
        
        // Clear any stored data
        localStorage.clear();
        sessionStorage.clear();
        
        // Redirect to login page
        window.location.href = '../index.html';
      }
    });
  }
  
  // Handle profile link
  const profileLink = document.querySelector('.dropdown-item[href*="profile"]');
  if (profileLink) {
    profileLink.addEventListener('click', function(e) {
      // Close dropdown
      if (dropdownMenu) {
        dropdownMenu.classList.remove('show');
      }
      if (userDropdown) {
        userDropdown.classList.remove('active');
      }
    });
  }
});

// Close dropdown on ESC key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const userDropdown = document.querySelector('.user-dropdown');
    
    if (dropdownMenu && dropdownMenu.classList.contains('show')) {
      dropdownMenu.classList.remove('show');
      if (userDropdown) {
        userDropdown.classList.remove('active');
      }
    }
  }
});
