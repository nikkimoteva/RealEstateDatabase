drop table if exists Branch cascade;
drop table if exists BranchLocation cascade;
drop table if exists Provides cascade;
drop table if exists Movers cascade;
drop table if exists Pricing cascade;
drop table if exists Employs cascade;
drop table if exists AgentRepresents cascade;
drop table if exists Lawyer cascade;
drop table if exists Appoints cascade;
drop table if exists PropertyOversees cascade;
drop table if exists Amenity cascade;
drop table if exists Property cascade;
drop table if exists PropertyInfo cascade;
drop table if exists Buyer cascade;
drop table if exists Wants cascade;
drop table if exists Seller cascade;
drop table if exists Apartments cascade;
drop table if exists House cascade;
--

--
CREATE TABLE BranchLocation(
	country char(60),
	city char(60),
	address  char(60) PRIMARY KEY,
	postalCode char(60));

CREATE TABLE Branch(
	branchID INTEGER PRIMARY KEY,
	managerID INTEGER UNIQUE,
	rating FLOAT DEFAULT 0,
	address  char(60),
	FOREIGN KEY (address) REFERENCES BranchLocation(address));

CREATE TABLE Pricing(
	numMovers INTEGER,
	truckSize CHAR(5),
	price INTEGER PRIMARY KEY);
    
CREATE TABLE Movers(
	rating float DEFAULT 0,
	moverID INTEGER PRIMARY KEY,
	price Integer,
	FOREIGN KEY (price) REFERENCES Pricing(price));
	   
CREATE TABLE Provides (
	branchID INTEGER, 
	moverID INTEGER NOT NULL,
	PRIMARY KEY (branchID, moverID),
	FOREIGN KEY (branchID) REFERENCES Branch(branchID),
	FOREIGN KEY (moverID) REFERENCES Movers(moverID));	   
	   	  
CREATE TABLE Lawyer(
    lawyerID Integer default 0, 
    rating FLOAT DEFAULT 0,
    cost Integer,
    lawschool char(60),
    PRIMARY KEY(lawyerID));

CREATE TABLE AgentRepresents (
	agentID INTEGER PRIMARY KEY, 
	lawyerID INTEGER NOT NULL,
	phone CHAR(15), 
	email CHAR(100),
	rating INTEGER DEFAULT 0,
	salary INTEGER,
	UNIQUE(email, phone),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer(lawyerID));	   

CREATE TABLE Employs (
	agentID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (agentID, branchID),
	FOREIGN KEY (agentID) REFERENCES AgentRepresents(agentID),
	FOREIGN KEY (branchID) REFERENCES Branch(branchID));


CREATE TABLE Appoints (
	lawyerID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (lawyerID),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer(lawyerID),
	FOREIGN KEY (branchID) REFERENCES Branch(branchID));

CREATE TABLE Seller (
	sellerID INTEGER PRIMARY KEY, 
	fullName CHAR(60),
	email CHAR(60),
	targetPrice INTEGER NOT NULL,
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email));

CREATE TABLE PropertyInfo (
	address CHAR(60) PRIMARY KEY,
    floors INTEGER,
    sqft INTEGER,
    listedPrice INTEGER);
    
CREATE TABLE Property (
	propertyID INTEGER PRIMARY KEY,
	sellerID INTEGER,
	address CHAR(60) UNIQUE,
	FOREIGN KEY (sellerID) REFERENCES Seller(sellerID),
	FOREIGN KEY (address) REFERENCES PropertyInfo(address));
	  
CREATE TABLE Amenity (
	aType char(30),
	propertyID INTEGER,
	PRIMARY KEY (aType, propertyID),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));


CREATE TABLE Buyer (
	buyerID INTEGER PRIMARY KEY,
	fullName char(60), 
	salary INTEGER,
	budget INTEGER,
	email char(60),
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email));


CREATE TABLE Wants (
	buyerID INTEGER,
	propertyID INTEGER NOT NULL,
	PRIMARY KEY (buyerID, propertyID),
	FOREIGN KEY (buyerID) REFERENCES Buyer(buyerID),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));


