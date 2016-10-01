Hi,

I found 2 xss errors on script.

First one is right here:

add_post.php file --> echo echo $_POST['title']; in the 55th line. You should use this like: if(isset($_POST['title']))

And other one is in the same file but in 59th line ---> echo echo $_POST['contents'];  you should use it like if(isset($_POST['contents']))

Have a nice day!
