create table Sign_In(
	Sign_In_ID char(6) NOT NULL,
	Sign_In_U_N varchar(20),
	User_PW varchar(35),
	constraint Sign_In_PK PRIMARY KEY (Sign_In_ID)
);



create table Manager(
	M_ID char(6) NOT NULL,
	PW varchar(20),
	M_dob date,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	age integer,
	constraint Manager_PK PRIMARY KEY (M_ID)
);



create table Admin(
	A_ID char(6) NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	A_dob date,
	Age integer,
	Sign_In_ID char(6) NOT NULL,
	M_ID char(6) NOT NULL,
	constraint Admin_PK PRIMARY KEY (A_ID),
	constraint Admin_FK1 FOREIGN KEY (Sign_In_ID) REFERENCES Sign_In(Sign_In_ID),
	constraint Admin_FK2 FOREIGN KEY (M_ID) REFERENCES Manager(M_ID)
);

create table Admin_Contact(
	A_ID char(6) NOT NULL,
	p_number integer NOT NULL,
	constraint Admin_Contact_PK PRIMARY KEY (A_ID,p_number),
	constraint Admin_Contact_FK FOREIGN KEY (A_ID) REFERENCES Admin(A_ID)
);

create table Admin_Email(
	A_ID char(6) NOT NULL,
	Email varchar(25) NOT NULL,
	constraint Admin_Email_PK PRIMARY KEY (A_ID,Email),
	constraint Admin_Email_FK FOREIGN KEY (A_ID) REFERENCES Admin(A_ID)
);


create table Admin_Address(
	A_ID char(6) NOT NULL,
	Street varchar(20) NOT NULL,
	City varchar(25),
	State varchar(20),
	Country varchar(25),
	constraint Admin_Address_PK PRIMARY KEY (A_ID,Street),
	constraint Admin_Address_FK FOREIGN KEY (A_ID) REFERENCES Admin(A_ID)

);



create table Buyer(
	B_ID char(6) NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	B_dob date,
	Age integer,
	A_ID char(6) NOT NULL,
	Sign_In_ID char(6) NOT NULL,
	constraint Buyer_PK PRIMARY KEY (B_ID),
	constraint Buyer_FK1 FOREIGN KEY (A_ID) REFERENCES Admin(A_ID),
	constraint Buyer_FK2 FOREIGN KEY (Sign_In_ID) REFERENCES Sign_In(Sign_In_ID)	
);

create table Buyer_Contact(
	B_ID char(6) NOT NULL,
	p_number integer NOT NULL,
	constraint Buyer_Contact_PK PRIMARY KEY (B_ID,p_number),
	constraint Buyer_Contact_FK FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID)
);

create table Buyer_Email(
	B_ID char(6) NOT NULL,
	Email varchar(25) NOT NULL,
	constraint Buyer_Email_PK PRIMARY KEY (B_ID,Email),
	constraint Buyer_Email_FK FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID)
);


create table Buyer_Address(
	B_ID char(6) NOT NULL,
	Street varchar(50) NOT NULL,
	City varchar(50),
	State varchar(25),
	Country varchar(50),
	constraint Buyer_Address_PK PRIMARY KEY (B_ID,Street),
	constraint Buyer_Address_FK FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID)
);



create table Seller(
	S_ID char(6) NOT NULL,
	F_name varchar(25),
	M_name varchar(25),
	L_name varchar(25),
	S_dob date,
	Age integer,
	A_ID char(6) NOT NULL,
	Sign_In_ID char(6) NOT NULL,
	constraint Seller_PK PRIMARY KEY(S_ID),
	constraint Seller_FK1 FOREIGN KEY(A_ID) REFERENCES Admin(A_ID),
	constraint Seller_FK2 FOREIGN KEY(Sign_In_ID) REFERENCES Sign_In(Sign_In_ID)
	
);


