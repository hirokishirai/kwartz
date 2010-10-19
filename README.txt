.	.=title:	README
.	.?author:	Makoto Kuwata <kwa(at)kuwata-lab.com>
.	.?revision:	$Rev$
.	.?lastupdate:	$Date$
.	
.	
.	
.EN	.$ About Kwartz and Kwartz-ruby
.JA	��Kwartz��Kwartz-ruby�ˤĤ���
.	
.EN	  Kwartz is a template system which realized the concept
.EN	  'Separation of Presentation Data and Presentation Logic'.
.EN	  It has the following features:
.JA	  Kwartz�Ȥϡ��إץ쥼��ơ������ǡ����ȥץ쥼��ơ��������å���ʬΥ�٤�
.JA	  ������ǰ��¸������ƥ�ץ졼�ȥ����ƥ�Ǥ���
.JA	  ���Τ褦����ħ������ޤ���
.	
.EN	   .* Separate presentation logics from presentation data
.EN	   .* Multi programing language (Ruby, PHP, and Java)
.EN	   .* Runs Very fast
.EN	   .* Auto-Sanitizing and Partially Sanitizing
.EN	   .* Doesn't break HTML design at all
.EN	   .* Can handle any text file
.JA	   .* �ץ쥼��ơ������ǡ�������ץ쥼��ơ��������å���ʬΥ�Ǥ��ޤ���
.JA	   .* ʣ���Υץ���ߥ󥰸�����б����ޤ���Ruby, PHP, Java�ˡ�
.JA	   .* ��®��ư��ޤ���
.JA	   .* ��ư���˥�������ǽ������ޤ���
.JA	   .* HTML�ǥ������ޤä��������ޤ���
.JA	   .* �ɤ�ʼ���Υƥ����ȥե�����Ǥⰷ�����Ȥ��Ǥ��ޤ���
.	
.EN	  Kwartz-ruby is an implementation of Kwartz in Ruby.
.EN	  Kwartz-php and Kwartz-java are now being developed.
.JA	  Kwartz-ruby�ϡ�Ruby�Ǻ��줿Kwartz�μ����Ǥ���
.JA	  Kwartz-php��Kwartz-java�⸽�߳�ȯ��Ǥ���
.	
.EN	  See the Users' Guide for details.
.JA	  �ܤ����ϥ桼�����������ɤ�������������
.	
.	
.	
.EN	.$ Installation
.JA	�����󥹥ȡ���
.	
.EN	  The following shows how to install Kwartz-ruby.
.JA	  ���󥹥ȡ�����ϼ��ΤȤ���Ǥ���
.	
.		.====================
.EN		### Unarchive the kwartz-ruby-*.tar.gz
.JA		### �ե��������ह��
.		$ tar xjf kwartz-ruby-*.tar.gz
.		$ cd kwartz-ruby-*/
.		
.EN		### Run setup.rb
.JA		### setup.rb��¹Ԥ���
.		$ ruby setup.rb config
.		$ ruby setup.rb setup
.		$ su -
.		# ruby setup.rb install
.		.====================
.	
.	
.	
.EN	.$ Announcement
.JA	�����Τ餻
.	
.EN	  .* This project had subsidized by Exploratory Software Project of IPA
.EN	     (Information-Technology Promotion Agency Japan).
.EN	     See http://www.ipa.go.jp/about/english/index.html for IPA.
.JA	  .* �ܥץ������Ȥϡ����������ʵ���(IPA)�ˤ��ʿ��15ǯ��̤Ƨ���եȥ�����
.JA	     ��¤���Ȥλٱ������ޤ�����̤Ƨ���եȥ�������¤���ȤˤĤ��Ƥ�
.JA	      http://www.ipa.go.jp/jinzai/esp/ ��������������
.	
.EN	  .* If you have any questions or reports, send a e-mail to 
.EN	     <kwa(at)kuwata-lab.com> with a title starting with '[Kwartz-ruby]'.
.JA	  .* ������ݡ��Ȥ� <kwa(at)kuwata-lab.com> �ޤǤ��Τ餻����������
.JA	     ���κݡ������ȥ�� '[Kwartz-ruby]' ������Ƥ���������
.	
.EN	  .* GPL is applied to Kwartz-ruby Software, but not applied to files
.EN	     which are genereated by Kwartz-ruby.
.JA	  .* �饤���󥹤ˤ�GPL����Ѥ��Ƥ��ޤ�����GPL��Ŭ�Ѥ����Τ�Kwartz-ruby
.JA	     ���եȥ��������Ф��ƤǤ��ꡢKwartz-ruby�����������줿�ե�����ˤ�
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
.	  .% bin/kwartz
.EN		Command file
.JA		���ޥ�ɥե�����
.		
.	  .% bin/mkmethod-php
.EN		Utility script to generate PHP function from templates.
.JA		�ƥ�ץ졼�Ȥ���PHP�δؿ�����������桼�ƥ���ƥ���
.		
.	  .% lib/kwartz.rb, lib/kwartz/*
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
.EN		Examples. You have to install Kwartz-ruby before trying
.EN		these examples.
.JA		����ץ롣Kwartz-ruby�򥤥󥹥ȡ��뤷�Ƥ���¹Ԥ��Ƥ���������
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
.	  Copyright (C) 2004-2005 kuwata-lab
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
