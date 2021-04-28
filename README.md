# myCampus

![GitHub last commit](https://img.shields.io/github/last-commit/thehackermonk/myCampus?style=flat-square) ![GitHub](https://img.shields.io/github/license/thehackermonk/myCampus?style=flat-square) ![GitHub issues](https://img.shields.io/github/issues/thehackermonk/myCampus?style=flat-square) ![GitHub language count](https://img.shields.io/github/languages/count/thehackermonk/myCampus?style=flat-square) ![GitHub top language](https://img.shields.io/github/languages/top/thehackermonk/myCampus?style=flat-square) ![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/thehackermonk/myCampus?style=flat-square) ![Twitter Follow](https://img.shields.io/twitter/follow/thehackermonk?style=social)

myCampus is an ***interactive college web portal*** which acts as a communication medium between students and faculties in a college. The web site can be used for exchanging messages, submit assignments, notify everyone about upcoming events, etc.

There is no such existing system. The students and faculties talk to each other when they meet. Assignments are submitted in the college. Internal exam dates, external exam dates, marks or details about any other events are put on the college notice board.

The proposed system takes all these things into one place. Only authenticated users are allowed to use the system and the principal or head of the department should approve all users to access the system.

### Technologies used
Front End: *php - CodeIgniter*
Back End: *mySQL*

### Types of users
1. Principal
	* Approves user account creation.
	* Add updates about college level events and comment on them.
	* Add exam dates and fee details.
	* Sent messages to all other users.
2. Head of the department
	* Approves user account creation.
	* Add updates department level events and comment on them.
	* Notify about projects.
	* Sent messages to all other users.
3. Teacher
	* Add updates about class tests, assignments, etc. and comment on them.
	* Provide internal marks.
	* Sent messages to all other users.
4. Student
	* View college level updates or updates of their department and also comment on them.
	* Sent messages to all other users.

### Modules
1. Authentication: The user must have a user id and password to login into the system. Also when a user creates an account the principal or head of the department should approve the user account.

2. Mailing: The system provides a great communication experience. The user can mail to other users using this system. They can also attach files with their mail if they want to.

3. Feeds: Principal, head of the department and teachers can update feeds about upcoming events in the college. The students are given permission to read the feeds and also comment on them.

4. Event Calendar: A calendar showing important dates for the college. This includes exam dates, dates for paying fees, annual sports, etc.

5. Course Management: The principal can add new course, edit existing one and can even set if the course is being taught in the institution or not.

6. Subject Management: The head of the department can add new subjects and allot it to an existing course. The user can also edit the subject details.

7. User Search: Principal, head of the department and teachers can search users using their user id or even their name.