create table Seller_Contact(
	S_ID char(6) NOT NULL,
	p_number integer NOT NULL,
	constraint Seller_Contact_PK PRIMARY KEY (S_ID,p_number),
	constraint Seller_Contact_FK FOREIGN KEY (S_ID) REFERENCES Seller(S_ID)
);

create table Seller_Email(
	S_ID char(6) NOT NULL ,
	Email varchar(25),
	constraint Seller_Email_PK PRIMARY KEY (S_ID,Email),
	constraint Seller_Email_FK FOREIGN KEY (S_ID) REFERENCES Seller(S_ID)
);


create table Seller_Address(
	S_ID char(6) NOT NULL,
	Street varchar(50),
	City varchar(50),
	State varchar(100),
	Country varchar(50),
	constraint Seller_Address_PK PRIMARY KEY (S_ID,Street),
	constraint Seller_Address_FK FOREIGN KEY (S_ID) REFERENCES Seller(S_ID)
);





create table Cart(
	C_ID char(6) NOT NULL,
	Title varchar(20),
	Quntity integer,
	B_ID char(6) NOT NULL,
	constraint Cart_PK PRIMARY KEY (C_ID)
);




create table Feedback(
	B_ID char(6) NOT NULL,
	comment varchar(25),
	Email varchar(20),
	Rate integer,
	B_name varchar(25),
	F_time time,
	F_date date,
	A_ID char(6) NOT NULL,
	constraint Feedback_FK1 FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID),
	constraint Feedback_FK2 FOREIGN KEY (A_ID) REFERENCES Admin(A_ID)
);


create table Book(
	Book_ID char(6) NOT NULL,
	Author varchar(25),
	Book_name varchar(35),
	Book_type varchar(30),
	Book_rate integer,
	S_ID char(6) NOT NULL,
	A_ID char(6) NOT NULL,
	C_ID char(6) NOT NULL,
	constraint Book_PK PRIMARY KEY (Book_ID),
	Constraint Book_FK1 FOREIGN KEY (S_ID) REFERENCES Seller(S_ID),
	constraint Book_FK2 FOREIGN KEY (A_ID) REFERENCES Admin(A_ID),
	constraint Book_FK3 FOREIGN KEY (C_ID) REFERENCES Cart(C_ID)
);


create table Payment(
	P_ID char(6) NOT NULL,
	P_type char(6),
	Total_price Real,
	B_name varchar(20),
	Book_name varchar(35),
	C_ID char(6) NOT NULL,
	M_ID char(6) NOT NULL,
	constraint Payment_PK PRIMARY KEY (P_ID),
	constraint Payment_FK1 FOREIGN KEY (C_ID) REFERENCES Cart(C_ID),
	constraint Payment_FK2 FOREIGN KEY (M_ID) REFERENCES Manager(M_ID)
);

create table Manager_Contact(
	M_ID char(6) NOT NULL,
	p_number integer NOT NULL,
	constraint Manager_Contact_PK PRIMARY KEY (M_ID,p_number),
	constraint Manager_Contact_FK FOREIGN KEY (M_ID) REFERENCES Manager(M_ID)
);


create table Manager_Email(
	M_ID char(6) NOT NULL,
	Email varchar(25) NOT NULL,
	constraint Manager_Email_PK PRIMARY KEY (M_ID,Email),
	constraint Manager_Email_FK FOREIGN KEY (M_ID) REFERENCES Manager (M_ID)
);

create table Manager_Address(
	M_ID char(6) NOT NULL,
	Street varchar(50) NOT NULL,
	City varchar(25),
	State varchar(50),
	Country varchar(50),
	constraint Manager_Address_PK PRIMARY KEY (M_ID,Street),
	constraint Manager_Address_FK FOREIGN KEY (M_ID) REFERENCES Manager (M_ID)
);


