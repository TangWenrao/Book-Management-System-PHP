<?php
setcookie("user", "", time()-3600);
setcookie("admin", "", time()-3600);
echo "<script>alert('退出登录成功');window.location.href = 'index1.php';</script>";