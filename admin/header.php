<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>ADM </title>
  <link rel="stylesheet" href="../Assets/css/admin.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../ckeditor/ckeditor.js"></script>
  <script>
    function confirmDelete() {
      var kq = confirm('Ban co muon xoa khong');
      if (kq) {
        alert('ban da xoa thanh cong');
        return true;
      } else {
        alert('ban da huy');
        return false; 

      }
    }
  </script>
  
  <style>
    tr td a {
      text-decoration: none;
      display: block;
      text-align: center;
      background-color: grey;
      border: 1px solid grey;
      color: black;
      border-radius: 2px;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <a href="../index.php?act=admin">
      <span class="logo_name">BlackClear</span>
      </a>
      
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php?act=show_thong_ke" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showPro">
          <i class='bx bx-box'></i>
          <span class="links_name">Product</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=show_list_cate">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Category</span>
        </a>
      </li>
      <!-- <li>
        <a href="index.php?act=show_thong_ke">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Statistical</span>
        </a>
      </li> -->
      <li>
        <a href="index.php?act=show_list_cmt">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Comments</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=show_list_users">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Accounts</span>
        </a>
      </li>
      <li class="log_out">
        <a href="index.php?act=log_out">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <form action="index.php?act=search" method="post">
          <input type="text" placeholder="Search..." name="keyw" style="height: 48px;" required>
          <i class='bx bx-search'></i>
        </form>
      </div>
      <div class="profile-details">
        <img src="../Assets/img/pro5.jpg" alt="">
        <span class="admin_name">Hoàng Kỳ</span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>
    <div class="home-content">