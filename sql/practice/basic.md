Tạo một database mới:
```sql
CREATE DATABASE databasename;
```

Xóa một database hiện có:
```sql
DROP DATABASE databasename;
```

Backup một database:
```sql
BACKUP DATABASE databasename
TO DISK = 'filepath';
```

SQL Backup WITH DIFFERENTIAL(Chỉ backup những thay đổi cuối cùng):
```sql
BACKUP DATABASE databasename
TO DISK = 'filepath'
WITH DIFFERENTIAL;
```

Tạo một bảng:
```sql
CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
);
```

Xóa một bảng:
```sql
DROP TABLE table_name;
```

Xóa dữ liệu trong bảng nhưng không muốn xóa bảng:
```sql
TRUNCATE TABLE table_name;
```
