<?php
$servername = "localhost";
$username = "root"; // غيّره إذا كنت تستخدم استضافة خارجية
$password = ""; // أدخل كلمة مرور قاعدة البيانات إذا كانت مطلوبة
$dbname = "contact"; // استبدله باسم قاعدة بياناتك

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>