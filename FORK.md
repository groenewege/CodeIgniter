# forking for a new project

## create local repo

	cd path/to/project
	git init
	touch README.md
	git add .
	git commit -m "first commit"

## checkout boilerplate code

	git remote add boilerplate git@github.com:groenewege/CodeIgniter.git
	git checkout -b boilerplate
	git fetch boilerplate
	git rebase boilerplate/boilerplate
	git checkout master
	git rebase boilerplate
	git submodule init
	git submodule update

## set up private repo

	git remote add origin git@bitbucket.org:groenewege/project.git
	git push origin master

## pull from boilerplate

	git checkout boilerplate
	git pull boilerplate boilerplate
	git checkout master
	git merge boilerplate
	git submodule update
