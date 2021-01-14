# Railway-Reservation-System
a complete application to book tickets, It also sends email to user to confirm payment/tickets.

INTRODUCTION


Railway services are available in most of the countries in the world. However, the demand for fast, reliable, and passenger friendly services is always being felt. With the ever increasing passenger and freight loads, more efficient mechanisms are needed to handle this increasing demand. And this would not be of only man-power but of smart technologies which when induced within the system, would produce a smarter railway system throughout. Smart Computing is a newer approach of technology which can be efficiently used in Railway systems. Handling passenger data has been a key point of consideration in most railway services. In the case of Indian Railways, detailed passenger data is needed to be handled for mostly the reserved accommodations. And to provide fast and efficient services, the huge passenger data needs to be processed and stored in a very fast and seamless manner. For Indian railways, modifying the existing setup with Unique Identification (UID) based input will bypass a huge overhead of manual entry of passenger details. Also the verification of passenger-identity will be comprehensive and secure further. The introduction of a more efficient UID-based reservation system will facilitate in handling the data more efficiently.

MOTIVATION


Travel agents can charge a commission on every booking and may be restrictive in terms and conditions. Customers may need to visit the local agent or nearest railway station to book tickets. Through this project, we are able to create an environment for the customers so that they can book Train tickets online from anywhere and anytime allowing customers to book tickets well in advance. It also allows them to browse through the options and select the ones with best price, thus providing a hassle free experience.

OBJECTIVES


GENERAL OBJECTIVE

To automate the process of Train ticket reservation, booking and railway management hence minimise errors resulting from manual system operation.


SPECIFIC OBJECTIVES


• To design an online railway reservation information system to facilitate online booking and train scheduling, maintain customer records, provide an online menu on train timings, destinations and their prices.
• To implement the developed web based railway information system.
• To test and validate the developed system.

Overview of the project


The front-end, or the user interface is coded in PHP, which gives the user a necessary platform to interact, and modify contents of the database (MySQL), which assures reliability.

Features of the project's front-end : 


•	Collection of User ID and Password for authorization purpose. Option to fill details to filter search by providing departure and arrival city. 
•	A list of the trains matching your search options and their information like arrival and departure time. 
•	On selecting the appropriate train the system asks for personal information as well as payment information.
•	The train is booked and each booking changes the ticket status and the changes are reflected in the database.

Software Used


•	Operating system: WINDOWS 7 or above
•	Editor: Sublime Text 2.0 or above
•	Programming language: PHP, JAVASCRIPT
•	Web browser: Internet Explorer or any web browser.
•	Scripting Language: HTML/CSS
•	Server: Apache (XAMPP)
•	Database: MySQL and phpMyAdmin

Railway Reservation System consists of following modules:


•	Home Page
•	Registration Page
•	Sign-In Page
•	Selection of Departure and Arrival Cities with the Departure date
•	Selection of the desired train with the desired Timings
•	Passenger and Payment Details page
•	Booking confirmation Page
•	Booking Update Page
•	Booking Cancellation Page


Attributes of Entities/Tables



•	A table is a collection of related data held in a structured format within a database. It consists of columns, and rows. In relational databases, and flat file databases, a table is a set of data elements (values) using a model of vertical columns (identifiable by name) and horizontal rows, the cell being the unit where a row and column intersect. A table has a specified number of columns, but can have any number of rows. Each row is identified by one or more values appearing in a particular column subset. The columns subset which uniquely identifies a row is called the primary key. "Table" is another term for "relation"; although there is the difference in that a table is usually a multi set (bag) of rows where a relation is a set and does not allow duplicates.
	
The below diagram represents the tables and their receptive attributes present in the database project:

ENTITY	ATTRIBUTES


User	Name, Email, Password, Adhaar
Passenger	Pid, Pname, DoB, Gender, Address
Payment	Expdate, CardNo, CVV, Pid, Tid
Train	Tid, Tname, Acity, Atime, Dtime
Ticket Status	Tid, Bookedseates, Available seates

Algorithm/ Pseudocodes
1.	Algorithm to Register New User:
       Step 1: Begin
Step 2: To register, Enter  name, Adhaar no, Email, and Password. Click Submit.
Step 3: If the entry is valid  Information entered will be stored in database. And is redirected to the home page.
Else
Go to step 2
       Step 4: End


2.	Algorithm for  Login page:
Step 1: Begin
Step 2:  Enter  Email and Password. Click Submit.
Step 3: If the entry is valid ( ie. Information entered is already stored in database)
            Redirected to home page.
Else
Go to step 2
      Step 4: End

3.	Algorithm for Searching Trains:

       Step 1: Begin
Step 2:  Enter  Arrival City, Departure City and Date. Click Submit.
Step 3: If the entry is valid ( ie. Information entered is already stored in database)
            Redirected to bookings  page, where all the available options are displayed. 
Else
Go to step 2
        Step 4: End

4.	Algorithm to Book Tickets:

Step 1: Begin
Step 2:  Enter  the no of tickets to be booked and Click Book.
Step 3: If the entry is valid ( ie. If the no of seats selected is available)
       Step 4: Enter the personal as well as payment details of the passenger.
       Step 5: If all details entered are correct, Tickets are booked and is redirected to 
                   Confirmation page.                                                                                                                             
      Step 6: End. 

Algorithm to delete/cancel Booking:
       
 
     Step 1: Begin 
Step 2:  Enter  Pid of the booking obtained in confirmation page. And Submit.
       Step 3: The Booking is Deleted and is reflected in the Database.
       Step 4: End

5.	Algorithm to Update Booking:
      
      
       Step 1: Begin
Step 2:  Enter  Pid of the booking obtained in confirmation page as well as the no of tictets to update the booking. And Submit.
       Step 3: The Booking is Updated and is reflected in the Database.
       Step 4: End
       
       
       
Conclusion


In Railway Reservation System, the streamlining of the process of reservation without
human interaction is highly needed so as to perform well in highly competitive
market. Since it is a web browsing application it gives us adaptability in design. This
system is valuable for the traveller to straightforward the task of booking . THUS,
Railway Reservation System has led to ease of train ticketing, train scheduling and
also provided a means for customers to access and book trains with ease and in time.
It has also increased the speed with which information about customers are retrieved
and handled and train scheduling is tasked.



Future Enhancements


• Allows potential customers to perform seat as well as class selection.
• Allows passengers to print their tickets directly from the reservation system.



note -->  Screenshots.zip shows how thw final UI looks

note -->  rail.sql is the dbms file
