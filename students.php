<?php include 'header.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    main {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #007bff;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
<br>
<br>
<br>
<main>
    <h2>ข้อมูลนักเรียน นักศึกษา</h2>
    <table>
        <tr>
            <th>รหัสนักเรียน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ระดับชั้น</th>
        </tr>
        <tr>
            <td>001</td>
            <td>สมหมาย มั่นคง</td>
            <td>ปวช.3</td>
        </tr>
        <tr>
            <td>002</td>
            <td>ปิยฉัตร รักเรียน</td>
            <td>ปวช.3</td>
        </tr>
        <tr>
            <td>003</td>
            <td>กษิดิศ สุขสวัสดิ?์</td>
            <td>ปวช.3</td>
        </tr>
    </table>
</main>
