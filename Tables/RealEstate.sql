/* Create and Populate Tables
	NOTE: When running, if currently any tables exist, they will get deleted.
	Please refer to the uploaded ERDiagram for a visual presentation.
Author: Nikki Moteva
Saturday, Nov 7, 2020 */

drop table Branch;
drop table BranchLocation;
drop table Provides;
drop table Movers;
drop table Pricing;
drop table Employs;
drop table AgentRepresents;
drop table Lawyer;
drop table Appoints;
drop table PropertyOversees;
drop table Amenity;
drop table Property;
drop table PropertyInfo;
drop table Buyer;
drop table Wants;
drop table Seller;
drop table Apartments;
drop table House;

CREATE TABLE BranchLocation(
	country char(60),
	city char(60),
	address  char(60) PRIMARY KEY,
	postalCode char(60)
);
CREATE TABLE Branch(
	branchID INTEGER PRIMARY KEY,
	managerID INTEGER UNIQUE,
	rating FLOAT DEFAULT 0,
	address  char(60),
	FOREIGN KEY (address) REFERENCES BranchLocation ON DELETE SET NULL
		ON UPDATE CASCADE
);
INSERT INTO BranchLocation (Country, city, address, postalCode)
VALUES ('Canada', 'Vancouver', '1 Fir Street', 'A0Y 5T5'),
	   ('USA', 'Vancouver', '12 12th Street', '1234567'),
	   ('Canada', 'Toronto', '3 3W Street', 'Q0I 9u8'),
	   ('Canada', 'Montreal', '11 11th Street', 'T5T 8U9'),
	   ('USA', 'Los Angeles', 'Zero Lawson Avenue', '90210');
INSERT INTO Branch (branchID, managerID, rating, address)
VALUES (1, 1, 5.0, '1 Fir Street'),
	   (2, 2, 0, '12 12th Street'),
	   (3, 3, 4.5, '3 3W Street'),
	   (4, 4, 4.1, '11 11th Street'),
	   (5, 5, 3.9, 'Zero Lawson Avenue');



CREATE TABLE Pricing(
	numMovers INTEGER,
	truckSize CHAR(5),
	price INTEGER PRIMARY KEY
);
CREATE TABLE Movers(
	rating float DEFAULT 0,
	moverID INTEGER PRIMARY KEY,
	price Integer,
	FOREIGN KEY (price) REFERENCES pricing ON DELETE CASCADE
		ON UPDATE CASCADE
);
INSERT INTO Pricing(numMovers, truckSize, price)
VALUES (1, 'S', 12),
	   (2, 'M', 25),
	   (4, 'XL', 39),
	   (2, 'L', 28),
	   (3, 'L', 30);
INSERT INTO Movers (moverID, rating, price)
VALUES (1, 0, 12),
	   (2, 4.8, 25),
	   (3, 3.9, 39),
	   (4, 4.5, 28),
	   (5, 4.2, 30);

	   

CREATE TABLE Provides (
	branchID INTEGER, 
	moverID INTEGER NOT NULL,
	PRIMARY KEY (branchID, moverID),
	FOREIGN KEY (branchID) REFERENCES Branch
		ON DELETE CASCADE,
	FOREIGN KEY (moverID) REFERENCES Movers
		ON DELETE CASCADE
);
INSERT INTO Provides (branchID, moverID)
VALUES (1, 1),
	   (2, 2),
	   (3, 3),
	   (4, 4),
	   (5, 5);
	   
	   	  
CREATE TABLE Lawyer(
    lawyerID Integer default 0, 
    rating FLOAT DEFAULT 0,
    cost Integer,
    lawschool char(60)
    PRIMARY KEY(lawyerID)
);
INSERT INTO Lawyer(lawyerID, rating, cost, lawschool)
VALUES(1, 10, 200, 'University of British Columbia'),
	  (2, 9, 300, 'University of victoria '),
	  (3, 8, 120, 'University of British Columbia'),
	  (4, 10, 130, 'Waterloo University'),
	  (5, 9, 220, 'Simon Fraser University');


CREATE TABLE AgentRepresents (
	agentID INTEGER PRIMARY KEY, 
	lawyerID INTEGER NOT NULL,
	phone CHAR(15), 
	email CHAR(100),
	rating INTEGER DEFAULT 0,
	salary INTEGER,
	UNIQUE(email, phone),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer
		ON DELETE NO ACTION
		ON UPDATE CASCADE
);
INSERT INTO AgentRepresents (agentID, lawyerID, phone, email, rating, salary)
VALUES (1, 1, '6041234567', 'john@yahoo.com', 3.9, 55000),
	   (2, 2, '7041234567', 'james@yahoo.com', 4.1, 79000),
	   (3, 3, '8041234567', 'marys@yahoo.com', 4.7, 120000),
	   (4, 4, '9041234567', 'jessica@yahoo.com', 4.5, 100000),
	   (5, 5, '1041234567', 'joyce@yahoo.com', 4.9, 150000);
	   

CREATE TABLE Employs (
	agentID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (agentID, branchID),
	FOREIGN KEY (agentID) REFERENCES AgentRepresents
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	FOREIGN KEY (branchID) REFERENCES Branch
		ON DELETE CASCADE
		ON UPDATE CASCADE
);
INSERT INTO Employs (agentID, branchID)
VALUES (1, 1),
	   (2, 2),
	   (3, 3),
	   (4, 4),
	   (5, 5);


CREATE TABLE Appoints (
	lawyerID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (lawyerID),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer,
	FOREIGN KEY (branchID) REFERENCES Branch
		ON UPDATE CASCADE
		ON DELETE CASCADE
);
INSERT INTO Appoints(lawyerID, branchID)
VALUES (1, 1),
	   (2, 2),
	   (3, 3),
	   (4, 4),
	   (5, 5);


