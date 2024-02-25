# Robolap
Web application that displays laptops in user defined ways.

## Running the app

To run the server you need [xampp](https://www.apachefriends.org/download.html) and configured the database connection to [SSMS](https://learn.microsoft.com/en-us/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-ver16) in "connect.php" script. The repo contains a demo database in the form of a backup file ("Gestiune Laptopuri Robolap.bak") which can be imported in SSMS.

The app displays the laptops owned by a (simulated) retailer, along with each laptop specifications. On the left side there is a panel which contains different criteria (RAM, CPU type, resolution etc...) to filter these laptops. There is also an admin page through which the user can add, delete or modify the laptops.
