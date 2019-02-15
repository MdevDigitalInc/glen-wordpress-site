INSERT INTO `tblFAQ` VALUES (1,'How do I know if youll have a spot available for my child?','Generally, within 4-6 months before you are looking for care for your little one, we will have an idea of availability. When we believe there is a good chance well have a spot, well give you a call to come in for a tour.'),(2,'How will I know where I am on the wait list?','Give us a call at any time, and we\'d be happy to let you know where you are on our wait list. Keep in mind however, that if there are many families ahead of you, its not necessarily a reason to worry; often people put their names on several lists just to get the process started, then later they move or decide not to go back to work, etc. So never become discouraged.'),(3,'When can I come in for a tour?','We would love to have you in for a tour! Seeing Arbour Glen, and as importantly, how you feel as you walk through Arbour Glen, are criticalto knowing whether we are the right centre for your child. Typically, we have families in for tours once their name comes closer to the top of the waiting list, to not disrupt our programs and the children already in our care. Please call, and well either book a time for you to come or let you know when is best to call us back.'),
(4,'Does Arbour Glen accept children on Child Care Fee Subsidies?','Yes Arbour Glen, accepts all children on child care fee, as does all centres in London and Middlesex. To apply for subsidy please go to Online Child Care Fee Subsidy Application for the City of London at https://occmsbilling.london.ca/olaf/'),
(5,'Do you have part-time spots available?','Yes, we offer both full-time and part-time spots in all age groups, depending on availability. Its best to speak to us directly, so please call us for further information.'),(6,'What time can I drop off and pick up my child?','Arbour Glen is open from 7:30 to 5:30 Monday through Friday. We will discuss your particular needs with you when you come in for your tour, and generally we are able to accommodate.'),(7,'If I have one child at Arbour Glen, are any future siblings given priority?','As an existing family, you will be given priority on our waiting list. Keep in mind as well, that to be considered an existing family, you must have your other child at Arbour Glen at least part-time.');



';


update tblFAQ set Answer = 'Does Arbour Glen accept children on Child Care Fee Subsidies?','Yes Arbour Glen, accepts all children on child care fee, as does all centres in London and Middlesex. To apply for subsidy please go to <a href="https://occmsbilling.london.ca/olaf/">Online Child Care Fee Subsidy Application for the City of London</a>' where id = 4;


 



 update tblEmployees set Name = 'Jamie, RECE', History ='Jamie is a former recipient of the Children\'s Service Advocacy Award from the Assoc. of Early Childhood Educators. She has been an ECE since 1979 and with Arbour Glen since 1999.', Quote = 'Nothing warms my heart more than to see a joyful child fully absorbed in what they are doing. I love caring for our team of Educators who dedicate themselves fully to children. This is my lifes passion.', TeamID = 1, Title = 'Executive Director', Avatar = 'purple', avatarImage = '/img/avatars/avatar-jamie.png' Where ID = 2


'




 update tblEmployees set Name = 'Charlene, RECE',History = 'Charlene was formerly awarded Early Childhood Educator of the Year for Ontario and was also a runner up for the Prime Minister\'s Award for Excellence in Early Childhood Education. She has been an ECE since 1990 and with Arbour Glen since 1990.',Quote = 'Sharing literature with children has always been my favourite thing to do! Whether through puppet shows, picture books or story telling, I love watching the expressions of wonder on their faces.',TeamID = 1,Title = 'Program Supervisor',Avatar = 'green',avatarImage ='/img/avatars/avatar-charlene.png' Where ID = 3;
 







'--  update tblEmployees set Name = 'Cydnee, RECE', History = 'Cyndee has been an ECE since 1986 and with Arbour Glen since 1986.', Quote = 'All four of my children went here too: Arbour Glen is very much a second family to me. I love the variety in my day, but especially working with the children  who can have a bad day when they walk into a classroom and get swarmed with hugs!', TeamID = 1, Title = 'Program Administrator', Avatar = 'blue',avatarImage = '/img/avatars/avatar-cyndee.png' Where ID = 1;



update tblFAQ set Answer = 'Yes, Arbour Glen, accepts all children on child care fee, as does all centres in London and Middlesex. To apply for subsidy please go to <a href="https://occmsbilling.london.ca/olaf/">Online Child Care Fee Subsidy Application for the City of London.</a>' Where ID = 4;