CREATE TABLE Apartments (
	propertyID INTEGER PRIMARY KEY, 
	level INTEGER,
	association CHAR(60),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));



CREATE TABLE House (
	propertyID INTEGER PRIMARY KEY,
	rentalUnits INTEGER,
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));

CREATE TABLE PropertyOversees(
	propertyID INTEGER,
	sellerID INTEGER,
	buyerID INTEGER,
	agentID INTEGER NOT NULL DEFAULT -1,
	PRIMARY KEY (propertyID, sellerID, buyerID, agentID),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID),
	FOREIGN KEY (sellerID) REFERENCES Seller(sellerID),
	FOREIGN KEY (buyerID) REFERENCES Buyer(buyerID),
	FOREIGN KEY (agentID) REFERENCES AgentRepresents(agentID));

CREATE TABLE BranchLocation(
	country char(60),
	city char(60),
	address  char(60) PRIMARY KEY,
	postalCode char(60));

CREATE TABLE Branch(
	branchID INTEGER PRIMARY KEY,
	managerID INTEGER UNIQUE,
	rating FLOAT DEFAULT 0,
	address  char(60),
	FOREIGN KEY (address) REFERENCES BranchLocation(address));

CREATE TABLE Pricing(
	numMovers INTEGER,
	truckSize CHAR(5),
	price INTEGER PRIMARY KEY);

CREATE TABLE Movers(
	rating float DEFAULT 0,
	moverID INTEGER PRIMARY KEY,
	price Integer,
	FOREIGN KEY (price) REFERENCES Pricing(price));
	   
CREATE TABLE Provides (
	branchID INTEGER, 
	moverID INTEGER NOT NULL,
	PRIMARY KEY (branchID, moverID),
	FOREIGN KEY (branchID) REFERENCES Branch(branchID),
	FOREIGN KEY (moverID) REFERENCES Movers(moverID));	   
	   	  
CREATE TABLE Lawyer(
    lawyerID Integer default 0, 
    rating FLOAT DEFAULT 0,
    cost Integer,
    lawschool char(60),
    PRIMARY KEY(lawyerID));

CREATE TABLE AgentRepresents (
	agentID INTEGER PRIMARY KEY, 
	lawyerID INTEGER NOT NULL,
	phone CHAR(15), 
	email CHAR(100),
	rating INTEGER DEFAULT 0,
	salary INTEGER,
	UNIQUE(email, phone),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer(lawyerID));	   

CREATE TABLE Employs (
	agentID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (agentID, branchID),
	FOREIGN KEY (agentID) REFERENCES AgentRepresents(agentID)
	FOREIGN KEY (branchID) REFERENCES Branch(branchID));


CREATE TABLE Appoints (
	lawyerID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (lawyerID),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer(lawyerID),
	FOREIGN KEY (branchID) REFERENCES Branch(branchID));

CREATE TABLE Seller (
	sellerID INTEGER PRIMARY KEY, 
	fullName CHAR(60),
	email CHAR(60),
	targetPrice INTEGER NOT NULL,
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email));

CREATE TABLE PropertyInfo (
	address CHAR(60) PRIMARY KEY,
    floors INTEGER,
    sqft INTEGER,
    listedPrice INTEGER);
    
CREATE TABLE Property (
	propertyID INTEGER PRIMARY KEY,
	sellerID INTEGER,
	address CHAR(60) UNIQUE,
	FOREIGN KEY (sellerID) REFERENCES Seller(sellerID),
	FOREIGN KEY (address) REFERENCES PropertyInfo(address)
);
	  
CREATE TABLE Amenity (
	aType char(30),
	propertyID INTEGER,
	PRIMARY KEY (aType, propertyID),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));

CREATE TABLE Buyer (
	buyerID INTEGER PRIMARY KEY,
	fullName char(60), 
	salary INTEGER,
	budget INTEGER,
	email char(60),
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email));

CREATE TABLE Wants (
	buyerID INTEGER,
	propertyID INTEGER NOT NULL,
	PRIMARY KEY (buyerID, propertyID),
	FOREIGN KEY (buyerID) REFERENCES Buyer(buyerID),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));

