[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/xcl)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/X--Update%20Store-Pending-red)

## ///// — XooNIps 4 :: Base Platform System

![alt text](https://repository-images.githubusercontent.com/347963527/8c04d798-5562-4443-8e55-656298649e6f)


MODULE | XooNIps 4
------------ | -------------
Description | XooNIps is Base Platform module for Package XCL. D3 Module Duplication.
Render Engine | Smarty v2 and XCube Layout
Version | 4.3.2
Author | The XooNIps Project
Author | XooNIps developers
Copyright | 2005-2022 Authors, XooNIps Project, All rights reserved
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 7.2.x
          MySQL 5.6, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.3.+



-----

### Changelog / Test / WIP

**2022.02.27**
- WIP UI by @gigamaster Nuno Luciano (XCL7)
- Test Apache 2.4.+/Debian PHP 7.2.+, MySQL 5.6.+
- XOOPSCube Package XCL 2.3.1
- Install CosmoAPI
- Install XooNIps 4
  1. Fail to update sql
  2. InnoDB, set max 191 (255)
  3. Commented out update - installed successfully
- Tree (new item)
- Add Trust_Path /uploads/xoonips/  
- Remove whitespace (empty space in Smarty vars) 

**Note for next release :**
{something} is a Smarty tag
{ something } is not interpreted by Smarty, for example in Javascript code


**Administration Dashboard** 

- javaScript issues (?) 
- Popin issue (rel= id )
- Fix open groupAdmins

**Settings** 

- populate DB with samples
- Site Policies
- Maximum Disk Space for Private Items [MB] ( differs on front-end edition - 0/2047.9999990463 ? )  
- Only variables should be assigned by reference in class/handler/ItemField.class.php 

**SQL issues**

- if create group Fail to INSERT INTO _xoonips_index Column count doesn't match value count at row 1
- Changed some templates to X-Layout/CSS

TODO
Test on PHP 7.4.+ MySQL 5.7.+ / MariaDB 10.+  
⚡ 🔨 🎨 WIP UI for XCL PHP7
