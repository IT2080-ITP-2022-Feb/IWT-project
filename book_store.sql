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

CREATE TABLE Seller(
	S_ID cINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	S_dob date,
	Age INT,
	user_type varchar(10),
	S_Password varchar(256) NOT NULL
);


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


CREATE TABLE Category(
    catID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	catName varchar(30) NOT NULL,
	catDescription varchar(300)
);


CREATE TABLE Book(
	Book_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Author varchar(25),
	Book_name varchar(35),
	S_ID INT,
	catID INT,
	CONSTRAINT category_fk FOREIGN KEY (catID) REFERENCES Seller(catID) ON DELETE SET NULL,
	CONSTRAINT sellerID_fk FOREIGN KEY (S_ID) REFERENCES Seller(S_ID) ON DELETE SET NULL
);

CREATE TABLE Cart(
	C_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Quntity INT,
	Book_ID INT NOT NULL,
	CONSTRAINT bookID_fk FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID)
);


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


CREATE TABLE ContactUs(
	conusID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	name varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	mobile varchar(20) NOT NULL,
	message varchar(300) NOT NULL
);