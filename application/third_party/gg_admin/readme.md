# gg_admin

An administration package for codeigniter to make a simple CMS.

## installation

Add the package to codeigniter as a submodule.

	git submodule add git@bitbucket.org:groenewege/gg_admin.git application/third_party/gg_admin
	git submodule init
	git submodule update

Make a symbolic link to the controllers.

	cd application/controllers/
	ln -s ../third_party/gg_admin/controllers/admin/ admin

