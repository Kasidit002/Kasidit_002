<?php include 'header.php'; ?>
<main>
    <br>
    <br>
<h2>บุคลากร</h2>
    <div class="profiles-container">
        <div class="profile">
            <img src="./PNG/4P.png" alt="บุคลากร">
            <h3>นายวิทวัช พานชาตรี</h3>
            <p>ตำแหน่ง: หัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์</p>
            <p>ครูประจำ: แผนกวิชาสามัญสัมพันธ์</p>
            <p>เจ้าหน้าที่: งานกิจกรรมนักเรียนักศึกษา</p>
        </div>
        <div class="profile">
            <img src="./PNG/1P.png" alt="บุคลากร">
            <h3>นายกัมพล ชาญเชิงพานิช</h3>
            <p>หัวหน้าแผนก: แผนกวิชาเทคโนโลยีสารสนเทศ</p>
            <p>หัวหน้างาน: งานศูนย์ข้อมูล</p>
            <p>ครูประจำ: แผนกวิชาเทคโนโลยีสารสนเทศ</p>
        </div>
        <div class="profile">
            <img src="./PNG/2P.png" alt="บุคลากร">
            <h3>นายวิชาญ พลคง</h3>
            <p>หัวหน้าแผนก: แผนกวิชาเทคโนโลยีเครื่องมือวัดและควบคุมปิโตรเลียม</p>
            <p>ครูประจำ: แผนกวิชาเทคโนโลยีเครื่องมือวัดและควบคุมปิโตรเลียม</p>
            <p>ผู้ช่วยหัวหน้าภาค/แผนก: แผนกวิชาเทคโนโลยีเครื่องมือวัดและควบคุมปิโตรเลียม</p>
        </div>
        <div class="profile">
            <img src="./PNG/3P.png" alt="บุคลากร">
            <h3>นายกุศล พรหมจันทร์</h3>
            <p>หัวหน้าแผนก: แผนกวิชาเทคนิคเครื่องกล (ช่างยนต์)</p>
            <p>ครูประจำ: แผนกวิชาเทคนิคเครื่องกล (ช่างยนต์)</p>
            <p>เจ้าหน้าที่: งานโครงการพิเศษและการบริการชุมชน</p>
        </div>
    </div>
</main>


<style>
    main {
        text-align: center;
        padding: 20px;
    }
    .profiles-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }
    .profile {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .profile img {
        width: 200px;
        height: 200px;
        border-radius: 100%;
        object-fit: cover;
        margin-bottom: 10px;
    }
    .profile h3 {
        margin: 10px 0;
        font-size: 18px;
    }
    .profile p {
        margin: 5px 0;
        color: #555;
    }
</style>
