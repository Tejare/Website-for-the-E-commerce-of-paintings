# Website-for-the-E-commerce-of-paintings
A website where artists can upload their paintings and customers can rent or buy them.Also contains a real time auction system.

The DBMS concepts that were used:

•	Triggers: Whenever a painting is deleted, the painting is automatically inserted into a backup table using the trigger

•	Normalization: The database was converted from a 1NF form to a 2NF form to make it more efficient than before

•	Assertion: An assertion is used to check if the painting uploaded by the artist has a minimum cost of 1000 Rupees so that the shipping charges can be accounted for.

•	Natural join: While returning the painting, the logged in customer selects a painting to return. We used the natural join to verify if the customer id from the customer table is the same on the painting table, that is, the customer should own the painting first to be able to return it.  

•	Real time: The auction page checks the end time of every auction and if the auction is completed then it is displayed separately in another section.



The real time auction:
When the artist uploads a painting of his for the auction, the painting appears as a card in the customer’s auction page.
The number of ongoing auctions is displayed one below the other in the current auctions section. Below that the cards of the auctions that are done are displayed.
The customer selects the auction card for the painting that he would like to bid for, and then the bid is updated if he bids greater than the previous bid.
After the end time of the painting is done, the painting card automatically goes in the section of completed auctions with the name of the customer who had the highest bid on the painting. If the painting goes unsold, then the card shows unsold.
Php was used to make the above technology possible using while loops and if conditions

What can be done in the future:
The home page of the customer shows the available paintings in the order that they were inserted. Instead, the page can be made to display the paintings in the order such that the paintings that are trending come up first and then the rest of the paintings.
The paintings have been sorted according to their theme. So, if a customer buys or hires ‘nature’ paintings continuously, then his home page can be made to display all the paintings with the theme ‘nature’ first.

Check the auction.docx fie for screenshots
