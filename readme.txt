The real estate database contains information pertaining to a real estate company. This includes information related to the various branches, properties, clients,
the services they provide, and the agents and lawyers hired. The database helps a real estate company record information in a way that reduces redundancy and 
allows a branch to view, edit, and filter data based on a user's permissions. Furthermore, it will help the company to keep track of all the agents and the
different properties they are overlooking.
The users will be the branch manager, agent, buyer, and seller. A branch manager will be able to update all the information in the branch they are responsible for.
An agent is able to only update the property, buyers and sellers’ information. The buyers and seller can only view the data for the property and the company’s
services. The database will help the company keep track of the cooperation between the sellers, buyers and agents. It is also more convenient for the sellers and
buyers since it summarizes the different services that they may want (e.g, agents and movers).
The database has different views for the manager, agents, and the customers as they have different privileges to the database. For example, a manager is able to
overlook the agents' salaries, and an agent is able to take a look at a buyer/seller's financials such as a buyer's salary and budget, and a customer is only able
to view some of the tables such as an agents' contact informations and properties.
The GUI offers some functionalities to managers and agents (some are restricted to the agents), such as viewing the average salary of agents per rating and finding
buyers and the number of properties they are interested in. 


Changes:
In our final schema we changed:
		* the cardinality between the buyer and the property to many-to-many so that it reflects the possibility that a buyer can be interested in many
		properties and a property can be wanted buy many customers
		* Removed entities marketing and caregivers because the scope of the project was getting too big, and their removal didn’t fundamentally change
		the purpose of the database.