create table Buyer_Book(
	B_ID char(6) NOT NULL,
	Book_ID char(6) NOT NULL,
	constraint Buyer_Book_PK PRIMARY KEY (B_ID,Book_ID),
	constraint Buyer_Book_FK1 FOREIGN KEY (B_ID) REFERENCES Buyer(B_ID),
	constraint Buyer_Book_FK2 FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID)
);


/*Insert values into Sign_In table*/

insert into Sign_In values ('k0001','IshanM','Ishan@123');
insert into Sign_In values ('k0002','DilshanD','dilshan@123');
insert into Sign_In values ('k0003','NuwangaK','Nuwanga@123');
insert into Sign_In values ('k0004','DeshanP','deshanp@123');
insert into Sign_In values ('k0005','MadushanN','Pa$$w0rd');


/*Insert values into Cart table*/

insert into Cart values ( 'c0001' , 'Sri sambundhathwaya', 2, "b0001");
insert into Cart values ( 'c0002' , 'Genaral Knowladge' , 1, "b0002");
insert into Cart values ( 'c0003' , 'The Sea',1, "b0003");
insert into Cart values ( 'c0004' , 'Flights' , 3, "b0004");
insert into Cart values ( 'c0005' , 'Educated' ,4, "b0005");


-- /*Insert values into Manager table*/



insert into Manager values ( 'm0001','11uf384s','1996.05.02','Akila','Sampath','Perera',26);
insert into Manager values ( 'm0002','a23q748q','1997.10.31',' Manoj','Ravihara','Samarasekara',23);
insert into Manager values ( 'm0003','3rh442hl','1993.04.01','Thushara','Thiwanka','Silva',29);
insert into Manager values ( 'm0004','15hfj85i','1992.11.15','Praveen','Dakshina','Premarathna',20);
insert into Manager values ( 'm0005','ehhw5525','1996.07.21','damith','Nimeshan','Gunasekara',26);


/*Insert values into Admin table*/ 

insert into Admin values ('a0001' , 'Nadeesha' , 'Dilshan' , 'Wickramarathna','1999-10-11',22,'k0001','m0001');
insert into Admin values ('a0002' , 'Dinushika' , 'Sewwandi' , 'Dodanthenna','1999-07-01',22,'k0002','m0002');
insert into Admin values ('a0003' , 'Kavindu' , 'Malshan' , 'Madutharanga','1999-09-21',22,'k0003','m0003' );
insert into Admin values ('a0004' , 'Sameesha' , 'Rashani' , 'Kulasekara','1999-10-21',22,'k0004','m0004');
insert into Admin values ('a0005' , 'Dilki', 'Poonima' , 'Welagedara','1999-12-18',22,'k0005','m0005');


insert into Admin_Contact values ('a0001',0768113682);
insert into Admin_Contact values ('a0002',0773052010);
insert into Admin_Contact values ('a0003',0774576056);
insert into Admin_Contact values ('a0004',0704590872);
insert into Admin_Contact values ('a0005',0713425833);


insert into Admin_Email values ('a0001','sameesha17@gmail.com');
insert into Admin_Email values ('a0002','dinushika15@gmail.com');
insert into Admin_Email values ('a0003','kavindu16@gmail.com');
insert into Admin_Email values ('a0004','nadeesha14@gmail.com');
insert into Admin_Email values ('a0005','dilki18@gmail.com');


insert into Admin_Address values ('a0001','23/2 north hunuwala' , 'opanayake' ,'Balangoda','Sri Lanka');
insert into Admin_Address values ('a0002', '23/A Mahamewna Road' , 'Udaellepola' , 'Balangoda' ,'Sri Lanka');
insert into Admin_Address values ('a0003','308/5 Kaduruoya Road' , 'Bope' , 'Padukka' ,'Sri Lanka');
insert into Admin_Address values ('a0004','130/1 Kamburawala','Baduraliya','Mathugama','Sri Lanka');
insert into Admin_Address values ('a0005','35/1 Udahawatta' , 'Hungampala' ,'Moronthota','SriLanka');

