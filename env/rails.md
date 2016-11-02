# Setup Ruby On Rails

## Installing Homebrew

```sh
ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

## Installing Ruby

We're going to use [rbenv](https://github.com/sstephenson/rbenv) to install and manage our Ruby versions.

To do this, run the following commands in your Terminal:

```sh
brew install rbenv ruby-build

# Add rbenv to bash so that it loads every time you open a terminal
echo 'if which rbenv > /dev/null; then eval "$(rbenv init -)"; fi' >> ~/.bash_profile
source ~/.bash_profile

# Install Ruby
rbenv install 2.3.1
rbenv global 2.3.1
ruby -v
```

## Configuring Git

Replace the example name and email address in the following steps with the ones you used for your Github account.

```sh
git config --global color.ui true
git config --global user.name "YOUR NAME"
git config --global user.email "YOUR@EMAIL.com"
ssh-keygen -t rsa -C "YOUR@EMAIL.com"
```

The next step is to take the newly generated SSH key and add it to your Github account. You want to copy and paste the output of the following command and [paste it here](https://github.com/settings/ssh).

```sh
cat ~/.ssh/id_rsa.pub
```

Once you've done this, you can check and see if it worked:

```sh
ssh -T git@github.com
```

You should get a message like this:

```
Hi Elf-mousE! You've successfully authenticated, but GitHub does not provide shell access.
```

## Installing Rails

Installing Rails is as simple as running the following command in your Terminal:

```sh
gem install rails -v 4.2.6
```

Rails is now installed, but in order for us to use the `rails` executable, we need to tell `rbenv` to see it:

```sh
rbenv rehash
```

And now we can verify Rails is installed:

```sh
rails -v
# Rails 4.2.6
```

## Setting Up A Database

### MySQL

```sh
brew install mysql
```

Once this command is finished, it gives you a couple commands to run. Follow the instructions and run them:

```sh
# To have launchd start mysql at login:
ln -sfv /usr/local/opt/mysql/*plist ~/Library/LaunchAgents

# Then to load mysql now:
launchctl load ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist
```

> By default the mysql user is `root` with no password.

### PostgreSQL

```sh
brew install postgresql
```

Once this command is finished, it gives you a couple commands to run. Follow the instructions and run them:

```sh
# To have launchd start postgresql at login:
ln -sfv /usr/local/opt/postgresql/*plist ~/Library/LaunchAgents

# Then to load postgresql now:
launchctl load ~/Library/LaunchAgents/homebrew.mxcl.postgresql.plist
```

> By default the postgresql user is your current OS X username with no password. For example, my OS X user is named `chris` so I can login to postgresql with that username.

## Final Steps

And now for the moment of truth. Let's create your first Rails application:

```sh
rails new myapp

#### If you want to use MySQL
rails new myapp -d mysql

#### If you want to use Postgres
# Note you will need to change config/database.yml's username to be
# the same as your OSX user account. (for example, mine is 'chris')
rails new myapp -d postgresql

# Move into the application directory
cd myapp

# If you setup MySQL or Postgres with a username/password, modify the
# config/database.yml file to contain the username/password that you specified

# Create the database
rake db:create

rails server
```

You can now visit _http://localhost:3000_ to view your new website!

Now that you've got your machine setup, it's time to start building some Rails applications.

If you received an error that said `Access denied for user 'root'@'localhost' (using password: NO)` then you need to update your config/database.yml file to match the database username and password.
