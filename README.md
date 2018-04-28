# Assignment05: User Survey Website [Idiotville]
## Information Architecture - Kurtis Haut
### Intent of Webstie
The intent of this website is that a new, front-end development company is looking for new employees. This company specializes in using the latest front-end development techniques to build unbelievably cool websites. This company designs websites for any business, however, it is going to specialize in revamping older Mom and Pop business that were built with archaeic technologies. 

The company is looking for talent for all three roles that are crucial in front-end web development; Information Architects, Designers, and Coders. This company is really ideal to work for because you can work for them remotely to fit the convenience of your schedule. Creating your own hours is one of the pillars that this organization was built upon. 

The idea for the website is that vistors to the website would be front-end developers looking for some extra work. These developers would see the offerings of the company, and if they vibe with our culture and are interested in employment, apply for a job. The idea is that a vistor can create an account, apply and then track the status of their application. Additionally, there will be the administrative component of the website that only admins will be able to see. When an admin logs into the website, they will be able to see all the applications and make a decision as to whether or not they are a good fit for the company. If they are a good fit, the admins can edit their form directly from the website and mark them as hired. Once this happens, the applicant will receive a notification via email that they have been hired by Idiotville! It is important to note that these are all ideas for the website itself, and are subject to change based on the capibilites/discretion of the Designer and Coder.

### Ontology - Domain and Structure
There are many important elements in communicating the message of this website to potential developers. Chiefly, it is vital to have a nice landing page when these applicants first visit our company's website. First impressions are super important, and making first digital impressions is what this company is in the business of doing. 

It is also very important to set the right mood for our applicants. We want to attract young, hip collegiate students who are looking to pick up some work for pay on the side. We want the majoriy of the applications to come from them, therefore we need to create the perception of an environment that they would feel comfortable and exited working in. The right mood is one that is relaxed, fun, young, hip, flexible yet having enough professionalism to make sure it is taken seriously.

It is important to have good information about the company itself. Who we are, what we do, the team doing it etc. However, we do not want it to read like a textbook. All we want to acheive here is peaking the interest of potential applicants and get them to apply.

Important items for the applicants would be why they want this job, what their specialites are, what sort of prior experience they have, and previous education. For specialites, I am thinking what technologies are they proficient in. For example Angular.js, Angular 5, React, Bootstrap, etc. Prior experience could include a link to the projects they would like to showcase, a resume, or a link to their LinkedInn account. Education could include a transcript or just what degree they have received from the institution they received in from.  It  will be important for the application (form) to capture this relevant infromation.

Important items for the adminstration would just be access to the applications and abilites to edit the applications or delete them. 

### Taxonomy - Wording 
In general, the plan is to word elements in the ontology in a way that is simple and direct. The wording must be done in a way that is consistent with the importance of creating the proper mood/environment. For example, instead of saying Applications on the tab that has the application form, we would say Apply, or Apply Here, or even Apply Now!

Here is the plan for referring to important elements for this website. The company information will be referred to as About. The initial landing page will be referred to by Home. The applicants themselves will be referred to by developers. Loging in information will be referred to as login. Creating an account will be referred as such (register is too old fashioned).

The applications will be made in the html form tags as expected. Name will refer to name, Email will refer to email. Reason for applying will be radio bottons. Options could include supporting a family, flexibility in work schedule, Extra income. Education can be a radio botton where the options are various degrees. 

Company information page needs to cover the following topics and will be referred to in this way to create the previoulsy specified environment. 
-Who We Are
-What We Do
-How We Do
-Why We do
-Our Team

In each of those sections, unordered lists will be used to convey the info. 

### Choreography - Information Navigation Dance
The order that the info will be presented to the vistors of the webpage is as follows. 
1. Landing Page 
..* Will have slideshow 
..* Slideshow must convey whole message
..* Must use Z-Pattern, with terminal area being a link to apply
2. Navigation Menu  
..* Top left will have the company logo and slogan and serves as as link to the home page
..* On the right will be the other navigational elements: Home, About, Apply, Login
3. About Page
..* Will read top down with the sections: Our Team, Who We Are, What We Do, How We do, and Why we do
4. Apply Page
..* Application to work for Idiotville
5. Login Page
..* Login form 
..* If user does not have an account, they will have the option to create the account
6. If Admin logs in
..* They are taken directly to the page where they can view applications
7. If applicant logs in
..* Taken to the page where they can check the status of their application

###Intended Database Desing
There will be two tables in the database to capture all the relevant information
1. Table 1 [Creating an account]
..* Must capture name and password and store it for later use
..* Varchar would be good for the type for both Name and Password attributes
2. Table 2 [Applying to work for us]
..* Must capture and store the application data. See previous sections for details on what needs to be captured

### Wireframe for Intended Website 
![alt wireframe](https://github.com/kurthaut/assignment05-idiotville/blob/master/Wireframe.png)

