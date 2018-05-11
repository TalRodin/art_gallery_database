CREATE DATABASE art;

CREATE TABLE artist_info( 
              Artist_ID int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
              First_Name varchar(100), 
              Last_Name varchar(100), 
              Birth_Date varchar(100), 
              Birth_Place varchar(100), 
              Zip varchar(20), 
              Phone_Number int(15), 
              Style varchar(100) 
);

CREATE TABLE artist_address( 
              Zip varchar(20) PRIMARY KEY, 
              City varchar(20), 
              State varchar(20) 
);

CREATE TABLE customer_info( 
              Customer_ID int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
              First_Name varchar(100), 
              Last_Name varchar(100), 
              Phone_Number int(15), 
              Address varchar(100), 
              Zip varchar(20) 
);

CREATE TABLE customer_address( 
              Zip varchar(20) PRIMARY KEY, 
              City varchar(20),
              State varchar(20), 
              Country varchar(20) 
);

CREATE TABLE exhibition_info( 
              Exhibition_ID int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
              Name varchar(100), 
              Start_Date varchar(100), 
              End_Date int(15), 
              Zip varchar(20)
);

CREATE TABLE exhibition_address( 
              Zip varchar(20) PRIMARY KEY, 
              City varchar(20), 
              State varchar(20),
              Country varchar(20)
);

CREATE TABLE art_exhibition( 
              Exhibition_ID int(10), 
              Art_ID int(10) 
);

CREATE TABLE order_to_buy( 
              Order_ID int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
              Order_Price varchar(20),
              Order_Date varchar(20), 
              Art_ID int(10), 
              Customer_ID  int(10) 
);

CREATE TABLE rental( 
             Rental_ID int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
             Rental_Start_Date varchar(20), 
             Rental_End_Date varchar(20), 
             Rental_Price varchar(20),
             Customer_ID int(10), 
             Art_ID int(10) 
);


CREATE TABLE artwork( 
             Art_ID  int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
             Year  int(20), 
             Title  varchar(20), 
             Price  varchar(20), 
             Description  varchar(200), 
             Type  varchar(20), 
             Artist_ID   int(10), 
             Order_ID  int(10), 
             Rental_ID   int(10) 
);

ALTER TABLE art_exhibition 
ADD FOREIGN KEY (Exhibition_ID) REFERENCES  exhibition_info(Exhibition_ID);

ALTER TABLE art_exhibition 
ADD FOREIGN KEY (Art_ID)  REFERENCES artwork(Art_ID);

ALTER TABLE rental 
ADD FOREIGN KEY (Customer_ID)  REFERENCES customer_info(Customer_ID);

ALTER TABLE order_to_buy 
ADD FOREIGN KEY (Customer_ID)  REFERENCES customer_info(Customer_ID);

ALTER TABLE rental 
ADD FOREIGN KEY (Art_ID) REFERENCES artwork(Art_ID);

ALTER TABLE order_to_buy
ADD FOREIGN KEY (Art_ID)  REFERENCES artwork(Art_ID);

ALTER TABLE artist_info 
ADD FOREIGN KEY (Zip)  REFERENCES  artist_address(Zip);

ALTER TABLE customer_info 
ADD FOREIGN KEY (Zip)  REFERENCES  customer_address(Zip);

ALTER TABLE exhibition_info 
ADD FOREIGN KEY (Zip)  REFERENCES  exhibition_address(Zip);
