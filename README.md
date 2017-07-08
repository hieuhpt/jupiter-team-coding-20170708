# jupiter-team-coding-20170708
jupiter-team-coding-20170708

## Run Docker without sudo
Add the docker group if it doesn't already exist:
`sudo groupadd docker`<br>
Add the connected user "$USER" to the docker group:
`sudo gpasswd -a $USER docker`<br>
log out/in or type:
`newgrp docker` <br>
Run `docker ps` :smile:
