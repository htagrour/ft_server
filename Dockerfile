FROM debian:buster
ADD srcs /
EXPOSE 80 443
RUN bash start.sh
CMD bash start_services.sh
