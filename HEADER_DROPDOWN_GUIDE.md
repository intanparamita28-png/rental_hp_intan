# Header Dropdown Implementation Guide

## 📋 Overview
Dropdown menu untuk user profile dengan fitur logout yang dapat diterapkan ke semua halaman.

## 🎨 Features
- ✅ User info dengan avatar
- ✅ Menu Profile & Dashboard
- ✅ Logout button dengan konfirmasi
- ✅ Smooth animations
- ✅ Click outside to close
- ✅ ESC key to close
- ✅ Responsive design
- ✅ Arrow rotation animation

## 📁 Files Created

### 1. CSS
**File:** `css/header.css` (Updated)
- Dropdown menu styling
- User avatar
- Menu items
- Animations
- Responsive design

### 2. JavaScript
**File:** `js/header.js` (New)
- Toggle dropdown
- Close on outside click
- Close on ESC key
- Logout confirmation
- Clear storage on logout

### 3. Component Template
**File:** `components/header-with-dropdown.html`
- Ready-to-use HTML template
- Copy-paste to all pages

## 🚀 Implementation Steps

### Step 1: Update CSS Link
Pastikan halaman sudah include `header.css`:
```html
<link rel="stylesheet" href="../css/header.css" />
```

### Step 2: Replace Header HTML
Ganti header lama dengan yang baru:

**SEBELUM:**
```html
<header class="header">
  <div class="logo">MYBOOK</div>
  <div class="header-right">
    <i class="fas fa-bell notification-icon"></i>
    <div class="user-dropdown">
      <i class="fas fa-user-circle"></i>
      <span>Admin</span>
      <i class="fas fa-chevron-down"></i>
    </div>
  </div>
</header>
```

**SESUDAH:**
```html
<header class="header">
  <div class="logo">MYBOOK</div>
  <div class="header-right">
    <i class="fas fa-bell notification-icon"></i>
    
    <!-- User Menu with Dropdown -->
    <div class="user-menu">
      <div class="user-dropdown">
        <i class="fas fa-user-circle"></i>
        <span>Admin</span>
        <i class="fas fa-chevron-down"></i>
      </div>
      
      <!-- Dropdown Menu -->
      <div class="dropdown-menu">
        <!-- User Info Header -->
        <div class="dropdown-header">
          <div class="user-info">
            <div class="user-avatar">
              <i class="fas fa-user"></i>
            </div>
            <div class="user-details">
              <div class="user-name">Admin User</div>
              <div class="user-role">Administrator</div>
            </div>
          </div>
        </div>
        
        <!-- Menu Items -->
        <a href="profile.html" class="dropdown-item">
          <i class="fas fa-user-circle"></i>
          <span>My Profile</span>
        </a>
        
        <a href="dashboard.html" class="dropdown-item">
          <i class="fas fa-th-large"></i>
          <span>Dashboard</span>
        </a>
        
        <div class="dropdown-divider"></div>
        
        <button class="dropdown-item logout">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </button>
      </div>
    </div>
  </div>
</header>
```

### Step 3: Add JavaScript
Tambahkan script sebelum closing `</body>` tag:
```html
<script src="../js/header.js"></script>
```

## 📝 Customization

### Change User Info
Edit bagian dropdown-header:
```html
<div class="user-name">Your Name</div>
<div class="user-role">Your Role</div>
```

### Add More Menu Items
Tambahkan sebelum divider:
```html
<a href="settings.html" class="dropdown-item">
  <i class="fas fa-cog"></i>
  <span>Settings</span>
</a>
```

### Change Logout Redirect
Edit di `js/header.js`:
```javascript
window.location.href = '../index.html'; // Change this
```

## 🎯 Pages to Update

Update header di semua halaman berikut:
- [x] dashboard.html (Already updated)
- [ ] genre.html
- [ ] category.html
- [ ] buku-dipinjam.html
- [ ] riwayat-peminjaman.html
- [ ] profile.html
- [ ] detail-book.html
- [ ] allbook.html
- [ ] add-book.html
- [ ] add-peminjam.html
- [ ] edit-peminjam.html

## 🎨 Styling Details

### Colors
- Primary: `#1a237e` (Navy Blue)
- Secondary: `#7986cb` (Purple)
- Danger: `#ef5350` (Red for logout)
- Background: `#e8eaf6` (Light Purple)

### Animations
- Dropdown slide down: `0.3s`
- Arrow rotation: `180deg`
- Hover effects: `0.3s`

### Responsive
- Mobile: User name hidden
- Tablet: Smaller dropdown
- Desktop: Full dropdown

## 🔧 Troubleshooting

### Dropdown tidak muncul?
- Pastikan `header.css` sudah di-include
- Pastikan `header.js` sudah di-include
- Check console untuk error

### Dropdown tidak close?
- Pastikan tidak ada JavaScript error
- Check event listener di `header.js`

### Style tidak sesuai?
- Clear browser cache
- Check CSS specificity
- Pastikan tidak ada CSS conflict

## 📱 Mobile Behavior
- User name disembunyikan
- Dropdown lebih kecil
- Touch-friendly
- Smooth animations

## 🔐 Security Notes
- Logout clears localStorage & sessionStorage
- Confirmation dialog sebelum logout
- Redirect ke login page
- Session handling di backend (implement later)

## 💡 Tips
1. Copy dari `components/header-with-dropdown.html`
2. Paste ke semua halaman
3. Adjust link paths jika perlu
4. Test di semua halaman
5. Customize sesuai kebutuhan

## ✅ Checklist
- [x] CSS styling created
- [x] JavaScript functionality created
- [x] Component template created
- [x] Dashboard.html updated
- [x] Documentation created
- [ ] Apply to all pages
- [ ] Test on all browsers
- [ ] Test responsive design
