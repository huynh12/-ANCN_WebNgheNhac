<?php
if(!empty($_GET['file'])){
  $fileName= basename($_GET['file']);              //  đường dẫn và tệp sẽ nhận đc hiển thị
  $filePath = 'nhac/'. $fileName;                  //tạo một file đg dẫn= thư mục đích và nối với tên của tệp
   if(!empty($fileName)&& file_exists($filePath)){  //  Kiểm tra tệp có tồn tại hay không
// Xác định tiêu đề thông tin  
    
    header('Content-Description: File Transfer');                 //Nội dung-Mô tả
    header('Content-Disposition: attachment; filename='.basename($filePath));     //Nội dung-Bố trí
    header('Content-Type: audio/mpeg');               //trả dữ liệu về dạng audio
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filePath));    // báo dung lượng file tải xuống
    ob_clean();
    flush();                                            //Xóa bộ đệm đầu ra hệ thống
    readfile($filePath);     exit;                      //  Đọc kích thước của tệp
  }
  else {
    echo "file khong hợp lệ!";
}
}
?>