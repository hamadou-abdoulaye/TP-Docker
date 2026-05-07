FROM ubuntu:22.04
LABEL maintainer="hamadou-abdoulaye"
RUN apt-get update && apt-get install -y net-tools curl apache2
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
