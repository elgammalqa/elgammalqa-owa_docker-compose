FROM ubuntu:xenial

ENV DEBIAN_FRONTEND=noninteractive

# Install basics
RUN apt-get update
RUN apt-get install -y curl git

# Install MySQL

# Install PHP 7.0
RUN apt-get install -y php7.0 php7.0-mysql php7.0-mcrypt php7.0-mbstring php7.0-cli php7.0-gd php7.0-curl php7.0-xml

#WORKDIR /public_html
#COPY run.sh /public_html/
#RUN ["chmod", "+x", "/public_html/run.sh"]
#CMD ["./run.sh"]
#CMD tail -f /dev/null

#COPY ./supervisord.conf /etc/supervisord.conf

#CMD ["/usr/bin/supervisord", "-n"]

CMD /etc/init.d/php7.0-fpm restart && nginx -g "daemon off;"

CMD tail -f /dev/null
