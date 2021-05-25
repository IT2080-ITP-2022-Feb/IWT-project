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
	('Nadeesha', 'Dilshan', 'Wickramarathna', '1999-10-11', 'test@gmail.com', 'admin', 'test'),
	('Dinushika', 'Sewwandi', 'Dodanthenna' ,'1999-07-01', 'test@gmail.com', 'admin', 'test'),
	('Kavindu', 'Malshan', 'Madutharanga','1999-09-21', 'test@gmail.com', 'admin', 'test'),
	('Sameesha', 'Rashani', 'Kulasekara', '1999-10-21', 'test@gmail.com', 'admin', 'test'),
	('Dilki', 'Poornima', 'Welagedara','1999-12-18', 'test@gmail.com', 'admin', 'test');


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
	('Malsha','Ravihari','perera','1991-10-23', 'test@gmail.com', 'seller', 'test'),
	('Rashmi','Senarathna','gamage' ,'1999-05-06', 'test@gmail.com', 'seller', 'test'),
	('Kosala','Maduranga','withanage','1998-09-03', 'test@gmail.com', 'seller', 'test'),
	('Dilsha','Lakshani','bandara','1997-02-01', 'test@gmail.com', 'seller', 'test'),
	('Amandi','Pamudika','ekanayaka','1992-12-01', 'test@gmail.com', 'seller', 'test');



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
	('Suneth','Sampath','Perera','1993-10-15', 'test@gmail.com', 'buyer', 'test'),
	('Gimhana','Senarathna','Silva','1997-12-01', 'test@gmail.com', 'buyer', 'test'),
	('Kavindu','Maduranga','Eodanthanna','1995-06-18', 'test@gmail.com', 'buyer', 'test'),
	('Sameesha','Rashini','Rathnayaka','1993-11-20', 'test@gmail.com', 'buyer', 'test'),
	('Tharuka','Ekanayaka','Perera','1992-07-12', 'test@gmail.com', 'buyer', 'test');


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
	S_ID INT,
	catID INT,
	CONSTRAINT category_fk FOREIGN KEY (catID) REFERENCES Seller(catID) ON DELETE SET NULL,
	CONSTRAINT sellerID_fk FOREIGN KEY (S_ID) REFERENCES Seller(S_ID) ON DELETE SET NULL
);
INSERT INTO Book
	(Author, Book_name, S_ID, CatID,)
VALUES
	('Kiribathgoda Ghnananda', 'Sri sambundhathwaya' , 1, 1),
	('A.D.K.Rupasinha' , 'Genaral Knowladge' , 2, 2),
	('Umberto Eco ' , 'The Sea' , 3, 3),
	('Olga Tokarczuk' , 'Flights' , 4, 4),
	('Tara Westover' , 'Educated' , 5, 5);



CREATE TABLE Cart(
	C_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Quntity INT,
	Book_ID INT NOT NULL,
	CONSTRAINT bookID_fk FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID)
);
INSERT INTO Book
	(Quntity, Book_ID)
VALUES
	(2, 1),
	(1, 2),
	(1, 3),
	(3, 4),
	(4, 5);




CREATE TABLE Feedback(
	F_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	B_ID INT,
	Book_ID INT,
	comment varchar(25),
	Email varchar(20),
	Rate integer,
	F_time time,
	F_date date,
	constraint Feedback_FK1 FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID),
	constraint Feedback_FK1 FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID),
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
	constraint Feedback_FK1 FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID),
	constraint Feedback_FK1 FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID),
);
INSERT INTO Payment
	(B_ID, Book_ID, amount, pay_type, pymntDescription, P_time, P_date)
VALUES
	(1, 1, '700.00','cash on delivery',,'08:30:50','2021-01-01'),
	(2, 2, '350.00','cash on delivery',,'14:30:00','2018-12-15'),
	(3, 3, '1100.00','cash on delivery',,'16:43:40','2016-07-12'),
	(4, 4, '580.00','cash on delivery',,'12:15:00','2015-03-14'),
	(5, 5, '1000.00','cash on delivery',,'09:30:30','2015-01-23');



CREATE TABLE ContactUs(
	conusID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	name varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	mobile varchar(20) NOT NULL,
	message varchar(300) NOT NULL
);
INSERT INTO ContactUs
	(name, email, mobile, mobile, message)
VALUES
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message'),
	('Fname Lname', 'test@gmail.com', '0712345678', 'This is a message');

