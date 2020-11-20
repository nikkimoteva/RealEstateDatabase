/* Create Tables
	NOTE: When running, if currently any tables exist, they will get deleted.
	Please refer to the uploaded ERDiagram for a visual presentation.
Author: Nikki Moteva
Saturday, Nov 7, 2020 */

drop table Provides;
drop table Movers;
drop table Pricing;
drop table Employs;
drop table Appoints;
drop table PropertyOversees;
drop table Amenity;
drop table Wants;
drop table Apartments;
drop table House;
drop table Property;
drop table PropertyInfo;
drop table Buyer;
drop table Seller;
drop table Branch;
drop table BranchLocation;
drop table AgentRepresents;
drop table Lawyer;

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
);



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
);

	   

CREATE TABLE Provides (
	branchID INTEGER, 
	moverID INTEGER NOT NULL,
	PRIMARY KEY (branchID, moverID),
	FOREIGN KEY (branchID) REFERENCES Branch
		ON DELETE CASCADE,
	FOREIGN KEY (moverID) REFERENCES Movers
		ON DELETE CASCADE
);
	   
	   	  
CREATE TABLE Lawyer(
    lawyerID Integer default 0, 
    rating FLOAT DEFAULT 0,
    cost Integer,
    lawschool char(60),
    PRIMARY KEY (lawyerID)
);


CREATE TABLE AgentRepresents (
	agentID INTEGER PRIMARY KEY, 
	lawyerID INTEGER NOT NULL,
	phone CHAR(15), 
	email CHAR(100),
	rating INTEGER DEFAULT 0,
	salary INTEGER,
	UNIQUE (email, phone),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer
);
	   

CREATE TABLE Employs (
	agentID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (agentID, branchID),
	FOREIGN KEY (agentID) REFERENCES AgentRepresents
		ON DELETE CASCADE,
	FOREIGN KEY (branchID) REFERENCES Branch
		ON DELETE CASCADE
);


CREATE TABLE Appoints (
	lawyerID INTEGER NOT NULL,
	branchID INTEGER,
	PRIMARY KEY (lawyerID),
	FOREIGN KEY (lawyerID) REFERENCES Lawyer,
	FOREIGN KEY (branchID) REFERENCES Branch
		ON DELETE CASCADE
);


CREATE TABLE Seller (
	sellerID INTEGER PRIMARY KEY, 
	fullName CHAR(60),
	email CHAR(60),
	targetPrice INTEGER NOT NULL,
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email)
);

	  

CREATE TABLE PropertyInfo (
	address CHAR(60) PRIMARY KEY,
    floors INTEGER,
    sqft INTEGER,
    listedPrice INTEGER
);
CREATE TABLE Property (
	propertyID INTEGER PRIMARY KEY,
	sellerID INTEGER,
	address CHAR(60) UNIQUE,
	FOREIGN KEY (sellerID) REFERENCES Seller
				ON DELETE CASCADE,
	FOREIGN KEY (address) REFERENCES PropertyInfo
);


	  
CREATE TABLE Amenity (
	aType char(30),
	propertyID INTEGER,
	PRIMARY KEY (aType, propertyID),
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
);



CREATE TABLE Buyer (
	buyerID INTEGER PRIMARY KEY,
	fullName char(60), 
	salary INTEGER,
	budget INTEGER,
	email char(60),
	phone CHAR(15) NOT NULL,
	UNIQUE (phone, email)
);



CREATE TABLE Wants (
	buyerID INTEGER,
	propertyID INTEGER NOT NULL,
	PRIMARY KEY (buyerID, propertyID),
	FOREIGN KEY (buyerID) REFERENCES Buyer,
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
);



CREATE TABLE Apartments (
	propertyID INTEGER PRIMARY KEY, 
	levels INTEGER,
	association CHAR(60),
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
);



CREATE TABLE House (
	propertyID INTEGER PRIMARY KEY,
	rentalUnits INTEGER,
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE
);



CREATE TABLE PropertyOversees(
	propertyID INTEGER,
	sellerID INTEGER,
	buyerID INTEGER,
	agentID INTEGER,
	PRIMARY KEY (propertyID, sellerID, buyerID, agentID),
	FOREIGN KEY (propertyID) REFERENCES Property
		ON DELETE CASCADE,
	FOREIGN KEY (sellerID) REFERENCES Seller,
	FOREIGN KEY (buyerID) REFERENCES Buyer
		ON DELETE CASCADE,
	FOREIGN KEY (agentID) REFERENCES AgentRepresents
		ON DELETE SET NULL
);
