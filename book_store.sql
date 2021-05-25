CREATE TABLE Admin(
	A_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	A_dob date,
	Age INT,
	user_type varchar(10),
	A_Password varchar(256) NOT NULL
);


INSERT INTO Admin
	( F_name, M_name, L_name,A_dob,Age,user_type,A_password)
VALUES
	('Nadeesha', 'Dilshan', 'Wickramarathna', '1999-10-11', 22,'admin', ),
	('Dinushika', 'Sewwandi', 'Dodanthenna' ,'1999-07-01',22,'admin', ),
	('Kavindu', 'Malshan', 'Madutharanga','1999-09-21',22,'admin',),
	('Sameesha', 'Rashani', 'Kulasekara', '1999-10-21',22,'admin', ),
	('Dilki', 'Poonima', 'Welagedara','1999-12-18',22, 'admin', );


CREATE TABLE Seller(
	S_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	S_dob date,
	Age INT,
	user_type varchar(10),
	S_Password varchar(256) NOT NULL
);

INSERT INTO Seller
	( F_name, M_name, L_name,S_dob,Age,user_type,S_password)
VALUES
	('Malsha','Ravihari','perera','1991.10.23',34,'seller', ),
	('Rashmi','Senarathna','gamage' ,'1999.05.06',22,'seller', ),
	('Kosala','Maduranga','withanage','1998.09.03', 23,'seller',),
	('Dilsha','Lakshani','bandara','1997.02.01',25 ,'seller', ),
	('Dilki', 'Amandi','Pamudika','ekanayaka','1992.12.01',29,'seller', );



CREATE TABLE Buyer(
	B_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	B_dob date,
	Age INT,
	user_type varchar(10),
	B_Password varchar(256) NOT NULL
);

INSERT INTO Buyer
	( F_name, M_name, L_name,B_dob,Age,user_type,B_password)
VALUES
	('Suneth','Sampath','Perera','1993-10-15',20 ,'buyer', ),
	('Gimhana','Senarathna','Silva','1997-12-01',28,'buyer', ),
	('Kavindu','Maduranga','Eodanthanna','1995-06-18', 45,'buyer',),
	('Sameesha','Rashini','Rathnayaka','1993-11-20',29,'buyer', ),
	('Dilki','Tharuka','Ekanayaka','1992-07-12',42,'buyer', );


CREATE TABLE Category(
    catID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	catName varchar(30) NOT NULL,
	catDescription varchar(300)
);
INSERT INTO Category
	(catName,catDescription)
VALUES
	('Buddihist Book'),
	('IT & Information Book'),
	('Literature Book'),
	('Novel'),
	('Educational Book');




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
	( Author, Book_name, S_ID,CatID,)
VALUES
	('Kiribathgoda Ghnananda', 'Sri sambundhathwaya' , 'Buddihist Book' ),
	('A.D.K.Rupasinha' , 'Genaral Knowladge' , 'IT & Information Book' ),
	('Umberto Eco ' , 'The Sea' , 'Literature Book' ),
	('Olga Tokarczuk' , 'Flights' , 'Novel' ),
	('Tara Westover' , 'Educated' , 'Educational Book' );



CREATE TABLE Cart(
	C_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Quntity INT,
	Book_ID INT NOT NULL,
	CONSTRAINT bookID_fk FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID)
);
INSERT INTO Book
	( Quntity,Book_ID)
VALUES
	(2),
	(1),
	(1),
	(3),
	(4);




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
	(comment,Email,Rate,F_time,F_date)
VALUES
	('Good','suneth123@gmail.com',2,'10:30:50','2021-01-07'),
	('Great','gimhana23@gmail.com',3,'14:40:00','2018-12-20'),
	('Bad','kavindu@gmail.com',4,,'16:13:40','2016-07-21'),
	('excellent','sameesha25@gmail.com',1,'12:50:00','2015-03-21'),
	('Good','dilki123@gmail.com',5,'09:10:30','2015-01-28');




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
	(amount,pay_type,pymntDescription,P_time,P_date)
VALUES
	('700.00','cash on delivery',,'08:30:50','2021-01-01'),
	('350.00','cash on delivery',,'14:30:00','2018-12-15'),
	('1100.00','cash on delivery',,'16:43:40','2016-07-12'),
	('580.00','cash on delivery',,'12:15:00','2015-03-14'),
	('1000.00','cash on delivery',,'09:30:30','2015-01-23');



CREATE TABLE ContactUs(
	conusID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	name varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	mobile varchar(20) NOT NULL,
	message varchar(300) NOT NULL
);
INSERT INTO ContactUs
	(name,email,mobile,mobile,message)
VALUES
	(''),
	(),
	(),
	(),
	();

