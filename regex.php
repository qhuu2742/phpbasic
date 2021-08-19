<?php

// Regular expressions ( gọi tắt là Regex )
// cực kỳ hữu ích trong việc trích xuất thông tin từ 1 đoạn text. Nó tìm kiếm những ký tự trong đoạn text phù hợp với
// một quy tắc cụ thể, thường gọi là search pattern. Và học regex chính là việc học cách viết ra những search pattern
// đó.

//Ứng dụng của regex rất da dạng, từ validate, phân tích và thay thế ký tự chong chuỗi, chuyển dữ liệu sang một định
// dạng khác, trích xuất data của một trang web ..

//Trong PHP, một chuỗi Regex sẽ bắt đầu bằng "/" và kết thúc cũng bằng "/", đôi lúc trong chuỗi có thể chứa "/" thì ta
//có thể dùng "#" hoặc "~" thay thế
//Ví dụ

$exp = "/camoi4/i"; //i giúp chúng ta k phân biệt chữ hoa chữ thường

//Regex functions

//preg_match() trả về 1 nếu chuỗi được tìm thấy, 0 nếu không tìm thấy

//preg_match_all() trả về số lần mẫu được tìm thấy trong chuỗi, có thể là 0

//preg_replace() trả về mỗi chuỗi mới phù hợp đã được thay thế bằng một chuỗi khác

$str = "Dai Hoc Bach Khoa khoa cntt";
$partern = "/khoa/i";

echo preg_match($partern, $str); // hàm này sẽ cho bạn biết mỗi chuỗi có chứa các mẫu trùng khớp hay không, như ở đây sẽ trả về 1
echo preg_match_all($partern, $str);// hàm sẽ trả về xem có bao nhiêu kết quả phù hợp, như ở đây có 2 chữ khoa, trả về 2
echo preg_replace($partern, 'vien', $str);//hay thế tất cả các kết quả phù hợp của mẫu trong một chuỗi bằng một chuỗi khác.

//Các bổ ngữ cho Regex:

// i: thực hiện tìm kiếm mà không phân biệt chữ hoa hay thường
// m: thực hiện tìm kiếm nhiều dòng
// i: cho phép đối sánh chính xác các mẫu được mã hóa UTF-8

// Dấu ngoặc dùng để tìm một loại các ký tự:

// [abc]: tìm một ký tự từ các tùy chọn giữa dấu ngoặc
// [^abc]: tìm bất kỳ ký tự nào KHÔNG nằm giữa các dấu ngoặc
// [0-9]: tìm một ký tự từ 0 - 9

// Những ký tự đặc biệt:
// | : tìm một kết quả phù hợp cho bất kỳ một trong các mẫu cách nhau bởi |, ví dụ cat|dog|fish
// . : chỉ tìm một trường hợp của bất kỳ ký tự nào
// $ : tìm một kết quả phù hợp ở cuối chuỗi, ví dụ: end$
// ^ : tìm một kết quả phù hợp ở cuối chuỗi, ví dụ: ^the -> The end : ^The end$
// \d : khớp với một ký tự số từ 0 - 9
// \w : Khớp với bất kỳ ký 1 tự số hoặc chữ hoặc dấu gạch dưới _
// \s : khớp với ký tự khoảng trắng gồm cả tab hay xuống dòng
// \D : Khớp với 1 ký tự không phải là số
// \W : Khớp với bất kỳ ký tự không phải là 1 số, chữ hoặc dấu gạch dưới '_'
// \S : Khớp với ký tự không phải là khoảng trắng(bap gồm cả tab, xuống dòng)
// \b : tìm một kết quả phù hợp ở đầu một từ như : \bWorld hoặc cuối từ như World\b
// \uxxxx : Tìm ký tự Unicode được chỉ định bởi số thập lục phân xxxx
// s
