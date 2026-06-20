<?php
// หน้าเว็บหลัก
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FiveM Checker</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h1>🔎 FiveM Checker</h1>
    <p>ตรวจสอบรายชื่อผู้เล่นในเซิร์ฟเวอร์ <b>Pracharuk City</b></p>
    <input type="text" id="search" placeholder="พิมพ์ชื่อที่ต้องการค้นหา...">
    <button onclick="checkPlayers()">ค้นหา</button>
    <div id="result"></div>
  </div>
  <script src="assets/script.js"></script>
</body>
</html>
