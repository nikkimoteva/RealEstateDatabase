The real estate database contains information pertaining to a real estate company. This includes information related to the various branches, properties, clients, the services they provide, and the agents and lawyers hired. The database helps a real estate company record information in a way that reduces redundancy and allows a branch to view, edit, and filter data based on a user's permissions. 

Changes:
In our final schema we changed:
		* the cardinality between the buyer and the property to many-to-many so that it reflects the possibility that a buyer can be interested in many properties and a property can be wanted buy many customers
		* Removed entities marketing and caregivers because the scope of the project was getting too big, and their removal didn’t fundamentally change the purpose of the database.
		* 