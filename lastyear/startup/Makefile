###############################################################################
# Student Name    :
# RMIT Student ID :
#
# Startup code provided by Paul Miller for use in "Programming in C",
# study period 4, 2019.
##############################################################################
SOURCES:=action.c line.c linkedlist.c helpers.c fileio.c ui.c main.c
HEADERS:=action.h line.h linkedlist.h shared.h helpers.h fileio.h ui.h main.h
.default:all

build_advice="Please implement me so I can guild your program. You need to \
build each source file separately into a .o file and then link these \
together. Please don't forget to remove this message as it will \
self-destruct upon marking otherwise."

all:
	@echo $(build_advice) | fold -s -w80

archive:
	zip $(USER)-a2 $(SOURCES) $(HEADERS) Makefile readme.txt