CREATE TABLE Apartments (
	propertyID INTEGER PRIMARY KEY, 
	level INTEGER,
	association CHAR(60),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID)
);

CREATE TABLE House (
	propertyID INTEGER PRIMARY KEY,
	rentalUnits INTEGER,
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID));

CREATE TABLE PropertyOversees(
	propertyID INTEGER,
	sellerID INTEGER,
	buyerID INTEGER,
	agentID INTEGER NOT NULL DEFAULT -1,
	PRIMARY KEY (propertyID, sellerID, buyerID, agentID),
	FOREIGN KEY (propertyID) REFERENCES Property(propertyID),
	FOREIGN KEY (sellerID) REFERENCES Seller(sellerID),
	FOREIGN KEY (buyerID) REFERENCES Buyer(buyerID),
	FOREIGN KEY (agentID) REFERENCES AgentRepresents(agentID));


INSERT INTO BranchLocation VALUES ('Canada', 'Vancouver', '1 Fir Street', 'A0Y 5T5');
INSERT INTO BranchLocation VALUES ('USA', 'Vancouver', '12 12th Street', '1234567');
INSERT INTO BranchLocation VALUES ('Canada', 'Toronto', '3 3W Street', 'Q0I 9u8');
INSERT INTO BranchLocation VALUES ('Canada', 'Montreal', '11 11th Street', 'T5T 8U9');
INSERT INTO BranchLocation VALUES ('USA', 'Los Angeles', 'Zero Lawson Avenue', '90210');
INSERT INTO BranchLocation VALUES (1, 1, 5.0, '1 Fir Street');
INSERT INTO BranchLocation VALUES (2, 2, 0, '12 12th Street');
INSERT INTO BranchLocation VALUES (3, 3, 4.5, '3 3W Street');
INSERT INTO BranchLocation VALUES (4, 4, 4.1, '11 11th Street');
INSERT INTO BranchLocation VALUES (5, 5, 3.9, 'Zero Lawson Avenue');
INSERT INTO Pricing VALUES (1, 'S', 12);
INSERT INTO Pricing VALUES (2, 'M', 25);
INSERT INTO Pricing VALUES (4, 'XL', 39);
INSERT INTO Pricing VALUES (2, 'L', 28);
INSERT INTO Pricing VALUES (3, 'L', 30);
INSERT INTO Movers VALUES (1, 0, 12;
INSERT INTO Movers VALUES (2, 4.8, 25);
INSERT INTO Movers VALUES (3, 3.9, 39);
INSERT INTO Movers VALUES (4, 4.5, 28);
INSERT INTO Movers VALUES (5, 4.2, 30);
INSERT INTO Provides VALUES (1, 1);
INSERT INTO Provides VALUES (2, 2);
INSERT INTO Provides VALUES (3, 3);
INSERT INTO Provides VALUES (4, 4);
INSERT INTO Provides VALUES (5, 5);
INSERT INTO Lawyer VALUES(1, 10, 200, 'University of British Columbia');
INSERT INTO Lawyer VALUES(2, 9, 300, 'University of victoria ');
INSERT INTO Lawyer VALUES(3, 8, 120, 'University of British Columbia');
INSERT INTO Lawyer VALUES(4, 10, 130, 'Waterloo University');
INSERT INTO Lawyer VALUES(5, 9, 220, 'Simon Fraser University');
INSERT INTO AgentRepresents VALUES (1, 1, '6041234567', 'john@yahoo.com', 3.9, 55000);
INSERT INTO AgentRepresents VALUES(2, 2, '7041234567', 'james@yahoo.com', 4.1, 79000);
INSERT INTO AgentRepresents VALUES(3, 3, '8041234567', 'marys@yahoo.com', 4.7, 120000);
INSERT INTO AgentRepresents VALUES(4, 4, '9041234567', 'jessica@yahoo.com', 4.5, 100000);
INSERT INTO AgentRepresents VALUES(5, 5, '1041234567', 'joyce@yahoo.com', 4.9, 150000);
INSERT INTO Employs VALUES (1, 1);
INSERT INTO Employs VALUES (2, 2);
INSERT INTO Employs VALUES (3, 3);
INSERT INTO Employs VALUES (4, 4);
INSERT INTO Employs VALUES (5, 5);
INSERT INTO Appoints VALUES (1, 1);
INSERT INTO Appoints VALUES (2, 2);
INSERT INTO Appoints VALUES (3, 3);
INSERT INTO Appoints VALUES (4, 4);
INSERT INTO Appoints VALUES (5, 5);
INSERT INTO Seller VALUES(1, 'Bob One', 'bob1@live.ca', 1000000, '18000000000');
INSERT INTO Seller VALUES(2, 'Bob Two', 'bob2@live.ca', 950000, '18000000001');
INSERT INTO Seller VALUES(3, 'Bob Three', 'bob3@live.ca', 1300000, '18000000002');
INSERT INTO Seller VALUES(4, 'Bob Four', 'bob@live.ca', 1150000, '18000000003');
INSERT INTO Seller VALUES(5, 'Bob Five', 'bob5@live.ca', 700000, '18000000004');
INSERT INTO PropertyInfo VALUES('3142 Elm St', 1, 1500, 125000);
INSERT INTO PropertyInfo VALUES('3212 Jervis St', 1, 600, 657000);
INSERT INTO PropertyInfo VALUES('1241 W Hastings St', 1, 950, 875000);
INSERT INTO PropertyInfo VALUES('828 Cardero St', 2, 1100, 1750000);
INSERT INTO PropertyInfo VALUES('222 Denman St', 3, 1600, 2000000);
INSERT INTO Property VALUES(1, 1, '3142 Elm St');
INSERT INTO Property VALUES(2, 2, '3212 Jervis St');
INSERT INTO Property VALUES(3, 3, '1241 W Hastings St');
INSERT INTO Property VALUES(4, 4, '828 Cardero St');
INSERT INTO Property VALUES(5, 5, '222 Denman St');
INSERT INTO Amenity VALUES ('pool', 1);
INSERT INTO Amenity VALUES('basement', 2);
INSERT INTO Amenity VALUES('deck', 3);
INSERT INTO Amenity VALUES('lawn', 4);
INSERT INTO Amenity VALUES('garden', 5);
INSERT INTO Buyer VALUES (1, 'Ariana Grande', 2000000, 10000000, 'arianagrande@gmail.com', '6041234567');
INSERT INTO Buyer VALUES (2, 'Ashton Kutcher', 100000, 2000000, 'ashtonkutcher@gmail.com', '7041234567');
INSERT INTO Buyer VALUES (3, 'Kanye West', 2000000, 1850000, 'kanyewest@gmail.com', '8041234567');
INSERT INTO Buyer VALUES (4, 'Laura Prepon', 120000, 200000, 'lauraprepon@gmail.com', '9041234567');
INSERT INTO Buyer VALUES (5, 'Janet Jackson', 500000, 200000, 'janetjackson@gmail.com', '1234567890');
INSERT INTO Wants VALUES (1, 2);
INSERT INTO Wants VALUES (2, 4);
INSERT INTO Wants VALUES (3, 1);
INSERT INTO Wants VALUES (4, 5);
INSERT INTO Wants VALUES (5, 3);
INSERT INTO Apartments VALUES(1, 1, 'Strata');
INSERT INTO Apartments VALUES (2, 1, 'Strata');
INSERT INTO Apartments VALUES (3, 3, 'HOA');
INSERT INTO Apartments VALUES (4, 1, 'HOA');
INSERT INTO Apartments VALUES (5, 2, 'Strata');
INSERT INTO House VALUES (1, 4);
INSERT INTO House VALUES (2, 1);
INSERT INTO House VALUES (3, 3);
INSERT INTO House VALUES (4, 1);
INSERT INTO House VALUES (5, 5);
INSERT INTO PropertyOversees VALUES(1, 2, 3, 1);
INSERT INTO PropertyOversees VALUES(1, 2, 4, 2);
INSERT INTO PropertyOversees VALUES(2, 2, 3, 2);
INSERT INTO PropertyOversees VALUES(3, 4, 3, 5);
INSERT INTO PropertyOversees VALUES(4, 5, 4, 5);