create database buoi4
use buoi4

create table sinh_vien (
                           ma int AUTO_INCREMENT,
                           ho_ten nvarchar(50),
                           diem_lan_1 float default 5,
                           diem_lan_2 float,
                           primary key(ma),
                           CONSTRAINT check_diem check (diem_lan_1 >= 0 and diem_lan_1 <= 10 and diem_lan_2 >= 0 and diem_lan_2 <= 10),
-- tên không được phép ngắn hơn 2 ký tự
                           CONSTRAINT check_ten check (length(ho_ten) >= 2),
-- điểm lần 2 không được nhập khi mà điểm lần 1 lớn hơn hoặc bằng 5
                           CONSTRAINT check_diem_lan_2 check ((diem_lan_1 >= 5 and diem_lan_2 is null) or diem_lan_1 < 5 )
)

select * from sinh_vien

-- Insert 5 sinh viên
    insert into sinh_vien(ho_ten, diem_lan_1, diem_lan_2)
values (N'Hữu',6,null), (N'Vinh',1,10), (N'Giang',5,null), (N'Nhung',5,null), (N'Minh Ngọc',10,null)

insert into sinh_vien(ho_ten, diem_lan_1, diem_lan_2)
values (N'Hiền Trang',10,4)

-- Lấy ra các bạn điểm lần 1 hoặc lần 2 lớn hơn 5
select * from sinh_vien
where diem_lan_1 > 5 or diem_lan_2 > 5

-- Lấy ra các bạn qua môn ngay từ lần 1
select * from sinh_vien
where diem_lan_1 >= 5

-- Lấy ra các bạn trượt môn
select * from sinh_vien
where diem_lan_1 < 5 and diem_lan_2 < 5

-- Đếm số bạn qua môn sau khi thi lần 2
select count(diem_lan_2) as so_sinh_vien_phai_thi_lan_2 from sinh_vien

--  Đếm số bạn cần phải thi lần 2 (tức là thi lần 1 chưa qua nhưng chưa nhập điểm lần 2)
    insert into sinh_vien(ho_ten, diem_lan_1, diem_lan_2)
values (N'Lê Nghĩa',1,null)

select count(diem_lan_1) from sinh_vien
where diem_lan_1 < 5 and diem_lan_2 is null
