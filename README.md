# User Access Management
This is a PHP file that with a password encryption and full User access management system. It is based on american auto vehicle company [Tesla](https://www.tesla.com/), who is accelerating the world's transition to sustainable energy with electric cars, solar and integrated renewable energy solutions for homes and businesses.
# Executing The Program
## Linux
On linux machines, you can execute the program by cloning the git repo above. Follow the steps below to execute the program:
- Open a terminal/ bash terminal
- Clone the git repository (some distros have git pre-installed. if not, install it manya)
- Navigate to the repo directory
- Make the file executable (if not already)
- Execute the program
### Example
```console
[username@hostname ~]$ git clone https://github.com/softwarica-github/st4056-batch29ethical-finalassignment-Aiz9.git
Cloning into 'https://github.com/softwarica-github/st4056-batch29ethical-finalassignment-Aiz9'...
remote: Enumerating objects: 3018, done.
remote: Counting objects: 100% (3018/3018), done.
remote: Compressing objects: 100% (1792/1792), done.
remote: Total 3018 (delta 1193), reused 3015 (delta 1190), pack-reused 0
Receiving objects: 100% (3018/3018), 7.65 MiB | 606.00 KiB/s, done.
Resolving deltas: 100% (1193/1193), done.
```

***Note:** The project folder already contains all proper settings and images to run the file as a normal user or admin both*

## Windows
On windows systems, you can, like in the Linux system, install necessary modules for python and execute the program either from command-prompt, powershell or file-manager.
To execute the program with virtual environment:
- Open powershell (or command-prompt if you like)
- Clone the repository (should have git installed on the system)
- Navigate to the repository folder
### Example
```powershell
[username@hostname ~]$ git clone https://github.com/softwarica-github/st4056-batch29ethical-finalassignment-Aiz9.git
Cloning into 'https://github.com/softwarica-github/st4056-batch29ethical-finalassignment-Aiz9'...
remote: Enumerating objects: 3018, done.
remote: Counting objects: 100% (3018/3018), done.
remote: Compressing objects: 100% (1792/1792), done.
remote: Total 3018 (delta 1193), reused 3015 (delta 1190), pack-reused 0
Receiving objects: 100% (3018/3018), 7.65 MiB | 606.00 KiB/s, done.
Resolving deltas: 100% (1193/1193), done.
```


# Usase

## Main Menu


![main_win](Readme\\Mainpage.png)


This is the main page of the website. There are two options to choose from. You can:
- Login as an Admin.
#Admin Login

The ID password for Admin user is:
- Username: Admin
- Password: Admin@123456
#


## Admin Dashboard


![Admin_Dashboard](\Readme\\Adminlogin.png)


This is the main page for Admin, they can control all the activities in whole website.
Some admin privileges are:

- User Control management
- User Access management
- Posts management
- Access to all Questions/comments 


## User Control Management panel
![User_control_Managements](Readme\\Addusers.png)
### Adding Users
You can add a new user through the admin panel without needing to log out.
### Promoting Users
This button lets admins to promote normal users to Admin users.
### Deactivating the User
The account will be deactivated until next time the user logs or admin Approves for Activation
### Deleting the User
This lets Admins, delete the users account permanently, so if they want to log in as user they need to signup from start

## User Access management panel


![UAM_panel](Readme\\Addadmins.png)


This is where your saved keywords will appear.
### Adding Admins
You can add a new admins through the admin panel without needing to log out.
### Demoting Users
This button lets admins to demote Admins and make them normal users.
### Deactivating the User
The account will be deactivated until next time the user logs or admin Approves for Activation
### Deleting the User
This lets Admins, delete the users account permanently, so if they want to log in as user they need to signup from start



***Note:** Be sure to be connected to the database for the system to work.*


## Posts Management panel


![post_panel](Readme\\Addposts.png)

This is where all the posts posted on the page will be located.
### Adding Posts
You can add a new posts through the admin panel with description and headers.
### Editing the Posts
This button lets admins edit and update the posts that has already been posted which 
are made for normal users to see them normal users.
### Deleting the Posts
This lets Admins, delete the posts permanently,there will be no remains of the posts even in database.

## Question/Comments Panel


![Questions/comments](Readme\\questions.png)
This is where all the comments and questions asked by users will be posted for admins to reply.
### Replying comments
You can reply the comments and questions directly to people in their mails
### Deleting the comments
This lets Admins, delete the questions/comments permanently,
so the comments causing harm to the company or breaking law would be deleted.

#Normal User login
- Login as a normal user.

The ID password for Normal user is:
- Username: Elon
- Password: SpaceX@1234
#
##Post page
![User_home](Readme\\User-home-page.png)
This page is for seeing all the products of the company and the information they hand out.
##About
![About](Readme\\User-about.png)
This page is for users to learn the vision of the company and some part of it's history.
##Contact
![Contacts](Readme\\User-contact.png)
Contact page is for the users who want to ask questions/comment about any queries and get in touch 
with different kind of Tesla support.

##Profile page
![Profile_updates](Readme\\User-profile.png)
Profile page is for updating user details.




