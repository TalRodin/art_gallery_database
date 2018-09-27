# art_gallery_database
(in process) Art Gallery Database (ER diagram, normalization, created in Phpmyadmin database, and in process of building simple website to be able to use this database)-mysql, html, css, php, javascript

![er](https://user-images.githubusercontent.com/32145723/46126269-96282c00-c1fa-11e8-8e1b-2ed4a00ce141.png)

Sentences:

One artist MAY BE creating ONE or MORE pieces of artwork.

One piece of artwork MUST BE created by ONE and ONLY ONE artist.

One piece of artwork MUST BE present at ONE and ONLY ONE art exhibition.

One art exhibition MAY BE presenting ONE or MORE pieces of artwork.

One exhibition MUST BE putting on ONE and ONLY ONE art exhibition.

One art exhibition MAY BE put on by ONE or MORE exhibitions.

One piece of artwork MAY BE rented via ONE or MORE rentals.

One rental MUST BE agreed upon to rent ONE and ONLY ONE piece of artwork.

One piece of artwork MAY BE ordered via ONE or MORE orders to buy.

One order to buy MUST BE agreed upon to buy ONE and ONLY ONE piece of artwork.

One rental MUST BE a rental agreement for ONE and ONLY ONE customer.

One customer MAY BE renting ONE or MORE rental.

One customer MAY BE placing ONE or MORE order to buy.

One order to buy MUST BE placed by ONE and ONLY ONE customer.

Relational Model:

Keys serve integral part in the normalization process. There are two types of keys: primary key (key) and foreign key (fk). The primary key is a unique identifier of each value in the table, with that said it cannot be changed and cannot be NULL. The good example of the primary key can be U.S. Social Security number. In many cases we will need to create these primary keys. The created primary keys are artificial keys. Such invented primary keys called surrogate primary keys. In our cases we invented primary keys for any table we have. The foreign key is the key in the table B, which is primary key in the different table A. The foreign keys let us to link together two tables.

Artist(Artist_ID (key), FirstName, LastName, BirthDate, BirthPlace, City, State, Zip, Phone_Number, Style)

Customer(Customer_ID (key), FirstName, LastName, PhoneNumber, Address, City, State, Zip, Country)

Exhibition( Exhibition_ID (key), Name, StartDate, EndDate, Country, City, State, Zip )

Order_To_Buy(OrderID (key), Order_Price, OrderDate, Art_ID (fk), Customer_ID (fk))

Rental(RentalID (key), Rental_Start_Date, Rental_End_Date, Rental_Price, Art_ID (fk), Customer_ID (fk))

Artwork(Art_ID (key), Year, Title, Price, Description, Type, Artist_ID (fk), RentalID (fk), OrderID (fk))

Art_Exhibition (Art_Id (fk)(key), Exhibition_Id (fk) (key) )

Normalization:

Normalization is the process of the eliminating the redundancies and other problems that can disrupt the integrity of the database. During normalization we will change the database according to the rules, which called normal forms. In this example we will consider the first three normal forms (but there are more than three normal forms). 

All above relations are in the first Normal Form (1NF) if each column contains one value and tables does not have repeating groups of related data. For example if the table has whole address (number of the building, street, apartment, zip code, state, city) in one line it will violate the first normal form. Another example of violating the first normal form would be having similar names of the columns for example Art_name_1, Art_name_2,… .

If a relation is in 2NF it means that the database is already in the 1NF and all non-key attributes are dependent upon all key attributes (primary key).

If a relation is in 3NF, it means that the database is in the 2NF and there are no transitive dependencies.

Artist(Artist_ID (key), FirstName, LastName, BirthDate, BirthPlace, City, State, Zip, Phone_Number, Style)

Key: Artist_ID

FD1: Artist_ID → FirstName, LastName, BirthDate, BirthPlace, City, State, Zip, Phone_Number, Style

FD2: Zip → City, State

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: this is not in 3N due to the existence of the transitive dependency

Artist_ID → FirstName, LastName, BirthDate, BirthPlace,Zip, Phone_Number, Style and Zip → City, State

Solution: Split the relation into two new relations named Artist_Address, Artist_Info:

Artist_Address(Zip, City, State)

FD1: Zip → City, State

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Artist_Info(Artist_ID, FirstName, LastName, BirthDate, BirthPlace, Zip, PhoneNumber, Style)

FD1: Artist_ID → FirstName, LastName, BirthDate, BirthPlace, Zip, PhoneNumber, Style

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Customer(Customer_ID (key), FirstName, LastName, PhoneNumber, Address, City, State, Zip, Country)

Key: Customer_ID

FD1: Customer_ID → FirstName, LastName, PhoneNumber, Address, City, State, Zip, Country

FD2: Zip → City, State, Country

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: this is not in 3N due to existence of transitive dependency

Customer_ID → FirstName, LastName, PhoneNumber, Address, Zip, Country and Zip → City, State, Country

Solution: Split User relation into two new relations named Customer_Address, Customer_Info:

Customer_Address(Zip, City, State, Country)

FD1: Zip → City, State, Country

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Customer_Info(Customer_ID, FirstName, LastName, PhoneNumber, Address, Zip)

FD1: Customer_ID → FirstName, LastName, PhoneNumber, Address, Zip)

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Exhibition(Exhibition_ID (key), Name, StartDate, EndDate, Country, City, State, Zip )

