# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    start_services.sh                                  :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: htagrour <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/01/06 15:21:31 by htagrour          #+#    #+#              #
#    Updated: 2020/01/06 16:36:02 by htagrour         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

chown -R mysql: /var/lib/mysql;
supervisord -c /etc/supervisord.conf;