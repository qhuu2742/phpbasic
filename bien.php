<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biến trong php</title>
</head>
<body>
	<?php  

	#Biến được khai báo bắt đầu bằng '$', dưới đây là ví dụ:

	$txt = "đây là một dòng chữ!";
	$a   =	5;
	$b   =  40;	

	echo 'biến txt là ' . $txt ;
	echo $a + $b;	

	#Biến có thể khai báo ở bất kỳ đâu trong Script
	#Phạm vi của một biến là một phần của Script mà biến đó có thể được tham chiếu hoặc được sử dụng

	#Phạm vi của biến gồm 3 loại
    #Local (Cục bộ)
	#Global (Toàn cục)
	#Static (Biến tĩnh)

	$x = 5; #Đây là một biến toàn cục 

	function test() {
		#sử dụng x trong function này sẽ bị lỗi	
		echo "Biến x ở trong function là: $x";
	} 
	test();

	echo "Biến x ở ngoài function là: $x";

	#Một biến được khai báo trong một function thì biến đó sẽ có phạm vi cục bộ và nó chỉ có thể truy cập trong function đó

	function test2() {
		$y = 10; #Đây là một biến cục bộ
		echo "Biến y trong function là: $y ";
	}
	test2();

	echo "Biến y ở ngoài function là: $y"; #Sử dụng y ở ngoài function test2 sẽ bị lỗi

    #Biến tĩnh

    function BienTinh(){
        static $x = 1;
        echo $x;
        $x ++;
    }

    BienTinh();
    BienTinh();
    BienTinh();

	?>
</body>
</html>