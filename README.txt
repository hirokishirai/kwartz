.	.=title:	README
.	.?author:	Makoto Kuwata <kwa(at)kuwata-lab.com>
.	.?revision:	$Rev$
.	.?lastupdate:	$Date$
.	
.	
.	
.EN	.$ About Kwartz-php
.JA	��Kwartz-php�ˤĤ���
.	
.EN	  Kwartz-php is a template system which realized the concept
.EN	  'Separation of Presentation Data and Presentation Logic'.
.EN	  It has the following features:
.JA	  Kwartz-php�Ȥϡ��إץ쥼��ơ������ǡ����ȥץ쥼��ơ������
.JA	  ���å���ʬΥ�٤Ȥ�����ǰ��¸������ƥ�ץ졼�ȥ����ƥ�Ǥ���
.JA	  ���Τ褦����ħ������ޤ���
.	
.EN	   .* Separate presentation logics from presentation data
.EN	   .* Runs Very fast
.EN	   .* Multi programing language (PHP, Ruby, Java)
.EN	   .* Auto-Sanitizing and Partially Sanitizing
.EN	   .* Doesn't break HTML design at all
.EN	   .* Can handle any text file
.JA	   .* �ץ쥼��ơ������ǡ�������ץ쥼��ơ��������å���ʬΥ�Ǥ��ޤ���
.JA	   .* ��®��ư��ޤ���
.JA	   .* ʣ���Υץ���ߥ󥰸�����б����ޤ���Ruby, PHP, Java�ˡ�
.JA	   .* ��ư���˥�������ǽ������ޤ���
.JA	   .* HTML�ǥ������ޤä��������ޤ���
.JA	   .* �ɤ�ʼ���Υƥ����ȥե�����Ǥⰷ�����Ȥ��Ǥ��ޤ���
.	
.EN	  See the Users' Guide for details.
.JA	  �ܤ����ϥ桼�����������ɤ�������������
.	
.	
.	
.EN	.$ Installation
.JA	�����󥹥ȡ���
.	
.EN	  Kwartz-php requires PHP 5.
.EN	  You have to install PHP 5 to use Kwartz-php.
.JA	  Kwartz-php�ϡ�PHP 5��ɬ�פȤ��ޤ���
.JA	  Kwartz-php��Ȥ�����PHP 5�򥤥󥹥ȡ��뤷�Ƥ���������
.	
.EN	  The following shows how to install Kwartz-php.
.JA	  ���󥹥ȡ�����ϼ��ΤȤ���Ǥ���
.	
.EN	  .% Installation with PEAR Installer:
.JA	  .% PEAR���󥹥ȡ����Ȥ����
.EN		Just type 'pear install KwartzPHP*.tgz'.
.JA		'pear install KwartzPHP*.tgz' �ȥ����פ�������Ǥ���
.EN		.====================
.EN		$ su -
.EN		# pear install KwartzPHP*.tgz
.EN		.====================
.	
.EN	  .% Manual Installation:
.JA	  .% ��ư�ǥ��󥹥ȡ��뤹����
.EN		Copy library files and command script to proper directories.
.JA		�饤�֥��ե�����ȥ��ޥ�ɥ�����ץȤ�Ŭ�ڤʥǥ��쥯�ȥ��
.JA		���ԡ����Ƥ���������
.		.====================
.EN		### Unarchive the KwartzPHP*.tgz
.JA		### �ե��������ह��
.		$ tar xzf KwartzPHP*.tgz
.		$ cd KwartzPHP*/
.		
.EN		### copy library files
.JA		### �饤�֥��ե�����򥳥ԡ�����
.		$ cp -a Kwartz.php Kwartz /usr/local/lib/php
.		
.EN		### copy command script
.JA		### ���ޥ�ɥ�����ץȤ򥳥ԡ�����
.		$ cp -a kwartz-php mkmethod-php /usr/local/bin
.		.====================
.	
.	
.	
.EN	.$ Announcement
.JA	�����Τ餻
.	
.EN	  .* This project is subsidized by Exploratory Software Project of IPA
.EN	     (Information-Technology Promotion Agency Japan).
.EN	     See http://www.ipa.go.jp/about/english/index.html for IPA.
.JA	  .* �ܥץ������Ȥϡ����������ʵ���(IPA)�ˤ��ʿ��15ǯ��̤Ƨ���եȥ�����
.JA	     ��¤���Ȥλٱ������Ƥ��ޤ���̤Ƨ���եȥ�������¤���ȤˤĤ��Ƥ�
.JA	      http://www.ipa.go.jp/jinzai/esp/ ��������������
.	
.EN	  .* If you have any questions or reports, send a e-mail to 
.EN	     <kwa(at)kuwata-lab.com> with a title starting with '[Kwartz-php]'.
.JA	  .* ������ݡ��Ȥ� <kwa(at)kuwata-lab.com> �ޤǤ��Τ餻����������
.JA	     ���κݡ������ȥ�� '[Kwartz-php]' ������Ƥ���������
.	
.EN	  .* GPL is applied to Kwartz-php Software, but not applied to files
.EN	     which are genereated by Kwartz-php.
.JA	  .* �饤���󥹤ˤ�GPL����Ѥ��Ƥ��ޤ�����GPL��Ŭ�Ѥ����Τ�Kwartz-php
.JA	     ���եȥ��������Ф��ƤǤ��ꡢKwartz-php�����������줿�ե�����ˤ�
.JA	     Ŭ�Ѥ���ޤ���
.	
.	
.	
.EN	.$ Manifest
.JA	���ե����������
.	
.	  .% README.en.txt, README.ja.txt
.EN		Readme file (in English/Japanese).
.JA		Readme�ե�����ʱѸ졢���ܸ��
.		
.	  .% kwartz-php
.EN		Command file
.JA		���ޥ�ɥե�����
.		
.	  .% mkmethod-php
.EN		Utility script to generate PHP function from templates.
.JA		�ƥ�ץ졼�Ȥ���PHP�δؿ�����������桼�ƥ���ƥ���
.		
.	  .% Kwartz.php, Kwartz/*.php
.EN		Library files.
.JA		�饤�֥��ե�����
.		
.	  .% ChangeLog
.EN		Change log
.JA		�ѹ�����
.		
.	  .% doc/users-guide.*.html
.EN		Users' Guide
.JA		�桼������������
.		
.	  .% doc/reference.*.html
.EN		Reference Manual
.JA		��ե���󥹥ޥ˥奢��
.		
.	  .% examples/
.EN		Examples. You have to install Kwartz-php before trying
.EN		these examples.
.JA		����ץ롣Kwartz-php�򥤥󥹥ȡ��뤷�Ƥ���¹Ԥ��Ƥ���������
.		
.	  .% test/
.EN		UnitTest Programs
.JA		��˥åȥƥ��ȥץ����
.		
.	
.	
.EN	.$ License
.JA	���饤����
.	
.	  Copyright (C) 2004 kuwata-lab
.	  All rights reserved.
.	  
.	  This software is under GNU GPL.
.	  
.	  This program is free software; you can redistribute it and/or modify
.	  it under the terms of the GNU General Public License as published by
.	  the Free Software Foundation; either version 2 of the License, or
.	  (at your option) any later version.
.	  
.	  This program is distributed in the hope that it will be useful,
.	  but WITHOUT ANY WARRANTY; without even the implied warranty of
.	  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
.	  GNU General Public License for more details..	
.	
.	
.	
.EN	.$ Special Thanks
.JA	��Special Thanks
.	
.EN	.* Shu-yu Guo - He corrected my English of users' guide. Very Thanks!
.JA	.* Shu-yu Guo - �桼�����������ɤαѸ��ľ���Ƥ���ޤ�����¿�ա�
.	
.#@EOF
