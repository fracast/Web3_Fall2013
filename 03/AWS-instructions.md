/////////////////////////////////////
// setting up an AMAZON WEB SERVER //
//       through TERMINAL          //
/////////////////////////////////////

launch instance with right settings on AWS.com

/////////////////////////////////////

cd ~/Desktop (or location of the key)
chmod 0600 ./myKey.pem
ssh ubuntu@whatever.amazonaws.com -i ~/location/myKey.pem

//install apache, user, etc

sudo apt-get update
sudo apt-get upgrade
sudo apt-get install apache2

sudo user add -m [username] //no parenthesis
sudo passwd [username] //no parenthesis

sudo visudo
//add username ALL=(ALL:ALL)ALL
ctrl + O
enter 
ctrl + X

//to check everything went right
// su name
// sudo ls
// ctrl + D

// change port and authentication

sudo nano /etc/ssh/sshd_config
- port 22 -> 30000
- permitRootLogin -> NO
- PasswordAuthentication ->YES
- ctrl + O
- ctrl + X

sudo /etc/init.d/ssh restart
sudo groupadd webadmin
sudo usermod -a -G webadmin root
sudo chown -R root:webadmin/var/www
sudo chmod -R 775 /var/www

////////////////////////////////////
now on our FTP client such as Cyberduck
when opening connection

- SFTP
- AWS address
- user + pwd
- port 30000
- files in var/www


////////////////////////////////////
to reconnect on terminal to the server
ssh [username]@whateverItIs.amazon.aws.com -p 30000