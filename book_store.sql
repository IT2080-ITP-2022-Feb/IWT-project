CREATE TABLE Admin(
	A_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	A_dob date,
	A_email varchar(50) NOT NULL,
	user_type varchar(10),
	A_Password varchar(256) NOT NULL
);


INSERT INTO Admin
	( F_name, M_name, L_name, A_dob, A_email, user_type, A_password)
VALUES
	('Nadeesha', 'Dilshan', 'Wickramarathna', '1999-10-11', 'Nadeesha@gmail.com', 'admin', 'test'),
	('Dinushika', 'Sewwandi', 'Dodanthenna' ,'1999-07-01', 'Dinushika@gmail.com', 'admin', 'test'),
	('Kavindu', 'Malshan', 'Madutharanga','1999-09-21', 'Kavindu@gmail.com', 'admin', 'test'),
	('Sameesha', 'Rashani', 'Kulasekara', '1999-10-21', 'Sameesha@gmail.com', 'admin', 'test'),
	('Dilki', 'Poornima', 'Welagedara','1999-12-18', 'Dilki@gmail.com', 'admin', 'test');


CREATE TABLE Seller(
	S_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	S_dob date,
	S_email varchar(50) NOT NULL,
	user_type varchar(10),
	S_Password varchar(256) NOT NULL
);

INSERT INTO Seller
	(F_name, M_name, L_name, S_dob, S_email, user_type, S_password)
VALUES
	('Malsha','Ravihari','perera','1991-10-23', 'Malsha@gmail.com', 'seller', 'test'),
	('Rashmi','Senarathna','gamage' ,'1999-05-06', 'Rashmi@gmail.com', 'seller', 'test'),
	('Kosala','Maduranga','withanage','1998-09-03', 'Kosala@gmail.com', 'seller', 'test'),
	('Dilsha','Lakshani','bandara','1997-02-01', 'Dilsha@gmail.com', 'seller', 'test'),
	('Amandi','Pamudika','ekanayaka','1992-12-01', 'Amandi@gmail.com', 'seller', 'test');



CREATE TABLE Buyer(
	B_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	B_dob date,
	B_email varchar(50) NOT NULL,
	user_type varchar(10),
	B_Password varchar(256) NOT NULL
);

INSERT INTO Buyer
	( F_name, M_name, L_name, B_dob, B_email, user_type, B_password)
VALUES
	('Suneth','Sampath','Perera','1993-10-15', 'Suneth@gmail.com', 'buyer', 'test'),
	('Gimhana','Senarathna','Silva','1997-12-01', 'Gimhana@gmail.com', 'buyer', 'test'),
	('Kavindu','Maduranga','Eodanthanna','1995-06-18', 'Kavindu@gmail.com', 'buyer', 'test'),
	('Sameesha','Rashini','Rathnayaka','1993-11-20', 'Sameesha@gmail.com', 'buyer', 'test'),
	('Tharuka','Ekanayaka','Perera','1992-07-12', 'Tharuka@gmail.com', 'buyer', 'test');


CREATE TABLE Category(
    catID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	catName varchar(30) NOT NULL,
	catDescription varchar(300)
);
INSERT INTO Category
	(catName,catDescription)
VALUES
	('Buddihist Book', 'This is a Category Description'),
	('IT & Information Book', 'This is a Category Description'),
	('Literature Book', 'This is a Category Description'),
	('Novel', 'This is a Category Description'),
	('Educational Book', 'This is a Category Description');




CREATE TABLE Book(
	Book_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Author varchar(25),
	Book_name varchar(35),
	Book_img varchar(300),
	S_ID INT,
	catID INT,
	CONSTRAINT bookCategoryID_fk FOREIGN KEY (catID) REFERENCES Category(catID) ON DELETE SET NULL,
	CONSTRAINT bookSellerID_fk FOREIGN KEY (S_ID) REFERENCES Seller(S_ID) ON DELETE SET NULL
);

INSERT INTO Book
	(Author, Book_name, Book_img, S_ID, CatID)
VALUES
	('Kiribathgoda Ghnananda', 'Sri sambundhathwaya' , 'book1.jpg', 1, 1),
	('A.D.K.Rupasinha', 'Genaral Knowladge' , 'book2.jpg', 2, 2),
	('Umberto Eco' , 'The Sea' , 'book3.jpg', 3, 3),
	('Olga Tokarczuk' , 'Flights' , 'book4.jpg', 4, 4),
	('Tara Westover' , 'Educated' , 'book5.jpg', 5, 5);



CREATE TABLE Cart(
	C_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	quantity INT,
	Book_ID INT NOT NULL,
	B_ID INT,
	CONSTRAINT CartBookID_fk FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID),
	CONSTRAINT CartB_ID_fk FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID)
);
INSERT INTO Cart
	(quantity, Book_ID, B_ID)
VALUES
	(2, 1, 1),
	(1, 2, 2),
	(1, 3, 3),
	(3, 4, 4),
	(4, 5, 5);




CREATE TABLE Feedback(
	F_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	B_ID INT,
	Book_ID INT,
	comment varchar(25),
	Email varchar(20),
	Rate integer,
	F_time time,
	F_date date,
	constraint feedBuyerID_fk FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID),
	constraint feedBookID_fk FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID)
);

INSERT INTO Feedback
	(B_ID, Book_ID, comment, Email, Rate, F_time, F_date)
VALUES
	(1, 1, 'Good','suneth123@gmail.com', 2, '10:30:50','2021-01-07'),
	(2, 2, 'Great','gimhana23@gmail.com', 3, '14:40:00','2018-12-20'),
	(3, 3, 'Bad','kavindu@gmail.com', 4, '16:13:40','2016-07-21'),
	(4, 4, 'excellent','sameesha25@gmail.com', 1, '12:50:00','2015-03-21'),
	(5, 5, 'Good','dilki123@gmail.com', 5, '09:10:30','2015-01-28');




CREATE TABLE Payment(
	P_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	B_ID INT,
	Book_ID INT,
	amount real,
	pay_type varchar(20),
	pymntDescription varchar(300),
	P_time time,
	P_date date,
	constraint payBuyerID FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID),
	constraint payBookID FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID)
);

INSERT INTO Payment
	(B_ID, Book_ID, amount, pay_type, pymntDescription, P_time, P_date)
VALUES
	(1, 1, '700.00', 'cash on delivery', 'This is a payment Description', '08:30:50' ,'2021-01-01'),
	(2, 2, '350.00', 'cash on delivery', 'This is a payment Description', '14:30:00' ,'2018-12-15'),
	(3, 3, '1100.00', 'cash on delivery', 'This is a payment Description', '16:43:40' ,'2016-07-12'),
	(4, 4, '580.00', 'cash on delivery', 'This is a payment Description', '12:15:00' ,'2015-03-14'),
	(5, 5, '1000.00', 'cash on delivery', 'This is a payment Description', '09:30:30' ,'2015-01-23');



CREATE TABLE ContactUs(
	conusID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	name varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	mobile varchar(20) NOT NULL,
	message varchar(300) NOT NULL
);
INSERT INTO ContactUs
	(name, email, mobile, message)
VALUES
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message');

