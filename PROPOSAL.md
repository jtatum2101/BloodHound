# BloodHound (PHP, HTML/CSS, PHPMyAdmin, MySQL)

 ## Crime Record Management System

## Project Description and Motivation:
I will be building a Crime Record Management System using PHP. I was motivated to do this project to get a better understanding on what material I will be working on for the company, ADSi. ADSi uses PHP, which is fairly new to me. I thought if I do this project in their language, it will give me a great head start on what to expect on the job.

## Pior Art:
I made two other Crime Record Management System Projects, one in Java and one in Spring Boot. The Java project was a pretty straight forward project that rely on list of information that the user could put in. Once I got to Spring Boot, I added on to the basic Java project, including up to five suspects and their personal description. This project was also connected to a database unlike the Java project. This project, however, will be in a different language as well as adding more details. This project will be more of a replica of ADSi's system that they work with on a daily basics.

## Core User WorkFlow:
- Users of the website are spilt into two groups:
  - Admin
  - Police Officers
- The user(s), depending on their role, will be brought to a different dashboard where they have full access to the features that their roles can perform in the application.
- If the user is signed up as a police officer, Their role is create the records in the application.
- Creating the record(Police Officers Only):
 - The requirements for every criminal record is shown below:
   - The record will need the criminal's name.
   - The record will need the criminal's date of arrest.
   - The record will need the criminal's county in which they were arrested at.
   - The record will need the criminal's birth year.
   - The record will need the criminal's charges.
   - The record will need the criminal's height.
   - The record will need the criminal's weight.
   - The record will need the criminal's hair color.
   - The record will need the criminal's eye color.
   - The record will need the criminal's ethnicity, or race.
   - The record will need the criminal's charges.
 - There are also optional information as well:
   - The record can have the criminal's min sentence.
   - The record can have the criminal's max sentence.
   - The record can have the criminal's released date.
   - The record can have the criminal's mugshot. 
- Profile settings(Officer Only):
  - The officer will be able to edit their own profile settings.
  - Settings like their password and email. 
  - They can change those piece of information through their profile settings.
 
- If the user is signed up as a admin, their role is far more advanced than police officers. 
- As an admin, the user will have full control over the management of the website. 
- The abilities that the admin will have are listed below:
  - The admin will be able to access all records that police officers create. 
  - The admin can also search for files by charges and the criminal's name.
  - The admin will be able to update or delete the records that police officers create.
  - The admin will also be able to access all users that are created in both the application and the database. 
  - The admin will also be able to edit and delete any users' information.
  - The admin will also be to assign police officers to their designated county and state.
  - The admin will also be able to create new counties and states that police officer can be assigned to.
  - Creating a county and state(Admin Only):
   - The county's information will be listed down below:
     - The county will need the name of the county.
     - The county will need the name of the state. 
     - The county will need the crime rate of the county.
     - The county will need the dangerous cities of the county.
   - Access to all records(Admin Only):
     - The records will be displayed by a table.
     - The records can be filter out by a search of the charge and name of the criminal.
     - The records will have a link to access all the details of that certain record.
     - The records will have an edit option to make changes to the record.
     - The records will have a delete option to remove the record for both the application and the database.
   - Access to all users on the application(Admin Only):
     - The users will be displayed by a table.
     - The users will have a link to access all the details of that certain user's details.
     - The users will have a delete option that will remove the user from both the application and the database.

## Project Timeline:

### First Week(setting up databases and login and registration system for the different users):
 - The first week is getting the separate user to operate and be put into their correct databases.
 - The user will be revealed their welcome page including a dashboard where they can navigate through the site and their personal features.
 - I will be learning the basics and the connection between PHP and the databases as well. 
 - I will make sure that both the login page and the registration page will be connected to the database and able to use the information stored in that database.

### Second Week (Functionality for different users):

- I will be completed with the login and registration system of the application, and making sure that the user is directed to the correct dashboard to access their own features.

#### Police Officer:
- Creating a record requirements:
  - Mugshot
  - Name
  - Eye Color
  - Hair Color
  - Ethnicity
  - Date of Arrest
  - County of Arrest
  - Charge
  - Sentence (Min and Max)
  - Arrest Date 
  - Possible Release date
- Also can change profile settings like password.

#### Admin:
- Full control over the website.
- Can view all users on the website and have the option to delete their profile
- Can view all record and have the option to delete the record
- Can assign police officers to counties and remove them.
- Can also add and remove counties to the systems.
- Has the ability to update and delete records. The admin can also delete users, as well as assign officers to a certain county and state.
- Updating a record requirement: 
  - Name of Criminal
  - Date of Arrest 
  - County
  - Charge
- Deleting a record requirements:
  - Charge 
  - County
  - Name of Criminal 
  - Date of Arrest 

### Third Week(Profile page for the different users):
- Completed Tasks by this week:
 - Officers will have the ability to create records for both the application and the database. 
 - Admin will have the ability to update and delete records from both the application and the database.
 - Admin will also have the abilit to create, update and delete counties from both the application and the database.

- The tasks for this week:
 - Officer Only:
  - The officer will be shown their profile details that will include that their ability to change their password or email.
  - The officer will also be able to include a profile picture or have a default profile picture.
 - Admin Only:
  - The admin will have access to all user's information.
  - The admin will have the ability to delete the user's information from both the application and database.
  - The admin will have the ability to edit their profile information by changing their password or email.
  - The admin will also have the ability to include a profile picture or have a default profile picture.

### Fourth Week (The styling of the website):
- Completed Tasks by this week:
 - Officers will have the ability to create records and access their profile information.
 - Admin will have the ability to update and delete records from both the appilcation and the database.
 - Admin will have the ability to delete users from both the application and the database.
 - Admin will also have the ability to create, update, and delete the details of counties for both the application and the database.
 - The admin will also have the ability to update their own profile settings by changing their password or email.

-The tasks for this week:
 - The user will be welcomed with a color scheme that will make the website pop and give more character to the website. 
 - The dashboard will be more user interactive and smooth.
 - The user will be able to read the fonts that are revealed to them, and enjoy the interaction that they have with the website.

## Technologies:
- PHP
- CSS
- HTML
- PHPMyAdmin

## Students:
- Jeremiah Tatum
