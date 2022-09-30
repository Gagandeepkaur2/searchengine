<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<div>
		<h3>PHP</h3>
		<hr>
		<p>PHP is a general-purpose scripting language geared toward web development.[5] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[6] The PHP reference implementation is now produced by The PHP Group.[7] PHP originally stood for Personal Home Page,[6] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[8]</p>
		<p>PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response.</p>
		<h3>History</h3>
		<hr>
		<p>PHP development began in 1994 when Rasmus Lerdorf wrote several Common Gateway Interface (CGI) programs in C,[14][15] which he used to maintain his personal homepage. He extended them to work with web forms and to communicate with databases, and called this implementation "Personal Home Page/Forms Interpreter" or PHP/FI.</p>
		<p>PHP/FI could be used to build simple, dynamic web applications. To accelerate bug reporting and improve the code, Lerdorf initially announced the release of PHP/FI as "Personal Home Page Tools (PHP Tools) version 1.0" on the Usenet discussion group comp.infosystems.www.authoring.cgi on June 8, 1995.[1][16] This release already had the basic functionality that PHP has today. This included Perl-like variables, form handling, and the ability to embed HTML. The syntax resembled that of Perl, but was simpler, more limited and less consistent.[7]</p>
		<p>An example of the early PHP syntax:[17]</p>
		<p>
			<!--include /text/header.html-->

           <!--getenv HTTP_USER_AGENT-->
           <!--if substr $exec_result Mozilla-->
             Hey, you are using Netscape!<p>
           <!--endif-->
           
           <!--sql database select * from table where user='$username'-->
           <!--ifless $numentries 1-->
             Sorry, that record does not exist<p>
           <!--endif exit-->
             Welcome <!--$user-->!<p>
             You have <!--$index:0--> credits left in your account.<p>
           
           <!--include /text/footer.html-->
		</p>
		<p>Early PHP was not intended to be a new programming language, and grew organically, with Lerdorf noting in retrospect: "I don't know how to stop it, there was never any intent to write a programming language [...] I have absolutely no idea how to write a programming language, I just kept adding the next logical step on the way."[18] A development team began to form and, after months of work and beta testing, officially released PHP/FI 2 in November 1997.</p>
		<h3>PHP 3 and 4</h3>
		<p>Zeev Suraski and Andi Gutmans rewrote the parser in 1997 and formed the base of PHP 3, changing the language's name to the recursive acronym PHP: Hypertext Preprocessor.[7][22] Afterwards, public testing of PHP 3 began, and the official launch came in June 1998. Suraski and Gutmans then started a new rewrite of PHP's core, producing the Zend Engine in 1999.[23] They also founded Zend Technologies in Ramat Gan, Israel.[7]</p>
		<p>On 22 May 2000, PHP 4, powered by the Zend Engine 1.0, was released.[7] By August 2008, this branch had reached version 4.4.9. PHP 4 is now no longer under development and nor are any security updates planned to be released.[24][25]</p>
		<h3>PHP 5</h3>
		<p>On 1 July 2004, PHP 5 was released, powered by the new Zend Engine II.[7] PHP 5 included new features such as improved support for object-oriented programming, the PHP Data Objects (PDO) extension (which defines a lightweight and consistent interface for accessing databases), and numerous performance enhancements.[26] In 2008, PHP 5 became the only stable version under development. Late static binding had been missing from previous versions of PHP, and was added in version 5.3.[27][28]</p>
		<p>Many high-profile open-source projects ceased to support PHP 4 in new code from February 5, 2008, because of the GoPHP5 initiative,[29] provided by a consortium of PHP developers promoting the transition from PHP 4 to PHP 5.[30][31]</p>
		<p>Over time, PHP interpreters became available on most existing 32-bit and 64-bit operating systems, either by building them from the PHP source code, or by using pre-built binaries.[32] For PHP versions 5.3 and 5.4, the only available Microsoft Windows binary distributions were 32-bit IA-32 builds,[33][34] requiring Windows 32-bit compatibility mode while using Internet Information Services (IIS) on a 64-bit Windows platform. PHP version 5.5 made the 64-bit x86-64 builds available for Microsoft Windows.[35]</p>
		<h3>PHP 6 and Unicode</h3>
		<p>PHP received mixed reviews due to lacking native Unicode support at the core language level.[37][38] In 2005, a project headed by Andrei Zmievski was initiated to bring native Unicode support throughout PHP, by embedding the International Components for Unicode (ICU) library, and representing text strings as UTF-16 internally.[39] Since this would cause major changes both to the internals of the language and to user code, it was planned to release this as version 6.0 of the language, along with other major features then in development.[40]</p>
		<p>However, a shortage of developers who understood the necessary changes, and performance problems arising from conversion to and from UTF-16, which is rarely used in a web context, led to delays in the project.[41] As a result, a PHP 5.3 release was created in 2009, with many non-Unicode features back-ported from PHP 6, notably namespaces. In March 2010, the project in its current form was officially abandoned, and a PHP 5.4 release was prepared containing most remaining non-Unicode features from PHP 6, such as traits and closure re-binding.[42] Initial hopes were that a new plan would be formed for Unicode integration, but by 2014 none had been adopted.</p>
		<h3>PHP 7</h3>
		<p>During 2014 and 2015, a new major PHP version was developed, PHP 7. The numbering of this version involved some debate among internal developers.[43] While the PHP 6 Unicode experiment had never been released, several articles and book titles referenced the PHP 6 name, which might have caused confusion if a new release were to reuse the name.[44] After a vote, the name PHP 7 was chosen.[45]</p>
		<h3>PHP 8</h3>
		<p>PHP 8 was released on November 26, 2020. PHP 8 is a major version and has breaking changes from previous versions.</p>
		<h3>PHP 8.1</h3>
		<p>PHP 8.1 was released on November 25, 2021. It included several improvements, such as enumerations (also called "enums"), readonly properties and array unpacking with string keys.[80]</p>
		<hr>
		<h3>Mascot</h3>
		<hr>
		<p>The mascot of the PHP project is the elePHPant, a blue elephant with the PHP logo on its side, designed by Vincent Pontier[179] in 1998.[180] "The (PHP) letters were forming the shape of an elephant if viewed in a sideways angle."[181] The elePHPant is sometimes differently colored when in plush toy form.</p>
		<p>Many variations of this mascot have been made over the years. Only the elePHPants based on the original design by Vincent Pontier are considered official by the community.[182] These are collectible and some of them are extremely rare.[183]</p>
	</div>

</body>
</html>