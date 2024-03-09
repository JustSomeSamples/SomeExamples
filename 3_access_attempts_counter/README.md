<p>
3) Create a application, all of the business logic of which should be in one PHP script, meeting the following conditions:<br>
 - there is a client determined as a visitor of the website, who sends GET requests via web-browser<br>
 - request can have any format, length or content, according to RFC 3986<br>
 - there is a web-server (nginx) exists before you application, so all GET requests, for all URLs are routed to your script, as a typical website do<br>
 - application should always answer to a client with some text, according to the logic below<br>
 - if client sends request, on specific URL first time, application should answer with current date and time string<br>
 - if client sends request, on specific URL more than once - application should answer with string "Attempt #",<br>
 where # should be replaced with the amount of requests to a specific URL, from current client<br>
 - there is should be a mechanism to reset attempts, for a specific URL and current client<br>
 - it is forbidden to use any databases and files to store the data<br>
 - it is forbidden to use any frameworks or additional libraries<br>
 - try to write this minimalistic as you can<br><br>
</p>

<p>
Here we have 2 solutions for that: <code>access_attempts_counter_1_session.php</code> and <code>access_attempts_counter_2_cookies.php</code>.<br>
Even though access_attempts_counter_1_session itself does not use file handling, it does use a session that stores data in files, and if this option is not suitable because of that, then there is access_attempts_counter_2_cookies, which stores data in cookies and does not use files in any way.<br>
</p>

DESCRIPTION OF THE DEV/TEST ENVIRONMENT
---------------------------------------

<p>
According to the task, there must be a web server (nginx, apache) exists before application, so all GET requests, for all URLs must be routed to one of the scripts, as a typical website do.
</p>