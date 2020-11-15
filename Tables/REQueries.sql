/* queries 
Author: Nikki Moteva
Saturday, Nov 7, 2020 */


/*Branch and BranchLocation*/
DELETE FROM Branch
WHERE managerID = 2;

UPDATE BranchLocation
SET address = '49 49th Avenue'
WHERE address = '1 Fir Street';

UPDATE Branch
SET rating = 4.5 
WHERE branchID = 3;

SELECT managerID, branchID, rating
FROM Branch
WHERE rating >= 4.0;

SELECT address, branchID, rating
FROM Branch;

SELECT branchID, address
FROM Branch
WHERE managerID > ALL (
    SELECT MAX(managerID)
    FROM Branch b, BranchLocation bl
    WHERE bl.country = 'Canada' AND b.address = bl.address
);


/*Movers and Pricing*/
DELETE FROM Pricing
WHERE price < 20;

UPDATE Movers
SET rating = 2.7 
Where moverID = 2;

UPDATE Pricing
SET truckSize = 'S'
WHERE numMovers = 1;

SELECT moverID
from Movers
where price <= 25;

SELECT numMovers, price, truckSize
FROM Pricing
WHERE numMovers >= 2;

SELECT moverID
FROM Movers m, Pricing p
WHERE m.price = p.price AND p.numMovers >= 2 AND m.price <= 30;


/*Provides*/
SELECT moverID
FROM Provides
WHERE branchID = 1;

SELECT price, Movers.moverID
FROM Provides, Movers
WHERE PROVIDES.moverID = Movers.moverID AND branchID = 2;
        

/*Employs*/
SELECT b.address
FROM Employs e, Branch b
WHERE e.branchID = 2 AND e.branchID = b.branchID;

SELECT e.branchID
FROM AgentRepresents ar, Employs e
WHERE ar.agentID = e.agentID and ar.email = 'joyce@yahoo.com';


/*AgentRepresents*/
DELETE FROM AgentRepresents
WHERE email = 'john@yahoo.com';

UPDATE AgentRepresents
SET rating = 1.0
WHERE rating = 0;

SELECT email
FROM AgentRepresents
WHERE rating >= 3.9;

SELECT email, phone, rating
FROM AgentRepresents
WHERE salary > 100000;

SELECT l.lawSchool
from Lawyer l, AgentRepresents ar
WHERE l.lawyerID = ar.lawyerID AND ar.rating <= 3.0;


/*Lawyer*/
DELETE FROM Lawyer
WHERE lawyerID = 1;

UPDATE Lawyer
SET cost = 300
WHERE lawyerID = 2;

SELECT cost, lawyerID
FROM Lawyer
WHERE rating > 3.5;

SELECT cost, rating, lawyerID
FROM Lawyer
WHERE cost < 150;

SELECT ar.agentID
FROM AgentRepresents ar, Lawyer l
where l.lawyerID = ar.lawyerID AND l.cost <= 200 AND ar.rating > 3.7;



/*Appoints*/
SELECT count(*)
FROM Appoints;

SELECT managerID
FROM Branch b, Appoints a
WHERE b.branchID = a.branchID AND NOT EXISTS (
    SELECT l.lawyerID
    FROM Appoints a, Lawyer l
    WHERE l.lawyerID = a.lawyerID AND l.cost > 250 AND b.branchID = a.branchID
);


/*Amenity*/
UPDATE Amenity
SET aType = 'pool and jacuzzi'
where propertyID = 1;

SELECT aType
FROM Amenity a, Property p
WHERE aType LIKE '%pool%' and p.propertyID = a.propertyID;

SELECT aType
FROM Amenity;

SELECT aType
FROM Amenity a, Property p
WHERE p.propertyID = Amenity.propertyID AND p.listedPrice < 1000000;


/*Property and PropertyInfo*/
/****SHOULD DELETE AMENITY, DISPLAY THAT IT DOES****/
DELETE FROM PropertyInfo
WHERE address = '3212 Jervis St';

UPDATE PropertyInfo
SET listedPrice = listedPrice - 10000
WHERE address = '3212 Jervis St';

(SELECT propertyID
FROM Property)
EXCEPT
(SELECT propertyID
FROM PropertyInfo pi, Property p
WHERE floors > 1 AND pi.address = p.address);

SELECT floors, sqft, listedPrice
FROM PropertyInfo
WHERE address = '3212 Jervis St';

SELECT s.fullName
FROM Seller s, Property p
where s.sellerID = p.sellerID AND EXISTS (
    SELECT *
    FROM PropertyInfo pi, Property p
    WHERE p.address = pi.address AND pi.listedPrice < 1000000
) ORDER BY s.fullName;

/*Find all buyers who can afford any of the current property listings*/
SELECT b.buyerID, b.fullName
FROM Buyer b
WHERE NOT EXISTS
(
    SELECT p.propertyID
    FROM Property p, PropertyInfo pi
    WHERE pi.listedPrice > b.budget AND p.address = pi.address
    EXCEPT
    SELECT po.propertyID
    FROM PropertyOversees po
    WHERE po.buyerID = b.buyerID
);