Key: Exhibition_ID

FD1: Exhibition_ID → Name, StartDate, EndDate, Country, City, State, Zip

FD2: Zip → Country, City, State

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: this is not in 3N due to existence of transitive dependency

Exhibition_ID → Name, Start_Date, End_Date, Zip and Zip → Country, City, State

Solution: Split User relation into two new relations named Exhibition_Address, Exhibition_Info:

Exhibition_Address(Zip(key), Country, City, State)

FD1: Zip → Country, City, State

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Exhibition_Info(Exhibition_ID(key), Name, StartDate, EndDate, Zip(fk))

FD1: Exhibition_ID → Name, Start_Date, End_Date, Zip

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Art_Exhibition(Exhibition_ID (fk), Art_ID (fk))

Order_To_Buy(OrderID (key), Order_Price, OrderDate, Art_ID (fk), Customer_ID (fk))

Key: OrderID

FD1: OrderID → Order_Price, OrderDate, Art_ID, Customer_ID

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Rental(RentalID (key), Rental_Start_Date, Rental_End_Date, Rental_Price, Art_ID (fk), Customer_ID (fk))

Key: RentalID

FD1: RentalID → Rental_Start_Date, Rental_End_Date, Rental_Price, Art_ID, Customer_ID

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency

Artwork(Art_ID (key), Year, Title, Price, Description, Type, Artist_ID (fk))

Key: Art_ID

FD1: Art_ID → Year, Title, Price, Description, Type, Artist_ID

1NF: Meets the definition of a relation

2NF: No partial Key dependencies

3NF: No transitive dependency


Final relations normalized to Third Normal Form:


Artist_Address(Zip(key), City, State)

Artist_Info(Artist_ID(key), First_Name, Last_Name, Birth_Date, Birth_Place, Zip(fk), Phone_Number, Style)

Customer_Address(Zip(key), City, State, Country)

Customer_Info(Customer_ID(key), First_Name, Last_Name, Phone_Number, Address, Zip(fk))

Exhibition_Address(Zip(key), Country, City, State)

Exhibition_Info(Exhibition_ID(key), Name, Start_Date, End_Date, Zip(fk))

Art_Exhibition( Exhibition_ID (fk)(key), Art_ID (fk)(key))

Order_To_Buy(Order_ID (key), Order_Price, Order_Date, Art_ID (fk), Customer_ID (fk))

Rental(Rental_ID (key), Rental_Start_Date, Rental_End_Date, Rental_Price, Art_ID (fk), Customer_ID (fk))

Artwork(Art_ID (key), Year, Title, Price, Description, Type, Artist_ID (fk), Order_ID (fk), Rental_ID (fk))
