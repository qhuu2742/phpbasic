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

// Flag(cờ): Biểu thức chính quy có dạng /abc/ và sau nó sẽ có flag với 3 giá trị sau:
// g (global) tìm tất cả các đoạn ký tự khớp với mẫu tìm kiếm, nếu không có cờ g thì việc tìm kiếm sẽ dừng lại ở lần khớp đầu tiên.
// m (multi line) khi có ^ và $ thì ^ sẽ là bắt đầu 1 dòng và $ là kết thúc 1 dòng trong chuỗi, nếu không có cờ m thì ^ và $ là bắt đầu và kết thúc của cả chuỗi
// i như đã nói ở trên.

//NÂNG CAO

// Ký hiệu phân nhóm ()
//a(bc) trong cặp dấu ngoặc là một group, giá trị trong group sẽ được capture lại
//a(?:bc)* giá trị trong group sẽ không được capture lại
//a(?<foo>bc) đặt tên cho group, mặc địng group sẽ có chỉ số là group[0], group[1], trường hợp này group sẽ là group[foo]
//Đây là một quy tắc rất hữu ích nếu bạn bần trích xuất data từ một chuỗi. Bất kì thông tin nào được match sẽ được trích
//xuất vào trong một mảng, và ta có thể lấy nó thông qua chỉ mục của các group hoặc tên của group nếu đặt tên. Nếu không
//muốn bắt thông tin trong group, ta dùng ?:, khi đó group chỉ đơn thuần là một điều kiện và giá trị trong đó xẽ không
//được trích xuất.

//Kí hiệu chỉ phạm vi []
//[abc] khớp với 1 ký tự a hoặc b hoặc c -> tương tự cách dùng a|b|c
//[a-c] tác dụng như trên
//[a-fA-F0-9] khớp với 1 ký tự nằm trong khoảng từ a -> z hoặc A -> Z hoặc 0 -> 9(đây chính là đoạn regex để bắt ký tự trong hệ HEX)
//[0-9]% khớp với 1 ký tự từ 0 ->9 và theo sau nó là ký tự %
//[^a-zA-Z] khớp với ký tự không nằm nằm trong a -> z và A -> Z
//Chú ý: Chức năng của một ký tự đặc biệt nào đó sẽ thay đổi khi nó nằm ở các vị trí khác nhau trong partten. ở ví dụ cuối
//cùng, ký tự ^ nằm trong [] thể hiện sự phủ định, chứ không phải xác định bắt đầu chuỗi. Nên cần chú ý vị trí của ký tự
//đặc biệt để biết chức năng của nó
