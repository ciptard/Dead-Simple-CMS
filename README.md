Dead Simple CMS
================================================================================

What is it?
--------------------------------------------------------------------------------
This is about as simple as a CMS can get.  It only has one feature, and that is
to edit the page you are currently viewing.  This is ideal for simple websites
that only require a handful of static pages.  Once set up, the client can edit
each page's content with an easy to use rich text editor.  It doesn't have
complex features or settings to bombard your client with, and you could teach
your client to use it in a minute.

I created this for use on a local political candidate's website.  He often 
wanted to change content on pages, add a paragraph, and so on.  This enabled 
him to do it himself and not have to worry about HTML code.  This CMS would be
perfect for any website with just a few informational pages.  Get up in running
quickly!

How does it work?
--------------------------------------------------------------------------------
* It uses **.htaccess** to rewrite the URL.  This means that each page will look
like a folder.  You won't see **index.php** in the URL.  This makes links to a
particular page shorter and prettier too.
* It uses PHP, so your server must allow that.
* It stores the content of each page in a simple .txt file.  No need for a
database to set up.
* To enter *edit mode*, just tack an ampersand `&` and the secret key onto the
the end of the URL.  If your secret key is `asdf123`, and you want to edit a
page named `about`, then go to your address bar, make it look 
like `example.com/about&asdf123`, then press enter.
* When in edit mode, the content area will have a red box around it.  Click it
and you will then be able to edit the page's content right in the browser with
a rich text editor that appears.  Be sure to click *save* to record changes.
* To exit edit mode, just click a different link in the menu.
* Be sure to tell your client to never link to a page with the secret key in
the URL.  This is just like giving away the password.

How do I set it up?
--------------------------------------------------------------------------------
Go into **header.php**, and change the secret key.  There are further directions
inside that file, but essentially, what you're going to do is look for
`$_REQUEST['edit_mode']` and change it to `$_REQUEST['asdfjkl123']`, or whatever.

Also in **header.php** is where the menu is in this example.  Note how no slashes
are used in the link href.  While you're in there, change the `<title>...</title>`
too.

Make sure that when you create a page, you also create a .txt for that page inside
the *txt* folder.  If you create a page named *products*, and you will need to 
create a **products.txt** file and add a link to that page in the menu
in **header.php**.

I kept this website very simple.  It should be very easy to update to your
own theme, as I didn't flood the screen.css with custom stuff.

Troubleshooting
--------------------------------------------------------------------------------
A likely issue is problem with the **.htaccess** file.  Try uncommenting the 
`RewriteBase` line by removing the `#` sign.  You may need to add a folder after 
the / as well depending on how your server is set up.

	RewriteBase /mysite

If there are still issues, you could delete the file.  But if you do this, the 
URLs will not work the same way.  You will have `example.com/index.php?id=pagename`
in the URL, instead of just `example.com/pagename`. Also, to enter edit mode, it 
would be like `example.com/index.php?id=pagename&edit_mode`.  This means you will
have to go into **header.php** and change the *menu* links as well.

If you cannot even see the **.htaccess** file, try changing your folder options,
as in Windows Explorer, to view *Hidden Files*.

Copy of .htaccess file
--------------------------------------------------------------------------------
If you deleted or lost the **.htaccess** file, fear not, because here is a copy:

	Options +FollowSymLinks
	RewriteEngine On

	#RewriteBase /

	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php?id=$1 [L]

Open Source
--------------------------------------------------------------------------------
This project makes use of other open source projects.  No specefic terms are
attached to this software, only that it is open source, however the included
projects may have more specific terms in how they may be used.  This is free
software, and there are no guarantees or warranties.

* [jQuery](http://jquery.com/)
* [jeditable](http://www.appelsiini.net/projects/jeditable/)
* [jwysiwyg](http://code.google.com/p/jwysiwyg/)