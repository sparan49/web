async function checkPlayers() {
  const search = document.getElementById('search').value.trim().toLowerCase();
  const resultDiv = document.getElementById('result');
  resultDiv.innerHTML = '<p>กำลังค้นหา...</p>';

  try {
    const res = await fetch('api/check.php');
    const data = await res.json();
    if (data.error) {
      resultDiv.innerHTML = `<p style="color:red">${data.error}</p>`;
      return;
    }
    const players = data.filter(p => p.name.toLowerCase().includes(search));
    if (players.length === 0) {
      resultDiv.innerHTML = '<p>ไม่พบบุคคลในรายชื่อ</p>';
    } else {
      resultDiv.innerHTML = '<ul>' + players.map(p => `<li>${p.name}</li>`).join('') + '</ul>';
    }
  } catch (err) {
    resultDiv.innerHTML = '<p style="color:red">เกิดข้อผิดพลาดในการดึงข้อมูล</p>';
  }
}