CREATE TABLE Seller (
	sellerID INTEGER PRIMARY KEY, 
	fullName CHAR(60),
	email CHAR(60),
	targetPrice INTEGER NOT NULL,
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email)
);
INSERT INTO Seller(sellerID, fullName, email, targetPrice, phone)
VALUES(1, 'Bob One', 'bob1@live.ca', 1000000, '18000000000'),
	  (2, 'Bob Two', 'bob2@live.ca', 950000, '18000000001'),
	  (3, 'Bob Three', 'bob3@live.ca', 1300000, '18000000002'),
	  (4, 'Bob Four', 'bob@live.ca', 1150000, '18000000003'),
	  (5, 'Bob Five', 'bob5@live.ca', 700000, '18000000004');
	  

CREATE TABLE PropertyInfo (
	address CHAR(60) PRIMARY KEY,
    floors INTEGER,
    sqft INTEGER,
    listedPrice INTEGER,
);
CREATE TABLE Property (
	propertyID INTEGER PRIMARY KEY,
	sellerID INTEGER,
	address CHAR(60) UNIQUE,
	FOREIGN KEY (sellerID) REFERENCES Seller
				ON DELETE CASCADE
				ON UPDATE CASCADE,
	FOREIGN KEY (address) REFERENCES PropertyInfo
					ON DELETE NO ACTION
					ON UPDATE CASCADE
);
INSERT INTO PropertyInfo(address, floors, sqft, listedPrice)
VALUES('3142 Elm St', 1, 1500, 125000),
	  ('3212 Jervis St', 1, 600, 657000),
	  ('1241 W Hastings St', 1, 950, 875000),
	  ('828 Cardero St', 2, 1100, 1750000),
	  ('222 Denman St', 3, 1600, 2000000);
INSERT INTO Property(propertyID, sellerID, address)
VALUES(1, 1, '3142 Elm St'),
	  (2, 2, '3212 Jervis St'),
	  (3, 3, '1241 W Hastings St'),
	  (4, 4, '828 Cardero St'),
	  (5, 5, '222 Denman St');

	  
CREATE TABLE Amenity (
	aType char(30),
	propertyID INTEGER,
	PRIMARY KEY (aType, propertyID),
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
		ON UPDATE CASCADE
);
INSERT INTO Amenity(aType, propertyID)
VALUES ('pool', 1),
	   ('basement', 2),
	   ('deck', 3),
	   ('lawn', 4),
	   ('garden', 5);


CREATE TABLE Buyer (
	buyerID INTEGER PRIMARY KEY,
	fullName char(60), 
	salary INTEGER,
	budget INTEGER,
	email char(60),
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email),
);
INSERT INTO Buyer(buyerID, fullName, salary, budget, email, phone)
VALUES (1, 'Ariana Grande', 2000000, 10000000, 'arianagrande@gmail.com', '6041234567'),
	   (2, 'Ashton Kutcher', 100000, 2000000, 'ashtonkutcher@gmail.com', '7041234567'),
	   (3, 'Kanye West', 2000000, 1850000, 'kanyewest@gmail.com', '8041234567'),
	   (4, 'Laura Prepon', 120000, 200000, 'lauraprepon@gmail.com', '9041234567'),
	   (5, 'Janet Jackson', 500000, 200000, 'janetjackson@gmail.com', '1234567890');


CREATE TABLE Wants (
	buyerID INTEGER,
	propertyID INTEGER NOT NULL,
	PRIMARY KEY (buyerID, propertyID),
	FOREIGN KEY (buyerID) REFERENCES Buyer,
	FOREIGN KEY (propertyID) REFERENCES Property
		ON UPDATE CASCADE
		ON DELETE CASCADE
);
INSERT INTO Wants(buyerID, propertyID)
VALUES (1, 2),
	   (2, 4),
	   (3, 1),
	   (4, 5),
	   (5, 3);


CREATE TABLE Apartments (
	propertyID INTEGER PRIMARY KEY, 
	level INTEGER,
	association CHAR(60),
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
		ON UPDATE CASCADE
);
INSERT INTO Apartments(propertyID, level, association)
VALUES(1, 1, 'Strata'),
	  (2, 1, 'Strata'),
	  (3, 3, 'HOA'),
	  (4, 1, 'HOA'),
	  (5, 2, 'Strata');


CREATE TABLE House (
	propertyID INTEGER PRIMARY KEY,
	rentalUnits INTEGER,
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
		ON UPDATE CASCADE
);
INSERT INTO House(propertyID, rentalUnits)
VALUES(1, 4),
	  (2, 1),
	  (3, 3),
	  (4, 1),
	  (5, 5);


CREATE TABLE PropertyOversees(
	propertyID INTEGER,
	sellerID INTEGER,
	buyerID INTEGER,
	agentID INTEGER NOT NULL DEFAULT -1,
	PRIMARY KEY (propertyID, sellerID, buyerID, agentID),
	FOREIGN KEY (propertyID) REFERENCES Property
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	FOREIGN KEY (sellerID) REFERENCES Seller
		ON UPDATE NO ACTION
		ON DELETE NO ACTION,
	FOREIGN KEY (buyerID) REFERENCES Buyer
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	FOREIGN KEY (agentID) REFERENCES AgentRepresents
		ON UPDATE CASCADE
		ON DELETE SET DEFAULT
);
INSERT INTO PropertyOversees(propertyID, buyerID, sellerID, agentID)
VALUES(1, 2, 3, 1),
	  (1, 2, 4, 2),
	  (2, 2, 3, 2),
	  (3, 4, 3, 5),
	  (4, 5, 4, 5);
	  
	  
