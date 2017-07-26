README FIRST
-----------------------

= Tell a Friend =

It is hard to use the link for "Tell a friend" with multi-byte languages.

Even with sigle-byte language, "mailto:" is not useful in the environments without MUA. eg) Internet Cafe

Thus I've made a module of Form Mail working with a Smarty plugin collaboratively.

After you install this, a visitor can send e-mails to his friends by Form mail when he just click the icon.

USAGE:

- Install this module as usual.

- Check "access rights" by groups admin in TellAFriend's admin

- Copy modifier.xoops_tellafriend.php into class/smarty/plugins/
 (this step can be skipped if you use it for native tellafriend modules)

- Edit the templates with links of "Tell a friend" as follows.
- Or turn "use tellafriend module" on in the preferences of the module which is made as a native with "tellafriend")



NOTE:
For anti-spam, I've made a restriction to send mails per IP or uid.
If you want to change, go to preferences of TellAFriend's admin.



SAMPLES of editing the templates.

[b]news[/b]
news_article.html
[code]
[d]<a target="_top" href="<{$mail_link}>">[/d]
<a target="_top" href="<{$mail_link|xoops_tellafriend}>">
[/code]
news_archive.html
[code]
[d]<a href="<{$story.mail_link}>" target="_top" />[/d]
<a href="<{$story.mail_link|xoops_tellafriend}>" target="_top" />
[/code]

[b]mylinks[/b]
mylinks_link.html
[code]
[d]<a target="_top" href="mailto:?subject=<{$link.mail_subject}>&amp;body=<{$link.mail_body}>">[/d]
<a target="_top" href="<{$link.mail_body|xoops_tellafriend:$link.mail_subject}>">
[/code]

[b]mydownloads[/b]
mydownloads_download.html
[code]
[d]<a target="_top" href="mailto:?subject=<{$down.mail_subject}>&amp;body=<{$down.mail_body}>">[/d]
<a target="_top" href="<{$down.mail_body|xoops_tellafriend:$down.mail_subject}>">
[/code]

[b]Tellafriend native modules (pico, bulletin etc.)[/b]
Go to the preferences, and just turn 'Use tellafriend module' on.

