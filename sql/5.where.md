# Mệnh đề WHERE trong SQL
#### Mệnh đề này dùng để lọc các bản ghi.
#### Nó chỉ sử dụng để trích xuất những bản ghi đáp ứng một điều kiện cụ thể.

# SYNTAX
```sql
SELECT column1, column2, ...
FROM table_name
WHERE condition;
```
> **_Lưu ý:_** Mệnh đề WHERE không chỉ được sử dụng trong câu lệnh SELECT, nó còn được sử dụng trong các câu lệnh UPDATE, DELETE,...

#### ( Bảng Class )
|ID         | Student    | Point        |
|-----------| -----------| -----------  | 
|   1       | Huu        |      1       |
| 2         | Giang      |      2       |
| 3         | Vinh       |      1       |
| 4         | Huu        |      3       |

# Ví Dụ
#### Ta muốn chọn tất cả các sinh viên có điểm là 1:
```sql
SELECT * FROM Class
WHERE Point='1';
```

# Các văn bản và số
#### Các văn bản sẽ phải đi kèm là dấu ngoặc kép.
#### Nhưng các số thì không cần.

## Ví dụ:
```sql
SELECT * FROM Class
WHERE ID=1;
```

# Các toán tử trong mệnh đề WHERE
|Toán tử    | Mô tả      | 
|-----------| -----------| 
|   =      | Bằng         |    
|     >         | Lớn hơn      |      
| <         | Nhỏ hơn       |      
| >=         | Lớn hơn hoặc bằng        |    
|<=|Nhỏ hơn hoặc bằng|
|<>|Không bằng|
|BETWEEN|Giữa một phạm vi nhất định|
|LIKE|Tìm kiếm một mẫu|
|IN|Để chỉ định nhiều giá trị có thể có trong một cột|