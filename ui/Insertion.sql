/* Create Tables
	NOTE: When running, if currently any tables exist, they will get deleted.
	Please refer to the uploaded ERDiagram for a visual presentation.
Author: Nikki Moteva
Saturday, Nov 7, 2020 */


INSERT INTO BranchLocation (Country, city, address, postalCode)
VALUES ('Canada', 'Vancouver', '1 Fir Street', 'A0Y 5T5');
INSERT INTO BranchLocation (Country, city, address, postalCode)
VALUES ('USA', 'Vancouver', '12 12th Street', '1234567');
INSERT INTO BranchLocation (Country, city, address, postalCode)
VALUES ('Canada', 'Toronto', '3 3W Street', 'Q0I 9u8');
INSERT INTO BranchLocation (Country, city, address, postalCode)
VALUES ('Canada', 'Montreal', '11 11th Street', 'T5T 8U9');
INSERT INTO BranchLocation (Country, city, address, postalCode)
VALUES ('USA', 'Los Angeles', 'Zero Lawson Avenue', '90210');
INSERT INTO Branch (branchID, managerID, rating, address)
VALUES (1, 1, 5.0, '1 Fir Street');
INSERT INTO Branch (branchID, managerID, rating, address)
VALUES (2, 2, 0, '12 12th Street');
INSERT INTO Branch (branchID, managerID, rating, address)
VALUES (3, 3, 4.5, '3 3W Street');
INSERT INTO Branch (branchID, managerID, rating, address)
VALUES (4, 4, 4.1, '11 11th Street');
INSERT INTO Branch (branchID, managerID, rating, address)
VALUES (5, 5, 3.9, 'Zero Lawson Avenue');




INSERT INTO Pricing(numMovers, truckSize, price)
VALUES (1, 'S', 12);
INSERT INTO Pricing(numMovers, truckSize, price)
VALUES (2, 'M', 25);
INSERT INTO Pricing(numMovers, truckSize, price)
VALUES (4, 'XL', 39);
INSERT INTO Pricing(numMovers, truckSize, price)
VALUES (2, 'L', 28);
INSERT INTO Pricing(numMovers, truckSize, price)
VALUES (3, 'L', 30);
INSERT INTO Movers (moverID, rating, price)
VALUES (1, 0, 12);
INSERT INTO Movers (moverID, rating, price)
VALUES (2, 4.8, 25);
INSERT INTO Movers (moverID, rating, price)
VALUES (3, 3.9, 39);
INSERT INTO Movers (moverID, rating, price)
VALUES (4, 4.5, 28);
INSERT INTO Movers (moverID, rating, price)
VALUES (5, 4.2, 30);

	
    
INSERT INTO Provides (branchID, moverID)
VALUES (1, 1);
INSERT INTO Provides (branchID, moverID)
VALUES (2, 2);
INSERT INTO Provides (branchID, moverID)
VALUES (3, 3);
INSERT INTO Provides (branchID, moverID)
VALUES (4, 4);
INSERT INTO Provides (branchID, moverID)
VALUES (5, 5);
	   
	
    
INSERT INTO Lawyer(lawyerID, rating, cost, lawschool)
VALUES (1, 10, 200, 'University of British Columbia');
INSERT INTO Lawyer(lawyerID, rating, cost, lawschool)
VALUES (2, 9, 300, 'University of victoria ');
INSERT INTO Lawyer(lawyerID, rating, cost, lawschool)
VALUES (3, 8, 120, 'University of British Columbia');
INSERT INTO Lawyer(lawyerID, rating, cost, lawschool)
VALUES (4, 10, 130, 'Waterloo University');
INSERT INTO Lawyer(lawyerID, rating, cost, lawschool)
VALUES (5, 9, 220, 'Simon Fraser University');



INSERT INTO AgentRepresents (agentID, lawyerID, phone, email, rating, salary)
VALUES (1, 1, '6041234567', 'john@yahoo.com', 3.9, 55000);
INSERT INTO AgentRepresents (agentID, lawyerID, phone, email, rating, salary)
VALUES (2, 2, '7041234567', 'james@yahoo.com', 4.1, 79000);
INSERT INTO AgentRepresents (agentID, lawyerID, phone, email, rating, salary)
VALUES (3, 3, '8041234567', 'marys@yahoo.com', 4.7, 120000);
INSERT INTO AgentRepresents (agentID, lawyerID, phone, email, rating, salary)
VALUES (4, 4, '9041234567', 'jessica@yahoo.com', 4.5, 100000);
INSERT INTO AgentRepresents (agentID, lawyerID, phone, email, rating, salary)
VALUES (5, 5, '1041234567', 'joyce@yahoo.com', 4.9, 150000);
	   


INSERT INTO Employs (agentID, branchID)
VALUES (1, 1);
INSERT INTO Employs (agentID, branchID)
VALUES (2, 2);
INSERT INTO Employs (agentID, branchID)
VALUES (3, 3);
INSERT INTO Employs (agentID, branchID)
VALUES (4, 4);
INSERT INTO Employs (agentID, branchID)
VALUES (5, 5);



INSERT INTO Appoints(lawyerID, branchID)
VALUES (1, 1);
INSERT INTO Appoints(lawyerID, branchID)
VALUES (2, 2);
INSERT INTO Appoints(lawyerID, branchID)
VALUES (3, 3);
INSERT INTO Appoints(lawyerID, branchID)
VALUES (4, 4);
INSERT INTO Appoints(lawyerID, branchID)
VALUES (5, 5);



