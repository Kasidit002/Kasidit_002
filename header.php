<header>
    <div class="logo">
        <img src="./PNG/HHH.png" alt="โลโก้โรงเรียน">
        <h1>วิทยาลัยเทคนิคหาดใหญ่</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">หน้าแรก</a></li>
            <li><a href="management.php">ผู้บริหาร</a></li>
            <li><a href="staff.php">บุคลากร</a></li>
            <li><a href="students.php">นักเรียน</a></li>
            <li><a href="courses.php">สาขาวิชา</a></li>
        </ul>
    </nav>
</header>

<style>
    /* ตั้งค่าพื้นฐานของ header */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #004080;
        color: white;
        padding: 15px 0;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    /* จัดรูปแบบโลโก้และชื่อโรงเรียน */
    .logo {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .logo img {
        height: 55px;
        margin-right: 10px;
    }

    .logo h1 {
        font-size: 22px;
        font-weight: bold;
    }

    /* จัดรูปแบบเมนู */
    nav ul {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 0;
        display: flex;
        justify-content: center;
        background: #003366;
        padding: 10px 0;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        padding: 10px 15px;
        display: block;
        font-size: 16px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    nav ul li a:hover {
        background: #002244;
        border-radius: 5px;
    }

    /* ป้องกันเนื้อหาโดน header บัง */
    body {
        padding-top: 90px;
        font-family: Arial, sans-serif;
    }
</style>