/*Find property that every buyer could afford*/
SELECT pi.address
FROM PropertyInfo pi
WHERE NOT EXISTS 
(
    (SELECT b.buyerID
    FROM Buyer b
    WHERE b.budget < pi.listedPrice)
    EXCEPT
    (SELECT po.buyerID
    FROM PropertyOversees po, Property p
    WHERE po.propertyID = p.propertyID AND p.address = pi.address)
);



/*Buyer*/
DELETE FROM Buyer
WHERE email = 'arianagrande@gmail.com';

UPDATE Buyer
SET budget = 2000000
WHERE email = 'arianagrande@gmail.com';

SELECT salary, fullName
FROM Buyer
WHERE budget > 1000000;

SELECT phone, email, fullName
FROM Buyer
WHERE budget > 500000;

SELECT fullName
FROM Buyer
WHERE salary > 900000
INTERSECT
SELECT fullName
FROM Buyer b, Wants w, PropertyInfo pi, Property p
WHERE b.buyerID = w.buyerID AND w.propertyID = p.propertyID AND p.address = pi.address AND b.budget >=pi.listedPrice;
    


/*Wants*/
SELECT count(*)
FROM Wants;

SELECT w.buyerID, w.propertyID
FROM Buyer b, Wants w
WHERE w.buyerID = 2 and b.buyerID = w.buyerID;
        


/*Seller*/
DELETE FROM Seller
WHERE fullName = 'Bob One';

UPDATE Seller
SET targetPrice = targetPrice - 1000
WHERE sellerID = 2;

SELECT email
FROM Seller
WHERE targetPrice <= 1500000;

SELECT phone, email, targetPrice
FROM Seller
WHERE fullName = 'Bob Two';

SELECT propertyID, address
FROM Seller s, Property p
WHERE p.sellerID = s.sellerID;



/*Apartments*/
DELETE FROM Apartments
WHERE association = 'HOA';

UPDATE Apartments
SET association = 'Strata'
WHERE association = 'HOA' AND propertyID<30 AND propertyID > 2;

SELECT propertyID
FROM Apartments
WHERE level <=2;

SELECT propertyID, level
FROM Apartments
WHERE association = 'Strata';
        


/*House*/
DELETE FROM House
WHERE propertyID = 2;

UPDATE House
SET rentalUnits = 2
WHERE propertyID = 1;

SELECT rentalUnits
FROM House
WHERE propertyID = 2;

SELECT propertyID, rentalUnits
FROM House 
WHERE rentalUnits > 1;


/*PropertyOversees*/
DELETE FROM PropertyOversees
WHERE sellerID = 2;

DELETE FROM PropertyOversees
WHERE propertyID = 5;

SELECT propertyID
FROM PropertyOversees
WHERE buyerID = 2;


SELECT propertyID, sellerID, buyerID
FROM PropertyOversees
WHERE agentID = 2;


SELECT ar.agentID, ar.email
FROM PropertyOversees po, AgentRepresents ar
WHERE ar.agentID = po.agentID and po.propertyID IN(
    SELECT p.propertyID
    FROM Buyer b, Wants w, Property p
    WHERE b.buyerID = w.buyerID AND w.propertyID = p.propertyID AND b.budget > 2000000
);

SELECT *
FROM PropertyOversees po, AgentRepresents ar
WHERE po.agentID = ar.agentID AND ar.email LIKE '%s@yahoo.co_';

/*find all buyers that have not yet been matched*/
(SELECT b.buyerID
FROM Buyer b)
EXCEPT
(SELECT po.buyerID
FROM Property p, PropertyOversees po
WHERE p.propertyID = po.propertyID);

/*find all buyers that have been matched*/
SELECT DISTINCT buyerID
FROM PropertyOversees;

/*find the total number of properties each buyer is interested in*/
SELECT b.buyerID, b.fullName, count(po.propertyID) AS isInterested
FROM PropertyOversees po, Buyer b, Wants w
WHERE po.buyerID = w.buyerID and w.buyerID = b.buyerID
GROUP BY b.buyerID, b.fullName;

/*find the average salary agents make as their rating increases, and who have a rating higher than 2.9*/
SELECT ar.rating, AVG(ar.salary) AS salary
FROM PropertyOversees po, AgentRepresents ar
WHERE po.agentID = ar.AgentID
GROUP BY ar.rating
HAVING ar.rating > 2.9;

/*Find the agent with the most number of properties they oversee*/
SELECT po.agentID, count(*) AS Oversees
FROM PropertyOversees po, Property p
where po.propertyID = p.propertyID
GROUP BY po.agentID
HAVING count(po.propertyID) >= (
    SELECT MAX(allProperties)
    FROM (
        SELECT count(*) AS allProperties
        FROM PropertyOversees
        GROUP BY agentID
    ) properties
);

/*find buyers and how many properties they are interested in that is within their budget*/
SELECT b.buyerID, b.fullName, count(*) AS withinBudget
FROM PropertyOversees po, Buyer b
WHERE po.buyerID = b.buyerID
GROUP BY b.buyerID, b.budget, b.fullName
HAVING b.budget >= ALL (
    SELECT s.targetPrice
    FROM PropertyOversees po2, Seller s
    WHERE po2.buyerID = b.buyerID AND po2.sellerID = s.sellerID
);
