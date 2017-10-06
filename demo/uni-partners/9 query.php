SELECT column1Name, column2Name, ... FROM tableName

INSERT INTO products VALUES (2001, 'PEC', 'Pencil 3B', 500, 0.52),
(NULL, 'PEC', 'Pencil 4B', 200, 0.62),
(NULL, 'PEC', 'Pencil 5B', 100, 0.73),
(NULL, 'PEC', 'Pencil 6B', 500, 0.47);


UPDATE accounts SET balance = balance - 100 WHERE name = 'Paul';

SELECT DISTINCT price AS `Distinct Price` FROM products;
+----------------+
| Distinct Price |
+----------------+
|           1.23 |
|           1.25 |
|           0.48 |
|           0.49 |
+----------------+


SELECT * FROM products ORDER BY price LIMIT 2;


SELECT productCode, COUNT(*) FROM products GROUP BY productCode;
+-------------+----------+
| productCode | COUNT(*) |
+-------------+----------+
| PEC         |        2 |
| PEN         |        3 |
+-------------+----------+


