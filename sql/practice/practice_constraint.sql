create database quan_ly_sinh_vien

use quan_ly_sinh_vien


drop table sinh_vien

create table sinh_vien(
                          ma int AUTO_INCREMENT,
                          ten nvarchar(50),
                          ngay_sinh date,
                          gioi_tinh bit,
                          so_dien_thoai char(15),
                          primary key(ma)
)


    insert into sinh_vien(ten,ngay_sinh,gioi_tinh,so_dien_thoai)
values (N'Tuấn','2000-01-01',1,'0123456789'),(N'Long','2000-01-01',1,'0123456789')

insert into sinh_vien(ten,ngay_sinh,gioi_tinh,so_dien_thoai)
values (N'Hữu','2000-02-01',1,'0961580259')

select * from sinh_vien
where ten in ('Long',N'Tuấn')

delete from sinh_vien
where ma = 3

update sinh_vien
set
    ten = 'Nhung'
where ma = 2

-- Tạo bảng lưu thông tin khách hàng (mã, họ tên, số điện thoại, địa chỉ, giới tính, ngày sinh)
create table khach_hang (
                            ma int AUTO_INCREMENT,
                            ho_ten nvarchar(50) not null,
                            sdt char(50) unique not null,
                            dia_chi text not null,
                            gioi_tinh bit not null,
                            ngay_sinh date not null,
                            primary key(ma)
)

-- Thêm 5 khách hàng
select * from khach_hang
drop table khach_hang


    insert into khach_hang(ho_ten, sdt, dia_chi, gioi_tinh, ngay_sinh)
    values (N'Vinh', '0123456675', 'hà nội', 1, '2000-01-09'),
    (N'Giang', '0946746456', 'hà nội', 0, '2001-02-07'),
    (N'Nhung', '0021548961', 'tây hồ', 0, '2001-03-15'),
    (N'Minh', '0123698745', 'ba vì', 0, '2000-06-06'),
    (N'Hữu', '0961580259', 'hà nội', 1, '2000-01-27')

    insert into khach_hang(ho_ten, sdt, dia_chi, gioi_tinh, ngay_sinh)
    values (N'Đức', '0123436675', 'hà nội', 1, '1999-01-09')

    insert into khach_hang(ho_ten, sdt, dia_chi, gioi_tinh, ngay_sinh)
    values (N'Đức', '0323436675', 'hà nội', 1, '2000-01-09')

    insert into khach_hang(ho_ten, sdt, dia_chi, gioi_tinh, ngay_sinh)
    values (N'Nguyên', '0323436677', 'hà nội', 0, '1999-01-09')

-- Hiển thị chỉ họ tên và số điện thoại của tất cả khách hàng

select ho_ten, sdt
from khach_hang

-- Cập nhật khách có mã là 2 sang tên Tuấn
update khach_hang
set ho_ten = N'Tuấn'
where ma = 2

-- Xoá khách hàng có mã lớn hơn 3 và giới tính là Nam
delete from khach_hang
where ma > 3 and gioi_tinh = 1

-- (*) Lấy ra khách hàng sinh tháng 1
select * from khach_hang
where MONTH(ngay_sinh) = 1;

-- (*) Lấy ra khách hàng có họ tên trong danh sách (Vinh,Minh,Đức) và giới tính Nam hoặc chỉ cần năm sinh trước 2000
select * from khach_hang
where (ho_ten IN('Vinh', N'Minh', N'Đức') and gioi_tinh = 1) or year(ngay_sinh) < 2000;

-- (**) Lấy ra khách hàng có tuổi lớn hơn 18
select * from khach_hang
where year(curdate()) - year(ngay_sinh) > 18

-- (**) Lấy ra 3 khách hàng mới nhất
select *
from khach_hang
order by ma desc
    limit 3

-- (**) Lấy ra khách hàng có tên chứa chữ T

select *
from khach_hang
where ho_ten like '%T%'

-- (***) Thay đổi bảng sao cho chỉ nhập được ngày sinh bé hơn ngày hiện tại
alter table khach_hang
    add check (ngay_sinh < current_date())

alter table khach_hang
drop constraint check_ngay_sinh

insert into khach_hang(ho_ten, sdt, dia_chi, gioi_tinh, ngay_sinh)
values (N'Nguyênx', '0323436677', 'hà nội', 0, '2022-01-09')

-- (***) Chỉ nhập được giới tính là nam khi có ai đó tên Pham
alter table khach_hang
    add CONSTRAINT check_ten_va_gioi_tinh check((gioi_tinh = 1 and ho_ten = 'Pham') or ho_ten != 'Pham')

    insert into khach_hang(ho_ten, sdt, dia_chi, gioi_tinh, ngay_sinh)
    values (N'Pham', '0323436677', 'hà nội', 0, '2000-01-09')