# Lab 6 — my answers
Name: Benjamin Mutisya · Admission number: 227606

## Q1
In process-delivery.php, the browser already checks the member number. Why does PHP check it again? Name one way the browser's check can be skipped.

PHP checks the member number again because client-side validation can be easily bypassed, so server-side validation is required for security and data integrity. For example, someone can send the data straight to process-delivery.php without using the form.

## Q2
In my INSERT, bind_param has the letters 'issd'. What does each letter stand for, and which value does it go with?

In PHP's mysqli_stmt::bind_param(), the string 'issd' tells the database the data types for the four variables I am passing into my SQL query. In order, i is integer for farmer_id, s is string for delivery_date, s is string for session, and d is double for litres.

## Q3
Why is Delete a small form sent by post, while Edit is a link?

GET requests only fetch data, while POST requests change or destroy data. Edit is a link because it only shows the form and changes nothing, but Delete is a POST form so that a search engine or browser following links cannot delete a delivery by accident.

## Q4
Someone opens deliveries.php?date=' OR '1'='1 on my site. What happens, and why does my prepared statement not run it as SQL?

My page will safely return zero records (or show an empty table) instead of dumping my entire database, because prepared statements completely separate SQL code from user data.
