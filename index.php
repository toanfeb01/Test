<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'FBAN') !== false || strpos($userAgent, 'FBAV') !== false) {
    // Nếu truy cập từ ứng dụng Facebook, chuyển hướng sang Shopee
    header("Location: https://s.shopee.vn/2AxfMVpsmr");
} else {
    // Nếu truy cập từ trình duyệt, chuyển hướng sang Facebook
    header("Location: https://www.facebook.com");
}
exit();
?>