/*Insert values into Buyer table*/

insert into Buyer values ('b0001','Suneth','Sampath','Perera','1993-10-15',20 ,'a0001','k0001');
insert into Buyer values ('b0002','Gimhana','Senarathna','Silva','1997-12-01',28,'a0002','k0002');
insert into Buyer values ('b0003','Kavindu','Maduranga','Eodanthanna','1995-06-18', 45,'a0003','k0003' );
insert into Buyer values ('b0004','Sameesha','Rashini','Rathnayaka','1993-11-20',29,'a0004','k0004');
insert into Buyer values ('b0005','Dilki','Tharuka','Ekanayaka','1992-07-12',42,'a0005','k0005');



insert into Buyer_Contact values ('b0001',0774368850);
insert into Buyer_Contact values ('b0002',0773055010);
insert into Buyer_Contact values ('b0003',0774586056);
insert into Buyer_Contact values ('b0004',0704290872);
insert into Buyer_Contact values ('b0005',0774576059);


insert into Buyer_Email values ('b0001' , 'suneth@gmail.com');
insert into Buyer_Email values ('b0002' , 'gimahana@gmail.com');
insert into Buyer_Email values ('b0003' , 'kavindu@gmail.com');
insert into Buyer_Email values ('b0004' , 'sameesha@gmail.com');
insert into Buyer_Email values ('b0005' , 'dilki@gmail.com');


insert into Buyer_Address values('b0001','25/6','Wewthenna','Rathnapura','Sri Lanka');
insert into Buyer_Address values('b0002','150/A','Mawanella','Rathnapura','Sri Lanka');
insert into Buyer_Address values('b0003','45/C','Awissawella','Trincomalee','Sri Lanka');
insert into Buyer_Address values('b0004','135/B','Gampola','Kandy','Sri Lanka');
insert into Buyer_Address values('b0005','23/A','Elapatha','Rathnapura','Sri Lanka');




/*Insert values into Seller table*/

insert into Seller values ('s0001','Malsha','Ravihari','perera','1991.10.23',34,'a0001','k0001');
insert into Seller values ('s0002','Rashmi','Senarathna','gamage' ,'1999.05.06',22,'a0002','k0001');
insert into Seller values ('s0003','Kosala','Maduranga','withanage','1998.09.03', 23, 'a0003','k0003');
insert into Seller values ('s0004','Dilsha','Lakshani','bandara','1997.02.01',25 ,'a0004','k0004');
insert into Seller values ('s0005','Amandi','Pamudika','ekanayaka','1992.12.01',29,'a0005','k0005');


insert into Seller_Contact values ('s0001' , 0779368850);
insert into Seller_Contact values ('s0002' , 0713055010);
insert into Seller_Contact values ('s0003' , 0755586056);
insert into Seller_Contact values ('s0004' , 0774290872);
insert into Seller_Contact values ('s0005' , 0774588059);


insert into Seller_Email values ('s0001' , 'malsha@gmail.com');
insert into Seller_Email values ('s0002' , 'rashmi@gmail.com');
insert into Seller_Email values ('s0003' , 'kosala@gmail.com');
insert into Seller_Email values ('s0004' , 'dilsha@gmail.com');
insert into Seller_Email values ('s0005' , 'amandi@gmail.com');


insert into Seller_Address values ('s0001' ,'180/B','Gampola','Kandy','Sri Lanka');
insert into Seller_Address values ('s0002' ,'120/C','Balamgoda','Rathnapura','Sri Lanka');
insert into Seller_Address values ('s0003' ,'35/B','Welimanana','Trincomalee','Sri Lanka');
insert into Seller_Address values ('s0004' ,'20/A','Wewalhinna','Badulla','Sri Lanka'); 
insert into Seller_Address values ('s0005' ,'130/A','Halloluwa','Kandy','Sri Lanka');




/*Insert values into Feedback table*/