INSERT INTO Seller(sellerID, fullName, email, targetPrice, phone)
VALUES (1, 'Bob One', 'bob1@live.ca', 1000000, '18000000000');
INSERT INTO Seller(sellerID, fullName, email, targetPrice, phone)
VALUES (2, 'Bob Two', 'bob2@live.ca', 950000, '18000000001');
INSERT INTO Seller(sellerID, fullName, email, targetPrice, phone)
VALUES (3, 'Bob Three', 'bob3@live.ca', 1300000, '18000000002');
INSERT INTO Seller(sellerID, fullName, email, targetPrice, phone)
VALUES (4, 'Bob Four', 'bob@live.ca', 1150000, '18000000003');
INSERT INTO Seller(sellerID, fullName, email, targetPrice, phone)
VALUES (5, 'Bob Five', 'bob5@live.ca', 700000, '18000000004');
	  


INSERT INTO PropertyInfo(address, floors, sqft, listedPrice)
VALUES ('3142 Elm St', 1, 1500, 125000);
INSERT INTO PropertyInfo(address, floors, sqft, listedPrice)
VALUES ('3212 Jervis St', 1, 600, 657000);
INSERT INTO PropertyInfo(address, floors, sqft, listedPrice)
VALUES ('1241 W Hastings St', 1, 950, 875000);
INSERT INTO PropertyInfo(address, floors, sqft, listedPrice)
VALUES ('828 Cardero St', 2, 1100, 1750000);
INSERT INTO PropertyInfo(address, floors, sqft, listedPrice)
VALUES ('222 Denman St', 3, 1600, 2000000);
INSERT INTO Property(propertyID, sellerID, address)
VALUES (1, 1, '3142 Elm St');
INSERT INTO Property(propertyID, sellerID, address)
VALUES (2, 2, '3212 Jervis St');
INSERT INTO Property(propertyID, sellerID, address)
VALUES (3, 3, '1241 W Hastings St');
INSERT INTO Property(propertyID, sellerID, address)
VALUES (4, 4, '828 Cardero St');
INSERT INTO Property(propertyID, sellerID, address)
VALUES (5, 5, '222 Denman St');

	  
      
INSERT INTO Amenity(aType, propertyID)
VALUES ('pool', 1);
INSERT INTO Amenity(aType, propertyID)
VALUES ('basement', 2);
INSERT INTO Amenity(aType, propertyID)
VALUES ('deck', 3);
INSERT INTO Amenity(aType, propertyID)
VALUES ('lawn', 4);
INSERT INTO Amenity(aType, propertyID)
VALUES ('garden', 5);



INSERT INTO Buyer(buyerID, fullName, salary, budget, email, phone)
VALUES (1, 'Ariana Grande', 2000000, 10000000, 'arianagrande@gmail.com', '6041234567');
INSERT INTO Buyer(buyerID, fullName, salary, budget, email, phone)
VALUES (2, 'Ashton Kutcher', 100000, 2000000, 'ashtonkutcher@gmail.com', '7041234567');
INSERT INTO Buyer(buyerID, fullName, salary, budget, email, phone)
VALUES (3, 'Kanye West', 2000000, 1850000, 'kanyewest@gmail.com', '8041234567');
INSERT INTO Buyer(buyerID, fullName, salary, budget, email, phone)
VALUES (4, 'Laura Prepon', 120000, 200000, 'lauraprepon@gmail.com', '9041234567');
INSERT INTO Buyer(buyerID, fullName, salary, budget, email, phone)
VALUES (5, 'Janet Jackson', 500000, 200000, 'janetjackson@gmail.com', '1234567890');



INSERT INTO Wants(buyerID, propertyID)
VALUES (1, 2);
INSERT INTO Wants(buyerID, propertyID)
VALUES (2, 4);
INSERT INTO Wants(buyerID, propertyID)
VALUES (3, 1);
INSERT INTO Wants(buyerID, propertyID)
VALUES (4, 5);
INSERT INTO Wants(buyerID, propertyID)
VALUES (5, 3);



INSERT INTO Apartments(propertyID, levels, association)
VALUES (1, 1, 'Strata');
INSERT INTO Apartments(propertyID, levels, association)
VALUES (2, 1, 'Strata');
INSERT INTO Apartments(propertyID, levels, association)
VALUES (3, 3, 'HOA');
INSERT INTO Apartments(propertyID, levels, association)
VALUES (4, 1, 'HOA');
INSERT INTO Apartments(propertyID, levels, association)
VALUES (5, 2, 'Strata');



INSERT INTO House(propertyID, rentalUnits)
VALUES (1, 4);
INSERT INTO House(propertyID, rentalUnits)
VALUES (2, 1);
INSERT INTO House(propertyID, rentalUnits)
VALUES (3, 3);
INSERT INTO House(propertyID, rentalUnits)
VALUES (4, 1);
INSERT INTO House(propertyID, rentalUnits)
VALUES (5, 5);

INSERT INTO PropertyOversees(propertyID, buyerID, sellerID, agentID)
VALUES (1, 2, 3, 1);
INSERT INTO PropertyOversees(propertyID, buyerID, sellerID, agentID)
VALUES (1, 2, 4, 2);
INSERT INTO PropertyOversees(propertyID, buyerID, sellerID, agentID)
VALUES (2, 2, 3, 2);
INSERT INTO PropertyOversees(propertyID, buyerID, sellerID, agentID)
VALUES (3, 4, 3, 5);
INSERT INTO PropertyOversees(propertyID, buyerID, sellerID, agentID)
VALUES (4, 5, 4, 5);
	  
	  
