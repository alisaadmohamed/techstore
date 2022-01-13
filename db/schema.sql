CREATE TABLE cats (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    NAME varchar(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
   PRIMARY KEY(id)

);

CREATE TABLE products (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
  `desc` TEXT NOT NULL,
  price DECIMAL(8,2) NOT NULL,
  pieces_num SMALLINT NOT NULL,
  img varchar(255) NOT NULL,
  cat_id  INT UNSIGNED,
  created_at TIMESTAMP NOT NULL DEFAULT NOW(),
   PRIMARY KEY(id),
   FOREIGN KEY(cat_id) REFERENCES cats(id) ON DELETE SET NULL

);


CREATE TABLE orders (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  status ENUM('pending' , 'approved' , 'canceled') NOT NULL DEFAULT 'pending',
  created_at TIMESTAMP NOT NULL DEFAULT NOW(),


   PRIMARY KEY(id)

);

CREATE TABLE orders_details (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT,
order_id INT UNSIGNED,
products_id INT UNSIGNED,
qty INT NOT NULL,


   PRIMARY KEY(id),
  FOREIGN KEY(order_id) REFERENCES orders(id) ON DELETE SET NULL,
    FOREIGN KEY(products_id) REFERENCES products(id) ON DELETE SET NULL
);


CREATE TABLE admins (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  is_super ENUM( 'yes' , 'no') NOT NULL DEFAULT 'no',
  created_at TIMESTAMP NOT NULL DEFAULT NOW(),



   PRIMARY KEY(id)

);
