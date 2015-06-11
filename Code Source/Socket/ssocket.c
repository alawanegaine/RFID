{\rtf1\ansi\ansicpg1252\cocoartf1265\cocoasubrtf210
{\fonttbl\f0\fnil\fcharset0 Consolas;\f1\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;\red38\green38\blue38;\red242\green242\blue242;}
\paperw11900\paperh16840\margl1440\margr1440\vieww25400\viewh14520\viewkind0
\deftab720
\pard\pardeftab720\sl400

\f0\fs24 \cf2 \cb3 #include <sys/types.h>\
#include <sys/socket.h>\
#include <netinet/in.h>\
#include <arpa/inet.h>\
#include <unistd.h>\
#include <stdio.h>\
#include <stdlib.h>\
\
#define INVALID_SOCKET -1\
#define SOCKET_ERROR -1\
\
#define PORT 23\
\
typedef int SOCKET;\
typedef struct sockaddr_in SOCKADDR_IN;\
typedef struct sockaddr SOCKADDR;\
\
int main(void)\
\{\
	int erreur = 0;
\f1\fs26 \
\

\f0\fs24  /* Socket et contexte d'adressage du serveur */\
    	SOCKADDR_IN sin;\
    	SOCKET sock;\
    	socklen_t recsize = sizeof(sin);\
    \
    	/* Socket et contexte d'adressage du client */\
    	SOCKADDR_IN csin;\
    	SOCKET csock;\
    	socklen_t crecsize = sizeof(csin);\
    \
    	int sock_err;
\f1\fs26 \

\f0\fs24 	if(!erreur)\
    \{\
        /* Cr\'e9ation d'une socket */\
        sock = socket(AF_INET, SOCK_STREAM, 0);\
        \
        /* Si la socket est valide */\
        if(sock != INVALID_SOCKET)\
        \{\
            printf("La socket %d est maintenant ouverte en mode TCP/IP\\n", sock);\
            \
            /* Configuration */\
            sin.sin_addr.s_addr = htonl(INADDR_ANY);  /* Adresse IP automatique */\
            sin.sin_family = AF_INET;                 /* Protocole familial (IP) */\
            sin.sin_port = htons(PORT);               /* Listage du port */\
            sock_err = bind(sock, (SOCKADDR*)&sin, recsize);\
            \
            /* Si la socket fonctionne */\
            if(sock_err != SOCKET_ERROR)\
            \{\
                /* D\'e9marrage du listage (mode server) */\
                sock_err = listen(sock, 5);\
                printf("Listage du port %d...\\n", PORT);\
                \
                /* Si la socket fonctionne */\
                if(sock_err != SOCKET_ERROR)\
                \{\
                    /* Attente pendant laquelle le client se connecte */\
                    printf("Patientez pendant que le client se connecte sur le port %d...\\n", PORT);\
                    csock = accept(sock, (SOCKADDR*)&csin, &crecsize);\
                    printf("Un client se connecte avec la socket %d de %s:%d\\n", csock, inet_ntoa(csin.sin_addr), htons(csin.sin_port));\
                \}\
                else\
                    perror("listen");\
            \}\
            else\
                perror("bind");\
            \
            /* Fermeture de la socket client et de la socket serveur */\
            printf("Fermeture de la socket client\\n");\
            close(csock);\
            printf("Fermeture de la socket serveur\\n");\
            close(sock);\
            printf("Fermeture du serveur termin\'e9e\\n");\
        \}\
        else\
            perror("socket");\
\
    \}\
    \
    return EXIT_SUCCESS;\
\}
\f1\fs26 \

\f0\fs24 \
\
\
\
\
\pard\pardeftab720\sl400

\f1\fs26 \cf2 \
}