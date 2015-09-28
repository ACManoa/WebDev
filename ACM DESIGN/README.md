#ACM Design
=====

###Purpose:
The purpose of ACM Design is work on the design aspects of the ACM website. This includes:
- Color Scheme
- Branding (Logo/icon)
- Typography
- Individual Web Page Layouts

###Frameworks
Styling for the website is currently done using Twitter Bootstrap's Framework (v3.3.5). If you are not sure how to use this framework, you can check out their documentation here: http://getbootstrap.com 

We use bootstrap to quickly develop a mobile friendly website and later override with our own custom css.

###Custom Styles
If you would like to override bootstrap's default styles, make sure you do not override any core bootstrap files. Instead, override with your own css files. If you are not sure how to set this up, the following diagram tries to help you out.

    Website Folder
    |
    |_css
    | |_bootstrap.min.css
    | |_custom.css (your css file)
    |
    |_js
    | |_bootstrap.min.js
    | |_main.js (your js file)
    |
    |_index.html

One important thing to point out is that you need to link your custom css AFTER you link your bootstrap's css files. If we were to use the above set up, it would look like so:

<!-- index.html -->
```html
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/custom.css" />
</head>
```



