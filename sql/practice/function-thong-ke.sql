create database buoi5

use buoi5

create table nhan_vien(
                          ma int auto_increment,
                          ho_ten nvarchar(50) not null,
                          ngay_sinh date not null,
                          gioi_tinh bit default 0 not null,
                          ngay_vao_lam date default curdate(),
                          nghe_nghiep nvarchar(50) not null,
                          luong int not null,
                          check(luong >= 0),
                          check(length(ho_ten) >= 2),
                          check(year(curdate()) - year(ngay_sinh) > 18),
check(nghe_nghiep in('IT',N'kế toán',N'doanh nhân thành đạt')),
primary key (ma)
)

drop table nhan_vien
select * from nhan_vien

-- insert 5 nhân viên
    insert into nhan_vien(ho_ten, ngay_sinh, gioi_tinh, ngay_vao_lam, nghe_nghiep, luong)
values('Phùng Vinh', '1991-09-09', default, default, 'kế toán', 50)

-- Tháng này sinh nhật sếp, sếp tăng lương cho nhân viên sinh tháng này thành 100. (*: tăng lương cho mỗi bạn thêm 100)
update nhan_vien
set luong = 100
where month(ngay_sinh) = month(curdate())

-- lấy ra những nhân viên có tháng sinh trùng với sếp (tháng này - tháng 9)
select * from nhan_vien
where
    month(ngay_sinh) = month(curdate())

-- thích thì tăng cho mỗi nhân viên thêm 100
update
    nhan_vien
set
    luong = luong + 100

-- đuổi việc những ai có lương dưới 50
delete from nhan_vien
where luong < 50

-- đuổi những ai có mức lương có mức lương ban đầu là 50
delete from nhan_vien
where
            luong < 50 + 100
        and
        month(ngay_sinh) = month(curdate())

-- đuổi những nhân viên mới vào làm dưới 2 tháng
delete from nhan_vien
where TIMESTAMPDIFF(year,ngay_vao_lam, curdate()) < 2
  and ngay_vao_lam < curdate()

select * from nhan_vien

select curdate()

select * from nhan_vien
where month(ngay_vao_lam) = 9

select * from nhan_vien
where TIMESTAMPDIFF(year,ngay_vao_lam, curdate()) < 2

select * from nhan_vien
where ngay_vao_lam < curdate()

    insert into nhan_vien(ho_ten, ngay_sinh, gioi_tinh, ngay_vao_lam, nghe_nghiep, luong)
values('Nguyen Du', '1991-09-09', default, '2021-08-08', 'kế toán', 50)

-- Lấy ra tổng tiền mỗi tháng sếp phải trả cho nhân viên. (*: theo từng nghề)
select nghe_nghiep, sum(luong) as tong_lupng_moi_thang_phai_chi
from nhan_vien
group by nghe_nghiep

-- lấy ra những nhân viên mới vào làm
select * from nhan_vien
where TIMESTAMPDIFF(day,ngay_vao_lam, curdate()) =

-- lấy 3 nhân viên cũ nhất
select *
from nhan_vien
order by ngay_vao_lam desc
limit 3