insert into Feedback values ('b0001','Good','suneth123@gmail.com',2,'Suneth','08:30:50','2021-01-01','a0001');
insert into Feedback values ('b0002','Great','gimhana23@gmail.com',3,'Gimhan','03:30:00','2018-12-15','a0002');
insert into Feedback values ('b0003','Bad','kavindu@gmail.com',4,'Kavindu','16:43:40','2016-07-12','a0003');
insert into Feedback values ('b0004','excellent','sameesha25@gmail.com',1,'Sameesha','12:15:00','2015-03-14','a0004');
insert into Feedback values ('b0005','Good','dilki123@gmail.com',5,'Dilki','09:30:30','2015-01-23','a0005');



/*Insert values into Book table*/

insert into Book values ( 'd0001' , 'Kiribathgoda Ghnananda' , 'Sri sambundhathwaya' , 'Buddihist Book' , 3 , 's0001' , 'a0001' , 'c0001'); 
insert into Book values ( 'd0002' , 'A.D.K.Rupasinha' , 'Genaral Knowladge' , 'IT & Informatin Book' , 4 , 's0002' , 'a0002' , 'c0002');
insert into Book values ( 'd0003' , 'Umberto Eco ' , 'The Sea' , 'Literature Book' ,1,'s0003','a0003','c0003');
insert into Book values ( 'd0004' , 'Olga Tokarczuk' , 'Flights' , 'Novel' , 3 , 's0004' , 'a0004' , 'c0004');   
insert into Book values ( 'd0005' , 'Tara Westover' , 'Educated' , 'Educational Book' , 5 , 's0005' , 'a0005' , 'c0005');



-- /*Insert values into payment table*/

insert into Payment values ('p0001' , 'cash' , '700.00' ,'suneth' , 'Sri sambundhathwaya' , 'c0001' , 'm0001');
insert into Payment values ('p0002' , 'cash' , '350.00' , 'gimhana' , 'Genaral Knowladge' , 'c0002' , 'm0002');
insert into Payment values ('p0003' , 'cash' , '1100.00' , 'kavindu' , 'The Sea' , 'c0003' , 'm0003');
insert into Payment values ('p0004' , 'cash' , '580.00' , 'sameesha' , 'Flights' , 'c0004' , 'm0004');
insert into Payment values ('p0005' , 'cash' , '1000.00' , 'dilki' , 'Educated' , 'c0005' , 'm0005');



insert into Manager_Contact values ('m0001',0777252576);
insert into Manager_Contact values ('m0002',0715826916);
insert into Manager_Contact values ('m0003',0775955955);
insert into Manager_Contact values ('m0004',0778446678);
insert into Manager_Contact values ('m0005',0774357667);



insert into Manager_Email values ('m0001' , 'sampath@gmail.com');
insert into Manager_Email values ('m0002' , 'manoj@gmail.com');
insert into Manager_Email values ('m0003' , 'thuhara@gmail.com');
insert into Manager_Email values ('m0004' , 'praveen@gmail.com');
insert into Manager_Email values ('m0005' , 'damith@gmail.com');



insert into Manager_Address values ('m0001' ,'120/A','Peradeniyaa','Kandy','Sri Lanka');
insert into Manager_Address values ('m0002' ,'35/C','Balamgoda','Rathnapura','Sri Lanka');
insert into Manager_Address values ('m0003' ,'37/A','Welimanana','Trincomalee','Sri Lanka');
insert into Manager_Address values ('m0004' ,'135/B','Welagedara','Badulla','Sri Lanka');
insert into Manager_Address values ('m0005' ,'120/A','Gampola','Kandy','Sri Lanka');



insert into Buyer_Book values ('b0001','d0001');
insert into Buyer_Book values ('b0002','d0002');
insert into Buyer_Book values ('b0003','d0003');
insert into Buyer_Book values ('b0004','d0004');
insert into Buyer_Book values ('b0005','d0005');

