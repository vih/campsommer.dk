[campsommer.dk](http://campsommer.dk)
=====================================

Source code for [campsommer.dk](http://campsommer.dk). 

You can either do:

    phing make
    
And a pear installable package will be created. After that you ftp the file up to the server, and run the following command:

    pear upgrade campsommer-y.x.z.tgz

Make sure that you have a working version of PEAR on the server, and make sure that the *www_dir* is pointing to your web accessible folder:

    pear config-set www_dir /home/[username]/campsommer.dk

Or you can ftp the files directly up. Make sure to check dependencies in build.xml and that the files goes into the correct directories.
