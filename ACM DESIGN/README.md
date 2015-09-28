#ACM Design
=====

###Purpose:
The purpose of ACM Design is to work on the design aspects of the ACM website. This includes:
- Color Scheme
- Branding (Logo/icon)
- Typography
- Individual Web Page Layouts

###Frameworks
Styling for the website is currently done using Twitter Bootstrap's Framework (v3.3.5). If you are not sure how to use this framework, you can check out their documentation here: http://getbootstrap.com 

We use bootstrap to quickly develop a mobile friendly website and later override with our own custom css.

##Front-end Setup Up Tutorial v1.0
If you would like to get your hands dirty with some front-end development, I created a small tutorial to help you get all set up. (It's not the best, but we hope it will do).

####Basic File Structure Setup
Before getting into the details, the first thing you want to do is create a directory with the name of your site. This could be anything you would like. In this tutorial we will name it "Website".

Inside of "Website" we create two other directories (css and js) and a file called index.html. The directory css will hold all your css files for the site, the directory js will hold all your javascript files for the site, and the file index.html will be your "home page". 

It should look like this:
    
    "Website" Directory
    |
    |_css/
    | 
    |
    |_js/
    | 
    |
    |_index.html

####Adding Bootstrap
Now how do we exactly incorporate bootstrap with our website? There are a few ways, but I will only explain two options.

1. First, you can head over to http://getbootstrap.com and download the whole package to your machine and from there add them to your "Website" directory.
2. Second, you can use Bower (a really useful and convenient package manager for the web) to install your bootstrap files.

Now I'm not going to get too much into detail when going the Bower route, so if you want to check it out head over to their site at: http://bower.io/ and to install bower onto your machine head over to: http://bower.io/#install-bower 

Alright, going back to the first option. So you downloaded your distribution of bootstrap. Inside you should find two important directories named "css" and the other "js". 

It should look something like this:

    Bootstrap Dist Folder
    |
    |_css
    | |_bootstrap.css
    | |_bootstrap.min.css
    |
    |_js
      |_bootstrap.js
      |_bootstrap.min.js
    

    //Keep in mind that you will have more files in your dist folder, but what we need to pay attention to is shown above.

The "min" in bootstrap.min.css or bootstrap.min.js stands for "minified". This means that characters that used to add readability to your code are taken out. This reduces the amount of data that needs to be transferred. If you want to read more about it, head over to this wiki page: https://en.wikipedia.org/wiki/Minification_%28programming%29

And because we want our websites to render quickly, we will use the minified versions. If you ever want to look into the code to understand or learn it, you can simple use the non-minified versions.

Alright, now that we understand what bootstrap is and what the distribution folders contain, we can add it to our website. The diagram below illustrates what our file structure should look like, after adding the bootstrap files.


    "Website" Directory
    |
    |_css/
    | |_bootstrap.min.css
    | 
    |
    |_js/
    | |_bootstrap.min.js
    | 
    |
    |_index.html

####Adding Custom css 

Now you may be thinking that since you are using bootstrap, you are restricted and limited to using only the styling they offer. This is not true. What you can do is add your own css files and override any bootstrap css. You would simple just create a new file within the css directory of your website, and name it anything you would like. For this tutorial we will name it custom-styling.css. Your file structure should now look like this:

    "Website" Directory
    |
    |_css/
    | |_bootstrap.min.css
    | |_custom-styling.css
    | 
    |
    |_js/
    | |_bootstrap.min.js
    | 
    |
    |_index.html

One important thing to point out is that you need to reference your custom css AFTER you reference your bootstrap's css files. If we were to use the above set up, it would look like so:


```html
<!-- Inside of index.html -->
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/custom.css" />
</head>
```
####Adding jQuery

So you might think that you're all set and ready to go, but not just yet. Bootstrap uses cool animations and transitions with components, such as a modal sliding in when you click a button. This is all handled in bootstrap.min.js, which we already have in our file structure, but one thing to note is that bootstrap.min.js depends on jquery. So we will need to also add that to our file structure as well.

There are 2 ways of doing this:

1. Downloading the latest version and adding it to your website file structure.
2. Referencing to it through a Google Hosted Library.

When downloading, always download the most recent version of jquery. You can do that here: https://jquery.com/

After downloading it, you will need to add it to your js folder inside of your website file strucure. So now your file structure should look something like this:

    "Website" Directory
    |
    |_css/
    | |_bootstrap.min.css
    | |_custom-styling.css
    | 
    |
    |_js/
    | |_bootstrap.min.js
    | |_jquery.min.js
    | 
    |
    |_index.html

When referencing to a host library, make sure you are referencing to an updated version. You can view all the hosted libraries from Google here: https://developers.google.com/speed/libraries/. What we want is the jquery one.

####Putting it all together

In the end we want our file structure to look like so:

    "Website" Directory
    |
    |_css/
    | |_bootstrap.min.css
    | |_custom-styling.css
    | 
    |
    |_js/
    | |_bootstrap.min.js
    | |_jquery.min.js
    | 
    |
    |_index.html

And our actual referencing in our index.html file will look like this:
```html
<html>
	<head>
		...
		<!-- Add our custom-styling.css AFTER bootstrap.min.css to OVERRIDE bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/custom-styling.css" rel="stylesheet" />
	</head>
	<body>

		<!-- Add our js files after to increase page loading speed -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>
```



